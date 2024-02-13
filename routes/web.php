<?php

use App\Http\Controllers\{HomeController, PageController, GalleryController};
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about-us', [App\Http\Controllers\PageController::class, 'about'])->name('about');
Route::get('/gallery', [App\Http\Controllers\PageController::class, 'gallery'])->name('gallery');
Route::get('/our-mission', [App\Http\Controllers\PageController::class, 'mission'])->name('mission');
Route::get('/forum', [App\Http\Controllers\PageController::class, 'forum'])->name('forum');
Route::match(['post', 'get'], '/contact-us', [App\Http\Controllers\PageController::class, 'contact'])->name('contact');
Route::get('/donate', [App\Http\Controllers\PageController::class, 'donate'])->name('donate');
Route::match(['post', 'get'], '/ylf-registration', [App\Http\Controllers\PageController::class, 'registration'])->name('registration');
Route::get('/ylf-success', [App\Http\Controllers\PageController::class, 'ylf_success'])->name('ylf-success');
