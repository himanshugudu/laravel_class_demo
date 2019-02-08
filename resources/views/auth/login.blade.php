@extends('layout.dashboard')
@section('content')
<body class="login-img3-body">

  <div class="container">

    <form class="login-form" method="POST" action="{{URL::route('login')}}">
      {!! csrf_field() !!}
      <div class="login-wrap">
        <p class="login-img"> <a href="{{URL::to('/')}}"><img src={{asset('img/logo-w.png')}} alt="Logo"></a> </p>

           @if (count($errors) > 0)
            <div class="alert alert-danger">
              <strong>Whoops!</strong> There were some problems with your input.<br><br>
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Username" autofocus>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" class="form-control" name="password" id="password"placeholder="Password">
        </div>
        <label class="checkbox">
            <input type="checkbox" name="remember" value="remember-me"> Remember me
                <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
        </label>
        <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
        <a class="btn btn-primary btn-lg btn-block new_btn" href="{{URL::route('register')}}">Signup</a>
      </div>
    </form>
    <div class="text-right">
      <div class="credits">
         
          <a href="https://www.edjio.com/">@ All Rights Reserved. Real Time Signals India Private Limited.</a> 
        </div>
    </div>
  </div>
</body>

@stop