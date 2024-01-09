<?php

namespace App\Http\Controllers;

use App\Models\Carts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KeranjangController extends Controller
{
    public function index(){
        $user = Auth::user();

        $view_data = [
            "title" => "Keranjang",
            "items" => $user->carts
        ];

        return view('keranjang.keranjang', $view_data);
    }

    public function destroy($id){
        Carts::where('id', '=' , $id)->delete();

        return redirect()->to('/keranjang')->with('success', 'Berhasil dihapus dari keranjang');
    }
}