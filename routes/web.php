<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\permohonanController;

Route::get('/', [AuthenticatedSessionController::class, 'create'])
    ->name('login');

Route::get('/dashboard', [permohonanController::class, 'getAllPermohonan'])
    ->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/buat-permohonan', function () {
        return view('user.buat-permohonan');
    })->name('buat-permohonan');
    Route::post('/form-permohonan', [permohonanController::class, 'showForm'])->name('isi-form');
    Route::get('/user/konfirmasi', function () {
        return view('user.konfirmasi');
    })->name('konfirmasi');
    Route::post('/user/konfirmasi', [permohonanController::class, 'submitForm'])->name('submit-form');
});

Route::get('/user/buat-permohonan', function () {
    return view('user.buat-permohonan');
});

Route::get('/user/isi-form', function () {
    return view('user.isi-form');
});

Route::get('/user/konfirmasi', function () {
    return view('user.konfirmasi');
});

Route::get('/user/dashboard', function () {
    return view('user.permohonan');
});

require __DIR__ . '/auth.php';
