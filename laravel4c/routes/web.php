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

Route::get('mahasiswa', 'MahasiswaController@index');
Route::get('tambah-data','MahasiswaController@create') -> name ('tambah.data');
Route::post('simpan-data' , 'MahasiswaController@store') -> name('simpan.data');
Route::get('edit-mahasiswa/{id}','MahasiswaController@edit')-> name('mahasiswa.edit');
Route::post('update-mahasiswa/{id}' , 'MahasiswaController@update') -> name('update.data');
Route::get('hapus-mahasiswa/{id}','MahasiswaController@destroy')-> name('hapus.data');