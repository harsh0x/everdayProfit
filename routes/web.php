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


// Route::view('/index', "admin.index")->name('index');

// Route::post('/register',[UserController::class,"register"])->name('register');

Route::view('/login',"login");

Route::post('/login1', [UserController::class, 'login'])->name('login1');

// Route::view('/dashboard',"dashboard");
// Route::post('/dashboard',[UserController::class,'dashboard']);


// Route for the signup page
// Route::get('/signup', function () {
//     return view('signup');
// });

// Route for the signin page
Route::get('/signin', function () {
    return view('admin.signin');
});

//  Route::view('/signin','signin');


Route::post('/postsign',[AdminController::class,'login'])->name('postsign');


// All Users
Route::get('all-users',[AdminController::class,'allUsers'])->name('all-users');

// Active Users
Route::get('active-users',[AdminController::class,'getActiveUsers'])->name('active-users');

// Inactive Users
Route::get('inactive-users',[AdminController::class,'getInactiveUsers'])->name('inactive-users');

// user deposits
Route::get('user-deposits',[AdminController::class,'userdeposits'])->name('user-deposits');

// user withdrawl
Route::get('user-withdrawl',[AdminController::class,'userwithdrawl'])->name('user-withdrawl');

// Transaction History
// Route::get('transaction-history',[AdminController::class,'transactionhistory'])->name('transaction-history');

// Add Funds
// Route::get('/add-funds', 'FundsController@addFunds')->name('add-funds');
// Route::post('/add-funds', 'FundsController@store')->name('add-funds.store');

Route::get('add-funds',[AdminController::class,'addfunds'])->name('add-funds');

// My Profile
Route::get('My-Profile',[AdminController::class,'MyProfile'])->name('My-Profile');  

// Change Password
Route::get('change-password',[AdminController::class,'changepassword'])->name('change-password');  

// Logout (handled by Laravel's Auth system)
// Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/logout', [AdminController::class, 'logout'])->name('logout');

// get all users
Route::get('/admin/getallusers', [AdminController::class, 'getAllUsers']);

// change status
Route::get('/admin/change-status', [AdminController::class, 'changeStatus']);


// to protect admin route
// Route::group(['middleware'=>['admin']],function(){
    Route::view('/index', "admin.index")->name('index');
// });


// edit personal information

// Route::middleware(['auth', 'admin'])->group(function () {
    // ... other routes
    
    // Make sure you have a route for updating the profile with the correct method
    // Route::post('/admin/update-profile', [AdminController::class, 'updateProfile'])->name('updateProfile');
    
    // ... other routes
// });


// Route::view('/myprofile',"admin.myprofile");

// personal information
Route::get('/admin/profile', [AdminController::class, 'viewProfile'])->name('admin.viewProfile');

// Logout route

Route::get('/admin/adminlogout', [AdminController::class, 'adminLogout'])->name('admin.adminLogout');

// routes/web.php

Route::post('/admin/add-fund', [AdminController::class,"addFund"])->name('adminaddfund');