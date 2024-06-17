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
    
    Route::get('/fitur-hewan', [FiturHewanController::class, 'index'])->name('Admin.fitur-hewan');
    Route::post('/fitur-hewan/add', [FiturHewanController::class, 'store'])->name('Admin.fitur-hewan.store');
    Route::get('/fitur-hewan/{id}/hewan', [FiturHewanController::class, 'byId'])->name('Admin.fitur-hewan.byId');
    Route::post('/fitur-hewan/update/{id}', [FiturHewanController::class, 'update'])->name('Admin.fitur-hewan.update');
    Route::delete('/fitur-hewan/destroy/{id}', [FiturHewanController::class, 'destroy'])->name('Admin.fitur-hewan.destroy');
    
    Route::get('/fitur-tumbuhan', [FiturTumbuhanController::class, 'index'])->name('Admin.fitur-tumbuhan');
    Route::post('/fitur-tumbuhan/add', [FiturTumbuhanController::class, 'store'])->name('Admin.fitur-tumbuhan.store');
    Route::get('/fitur-tumbuhan/{id}/tumbuhan', [FiturTumbuhanController::class, 'byId'])->name('Admin.fitur-tumbuhan.byId');
    Route::post('/fitur-tumbuhan/update/{id}', [FiturTumbuhanController::class, 'update'])->name('Admin.fitur-tumbuhan.update');
    Route::delete('/fitur-tumbuhan/destroy/{id}', [FiturTumbuhanController::class, 'destroy'])->name('Admin.fitur-tumbuhan.destroy');
    
    Route::get('/fitur-cuaca', [FiturCuacaController::class, 'index'])->name('Admin.fitur-cuaca');
    Route::post('/fitur-cuaca/add', [FiturCuacaController::class, 'store'])->name('Admin.fitur-cuaca.store');
    Route::get('/fitur-cuaca/{id}/cuaca', [FiturCuacaController::class, 'byId'])->name('Admin.fitur-cuaca.byId');
    Route::post('/fitur-cuaca/update/{id}', [FiturCuacaController::class, 'update'])->name('Admin.fitur-cuaca.update');
    Route::delete('/fitur-cuaca/destroy/{id}', [FiturCuacaController::class, 'destroy'])->name('Admin.fitur-cuaca.destroy');

    Route::get('/fitur-langit', [FiturLangitController::class, 'index'])->name('Admin.fitur-langit');
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


Route::get('/tentang-kami', function () {
    return view('page.aboutUs');
});
