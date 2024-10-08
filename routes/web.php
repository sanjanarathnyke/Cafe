<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PackagesController;
use App\Http\Controllers\ShushiController;
use App\Http\Controllers\welcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[welcomeController::class,'welcome'])->name('welcome');
Route::get('/gallery',[GalleryController::class,'gallery'])->name('gallery');
Route::get('/checkout',[CheckoutController::class,'checkout'])->name('checkout');
Route::get('/cart',[CartController::class,'cart'])->name('cart');
Route::get('/packages',[PackagesController::class,'packages'])->name('packages');
Route::get('/menu',[MenuController::class,'menu'])->name('menu');

Route::post('/add-to-cart',[CartController::class,'addtocart'])->name('add-to-cart');

Route::get('/cart/remove/{id}', [CartController::class, 'removefromcart'])->name('remove.from.cart');

// Route::get('/shushi',[ShushiController::class,'shushiView'])->name('shushi');
