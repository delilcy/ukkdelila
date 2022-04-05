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
// Route::get('/', function () {
//     $faskmr=DB::table('fasilitaskmr')->get();
//         $fashotel=DB::table('fasilitashotel')->get();
        
//         return view('halaman', compact('faskmr', 'fashotel'));
// })->name('halaman');
Route::get('/', 'IndexController@index')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/cetak/{id_reservasi}', 'reservasiController@cetak')->name('cetak');
Route::get('/pesanan', 'reservasiController@pesan')->name('pesanan');
Route::get('/beranda', 'HomeController@beranda')->name('beranda');
Route::get('/dashboard',function() {
    return 'Dashboard';
})->name('dashboard');

Route::middleware('role:admin')->resource('kamar','kamarController');
Route::middleware('role:admin')->resource('faskamar','fasilitaskmrController');
Route::middleware('role:admin')->resource('fashotel','fasilitashotelController');
Route::middleware('role:resepsionis')->resource('resepsionis','resepsionisController');
Route::resource('reservasi','reservasiController');
Route::post('/resepsionis/search', 'reservasiController@search')->name('search');
Route::post('/resepsionis/filter', 'reservasiController@filter')->name('reservasi.filter');

Route::post('/pesan', 'PesanController@index')->name('pesan');

