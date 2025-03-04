<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request): JsonResponse
    {
        $request->validate([
            'username' => 'required|string|unique:users|max:20|min:4',
            'email' => 'required|string|email|max:50|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        $token = Auth::login($user);

        $user = User::find($user->id);

        return response()->json([
            'status' => 'success',
            'message' => 'User registered successfully',
            'user' => $user->only(['guid', 'username']),
            'token' => $token,
            'type' => 'bearer',
        ]);
    }

    public function login(Request $request): JsonResponse {

        $request->validate([
            'username' => 'required|string|max:20|min:4',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('username', 'password');

        $token = Auth::attempt($credentials);

        if (!$token) {
            return response()->json([
                'status' => 'error',
                'message' => 'Invalid credentials',
            ], 401);
        }

        $user = Auth::user();
        return response()->json([
            'status' => 'success',
            'user' => $user->only(['guid', 'username']),
            'token' => $token,
            'type' => 'bearer',
        ]);
    }

    public function logout(): JsonResponse {
        Auth::logout();

        return response()->json([
            "status" => "success",
            "message" => "Logged out successfully",
        ]);
    }

    public function refresh(): JsonResponse {
        return response()->json([
            "status" => "success",
            "user" => Auth::user()->only(['guid', 'username']),
            "token" => Auth::refresh(),
            "type" => "bearer",
        ]);
    }
}
