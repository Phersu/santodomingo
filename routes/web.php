<?php

use App\Http\Controllers\MiCuentaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('mi-cuenta', [MiCuentaController::class, 'index'])->middleware('auth')->name('mi-cuenta');