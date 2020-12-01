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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//route menampilkan data barang
Route::get('/barangs', 'BarangController@index')->name('barangs.index')->middleware('auth'); // tambah chain method ini pada route

//route mengakses view form tambah barang
Route::get('/barangs/create', 'BarangController@create')->name('barangs.create')->middleware('auth');

//route untuk mengakses detail data
Route::get('/barangs/{barang}', 'BarangController@detail')->name('barangs.detail')->middleware('auth');

//route untuk proses simpan data barang
Route::post('/barangs', 'BarangController@store')->name('barangs.store');

//route untuk menampilkan form update
Route::get('/barangs/{barang}/edit','BarangController@edit')->name('barangs.edit')->middleware('auth');

//route untuk update data ke dalam database
Route::put('/barangs/{barang}', 'BarangController@update')->name('barangs.update');

//route untuk menghapus barang
Route::delete('/barangs/{barang}', 'BarangController@delete')->name('barangs.delete')->middleware('auth');