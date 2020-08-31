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

Route::get('/calonsiswa', 'CalonsiswaController@index');
Route::get('/calonsiswa/tambah', 'CalonsiswaController@tambah');
Route::post('/calonsiswa/tambahdata', 'CalonsiswaController@tambahdata');
Route::get('/calonsiswa/edit{id}', 'CalonsiswaController@edit');
Route::post('/calonsiswa/editdata', 'CalonsiswaController@editdata');
Route::get('/calonsiswa/hapus{id}', 'CalonsiswaController@hapus');