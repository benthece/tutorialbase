<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function getProfile($username): JsonResponse {
        $response = Profile::getProfileData($username);

        if ($response) return response()->json($response, 200);
        else return response()->json(['message' => 'user not found'], 404);
    }

    public function watchHistory() {
        $user = Auth::getUser();

        return response()->json(Profile::getWatchHistory($user->guid), 200);
    }

    public function userUploaded(string $username): JsonResponse {
        return response()->json(Profile::getUserUploaded($username), 200);
    }
}
