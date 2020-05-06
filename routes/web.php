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

Route::get('/hello', function() {
    echo "Hello World!";
});

Route::get('/series', 'SeriesController@index')->name('list_series');
Route::get('/series/create', 'SeriesController@create')->name('create_serie_form');
Route::post('/series/create', 'SeriesController@store');
Route::delete('/series/remove/{id}', 'SeriesController@destroy');
