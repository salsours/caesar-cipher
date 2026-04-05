<?php

use App\Http\Controllers\CipherController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', [AuthController::class, 'login']);

Route::get('/dashboard', [AuthController::class, 'dashboard']);

// route lain
Route::get('/salsa', [CipherController::class, 'index']);
Route::post('/encrypt', [CipherController::class, 'encrypt'])->name('encrypt');
Route::post('/decrypt', [CipherController::class, 'decrypt'])->name('decrypt');