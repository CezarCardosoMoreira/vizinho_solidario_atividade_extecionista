<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{

    //função index para retornar a view welcome
    public function index()
    {
        return view('main');
    }
}
