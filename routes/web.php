<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PageController;


Route::get("/", [IndexController::class, "index"])->name("index");

// pages
Route::prefix("pages")->group(function () {
    Route::get("ataman", [PageController::class, "ataman"])->name("ataman");
});
