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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return view('layout.master');
});

// Route::get('/master', function(){
//     return view('adminlte.master');
// });

Route::group(['middleware' => ['auth']], function () {
    Route::resource('/genre', 'GenreController');
});


Route::resource('/profile', 'ProfileController');
Route::resource('/question', 'QuestionController');
Route::resource('/answer', 'AnswerController');
Route::resource('/profile', 'ProfileController');
Auth::routes();


