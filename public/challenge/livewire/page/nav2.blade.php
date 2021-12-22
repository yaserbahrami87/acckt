<div>
    <nav class="navbar navbar-expand-lg  navbar-dark fixed-top scrolling-navbar text-right" dir="rtl" style="background-color: #0d0d0d !important;">
        <div class="container">
            <a class="navbar-brand" href="#"><strong>لیناک</strong></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
                    aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('homePage')}}">صفحه اصلی <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item {{isActive(['register' , 'register.choice' , 'company.register']) }}">
                        <a class="nav-link" href="{{route('register.choice')}}">ثبت نام</a>
                    </li>
                    <li class="nav-item {{isActive(['login' , 'login.choice' , 'company.login']) }}">
                        <a class="nav-link" href="{{route('login.choice')}}">ورود</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('challenges.all')}}">چالش ها</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('articles.all')}}">اخبار ها</a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>
</div>
