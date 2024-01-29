<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\HomeController;
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
});


