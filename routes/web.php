<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});


Route::get('product', [ProductController::class, 'index']);
Route::get('cart',[CartController::class, 'index']);
Route::post('/addtocart', [ProductController::class, 'addToCart']);

use App\Http\Controllers\RazorpayController;

Route::get('/razorpay', [RazorpayController::class, 'index']);
Route::post('/razorpay/payment', [RazorpayController::class, 'payment'])->name('razorpay.payment');
Route::post('/razorpay/success', [RazorpayController::class, 'success'])->name('razorpay.success');
require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
