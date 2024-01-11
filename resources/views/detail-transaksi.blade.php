@extends('layout.layout')

@section('content')    
<div class="container my-4 keranjang-container">
<div class="container my-4 keranjang-container">
       <div class="row mt-3 text-white border-bottom border-2 p-3 bg-secondary rounded">
            <div class="col-sm-3 list-group fw-bold">Nama Produk</div>
            <div class="col-sm-3 list-group fw-bold">Harga Satuan</div>
            <div class="col-sm-3 list-group fw-bold">Kuantitas</div>
            <div class="col-sm-3 list-group fw-bold">Status Pembayaran</div>
       </div>
       <div class="row mt-2 border-bottom border-2 p-3 d-flex align-items-center">
            <div class="col-md-3 keranjang">
                <img src="{{asset("assets/images/$items->gambar_produk")}}" height="80px" alt="Sepatu Adidas" class="rounded">
                <span>{{$items->nama_produk}}</span>
            </div>
            <div class="col-md-3 keranjang">
                <span>Rp. {{$items->total_harga}}</span>
            </div>
            <div class="col-md-3 keranjang">
                <form action="{{route('checkout.save')}}" method="POST">
                    @csrf
                    <input type="number" class="form-control form-kuantitas" value="{{$items->kuantitas}}" name="kuantitas" min="1" max="100" readonly>
            </div>
            <div class="col-md-3 keranjang">
                   <span class="btn btn-success">Berhasil</span>
            </div>
        </div>
    </div>
</div>
@endsection