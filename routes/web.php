<?php

use App\Http\Controllers\AbsenceManagement;
use App\Http\Controllers\AbsencesController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewController;
use App\Http\Middleware\RoleMiddleware;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    // In Root
    Route::prefix('/')->group(function () {
        Route::get('/', [ViewController::class, 'index'])->name('root');
        Route::get('/scan', [ViewController::class, 'scanqr'])->name('scanqr');
        Route::get('/absences', [AbsencesController::class, 'recordAbsences'])->name('absences.record');
    });

    Route::middleware(RoleMiddleware::class)->group(function () {
        // To QRCode Absense
        Route::get('/absencesqrcode', [AbsencesController::class, 'absencesView'])->name('absences.view');
        // To Dashboard
        Route::prefix('/dashboard')->group(function () {
            Route::get('/', [UserController::class, 'dashboard'])->name('admin.view');
            Route::get('/user', [UserController::class, 'userManagement'])->name('admin.user.view');
            Route::get('/absencemanagement', [AbsenceManagement::class, 'managementView'])->name('admin.absence.view');
        });
    });
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginaction'])->name('login.action');