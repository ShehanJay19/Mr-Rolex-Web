

<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Checkout page route
Route::view('/checkout', 'pages.checkout')->name('checkout');

// Cart page route
Route::view('/cart', 'pages.cart')->name('cart');

// Product detail page route
Route::view('/product', 'pages.product')->name('product');

Route::get('/', function () {
    return view('pages.home');
});

// Shop page route
Route::view('/shop', 'pages.shop')->name('shop');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
