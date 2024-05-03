<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name("home");
Route::get('/store/{slug}', [HomeController::class, 'store'])->name("home.store");
Route::get('/blogs', [HomeController::class, 'blogs'])->name("home.blogs");
Route::get('/blog/{slug}', [HomeController::class, 'blog'])->name("home.blog");
Route::get('/category/{slug}', [HomeController::class, 'category'])->name("home.category");

// Pages
Route::get('/terms-and-conditions', [HomeController::class, 'termsandconditions'])->name("home.terms-and-conditions");
Route::get('/privacy-policy', [HomeController::class, 'privacypolicy'])->name("home.privacy-policy");
Route::get('/disclaimer', [HomeController::class, 'disclaimer'])->name("home.disclaimer");
Route::get('/about-us', [HomeController::class, 'aboutus'])->name("home.about-us");
Route::get('/contact-us', [HomeController::class, 'contactus'])->name("home.contact-us");


