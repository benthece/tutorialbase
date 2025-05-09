<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/video/{guid}', [VideoController::class, 'getVideo'])
    ->whereUuid('guid');
Route::get('/user/{username}', [ProfileController::class, 'getProfile']);

Route::group(['middleware' => 'auth:api'], function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::post('/update-comment/{guid}', [CommentController::class, 'updateComment'])
        ->whereUuid('guid');
});
