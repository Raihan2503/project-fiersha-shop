@if (session()->has('success'))
  <div class="col">
    <div class="alert alert-success alert-dismissible fade show" role="alert mt-3">
      {{session('success')}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  </div>
@endif
@extends('layout.layout')
@section('content')
<div class="jumbotron bg-dark text-white d-flex flex-column">
  <div class="position-relative overflow-hidden p-3 p-md-5 text-center">
    <div class="col-md-6 p-lg-5 mx-auto my-5">
      <h1 class="display-3 fw-bold main-text">Fiersha Shop</h1>
      <h3 class="fw-light mb-3">Service is Main And Enjoyable</h3>
      <div class="d-flex gap-3 justify-content-center lead fw-normal">
        <p class="lead">Fiersha Shop customers are the king</p>
      </div>
    </div>
    <div class="product-device shadow-sm d-none d-md-block"></div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
  </div>
</div>

{{-- Main --}}
<main>
  {{-- About --}}
  <div class="album py-5 bg-body-tertiary">
    <div class="container">
      <h1 class="text-center my-3">Product</h1>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-3">
        @foreach ($products as $product)
        <div class="col mb-sm-3">
          <div class="card shadow-sm">
            <img src="{{asset("assets/images/$product->gambar_produk")}}" alt="sepatu adidas" class="img-product">
            <div class="card-body">
              <h5 class="card-text fw-normal">{{$product["nama_produk"]}}</h5>
              <span>Harga: Rp. {{$product["harga"]}}</span><br>
              {{-- <span>Warna: Merah</span><br> --}}
              <span>Deskripsi: {{$product["deskripsi_produk"]}}</span>
              <div class="d-flex justify-content-between align-items-center mt-3">
                <div class="btn-group">
                  <form action="{{route("keranjang.store", $product->id_produk)}}" method="POST">
                    @csrf
                    <button class="btn btn-primary btn-sm me-2"><span><i class="bi bi-bag-plus-fill me-2"></i></span>Beli Produk</button>
                    <button class="btn btn-success btn-sm"><span><i class="bi bi-cart me-2"></i></span>Keranjang</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
    </div>
  </div>
</main>
@endsection