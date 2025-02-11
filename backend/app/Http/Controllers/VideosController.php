<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

class VideosController extends Controller
{
    public function index(): false|string
    {
        $videos = DB::select('select * from videos');
        return json_encode($videos);
    }
}
