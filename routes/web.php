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

Route::get('/', 'HomeController@index');
// Route::get('/layanan', 'HomeController@layanan');
Route::resource('artikel', 'ArtikelController');
Route::resource('dokter.artikel', 'ArtikelDokterController');
Route::resource('layanan', 'LayananController');
