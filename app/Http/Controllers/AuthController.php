<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //signup
    function signup(Request $request){
        $user_input = $request->all();

        User::create($user_input);

        return "User created";
    }
}
