<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
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

            switch ($user->role){
                case 'admin':
                    return redirect()->route('admin.dashboard');
                case 'atasan':
                    return redirect()->route('atasan.dashboard');
                case 'keuangan':
                    return redirect()->route('keuangan.dashboard');
                case 'karyawan':
                    return redirect()->route('karyawan.dashboard');
                default:
                    Auth::logout();
                    return redirect('/login');
                
            }
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
} 