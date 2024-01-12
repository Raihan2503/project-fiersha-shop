@extends('layout.layout')

@section('title', "Checkout Berhasil")
    
@section('content')
<div class="container mt-4 mb-4">
    <div class="row justify-content-center">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Transaksi Berhasil</h5>
              <p class="card-text">Terima kasih telah melakukan pembayaran</p>
              <a href="{{url('transaksi')}}" class="btn btn-primary mt-3">Lihat Transaksi</a>
            </div>
          </div>
    </div>
</div>
@endsection