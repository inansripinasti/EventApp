<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\jenisKegController;
use App\Http\Controllers\KategoriController;



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
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/dashboard/daftar', [DaftarController::class, 'index']);
Route::get('/dashboard/kegiatan', [KegiatanController::class, 'index']);
Route::get('/dashboard/jenisKeg', [jenisKegController::class, 'index']);
Route::get('/dashboard/kategori', [KategoriController::class, 'index']);




Route::get('/home', [HomeController::class, 'index']);

