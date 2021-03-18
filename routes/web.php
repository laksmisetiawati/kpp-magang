<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KeluhanController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\CustomerServicesController;
use App\Http\Controllers\PelaporController;

Route::get('/', function () {
    return view('welcome');
});

//halaman keluhan
Route::prefix('/keluhan')->group(function () {
    Route::get('/', [KeluhanController::class, 'index'] );
    Route::get('create', [KeluhanController::class, 'create'] );
    Route::post('save', [KeluhanController::class, 'save'] );
    Route::get('detail/{id}', [KeluhanController::class, 'detail'] );
    Route::post('update/{id}', [KeluhanController::class, 'update'] );
});

//halaman barang
Route::get('/barang',[BarangController::class,'index']);

//halaman customer services
Route::get('/cs',[CustomerServicesController::class,'index']);

//halaman pelapor
Route::get('/pelapor',[PelaporController::class,'index']);