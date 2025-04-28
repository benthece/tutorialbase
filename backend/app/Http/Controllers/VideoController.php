<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Reaction;
use App\Models\Video;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function getVideo(string $guid, Request $request): JsonResponse
    {
        if ($request->off != 0) {

            return response()->json([
                "comments" => Comment::getComments($guid, $request->off),
            ]);
        }

        return response()->json([
            "video" => Video::getVideo($guid),
            "reactions" => Reaction::getReactions($guid),
            "comments" => Comment::getComments($guid, 0),
        ]);
    }
}
