<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Result;

class ResultController extends Controller
{
   public function storeResult(Request $request){

   		  $user = User::where('api_token', $request->api_token)->first();
   		//   Auth::login($user);
        if (!$user) {
            return response()->json(['status' => 'error', 'message' => 'No User'], 401);
        }

       Result::create([
       		'user_id' => $user->id,
            'result'    => $request->result,
        ]);

            return response()->json(['status' => 'Success', 'message' => 'Result stored'], 200);
    }
}
