<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// home
Route::get('/', [HomeController::class, 'index']);
Route::get('/category', [HomeController::class, 'products']);
// category product
Route::prefix('category')->group(function () {
    Route::get('food-beverage', [ProductController::class, 'foodbeverage']);
    Route::get('beauty-health', [ProductController::class, 'beautyhealth']);
    Route::get('home-care', [ProductController::class, 'homecare']);
    Route::get('baby-kid', [ProductController::class, 'babykid']);
});
// User
Route::get('/user/{id}/name/{name}', [UserController::class, 'index']);
// Sales
Route::get('/sales', [SalesController::class, 'index']);