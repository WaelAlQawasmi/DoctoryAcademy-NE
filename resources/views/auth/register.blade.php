@extends('layouts.app')

@section('content')
<script src="https://cdn.tailwindcss.com"></script>

<body class="bg-gray-100">
  <div class="container mt-5 mx-auto py-8">
    <h1 class="text-2xl font-bold mb-6 text-center"> {{ __('mainTrans.Register') }}</h1>

    <form method="POST" action="{{ route('register') }}" class="w-full max-w-sm mx-auto bg-white p-8 rounded-md shadow-md">
        @csrf

      <div class="mb-4">
        <label for="name" class="block text-gray-700 text-sm font-bold mb-2" >{{ __('mainTrans.Name') }}</label>
            
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
         @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
      </div>

      <div class="mb-4">
        <label  for="email" class="block text-gray-700 text-sm font-bold mb-2">{{ __('mainTrans.Email') }}</label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
      </div>

      <div class="mb-4">
        <label for="password" class="block text-gray-700 text-sm font-bold mb-2">{{ __('mainTrans.Password') }}</label>

        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                 @enderror
      </div>

      <div class="mb-4">
        <label for="password-confirm" class="block text-gray-700 text-sm font-bold mb-2" >{{ __('mainTrans.Confirm_Password') }}</label>
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
      </div>

      <button type="submit"
        class="mt-4 w-full bg-blue-400 text-white text-sm font-bold py-2 px-4 rounded-md hover:bg-green-500 transition duration-300">
             {{ __('mainTrans.Register') }}
    </button>
    </form>
  </div>
</body>
@endsection