<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\KonsultasiController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('user',UserController::class);

Route::get('konsultasi', [KonsultasiController::class, 'index'])->name('konsultasi.index');
Route::get('konsultasi/create', [KonsultasiController::class, 'tambah'])->name('konsultasi.create');
Route::get('konsultasi/store', [KonsultasiController::class, 'store'])->name('konsultasi.store');
Route::get('konsultasi/edit/{id}', [KonsultasiController::class, 'edit'])->name('konsultasi.edit');
Route::get('konsultasi/update/{id}', [KonsultasiController::class, 'update'])->name('konsultasi.update');
Route::get('konsultasi/destroy/{id}', [KonsultasiController::class, 'destroy'])->name('konsultasi.destroy');
Route::get('konsultasi/show/{id}', [KonsultasiController::class, 'destroy'])->name('konsultasi.show');
Route::resource('konsultasi', KonsultasiController::class);