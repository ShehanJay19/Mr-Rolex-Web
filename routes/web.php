<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User;
use App\Http\Controllers\Admin;

// Public
Route::get('/', fn() => view('pages.home'))->name('home');
Route::get('/shop', [User\ProductController::class, 'index'])->name('shop');
Route::get('/product/{product:slug}', [User\ProductController::class, 'show'])->name('product.show');

// User authenticated
Route::middleware('auth')->group(function () {
    Route::get('/cart', [User\CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/add', [User\CartController::class, 'add'])->name('cart.add');
    Route::delete('/cart/{item}', [User\CartController::class, 'remove'])->name('cart.remove');
    Route::patch('/cart/{item}', [User\CartController::class, 'update'])->name('cart.update');
});

// Admin
Route::middleware(['auth', 'is-admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', fn() => view('admin.dashboard'))->name('dashboard');
    Route::resource('products', Admin\ProductController::class);
});

// Keep existing auth routes if any
