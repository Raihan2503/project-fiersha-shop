@extends('layout.layout')

@section('content')
<div class="container my-4 keranjang-container">
   <div class="row mt-3 text-white border-bottom border-2 p-3 bg-secondary rounded">
        <div class="col-sm-3 list-group fw-bold">Nama Produk</div>
        <div class="col-sm-3 list-group fw-bold">Harga Satuan</div>
        <div class="col-sm-3 list-group fw-bold">Kuantitas</div>
        <div class="col-sm-3 list-group fw-bold">Aksi</div>
   </div>
   @foreach ($items as $item)    
   <div class="row mt-2 border-bottom border-2 p-3 d-flex align-items-center">
        <div class="col-md-3 keranjang">
            <img src="{{asset("assets/images/$item->gambar_produk")}}" height="80px" alt="Sepatu Adidas" class="rounded">
            <span>{{$item->nama_produk}}</span>
        </div>
        <div class="col-md-3 keranjang">
            <span>Rp. {{$item->harga}}</span>
        </div>
        <div class="col-md-3 keranjang">
          <input type="number" class="form-control form-kuantitas" value="1" name="kuantitas">
        </div>
        <div class="col-md-3 keranjang">
            <button type="submit" class="btn btn-danger">Hapus</button>
            <button type="submit" class="btn btn-primary">Beli</button>
        </div>
    </div>
   @endforeach
</div>
@endsection