<?php

use App\Http\Controllers\AbsencesController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    // In Root
    Route::prefix('/')->group(function () {
        Route::get('/', [ViewController::class, 'index'])->name('root');
        Route::get('/absences', [AbsencesController::class, 'absencesView'])->name('absences.view');
        Route::post('/absences', [AbsencesController::class, 'recordAbsences'])->name('absences.record');
    });

    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginaction'])->name('login.action');