<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingController; // Add this line
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
require __DIR__.'/auth.php';

Route::resource('/', LandingController::class);



Route::middleware('auth')->group(function () {
    Route::resource('/profile', ProfileController::class);
    Route::resource('/dashboard', DashboardController::class);
    Route::resource('/pegawai', PegawaiController::class);
    
});

