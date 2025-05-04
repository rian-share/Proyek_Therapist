<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterDanLogin extends Controller
{
    public function login(){
        return view('therapist.login');
    }

    public function register(){
        return view('therapist.register');
    }

}
