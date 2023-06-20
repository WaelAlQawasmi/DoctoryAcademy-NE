@extends('layouts.app')

@section('content')
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ __('Login') }}</title>
        <link href="assets/css/login.css" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>

    <body>
        <div class="login-clean">
            <form method="post" method="POST" action="{{ route('login') }}">
                <h2 class="sr-only">{{ __('Login') }}</h2>
                <div class="illustration"><img src="https://doctoryacademy.com/vido.php?vId=0000&url=1663439152.jpg"
                        class="icon ion-ios-navigate"></i></div>
                <div class="form-group">
                    <input class="form-control @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}" autocomplete="email" autofocus required placeholder="Email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input id="password-field" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password" placeholder="Password" required>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit"> {{ __('Login') }}</button>

                 
                </div>
                @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="forgot">   {{ __('Forgot Your Password?') }}</a>
                @endif
            </form>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>
@endsection
