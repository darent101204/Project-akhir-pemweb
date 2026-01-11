<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Home page
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Static pages
Route::get('/delivery', [App\Http\Controllers\PageController::class, 'delivery'])->name('delivery');
Route::get('/about', [App\Http\Controllers\PageController::class, 'about'])->name('about');

// Product CRUD routes
Route::resource('products', App\Http\Controllers\ProductController::class);
