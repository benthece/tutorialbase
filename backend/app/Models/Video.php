<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Uid\UuidV8;

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
}
