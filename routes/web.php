<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\PembinaController;
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

    Route::middleware("roles.admin")->group(function () {
        Route::resource('pembina', PembinaController::class);
    });
});

require __DIR__ . '/auth.php';
