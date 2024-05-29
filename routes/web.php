<?php

use App\Http\Controllers\PDFController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\SembakoController;
use App\Http\Controllers\TunaiController;
use App\Http\Controllers\RumahController;
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
    return view('home');
});

Route::resource('penduduk', PendudukController::class);

Route::resource('sembako', SembakoController::class);

Route::resource('tunai', TunaiController::class);

Route::resource('rumah', RumahController::class);

Route::get('cetakpenduduk', [PDFController::class, 'cetakpenduduk'])->name('cetakpenduduk');

Route::get('cetaksembako', [PDFController::class, 'cetaksembako'])->name('cetaksembako');

Route::get('cetaktunai', [PDFController::class, 'cetaktunai'])->name('cetaktunai');

Route::get('cetakRumah', [PDFController::class, 'cetakRumah'])->name('cetakRumah');

