<div>
    <style>
        html,
        body,
        header,
        .view {
            height: 100vh;
        }

        @media (max-width: 740px) {
            html,
            body,
            header,
            .view {
                height: 815px;
            }
        }

        @media (min-width: 800px) and (max-width: 850px) {
            html,
            body,
            header,
            .view  {
                height: 650px;
            }
        }

        .intro-2 {
            background: url("https://mdbootstrap.com/img/Photos/Horizontal/Nature/full page/img%20(11).jpg")no-repeat center center;
            background-size: cover;
        }
        .top-nav-collapse {
            background-color: #3f51b5 !important;
        }
        .navbar:not(.top-nav-collapse) {
            background: transparent !important;
        }
        @media (max-width: 768px) {
            .navbar:not(.top-nav-collapse) {
                background: #3f51b5 !important;
            }
        }
        @media (min-width: 800px) and (max-width: 850px) {
            .navbar:not(.top-nav-collapse) {
                background: #3f51b5!important;
            }
        }

        .card {
            background-color: rgba(229, 228, 255, 0.2);
        }
        .md-form label {
            color: #ffffff;
        }
        h6 {
            line-height: 1.7;
        }


        .card {
            margin-top: 30px;
            /*margin-bottom: -45px;*/

        }

        .md-form input[type=text]:focus:not([readonly]),
        .md-form input[type=password]:focus:not([readonly]) {
            border-bottom: 1px solid #8EDEF8;
            box-shadow: 0 1px 0 0 #8EDEF8;
        }
        .md-form input[type=text]:focus:not([readonly])+label,
        .md-form input[type=password]:focus:not([readonly])+label {
            color: #8EDEF8;
        }

        .md-form .form-control {
            color: #fff;
        }
        .md-form label {
            position: absolute;
            right: 0!important;
            left:unset;
        }

        .md-form label.active {
            transform: translate(15px, -14px) scale(0.8);
        }



    </style>
    <header dir="rtl">

        <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
            <div class="container text-right">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
                        aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
                    <ul class="navbar-nav ml-auto ">
                        <a class="navbar-brand" href="#"><img src="{{asset('dist/img/logo_old.png')}}" style="width: 5vw"
                                                              alt=""></a>

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
                            <input class="form-control mr-sm-2" type="text" placeholder="جستجو" aria-label="Search">
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
                                <form action="{{ route('profile.twofactor.admins.token.post') }}" method="POST" style="font-size: .8rem">
                                    @csrf

                                    <div class="card-body right-aligned">

                                        <!--Header-->
                                        <!--Body-->
                                        <div class="md-form">
                                            <label for="orangeForm-name" >کد فعالسازی</label>
                                            <input type="text" name="token" id="orangeForm-name"
                                                   class="form-control  @error('token') is-invalid @enderror">
                                            @error('token')
                                            <span class="invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>




                                        <div class="text-center">
                                            <button class="btn blue-gradient btn-lg">اعتبارسنجی</button>
                                            <hr>
                                            <div class="inline-ul text-center d-flex justify-content-center">
                                                <a class="p-2 m-2 fa-lg tw-ic"><i class="fab fa-twitter white-text"></i></a>
                                                <a class="p-2 m-2 fa-lg li-ic"><i
                                                        class="fab fa-linkedin-in white-text"> </i></a>
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

</div>
