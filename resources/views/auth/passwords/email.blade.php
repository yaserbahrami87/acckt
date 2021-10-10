@extends('auth.master.index')

@section('forms')
    <form method="POST" action="{{ route('password.email') }}">
        {{csrf_field()}}
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="fa fa-user m-0"></span>
            </div>
            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="پست الکترونیکی خود را وارد کنید" value="{{ old('پست الکترونیکی') }}" required autocomplete="email" autofocus />
            @error('email')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group row">
            <div class="col-12 mb-3">
                <button type="submit" class="btn btn-primary">
                    {{ __('ارسال لینک فعال سازی') }}
                </button>
            </div>
        </div>
    </form>
@endsection
