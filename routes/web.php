<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\StokController;

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

Route::get('/', function () {
    return view('masuk', ['title' => 'Home']);
})->name('masuk');
Route::get('/dashboard', function () {
    return view('dashboard', ['title' => 'Dashboard']);
 })->name('dahsboard');

Route::get('/laporan', function () {
   return view('laporan', ['title' => 'Dashboard']);
})->name('laporan ');

 //Route::get('/dash-pesanan', [App\Http\Controllers\PesananController::class, 'index'])->name('dash-pesanan');
//route stok
Route::get('/dash-pesanan', [App\Http\Controllers\PesananController::class, 'index'])->name('dash-pesanan');
Route::get('/dash-stok', [App\Http\Controllers\StokController::class, 'index'])->name('dash-stok');
Route::get('/add-stok', [App\Http\Controllers\StokController::class, 'create'])->name('add-stok');
Route::post('/save-stok', [App\Http\Controllers\StokController::class, 'store'])->name('save-stok');
Route::post('/hapus-stok/{id}', [App\Http\Controllers\StokController::class, 'destroy'])->name('hapus-stok');
Route::post('/update-stok/{id}', [App\Http\Controllers\KaryawanController::class, 'update'])->name('update-stok');
//Route::put('/add-stok/{id}', [App\Http\Controllers\StokController::class, 'update'])->name('stok.update');

//route karyawan
Route::get('/dash-karyawan', [App\Http\Controllers\KaryawanController::class, 'index'])->name('dash-karyawan');
Route::get('/add-karyawan', [App\Http\Controllers\KaryawanController::class, 'create'])->name('add-karyawan');
Route::post('/simpan-karyawan', [App\Http\Controllers\KaryawanController::class, 'store'])->name('simpan-karyawan');
Route::post('/hapus-karyawan/{id}', [App\Http\Controllers\KaryawanController::class, 'destroy'])->name('hapus-karyawan');
Route::get('/edit-karyawan', [App\Http\Controllers\KaryawanController::class, 'edit'])->name('edit-karyawan');














