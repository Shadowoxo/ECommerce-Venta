<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth'])->group(function () {


    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/add/{product}', [CartController::class, 'add'])->name('cart.add');
    Route::delete('/cart/remove/{item}', [CartController::class, 'remove'])->name('cart.remove');
    Route::post('/checkout', [CartController::class, 'checkout'])->name('checkout.process');


    Route::get('/checkout/success', function () {
        return view('checkout.success');
    })->name('checkout.success');


    Route::get('/profile/edit', function () {
        return view('profile.edit');
    })->name('profile.edit');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::resource('products', ProductController::class);


require __DIR__.'/auth.php';
