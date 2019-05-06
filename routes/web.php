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



Route::resource('products','productcontroller');
/*Route::get('/login','RedirectController@login');
	Route::post('/login','RedirectController@loginok');
Route::get('/ok','RedirectController@ok')->name('login.ok');*/





