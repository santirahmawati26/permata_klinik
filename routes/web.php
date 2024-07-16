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
Route::get('klinik/create', [KlinikController::class, 'create'])->name('klinik.create');
Route::post('klinik/store', [KlinikController::class, 'store'])->name('klinik.store');
Route::get('klinik/edit/{id}', [KlinikController::class, 'edit'])->name('klinik.edit');
Route::put('klinik/update/{id}', [KlinikController::class, 'update'])->name('klink.update');
Route::delete('klinik/destroy/{id}', [KlinikController::class, 'destroy'])->name('klinik.destroy');
Route::get('klinik/show/{id}', [KlinikController::class, 'destroy'])->name('klinik.show');


Route::get('dokter', [DokterController::class, 'index'])->name('dokter.index');
Route::get('dokter/create', [DokterController::class, 'create'])->name('dokter.create');
Route::post('dokter/store', [DokterController::class, 'store'])->name('dokter.store');
Route::get('dokter/edit/{id}', [DokterController::class, 'edit'])->name('dokter.edit');
Route::put('dokter/update/{id}', [DokterController::class, 'update'])->name('dokter.update');
Route::delete('dokter/destroy/{id}', [DokterController::class, 'destroy'])->name('dokter.destroy');
Route::get('dokter/show/{id}', [DokterController::class, 'destroy'])->name('dokter.show');


Route::get('konsultasi', [KonsultasiController::class, 'index'])->name('konsultasi.index');
Route::get('konsultasi/create', [KonsultasiController::class, 'create'])->name('konsultasi.create');
Route::post('konsultasi/store', [KonsultasiController::class, 'store'])->name('konsultasi.store');
Route::get('konsultasi/edit/{id}', [KonsultasiController::class, 'edit'])->name('konsultasi.edit');
Route::put('konsultasi/update/{id}', [KonsultasiController::class, 'update'])->name('konsultasi.update');
Route::delete('konsultasi/destroy/{id}', [KonsultasiController::class, 'destroy'])->name('konsultasi.destroy');
Route::get('konsultasi/show/{id}', [KonsultasiController::class, 'destroy'])->name('konsultasi.show');

