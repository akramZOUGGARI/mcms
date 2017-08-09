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

// admin

Route::resource('items', 'ItemController');
Route::resource('create', 'create@ItemController');
Route::resource('{id}/edit', 'edit@ItemController');

// public

Route::get('/', ['uses'=>'ItemController@all']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
