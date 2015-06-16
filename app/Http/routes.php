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
// Route::get('home', 'HomeController@index', ['middleware' => 'auth']);

// Route::group(['prefix' => 'en',
// // 'where'			=> ['locale' => '^$|[a-z]+'],
// ], function () {

Route::get('/', 'WelcomeController@index');

/*======================================
=            Authentication            =
======================================*/

Route::controllers(array(
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
));

/*================================
=            BACKEND            =
================================*/

Route::get('dashboard', array(
    'uses' => 'Backend\DashboardController@index',
    'as' => 'backend.dashboard.index',
    'middleware' => 'auth'
));

Route::get('dashboard/create', array(
    'uses' => 'Backend\DashboardController@create',
    'as' => 'backend.dashboard.create',
    'middleware' => 'auth'
));

/**
 * UserController
 */
Route::get('user', array(
    'uses' => 'Backend\UserController@index',
    'as' => 'backend.user.index',
    'middleware' => 'auth'
));

Route::get('user/list', array(
    'uses' => 'Backend\UserController@all',
    'as' => 'backend.user.all',
    'middleware' => 'auth'
));

Route::post('user/change_block_status', array(
    'uses' => 'Backend\UserController@changeBlockStatus',
    'as' => 'backend.user.block',
    'middleware' => 'auth'
));
// });

/*================================
=            FRONTEND            =
================================*/

Route::controllers(array(
    'profile' => 'Frontend\ProfileController',
));
