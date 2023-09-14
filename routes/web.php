<?php

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\BuletinController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\GeofisikaController;
use App\Http\Controllers\PelayananController;
use App\Http\Controllers\InfografisController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\DashboardBeritaController;
use App\Http\Controllers\DashboardPegawaiController;
use App\Http\Controllers\DashboardInfografisttmController;
use App\Http\Controllers\DashboardInfografisgempaController;
use App\Http\Controllers\DashboardInfografispetirController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// --------------- Beranda-----------------------

Route::get('/', [Controller::class, 'Home']);

// ----------------Profile----------------------
Route::get('/staf', [PegawaiController::class, 'index']);

Route::get('/profil-stasiun', [ProfileController::class, 'stasiun']);

Route::get('/struktur-organisasi', [ProfileController::class, 'struktur']);

Route::get('/visimisi', [ProfileController::class, 'visimisi']);

Route::get('/tentang', [ProfileController::class, 'tentang']);

// -------------Gempabumi dan Tsunami------------
Route::get('/mitigasigempa', [GeofisikaController::class, 'index']);

// -------------Publication Route---------------

//--infografis
Route::get('/infografis', [InfografisController::class, 'index']);

Route::get('/infografisgempa', [InfografisController::class, 'infografisgempa']);
Route::get('/infografispetir', [InfografisController::class, 'infografispetir']);
Route::get('/infografis-ttm', [InfografisController::class, 'infografisttm']);



//--buletin
Route::get('/buletin', [BuletinController::class, 'index']);

// Berita
Route::get('/berita', [BeritaController::class, 'berita']);
Route::get('/berita/{news:slug}', [BeritaController::class, 'beritasigle']);

Route::get('/authors/{author:username}', [BeritaController::class, 'beritauser']);

//----------------Pelayanan----------------------

Route::get('/datarequest', [PelayananController::class, 'datarequest']);



//------------------Login------------------------
Route::get('/login', [LoginController::class, 'Index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

//-----------------register----------------------

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);


Route::get('/dashboard', function () {
    return view('dashboard.index', [
        'title' => 'Dashboard'
    ]);
})->middleware('auth');

Route::resource('/dashboard/pegawai', DashboardPegawaiController::class)->middleware('auth');

Route::get('/dashboard/berita/checkSlug', [DashboardBeritaController::class, 'checkSlug'])->middleware(('auth'));
Route::resource('/dashboard/berita', DashboardBeritaController::class)->middleware('auth');

Route::get('/dashboard/infografisgempa/checkSlug', [DashboardInfografisgempaController::class, 'checkSlug'])->middleware(('auth'));
Route::resource('/dashboard/infografisgempa', DashboardInfografisgempaController::class)->middleware('auth');

Route::resource('/dashboard/infografispetir', DashboardInfografispetirController::class)->middleware('auth');

Route::resource('/dashboard/infografisttm', DashboardInfografisttmController::class)->middleware('auth');
