@extends('layout.layout')

@section('content')
    <div class="container my-4 checkout-container">
      <div class="row justify-content-center">
        <div class="card mb-3 col-md-5 checkout">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{asset("assets/images/$items->gambar_produk")}}" class="img-fluid rounded-start checkout" alt="order-image">
              </div>
              <div class="col-md-6">
                <div class="card-body">
                    <h5 class="card-title">{{$items->nama_produk}}</h5>
                    <p class="card-text">Deskripsi : {{$items->deskripsi_produk}}</p>
                    <p class="card-text">Harga :  Rp. {{$items->harga}}</p>
                    <p class="card-text">Warna : Merah</p>
                    <form action="{{route('checkout.store', $items->id)}}" method="POST" class="mt-3 form-checkout">
                      @csrf
                      <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" placeholder="Alamat Pengiriman" name="alamat">
                      </div>
                      <div class="mb-3">
                        <label for="nomor" class="form-label">No Telp</label>
                        <input type="text" class="form-control" id="nomor" placeholder="Nomor Telepon" name="nomor">
                      </div>
                    <label for="kuantitas" class="mb-2">Kuantitas</label>
                      <input type="number" id="kuantitas" class="form-control form-kuantitas mb-3" value="1" name="kuantitas" min="1" max="100">
                      <button type="submit" class="btn btn-primary">Buat Pesanan</button>
                    </form>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
@endsection