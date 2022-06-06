<?php
use App\Http\Controllers\homeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\contactUsController;
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
Route::get('/registration',[StudentController::class, 'studentCreate'])->name('studentCreatePage');
Route::post('/studentCreate',[StudentController::class, 'studentCreateSubmitted'])->name('studentCreate');
Route::get('/login',[StudentController::class, 'studentLogin'])->name('studentLoginPage');
Route::post('/loginSubmit',[StudentController::class, 'studentLoginSubmitted'])->name('studentLogin');
Route::get('/contactUs',[contactUsController::class, 'ContactView'])->name('ContactView');
