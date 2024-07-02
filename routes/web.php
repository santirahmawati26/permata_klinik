<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\DokterController;
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

Route::get('dokter', [DokterController::class, 'index'])->name('dokter.index');
Route::get('dokter/create', [DokterController::class, 'tambah'])->name('dokter.create');
Route::get('dokter/store', [DokterController::class, 'store'])->name('dokter.store');
Route::get('dokter/edit/{id}', [DokterController::class, 'edit'])->name('dokter.edit');
Route::get('dokter/update/{id}', [DokterController::class, 'update'])->name('dokter.update');
Route::get('dokter/destroy/{id}', [DokterController::class, 'destroy'])->name('dokter.destroy');
Route::get('dokter/show/{id}', [DokterController::class, 'destroy'])->name('dokter.show');
Route::resource('dokter', DokterController::class);