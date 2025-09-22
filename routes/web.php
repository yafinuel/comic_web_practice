<?php

use App\Http\Controllers\ComicController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('comic/show/{id}', [ComicController::class, 'show'])->name('show');
Route::get('comic/search/', [ComicController::class, 'index'])->name('search');
