<?php

use App\Http\Controllers\EskrimController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', [EskrimController::class,'home'])->name('home.home');
Route::get('/catalog',[EskrimController::class,'show'])->name('catalog.show');
Route::get('/about',[EskrimController::class,'about'])->name('about.about');

URL::forceScheme('https');