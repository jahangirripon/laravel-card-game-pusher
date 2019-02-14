<?php

use App\User;

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
Route::middleware('auth')->name('card')->get('/cards/{card}', 'CardController@show');

Route::get('/pusher', function() {
    $push = event(new App\Events\ScoreUpdated(1));
    return $push;
});

Route::get('/home', 'HomeController@index')->name('home');
