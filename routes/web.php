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

Route::get('/', 'PagesController@welcome')->name('index');

Route::prefix('api')->group(function () {
	Route::resource('categories', 'CategoryController');
});

Auth::routes();

Route::get('/home', 'PagesController@index')->name('home');

Route::get("{any}", 'PagesController@welcome')->where("any", "^((?!api).)*$");
