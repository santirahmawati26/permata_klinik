<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\KlinikController;
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

Route::get('klinik', [KlinikController::class, 'index'])->name('klinik.index');
Route::get('klinik/create', [KlinikController::class, 'tambah'])->name('klinik.create');
Route::get('klinik/store', [KlinikController::class, 'store'])->name('klinik.store');
Route::get('klinik/edit/{id}', [KlinikController::class, 'edit'])->name('klinik.edit');
Route::get('klinik/update/{id}', [KlinikController::class, 'update'])->name('klink.update');
Route::get('klinik/destroy/{id}', [KlinikController::class, 'destroy'])->name('klinik.destroy');
Route::get('klinik/show/{id}', [KlinikController::class, 'destroy'])->name('klinik.show');
Route::resource('klinik', KlinikController::class);