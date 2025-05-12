<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Profile extends Model
{
    public static function getProfileData(string $username): array | bool {
        $profile = DB::select('CALL get_profile_data(?)', [$username]);

        if ($profile) {
            return [
                'username' => $profile[0]->username,
                'profilePicture' => $profile[0]->profile_pic_url,
                'profileThumbnail' => $profile[0]-> bg_image_url,
                'bio' => $profile[0]->bio,
            ];
        } else return false;
    }
}
