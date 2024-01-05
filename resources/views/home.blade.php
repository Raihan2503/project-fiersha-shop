@extends('layout.layout')

@section('content')
<div class="jumbotron bg-dark text-white">
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
        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
            <div class="card-body">
              <h5 class="card-text fw-normal">T-Shirt</h5>
              <span>Harga: Rp150.000</span><br>
              <span>Warna: Orange</span><br>
              <span>Deskripsi: T-Shirt adidas terbuat dari bahan katun yang sangat lembut</span>
              <div class="d-flex justify-content-between align-items-center mt-3">
                <div class="btn-group">
                  <a type="button" class="btn btn-primary btn-sm me-2"><span><i class="bi bi-bag-plus-fill me-2"></i></span>Beli Produk</a>
                  <a type="button" class="btn btn-success btn-sm"><span><i class="bi bi-cart me-2"></i></span>Keranjang</a>
                </div>
                <small class="text-body-secondary">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
            <div class="card-body">
              <h5 class="card-text fw-normal">Sepatu Adidas</h5>
              <span>Harga: Rp300.000</span><br>
              <span>Warna: Putih</span><br>
              <span>Deskripsi: Stylish dan flexible</span>
              <div class="d-flex justify-content-between align-items-center mt-3">
                <div class="btn-group">
                  <a type="button" class="btn btn-primary btn-sm me-2"><span><i class="bi bi-bag-plus-fill me-2"></i></span>Beli Produk</a>
                  <a type="button" class="btn btn-success btn-sm"><span><i class="bi bi-cart me-2"></i></span>Keranjang</a>
                </div>
                <small class="text-body-secondary">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
            <div class="card-body">
              <h5 class="card-text fw-normal">T-Shirt</h5>
              <span>Harga: Rp150.000</span><br>
              <span>Warna: Orange</span><br>
              <span>Deskripsi: T-Shirt adidas terbuat dari bahan katun yang sangat lembut</span>
              <div class="d-flex justify-content-between align-items-center mt-3">
                <div class="btn-group">
                  <a type="button" class="btn btn-primary btn-sm me-2"><span><i class="bi bi-bag-plus-fill me-2"></i></span>Beli Produk</a>
                  <a type="button" class="btn btn-success btn-sm"><span><i class="bi bi-cart me-2"></i></span>Keranjang</a>
                </div>
                <small class="text-body-secondary">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
            <div class="card-body">
              <h5 class="card-text fw-normal">T-Shirt</h5>
              <span>Harga: Rp150.000</span><br>
              <span>Warna: Orange</span><br>
              <span>Deskripsi: T-Shirt adidas terbuat dari bahan katun yang sangat lembut</span>
              <div class="d-flex justify-content-between align-items-center mt-3">
                <div class="btn-group">
                  <a type="button" class="btn btn-primary btn-sm me-2"><span><i class="bi bi-bag-plus-fill me-2"></i></span>Beli Produk</a>
                  <a type="button" class="btn btn-success btn-sm"><span><i class="bi bi-cart me-2"></i></span>Keranjang</a>
                </div>
                <small class="text-body-secondary">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
            <div class="card-body">
              <h5 class="card-text fw-normal">T-Shirt</h5>
              <span>Harga: Rp150.000</span><br>
              <span>Warna: Orange</span><br>
              <span>Deskripsi: T-Shirt adidas terbuat dari bahan katun yang sangat lembut</span>
              <div class="d-flex justify-content-between align-items-center mt-3">
                <div class="btn-group">
                  <a type="button" class="btn btn-primary btn-sm me-2"><span><i class="bi bi-bag-plus-fill me-2"></i></span>Beli Produk</a>
                  <a type="button" class="btn btn-success btn-sm"><span><i class="bi bi-cart me-2"></i></span>Keranjang</a>
                </div>
                <small class="text-body-secondary">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
            <div class="card-body">
              <h5 class="card-text fw-normal">T-Shirt</h5>
              <span>Harga: Rp150.000</span><br>
              <span>Warna: Orange</span><br>
              <span>Deskripsi: T-Shirt adidas terbuat dari bahan katun yang sangat lembut</span>
              <div class="d-flex justify-content-between align-items-center mt-3">
                <div class="btn-group">
                  <a type="button" class="btn btn-primary btn-sm me-2"><span><i class="bi bi-bag-plus-fill me-2"></i></span>Beli Produk</a>
                  <a type="button" class="btn btn-success btn-sm"><span><i class="bi bi-cart me-2"></i></span>Keranjang</a>
                </div>
                <small class="text-body-secondary">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
            <div class="card-body">
              <h5 class="card-text fw-normal">T-Shirt</h5>
              <span>Harga: Rp150.000</span><br>
              <span>Warna: Orange</span><br>
              <span>Deskripsi: T-Shirt adidas terbuat dari bahan katun yang sangat lembut</span>
              <div class="d-flex justify-content-between align-items-center mt-3">
                <div class="btn-group">
                  <a type="button" class="btn btn-primary btn-sm me-2"><span><i class="bi bi-bag-plus-fill me-2"></i></span>Beli Produk</a>
                  <a type="button" class="btn btn-success btn-sm"><span><i class="bi bi-cart me-2"></i></span>Keranjang</a>
                </div>
                <small class="text-body-secondary">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
            <div class="card-body">
              <h5 class="card-text fw-normal">T-Shirt</h5>
              <span>Harga: Rp150.000</span><br>
              <span>Warna: Orange</span><br>
              <span>Deskripsi: T-Shirt adidas terbuat dari bahan katun yang sangat lembut</span>
              <div class="d-flex justify-content-between align-items-center mt-3">
                <div class="btn-group">
                  <a type="button" class="btn btn-primary btn-sm me-2"><span><i class="bi bi-bag-plus-fill me-2"></i></span>Beli Produk</a>
                  <a type="button" class="btn btn-success btn-sm"><span><i class="bi bi-cart me-2"></i></span>Keranjang</a>
                </div>
                <small class="text-body-secondary">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
            <div class="card-body">
              <h5 class="card-text fw-normal">T-Shirt</h5>
              <span>Harga: Rp150.000</span><br>
              <span>Warna: Orange</span><br>
              <span>Deskripsi: T-Shirt adidas terbuat dari bahan katun yang sangat lembut</span>
              <div class="d-flex justify-content-between align-items-center mt-3">
                <div class="btn-group">
                  <a type="button" class="btn btn-primary btn-sm me-2"><span><i class="bi bi-bag-plus-fill me-2"></i></span>Beli Produk</a>
                  <a type="button" class="btn btn-success btn-sm"><span><i class="bi bi-cart me-2"></i></span>Keranjang</a>
                </div>
                <small class="text-body-secondary">9 mins</small>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</main>
@endsection