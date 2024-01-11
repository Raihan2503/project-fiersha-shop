@extends('layout.layout')

@section('content')    
<div class="container my-4 keranjang-container">
       <div class="row mt-3 text-white border-bottom border-2 p-3 bg-secondary rounded">
            <div class="col-sm-3 list-group fw-bold">Nama Produk</div>
            <div class="col-sm-3 list-group fw-bold">Harga Satuan</div>
            <div class="col-sm-3 list-group fw-bold">Kuantitas</div>
            <div class="col-sm-3 list-group fw-bold">Aksi</div>
       </div>
       <div class="row mt-2 border-bottom border-2 p-3 d-flex align-items-center">
            <div class="col-md-3 keranjang">
                <img src="{{asset("assets/images/$items->gambar_produk")}}" height="80px" alt="Sepatu Adidas" class="rounded">
                <span>{{$items->nama_produk}}</span>
            </div>
            <div class="col-md-3 keranjang">
                <span>Rp. {{$items->harga * $kuantitas}}</span>
            </div>
            <div class="col-md-3 keranjang">
                <form action="{{route('checkout.save')}}" method="POST">
                    @csrf
                    <input type="text" name="id" value="{{$items->id}}" hidden>
                    <input type="number" name="total_harga" hidden value="{{$items->harga * $kuantitas}}">
                    <input type="text" value="{{$alamat}}" hidden name="alamat">
                    <input type="text" value="{{$nomor}}" hidden name="nomor">
                    <input type="number" class="form-control form-kuantitas" value="{{$kuantitas}}" name="kuantitas" min="1" max="100" readonly>
            </div>
            <div class="col-md-3 keranjang">
                    @csrf
                    <button type="submit" class="btn btn-primary">Pesan</button>
                </form>
                <form action="{{route('keranjang.destroy', $items->id)}}" method="POST">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
        </div>
</div>
@endsection