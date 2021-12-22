@extends('auth.master.index')

@section('title_login')
    <h3>پورتال صاحبان سرمایه</h3>
@endsection
@section('forms')
    <form method="POST" action="{{ route('register') }}">
        {{csrf_field()}}
        <input type="hidden" value="1" name="type" />
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="fa fa-phone m-0"></span>
            </div>
            <input id="tel" type="text" class="form-control @error('tel') is-invalid @enderror" name="tel" value="{{ old('tel') }}" required autocomplete="tel" autofocus placeholder="تلفن همراه خود را وارد کنید" />
            @error('email')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="fa fa-envelope m-0"></span>
            </div>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="ایمیل خود را وارد کنید" />
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
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="رمز عبور خود را وارد کنید" />
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
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="رمزخود را تکرار کنید" />
            @error('password_confirmation')
            <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 text-right">
                <button type="submit" class="btn btn-primary">
                    {{ __('ثبت نام') }}
                </button>
            </div>
            <div class="col-md-6 text-right">
                <a class="btn btn-link text-light" href="{{ route('login') }}">
                    {{ __('ورود') }}
                </a>
            </div>
            <!--
            <div class="col-md-12 text-right mt-3">
                <a class="btn btn-success d-block text-light" href="/loginsms">
                    {{ __('ورود با کد یکبار مصرف') }}
                </a>

            </div>-->
        </div>

    </form>
@endsection
