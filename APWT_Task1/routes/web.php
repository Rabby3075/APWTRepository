<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\productController;
use App\Http\Controllers\teamsController;
use App\Http\Controllers\aboutUsController;
use App\Http\Controllers\contactController;
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


Route::get('/',[homeController::class, 'homePage'])->name('home');
Route::get('/product',[productController::class, 'productList'])->name('product');
Route::get('/teams',[teamsController::class, 'teams'])->name('teams');
Route::get('/aboutUs',[aboutUsController::class, 'aboutUsView'])->name('aboutUs');
Route::get('/contactUs',[ContactController::class, 'contactUs'])->name('contact');
