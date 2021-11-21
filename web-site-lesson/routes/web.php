<?php
declare(strict_types=1);

const HTTP_GET = "GET";
const HTTP_POST = "POST";



Route::get("/^\/$/", MainController::class."😋index");

Route::get("/^\/news$/", NewsController::class."😋index");
Route::get("/news\/(\d+)", NewsController::class."😋get");
Route::get("/news-delete/(\d+)", NewsController::class."😋delete");
Route::post("/^\/news$/", NewsController::class."😋post");

Route::get("/news-edit/(\d+)", NewsEditController::class."😋get");
Route::post("/news-update/(\d+)", NewsEditController::class."😋post");

Route::get("/^\/signup-start$/", GateController::class."😋start_register");
Route::post("/^\/signup-end$/", GateController::class."😋end_register");

Route::get("/^\/login-start$/", GateController::class."😋start_login");
Route::post("/^\/login-end$/", GateController::class."😋end_login");

Route::get("/^\/logout$/", GateController::class."😋logout");

Route::get("/^\/admin$/", AdminController::class."😋index");

Route::get("/0@0_0/", MasonryController::class."😋index");

Route::get("/^\/pricing$/", PricingController::class."😋index");



