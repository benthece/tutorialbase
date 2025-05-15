<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/video/{guid}', [VideoController::class, 'getVideo'])
    ->whereUuid('guid');
Route::get('/user/{username}', [ProfileController::class, 'getProfile']);
Route::get('/videos/recommended/{guid}', [VideoController::class, 'getRecommended']);
Route::get('/videos/category', [VideoController::class, 'getCategory']);
Route::get('/videos/subcategory', [VideoController::class, 'getCategory']);
Route::get('/home', [VideoController::class, 'getHomePage']);
Route::get('/search', [VideoController::class, 'search']);
Route::get('/user/uploaded/{username}', [ProfileController::class, 'userUploaded']);
Route::get('/maincategories', [VideoController::class, 'getCategories']);
Route::get('/subcategories/{guid}', [VideoController::class, 'getSubcategories']);
Route::get('/categories/{guid}', [VideoController::class, 'getSubcatFromMain']);

Route::group(['middleware' => 'auth:api'], function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::post('/update-comment/{guid}', [CommentController::class, 'updateComment'])
        ->whereUuid('guid');
    Route::post('/create-comment/{videoGuid}', [CommentController::class, 'createComment'])
        ->whereUuid('videoGuid');
    Route::post('/delete-comment/{guid}', [CommentController::class, 'deleteComment'])
        ->whereUuid('guid');
    Route::post('/reaction/{guid}', [VideoController::class, 'reaction'])
        ->whereUuid('guid');
    Route::post('/user/is_admin', [AdminController::class, 'isAdmin']);
    Route::post('/user/info', [UserController::class, 'getInfo']);
    Route::post('/user/watch_history', [ProfileController::class, 'watchHistory']);
    Route::post('/user/delete_history_item', [ProfileController::class, 'deleteHistory']);
    Route::post('/user/upload_profile_pic', [ProfileController::class, 'uploadProfilePicture']);
});
