<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Comment extends Model
{
    public static function getComments(string $video_guid, int $offset): array
    {
        $comments = DB::select("call get_comments(?, ?)", [$video_guid, $offset]);
        $result = [];

        foreach ($comments as $comment) {
            $result[] = [
                "guid" => $comment->guid,
                "username" => $comment->username,
                "user_guid" => $comment->user_guid,
                "user_pic" => $comment->user_pic,
                "text" => $comment->text,
                "created_at" => $comment->created_at,
                "modified_at" => $comment->modified_at,
            ];
        }
        return $result;
    }
}
