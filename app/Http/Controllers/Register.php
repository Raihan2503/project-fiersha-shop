<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Register extends Controller
{
    public function index(){
        return view('register.register');   
    }

    public function store(){
        // validation form
        request()->validate([
            'username' => 'min:5|max:20|alpha_dash',
            'email' => 'email|unique:users'
        ]);

        $users = User::create([
            "username" => strtolower(request()->get("username", "")),
            "email" => request()->get("email", ""),
            "password" => request()->get("password", "")
        ]);

        return redirect()->to('/register')->with('success', "Register Berhasil");
    }
}
