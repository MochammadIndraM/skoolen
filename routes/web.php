<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\loginRegisterFeatures\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FiturCuacaController;
use App\Http\Controllers\Admin\FiturHewanController;
use App\Http\Controllers\Admin\FiturLangitController;
use App\Http\Controllers\Admin\FiturTumbuhanController;


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

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('loginFeatures.Login.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('loginFeatures.Logout.post');

// halaman admin
Route::middleware([AdminMiddleware::class])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('Admin.Dashboard');
    Route::get('/fitur-cuaca', [FiturCuacaController::class, 'index'])->name('Admin.fitur-cuaca');
    Route::get('/fitur-hewan', [FiturHewanController::class, 'index'])->name('Admin.fitur-hewan');
    Route::get('/fitur-langit', [FiturLangitController::class, 'index'])->name('Admin.fitur-langit');
    Route::get('/fitur-tumbuhan', [FiturTumbuhanController::class, 'index'])->name('Admin.fitur-tumbuhan');
});


// halaman all role
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

Route::get('/langit', [LangitController::class, 'index'])->name('langit.index');
Route::get('/langit/{slug}', [LangitController::class, 'show'])->name('langit.show');
