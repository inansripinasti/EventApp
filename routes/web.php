<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
// use App\Http\Controllers\HomeController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\jenisKegController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\IndexController;

use Illuminate\Support\Facades\Auth;




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
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/dashboard/daftar', [DaftarController::class, 'index'])->middleware('auth');
Route::get('/dashboard/kegiatan', [KegiatanController::class, 'index'])->middleware('auth');
Route::get('/dashboard/jenisKeg', [jenisKegController::class, 'index'])->middleware('auth');
Route::get('/dashboard/kategori', [KategoriController::class, 'index'])->middleware('auth');



Route::get('/dashboard/daftar/create', [DaftarController::class, 'create']);
Route::post('/dashboard/daftar/store', [DaftarController::class, 'store']);
Route::delete('/dashboard/daftar/destroy/{id}', [DaftarController::class, 'destroy']);

Route::get('/dashboard/kegiatan/create', [KegiatanController::class, 'create'])->middleware('auth');
Route::post('/dashboard/kegiatan/store', [KegiatanController::class, 'store']);
Route::delete('/dashboard/kegiatan/destroy/{id}', [KegiatanController::class, 'destroy']);
Route::get('/dashboard/kegiatan/edit/{id}', [KegiatanController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/kegiatan/update/{id}', [KegiatanController::class, 'update']);
Route::get('/dashboard/kegiatan/show/{id}', [KegiatanController::class, 'show'])->middleware('auth');

Route::get('/dashboard/kategori/create', [KategoriController::class, 'create'])->middleware('auth');
Route::post('/dashboard/kategori/store', [KategoriController::class, 'store']);
Route::delete('/dashboard/kategori/destroy/{id}', [KategoriController::class, 'destroy']);
Route::get('/dashboard/kategori/edit/{id}', [KategoriController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/kategori/update/{id}', [KategoriController::class, 'update']);
Route::get('/dashboard/kategori/show/{id}', [KategoriController::class, 'show'])->middleware('auth');

Route::get('/dashboard/JenisKeg/create', [JenisKegController::class, 'create'])->middleware('auth');
Route::put('/dashboard/JenisKeg/update/{id}', [jenisKegController::class, 'update']);
Route::get('/dashboard/JenisKeg/edit/{id}', [JenisKegController::class, 'edit'])->middleware('auth');
Route::post('/dashboard/JenisKeg/store', [JenisKegController::class, 'store']);
Route::delete('/dashboard/JenisKeg/destroy/{id}', [JenisKegController::class, 'destroy']);

Route::get('/index', [IndexController::class, 'index']);
Route::get('/index/detail/{id}', [IndexController::class, 'show']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
