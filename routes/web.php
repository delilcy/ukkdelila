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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@beranda')->name('beranda');
Route::get('/dashboard',function() {
    return 'Dashboard';
})->name('dashboard');

Route::resource('kamar','kamarController');
Route::resource('faskamar','fasilitaskmrController');
Route::resource('fashotel','fasilitashotelController');
Route::resource('admin','adminController');
Route::resource('resepsionis','resepsionisController');
Route::resource('tamu','tamuController');
Route::resource('reservasi','reservasiController');

Route::post('/pesan', 'PesanController@index')->name('pesan');

