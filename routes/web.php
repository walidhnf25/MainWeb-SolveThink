<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MarketplaceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

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
route::middleware(['guest:user'])->group(function () {
    Route::get('/', function () {
        return view('index');
    });

    Route::get('/marketplace', [MarketplaceController::class, 'index'])->name('marketplace.index');
    Route::post('/marketplace/store', [MarketplaceController::class, 'store'])->name('marketplace.store');
    Route::put('/marketplace/update/{id}', [MarketplaceController::class, 'update'])->name('marketplace.update');
    Route::delete('/marketplace/destroy/{id}', [MarketplaceController::class, 'destroy'])->name('marketplace.destroy');

    Route::get('/product', [ProductController::class, 'index'])->name('product.index');
    Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
    Route::put('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/product/destroy/{id}', [ProductController::class, 'destroy'])->name('product.destroy');

    Route::get('/', [AuthController::class, 'index'])->name('index');
    Route::post('/login', [AuthController::class, 'proseslogin'])->name('proseslogin');
    Route::post('/register', [AuthController::class, 'prosesregistrasi'])->name('prosesregistrasi');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::post('/Course', [CategoryController::class, 'store'])->name('category.store');

});