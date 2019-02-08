@extends('layout.dashboard')
@section('content')
<body class="login-img3-body">

  <div class="container">

    <form class="login-form" method="POST" action="{{URL::route('register')}}">
      {!! csrf_field() !!}
      <div class="login-wrap">
        <p class="login-img"><a href="{{URL::to('#')}}"><img src={{asset('img/logo-w.png')}} alt="Logo"></a></p>
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
        <div class="form-group">
          <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Name" >
        </div>
        <div class="form-group">
          
          <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" autofocus>
        </div>
        <div class="form-group">
          
          <input type="number" class="form-control" name="phone" id="phone" value="{{ old('phone') }}" placeholder="Contact No." >
        </div>
        <div class="form-group">
          
          <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="">
        </div>
        
        <div class="form-group">
          
          <input type="password" class="form-control" name="password_confirmation"  placeholder="Confirm Password">
        </div>
        <button class="btn btn-primary btn-lg btn-block" type="submit">Register</button>
        &nbsp;
        <p class="text-right1">If Alredy Register?<a class="" href="{{URL::route('login')}}">Login</a></p>
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