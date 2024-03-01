<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    // Register
    public function register(Request $request)
    {   
        // Validate incoming request data
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'password' => 'required',
            'password1' => 'required',
            'referral_id' => 'required', // Assuming referral_id is a valid user ID
        ]);

        // Check if the email already exists in the database
        if (User::where('email', $request->email)->exists()) {
            return response([
                'message' => 'Email already exists',
                'status' => 'failed'
            ], 200);
        }

        // Check if the mobile number already exists in the database
        if (User::where('mobile', $request->mobile)->exists()) {
            return response([
                'message' => 'Mobile number already exists',
                'status' => 'failed'
            ], 200);
        }


        $existingUser = User::where('username', $request->referral_id)->first();
    if (!$existingUser) {
        return response([
            'message' => 'Referral ID does not exist',
            'status' => 'failed'
        ], 200);
    }



        // Create a new user in the database
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'password' => Hash::make($request->password),
            'password1' => $request->password1,
            'referral_id' => $request->referral_id,
        ]);


        // return $request->referral_id;

        // Generate a username
        $prefix = 'EP';
        $randomNumber = mt_rand(1000, 9999);
        $username = $prefix . $user->id . $randomNumber;

        // Update the user record with the generated username
        $user->update(['username' => $username,'referral_id'=>$request->referral_id]);
        // $user->update(['referral_id'=>$request->referral_id]);
        // Respond with a success message and user information
        return response([
            'message' => 'Registration success',
            'status' => 'success',
            'user' => $user,
        ], 201);
    }

    public function allUsers(Request $request){
        
         return view('allusers');
    }



    
    // Login
   
    
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
                return response()->json(['message' => 'Login successful', 'user' => $user], 200);
                // You can also redirect to a dashboard or any other route if needed
            } else {
                // Authentication failed
                throw new \Exception('Invalid username or password');
            }
        } catch (ValidationException $e) {
            // Validation failed
            return response()->json(['error' => $e->getMessage()], 422);
        } catch (\Exception $e) {
            // Other exceptions
            return response()->json(['error' => $e->getMessage()], 401);
        }
    }
    

// function login(Request $re){

//     if(Auth::attempt(['username' => $re->username,'password' => $re->password])) {
     
//         return redirect()->route('login')->with('msg','Seccessfully Loggedin');
//      }
//      else{

//          return "incorrect information";
//      }

// }
}