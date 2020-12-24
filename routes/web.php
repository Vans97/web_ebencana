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
Route::resource('role','RoleController');
Route::resource('profile','ProfileController');
Route::resource('akses','AksesController');
Route::resource('jajahan','JajahanController');
Route::resource('daerah','DaerahController');
Route::resource('agensi','AgensiController');
Route::resource('pkob','PkobController');
Route::resource('aset','AsetController');
Route::resource('kelengkapanagensi','KelengkapanAgensiController');
Route::resource('helikopter','HelikopterController');
Route::resource('agihan','AgihanController');
Route::resource('barang','BarangController');
Route::resource('kemasukkan','KemasukkanController');


