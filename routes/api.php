<?php

use App\Http\Controllers\ApiAuthController;
use App\Http\Controllers\ApiPesananController;
use App\Http\Controllers\ApiStokController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/register', [ApiAuthController::class, 'register']);
Route::post('/login', [ApiAuthController::class, 'login']);
Route::get('/stok', [ApiStokController::class, 'all']);
Route::post('/pesanan', [ApiPesananController::class, 'insert'])->middleware('auth:sanctum');
Route::post('/pesanan-show', [ApiPesananController::class, 'show'])->middleware('auth:sanctum');
Route::get('/me', [ApiAuthController::class, 'userlogin'])->middleware('auth:sanctum');
Route::post('/logout', [ApiAuthController::class, 'logout'])->middleware('auth:sanctum');
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
