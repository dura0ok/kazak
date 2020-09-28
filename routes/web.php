<?php


use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DocumentCategoryController;
use App\Http\Controllers\Admin\DocumentController;
use App\Http\Controllers\Admin\IndexController as AdminIndexController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\MenuItemController;
use App\Http\Controllers\Admin\SlideController;
use App\Http\Controllers\Admin\StatementController;
use App\Http\Controllers\Admin\PageController as AdminPageController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


Route::get("/", [IndexController::class, "index"])->name("index");

// pages
Route::prefix("pages")->group(function () {
    Route::get("ataman", [PageController::class, "ataman"])->name("ataman");
    Route::get("contacts", [PageController::class, "contacts"])->name("contacts");
    Route::get("documents", [PageController::class, "documents"])->name("documents");
    Route::get("networks", [PageController::class, "networks"])->name("networks");
    Route::get("statements", [PageController::class, "statements"])->name("statements");
    Route::get("news", [PageController::class, "news"])->name("news");
    Route::get("article/{id}", [PageController::class, "article"])->name("article");
    Route::get('page/{title}', [PageController::class, 'getPage'])->name('getPage');
});

// authentication routes
Route::get("login", [AuthController::class, "getLoginPage"])->name("admin.login");
Route::post("authenticate", [AuthController::class, "authenticate"])->name("admin.authenticate");

// admin
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
    Route::get('/', [AdminIndexController::class, 'index'])->name('admin.index');
    Route::resource('news', ArticleController::class);
    Route::resource('slides', SlideController::class);
    Route::resource('statements', StatementController::class);
    Route::resource('documentCategories', DocumentCategoryController::class);
    Route::resource('docs', DocumentController::class);
    Route::resource('menu', MenuItemController::class);
    Route::resource('pages', AdminPageController::class, [
        'as' => 'admin.pages'
    ]);
    Route::post('pages/upload', [AdminPageController::class, 'uploadImage'])->name('admin.pages.pages.upload');
});
