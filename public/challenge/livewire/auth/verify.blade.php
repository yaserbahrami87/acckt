<div>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <!-- Required meta tags always come first -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Material Design Bootstrap Template</title>

        <livewire:styles />
        <script src="https://kit.fontawesome.com/6831b81fdf.js" crossorigin="anonymous"></script>
        <link  href="{{asset('/css/mdb.min.css')}} " rel="stylesheet">
        <link  href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{ asset('css/register.css') }}" rel="stylesheet">

        <link href="{{ asset('css/verify-blade.css') }}" rel="stylesheet">
        <script src="https://kit.fontawesome.com/6831b81fdf.js" crossorigin="anonymous"></script>



    </head>

    <body style="direction: rtl !important;">

    <!--Main Navigation-->
    <header>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <strong>She-ANDISHE</strong>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
                        aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item">
                            <a class="nav-link" href="#">لینک</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">لینک</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar -->

        <!--Intro Section-->
        <section class="view intro-2">
            <div class="mask rgba-gradient">
                <div class="container h-100 d-flex justify-content-center align-items-center">

                    <!--Grid row-->
                    <div class="row  pt-5 mt-3">

                        <!--Grid column-->
                        <div class="col-md-12">

                            <div class="card">
                                <div class="card-body">

                                    <h2 class="font-weight-bold my-4 text-center mb-5 mt-4 font-weight-bold text-right">
                                        <strong>فعالسازی ایمیل</strong>
                                        <p class="">
                                        @if (session('resent'))
                                            <div class="alert alert-success" role="alert">
                                                {{ __('لینک فعالسازی برای ایمیل شما با موفقیت ارسال شد') }}
                                            </div>
                                            @endif
                                        </p>
                                    </h2>
                                    <hr>

                                    <!--Grid row-->
                                    <div class="row mt-5">




                                            <!--Grid row-->
                                            <div class="row pb-4 d-flex justify-content-center mb-4">

                                            </div>
                                            <!--/Grid row-->

                                            <!--Body-->
                                        {{ __('Before proceeding, please check your email for a verification link.') }}
                                        {{ __('If you did not receive the email') }},
                                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                            @csrf
                                            <div class="md-form d-flex justify-content-center">
                                                <livewire:auth.recaptcha :has-error="$errors->has('g-recaptcha-response')"/>
                                                @error('g-recaptcha-response')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <button  type="submit"  class="btn btn-indigo btn-rounded mt-5">ارسال</button>
                                        </form>


                                        </div>
                                        <!--Grid column-->

                                    </div>
                                    <!--Grid row-->

                                </div>
                            </div>


                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                </div>
            </div>
        </section>
        <!--Intro Section-->

    </header>
    <!--Main Navigation-->
    <script src="{{ asset('js/app.js') }}" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/mdb.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    @stack('scripts')
    <script>
        new WOW().init();

    </script>
    </body>

    </html>

</div>
