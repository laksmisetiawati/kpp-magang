<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KeluhanController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\CsController;
use App\Http\Controllers\PelaporController;


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

//Route::get('/keluhan', function () {
  //  return view('welcome');
//});

//halaman keluhan
Route::prefix('/keluhan')->group(function() {
    Route::get('/',[KeluhanController::class,'index']);
    Route::get('create',[KeluhanController::class,'create']);
    Route::post('save',[KeluhanController::class,'save']);
    Route::get('detail/{id}',[KeluhanController::class,'detail']);
    Route::post('update/{id}',[KeluhanController::class,'update']);
});

//halaman barang
Route::prefix('/barang')->group(function() {
    Route::get('/',[BarangController::class,'index']);
    Route::get('create',[BarangController::class,'create']);
    Route::post('save',[BarangController::class,'save']);
    Route::get('detail/{id}',[BarangController::class,'detail']);
    Route::post('update/{id}',[BarangController::class,'update']);
});

//halaman customer services
Route::prefix('/cs')->group(function() {
    Route::get('/',[CsController::class,'index']);
    Route::get('create',[CsController::class,'create']);
    Route::post('save',[CsController::class,'save']);
    Route::get('detail/{id}',[CsController::class,'detail']);
    Route::post('update/{id}',[CsController::class,'update']);
});

//halaman pelapor
Route::prefix('/pelapor')->group(function() {
    Route::get('/',[PelaporController::class,'index']);
    Route::get('create',[PelaporController::class,'create']);
    Route::post('save',[PelaporController::class,'save']);
    Route::get('detail/{id}',[PelaporController::class,'detail']);
    Route::post('update/{id}',[PelaporController::class,'update']);
});