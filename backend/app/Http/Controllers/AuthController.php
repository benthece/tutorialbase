<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
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

    public function login(Request $request): JsonResponse
    {
        $credentials = $request->only('username', 'password');

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

    public function register(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }

        $user = User::create([
            'name' => $request->get('username'),
            'email' => $request->get('email'),
            'password' => $request->get('password'),
        ]);

        $token = JWTAuth::fromUser($user);

        return response()->json(compact('user','token'), 201);
    }
}
