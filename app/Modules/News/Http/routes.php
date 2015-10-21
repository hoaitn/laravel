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
    Route::group(['prefix' => 'news'], function() {
        //Index page
        Route::get('/', ['uses' => 'AdminNewsController@index']);
        //Update news information
        Route::match(['get', 'post'],'edit/{id}', ['uses' => 'AdminNewsController@edit'])->where('id', '[0-9]+'); 
        //Create news information
        Route::match(['get', 'post'],'create', ['uses' => 'AdminNewsController@create']);
        //Delete news information
        Route::get('delete/{id}', ['uses' => 'AdminNewsController@delete'])->where('id', '[0-9]+'); 
    });
});

/*
 * Define Frontend Routes
 */
Route::group(['prefix' => 'news'], function() {
    //Index page
    Route::get('/', ['uses' => 'NewsController@index']);
    //Detail page
    Route::get('/{slug}', ['uses' => 'NewsController@detail']);
});
