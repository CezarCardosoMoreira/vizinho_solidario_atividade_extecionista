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

    public function loginSubmit(Request $request)
    {
        // Validate and authenticate user
        $request->validate([
            'email' => 'required|email',
            'senha' => 'required|',
        ]);

        //get user input
        $email = $request->input('email');
        $senha = $request->input('senha');

        echo 'ok';
        // Authentication logic here


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
