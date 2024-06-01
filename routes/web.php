<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\countingFeatures\CountMenusController;
use App\Http\Controllers\countingFeatures\LearnNumberController;
use App\Http\Controllers\sainsFeatures\SainsMenuController;
use App\Http\Controllers\readingFeatures\LearnReadingController;

Route::get('/', function () {
    return view('page.landing-page');
});

Route::get('/belajar-angka', [CountMenusController::class, 'index'])->name('countingFeatures.CountMenus');
Route::get('/belajar-angka/learn-number', [LearnNumberController::class, 'index'])->name('countingFeatures.LearnNumber');

Route::get('/sains', [SainsMenuController::class, 'index'])->name('sainsFeatures.SainsMenu');


Route::get('/belajar-membaca', [LearnReadingController::class, 'index'])->name('readingFeatures.LearnReading');
