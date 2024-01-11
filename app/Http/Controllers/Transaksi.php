<?php

namespace App\Http\Controllers;

use App\Models\Carts;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Transaksi extends Controller
{
    public function index() {
        $user = Auth::user();
        $view_data = [
            "title" => "Checkout",
            "items" => $user->order
        ];
        return view('transaksi', $view_data);
    }

    public function show($id) {
        $orders = Order::where('cart_id', $id)->get();
        foreach($orders as $order) {}
        
        $view_data = [
            "title" => "Order",
            "items" => $order
        ];

        return view('detail-transaksi', $view_data);
    }
}
