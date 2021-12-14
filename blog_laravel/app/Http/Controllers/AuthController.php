<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function register()
    {
        return view('register');
    }
    public function welcome()
    {
        return view('welcome');
    }
    public function biodata(Request $request)//perlu untuk pengiriman data (REQUEST $NAMA)
    {


            $name = $request['first_name']. " " . $request['last_name'];
            return view('welcome', [
                'name' => $name]);

    }
}
