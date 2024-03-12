<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //signup
    function signup(Request $request){
        $user_input = $request->all();

        User::create($user_input);

        return "User created";
    }

    // login
    function login(Request $request){
    
        $user_input = $request->only(['email','password']);

        if (Auth::attempt($user_input)) {
            return "Succesful login";
        }else{
            return "Invalid credentials";
        }

    }
}
