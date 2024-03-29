<nav class="navbar bg-dark navbar-expand-md border-bottom border-body" data-bs-theme="dark">
    <div class="container">
      <a class="navbar-brand" href="/">
        <img src="{{asset('assets/images/logo-fiersha2.png')}}" alt="" width="45" />
        <span>Ferisya Shop</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('keranjang')}}">Keranjang</a>
          </li>
          @auth
          <li class="nav-item">
            <a class="nav-link" href="{{url('transaksi')}}">Transaksi</a>
          </li>
          @endauth
          <li class="nav-item">
              <a class="nav-link" href="#">Testimoni</a>
            </li>
          @guest
          <li class="nav-item">
            <a class="nav-link" href="{{url('/login')}}">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/register')}}">Register</a>
          </li>
          @endguest
          @auth
          <li class="nav-item">
            <form action="{{route('logout')}}" method="POST">
              @csrf
              <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">{{Auth::user()->username}}</button>
              <ul class="dropdown-menu dropdown-menu-end">
                <li class=""><button type="submit" class="dropdown-item">Logout</button></li>
              </ul>
            </form>
          </li>
          @endauth
        </ul>
      </div>
    </div>
  </nav>