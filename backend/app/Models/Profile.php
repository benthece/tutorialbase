<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Profile extends Model
{
    public static function getProfileData(string $username): array|bool
    {
        $profile = DB::select('CALL get_profile_data(?)', [$username]);

        if ($profile) {
            return [
                'username' => $profile[0]->username,
                'profilePicture' => env('APP_URL') . ':8000' . $profile[0]->profile_pic_url,
                'profileThumbnail' => env('APP_URL') . ':8000' . $profile[0]->bg_image_url,
                'bio' => $profile[0]->bio,
            ];
        } else return false;
    }

    public static function getWatchHistory(string $guid): array|bool
    {
        $response = DB::select('CALL watch_history(?)', [$guid]);
        $videos = [];

        if ($response) {
            foreach ($response as $video) {
                $videos[] = [
                    "guid" => $video->guid,
                    "title" => $video->title,
                    "uploader" => $video->username,
                    "uploader_pic" => env('APP_URL') . ':8000' . $video->profile_pic_url,
                    "description" => $video->description,
                    "base_image_url" => env('APP_URL') . ':8000' . $video->base_image_url,
                    "uploaded_at" => $video->uploaded_at,
                ];
            }
        } else return false;
        return $videos;
    }

    public static function getUserUploaded(string $username): array|bool
    {
        $response = DB::select('CALL get_user_uploaded(?)', [$username]);
        $videos = [];

        if ($response) {
            foreach ($response as $video) {
                $videos[] = [
                    "guid" => $video->guid,
                    "title" => $video->title,
                    "uploader" => $video->username,
                    "uploader_pic" => env('APP_URL') . ':8000' . $video->profile_pic_url,
                    "base_image_url" => env('APP_URL') . ':8000' . $video->base_image_url,
                ];
            }
        } else return false;
        return $videos;
    }

    public static function deleteHistory(string $vidGuid, string $userGuid): bool
    {
        return (bool)DB::delete('CALL delete_watch_history(?, ?)', [$vidGuid, $userGuid]);
    }

    public static function storeProfPic(string $path, string $userGuid): bool
    {
        return DB::statement('CALL store_prof_pic(?, ?)', [$path, $userGuid]);
    }

    public static function storeCovImg(string $path, string $userGuid): bool
    {
        return DB::statement('CALL store_cover_img(?, ?)', [$path, $userGuid]);
    }

    public static function updateBio(string $bio, string $userGuid): bool
    {
        return DB::statement('CALL update_bio(?, ?)', [$userGuid, $bio]);
    }

    public static function deleteUser(string $guid): bool
    {
        return DB::statement('CALL delete_user(?)', [$guid]);
    }
}
