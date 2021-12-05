<?php

const HTTP_GET = "GET";
const HTTP_POST = "POST";

class ValidateException extends Exception {

}

Route::get("/^\/$/", MainController::class."😋index");
Route::get("/^\/news$/", NewsController::class."😋index");
Route::get("/^\/news\/(\d+)$/", NewsController::class."😋get");
Route::post("/^\/news$/", NewsController::class."😋post");
Route::get("/^\/adminpanel\/news$/", NewsController::class."😋AdminPanel");
Route::get("/^\/adminpanel\/news\/delete\/(\d+)$/", NewsController::class."😋delete");
Route::get("/^\/adminpanel\/news\/details\/(\d+)$/", NewsController::class."😋details");
Route::get("/^\/adminpanel\/news\/edit\/(\d+)$/", NewsController::class."😋edit_get");
Route::post("/^\/adminpanel\/news\/edit$/", NewsController::class."😋edit_post");




Route::get("/^\/pricing$/", PricingController::class."😋get");
Route::get("/^\/masonry$/", MasonryController::class."😋index");
Route::post("/^\/masonry$/", MasonryController::class."😋post");
Route::get("/^\/fillmasonry$/", MasonryController::class."😋add");



Route::get("/^\/user$/", UserController::class."😋index");
Route::get("/^\/signup$/", SignController::class."😋signup_get");
Route::post("/^\/signup$/", SignController::class."😋signup_post");

Route::get("/^\/login$/", SignController::class."😋login_get");
Route::post("/^\/login$/", SignController::class."😋login_post");
Route::get("/^\/logout$/", SignController::class."😋logout");



