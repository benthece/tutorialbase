<?php

use App\Http\Controllers\VideoController;
use App\Http\Controllers\VideosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/video/{guid}', [VideoController::class, 'index'])->whereUuid('guid');
Route::get('/all_videos', [VideosController::class, 'index']);
