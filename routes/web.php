<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Auth;

// Página de inicio
Route::get('/', function () {
    return view('welcome');
});

// Middleware de autenticación para proteger rutas
Route::middleware(['auth'])->group(function () {

    // 🛒 Carrito
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/add/{product}', [CartController::class, 'add'])->name('cart.add');
    Route::delete('/cart/remove/{item}', [CartController::class, 'remove'])->name('cart.remove');
    Route::post('/checkout', [CartController::class, 'checkout'])->name('checkout.process');

    // ✅ Vista de confirmación de compra
    Route::get('/checkout/success', function () {
        return view('checkout.success');
    })->name('checkout.success');

    // 🧍 Perfil
    Route::get('/profile/edit', function () {
        return view('profile.edit');
    })->name('profile.edit');

    // 👤 Panel de usuario
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// 🛍️ Productos
Route::resource('products', ProductController::class);

// 🔐 Rutas de autenticación generadas por Breeze/Fortify/etc.
require __DIR__.'/auth.php';
