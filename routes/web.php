<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'  => 'admin/'],function(){
    Route::get('/','Admin\DashboardController@index')->name('admin.dashboard');
});

Route::group(['prefix'  => 'admin/kategori'],function(){
    Route::get('/','Admin\KategoriController@index')->name('admin.kategori');
    Route::post('/','Admin\KategoriController@post')->name('admin.kategori.post');
    Route::delete('/delete','Admin\KategoriController@delete')->name('admin.kategori.delete');
    Route::patch('/{id}/aktifkan_status','Admin\KategoriController@aktifkanStatus')->name('admin.kategori.aktifkan_status');
    Route::patch('/{id}/nonaktifkan_status','Admin\KategoriController@nonaktifkanStatus')->name('admin.kategori.non_aktifkan_status');
});

Route::group(['prefix'  => 'admin/data_kostan_putri'],function(){
    Route::get('/','Admin\ProdukController@index')->name('admin.produk_putri');
    Route::get('/tambahkan_produk','Admin\ProdukController@add')->name('admin.produk_putri.add');
    Route::post('/','Admin\ProdukController@post')->name('admin.produk_putri.post');
    Route::delete('/delete','Admin\ProdukController@delete')->name('admin.produk_putri.delete');
    Route::patch('/{id}/aktifkan_status','Admin\ProdukController@aktifkanStatus')->name('admin.produk_putri.aktifkan_status');
    Route::patch('/{id}/nonaktifkan_status','Admin\ProdukController@nonaktifkanStatus')->name('admin.produk_putri.non_aktifkan_status');
});
