<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
    public function index() {
        return view('login.login');
    }

    public function auth(){
        $validated = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(auth()->attempt($validated)) {
            request()->session()->regenerate();

            // redirect()->to('/login')->with('success', "Login Berhasil");
            return redirect()->to('/');
        }

        return redirect()->to('/login')->withErrors([
            'email' => "Email atau password anda salah!",
        ]);
    }

    public function logout(){
        auth()->logout();
        
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->to('/');
    }
}