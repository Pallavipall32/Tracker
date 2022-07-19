<?php

use Illuminate\Support\Facades\Route;

use App\http\Controllers\{Homecontroller,ManageassetController};

Route::get("/",[Homecontroller::class,"dashbaord"])->name("dashbaord");
Route::get("/login",[Homecontroller::class,"login"])->name("login");
Route::get("/logout",[Homecontroller::class,"logout"])->name("logout");
Route::get("/manageasset",[Homecontroller::class,"manageasset"])->name("manageasset");
Route::resource('Manageasset',ManageassetController::class);


Route::controller(HomeController::class)->group (function () {
    Route::match(['get', 'post'],'/login','login')->name("login");
    Route::match(['get', 'post'],'/manageasset','manageasset')->name("manageasset");
    Route::get('/logout','logout')->name("logout");

});