<?php

use App\Http\Controllers\AbsenController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\PembinaController;
use App\Http\Controllers\MagangController;
use App\Http\Controllers\MagangRequestController;
use App\Http\Controllers\UserDataController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth', 'IsActive')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('userData',AbsenController::class);

    Route::middleware("roles.admin")->group(function () {
        Route::resource('pembina', PembinaController::class);
    });
});

Route::get('reques-login', [MagangRequestController::class, 'index'])->name('magang.request');
Route::post('request-store', [MagangRequestController::class, 'requestForm'])->name('magang.storerequest');

Auth::routes([
    'register' => false, // Registration Routes...
    'verify' => false, // Email Verification Routes...
]);
require __DIR__ . '/auth.php';
