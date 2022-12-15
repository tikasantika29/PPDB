{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <form method="POST" action="{{ route('register') }}">
            @csrf
            @include('sweetalert::alert')
            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />

                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />

                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('style/login-form-07/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('style/login-form-07/css/owl.carousel.min.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('style/login-form-07/css/bootstrap.min.css') }}">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('style/login-form-07/css/style.css') }}">

    <title>Login PPDB</title>
  </head>
  <body>
  

  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="{{ asset('style/login-form-07/images/undraw_remotely_2j6y.svg') }}" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3><center>DAFTAR AKUN</center></h3>
            </div>
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group first">
                    <x-input-label for="name" :value="__('Nama')" />
    
                    <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus />
    
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
    
              
              <div class="form-group first">
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="form-group first">
                <x-input-label for="password" :value="__('Kata Sandi')" />

                <x-text-input id="password" class="form-control"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

             <!-- Confirm Password -->
             <div class="form-group first">
                <x-input-label for="password_confirmation" :value="__('Konfirmasi Kata Sandi')" />

                <x-text-input id="password_confirmation" class="form-control"
                                type="password"
                                name="password_confirmation" required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            {{-- <div class="form-group first">
                <x-input-label for="name" :value="__('Daftar Sebagai')" />

                <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name')"/>

                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div> --}}


              <div class="d-flex mb-5 align-items-center">
                <span class="ml-auto">
                  <a href="{{ route('login') }}" class="forgot-pass">Sudah Punya Akun? Masuk Disini</a>
                  <a class="underline text-sm text-gray-600 hover:text-gray-900"></a>
              </span> 
              </div>

              <button type="submit" value="Log In" class="btn btn-block btn-primary">
                 {{ __('Register') }}
              </button>
            </div>
            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>
    <script src="{{ asset('style/login-form-07/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('style/login-form-07/js/popper.min.js') }}"></script>
    <script src="{{ asset('style/login-form-07/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('style/login-form-07/js/main.js') }}"></script>
  </body>
</html>