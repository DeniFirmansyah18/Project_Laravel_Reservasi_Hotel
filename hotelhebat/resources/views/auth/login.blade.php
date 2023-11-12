{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

<!doctype html>
<html lang="en">
  <head>
  	<title>Hotel Hebat | Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/loginstyle.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<div class="heading-section" style="font-size:75px">Hotel Hebat</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center" style="font-size:20px">Selamat Datang Di Hotel Hebat!<br>Dimohon Untuk Login Terlebih Dahulu</h3>
                @if (session()->has('pesan'))
                    <div class="alert bg-danger">
                        {{ session('pesan') }}
                    </div>
                @endif
		      	<form action="{{ route('login') }}" method="post">
                    @csrf
		      		<div class="form-group">
		      			<input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" required>
                          @error('email')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                          @enderror
		      		</div>
                    <div class="form-group">
                        <input id="password-field" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required>
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-primary submit px-3">Login</button>
                    </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	<label class="checkbox-wrap checkbox-primary">Tetap Masuk
                            <input type="checkbox" checked>
                                <span class="checkmark"></span>
								    </label>
					                    </div>
					<div class="w-50 text-md-right">
						<a href="{{ route('password.request') }}" style="color: #fff">Lupa Password</a>
					</div>
	            </div>
	            </form>
	          <p class="w-100 text-center">&mdash; Belum Punya Akun? &mdash;</p>
	          <div class="social d-flex text-center">
	          	<a href="{{ route('register') }}" class="px-2 py-2 mr-md-1 rounded">Daftar Sekarang!</a>
	          </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/loginjquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/loginbootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>



