<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
Route::get('/', [HomeController::class, 'index'])->name('home'); 
Route::get('/about-us', [HomeController::class, 'about'])->name('about-us'); 
Route::get('/service', [HomeController::class, 'service'])->name('service'); 
Route::get('/contact', [HomeController::class, 'contact'])->name('contact'); 