@extends('layouts.app')

@section('content')
<!-- component -->
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

<section class="pt-16 bg-blueGray-50">
<div class="w-full lg:w-4/12 px-4 mx-auto">
  <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg mt-16">
    <div class="px-6">
      <div class="flex flex-wrap justify-center">
        <div class="w-full px-4 flex justify-center">
          <div class="relative me-3">
            <img alt="..." src="https://th.bing.com/th/id/R.4ce2716b66fdc9073f655b98eaaf7d5a?rik=LgOWRqBkh%2f8SFg&riu=http%3a%2f%2fwww.vilamina.com.mk%2fimages%2ficons%2fuser.png&ehk=upM4Eo02vmFyzG3zfg9Q7EUYj5R3pz4CR4d%2bc2Wbt%2fU%3d&risl=&pid=ImgRaw&r=0" class="shadow-xl rounded-full h-auto align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-150-px">
          </div>
        </div>
        <div class="w-full px-4 text-center mt-20">
          
        </div>
      </div>
      <div class="text-center mt-12">
        <h3 class="text-xl font-semibold leading-normal mb-2 text-blueGray-700 mb-2">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

            {{ __('You are logged in!') }}
        </h3>
        <div class="text-sm leading-normal text-blueGray-400  uppercase">
         Welcome  {{ Auth::user()->name }}
        </div>

        <div class="mb-2 me-4 text-blueGray-600 mt-10">
        <a href="/" class="get-started-btn"> {{ __('mainTrans.Get Started') }}</a>

        </div>
        <div class="mb-2 text-blueGray-600 mt-10">
        </div>
        <div class="mb-2 text-blueGray-600">
            {{ config('app.name', 'Laravel') }}
        </div>
      </div>
    </div>
  </div>
</div>
</section>
@endsection

  