<?php

const HTTP_GET = "GET";
const HTTP_POST = "POST";

class ValidateException extends Exception {

}

Route::get("/^\/$/", MainController::class."😋index");
Route::get("/^\/news$/", NewsController::class."😋index");
Route::get("/^\/news\/(\d+)$/", NewsController::class."😋get");
//Route::post("/^\/news$/", NewsController::class."😋post");

