<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function check(Request $request){
    $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            return response()->json([ 'status'=> true,'message'=>'Success']);
        }
        return response()->json([ 'status'=> false,'message'=> 'Fail'], 401);
    }

}
