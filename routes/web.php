<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BarcodeController;
use App\Http\Controllers\MemoController;
use App\Http\Controllers\MemoMasukController;
use App\Http\Controllers\JenisKainController;
use App\Http\Controllers\MutasiKainController;
use App\Http\Controllers\StockKainController;
use App\Http\Controllers\PinjamanController;
use App\Http\Controllers\AnggotaController;
use Carbon\Carbon;
use Faker\Factory as Faker;
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
    return view('layouts.app');
});


Route::resource('barcodes',BarcodeController::class);
Route::resource('memos',MemoController::class);
Route::resource('masuks',MemoMasukController::class);
Route::resource('types',JenisKainController::class);    
Route::resource('mutasis',MutasiKainController::class);
Route::resource('pinjamans',PinjamanController::class);
Route::resource('anggotas',AnggotaController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/print/{barcode}',[BarcodeController::class,"print"])->name('print');
Route::get('/cetak/{memo}',[MemoController::class,"cetak"])->name('cetak');
Route::get('/test',function(){
    
});
