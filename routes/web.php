<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ProductController;

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

Auth::routes();

Route::get('/', [LandingPageController::class, 'index']);
Route::get('/about-us', [LandingPageController::class, 'profile']);

Route::middleware('auth')->group(function () {
    // home
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    // header
    Route::get('/header', [HeaderController::class, 'index'])->name('header');

    // update header
    Route::post('/header', [HeaderController::class, 'update'])->name('header.update');

    // profile
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

    // update new profile
    Route::post('/profile', [ProfileController::class, 'store'])->name('profile.store');

    // team
    Route::get('/team', [TeamController::class, 'index'])->name('team');

    // create new team
    Route::get('/team/add-new-team', [TeamController::class, 'create'])->name('team.create');

    // save new team
    Route::post('/team', [TeamController::class, 'store'])->name('team.store');

    // delete team
    Route::delete('/team/{id}', [TeamController::class, 'destroy'])->name('team.destroy');

    // product
    Route::get('/product', [ProductController::class, 'index'])->name('product');

    // create new product
    Route::get('/product/add-new-product', [ProductController::class, 'create'])->name('product.create');

    // save new product
    Route::post('/product', [ProductController::class, 'store'])->name('product.store');

    // edit product
    Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');

    // update product
    Route::post('/product/edit', [ProductController::class, 'update'])->name('product.update');

    // delete product
    Route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('product.destroy');

    // logout
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});
