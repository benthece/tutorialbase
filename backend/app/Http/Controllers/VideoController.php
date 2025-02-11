<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VideoController extends Controller
{
    public function index(string $guid): JsonResponse
    {
        $video_data = DB::table('videos')->where('guid', $guid)->first();
        $comments = DB::select("call get_comments(?, ?)", [$guid, 0]);
        $result = [
            'video' => $video_data,
            'comments' => $comments
        ];
        return response()->json($result);
    }
}
