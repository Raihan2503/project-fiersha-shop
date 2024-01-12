@extends('layout.layout')
@section('content')    
<div class="container my-4 keranjang-container">
       <div class="row mt-3 text-white border-bottom border-2 p-3 bg-secondary rounded">
            <div class="col-sm-3 list-group fw-bold">Nama Produk</div>
            <div class="col-sm-3 list-group fw-bold">Total Harga</div>
            <div class="col-sm-2 list-group fw-bold">Kuantitas</div>
            <div class="col-sm-2 list-group fw-bold">Status Pembayaran</div>
            <div class="col-sm-2 list-group fw-bold">Aksi</div>
       </div>
       <div class="row mt-2 border-bottom border-2 p-3 d-flex align-items-center">
            <div class="col-md-3 keranjang">
                <img src="{{asset("assets/images/$items->gambar_produk")}}" height="80px" alt="Sepatu Adidas" class="rounded">
                <span>{{$items->nama_produk}}</span>
            </div>
            <div class="col-md-3 keranjang">
                <span>Rp. {{$items->total_harga}}</span>
            </div>
            <div class="col-md-2 keranjang">
                <form action="{{route('checkout.save')}}" method="POST">
                    @csrf
                    <input type="number" class="form-control form-kuantitas" value="{{$items->kuantitas}}" name="kuantitas" min="1" max="100" readonly>
            </div>
            <div class="col-md-2 keranjang">
                @if ($items->status == 'pending')
                    <span class="btn btn-warning">{{$items->status}}</span>
                @else
                    <span class="btn btn-success">{{$items->status}}</span>
                @endif
            </div>
            <div class="col-md-2 keranjang">
                <button type="button" class="btn btn-primary" id="pay-button">Bayar</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{env("MIDTRANS_CLIENT_KEY")}}"></script> 
<script type="text/javascript">
    document.getElementById('pay-button').onclick = function(){
      // SnapToken acquired from previous step
      snap.pay('{{$items->snap_token}}', {
        // Optional
        onSuccess: function(result){
          window.location.href = '{{route('transaksi-success', $items->cart_id)}}'
        },
        // Optional
        onPending: function(result){
          /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
        },
        // Optional
        onError: function(result){
          /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
        }
      });
    };
  </script>   
@endsection