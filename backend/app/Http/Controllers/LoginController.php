<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

class LoginController extends Controller
{
    public function userLogin(Request $request): JsonResponse
    {
        $validated = $request->validate([
            "username" => "required|string|max:20",
            "password" => "required|string"
        ]);

        $db_response = User::login($validated);
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

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        try {
            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'Invalid credentials'], 401);
            }

            // Get the authenticated user.
            $user = auth()->user();

            // (optional) Attach the role to the token.
            $token = JWTAuth::claims(['role' => $user->role])->fromUser($user);

            return response()->json(compact('token'));
        } catch (JWTException $e) {
            return response()->json(['error' => 'Could not create token'], 500);
        }
    }
}
