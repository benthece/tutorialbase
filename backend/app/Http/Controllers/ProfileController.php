<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function getProfile($username): JsonResponse {
        $response = Profile::getProfileData($username);

        if ($response) return response()->json($response, 200);
        else return response()->json(['message' => 'user not found'], 404);
    }
}
