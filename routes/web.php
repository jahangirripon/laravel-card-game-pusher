<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::middleware('auth')->name('card')->get('/cards/{card}', 'CardController@show');
Route::get('/leaderboard', 'CardController@leaderboard');

Route::get('/home', 'HomeController@index')->name('home');

