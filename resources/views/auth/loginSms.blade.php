@extends('auth.master.index')

@section('forms')

    <form method="POST" action="/loginsms/checkcode">
        {{csrf_field()}}
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="fa fa-user m-0"></span>
            </div>
            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="tel" value="{{ old('tel') }}" required autocomplete="tel" autofocus placeholder="تلفن همراه خود را وارد کنید" />
            @error('tel')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group row ">
            <div class="col-12 mb-3">
                <button type="submit" class="btn btn-success btn-block">
                    {{ __('ارسال کد') }}
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
