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

Route::get('/confirm_payment', 'PaymentController@index');
Route::post('/confirm_payment', 'PaymentController@create');

Route::get('/faq', 'FAQController@index')->name('faq');

Route::get('history', 'HistoryController@index');
Route::get('history/{id} ', 'HistoryController@detail');
Route::post('history/{id} ', 'HistoryController@destroy')->name('history.destroy');



/* ---------- Admin --------------  */
    /* ---------- Login/Logout --------------  */
    Route::get('admin/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('admin/logout/', 'Auth\AdminLoginController@logout')->name('admin.logout');

    
    /* ---------- Dashboard --------------  */
    Route::get('/admin', 'Auth\AdminController@index')->name('admin.dashboard');


    /* ---------- Catalog --------------  */ 
    Route::get('/admincatalog', 'AdminController@catalog'); //Ini file catalognya belum ada
    Route::get('/adminviewcatalog', 'AdminController@catalogview'); //Ini file catalognya juga belum ada
    Route::get('/admineditcatalog', 'AdminController@catalogedit');
    Route::get('/adminaddcatalog', 'AdminController@catalogadd');
    Route::get('/adminaddcatalogsuccess', 'AdminController@catalogaddsuccess'); //Ini file catalognya juga belum ada


    /* ---------- Tailor --------------  */
    Route::get('/admintailor', 'TailorController@index');
    Route::get('/admintailor/{tailor}', 'TailorController@showtailor');
    Route::get('/admintailor/{tailor}/edit', 'TailorController@edit');
    Route::patch('/admintailor/{tailor}', 'TailorController@postedit');
    Route::delete('/admintailor/{tailor}', 'TailorController@delete');
    Route::get('/adminaddtailor', 'TailorController@createtailor');
    Route::post('/adminaddtailor', 'TailorController@posttailor');

    Route::get('/adminaddtailorsuccess', function () {
        return view('admin/tailor/addsuccess');
    });

    /* ---------- Order --------------  */
    Route::get('//adminorder', 'AdminController@order');
    