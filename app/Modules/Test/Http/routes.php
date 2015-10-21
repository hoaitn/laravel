<?php

/*
  |--------------------------------------------------------------------------
  | Module Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for the module.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the Closure to execute when that URI is requested.
  |
 */

/*
 * Define Admin Routes
 */
Route::group(['prefix' => 'admin'], function() {
    Route::group(['prefix' => 'test'], function() {
        //Index page
        Route::get('/', ['uses' => 'AdminTestController@index']);
        //Update test information
        Route::match(['get', 'post'],'edit/{id}', ['uses' => 'AdminTestController@edit'])->where('id', '[0-9]+'); 
        //Create test information
        Route::match(['get', 'post'],'create', ['uses' => 'AdminTestController@create']);
        //Delete test information
        Route::get('delete/{id}', ['uses' => 'AdminTestController@delete'])->where('id', '[0-9]+'); 
    });
});

/*
 * Define Frontend Routes
 */
Route::group(['prefix' => 'test'], function() {
    //Index page
    Route::get('/', ['uses' => 'TestController@index']);
    //Detail page
    Route::get('/{slug}', ['uses' => 'TestController@detail']);
});
