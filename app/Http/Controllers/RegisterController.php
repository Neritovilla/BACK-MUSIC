<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    /*validate in database if exist name or email, return 0 is not exist or 1 if exist */
    public function checkData(Request $request){
        $input = $request->all();
        $user = User::where('name', $input["name"])
        ->orWhere('email', $input["email"])
        ->first();
        if (!$user) {
            return response()->json(0);
        }else{
            return response()->json(1);
        }
    }

    /*Insert user in database*/
    public function store(Request $request){
        $input = $request->all();
        $user = User::create([
            "name"=> $input["name"],
            "email"=> $input["email"],
            "password"=> Hash::make($input["password"]),
        ]);
        return response()->json(['status'=> true, 'message' => "Register Succces"]);
    }


}
