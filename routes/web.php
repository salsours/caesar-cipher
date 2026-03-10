<?php

use App\Http\Controllers\CipherController;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/salsa', [CipherController::class, 'index']);
Route::post('/encrypt', [CipherController::class, 'encrypt'])->name('encrypt');
Route::post('/decrypt', [CipherController::class, 'decrypt'])->name('decrypt');