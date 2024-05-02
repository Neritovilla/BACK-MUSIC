<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /*Function used for obtain the user validated with email and password */
    public function get_user(Request $request){
            $user = User::where('email', $request->email)->first();
            if ($user && password_verify($request->password, $user->password)) {
                return response()->json(['user' => $user]);
            }else{
                return response()->json(['user' =>[]]);
            }

        }
}
