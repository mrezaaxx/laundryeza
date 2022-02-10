<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\LoginController;
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
Route::get('/', [LoginController::class, 'index']);

Route::post('login',[LoginController::class,'authenticate']);
Route::post('logout',[LoginController::class,'logout']);
Route::get('login', [LoginController::class, 'index'])->name('login');

Route::middleware('auth')->group(function () {
    Route::get('transaksi',[TransaksiController::class,'index']);
    Route::get('paket',[PaketController::class,'index']);
    Route::get('member',[MemberController::class,'index']);
    Route::get('outlet',[OutletController::class,'index']);
});

Route::group(['prefix'=>'a','middleware' => ['isAdmin', 'auth']], function () {
    Route::get('home', [HomeController::class, 'index'])->name('a.home');
    Route::resource('member', MemberController::class);
    Route::post('/member/update',[MemberController::class,'update']);
    Route::resource('outlet', OutletController::class);
    Route::post('/outlet/update',[OutletController::class,'update']);
    Route::resource('paket', PaketController::class);
    Route::post('/paket/update',[PaketController::class,'update']);
    Route::get('transaksi', [TransaksiController::class, 'index']); 
    Route::get('laporan', [LaporanController::class, 'index']); 
});

Route::group(['prefix'=>'k','middleware' => ['isKasir', 'auth']], function () {
    Route::get('home', [HomeController::class, 'index'])->name('k.home');
    Route::resource('member', MemberController::class);
    Route::post('/member/update',[MemberController::class,'update']);
    Route::resource('paket', PaketController::class);
    Route::post('/paket/update',[PaketController::class,'update']);
    Route::get('transaksi', [TransaksiController::class, 'index']); 
    Route::get('laporan', [LaporanController::class, 'index']); 
});

Route::group(['prefix'=>'o','middleware' => ['isOwner', 'auth']], function () {
    Route::get('home', [HomeController::class, 'index'])->name('o.home');
    Route::get('laporan', [LaporanController::class, 'index']); 
});