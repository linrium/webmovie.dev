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

Route::get('/', [
    'as' => 'home.index',
    'uses' => 'HomeController@index'
]);

Route::get('anime/{id}', [
    'as' => 'page.index',
    'uses' => 'PageController@index'
]);

Route::get('admin', function() {
    return view('admin.year.index');
});

Route::group(['prefix'=>'admin'], function() {
    Route::resource('year', 'YearController');
    Route::resource('season', 'SeasonController');
    Route::resource('genre', 'GenreController');
    Route::resource('keyword', 'KeywordController');
    Route::resource('producer', 'ProducerController');
    Route::resource('fansub', 'FansubController');
    Route::resource('movie', 'MovieController');
    // Route::resource('episode', 'EpisodeController');
    Route::group(['prefix'=>'episode'], function() {
        Route::get('movie/{id}', [
            'as' => 'episode.index',
            'uses' => 'EpisodeController@index'
        ]);
        Route::get('create/{id}', [
            'as' => 'episode.create',
            'uses' => 'EpisodeController@create'
        ]);
        Route::post('', [
            'as' => 'episode.store',
            'uses' => 'EpisodeController@store'
        ]);
        Route::get('{id}', [
            'as' => 'episode.show',
            'uses' => 'EpisodeController@show'
        ]);
        Route::get('{id}/edit', [
            'as' => 'episode.edit',
            'uses' => 'EpisodeController@edit'
        ]);
        Route::put('{id}', [
            'as' => 'episode.update',
            'uses' => 'EpisodeController@update'
        ]);
        Route::delete('{id}', [
            'as' => 'episode.destroy',
            'uses' => 'EpisodeController@destroy'
        ]);
    });
    Route::resource('user', 'UserController');
});

Route::Auth();