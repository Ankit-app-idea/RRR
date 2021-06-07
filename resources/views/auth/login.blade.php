@extends('layouts.app')

@section('content')

<div class="sign_up_wrap">
    <div class="container">
        <h2>Login</h2>
         @isset($url)
            <form method="POST" action='{{ url("login/$url") }}' aria-label="{{ __('Login') }}">
                @else
            <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                @endisset
                    
                @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
<!--              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >-->
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                @if (Route::has('password.request'))
                    <a class="forgot_link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif                
            </div>
             <button type="submit" style="
                display: block;
                margin: 0 auto;
                    margin-top: 0px;
                padding: 10px 30px;
                background: #fff;
                border-color: #fff;
                color: #3ca5a2;
                border-radius: 0;
                font-size: 18px;
                margin-top: 30px;
                text-transform: uppercase;
                font-weight: bold;
                width: max-content;">Sign In</button> 
                
           
                
                <div class="form-group">
                        <p class="or">Or</p>
                </div>
                <div class="form-inner">
                    <span>Login With</span>
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>

                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                </div><!-- /.form-inner -->
                <div class="signup_link"><p>Don't have an account? <a href="{{ url('register') }}">Sign Up</a></p></div>
        </form>
    </div>
</div>

@endsection
