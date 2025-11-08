<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        // Handle user login
        return view('login');
    }

    public function register(Request $request)
    {
        // Handle user registration
    }

    public function logout(Request $request)
    {
        // Handle user logout
    }
}
