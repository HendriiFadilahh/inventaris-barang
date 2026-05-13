<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
             'email'    => ['required', 'email'],  
             'password' => ['required']
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::user();

            switch ($user->role) {
            case 'admin':
                         return redirect()->route('admin.dashboard');
                                                                                                                                           
                default:
                    # code...
                    break;
            }
        }
     }
}                                                                           