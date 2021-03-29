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
    return view('LoginRegister.login');
});

Route::get('/login','App\Http\Controllers\Login@index')->name('login.index');

Route::get('/home','App\Http\Controllers\Login@login')->name('login');

Route::get('/register','App\Http\Controllers\Register@index')->name('register.index');

Route::post('/register/submit','App\Http\Controllers\Register@store')->name('register.submit');

Route::get('/home/mobil/sales','App\Http\Controllers\MobilController@index')->name('mobil.index');

Route::get('/home/mobil/sales/store_index','App\Http\Controllers\MobilController@store_index')->name('mobil.store_index');

Route::post('/home/mobil/sales/store','App\Http\Controllers\MobilController@store')->name('mobil.store');

Route::get('/home/mobil/sales/destroy/{id}','App\Http\Controllers\MobilController@destroy')->name('mobil.destroy');

Route::get('/home/mobil/sales/{id}/edit','App\Http\Controllers\MobilController@edit')->name('mobil.edit');

Route::get('/home/mobil/sales/{id}/update','App\Http\Controllers\MobilController@update')->name('mobil.update');

Route::get('/home/penjualan','App\Http\Controllers\PenjualanController@index')->name('penjualan.index');

Route::post('/home/penjualan/store','App\Http\Controllers\PenjualanController@store')->name('penjualan.store');


Route::get('/kirim-email', 'App\Http\Controllers\EmailController@index')->name('kirim_email');




