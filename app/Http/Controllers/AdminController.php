<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Validator;
use Auth;
use DB;
class AdminController extends Controller
{


    public function allUsers(Request $request){
        
        return view('admin.allusers');
   }


   public function inactiveusers(Request $request){
        
    return view('admin.inactiveusers');
   }

    public function transactionhistory(Request $request){
        
        return view('admin.txnhistory');
}

public function addfunds(Request $request){
        
    return view('admin.addfunds');
   }

   public function logout(Request $request){
        
    return view('admin.logout');
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

}
