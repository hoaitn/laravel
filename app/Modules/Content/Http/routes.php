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
    Route::group(['prefix' => 'content'], function() {
        //Index page
        Route::get('/', ['uses' => 'AdminContentController@index']);
        //Update content information
        Route::match(['get', 'post'],'edit/{id}', ['uses' => 'AdminContentController@edit'])->where('id', '[0-9]+'); 
        //Create content information
        Route::match(['get', 'post'],'create', ['uses' => 'AdminContentController@create']);
        //Delete content information
        Route::get('delete/{id}', ['uses' => 'AdminContentController@delete'])->where('id', '[0-9]+'); 
    });
});

/*
 * Define Frontend Routes
 */
Route::group(['prefix' => 'content'], function() {
    //Index page
    Route::get('/', ['uses' => 'ContentController@index']);
    //Detail page
    Route::get('/{slug}', ['uses' => 'ContentController@detail']);
});
