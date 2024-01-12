<?php

namespace App\Http\Controllers;

use App\Models\Carts;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index(){
        $user = Auth::user();
        $view_data = [
            "title" => "Checkout",
            "items" => $user->carts
        ];
        return view('checkout.checkout', $view_data);
    }

    public function show($id){
        $carts = new Carts();
        $carts = $carts->find($id);

        $view_data = [
            "title" => "Checkout",
            "items" => $carts,
        ];

        return view('checkout.checkout', $view_data);
    }

    public function store($id){
        $carts = new Carts();
        $carts = $carts->find($id);
        $kuantitas = request()->get('kuantitas', '');
        $alamat = request()->get('alamat', '');
        $nomor = request()->get('nomor', '');

        $view_data = [
            "title" => "Order",
            "items" => $carts,
            "alamat" => $alamat,
            "kuantitas" => $kuantitas,
            "nomor" => $nomor
        ];
        
        return view('order', $view_data);
    }

    public function save() {
        $id = request()->post('id', '');
        $carts = new Carts();
        $carts = Carts::where('id', $id)->get();
        
        $alamat = request()->post('alamat', '');
        $nomor = request()->post('nomor', '');
        $kuantitas = request()->post('kuantitas', '');
        $total_harga = request()->post('total_harga', '');

        // dd($total_harga);

        foreach($carts as $cart) {
            $orders = Order::create([
                'user_id' => Auth::user()->id,
                'product_id' => $cart->product_id,
                'cart_id' => $cart->id,
                'nama_produk' => $cart->nama_produk,
                'deskripsi_produk' => $cart->deskripsi_produk,
                'alamat' => $alamat,
                'nomor_telepon' => $nomor,
                'kuantitas' => $kuantitas,
                'harga' => $cart->harga,
                'total_harga' => $total_harga,
                'status' => 'pending',
                'gambar_produk' => $cart->gambar_produk
            ]);

             // Set your Merchant Server Key
            \Midtrans\Config::$serverKey = config('midtrans.serverKey');
            // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
            \Midtrans\Config::$isProduction = false;
            // Set sanitization on (default)
            \Midtrans\Config::$isSanitized = true;
            // Set 3DS transaction for credit card to true
            \Midtrans\Config::$is3ds = true;

            $params = array(
                'transaction_details' => array(
                    'order_id' => rand(),
                    'gross_amount' => $total_harga,
                )
            );
            
            $snapToken = \Midtrans\Snap::getSnapToken($params);
            $orders->snap_token = $snapToken;
            $orders->save();
        }

        return redirect()->to("/transaksi/{$id}")->with('success', 'Berhasil checkout');
    }

    public function destroy($id){
        Order::where('id', '=' , $id)->delete();

        return redirect()->to('/transaksi')->with('success', 'Data berhasil dihapus dari pesanan');
    }
}
