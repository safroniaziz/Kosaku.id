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

Route::get('/',function(){
    return view('layouts.soon');
});
Route::get('/tes', 'FrontendController@index')->name('home');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix'  => 'produk/'],function(){
    Route::get('/semua', 'ProdukFrontendController@semuaProduk')->name('produk.semua');
    Route::get('/{slug}','ProdukFrontendController@detail')->name('produk.detail');
});

Route::group(['prefix'  => 'rumah_kosaku/'],function(){
    Route::get('/','Admin\DashboardController@index')->name('admin.dashboard');
});

Route::group(['prefix'  => 'rumah_kosaku/wilayah'],function(){
    Route::get('/provinsi','Admin\WilayahController@provinsi')->name('admin.wilayah.provinsi');
    Route::post('/provinsi/','Admin\WilayahController@provinsiPost')->name('admin.wilayah.provinsi.post');
    Route::delete('provinsi/delete','Admin\WilayahController@provinsiDelete')->name('admin.wilayah.provinsi.delete');
});

Route::group(['prefix'  => 'rumah_kosaku/wilayah'],function(){
    Route::get('/kota','Admin\WilayahController@kota')->name('admin.wilayah.kota');
    Route::post('/kota/','Admin\WilayahController@kotaPost')->name('admin.wilayah.kota.post');
    Route::delete('kota/delete','Admin\WilayahController@kotaDelete')->name('admin.wilayah.kota.delete');
});

Route::group(['prefix'  => 'rumah_kosaku/wilayah'],function(){
    Route::get('/kecamatan','Admin\WilayahController@kecamatan')->name('admin.wilayah.kecamatan');
    Route::post('/kecamatan/','Admin\WilayahController@kecamatanPost')->name('admin.wilayah.kecamatan.post');
    Route::delete('kecamatan/delete','Admin\WilayahController@kecamatanDelete')->name('admin.wilayah.kecamatan.delete');
    Route::get('/kecamatan/cari_kota','Admin\WilayahController@cariKota')->name('admin.wilayah.kecamatan.cari_kota');
});

Route::group(['prefix'  => 'rumah_kosaku/wilayah'],function(){
    Route::get('/kelurahan','Admin\WilayahController@kelurahan')->name('admin.wilayah.kelurahan');
    Route::post('/kelurahan/','Admin\WilayahController@kelurahanPost')->name('admin.wilayah.kelurahan.post');
    Route::delete('kelurahan/delete','Admin\WilayahController@kelurahanDelete')->name('admin.wilayah.kelurahan.delete');
    Route::get('/kelurahan/cari_kota','Admin\WilayahController@cariKota')->name('admin.wilayah.kelurahan.cari_kota');
    Route::get('/kelurahan/cari_kecamatan','Admin\WilayahController@cariKecamatan')->name('admin.wilayah.kelurahan.cari_kecamatan');
    Route::get('/kelurahan/cari_kelurahan','Admin\WilayahController@cariKelurahan')->name('admin.wilayah.kelurahan.cari_kelurahan');
});

Route::group(['prefix'  => 'rumah_kosaku/kategori'],function(){
    Route::get('/','Admin\KategoriController@index')->name('admin.kategori');
    Route::post('/','Admin\KategoriController@post')->name('admin.kategori.post');
    Route::delete('/delete','Admin\KategoriController@delete')->name('admin.kategori.delete');
    Route::patch('/{id}/aktifkan_status','Admin\KategoriController@aktifkanStatus')->name('admin.kategori.aktifkan_status');
    Route::patch('/{id}/nonaktifkan_status','Admin\KategoriController@nonaktifkanStatus')->name('admin.kategori.non_aktifkan_status');
});

Route::group(['prefix'  => 'rumah_kosaku/data_kostan_putri'],function(){
    Route::get('/','Admin\ProdukController@index')->name('admin.produk_putri');
    Route::get('/tambahkan_produk','Admin\ProdukController@add')->name('admin.produk_putri.add');
    Route::post('/','Admin\ProdukController@post')->name('admin.produk_putri.post');
    Route::delete('/delete','Admin\ProdukController@delete')->name('admin.produk_putri.delete');
    Route::patch('/{id}/aktifkan_status','Admin\ProdukController@aktifPkanStatus')->name('admin.produk_putri.aktifkan_status');
    Route::patch('/{id}/nonaktifkan_status','Admin\ProdukController@nonaktifkanStatus')->name('admin.produk_putri.non_aktifkan_status');
    Route::get('/{id}/{slug}/detail','Admin\ProdukController@detail')->name('admin.produk_putri.detail');
    Route::get('/{id}/{slug}/tambahkan_galeri','Admin\ProdukController@addGaleri')->name('admin.produk_putri.add_galeri');
    Route::post('/galeri_post/{id}/{slug}','Admin\ProdukController@galeriPost')->name('admin.produk_putri.galeri_post');
    Route::delete('/galeri/{id}/{produk_id}/{slug}/delete','Admin\ProdukController@galeriDelete')->name('admin.produk_putri.galeri.delete');
    Route::get('/{id}/{slug}/edit','Admin\ProdukController@edit')->name('admin.produk_putri.edit');
    Route::patch('/{id}/update','Admin\ProdukController@update')->name('admin.produk_putri.update');
});

Route::group(['prefix'  => 'rumah_kosaku/slider'],function(){
    Route::get('/','Admin\SliderController@index')->name('admin.slider');
    Route::get('/tambah_slider','Admin\SliderController@add')->name('admin.slider.add');
    Route::post('/','Admin\SliderController@post')->name('admin.slider.post');
    Route::delete('/delete','Admin\SliderController@delete')->name('admin.slider.delete');
});

Route::group(['prefix'  => 'rumah_kosaku/keunggulan'],function(){
    Route::get('/','Admin\KeunggulanController@index')->name('admin.keunggulan');
    Route::get('/tambah_keunggulan','Admin\KeunggulanController@add')->name('admin.keunggulan.add');
    Route::post('/','Admin\KeunggulanController@post')->name('admin.keunggulan.post');
    Route::get('/{id}/edit','Admin\KeunggulanController@edit')->name('admin.keunggulan.edit');
    Route::patch('/{id}/update','Admin\KeunggulanController@update')->name('admin.keunggulan.update');
    Route::delete('/delete','Admin\KeunggulanController@delete')->name('admin.keunggulan.delete');
});

Route::group(['prefix'  => 'rumah_kosaku/jabatan'],function(){
    Route::get('/','Admin\JabatanController@index')->name('admin.jabatan');
    Route::post('/','Admin\JabatanController@post')->name('admin.jabatan.post');
    Route::delete('/delete','Admin\JabatanController@delete')->name('admin.jabatan.delete');
});