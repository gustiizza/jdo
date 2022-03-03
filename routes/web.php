<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
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

//FRONTEND
Route::get('/beranda',[FrontendController::class, 'index']);
//BACKEND
Route::get('/dasboard', [BackendController::class, 'dasboard']);
Route::get('/kelola-produk', [BackendController::class, 'kelolaProduk']);
Route::get('/kelola-pemesanan', [BackendController::class, 'kelolaPemesanan']);
Route::get('/kelola-checkout', [BackendController::class, 'kelolaCheckout']);
Route::get('/kelola-pelanggan', [BackendController::class, 'kelolaPelanggan']);
Route::get('/kelola-sosmed', [BackendController::class, 'kelolaSosmed']);
Route::get('/setting', [BackendController::class, 'setting']);
