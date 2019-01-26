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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('games', 'GameController');
Route::resource('creators', 'CreatorController');
Route::resource('genres', 'GenreController');

Route::resource('images', 'ImageController');

Route::post('games.search', 'SearchController@searchGames');
Route::post('creators.search', 'SearchController@searchCreators');
Route::post('genres.search', 'SearchController@searchGenres');