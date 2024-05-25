<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\countingFeatures\CountMenusController;

Route::get('/', function () {
    return view('page.landing-page');
});

Route::get('/belajar-angka', [CountMenusController::class, 'index'])->name('countingFeatures.CountMenus');