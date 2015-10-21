<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */
Route::get('/', 'IndexController@index');
Route::get('/home', 'IndexController@index');
/*
  |--------------------------------------------------------------------------
  | Authentication
  |--------------------------------------------------------------------------
 */
// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
/*
  |--------------------------------------------------------------------------
  | Backend
  |--------------------------------------------------------------------------
 */
Route::group(['prefix' => 'admin'], function () {
    //Admin User
    Route::get('users', 'User\Backend\UserController@index');
    Route::get('users/create', 'User\Backend\UserController@create');
    Route::get('users/profile/{id}', 'User\Backend\UserController@profile', ['middleware' => 'auth'])->where('id', '[0-9]+');
    Route::get('users/edit/{id}', 'User\Backend\UserController@update', ['middleware' => 'auth'])->where('id', '[0-9]+');
    //Admin dashboard
    Route::get('/', 'Dashboard\Admin\DashboardController@index');
    Route::get('dashboard', 'Dashboard\Admin\DashboardController@index');
    //Generate Module    
    Route::match(['get', 'post'],'/generate-module', 'Dashboard\Admin\DashboardController@generateModule');
    Route::group(['prefix' => 'categories'], function() {    
    });
});
/*
  |--------------------------------------------------------------------------
  | Frontend
  |--------------------------------------------------------------------------
 */
Route::group(['prefix' => 'user'], function () {
    Route::get('/', 'User\Frontend\UserController@index');
    Route::get('/profile/{id}', 'User\Frontend\UserController@profile')->where('id', '[0-9]+');
});


