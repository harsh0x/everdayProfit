<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


use Illuminate\Http\Request;

class UserController extends Controller
{
     // register

     public function register(Request $request)
     {
         // Validate incoming request data
         $request->validate([
             'name' => 'required',
             'email' => 'required|email',
             'mobile_no'=>'required',            
             'password' => 'required|confirmed',
             'c_password' => 'required',
             'referral_id'=>'required',             
         ]);
 
         // Check if the email already exists in the database
         if (User::where('email', $request->email)->first()) {
             return response([
                 'message' => 'Email already exists',
                 'status' => 'failed'
             ], 200);
         }
 
         // Create a new user in the database
         $userid = User::insertGetId([
             'name' => $request->name,
             'email' => $request->email,
             'mobile'  => $request->mobile,
             'password' => Hash::make($request->password),
             'password1' =>$request->password1,
             'referral_id'=>$request->referral_id,
         ]);

         return $userid;
 
         // Respond with a success message
         return response([
             'message' => 'Registration success',
             'status' => 'success'
         ], 201);
}



}
