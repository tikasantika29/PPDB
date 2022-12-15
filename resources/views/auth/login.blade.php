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

    <!-- Favicons -->
  <link href="{{ asset('style/logod.png') }}" rel="icon">
    
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
              <h3><center>LOGIN ADMIN PANEL</center></h3>
            </div>
            <x-auth-session-status class="mb-4" :status="session('status')" />

            @if(\Session::has('alert'))
                <div class="alert alert-danger">
                    <div>{{Session::get('alert')}}</div>
                </div>
            @endif
            @if(\Session::has('alert-success'))
                <div class="alert alert-success">
                    <div>{{Session::get('alert-success')}}</div>
                </div>
            @endif
            <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
              
              <div class="form-group first">
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="form-group last mb-4">
                <x-input-label for="password" :value="__('Kata Sandi')" />

                <x-text-input id="password" class="form-control"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>


              <div class="d-flex mb-5 align-items-center">
                <span class="ml-auto">
                    <a href="{{ route('password.request') }}" class="forgot-pass">Lupa Kata Sandi?</a>
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900">
                            </a>
                        @endif
                </span>

                <span class="ml-auto">
                  <a href="{{ route('register') }}" class="fregister">Belum Punya Akun? Daftar Disini</a>
                  <a class="underline text-sm text-gray-600 hover:text-gray-900"></a>
              </span> 
              </div>

              <button type="submit" value="Log In" class="btn btn-block btn-primary">
                {{ __('Log in') }}
              </button>
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


