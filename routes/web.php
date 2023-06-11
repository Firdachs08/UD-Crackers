<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\LoginController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/masuk', 'App\Http\Controllers\LoginController@showLoginForm')->name('masuk');
Route::post('/masuk', 'App\Http\Controllers\LoginController@login');
//Route::post('/masuk', 'App\Http\Controllers\LoginController@logout')->name('masuk');



//route masuk ke tampilan login
Route::get('/', function () {
    return view('masuk', ['title' => 'Home']);
})->name('masuk');
Route::get('/dashboard', function () {
    return view('dashboard', ['title' => 'Dashboard']);
 })->name('dahsboard');

Route::get('/laporan', function () {
   return view('laporan', ['title' => 'laporan']);
})->name('laporan');

 //Route::get('/dash-pesanan', [App\Http\Controllers\PesananController::class, 'index'])->name('dash-pesanan');
//route stok
Route::get('/dash-pesanan', [App\Http\Controllers\PesananController::class, 'index'])->name('dash-pesanan');
Route::get('/hapus-pesanan/{id}', [App\Http\Controllers\PesananController::class, 'destroy'])->name('hapus-pesanan');
Route::get('/confirm-pesanan/{id}', [App\Http\Controllers\PesananController::class, 'update'])->name('confirm-pesanan');
Route::get('/dash-stok', [App\Http\Controllers\StokController::class, 'index'])->name('dash-stok');
Route::get('/add-stok', [App\Http\Controllers\StokController::class, 'create'])->name('add-stok');
Route::post('/save-stok', [App\Http\Controllers\StokController::class, 'store'])->name('save-stok');
Route::post('/hapus-stok/{id}', [App\Http\Controllers\StokController::class, 'destroy'])->name('hapus-stok');
Route::get('/edit-stok/{id}', [App\Http\Controllers\StokController::class, 'edit'])->name('edit-stok');
Route::post('/update-stok/{id}', [App\Http\Controllers\StokController::class, 'update'])->name('update-stok');
//Route::put('/add-stok/{id}', [App\Http\Controllers\StokController::class, 'update'])->name('stok.update');
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
//route karyawan
Route::get('/dash-karyawan', [App\Http\Controllers\KaryawanController::class, 'index'])->name('dash-karyawan');
Route::get('/add-karyawan', [App\Http\Controllers\KaryawanController::class, 'create'])->name('add-karyawan');
Route::post('/simpan-karyawan', [App\Http\Controllers\KaryawanController::class, 'store'])->name('simpan-karyawan');
// Route::post('/hapus-karyawan/{id}', [App\Http\Controllers\KaryawanController::class, 'destroy'])->name('hapus-karyawan');
Route::get('/edit-karyawan/{id}', [App\Http\Controllers\KaryawanController::class, 'edit'])->name('edit-karyawan');
Route::post('/update-karyawan/{id}', [App\Http\Controllers\KaryawanController::class, 'update'])->name('update-karyawan');














