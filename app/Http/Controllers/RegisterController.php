<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    // Menampilkan halaman register
    public function index()
    {
        return view('auth.register');
    }

    // Proses register user
    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6'
        ]);

        // Simpan data user
        $validatedData['password'] = Hash::make($validatedData['password']);

        // Simpan user
        User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => $validatedData['password'],
            'role' => 'karyawan' // Set role default sebagai 'karyawan'
        ]);


        // Redirect ke login
        return redirect('/login')
            ->with('success', 'Registrasi berhasil, silakan login');
    }
}