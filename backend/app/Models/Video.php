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
            "url" => $video[0]->url,
            "base_image_url" => $video[0]->base_image_url,
            "views" => $video[0]->views,
            "uploaded_at" => $video[0]->uploaded_at,
            "uploader_id" => $video[0]->uploader_id,
            "uploader" => $video[0]->uploader,
            "uploader_pic" => $video[0]->uploader_pic,
        ];
    }

    public static function getRecommendedVideos(string $guid, int $limit): array {
        $response = DB::select("call get_videos_for_subcategory(?, ?)", [$guid, $limit]);

        return [
            "id" => $response[0]->guid,
            "title" => $response[0]->title,
            "uploaderName" => $response[0]->username,
            "uploaderProfilePicture" => $response[0]->profile_pic_url,
            "url" => $response[0]->url,
            "thumbnail" => $response[0]->base_image_url,
        ];
    }

    public static function reaction(string $guid, string $userGuid, string $action) {
        $response = DB::select('CALL reaction(?, ?, ?)', [$guid, $userGuid, $action]);
        return $response[0]->message;
    }

    public static function getHomepageVideos(): array {
        $response = DB::select("call ", [$guid]);
    }
}
