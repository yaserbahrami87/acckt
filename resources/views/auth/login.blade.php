@extends('auth.master.index')

@section('forms')

<form method="POST" action="{{ route('login') }}">
    {{csrf_field()}}
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="fa fa-user m-0"></span>
        </div>
        <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('پست الکترونیکی') }}" required autocomplete="email" autofocus />
        @error('email')
        <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
        @enderror
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="fa fa-key m-0"></span>
        </div>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" />
        @error('password')
        <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
        @enderror
    </div>

    <div class="form-group row">
        <div class="col-md-6 offset-md-4">
            <div class="form-check">
                <!-- <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>-->
            </div>
        </div>
    </div>

    <div class="form-group row ">
        <div class="col-12 mb-3">
            <button type="submit" class="btn btn-success btn-block">
                {{ __('ورود') }}
            </button>
        </div>
        <div class="col-12">
            <a class="btn btn-link text-light" href="{{ route('register') }}">
                {{ __('ثبت نام') }}
            </a>
        </div>
        <div class="col-12">
            @if (Route::has('password.request'))
                <a class="btn btn-link text-light" href="{{ route('password.request') }}">
                    {{ __('رمز عبور خود را فراموش کردید؟') }}
                </a>
            @endif
        </div>
    </div>


</form>
@endsection
