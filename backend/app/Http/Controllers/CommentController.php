<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function updateComment(Request $request, string $guid) {
        $user = Auth::user();
        return response()->json(Comment::modifyComment($guid, $user->guid, $request->text));
    }
}
