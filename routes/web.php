<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HewanController;
use App\Http\Controllers\JenisHewanController;
use App\Http\Controllers\PemilikController;

// Halaman daftar hewan (jadi halaman utama)
Route::get('/', [HewanController::class, 'index'])
    ->name('hewan.index');

// Form tambah hewan
Route::get('/hewan/create', [HewanController::class, 'create'])
    ->name('hewan.create');

// Proses simpan hewan baru
Route::post('/hewan', [HewanController::class, 'store'])
    ->name('hewan.store');

// Halaman detail hewan
Route::get('/hewan/{hewan}', [HewanController::class, 'show'])
    ->name('hewan.show');

Route::get('/jenis', fn () => 'Halaman jenis')->name('jenis.index');
Route::get('/pemilik', fn () => 'Halaman pemilik')->name('pemilik.index');

Route::get('/jenis', [JenisHewanController::class, 'index'])->name('jenis.index');
Route::get('/jenis/create', [JenisHewanController::class, 'create'])->name('jenis.create');
Route::post('/jenis', [JenisHewanController::class, 'store'])->name('jenis.store');
Route::get('/jenis/{jenisHewan}', [JenisHewanController::class, 'show'])->name('jenis.show');


Route::get('/pemilik', [PemilikController::class, 'index'])->name('pemilik.index');
Route::get('/pemilik/create', [PemilikController::class, 'create'])->name('pemilik.create');
Route::post('/pemilik', [PemilikController::class, 'store'])->name('pemilik.store');
Route::get('/pemilik/{pemilik}', [PemilikController::class, 'show'])->name('pemilik.show');
