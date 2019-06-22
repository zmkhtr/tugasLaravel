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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('pengguna', function () {
//     return view('pengguna');
// });
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('pengguna', 'PenggunaController@index')->name('pengguna');
Route::get('pengguna/edit_pengguna/{id}', 'PenggunaController@show')->name('edit_pengguna');
Route::get('pengguna/tambah_pengguna', 'PenggunaController@viewTambah')->name('tambah_pengguna');
Route::post('pengguna/tambah_pengguna','PenggunaController@tambah')->name('tambah_pengguna');
Route::put('pengguna/edit_pengguna/{id}','PenggunaController@update')->name('edit_pengguna');
Route::delete('pengguna/{id}','PenggunaController@destroy')->name('pengguna');

Route::get('prodi', 'ProdiController@index')->name('prodi');
Route::get('prodi/tambah_prodi', 'ProdiController@viewTambah')->name('tambah_prodi');
Route::post('prodi/tambah_prodi','ProdiController@tambah')->name('tambah_pengguna');
Route::get('prodi/edit_prodi/{id}', 'ProdiController@show')->name('edit_prodi');
Route::put('prodi/edit_prodi/{id}','ProdiController@update')->name('edit_prodi');
Route::delete('prodi/{id}','ProdiController@destroy')->name('prodi');

Route::get('admin', function () {
    return view('admin_template');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
