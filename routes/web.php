<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TailorController;
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
// Routes google
Auth::routes();
Route::get('auth/google', 'Auth\GoogleController@redirectToGoogle');
Route::get('auth/google/callback', 'Auth\GoogleController@handleGoogleCallback');

// Route home
Route::get('/', 'HomeController@index')->name('home');

// Routes Order
Route::get('order', 'OrderController@show_spec');
Route::post('order', 'OrderController@create_spec');
Route::get('order/{id}', 'OrderController@show');
Route::post('order/{id}', 'OrderController@create');
Route::get('detailorder/{random_code}', 'OrderController@showdetail')->name('detailorder');

// Routes Product/Catalog
Route::get('catalog', 'ProductController@index');
Route::get('product/{id}', 'ProductController@show');

// Routes Profile User
Route::get('profile', 'ProfileController@index');
Route::get('profile/edit', 'ProfileController@edit');
Route::post('profile/edit', 'ProfileController@update');

// Routes Payments (dalam history)
Route::get('/history/payments_{id}', 'PaymentController@show');
Route::post('/history/payments_{id}', 'PaymentController@create');

// Routes History
Route::get('history', 'HistoryController@index');
Route::get('history/{id} ', 'HistoryController@show');
Route::post('history/{id} ', 'HistoryController@destroy')->name('history.destroy');

// Route FAQ
Route::get('/faq', 'FAQController@index')->name('faq');

// Route Tailor
Route::get('/tailor/{tailor}', 'TailorController@show')->name('tailor.show');

/* ---------- Admin --------------  */
    /* ---------- Login/Logout --------------  */
    Route::get('admin/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('admin/logout/', 'Auth\AdminLoginController@logout')->name('admin.logout');

    
    /* ---------- Dashboard --------------  */
    Route::get('/admin', 'Auth\AdminController@index')->name('admin.dashboard');


    /* ---------- Catalog --------------  */ 
    Route::get('/admincatalog', 'Admin\ProductController@index');
    Route::get('/adminviewcatalog/{product}', 'Admin\ProductController@show');  
    Route::get('/adminaddcatalog', 'Admin\ProductController@create');
    Route::post('/admincatalog', 'Admin\ProductController@post');
    Route::get('/admincatalog/edit/{product}', 'Admin\ProductController@edit');
    Route::patch('/admincatalog/{product}', 'Admin\ProductController@update')->name('admincatalog.update');
    Route::delete('/admincatalog/{product}', 'Admin\ProductController@destroy')->name('admincatalog.destroy');
    //Route::get('/adminaddcatalogsuccess', 'Admin\ProductController@catalogaddsuccess'); //Ini file catalognya juga belum ada


    /* ---------- Tailor --------------  */
    Route::get('/admintailor', 'Admin\TailorController@index');
    Route::get('/admintailor/{tailor}', 'Admin\TailorController@show'); 
    Route::get('/adminaddtailor', 'Admin\TailorController@create');
    Route::post('/adminaddtailor', 'Admin\TailorController@post');
    Route::get('/admintailor/edit/{tailor}', 'Admin\TailorController@edit');
    Route::patch('/admintailor/{tailor}', 'Admin\TailorController@update')->name('admintailor.update');
    Route::delete('/admintailor/{tailor}', 'Admin\TailorController@destroy')->name('admintailor.destroy');

    /* ---------- Order --------------  */
    Route::get('/adminorder', 'Admin\OrderController@index');
    Route::get('/adminorder/{order}', 'Admin\OrderController@show');
    Route::patch('/adminorder/{order}', 'Admin\OrderController@update')->name('adminorder.update');
    

    /* ---------- Payment --------------  */
    Route::get('/adminpayment', 'Admin\PaymentController@index');
    Route::get('/adminpayment/{payment}', 'Admin\PaymentController@show');

    /* ---------- FAQ --------------  */
    Route::get('/adminfaq', 'Admin\FAQController@index');
    Route::get('/adminfaq/new', 'Admin\FAQController@create');
    Route::post('/adminfaq/new', 'Admin\FAQController@post');
    Route::get('/adminfaq/edit/{id}', 'Admin\FAQController@edit');
    Route::post('/adminfaq/edit/{id}', 'Admin\FAQController@update');
    Route::delete('/adminfaq/delete/{id} ', 'Admin\FAQController@destroy')->name('adminfaq.destroy');
