@extends('layouts.dashboard')

@section('content')
<div class="login-box">

        <div class="card card-outline card-primary bg-light">
            <div class="card-header text-center">
                <a  class="h1"><b>Login User</b></a>
            </div>

                <div class="card-body">
                    <div class="card-header text-center">{{ __('Sign in to start your session') }}</div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="input-group  mb-3">
                            <input id="email" for="email" class="form-control" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{ __('E-Mail Address') }}" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="input-group-append">
                                <div class="input-group-text">
                                  <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>

                        <div class="input-group  mb-3">
                            <input id="pasword" type="password" class="form-control  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" for="password" placeholder="{{ __('Password') }}">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="input-group-append">
                                <div class="input-group-text">
                                  <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-8">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                       <b> {{ __('Remember Me') }} </b>
                                    </label>
                                </div>
                            </div>
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Sign In') }}
                                </button>
                            </div>
                        </div>
                    </form>

                    <div class="form-group row mb-0">
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>


                </div>
        </div>
</div>
@endsection
