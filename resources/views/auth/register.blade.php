<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset('backend/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('backend/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('backend/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('backend/dist/css/AdminLTE.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('backend/plugins/iCheck/square/blue.css')}}">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style>
    .invalid-feedback {
      width: 100%;
      margin-top: 0.25rem;
      font-size: .875em;
      color: #dc3545;
    }
  </style>
</head>


<body class="hold-transition register-page">
  <div class="register-box">
    <div class="register-logo">
      <a href="index2.html"><b>Admin</b>LTE</a>
    </div>

    <div class="register-box-body">
      <p class="login-box-msg">Register a new membership</p>

      <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group has-feedback">
          <input type="text" name="name" class="form-control @error('name', 'post') is-invalid @enderror" placeholder="Full name" value="{{old('name')}}">
          @error('name')
          <div class="invalid-feedback">{{$message}}</div>
          @enderror
          <span class="glyphicon glyphicon-user form-control-feedback"></span>

        </div>
        <div class="form-group has-feedback">
          <input type="email" name="email" class="form-control @error('email', 'post') is-invalid @enderror" placeholder="Email" value="{{old('email')}}">
          @error('email')
          <div class="invalid-feedback">{{$message}}</div>
          @enderror
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

        </div>
        <div class="form-group has-feedback">
          <input type="password" name="password" class="form-control @error('password', 'post') is-invalid @enderror" placeholder="Password">
          @error('password')
          <div class=" invalid-feedback">{{$message}}
          </div>
          @enderror
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>

        </div>
        <div class="form-group has-feedback">
          <input type="password" name="password_confirmation" class="form-control @error('password_confirmation', 'post') is-invalid @enderror" placeholder="Retype password">
          <span class=" glyphicon glyphicon-log-in form-control-feedback"></span>
          @error('password_confirmation')
          <div class=" invalid-feedback">{{$message}}
          </div>
          @enderror
        </div>
        <div class="row">
          <div class="col-xs-8">
            <div class="checkbox icheck">
              <label>
                <input type="checkbox"> I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <a href="{{ route('login') }}" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div>
  <!-- /.register-box -->

  <!-- jQuery 3 -->
  <script src="backend/bower_components/jquery/dist/jquery.min.js">
  </script>
  <!-- Bootstrap 3.3.7 -->
  <script src="backend/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- iCheck -->
  <script src="backend/plugins/iCheck/icheck.min.js"></script>
  <script>
    $(function() {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' /* optional */
      });
    });
  </script>
</body>

</html>