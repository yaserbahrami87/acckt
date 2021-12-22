<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>انتخاب نوع ثبت نام</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

    <script src="https://kit.fontawesome.com/6831b81fdf.js" crossorigin="anonymous"></script>
    <link  href="{{asset('css/mdb.min.css')}} " rel="stylesheet">
    <link  href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        #login_way {
            transition: all .2s ease-in-out;
            cursor: pointer;
            min-height: 50vh
        }
        #login_way:hover {
            transform: scale(1.1);
        }
        #login_way_link{
            text-decoration: none;
        }
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


    </style>

</head>

<body>


<!--Main Navigation-->
<header>

    <livewire:page.nav2/>

    <!--Intro Section-->
    <section class="view intro-2">
        <div class="mask rgba-stylish-strong h-100 d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row" >
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-lg-5" >
                        <div  style="background-color: #38006b;padding: 3rem">

                            <!-- Second section -->
                            <section id="services" class="section feature-box pt-4 pb-5">
                                <!-- First row -->
                                <div class="row text-center wow fadeIn" data-wow-delay="0.4s">

                                    <!-- Second column -->
                                    <div class="col-lg-6 col-md-12 col-sm-12" id="features_sections">

                                        <a href="{{route('register')}}" class="text-light" id="login_way_link">
                                            <!-- Panel -->
                                            <div class="card card-body hoverable" id="login_way">

                                                <div style="margin-top: 50%">
                                                    <i class="far fa-newspaper grey-text fa-3x mb-4" aria-hidden="true"></i>

                                                    <h5 class="feature-title mb-4">ثبت نام اشخاص حقیقی (کاربران عادی)</h5>

                                                    <p class="grey-text">شما میتوانید چالش های خود را منتشر و برای چالش های منتشر شده ایده و سرمایه ثبت کنید</p>
                                                </div>

                                            </div>

                                            <!-- Panel -->
                                        </a>
                                    </div>

                                    <!-- Second column -->
                                    <!-- Third column -->
                                    <div class="col-lg-6 col-md-12 col-sm-12" id="features_sections">

                                        <a href="{{route('company.register')}}" class="text-light" id="login_way_link">
                                            <!-- Panel -->
                                            <div class="card card-body hoverable" id="login_way">
                                                <div style="margin-top: 50%">
                                                    <i class="fas fa-pencil-alt grey-text fa-3x mb-4" aria-hidden="true"></i>

                                                    <h5 class="feature-title mb-4">ثبت نام اشخاص حقوقی (شرکت ها و سازمانها)</h5>

                                                    <p class="grey-text">شما میتوانید مانند کاربران از ثبت چالش و ایده و سرمایه استفاده کنید بعلاوه امکانات ویژه ای که در نظر گرفتیم</p>
                                                </div>

                                            </div>
                                            <!-- Panel -->
                                        </a>

                                    </div>
                                    <!-- Third column -->

                                </div>
                                <!-- First row -->

                            </section>
                            <!-- Second section -->

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

</header>
<!--Main Navigation-->


<!--  SCRIPTS  -->
<!-- JQuery -->
<script src="{{ asset('js/app.js') }}" ></script>
<script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/mdb.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/HomePage.js')}}"></script>
@stack('scripts')
<script>
    new WOW().init();

</script>
</body>

</html>
