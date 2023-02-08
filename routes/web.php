<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\PembinaController;
use App\Http\Controllers\MagangController;
use App\Http\Controllers\MagangRequestController;
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

Route::middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('magang', MagangController::class);

    Route::middleware("roles.admin")->group(function () {
        Route::resource('pembina', PembinaController::class);
    });
});
Route::get('reques-login', [MagangRequestController::class, 'index'])->name('magang.request');

Auth::routes([
    'register' => false, // Registration Routes...
    'verify' => false, // Email Verification Routes...
]);
require __DIR__ . '/auth.php';
