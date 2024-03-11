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

Route::get('/',[\App\Http\Controllers\HomeController::class, 'index']);

Route::get('/services',[\App\Http\Controllers\HomeController::class,
    'services'])->name('services-list');

Route::post('/services-add',[\App\Http\Controllers\HomeController::class,
    'addServices'])->name('services-add');




