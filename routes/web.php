<?php

use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\POSController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Routes for User
Route::prefix('user')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('/user');
    Route::get('/tambah', [UserController::class, 'tambah'])->name('/user/tambah');
    Route::post('/', [UserController::class, 'store'])->name('/user/store');
    Route::get('/update/{id}', [UserController::class, 'ubah'])->name('/user/update');
    Route::put('/update_simpan/{id}', [UserController::class, 'ubah_simpan'])->name('/user/update_simpan');
    Route::get('/hapus/{id}', [UserController::class, 'hapus'])->name('/user/hapus');
});

// Routes for Kategori
Route::prefix('kategori')->group(function () {
    Route::get('/', [KategoriController::class, 'index'])->name('/kategori');
    Route::get('/create', [KategoriController::class, 'create'])->name('/kategori/create');
    Route::post('/', [KategoriController::class, 'store'])->name('/kategori/store');
    Route::get('/update/{id}', [KategoriController::class, 'update'])->name('/kategori/update');
    Route::put('/update_simpan/{id}', [KategoriController::class, 'update_simpan'])->name('/kategori/update_simpan');
    Route::get('/hapus/{id}', [KategoriController::class, 'hapus'])->name('/kategori/hapus');
});

// Routes for Level
Route::prefix('level')->group(function () {
    Route::get('/', [LevelController::class, 'index'])->name('/level');
    Route::get('/tambah', [LevelController::class, 'tambah'])->name('/level/tambah');
    Route::post('/', [LevelController::class, 'store'])->name('/level/store');
    Route::get('/update/{id}', [LevelController::class, 'update'])->name('/level/update');
    Route::put('/update_simpan/{id}', [LevelController::class, 'update_simpan'])->name('/level/update_simpan');
    Route::get('/hapus/{id}', [LevelController::class, 'hapus'])->name('/level/hapus');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('/dashboard');

Route::resource('m_user', POSController::class);