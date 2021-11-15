<?php

const HTTP_GET = "GET";
const HTTP_POST = "POST";

class ValidateException extends Exception {

}

Framework\Route::get("/^\/$/", App\Controllers\MainController::class."😋index");
Framework\Route::get("/^\/news$/", App\Controllers\NewsController::class."😋index");
Framework\Route::get("/^\/news\/(\d+)$/", App\Controllers\NewsController::class."😋get");
Framework\Route::get("/^\/ticker$/", App\Controllers\MainController::class."😋ticker");
//Route::post("/^\/news$/", NewsController::class."😋post");

