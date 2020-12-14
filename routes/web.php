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
   Route::get('/barang', [BarangController::class, 'index'])->name('index');
   Route::get('/barang/create', [BarangController::class, 'create'])->name('create');
   Route::post('/barang/store', [BarangController::class, 'store'])->name('store');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
