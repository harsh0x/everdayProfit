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


Route::view('/user/register', "user.register");


// Route::view('/index', "admin.index")->name('index');

// Route::post('/register',[UserController::class,"register"])->name('register');

Route::view('/login',"user.login");

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
Route::get('/admin/all-users',[AdminController::class,'allUsers'])->name('all-users');

// Active Users
Route::get('/admin/active-users',[AdminController::class,'getActiveUsers'])->name('active-users');

// Inactive Users
Route::get('/admin/inactive-users',[AdminController::class,'getInactiveUsers'])->name('inactive-users');

// user deposits
Route::get('/admin/user-deposits',[AdminController::class,'userdeposits'])->name('user-deposits');

// user withdrawl
Route::get('/admin/user-withdrawl',[AdminController::class,'userwithdrawl'])->name('user-withdrawl');

// Transaction History
// Route::get('transaction-history',[AdminController::class,'transactionhistory'])->name('transaction-history');

// Add Funds
// Route::get('/add-funds', 'FundsController@addFunds')->name('add-funds');
// Route::post('/add-funds', 'FundsController@store')->name('add-funds.store');


// add funds
Route::get('/admin/add-funds',[AdminController::class,'addfunds'])->name('add-funds');


// funds history
Route::get('/admin/funds-history',[AdminController::class,'fundshistory'])->name('funds-history');

// My Profile
Route::get('/admin/My-Profile',[AdminController::class,'MyProfile'])->name('My-Profile');  

// Change Password
Route::get('/admin/change-password',[AdminController::class,'changepassword'])->name('change-password');  

// Logout (handled by Laravel's Auth system)
// Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/admin//logout', [AdminController::class, 'logout'])->name('logout');

// get all users
Route::get('/admin/getallusers', [AdminController::class, 'getAllUsers']);

// change status
Route::get('/admin/change-status', [AdminController::class, 'changeStatus']);


// to protect admin route
// Route::group(['middleware'=>['admin']],function(){
    Route::view('/admin/index', "admin.index")->name('index');
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

// fund history
Route::get('funds-history', [AdminController::class, 'FundsHistory'])->name('funds-history');



// ----------------------------------------------------------------------------------------------------------------------------------------------------//




// User Dashboard Route
Route::view('/user/index', "user.index")->name('index');

// myteam
Route::get('/user/my-team',[UserController::class,'MyTeam'])->name('myteam');

// depositfunds
Route::get('/user/deposit-funds',[UserController::class,'DepositFunds'])->name('depositfunds');

// p2p transfer
Route::get('/user/p2p-transfer',[UserController::class,'p2pTransfer'])->name('p2ptransfer');

//transactions
Route::get('/user/transaction',[UserController::class,'Transaction'])->name('transaction');

// plan purchase
Route::get('/user/plan-purchase',[UserController::class,'PlanPurchase'])->name('planpurchase');

// incomes
Route::get('/user/incomes',[UserController::class,'Incomes'])->name('incomes');

// plan purchase & plan history tabs
Route::view('/user/planpurchase','user.PlanPurchase')->name('planpurchase');
Route::view('/user/planhistory','user.planhistory')->name('planhistory');

// deposit funds and withdraw funds tabs
Route::view('/user/depositfunds','user.DepositFunds')->name('depositfunds');
Route::view('/user/withdrawfunds','user.withdrawFunds')->name('withdrawfunds');

// p2p transfers all tabs

Route::view('/user/p2ptransfer','user.p2ptransfer')->name('p2ptransfer');
Route::view('/user/transferhistory','user.transferhistory')->name('transferhistory');
Route::view('/user/incometofundwallet','user.incometofundwallet')->name('incometofundwallet');
Route::view('/user/incometofundhistory','user.incometofundhistory')->name('incometofundhistory');


// transactions all tabs

Route::view('/user/deposithistory','user.deposithistory')->name('deposithistory');
Route::view('/user/transactionhistory','user.transactionhistory')->name('transactionhistory');