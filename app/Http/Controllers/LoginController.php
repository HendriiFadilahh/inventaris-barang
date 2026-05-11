<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('login.login');
    }

    public function showRegister()
    {
        return view('login.register');
    }

    public function dashboard()
    {
        return view('beranda');
    }
}