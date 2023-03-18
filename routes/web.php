<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SimulasiCucian;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ResepsionisController;
use App\Models\Resepsionis;

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

// LOGIN
Route::get('/login', [UserController::class, 'index'])->name('login');
Route::post('/login/cek', [UserController::class, 'cekLogin'])->name('cekLogin');

// LOGOUT
Route::get('/logout', [UserController::class,'logout'])->name('logout');


// ROUTES YANG SUDAH LOGIN
Route::group(['middleware' => 'auth'], function(){
    Route::resource('user', UserController::class);

    Route::group(['middleware' => ['cekUserLogin:1']], function(){
        Route::get('dashboard', [DashboardController::class, 'index']);
        Route::resource('kamar', KamarController::class);
    });

    Route::group(['middleware' => ['cekUserLogin:2']], function(){
        Route::resource('resepsionis', ResepsionisController::class);
    });

    Route::group(['middleware' => ['cekUserLogin:3']], function(){
    });
});

Route::get('simulasi-cucian', [SimulasiCucian::class, 'index'])->name('simulasi-cucian');