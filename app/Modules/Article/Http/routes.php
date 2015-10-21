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
    Route::group(['prefix' => 'article'], function() {
        //Index page
        Route::get('/', ['uses' => 'AdminArticleController@index']);
        //Update article information
        Route::match(['get', 'post'],'edit/{id}', ['uses' => 'AdminArticleController@edit'])->where('id', '[0-9]+'); 
        //Create article information
        Route::match(['get', 'post'],'create', ['uses' => 'AdminArticleController@create']);
        //Delete article information
        Route::get('delete/{id}', ['uses' => 'AdminArticleController@delete'])->where('id', '[0-9]+'); 
    });
});

/*
 * Define Frontend Routes
 */
Route::group(['prefix' => 'article'], function() {
    //Index page
    Route::get('/', ['uses' => 'ArticleController@index']);
    //Detail page
    Route::get('/{slug}', ['uses' => 'ArticleController@detail']);
});
