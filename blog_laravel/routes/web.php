<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/register', 'AuthController@register');
Route::POST('/welcome', 'AuthController@biodata');
Route::get('/table', 'AuthController@table');
Route::get('/data-table', 'AuthController@data_table');
Route::get('/', 'HomeController@index');

//create data to db
Route::GET('/cast/create', 'CastController@create');
//show all data from db
Route::GET('/cast', 'CastController@index');
//show detail data based on id
Route::GET('/cast/{cast_id}', 'CastController@show');
//edit data
Route::GET('/cast/{cast_id}/edit', 'CastController@edit');
Route::PUT('/cast/{cast_id}', 'CastController@update');
//insert to db
Route::POST('/cast', 'CastController@store');

Route::DELETE('/cast/{cast_id}', 'CastController@destroy');

Route::POST('/genre', 'GenreController@store');
Route::GET('/genre/create', 'GenreController@create');
Route::GET('/genre', 'GenreController@index');
Route::GET('/genre/{genre_id}', 'GenreController@show');
Route::GET('/genre/{genre_id}/edit', 'GenreController@edit');
Route::PUT('/genre/{genre_id}', 'GenreController@update');
Route::DELETE('/genre/{genre_id}', 'GenreController@destroy');

// Route::get('/master', function(){
//     return view('layout.master');
//     });




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
