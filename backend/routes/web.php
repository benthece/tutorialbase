<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\VideosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/video/{guid}', [VideoController::class, 'index'])->whereUuid('guid');
Route::get('/all_videos', [VideosController::class, 'index']);
Route::post('/login', [LoginController::class, 'userLogin'])->withoutMiddleware(['auth']);
