<?php

use Illuminate\Http\Request;


Route::post('auth/login', 'Api\AuthController@login');
Route::post('auth/refresh' , 'Api\AuthController@refresh');
Route::get('auth/logout' , 'Api\AuthController@logout');

Route::group(['middleware' => 'jwt.auth', 'namespace' => 'Api\\'], function() {
    Route::get('auth/me', 'AuthController@me');
});