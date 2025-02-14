<?php

namespace App\Http\Controllers;



use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class VideosController extends Controller
{
    public function index(): Response
    {
        $videos = DB::select('select * from videos');

        return response($videos, ResponseAlias::HTTP_OK)
            ->header('Content-Type', 'application/json')
            ->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-Allow-Methods', '*')
            ->header('Access-Control-Allow-Headers', '*');
    }
}
