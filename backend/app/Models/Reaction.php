<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Reaction extends Model
{
    public static function getReactions(string $guid, string $userGuid): array
    {
        $reactions = DB::select("CALL video_reactions('$guid')");
        if ($userGuid) {
            return [
                'useful' => $reactions[0]->upvote,
                'notuseful' => $reactions[0]->downvote,
                'reactionState' => Video::getReactionState($guid, $userGuid),
            ];
        }
        return [
            'useful' => $reactions[0]->upvote,
            'notuseful' => $reactions[0]->downvote,
            'reactionState' => 'not logged in',
        ];
    }
}
