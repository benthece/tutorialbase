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
        $user = Auth::user();

        if ($request->off != 0) {

            return response()->json([
                "comments" => Comment::getComments($guid, $request->off),
            ]);
        }

        if ($user) {
            Video::countView($guid, $user->guid);

            return response()->json([
                "video" => Video::getVideo($guid),
                "reactions" => Reaction::getReactions($guid, $user->guid),
                "views" => Video::getViews($guid),
                "comments" => Comment::getComments($guid, 0),
            ]);
        }

        Video::countView($guid, "");

        return response()->json([
            "video" => Video::getVideo($guid),
            "reactions" => Reaction::getReactions($guid, ''),
            "views" => Video::getViews($guid),
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

    public function getHomePage(): JsonResponse {
        $toReturn = [];
        $categories = Video::getCategories(true);

        foreach ($categories as $category) {
            $toReturn[] = [
                "id" => $category["guid"],
                "name" => $category["name"],
                "videos" => Video::getCategoryVideos($category["guid"], 10)
            ];
        }

        return response()->json($toReturn);
    }

    public function search(Request $request): JsonResponse {
        return response()->json(Video::searchVideos(strtolower("%$request->text%"), $request->limit));
    }

    public function getCategories(): JsonResponse
    {
        $mainCategories = Video::getCategories(false);
        $categories = [];

        foreach ($mainCategories as $category) {
            $categories[] = [
                "guid" => $category["guid"],
                "name" => $category["name"],
            ];
        }
        return response()->json($categories);
    }

    public function getSubcategories(string $guid): JsonResponse {
        $subcategs = Video::getSubCategories($guid);
        $subcategories = [];
        foreach ($subcategs as $subcategory) {
            $subcategories[] = [
                "subcategory_name" => $subcategory["name"],
                "videos" => Video::getCategoryVideos($subcategory["guid"], 10)
            ];
        }
        return response()->json([
            "maincategory_name" => $subcategs[0]["main_name"],
            "subcategories" => $subcategories
        ]);
    }

    public function getSubcatFromMain(string $guid) {
        $subcategories = Video::getSubcatByMain($guid);
        return response()->json($subcategories);
    }
}
