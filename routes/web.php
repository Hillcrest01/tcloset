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
});

Route::get('submitReg', [RegisterController::class , 'create']);

