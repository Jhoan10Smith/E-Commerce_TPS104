<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\checkoutController;


Route::get('/cart', [CartController::class,'index'])->name('cart.index'); 
Route::post('/cart/store', [CartController::class,'store'])->name('cart.store');
Route::get('/cart/delete/{idproducto}', [CartController::class,'delete'])->name('cart.delete');

Route::get('/checkout', [checkoutController::class,'index'])->name('checkout.index');
Route::post('/confirm', [checkoutController::class,'confirmarPago'])->name('checkout.confirm');

?>