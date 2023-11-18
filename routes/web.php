<?php

use App\Http\Controllers\CekpesananController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\profilecontroller;

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
    return view('layouts.main');
});

Route::prefix('user')->group(function () {
    Route::get('/beranda', [profilecontroller::class, 'index'])->name('beranda');
    Route::get('/cekpesanan', [CekpesananController::class, 'index'])->name('cekpesanan');
});
