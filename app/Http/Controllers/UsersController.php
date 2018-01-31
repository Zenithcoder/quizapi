<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Auth;

class UsersController extends Controller
{
     public function register(Request $request)
    {
        $user = User::create([
            'name'  => $request->name,
            'email'     => $request->email,
            'password'  =>  bcrypt(($request->password)),
            'api_token' => str_random(50),
        ]);

        return response()->json(['status' => 'success', 'user' => $user], 200);
    }


    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return response()->json(['status' => 'error', 'message' => 'User not found'], 404);
        }
      //  dd($user->password);
        if (Auth::attempt([
    		'email' => $request->input('email'),
    		'password' => $request->input('password')])){

                $user->update(['api_token'=>str_random(50)]);
                return response()->json(['status' => 'success', 'user' => $user], 200);
        }

       return response()->json(['status' => 'error', 'message' => 'Invalid Credentials'], 401);

    }

    public function logout(Request $request)
    {
        $api_token = $request->api_token;

        $user = User::where('api_token', $api_token)->first();

        if (!$user) {
            return response()->json(['status' => 'error', 'message' => 'Not Logged in'], 401);
        }
        $user->api_token = null;

        $user->save();

            return response()->json(['status' => 'Success', 'message' => 'You are now logged out'], 200);

    }

	public function updateProfile(Request $request) {
		$email = $request->email;

		$user = User::where('email', $email)->first();

    	$image=$request->image;

    	 if (!$image) {
            return response()->json(['status' => 'error', 'message' => 'profile update fail'], 401);
        }
        if($image){
            $imageName=$image->getClientOriginalName();
            $image->move('images',$imageName);
        }

         $user->image = $imageName;

        $user->save();

           return response()->json(['status' => 'Success', 'message' => 'Profile Pix Success'], 200);
    }
}
