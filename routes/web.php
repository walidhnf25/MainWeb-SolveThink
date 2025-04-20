<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ComponentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CourseController;

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


    Route::get('/component', [ComponentController::class, 'index'])->name('component.index');
    Route::post('/component/store', [ComponentController::class, 'store'])->name('component.store');
    Route::put('/component/update/{id}', [ComponentController::class, 'update'])->name('component.update');
    Route::delete('/component/destroy/{id}', [ComponentController::class, 'destroy'])->name('component.destroy');

    Route::get('/product', [ProductController::class, 'index'])->name('product.index');
    Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
    Route::put('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/product/destroy/{id}', [ProductController::class, 'destroy'])->name('product.destroy');

    Route::get('/', [AuthController::class, 'index'])->name('index');
    Route::post('/login', [AuthController::class, 'proseslogin'])->name('proseslogin');
    Route::post('/registrasi', [AuthController::class, 'prosesregistrasi'])->name('prosesregistrasi');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/software', [CourseController::class, 'software'])->name('software');
    Route::get('/ml-ai', [CourseController::class, 'mlai'])->name('ml-ai');
    Route::get('/iot', [CourseController::class, 'iot'])->name('iot');
    Route::post('/course', [CourseController::class, 'store'])->name('course.store');
    Route::put('/course/update/{id}', [CourseController::class, 'update'])->name('course.update');
    Route::delete('/course/destroy/{id}', [CourseController::class, 'destroy'])->name('course.destroy');

      // About
    Route::get('/about', function () {
        return view('about');
    })->name('about.index');

    Route::get('/contact', function () {
        return view('contact');
    })->name('contact.index');

    Route::get('/class', function () {
        return view('class');
    })->name('class.index');

    Route::get('/news', function () {
        return view('news');
    })->name('news.index');

    Route::get('/news-detail', function () {
        return view('news-detail');
    })->name('news.detail');
});
