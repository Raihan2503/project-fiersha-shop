<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    public function index(){
        $view_data = [
            "title" => "Keranjang"
        ];
        
        return view('keranjang', $view_data);
    }
}
