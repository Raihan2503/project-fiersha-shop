@extends('layout.layout')

@section('content')
<div class="container my-3">
    <div class="row mt-3 text-white border-bottom border-2 p-3 bg-secondary rounded">
        <div class="col-md-3 list-group fw-bold">Nama Produk</div>
        <div class="col-md-3 list-group fw-bold">Harga Satuan</div>
        <div class="col-md-3 list-group fw-bold">Kuantitas</div>
        <div class="col-md-3 list-group fw-bold">Aksi</div>
    </div>
   <div class="row mt-2 border-bottom border-2 p-3 d-flex align-items-center">
        <div class="col-md-3">
            <img src="{{asset('assets/images/adidas-min.jpg')}}" height="80px" alt="Sepatu Adidas" class="rounded">
            <span>Sepatu Adidas</span>
        </div>
        <div class="col-md-3">
            <span>Rp.300.000</span>
        </div>
        <div class="col-md-3">
           <span>1</span>
        </div>
        <div class="col-md-3">
            <button type="submit" class="btn btn-danger">Hapus</button>
            <button type="submit" class="btn btn-primary">Beli</button>
        </div>
    </div>
   <div class="row mt-2 border-bottom border-2 p-3 d-flex align-items-center">
        <div class="col-md-3">
            <img src="{{asset('assets/images/shirt-min.jpg')}}" height="80px" alt="Sepatu Adidas" class="rounded">
            <span>Sepatu Adidas</span>
        </div>
        <div class="col-md-3">
            <span>Rp.300.000</span>
        </div>
        <div class="col-md-3">
           <span>1</span>
        </div>
        <div class="col-md-3">
            <button type="submit" class="btn btn-danger">Hapus</button>
            <button type="submit" class="btn btn-primary">Beli</button>
        </div>
    </div>
   <div class="row mt-2 border-bottom border-2 p-3 d-flex align-items-center">
        <div class="col-md-3">
            <img src="{{asset('assets/images/hoodie-min.jpg')}}" height="80px" alt="Sepatu Adidas" class="rounded">
            <span>Sepatu Adidas</span>
        </div>
        <div class="col-md-3">
            <span>Rp.300.000</span>
        </div>
        <div class="col-md-3">
           <span>1</span>
        </div>
        <div class="col-md-3">
            <button type="submit" class="btn btn-danger">Hapus</button>
            <button type="submit" class="btn btn-primary">Beli</button>
        </div>
    </div>
   <div class="row mt-2 border-bottom border-2 p-3 d-flex align-items-center">
        <div class="col-md-3">
            <img src="{{asset('assets/images/sweeter-min.jpg')}}" height="80px" alt="Sepatu Adidas" class="rounded">
            <span>Sweeter</span>
        </div>
        <div class="col-md-3">
            <span>Rp.300.000</span>
        </div>
        <div class="col-md-3">
           <span>1</span>
        </div>
        <div class="col-md-3">
            <button type="submit" class="btn btn-danger">Hapus</button>
            <button type="submit" class="btn btn-primary">Beli</button>
        </div>
    </div>
</div>
@endsection