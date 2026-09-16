<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanPenjualanController;
use App\Http\Controllers\ProdukController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/laporan', LaporanPenjualanController::class);

// Routing menuju Controller
Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/produk/{id}', [ProdukController::class, 'show']);
