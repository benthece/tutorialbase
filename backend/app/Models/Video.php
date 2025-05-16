<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Video extends Model
{
    public static function getVideo(string $guid): array
    {
        $video = DB::select("call get_video('" . $guid . "')");

        return [
            "guid" => $video[0]->guid,
            "title" => $video[0]->title,
            "description" => $video[0]->description,
            "category" => $video[0]->category,
            "subcategory" => $video[0]->subcategory,
            "categ_id" => $video[0]->categ_id,
            "subcateg_id" => $video[0]->subcateg_id,
            "url" => env('APP_URL') . ':8000' . $video[0]->url,
            "base_image_url" => env('APP_URL') . ':8000' . $video[0]->base_image_url,
            "views" => $video[0]->views,
            "uploaded_at" => $video[0]->uploaded_at,
            "uploader_id" => $video[0]->uploader_id,
            "uploader" => $video[0]->uploader,
            "uploader_pic" => env('APP_URL') . ':8000' . $video[0]->uploader_pic,
        ];
    }

    public static function getRecommendedVideos(string $guid, int $limit): array
    {
        $response = DB::select("call get_videos_for_category(?, ?)", [$guid, $limit]);
        $toReturn = [];

        foreach ($response as $video) {
            $toReturn[] = [
                "guid" => $video->guid,
                "title" => $video->title,
                "category" => $video->category,
                "subcategory" => $video->subcategory,
                "categ_id" => $video->categ_id,
                "subcateg_id" => $video->subcateg_id,
                "uploader" => $video->username,
                "uploader_pic" => env('APP_URL') . ':8000' . $video->profile_pic_url,
                "url" => env('APP_URL') . ':8000' . $video->url,
                "base_image_url" => env('APP_URL') . ':8000' . $video->base_image_url
            ];
        }
        return $toReturn;
    }

    public static function reaction(string $guid, string $userGuid, string $action)
    {
        $response = DB::select('CALL reaction(?, ?, ?)', [$guid, $userGuid, $action]);
        return $response[0]->message;
    }

    public static function getCategoryVideos(string $guid, int $limit): array
    {
        $response = DB::select("call get_videos_for_category(?, ?)", [$guid, $limit]);
        $toReturn = [];

        foreach ($response as $video) {
            $toReturn[] = [
                "guid" => $video->guid,
                "title" => $video->title,
                "category" => $video->category,
                "subcategory" => $video->subcategory,
                "categ_id" => $video->categ_id,
                "subcateg_id" => $video->subcateg_id,
                "uploader" => $video->username,
                "uploader_pic" => env('APP_URL') . ':8000' . $video->profile_pic_url,
                "url" => env('APP_URL') . ':8000' . $video->url,
                "base_image_url" => env('APP_URL') . ':8000' . $video->base_image_url
            ];
        }

        return $toReturn;
    }

    public static function getCategories(bool $isRandom): array
    {
        $response = DB::select("call get_maincategories(?)", [$isRandom]);
        $toReturn = [];

        foreach ($response as $category) {
            $toReturn[] = [
                "guid" => $category->guid,
                "name" => $category->name,
            ];
        }
        return $toReturn;
    }

    public static function searchVideos(string $text, int $limit): array
    {
        $response = DB::select("call search(?, ?)", [$text, $limit]);
        $toReturn = [];

        foreach ($response as $video) {
            $toReturn[] = [
                "guid" => $video->guid,
                "title" => $video->title,
                "category" => $video->category,
                "subcategory" => $video->subcategory,
                "categ_id" => $video->categ_id,
                "subcateg_id" => $video->subcateg_id,
                "uploader" => $video->username,
                "uploader_pic" => env('APP_URL') . ':8000' . $video->profile_pic_url,
                "description" => $video->description,
                "url" => env('APP_URL') . ':8000' . $video->url,
                "base_image_url" => env('APP_URL') . ':8000' . $video->base_image_url,
                "uploaded_at" => $video->uploaded_at,
            ];
        }
        return $toReturn;
    }

    public static function getMainCategories(bool $isRandom): array
    {
        $response = DB::select("call get_maincategories(?)", [$isRandom]);
        $categories = [];

        foreach ($response as $category) {
            $categories[] = [
                "guid" => $category->guid,
                "name" => $category->name,
            ];
        }
        return $categories;
    }

    public static function getSubCategories(string $mainCatId): array
    {
        $response = DB::select("call get_subcategories_for_main(?)", [$mainCatId]);
        $subcategories = [];

        foreach ($response as $subcategory) {
            $subcategories[] = [
                "guid" => $subcategory->guid,
                "main_name" => $subcategory->main_name,
                "name" => $subcategory->name,
            ];
        }
        return $subcategories;
    }

    public static function getSubcatByMain(string $mainCatId): array
    {
        $response = DB::select("call get_subcategories_for_main(?)", [$mainCatId]);
        $subcategories = [];

        foreach ($response as $subcategory) {
            $subcategories[] = [
                "guid" => $subcategory->guid,
                "name" => $subcategory->name,
            ];
        }
        return $subcategories;
    }

    public static function getReactionState(string $videoGuid, string $userGuid): string
    {
        $response = DB::select("call reaction_state(?, ?)", [$videoGuid, $userGuid]);
        return $response[0]->state;
    }

    public static function getViews(string $videoGuid): string
    {
        $response = DB::select("call get_views(?)", [$videoGuid]);
        return $response[0]->viewcount;
    }

    public static function countView(string $videoGuid, string $userGuid): bool
    {
        $response = DB::select("call count_views(?, ?)", [$videoGuid, $userGuid]);

        return (bool)$response;
    }

    public static function storeVideo(string $path,
                                      string $bgPath,
                                      string $userGuid,
                                      string $title,
                                      string $description,
                                      string $cat_guid,
                                      string $sub_guid): int
    {
        $response = DB::affectingStatement('CALL create_video(?, ?, ?, ?, ?, ?, ?)', [
            $userGuid, $title, $description,
            $cat_guid, $sub_guid, $path, $bgPath
        ]);

        return (int)$response;
    }

    public static function deleteVideo(string $videoGuid, string $userGuid): bool
    {
        return DB::statement('CALL delete_video(?)', [$videoGuid, $userGuid]);
    }
}
