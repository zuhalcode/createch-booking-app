<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function indexLogin($slug)
    {
        return view('auth.login', ['slug' => $slug]);
    }

    public function indexRegister($slug)
    {
        return view('auth.register', ['slug' => $slug]);
    }

    public function loginModal(Request $req) {
        $credentials = $req->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
        if(Auth::attempt($credentials)){
            $req->session()->regenerate();
            return back();
        }

        return back()->with('loginError', 'Login gagal!');
    }

    public function registerModal(Request $req) {
        $validatedData = $req->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        $user = User::create($validatedData);

        Auth::login($user);

        return back()->with('success', 'Login Berhasil!, silahkan selesaikan order anda');
    }

    public function login(Request $req, $slug)
    {
        $credentials = $req->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
        if(Auth::attempt($credentials)){
            $req->session()->regenerate();
            return redirect('/');
        }

        return back()->with('loginError', 'Login gagal!');
    }

    public function register(Request $req, $slug)
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

    public function logout(Request $req, $slug)
    {
        Auth::logout();
        $req->session()->invalidate(); 
        $req->session()->regenerateToken();
        return redirect('/auth/login');
    }
    
    
}
