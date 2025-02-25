<?php

use Illuminate\Support\Facades\Route;

Route::post('/register', 'AuthController@register');

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {

});
