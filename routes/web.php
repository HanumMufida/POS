<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/home', [HomeController::class, 'home']);
Route::get('/category/babykid', [ProductsController::class, 'babykid']);
Route::get('/category/beauty-health', [ProductsController::class, 'beautyhealthy']);
Route::get('/category/food-beverage ', [ProductsController::class, 'foodbeverage']);
Route::get('/category/home-care ', [ProductsController::class, 'homecare']);  
Route::get('/user/{id}/nama/{nama} ', [UserController::class, 'user']); 

    