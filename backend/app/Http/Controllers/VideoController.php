<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Reaction;
use App\Models\Video;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function getRecommended(Request $request, string $guid): JsonResponse {
        return response()->json(Video::getRecommendedVideos($guid, $request->limit));
    }

    public function reaction(string $guid, Request $request): JsonResponse {
        $user = Auth::user();
        $response = Video::reaction($guid, $user->guid, $request->action);

        return response()->json(["message" => $response]);
    }

    public function getCategory(Request $request): JsonResponse {
        return response()->json(Video::getCategoryVideos($request->categoryId, $request->limit));
    }
}
