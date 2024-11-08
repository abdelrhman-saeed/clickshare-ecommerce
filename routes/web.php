<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Support\Facades\Route;


Route::view('/', 'welcome');
Route::view('signing', 'users.signing')->name('signing');

Route::post('signin', [AuthController::class, 'signin'])
        ->name('signin');

Route::post('signup', [UserController::class, 'store'])
        ->name('signup');

Route::get('signout', [AuthController::class, 'signout'])
        ->name('signout');

Route::resource('products', ProductController::class)
        ->middleware(RedirectIfAuthenticated::class);
