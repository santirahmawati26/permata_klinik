<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\KlinikController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\KonsultasiController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('user', UserController::class);
Route::resource('klinik', KlinikController::class);
Route::resource('dokter', DokterController::class);
Route::resource('konsultasi', KonsultasiController::class);



Route::get('klinik', [KlinikController::class, 'index'])->name('klinik.index');
Route::get('klinik/create', [KlinikController::class, 'tambah'])->name('klinik.create');
Route::get('klinik/store', [KlinikController::class, 'store'])->name('klinik.store');
Route::get('klinik/edit/{id}', [KlinikController::class, 'edit'])->name('klinik.edit');
Route::get('klinik/update/{id}', [KlinikController::class, 'update'])->name('klink.update');
Route::get('klinik/destroy/{id}', [KlinikController::class, 'destroy'])->name('klinik.destroy');
Route::get('klinik/show/{id}', [KlinikController::class, 'destroy'])->name('klinik.show');
Route::resource('klinik', KlinikController::class);

Route::get('dokter', [DokterController::class, 'index'])->name('dokter.index');
Route::get('dokter/create', [DokterController::class, 'tambah'])->name('dokter.create');
Route::get('dokter/store', [DokterController::class, 'store'])->name('dokter.store');
Route::get('dokter/edit/{id}', [DokterController::class, 'edit'])->name('dokter.edit');
Route::get('dokter/update/{id}', [DokterController::class, 'update'])->name('dokter.update');
Route::get('dokter/destroy/{id}', [DokterController::class, 'destroy'])->name('dokter.destroy');
Route::get('dokter/show/{id}', [DokterController::class, 'destroy'])->name('dokter.show');
Route::resource('dokter', DokterController::class);

