<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {

});

Route::post('/login', 'AuthController@login');
Route::post('/register', 'AuthController@register');
