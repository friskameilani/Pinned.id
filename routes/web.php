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

Route::get('/faq', 'FAQController@index')->name('faq');

Route::get('history', 'HistoryController@index');
Route::get('history/{id} ', 'HistoryController@detail');
Route::post('history/{id} ', 'HistoryController@destroy')->name('history.destroy');



/* ---------- Admin --------------  */

    /* ---------- Dashboard --------------  */
    Route::get('/admindashboard', function () {
        return view('admin/dashboard');
    });

    /* ---------- Catalog --------------  */
    Route::get('/admincatalog', function () {
        return view('admin/catalog/catalog');
    });

    Route::get('/adminviewcatalog', function () {
        return view('admin/catalog/view');
    });

    Route::get('/admineditcatalog', function () {
        return view('admin/catalog/edit');
    });

    Route::get('/adminaddcatalog', function () {
        return view('admin/catalog/add');
    });

    Route::get('/adminaddcatalogsuccess', function () {
        return view('admin/catalog/addsuccess');
    });

    /* ---------- Tailor --------------  */
    Route::get('/admintailor', function () {
        return view('admin/tailor/tailor');
    });

    Route::get('/adminviewtailor', function () {
        return view('admin/tailor/view');
    });

    Route::get('/adminedittailor', function () {
        return view('admin/tailor/edit');
    });

    Route::get('/adminaddtailor', function () {
        return view('admin/tailor/add');
    });

    Route::get('/adminaddtailorsuccess', function () {
        return view('admin/tailor/addsuccess');
    });

    /* ---------- Order --------------  */
    Route::get('/adminorder', function () {
        return view('admin/order/view');
    });

