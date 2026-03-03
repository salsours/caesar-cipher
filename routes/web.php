<?php

use App\Http\Controllers\CipherController;
use Illuminate\Support\Facades\Route;

Route::get('/salsa', [CipherController::class, 'index']);
Route::post('/encrypt', [CipherController::class, 'encrypt'])->name('encrypt');
Route::post('/decrypt', [CipherController::class, 'decrypt'])->name('decrypt');