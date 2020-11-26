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

Auth::routes();
Route::get('auth/google', 'Auth\GoogleController@redirectToGoogle');
Route::get('auth/google/callback', 'Auth\GoogleController@handleGoogleCallback');

Route::get('/', 'HomeController@index')->name('home');

Route::get('order', 'OrderController@self_order');
Route::post('order', 'OrderController@self_ordering');

Route::get('order/{id}', 'OrderController@index');
Route::post('order/{id}', 'OrderController@ordering');

Route::get('detailorder/{random_code}', 'OrderController@showdetailorder')->name('detailorder');

Route::get('product/{id}', 'ProductController@index');
Route::get('catalog', 'ProductController@catalog');

Route::get('profile', 'ProfileController@index');
Route::get('profile/edit', 'ProfileController@edit');
Route::post('profile/edit', 'ProfileController@update');

Route::get('/history/payments_{id}', 'PaymentController@index');
Route::post('/history/payments_{id}', 'PaymentController@create');

Route::get('/faq', 'FAQController@index')->name('faq');

Route::get('history', 'HistoryController@index');
Route::get('history/{id} ', 'HistoryController@detail');
Route::post('history/{id} ', 'HistoryController@destroy')->name('history.destroy');

Route::get('/tailor/{tailor}', 'TailorController@showtailor')->name('tailor.show');

/* ---------- Admin --------------  */
    /* ---------- Login/Logout --------------  */
    Route::get('admin/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('admin/logout/', 'Auth\AdminLoginController@logout')->name('admin.logout');

    
    /* ---------- Dashboard --------------  */
    Route::get('/admin', 'Auth\AdminController@index')->name('admin.dashboard');


    /* ---------- Catalog --------------  */ 
    
    /* Route::get('/adminviewcatalog', 'Admin\ProductController@catalogview'); //Ini file catalognya juga belum ada */
    /* Route::get('/admineditcatalog', 'Admin\ProductController@catalogedit'); */
    Route::get('/adminaddcatalog', 'Admin\ProductController@catalogadd');
    Route::get('/adminaddcatalogsuccess', 'Admin\ProductController@catalogaddsuccess'); //Ini file catalognya juga belum ada


    /* ---------- Tailor --------------  */
    Route::get('/admintailor', 'Admin\TailorController@index');
    Route::get('/admintailor/{tailor}', 'Admin\TailorController@showtailor'); //ini file blm ada
    Route::get('/admintailor/{tailor}/edit', 'Admin\TailorController@edit');
    Route::patch('/admintailor/{tailor}', 'Admin\TailorController@postedit');
    Route::delete('/admintailor/{tailor}', 'Admin\TailorController@delete');
    Route::get('/adminaddtailor', 'Admin\TailorController@createtailor');
    Route::post('/adminaddtailor', 'Admin\TailorController@posttailor');

    /* ---------- Order --------------  */
    Route::get('/adminorder', 'Admin\OrderController@allorder');
    

    /* ---------- Payment --------------  */
    Route::get('/adminpayment', 'Admin\PaymentController@allpayments');


    Route::get('/admincatalog', function () {
        return view('/admin/catalog/catalog');
    });

    Route::get('/adminviewcatalog', function () {
        return view('/admin/catalog/view');
    });

    Route::get('/admineditcatalog', function () {
        return view('/admin/catalog/edit');
    });