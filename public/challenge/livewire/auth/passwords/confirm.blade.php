@extends('layouts.app')
@section('content')
    <div style="direction: ltr !important;margin-top: 0 !important;">
        <section class="register-photo">
            <div class="form-container">
                <div class="image-holder"></div>
                <form method="POST" action="{{ route('password.confirm') }}" action="{{ route('password.email') }}" style="direction: rtl !important;">
                    @csrf

                    <h2 class="text-center"> فرم<strong> بازیابی رمز عبور </strong></h2>

                    <label for="password">ایمیل</label>
                    <div class="mb-3"><input class="form-control text-right @error('password') is-invalid @enderror" id="password" type="password" name="password" placeholder="ایمیل خود را وارد کنید" >
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>

                    <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit">ورود</button></div><a class="already"  href="{{ route('password.request') }}">بازیابی رمز عبور</a>
                </form>
            </div>
        </section>
    </div>

@endsection
