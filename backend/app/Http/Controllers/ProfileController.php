<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function getProfile($username): JsonResponse
    {
        $response = Profile::getProfileData($username);

        if ($response) return response()->json($response, 200);
        else return response()->json(['message' => 'user not found'], 404);
    }

    public function watchHistory()
    {
        $user = Auth::getUser();

        return response()->json(Profile::getWatchHistory($user->guid), 200);
    }

    public function userUploaded(string $username): JsonResponse
    {
        return response()->json(Profile::getUserUploaded($username), 200);
    }

    public function deleteHistory(Request $request)
    {
        $user = Auth::getUser();
        return response()->json(Profile::deleteHistory($request->videoId, $user->guid), 200);
    }

    public function uploadProfilePicture(Request $request)
    {
        $user = Auth::getUser();

        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $fileName = time() . '.' . $request->file->extension();

        Profile::storeProfPic('/storage/' . $fileName, $user->guid);

        $request->file->storeAs('', $fileName, 'public');
    }

    public function uploadCoverImage(Request $request)
    {
        $user = Auth::getUser();

        $request->validate([
            'cover_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $fileName = time() . '.' . $request->cover_image->extension();

        Profile::storeCovImg('/storage/' . $fileName, $user->guid);

        $request->cover_image->storeAs('', $fileName, 'public');
    }

    public function updateBio(Request $request)
    {
        $user = Auth::user();
        return response()->json(Profile::updateBio($request->bioText, $user->guid));
    }

    public function deleteUser()
    {
        $user = Auth::user();
        return response()->json(Profile::deleteUser($user->guid));
    }
}
