<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Reaction extends Model
{
    public static function getReactions(string $guid): array
    {
        $reactions = DB::select("CALL video_reactions('$guid')");

        return [
            'useful' => $reactions[0]->upvote,
            'notuseful' => $reactions[0]->downvote
        ];
    }
}
