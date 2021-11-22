<?php

use Illuminate\Support\Facades\Route;

Route::get('/ticker2', [\App\Http\Controllers\MainController::class, 'ticker2']);
Route::get('/', [\App\Http\Controllers\MainController::class, 'main']);
