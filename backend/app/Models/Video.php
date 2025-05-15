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

    public static function getRecommendedVideos(string $guid, int $limit): array {
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

    public static function reaction(string $guid, string $userGuid, string $action) {
        $response = DB::select('CALL reaction(?, ?, ?)', [$guid, $userGuid, $action]);
        return $response[0]->message;
    }

    public static function getCategoryVideos(string $guid, int $limit): array {
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

    public static function getCategories(): array {
        $response = DB::select("call get_maincategories()");
        $toReturn = [];

        foreach ($response as $category) {
            $toReturn[] = [
                "guid" => $category->guid,
                "name" => $category->name,
            ];
        }
        return $toReturn;
    }

    public static function searchVideos(string $text, int $limit): array {
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
}
