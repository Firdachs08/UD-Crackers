<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiAuthController;
use App\Http\Controllers\ApiPesananController;
use App\Http\Controllers\ApiStokController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::post('/register', [ApiAuthController::class, 'register']);
Route::post('/login', [ApiAuthController::class, 'login']);
Route::get('/stok', [ApiStokController::class, 'all']);
Route::post('/pesanan', [ApiPesananController::class, 'insert'])->middleware('auth:sanctum');
Route::post('/pesanan-show', [ApiPesananController::class, 'show'])->middleware('auth:sanctum');
Route::get('/me', [ApiAuthController::class, 'userlogin'])->middleware('auth:sanctum');
Route::post('/logout', [ApiAuthController::class, 'logout'])->middleware('auth:sanctum');
//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
