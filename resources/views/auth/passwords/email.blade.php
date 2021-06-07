@extends('layouts.app')

@section('content')
<div class="sign_up_wrap">
    <div class="container">
        <h2>FORGOT PASSWORD</h2>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="form-group">
              <label for="email">E-Mail Address</label>
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter email">

                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              <!--<input type="password" class="form-control" id="exampleInputreset" placeholder="Password">-->
            </div>
            <p class="reset_pw_txt">Enter your registered email address to reset your password</p>
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
                width: max-content;">Submit</button>
            
        </form>
    </div>
</div>
@endsection


