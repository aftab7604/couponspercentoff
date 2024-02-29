<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\StoreController;
/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/


Route::get('login', [LoginController::class, 'index'])->name('admin.login');
Route::post('login', [LoginController::class, 'authenticate'])->name('admin.authenticate');
Route::get('logout', [LoginController::class, 'logout'])->name('admin.logout');
Route::get("create", [LoginController::class, 'create'])->name("admin.create");

Route::middleware(['admin'])->group(function() {
    Route::get('/', [HomeController::class, 'index'])->name("admin");
    Route::post("check/slug",[HomeController::class, 'check_slug'])->name("admin.checkslug");

    Route::get('categories', [CategoryController::class, 'index'])->name("admin.categories");
    Route::post('categories/add', [CategoryController::class, 'create'])->name("admin.categories.create");
    Route::post('categories/delete', [CategoryController::class, 'delete'])->name("admin.categories.delete");
    Route::post('categories/update', [CategoryController::class, 'update'])->name("admin.categories.update");

    Route::get('stores', [StoreController::class, 'index'])->name("admin.stores");
    Route::post('stores/add', [StoreController::class, 'create'])->name("admin.stores.create");
    Route::post('stores/delete', [StoreController::class, 'delete'])->name("admin.stores.delete");
    Route::post('stores/update', [StoreController::class, 'update'])->name("admin.stores.update");
    Route::get("stores/get/{id}",[StoreController::class, 'get_by_id'])->name("admin.stores.get.by.id");

});


