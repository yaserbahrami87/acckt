<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> ورود کاربران</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

    <script src="https://kit.fontawesome.com/6831b81fdf.js" crossorigin="anonymous"></script>
    <link href="{{asset('js/mdbootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('js/mdbootstrap/css/mdb.min.css')}}" rel="stylesheet">


    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/register.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login-form.css') }}" rel="stylesheet">


</head>


<body>


<!--Main Navigation-->

<!--Main Navigation-->
<header dir="rtl">

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
        <div class="container text-right">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
                    aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
                <ul class="navbar-nav ml-auto ">
                    <a class="navbar-brand" href="#"><img src="{{asset('dist/img/logo_old.png')}}" style="width: 5vw" alt=""></a>

                    <li class="nav-item mr-3">
                        <a class="nav-link" href="{{route('homePage')}}">صفحه ی اصلی </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('login.choice')}}">ورود</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('register.choice')}}">ثبت نام</a>
                    </li>
                </ul>

                <form class="form-inline">
                    <div class="md-form my-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    </div>
                </form>

            </div>
        </div>
    </nav>

    <!--Intro Section-->
    <section class="view intro-2">
        <div class="mask rgba-stylish-strong h-100 d-flex justify-content-center align-items-center">
            <div class="container text-right">
                <div class="row">
                    <div class="col-xl-5 col-lg-6 col-md-10 col-sm-12 mx-auto mt-lg-5">

                        <!--Form with header-->
                        <div class="card wow fadeIn" data-wow-delay="0.3s">
                            <form action="{{route('company.login')}}" method="POST" style="font-size: .8rem">
                                @csrf
                                <div class="card-body right-aligned">



                                    <!--Body-->
                                    <div class="md-form">
                                        <label for="orangeForm-name" >نام کاربری</label>
                                        <input type="text" name="name" id="orangeForm-name" class="form-control  @error('name') is-invalid @enderror ">
                                        @error('name')
                                        <span class="invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                        @enderror
                                    </div>

                                    <div class="md-form">

                                        <label for="orangeForm-email">ایمیل</label>

                                        <input type="text" name="email" id="orangeForm-email" class="form-control  @error('email') is-invalid @enderror ">
                                        @error('email')
                                        <span class="invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                        @enderror
                                    </div>

                                    <div class="md-form">
                                        <input type="password" name="password" id="orangeForm-pass" class="form-control  @error('password') is-invalid @enderror ">
                                        @error('password')
                                        <span class="invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                        @enderror
                                        <label for="orangeForm-pass" >رمز عبور</label>
                                    </div>

                                    <div class="md-form d-flex justify-content-center">
                                        <livewire:auth.recaptcha :has-error="$errors->has('g-recaptcha-response')"/>
                                        @error('g-recaptcha-response')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="text-center">
                                        <button class="btn blue-gradient btn-lg">ورود</button>
                                        <hr>
                                        <div class="inline-ul text-center d-flex justify-content-center">
                                            <a class="p-2 m-2 fa-lg tw-ic"><i class="fab fa-twitter white-text"></i></a>
                                            <a class="p-2 m-2 fa-lg li-ic"><i class="fab fa-linkedin-in white-text"> </i></a>
                                            <a class="p-2 m-2 fa-lg ins-ic"><i class="fab fa-instagram white-text"> </i></a>
                                        </div>
                                    </div>

                                </div>

                            </form>
                        </div>
                        <!--/Form with header-->

                    </div>
                </div>
            </div>
        </div>
    </section>

</header>
<!--Main Navigation-->
<!--Main Navigation-->


<!--  SCRIPTS  -->
<!-- JQuery -->
<script type="text/javascript" src="{{asset('js/mdbootstrap/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/mdbootstrap/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/mdbootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/mdbootstrap/js/mdb.min.js')}}"></script>
<script src="{{asset('js/sweetalert2/dist/sweetalert2.all.min.js')}}"></script>

@stack('scripts')
@if(session()->has('unreachable_account'))
    <script>
        Swal.fire({
            icon: 'error',
            showConfirmButton: false,

            html:
                'این اکانت از دسترس خارج شده است برای فعالسازی با پشتیبانی در تماس باشید',
        })
    </script>
@endif
</body>

</html>
