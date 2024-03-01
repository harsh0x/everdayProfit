<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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


Route::view('/registration', "admin.registration");


Route::view('/index', "admin.index")->name('index');

Route::post('/register',[UserController::class,"register"])->name('register');

Route::view('/login',"login");

Route::post('/login1', [UserController::class, 'login'])->name('login1');

Route::view('/dashboard',"dashboard");
Route::post('/dashboard',[UserController::class,'dashboard']);


// Route for the signup page
Route::get('/signup', function () {
    return view('signup');
});

// Route for the signin page
Route::get('/signin', function () {
    return view('admin.signin');
});

//  Route::view('/signin','signin');


Route::post('/postsign',[AdminController::class,'login'])->name('postsign');


// All Users
Route::get('all-users',[AdminController::class,'allUsers'])->name('all-users');

// Inactive Users
Route::get('inactive-users',[AdminController::class,'inactiveusers'])->name('inactive-users');

// Transaction History
// Route::get('/transaction-history', 'TransactionController@index')->name('transaction-history');
Route::get('transaction-history',[AdminController::class,'transactionhistory'])->name('transaction-history');

// Add Funds
// Route::get('/add-funds', 'FundsController@addFunds')->name('add-funds');
// Route::post('/add-funds', 'FundsController@store')->name('add-funds.store');

Route::get('add-funds',[AdminController::class,'addfunds'])->name('add-funds');

// Logout (handled by Laravel's Auth system)
// Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/logout', [AdminController::class, 'logout'])->name('logout');

Route::get('/admin/getallusers', [AdminController::class, 'getAllUsers']);