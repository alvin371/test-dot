<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BukuController;
use App\Http\Controllers\PenulisController;
use App\Http\Controllers\LoginController;
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

Route::get('/', function(){
    return view('login.index');
});

Route::get('/login', function(){
    return view('login.index');
})->name('login');

Route::post('/postlogin', [LoginController::class,'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class,'logout'])->name('logout');


Route::group(['middleware'=>['auth']], function(){

    Route::get('/buku', [BukuController::class,'index']);
    Route::get('/buku/add', [BukuController::class,'create']);
    Route::get('/buku/{buku}', [BukuController::class,'show']);
    Route::get('/buku/edit/{buku}', [BukuController::class,'edit']);
    Route::post('/buku/store', [BukuController::class,'store']);
    Route::patch('/buku/update/{buku}', [BukuController::class,'update']);
    Route::delete('/buku/delete/{buku}', [BukuController::class,'destroy']);


    Route::get('/penulis', [PenulisController::class,'index']);
    Route::get('/penulis/add', [PenulisController::class,'create']);
    Route::get('/penulis/edit/{buku}', [PenulisController::class,'edit']);
    Route::post('/penulis/store', [PenulisController::class,'store']);
    Route::patch('/penulis/update/{buku}', [PenulisController::class,'update']);
    Route::delete('/penulis/delete/{buku}', [PenulisController::class,'destroy']);


});