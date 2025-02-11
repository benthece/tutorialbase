<?php

use App\Http\Controllers\VideoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:api'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/video/{guid}', [VideoController::class, 'index'])->whereUuid('guid');
