<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Validator;
// use Auth;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Validation\ValidationException;



class AdminController extends Controller
{

    public function changeStatus(Request $request){
         $user=  User::where('username',$request->username);
         if($user->first()){
            $user->update(['status'=>$user->first()->status==0?1:0]);
            return response([
                'message' => 'Success',
                'status' => $user->first()->status
            ], 200);
         }
         return response([
            'message' => 'Invalid Username',
            'status' => 'failed'
        ], 200);

    }


    public function allUsers(Request $request){
        $allusers=User::select('username','name','email','mobile','referral_id','status','fund_wallet','wallet_balance','self_invested','created_at')->get();
        return view('admin.allusers',compact('allusers'));
   }


   public function inactiveusers(Request $request){
        
    return view('admin.inactiveusers');
   }

   public function activeusers(Request $request){
        
    return view('admin.activeusers');
   }

//     public function transactionhistory(Request $request){
        
//         return view('admin.txnhistory');
// }

public function addfunds(Request $request){
        
    return view('admin.addfunds');
   }

   public function userdeposits(Request $request){
        
    return view('admin.userdeposits');
   }

   public function userwithdrawl(Request $request){
        
    return view('admin.userwithdrawl');
   }

   public function logout(Request $request){
        
    return view('admin.logout');
   }

   public function MyProfile(Request $request){
        
    return view('admin.myprofile');
   }

   public function changepassword(Request $request){
        
    return view('admin.changepassword');
   }



   public function login(Request $request)
    {
        try {
            // Validate incoming request data
            $validator = Validator::make($request->all(), [
                'username' => 'required|string',
                'password' => 'required|string',
            ]);
    
            if ($validator->fails()) {
                throw new ValidationException($validator);
            }
    
            // Attempt to authenticate the user
            $credentials = [
                'username' => $request->username,
                'password' => $request->password,
            ];
    
            if (Auth::attempt($credentials)) {
                // Authentication successful
                $user = Auth::user();

                if ($user->is_admin) {
                // Authentication successful for admin
                // return response([
                //     'message' => 'Admin login successful',
                //     'status' => 'success',
                //     'user' => $user,
                // ], 200);
                return redirect('index');
            } else {
                // Authentication successful for regular user, but not an admin
                Auth::logout(); // Log out the user
                return response([
                    'message' => 'You do not have admin privileges',
                    'status' => 'failed',
                ], 401);
            }
                // You can also redirect to a dashboard or any other route if needed
            } else {
                // Authentication failed
                throw new \Exception('Invalid username or password');
            }
        } catch (ValidationException $e) {
            // Validation failed
            return redirect()->back()->with('errors','Invalid Details');
            // return response()->json(['error' => $e->getMessage()], 422);
        } catch (\Exception $e) {
            // Other exceptions
            return redirect()->back()->with('errors','Invalid Details');
            // return response()->json(['error' => $e->getMessage()], 401);
        }
    }



    // public function getAllUsers()
    // {
    //     // Retrieve all users with the specified information
    //     $users = User::select([
    //         'id',
    //         'name',
    //         'username',
    //         'email',
    //         'referral',
    //         'total_invested',
    //         'total_income',
    //         'wallet_balance',
    //         'fund_wallet',
    //         'created_at as time', // Assuming 'created_at' represents the time of user registration
    //     ])->get();

    //     return response([
    //         'message' => 'Users retrieved successfully',
    //         'status' => 'success',
    //         'data' => $users,
    //     ], 200);
    // }

    public function getAllUsers()
    {
        // Fetch all user details from the database
        $users = DB::table('users')->select('*')->get();

        // Return the user details as JSON response
        return response()->json([
            'status' => 'success',
            'data' => $users,
        ]);
    }



// view personal information

 
    public function viewProfile()
    {
        // Check if the admin is authenticated
        if (Auth::check() && Auth::user()->is_admin) {
            // Retrieve the authenticated admin user
            $admin = Auth::user();
            // return $admin;

            // Return the view for viewing profile
            return view('admin.myprofile', compact('admin'));
        } else {
            // Admin is not authenticated, handle accordingly (redirect to login, show an error, etc.)
            return redirect('/admin/signin')->with('error', 'Admin not authenticated');
        }
    }


    public function adminLogout()
    {
        Auth()->guard()->logout(); // Logout the admin
        return redirect('/signin'); // Redirect to admin login page
    }

    public function getActiveUsers()
    {
        // Fetch all user details from the database
        $activeUsers = DB::table('users')->where('self_invested', '>', 0)->get();

        // Return the user details as JSON response
        return view('admin.activeusers',compact('activeUsers'));
    }

    public function getInactiveUsers()
    {
        // Fetch all user details from the database
        $inactiveUsers = DB::table('users')->where('self_invested', '=',0 )->get();

        // Return the user details as JSON response
        return view('admin.inactiveusers',compact('inactiveUsers'));
    }

    

    public function addFund(Request $request)
    {
        $request->validate([
            'userid' => 'required',
            'amount' => 'required',
        ]);
    
        // Find the user by username
        $user = User::where('username', $request->userid)->first();
    
        // Check if the user exists
        if (!$user) {
            return redirect()->back()->with('error', 'User not found');
        }
    
        // Update the user's fund balance
        $user->increment('fund_wallet', $request->amount);
    
        return redirect()->back()->with('success', 'Funds added successfully.');
    }
    
    

}