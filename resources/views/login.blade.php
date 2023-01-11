<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Appbend|Loginxy</title>
   
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="{{ asset('AdminLTE/plugins/fontawesome-free/css/all.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('AdminLTE/dist/css/adminlte.min.css') }}">
  <style>
    body {
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: 100% 100%;
    }
    .glow {
        font-size: 80px;
        color: #fff;
        text-align: center;
        -webkit-animation: glow 1s ease-in-out infinite alternate;
        -moz-animation: glow 1s ease-in-out infinite alternate;
        animation: glow 1s ease-in-out infinite alternate;
        }

@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 20px #e6c400, 0 0 30px #e6c400, 0 0 40px #e6c400, 0 0 50px #e6c400, 0 0 60px #e6c400;
  }
  to {
    text-shadow: 0 0 10px #fff, 0 0 15px #4dff5c, 0 0 25px #4dff5c, 0 0 35px #4dff5c, 0 0 45px #4dff5c, 0 0 55px #4dff5c, 0 0 65px #4dff5c;
  }
}
    </style>
</head>
<body class="hold-transition login-page" style="background-image: url('{{ asset('img/bg_login.jpeg')}}')">
<div class="login-box" style="background-color: #fff">
  <div class="login-logo" >
    <a href="#html" class="glow" ><b>APPBend</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Silahkan Login untuk Masuk</p>

      <form action="../../index3.html" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      
      <!-- /.social-auth-links -->

     
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset('AdminLTE/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE -->
<script src="{{ asset('AdminLTE/dist/js/adminlte.js') }}"></script>
</body>
</html>
