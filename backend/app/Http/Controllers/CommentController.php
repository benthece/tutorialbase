<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function createComment(Request $request, string $videoGuid): JsonResponse
    {
        $user = Auth::user();
        $response = Comment::createComment($videoGuid, $user->guid, $request->text);

        if ($response) {
            return response()->json(["message" => "Comment successfully created!"]);
        } else {
            return response()->json(["message" => "Unauthorized."], 401);
        }
    }

    public function updateComment(Request $request, string $guid): JsonResponse
    {
        $user = Auth::user();
        $response = Comment::modifyComment($guid, $user->guid, $request->text);

        if ($response == 'success') {
            return response()->json(["message" => "Comment successfully updated!"]);
        } else {
            return response()->json(["message" => $response], 401);
        }
    }

    public function deleteComment(string $guid): JsonResponse
    {
        $user = Auth::user();
        $response = Comment::deleteComment($guid, $user->guid);

        if ($response == 'Comment successfully deleted.') {
            return response()->json(["message" => $response]);
        } else {
            return response()->json(["message" => $response], 401);
        }
    }
}
