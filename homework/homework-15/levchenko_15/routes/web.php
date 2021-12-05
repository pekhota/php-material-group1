<?php

const HTTP_GET = "GET";
const HTTP_POST = "POST";

class ValidateException extends Exception
{
}

Route::get("/^\/admin$/", AdminController::class."😋get");
Route::post("/^\/admin$/", AdminController::class."😋index");
Route::get("/^\/admin\/(\d+)$/", AdminController::class."😋post");
Route::post("/^\/read$/", ReadController::class."😋index");
Route::get("/^\/$/", MainController::class."😋index");
Route::get("/^\/news$/", NewsController::class."😋index");
Route::get("/^\/news\/(\d+)$/", NewsController::class."😋get");
Route::post("/^\/news$/", NewsController::class."😋post");
Route::get("/^\/masonry$/", MasonryController::class."😋index");
Route::post("/^\/masonry$/", MasonryController::class."😋post");
Route::get("/^\/pricing$/", PricingController::class."😋index");
Route::get("/^\/signup$/", SignupController::class."😋index");
Route::post("/^\/signup$/", SignupController::class."😋post");
Route::get("/^\/user$/", UserController::class."😋index");
Route::get("/^\/delete\/(\d+)$/", DeleteController::class."😋get");
Route::get("/^\/edit\/(\d+)$/", EditController::class."😋get");
Route::post("/^\/edit\/(\d+)$/", EditController::class."😋post");
Route::get("/^\/logout$/", LogoutController::class."😋index");
Route::get("/^\/login$/", LoginController::class."😋index");
Route::post("/^\/login$/", LoginController::class."😋post");
Route::get("/^\/login\/(\d+)$/", LoginController::class."😋edit");
Route::post("/^\/delete\/(\d+)$/", DeleteController::class."😋post");
Route::get("/^\/brick$/",BrickController::class."😋index");

