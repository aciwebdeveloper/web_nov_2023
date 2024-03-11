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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/products', [App\Http\Controllers\ProductController::class, 'index'])->name('products');
Route::get('/products-create', [App\Http\Controllers\ProductController::class, 'create'])->name('products-create');
Route::post('/products-save', [App\Http\Controllers\ProductController::class, 'store'])->name('products-save');

Route::get('/products-delete/{id}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('products-delete');
Route::get('/products-edit/{id}', [App\Http\Controllers\ProductController::class, 'edit'])->name('products-edit');

Route::post('/products-update', [App\Http\Controllers\ProductController::class, 'update'])->name('products-update');
