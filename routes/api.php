<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PenulisController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/daftar-buku', [BukuController::class,'indexapi']);
Route::get('/detail-buku/{buku}', [BukuController::class,'detail']);
Route::get('/judul/{buku}', [BukuController::class,'judul']);
Route::get('/penulis/{buku}', [BukuController::class,'penulis']);
Route::get('/penulis', [PenulisController::class,'indexapi']);