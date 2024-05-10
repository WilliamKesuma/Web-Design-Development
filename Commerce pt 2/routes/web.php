<?php

// use App\Http\Controllers\CobaController;

use App\Http\Controllers\CartController;
use App\Http\Controllers\CobaController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'Home']);
Route::get('/product/{id}-{name}', [HomeController::class, 'Product']);



Route::get('/test', [CobaController::class, 'Index']);

Route::get('/contact', [ContactController::class, 'View']);
Route::post('/contact', [ContactController::class, 'ActionContact']);
Route::get('/contact/list', [ContactController::class, 'ContactList']);
Route::delete('/contact/list', [ContactController::class, 'ContactListDelete']);

// Route::view('/cart', 'cart');
Route::prefix("/cart")->group(function() {
    Route::get('/', [CartController::class, 'Index']);
    Route::get('/{id}', [CartController::class, 'CartAddAction']);
    Route::get('/remove/{id}', [CartController::class, 'removeProduct'])->name('cart.remove');
});

Route::view('/product', 'product');
Route::view('/login', 'login');
Route::view('/register', 'register');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::post('/product/{id}-{name}/add-to-cart', [CartController::class, 'cartAddAction'])->name('product.add-to-cart');

// Route::view('/contact', 'contact');
