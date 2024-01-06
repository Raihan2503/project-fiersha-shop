<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    {{-- css --}}
    <link rel="stylesheet" href="{{asset('bootstrap-5/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
    {{-- my fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Diphylleia&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Diphylleia&family=Roboto:wght@500&display=swap" rel="stylesheet">
    {{-- Font awesome --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="container mt-3">
        <div class="row justify-content-md-center">
            <div class="col-md-6 mt-4">
              @include('message.success')
              @error('username')
                @include('message.error')
              @enderror
              @error('email')
                @include('message.error')
              @enderror
                <div class="modal-dialog p-3 border">
                    <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Register</h5>
                        </div>
                        <div class="modal-body mt-3">
                            <form action="{{route('register.store')}}" method="POST">
                              @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Username</label>
                                    <input type="text" class="form-control" name="username" id="name" placeholder="Username" required>
                                  </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com" required>
                                  </div>
                                  <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                                  </div>
                                  <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">Register</button>
                                  </div>
                                  <span>Sudah punya akun <a href="{{ url('/login') }}" class="link-login">Login</a></span>
                            </form>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>