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
    return view('pages.home');
});


Route::resource('flyers','FlyersController');
Route::get('{post_code}/{street}', 'FlyersController@show');
Auth::routes();

Route::get('/home', 'HomeController@index');
