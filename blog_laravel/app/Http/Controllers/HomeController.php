<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    //route home
    public function index()
    {
        return view('home');
    }
}
