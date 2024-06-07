<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\countingFeatures\CountMenusController;
use App\Http\Controllers\countingFeatures\LearnNumberController;
use App\Http\Controllers\readingFeatures\LearnReadingController;
use App\Http\Controllers\sainsFeatures\CuacaController;
use App\Http\Controllers\sainsFeatures\HabitatController;
use App\Http\Controllers\sainsFeatures\SainsMenuController;
use App\Http\Controllers\sainsFeatures\HewanController;
use App\Http\Controllers\sainsFeatures\LangitController;
use App\Http\Controllers\sainsFeatures\LearnHabitatController;

Route::get('/', function () {
    return view('page.landing-page');
});

Route::get('/belajar-berhitung', [CountMenusController::class, 'index'])->name('countingFeatures.CountMenus');
Route::get('/belajar-berhitung/angka', [LearnNumberController::class, 'index'])->name('countingFeatures.LearnNumber');

Route::get('/belajar-membaca', [LearnReadingController::class, 'index'])->name('readingFeatures.LearnReading');

Route::get('/sains', [SainsMenuController::class, 'index'])->name('sainsFeatures.SainsMenu');
Route::get('/hewan', [HewanController::class, 'index'])->name('sainsFeatures.Hewan');
Route::get('/cuaca', [CuacaController::class, 'index'])->name('sainsFeatures.Cuaca');
Route::get('/langit', [LangitController::class, 'index'])->name('sainsFeatures.Langit');
Route::get('/habitat', [HabitatController::class, 'index'])->name('sainsFeatures.Habitat');
