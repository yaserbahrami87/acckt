@extends('auth.master.index')

@section('forms')
    <form method="POST" action="{{ route('register') }}">
        {{csrf_field()}}
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="fa fa-phone m-0"></span>
            </div>
            <input id="tel" type="text" class="form-control @error('tel') is-invalid @enderror" name="tel" value="{{ old('پست الکترونیکی') }}" required autocomplete="tel" autofocus />
            @error('email')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="fa fa-user m-0"></span>
            </div>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('پست الکترونیکی') }}" required autocomplete="email" autofocus />
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
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" />
            @error('password')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="fa fa-key m-0"></span>
            </div>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            @error('password_confirmation')
            <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 ">
                <button type="submit" class="btn btn-primary">
                    {{ __('ثبت نام') }}
                </button>
            </div>
            <div class="col-md-6 text-right">
                <a class="btn btn-link text-light" href="{{ route('login') }}">
                    {{ __('ورود') }}
                </a>
            </div>
        </div>

    </form>
@endsection
