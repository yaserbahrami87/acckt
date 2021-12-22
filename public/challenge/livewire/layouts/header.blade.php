<div>
    <style>
        .navbardropdownedit {
            background: none;
            color: inherit;
            border: none;
            font: inherit;
            cursor: pointer;
            outline: inherit;
        }
    </style>
    <style>
        .myNavTitle {

            cursor: pointer;
        }



        body {
            background: #002000 !important;
            font-size: 1.1rem;
        }

    </style>
    <nav class="navbar navbar-expand-sm navbar-dark fixed-top "
         style="direction: rtl!important;background: #1A3765;">

        <div class="container">
            <button class="navbar-toggler"  type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                    aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">

                <span class="navbar-toggler-icon "></span>

            </button>

            <a class="navbar-brand myNavTitle text-white" href="#">{{auth('web')->user()->name ?? auth('challenge')->user()->name ?? 'Sh.Kharazm'}}</a>

            <div class="collapse navbar-collapse text-right " id="navbarTogglerDemo02">

                <ul class="navbar-nav ml-auto smooth-scroll">

                    <li class="nav-item">

                        <a class="nav-link text-uppercase myNavTitle text-white" href="{{route('homePage')}}">صفحه اصلی <span
                                class="sr-only">(current)</span></a>

                    </li>

                    <li class="nav-item dropdown">
                        <button class="nav-link dropdown-toggle text-white navbardropdownedit myNavTitle"
                                id="challenges_dropdown" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                            چالش ها
                        </button>
                        <div class="dropdown-menu text-right text-white" aria-labelledby="challenges_dropdown" style="background-color: #1A3765">
                            <a class="dropdown-item text-white" href="{{route('challenges.all')}}" style="font-size: 1.02rem">همه ی چالش ها</a>
                            <a class="dropdown-item text-white" href="{{route('challenges.most.view')}}" style="font-size: 1.02rem">پر بازدیدترین</a>
                            <a class="dropdown-item text-white" href="{{route('challenges.most.like')}}" style="font-size: 1.02rem">محبوب ترین</a>
                            <a class="dropdown-item text-white" href="{{route('challenges.most.ideas')}}" style="font-size: 1.02rem">چالش های باز</a>
                        </div>
                    </li>

                    <li class="nav-item">

                        <a class="nav-link text-uppercase myNavTitle text-white" href="{{route('articles.all')}}">اخبار و رویدادها<span
                                class="sr-only">(current)</span></a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link text-uppercase text-white myNavTitle " href="{{route('articles.all')}}">رسانه ی اکت<span
                                class="sr-only">(current)</span></a>

                    </li>
                    <li class="nav-item">
                    <li class=" dropdown">
                        <button class="dropdown-toggle nav-link text-white navbardropdownedit myNavTitle" type="button"
                                id="about_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            درباره ی ما
                        </button>
                        <div class="dropdown-menu text-right " aria-labelledby="about_dropdown" style="background-color: #1A3765">
                            <a class="dropdown-item text-white" href="#" style="font-size: 1.02rem">درباره ی شرکت</a>
                            <a class="dropdown-item text-white" href="#" style="font-size: 1.02rem">مجوز های قانونی</a>
                            <a class="dropdown-item text-white" href="#" style="font-size: 1.02rem">قوانین و شرایط</a>
                            <a class="dropdown-item text-white" href="#" style="font-size: 1.02rem">همکاری</a>
                            <a class="dropdown-item text-white" href="#" style="font-size: 1.02rem">تماس با ما</a>
                        </div>
                    </li>


                </ul>


                <ul class="navbar-nav nav-flex-icons" >
                    <li class=" dropdown">
                        <button class="dropdown-toggle nav-link text-white navbardropdownedit myNavTitle" type="button"
                                id="about_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                style="font-size: 1.02rem">
                            ثبت چالش
                        </button>
                        <div class="dropdown-menu text-right" aria-labelledby="about_dropdown" style="background-color: #1A3765">
                            @auth('web')
                                <a class="dropdown-item text-white" href="{{route('profile.user.inaformation')}}"
                                   style="font-size: 1.02rem">
                                    پورتابل صاحبان چالش
                                </a>
                            @endauth
                            @auth('challenge')
                                <a class="dropdown-item text-white" href="{{route('profile.company.inaformation')}}" style="font-size: 1.02rem">پورتابل صاحبان چالش</a>
                            @endauth
                            <a class="dropdown-item text-white" href="{{route('profile.user.challenges.create')}}" style="font-size: 1.02rem"> ثبت چالش </a>
                            @guest('web')
                                <a class="dropdown-item text-white" href="{{route('login')}}" style="font-size: 1.02rem"> ورود ( اشخاص حقیقی )</a>
                            @endguest
                            @guest('challenge')
                                <a class="dropdown-item text-white" href="{{route('company.login')}}" style="font-size: 1.02rem">ورود ( اشخاص حقوقی )</a>
                            @endguest
                            @auth('web')
                                <a class="dropdown-item text-white" href="{{route('logout')}}" style="font-size: 1.02rem"> خروج</a>
                            @endauth
                            @auth('challenge')
                                <a class="dropdown-item text-white" href="{{route('logout')}}" style="font-size: 1.02rem"> خروج </a>
                            @endauth
                            @auth('webadmin')
                                <a class="dropdown-item text-white" href="{{route('logout')}}" style="font-size: 1.02rem"> خروج مدیریت </a>
                            @endauth
                        </div>
                    </li>


                </ul>


            </div>

        </div>

    </nav>

</div>
