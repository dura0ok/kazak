<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Admin\IndexController as AdminIndexController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\AuthController;


Route::get("/", [IndexController::class, "index"])->name("index");

// pages
Route::prefix("pages")->group(function () {
    Route::get("ataman", [PageController::class, "ataman"])->name("ataman");
    Route::get("contacts", [PageController::class, "contacts"])->name("contacts");
    Route::get("documents", [PageController::class, "documents"])->name("documents");
    Route::get("networks", [PageController::class, "networks"])->name("networks");
    Route::get("statements", [PageController::class, "statements"])->name("statements");
});

// admin
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
    Route::get('/', [AdminIndexController::class, 'index'])->name('admin.index');
    // authentication routes
    Route::get("login", [AuthController::class, "getLoginPage"])->name("admin.login");
    Route::post("authenticate", [AuthController::class, "authenticate"])->name("admin.authenticate");

});
