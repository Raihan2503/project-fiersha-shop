<nav class="navbar bg-dark navbar-expand-md border-bottom border-body" data-bs-theme="dark">
    <div class="container">
      <a class="navbar-brand" href="/">
        <img src="{{asset('assets/images/logo-fiersha2.png')}}" alt="" width="50" />
        <span>Fiersha Shop</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Keranjang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Product</a>
          </li>
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
            <a class="nav-link" href="{{url('/register')}}">{{Auth::user()->username}}</a>
          </li>
          <li class="nav-item">
            <form action="{{route('logout')}}" method="POST">
              @csrf
              <button type="submit" class="btn btn-danger">Logout</button>
            </form>
          </li>
          @endauth
        </ul>
      </div>
    </div>
  </nav>