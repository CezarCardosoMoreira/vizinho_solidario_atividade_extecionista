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
            'senha' => 'required|min:6|max:20',
        ]);

        //get user input
        $email = $request->input('email');
        $senha = $request->input('senha');

        echo 'ok';
        // Authentication logic here


    }
    public function register()
    {
        return view('cadastro');

    }

    public function registerSubmit(Request $request)
    {
        // Validate and register user
        // Validate and authenticate user
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email',
            'senha' => 'required|min:6|max:20',
        ]);
        //get user input
        $nome = $request->input('nome');
        $email = $request->input('email');
        $senha = $request->input('senha');

        echo 'ok';
        // Authentication logic here

    }

    public function logout(Request $request)
    {
        // Handle user logout
    }
}
