<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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


        //checking if users exist
        $user = User::where('email', $email)->first();
        if ($user) {
            //user found
            if (password_verify($senha, $user->password)) {
                //password matched
                echo 'Login successful. Welcome, ' . $user->name . '!';
                echo '<br>';
                echo 'User ID: ' . $user->id;
                echo '<br>';
                echo 'Email: ' . $user->email;
                echo '<br>';
                echo '<pre>';
                print_r($user);
                echo '</pre>';

            } else {
                //password not matched
                echo 'Invalid credentials. Please try again.';
                return redirect()->back()->withInput()->withErrors(['senha' => 'The provided credentials do not match our records.']);
            }
        } else {
            //user not found
            echo 'Invalid credentials. Please try again.';
            return redirect()->back()->withInput()->withErrors(['email' => 'The provided credentials do not match our records.']);
        }

        //udate last login time
        $user->last_login = date('Y-m-d H:i:s');
        $user->save();

        //login user
        session([
            'user' =>[
                'id' => $user->id,
                'username' => $user->name,
                'email' => $user->email

            ]
            ]);















        //as an object instance of User model
        /*$userModel = new User();
        $users = $userModel->all()->toArray();
        echo '<pre>';
        print_r($users);
        echo '</pre>';*/

        //get all users from database
        /*$users = User::all()->toArray();
        echo '<pre>';
        print_r($users);
        echo '</pre>';*/



        //test database login
        /*try {
            DB::connection()->getPdo();
            echo 'Database connection successful.';
        } catch (\PDOException $e) {
            echo 'Database connection error: ' . $e->getMessage();
        }
        echo 'Fim';*/



        /*try {
            $user = \DB::table('users')->where('email', $email)->first();

            if ($user && password_verify($senha, $user->password)) {
                // Authentication passed
                echo 'Login successful';
            } else {
                // Authentication failed
                echo 'Invalid credentials';
            }
        } catch (\Exception $e) {
            // Handle database connection error
            echo 'Database connection error: ' . $e->getMessage();
        }*/



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
        //logout from the application
        /*$request->session()->flush();
        return redirect('/login');}*/

        session()->forget('user');
        return redirect()->to('/login');
}
}
