@extends('layouts.app')

@section('content')

<p class="login-box-msg">Admin Kokobop Chicken Sign in</p>

<form method="POST" action="{{ route('login') }}">
    @csrf
  <div class="input-group mb-3">
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
  <div class="input-group mb-3">
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
  <div class="row">
    <div class="col-8">
      <div class="icheck-primary">
        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

        <label class="form-check-label" for="remember">
            {{ __('Remember Me') }}
        </label>
      </div>
    </div>
    <!-- /.col -->
    <div class="col-4">
        <button type="submit" class="btn btn-primary">
            {{ __('Login') }}
        </button>
    </div>
    <!-- /.col -->
  </div>
</form>


<!-- /.social-auth-links -->

<p class="mb-1">
    @if (Route::has('password.request'))
    <a class="btn btn-link" href="{{ route('password.request') }}">
        {{ __('Forgot Your Password?') }}
    </a>
    @endif
</p>
<p class="mb-0">
  <a href="{{ route('register') }}" class="text-center">Register new Account</a>
</p>
@endsection
