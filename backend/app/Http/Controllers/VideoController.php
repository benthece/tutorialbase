<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Video;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function getVideo(string $guid, int $offset): JsonResponse
    {
        if ($offset) {

            return response()->json([
                "comments" => Comment::getComments($guid, $offset),
            ]);
        }

        return response()->json([
            "video" => Video::getVideo($guid),
            "comments" => Comment::getComments($guid, 0),
        ]);
    }
}
