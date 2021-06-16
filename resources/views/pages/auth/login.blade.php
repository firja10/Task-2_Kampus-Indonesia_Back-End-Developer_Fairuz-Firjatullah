<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Log in | KAMPUS INDONESIA</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{('dist/css/adminlte.min.css')}}">

  <link rel="icon" href="{{asset('img/kampus-indonesia.png')}}" type="image/png" />

</head>
<body class="hold-transition login-page" style = "background-color:#1264c2;">
<div class="login-box">
  <div class="login-logo">

    <img src="{{asset('img/kampus-indonesia.png')}}" alt="" style = "width:50px; border-radius:30px;">
    <a href="../../index2.html" style = "color:white;"><b>KAMPUS INDONESIA</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-baody">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="{{route('login')}}" method="post">
      @csrf
        <div class="input-group mb-3">
          <input type="email" class="form-control" name = "email" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name = "password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">

            </div>
          </div>
          <!-- /.col -->

          <div class="col-4" >
            <center>
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
        </center>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        {{-- <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a> --}}
        {{-- <a href="{{route('google.login')}}" class="btn btn-block btn-danger"> --}}
            <a href="{{route('google.login')}}" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in Menggunakan Email Google
        </a>
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="{{route('password.request')}}">Lupa Password</a>
      </p>
      <p class="mb-0">
        <a href="{{url('register')}}" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{('dist/js/adminlte.min.js')}}"></script>
</body>
</html>
