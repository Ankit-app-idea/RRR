@extends('layouts.app')

@section('content')
<div class="sign_up_wrap">
   <div class="container">
      <h2>Sign up</h2>
      @isset($url)
        <form method="POST" action='{{ url("register/$url") }}' aria-label="{{ __('Register') }}">
        @else
        <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
        @endisset
            @csrf
         <div class="form-group">
            <label for="f_name">First Name</label>
            <input id="f_name" type="text" class="form-control @error('f_name') is-invalid @enderror" name="f_name" value="{{ old('f_name') }}" required autocomplete="f_name" autofocus placeholder="First Name">
            @error('f_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
         </div>
         <div class="form-group">
            <label for="l_name">Last Name</label>
            <input id="l_name" type="text" class="form-control @error('l_name') is-invalid @enderror" name="l_name" value="{{ old('l_name') }}" required autocomplete="l_name" autofocus placeholder="Last Name">

            @error('l_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
         </div>
         <div class="form-group">
            <label for="email">Email address</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"  placeholder="Enter email" name="email" value="{{ old('email') }}" required autocomplete="email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
         </div>
        <div class="form-group">
            <label for="password-confirm">Confirm Password</label>
            <input id="password-confirm" type="password" placeholder="Enter Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input id="password" type="password" placeholder="Confirm Password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password">

            @error('password_confirmation')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
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
                width: max-content;">Sign Up</button>
        <div class="form-group">
           <p class="or">Or</p>
        </div>
        <div class="form-inner">
           <span>Signup With</span>
           <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
           <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
           <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
        </div>
        <!-- /.form-inner -->
        <div class="signup_link">
           <p>Already have a account? <a href="{{ url('login') }}">Sign in</a></p>
        </div>
      </form>
   </div>
</div>



@endsection
