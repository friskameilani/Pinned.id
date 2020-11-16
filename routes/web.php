<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index')->name('home');

Route::get('order', 'OrderController@self_order');
Route::post('order', 'OrderController@self_ordering');

Route::get('order/{id}', 'OrderController@index');
Route::post('order/{id}', 'OrderController@ordering');

Route::get('product/{id}', 'ProductController@index');
Route::get('catalog', 'ProductController@catalog');

Route::get('profile', 'ProfileController@index');
Route::get('profile/edit', 'ProfileController@edit');
Route::post('profile/edit', 'ProfileController@update');

Route::get('history', 'HistoryController@index');
Route::get('history/{id} ', 'HistoryController@detail');
Route::post('history/{id} ', 'HistoryController@destroy')->name('history.destroy');
