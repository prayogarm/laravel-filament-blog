<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Models\Kategori;
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

// HOMEPAGE
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('produk', [HomeController::class, 'produk'])->name('produk');
Route::get('layanan', [HomeController::class, 'layanan'])->name('layanan');
Route::get('kontak', [HomeController::class, 'kontak'])->name('kontak');
Route::get('promo', [HomeController::class, 'promo'])->name('promo');

// Portfolio
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');
Route::get('/category/{slug}', [PortfolioController::class, 'show'])->name('category.portfolio');
Route::get('/portfolio/{portfolio}', [PortfolioController::class, 'detail'])->name('portfolio.detail');


