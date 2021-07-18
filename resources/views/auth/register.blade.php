<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
<div class="bg-image"
  style="
    background-image: url('https://d341ezm4iqaae0.cloudfront.net/assets/2020/06/30160014/librarian-scaled.jpg');
    height: 150vh; "
>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('auth.register') }}">SIGN-IN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('auth.login') }}">LOGIN</a>
        </li>
      </ul>    
    </div>
  </div>
</nav>


    <div class="container">
    <div class="row" style ="margin-top:150px">
    <div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
    <br> <br> <br>
    <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
    
    <form action="{{ route('auth.save') }}" method="post">
    @if(Session::get('Success'))
    <div class="alert alert-success">
    {{ Session::get('Success')}}
    </div>
    @endif
    @if(Session::get('Fail'))
    <div class="alert alert-danger">
    {{ Session::get('Fail')}}
    </div>
    @endif
    @csrf
    <div class="container" style="background-color: #EBEBEB;">
    <br><h4><center>Register</h4><br><br>
    <div class="form-group">
    
    <label>Username</label>
    <input type="text" class="form-control" name="username" placeholder=" Enter the username" value="{{ old('username') }}">
    <span class="text-danger">@error('username') {{ $message }} @enderror</span>
    </div>
    <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="name" placeholder=" Enter your name" value="{{ old('username') }}">
    <span class="text-danger">@error('name') {{ $message }} @enderror</span>
    </div>
    <div class="form-group">
    <label>Email</label>
    <input type="text" class="form-control" name="email" placeholder=" Enter your email" value="{{ old('email') }}">
    <span class="text-danger">@error('email') {{ $message }} @enderror</span>
    </div>
    <div class="form-group">
    <label>Mobile</label>
    <input type="text" class="form-control" name="mobile" placeholder=" Enter your mobile no" value="{{ old('mobile') }}">
    <span class="text-danger">@error('mobile') {{ $message }} @enderror</span>
    </div>
    <div class="form-group">
    <label>Address</label>
    <input type="text" class="form-control" name="address" placeholder=" Enter your address" value="{{ old('address') }}">
    <span class="text-danger">@error('address') {{ $message }} @enderror</span>
    </div>
    <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="password" placeholder=" Enter the password">
    <span class="text-danger">@error('password') {{ $message }} @enderror</span>
    </div>
    <br>
    <button type="submit" class="btn btn-block btn-primary">Sign in</button>
    <br>
    <a href="{{ route('auth.login') }}">i already have an account, Sign in</a><br><br>
    </div>
    </form>
    </div></div>
    </div>
    <div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body> 
</html>