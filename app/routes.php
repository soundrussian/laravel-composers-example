<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/',          ['as' => 'home',       'uses' => 'PagesController@index']);
Route::get('/about',     ['as' => 'about',      'uses' => 'PagesController@about' ]);
Route::get('/news',      ['as' => 'news.index', 'uses' => 'NewsController@index' ]);
Route::get('/news/{id}', ['as' => 'news.show',  'uses' => 'NewsController@show' ]);
