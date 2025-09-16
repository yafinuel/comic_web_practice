<?php

use App\Http\Controllers\ComicController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('comic/{id}', [ComicController::class, 'show'])->name('showComic');