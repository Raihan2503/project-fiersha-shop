<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\Login;
use App\Http\Controllers\Register;
use App\Http\Controllers\Transaksi;
use Illuminate\Support\Facades\Route;
use Psy\Readline\Transient;

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
Route::get('/keranjang', [KeranjangController::class, 'index']);
Route::get('/checkout', [CheckoutController::class, 'index']);
Route::post('/keranjang/{id_produk}', [HomeController::class, 'store'])->name('keranjang.store');
Route::get('/checkout/{id_produk}', [CheckoutController::class, 'show'])->name('checkout.show');
Route::post('/checkout/{id_produk}', [CheckoutController::class, 'store'])->name('checkout.store');
// Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');
Route::post('/checkout', [CheckoutController::class, 'save'])->name('checkout.save');
Route::get('/transaksi', [Transaksi::class, 'index']);
Route::get('/transaksi/{id}', [Transaksi::class, 'show'])->name('transaksi.show');
Route::delete('/keranjang/{id_produk}', [KeranjangController::class, 'destroy'])->name('keranjang.destroy');
Route::delete('/checkout/{id_produk}', [CheckoutController::class, 'destroy'])->name('checkout.destroy');
Route::post('/register', [Register::class, 'store'])->name('register.store');
Route::post('/logout', [Login::class, 'logout'])->name('logout');
Route::get('/register', [Register::class, 'index']);

// middleware
Route::middleware(['auth.check'])->group(function () {
    // Definisi route yang hanya dapat diakses oleh pengguna yang sudah login
    Route::get('/keranjang', [KeranjangController::class, 'index']);
    Route::get('/checkout', [KeranjangController::class, 'index']);
    Route::get('/transaksi', [Transaksi::class, 'index']);
    Route::get('/transaksi/{id}', [Transaksi::class, 'show'])->name('transaksi.show');
});