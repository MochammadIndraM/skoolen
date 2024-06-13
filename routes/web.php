<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginRegisterFeatures\LoginController;

use App\Http\Controllers\countingFeatures\CountMenusController;
use App\Http\Controllers\countingFeatures\LearnNumberController;

use App\Http\Controllers\readingFeatures\LearnReadingController;
use App\Http\Controllers\readingFeatures\GaleryLearnReading;

use App\Http\Controllers\sainsFeatures\SainsMenuController;
use App\Http\Controllers\sainsFeatures\CuacaController;
use App\Http\Controllers\sainsFeatures\KategoriHewanController;
use App\Http\Controllers\sainsFeatures\KategoriTumbuhanController;
use App\Http\Controllers\sainsFeatures\LangitController;
use App\Http\Controllers\sainsFeatures\HabitatController;
use App\Http\Controllers\sainsFeatures\HewanController;
use App\Http\Controllers\countingFeatures\LearnClockController;


Route::get('/', function () {
    return view('page.landing-page');
});

Route::get('/login', [LoginController::class, 'index'])->name('loginFeatures.Login');

Route::get('/belajar-berhitung', [CountMenusController::class, 'index'])->name('countingFeatures.CountMenus');
Route::get('/belajar-berhitung/angka', [LearnNumberController::class, 'index'])->name('countingFeatures.LearnNumber');

Route::get('/belajar-membaca', [LearnReadingController::class, 'index'])->name('readingFeatures.LearnReading');
Route::get('/belajar-membaca/galery', [GaleryLearnReading::class, 'index'])->name('readingFeatures.GaleryLearnReading');
Route::get('/belajar-angka/learn-clock', [LearnClockController::class, 'index'])->name('countingFeatures.LearnClock');

Route::get('/sains', [SainsMenuController::class, 'index'])->name('sainsFeatures.SainsMenu');
Route::get('/kategori-hewan', [KategoriHewanController::class, 'index'])->name('sainsFeatures.Hewan');
Route::get('/list-hewan/{slug}', [KategoriHewanController::class, 'listHewan'])->name('sainsFeatures.listHewan');
Route::get('/hewan/{nama_hewan}', [KategoriHewanController::class, 'detailHewan'])->name('sainsFeatures.detailHewan');

Route::get('/kategori-tumbuhan', [KategoriTumbuhanController::class, 'index'])->name('sainsFeatures.Tumbuhan');
Route::get('/list-tumbuan/{slug}', [KategoriTumbuhanController::class, 'listTumbuhan'])->name('sainsFeatures.listTumbuhan');
Route::get('/tumbuhan/{nama_tumbuhan}', [KategoriTumbuhanController::class, 'detailTumbuhan'])->name('sainsFeatures.detailTumbuhan');

Route::get('/habitat', [HabitatController::class, 'index'])->name('sainsFeatures.Habitat');

Route::get('/cuaca', [CuacaController::class, 'index'])->name('cuaca.index');
Route::get('/cuaca/{slug}', [CuacaController::class, 'show'])->name('cuaca.show');

Route::get('/langit', [LangitController::class, 'index'])->name('sainsFeatures.Langit');
