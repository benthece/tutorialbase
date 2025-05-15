<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getInfo() {
        $userData = Auth::getUser();
        return response()->json([
            "username" => $userData->username,
            "profilePicture" => env('APP_URL') . ':8000' . $userData->profile_pic_url,
            "profileThumbnail" => $userData->base_image_url,
            "bio" => $userData->bio,
        ])->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-Allow-Methods', 'POST');
    }
}
