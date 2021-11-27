<?php

use Illuminate\Support\Facades\Route;

Route::resource('news', \App\Http\Controllers\NewsController::class);


Route::get('/ticker2', [\App\Http\Controllers\MainController::class, 'ticker2']);
Route::get('/', [\App\Http\Controllers\MainController::class, 'main']);
