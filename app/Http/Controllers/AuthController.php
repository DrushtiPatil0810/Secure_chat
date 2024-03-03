<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('signin');
    }

    public function showRegistrationForm()
    {
        return view('signup');
    }
}
