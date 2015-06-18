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
/*
|--------------------------------------------------------------------------
| Authentication
|--------------------------------------------------------------------------
*/
Route::controllers(array(
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
));
/*
|--------------------------------------------------------------------------
| Backend
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin'], function () {  
    //Admin User
    Route::get('users','User\Backend\UserController@index');
    //Admin dashboard
    Route::get('dashboard','Dashboard\Admin\DashboardController@index');
});
/*
|--------------------------------------------------------------------------
| Frontend
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'user'], function () {  
    Route::get('/','User\Frontend\UserController@index');
    Route::get('/profile/{id}','User\Frontend\UserController@profile')->where('id', '[0-9]+');
});
