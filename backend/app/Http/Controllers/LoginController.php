<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function userLogin(Request $request): JsonResponse
    {
        $credentials = $request->only('username', 'password');
        $db_response = User::login($credentials);
        $status = null;
        $result = [];

        switch ($db_response) {
            case "up":
                $status = 200;
                $result[] = ["message" => "Login successful."];
                break;
            case "un":
                $status = 401;
                $result[] = ["message" => "Invalid password."];
                break;
            case "nn":
                $status = 404;
                $result[] = ["message" => "User not found."];
                break;
        }

        return response()->json($result, $status)
            ->header('Content-Type', 'application/json')
            ->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-Allow-Methods', '*')
            ->header('Access-Control-Allow-Headers', '*')
        ;
    }
}
