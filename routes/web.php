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

Route::get('admin', function() {
    return view('admin.year.create');
});

Route::group(['prefix'=>'admin'], function() {
    Route::resource('year', 'YearController');
    // Route::resource('season', 'SeasonController');
    // Route::resource('genre', 'GenreController');
    // Route::resource('keyword', 'KeywordController');
    // Route::resource('producer', 'ProducerController');
    // Route::resource('fansub', 'FansubController');
    // Route::resource('movie', 'MovieController');
});
