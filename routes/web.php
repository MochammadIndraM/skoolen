<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\countingFeatures\CountMenusController;
use App\Http\Controllers\countingFeatures\LearnNumberController;

Route::get('/', function () {
    return view('page.landing-page');
});

Route::get('/menu-berhitung', [CountMenusController::class, 'index'])->name('countingFeatures.CountMenus');
Route::get('/belajar-angka', [LearnNumberController::class, 'index'])->name('countingFeatures.LearnNumber');