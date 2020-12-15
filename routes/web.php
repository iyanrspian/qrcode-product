<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
   Route::get('/', [BarangController::class, 'index'])->name('index');
   Route::get('/barang/create', [BarangController::class, 'create'])->name('create');
   Route::post('/barang/store', [BarangController::class, 'store'])->name('store');
   Route::get('/barang/{id}/edit', [BarangController::class, 'edit'])->name('edit');
   Route::post('/barang/{id}/update', [BarangController::class, 'update'])->name('update');
   Route::get('/barang/{id}/destroy', [BarangController::class, 'destroy'])->name('destroy');

   Route::get('/barang/{id}/barcode', [BarangController::class, 'barcode'])->name('barcode');
   Route::get('/barang/{id}/qrcode', [BarangController::class, 'qrcode'])->name('qrcode');
   Route::get('/barang/{id}/print_barcode', [BarangController::class, 'print_barcode'])->name('print_barcode');
   Route::get('/barang/{id}/print_qrcode', [BarangController::class, 'print_qrcode'])->name('print_qrcode');

   Route::get('/exportbrg', [BarangController::class, 'brgexport'])->name('brgexport');
   Route::post('/importbrg', [BarangController::class, 'brgimport'])->name('brgimport');
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
