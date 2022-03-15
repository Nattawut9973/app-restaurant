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
    return view('home');
});

Route::get('create','HistoryController@create')->name('create');
Route::post('store','HistoryController@store')->name('store');
Route::post('contact','ContactController@sendMessage')->name('contact');
Route::get('result','HistoryController@store')->name('result');
