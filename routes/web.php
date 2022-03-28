<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\resepsionisController;

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

Route::get('cetak', function () {
    return view('reservasi.cetak');
});
// Route::get('pesanan', function () {
//     return view('reservasi.pesan');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/cetak/{id_reservasi}', 'reservasiController@cetak')->name('cetak');
Route::get('/pesanan', 'reservasiController@pesan')->name('pesanan');
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
Route::post('/resepsionis/search', 'reservasiController@search')->name('search');
Route::post('/resepsionis/filter', 'reservasiController@filter')->name('reservasi.filter');

Route::post('/pesan', 'PesanController@index')->name('pesan');

