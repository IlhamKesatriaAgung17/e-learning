@extends('layouts.dashboard')

@section('content')


<div class="register-box">
            <div class="card card-outline card-primary bg-light">
                <div class="card-header text-center">
                    <a  class="h1"><b>Register</b></a>
                </div>
                <div class="card-body" >
                    <div class="card-header text-center">{{ __('Register a new membership') }}</div>
                    <form  method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="input-group  mb-3">
                            <input id="name" type="text" class="form-control" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="{{ __('Name') }}">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <div class="input-group-append">
                                <div class="input-group-text">
                                   <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>


                        <div class="input-group  mb-3">
                            <input id="email" for="email" class="form-control" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{ __('E-Mail Address') }}">
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
                            <input id="pasword" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" for="password"  placeholder="{{ __('Password') }}">
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

                        <div class="input-group  mb-3">
                            <input id="password-confirm" type="password" for="password-confirm" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="{{ __('Confirm Password') }}">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                  <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>

                        <div class="input-group  mb-3">
                            <input id="avatar" type="file" class="form-control" @error('name') is-invalid @enderror" name="avatar" value="{{ old('avatar') }}" required autocomplete="avatar" autofocus placeholder="{{ __('avatar') }}">
                            @error('avatar')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <div class="input-group-append">
                                <div class="input-group-text">
                                   <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-8">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="agreeTerms" id="agreeTerms" {{ old('agreeTerms') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="agreeTerms">
                                        {{ __('I agree to the') }}
                                        <a href="#">terms</a>
                                    </label>
                                </div>
                            </div>
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>

                    <a href="{{ route('login') }}" class="text-center">{{ __('I already have a membership ') }}</a>
                </div>
            </div>
</div>
@endsection
