<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Admin extends Model
{
    public static function isAdmin(string $guid): array
    {
        $response = DB::select('CALL is_admin(?)', [$guid]);
        return ["message" => $response[0]->message];
    }
}
