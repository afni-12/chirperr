<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChirpController;

// landing page
Route::view('/', 'welcome');

// halaman chirps
Route::get('/chirps', [ChirpController::class, 'index']);