<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\Login;
use App\Http\Controllers\Register;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/login', [Login::class, 'index']);
Route::post('/login', [Login::class, 'auth'])->name('login');
Route::get('/keranjang', [HomeController::class, 'keranjang']);
Route::post('/keranjang/{id_produk}', [HomeController::class, 'store'])->name('keranjang.store');
Route::post('/register', [Register::class, 'store'])->name('register.store');
Route::post('/logout', [Login::class, 'logout'])->name('logout');
Route::get('/register', [Register::class, 'index']);