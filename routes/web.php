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
    return view('flyers.index');
});


Route::resource('flyers','FlyersController');
Route::get('{post_code}/{street}', 'FlyersController@show');
Route::post('{post_code}/{street}/photos', 'PhotosController@store');
Auth::routes();

Route::delete('photos/{id}', 'PhotosController@destroy');
