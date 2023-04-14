<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $req)
    {
        $credentials = $req->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
        if(Auth::attempt($credentials)){
            $req->session()->regenerate();
            return redirect('/dashboard');
        }

        return back()->with('loginError', 'Login gagal!');
    }

    public function register(Request $req)
    {
        $validatedData = $req->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);

        return redirect('/auth/login')->with('success', 'Registrasi berhasil! Silahkan login');
    }

    public function logout(Request $req)
    {
        Auth::logout();
        $req->session()->invalidate(); 
        $req->session()->regenerateToken();
        return redirect('/');
    }
    
    
}
