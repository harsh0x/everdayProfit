<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
// use App\Http\Controllers\loginController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::view('/registration', "registration");
Route::view('/index', "index")->name('index');

Route::post('/register',[UserController::class,"register"])->name('register');

Route::view('/login',"login");

Route::post('/login1', [UserController::class, 'login'])->name('login1');

Route::view('/dashboard',"dashboard");
Route::post('/dashboard',[UserController::class,'dashboard']);