<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminLogin;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', [GeneralController::class, 'index'])->name('index');

Route::middleware(['auth'])->group(function(){
Route::get('/dashboard', [UserController::class , 'dashboard'])->name('user.dashboard');
});

Route::middleware(['auth', AdminLogin::class])->group(function(){
Route::get('/admin', [AdminController::class , 'adminHome'])->name('admin.dashboard');
Route::get('/brands', [AdminController::class , 'viewBrands'])->name('admin.brands');
Route::get('/add_brands', [AdminController::class , 'addBrand'])->name('admin.addBrand');
});

Route::get('/shop', [GeneralController::class , 'shop'])->name('shop');
Route::get('/cart', [GeneralController::class , 'cart'])->name('cart');
Route::get('/about', [GeneralController::class , 'about'])->name('about');
Route::get('/contact', [GeneralController::class , 'contact'])->name('contact');
Route::get('/wishlist', [GeneralController::class , 'wishlist'])->name('wishlist');
Route::get('/checkout', [GeneralController::class , 'checkout'])->name('checkout');
Route::get('/order-confirmation', [GeneralController::class , 'order_confirmation'])->name('order-confirmation');
Route::get('/product_details/{id}', [GeneralController::class , 'product_details'])->name('product_details');

