<?php

namespace App\Http\Controllers;

use App\Models\Carts;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Catch_;

class HomeController extends Controller
{
    public function index() {
        $dbProduct = new Product();

        $view_data = [
            "title" => "Fiersha Shop",
            "products" => $dbProduct->all()
        ];

        return view('home', $view_data);
    }

    public function store($id_produk){
       $items = Product::where('id_produk', $id_produk)->get();
       $cart = new Carts();
       foreach ($items as $item) {
            $dbCart = Carts::create([
                'product_id' => $item->id_produk,
                'nama_produk' => $item->nama_produk,
                'deskripsi_produk' => $item->deskripsi_produk,
                'harga' => $item->harga,
                'gambar_produk' => $item->gambar_produk,
                'user_id' => Auth::user()->id,
            ]);
       }

       return redirect()->to('/')->with('success', 'Berhasil di tambahkan ke keranjang');
    }
}
