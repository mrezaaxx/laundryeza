<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PaketController;

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
Route::get('/', [MemberController::class, 'index']);
Route::resource('member', MemberController::class);
Route::post('/member/update',[MemberController::class,'update']);

Route::resource('outlet', OutletController::class);
Route::post('/outlet/update',[OutletController::class,'update']);

Route::resource('paket', PaketController::class);
Route::post('/paket/update',[PaketController::class,'update']);

Route::resource('transaksi', TransaksiController::class);
