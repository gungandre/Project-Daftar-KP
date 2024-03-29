<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbsenController;
use App\Http\Controllers\MagangController;
use App\Http\Controllers\UserDataController;
use App\Http\Controllers\admin\PembinaController;
use App\Http\Controllers\MagangRequestController;
use App\Http\Controllers\KegiatanMagangController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\PeriodeController;
use App\Http\Controllers\VerifikasiController;

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
Route::delete('magang-delete/{magang}',[MagangController::class,'deleteReject'])->name('magang.deleteReject');
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('waitform', [VerifikasiController::class, 'waitForm'])->name('verifikasi.wait');
Route::get('verifikasi', [VerifikasiController::class, 'index'])->name('verifikasi.user');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::middleware('auth', 'IsActive')->group(function () {
    Route::get('nilai', [NilaiController::class, "index"])->name('nilai.index');
    Route::put('nilai/update/{nilai}', [NilaiController::class, "update"])->name('nilai.update');

    Route::get('nilai/{nilai}', [NilaiController::class, "edit"])->name('nilai.edit')->middleware('CheckNilai');

    Route::get('changePassword', [NewPasswordController::class, 'create'])->name('profile.changePassword');
    Route::resource('userData', AbsenController::class);
    Route::middleware("roles.pembina")->group(function () {
        Route::resource('magang', MagangController::class);
        Route::resource('kegiatan-magang', KegiatanMagangController::class);
        Route::put('magang/{magang}/change-status', [MagangController::class, 'changeStatus'])->name('magang.change-status');
        Route::get('magang/download-pdf/{file}', [MagangController::class, 'downloadPDF'])->name('magang.downloadPdf');
    });

    Route::middleware("roles.admin")->group(function () {
        Route::resource('pembina', PembinaController::class);
        Route::get('kegiatan-magang/{file}/download', [KegiatanMagangController::class, 'downloadPDF'])->name('kegiatan-magang.download-pdf');
        Route::get('magang/{magang}/pembina', [MagangController::class, 'pembina'])->name('magang.pembina');
        Route::put('magang/{magang}/pembina', [MagangController::class, 'pembinaUpdate'])->name('magang.pembina-add');
        Route::resource('divisi', DivisiController::class);
    });

    Route::middleware("roles.user")->group(function () {

        Route::get('magang/{magang}/editMagang', [MagangController::class, 'editMagang'])->name('magang.editprofile');
        Route::put('magang/{magang}/updateMagang', [MagangController::class, 'updateMagang'])->name('magang.updatemangang');
        Route::resource('user-absen', AbsenController::class);
    });
});

Route::middleware("roles.user")->group(function () {
    Route::get('magang/{magang}/editMagang', [MagangController::class, 'editMagang'])->name('magang.editprofile');
    Route::put('magang/{magang}/updateMagang', [MagangController::class, 'updateMagang'])->name('magang.updatemangang');
});

Route::get('reques-login', [MagangRequestController::class, 'index'])->name('magang.request');
Route::get('daftar-magang', [MagangRequestController::class, 'index'])->name('magang.request')->middleware('Periode');
Route::post('request-store', [MagangRequestController::class, 'requestForm'])->name('magang.storerequest');

Auth::routes([
    'register' => false, // Registration Routes...
    'verify' => false, // Email Verification Routes...
]);
require __DIR__ . '/auth.php';





Route::resource('Periode',PeriodeController::class);

Route::get('Periode/inactive/{periode}',[PeriodeController::class,'inActivePeriode'])->name('periode.inactive');
