<?php

namespace App\Http\Controllers;

use App\Models\Carts;
use App\Models\Product;
use Illuminate\Http\Request;
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

    public function keranjang() {
        $items = new Carts();

        $view_data = [
            "title" => "Keranjang",
            "items" => $items->all()
        ];

        return view('keranjang.keranjang', $view_data);
    }

    public function store($id_produk){
       $items = Product::where('id_produk', $id_produk)->get();
       foreach ($items as $item) {
            $dbCart = Carts::create([
               'product_id' => $item->id_produk,
               'nama_produk' => $item->nama_produk,
               'deskripsi_produk' => $item->deskripsi_produk,
               'harga' => $item->harga,
               'gambar_produk' => $item->gambar_produk,
            ]);
       }

       return redirect()->to('/')->with('success', 'Berhasil di tambahkan ke keranjang');
    }
}
