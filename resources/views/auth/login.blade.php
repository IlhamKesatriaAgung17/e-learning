@extends('layouts.dashboard')

@section('content')
<div class="login-box">

        <div class="card card-outline card-primary bg-light">
            <br>
            <center>
                <img src="{{ asset('adminlte-3.1.0\dist\img\AMIK.png') }}" alt="Logo Ilham" width="90px" height="85">
            </center>
            <div class="card-header text-center">
                <a  class="h1"><b>LOGIN</b></a>
            </div>

                <div class="card-body">
                    <div class="card-header text-center">{{ __('Silahkan login disini !') }}</div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="input-group  mb-3">
                            <input id="email" for="email" class="form-control" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{ __('Alamat E-mail') }}" autofocus>
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
                                       <b> {{ __('Ingatkan Saya') }} </b>
                                    </label>
                                </div>
                            </div>
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Masuk') }}
                                </button>
                            </div>
                        </div>
                    </form>

                    <div class="form-group row mb-0">
                        @if (Route::has('password.request'))

                            <a class="btn btn-link" href="{{ route('register') }}">
                                {{ __('Belum punya akun ?') }} &nbsp; {{ __('Daftar disini') }}
                            </a>
                        @endif
                    </div>


                </div>
        </div>
</div>
@endsection
