<div>
    <!-- Navbar -->

    <nav class="navbar scrolling-navbar double-nav " dir="rtl">
        <a id="slid_nav_admin" href="#" data-activates="slide-out" class="button-collapse " ><i class="fas fa-bars" style="color: black"></i></a>

        <!-- SideNav slide-out button -->
        <div class="d-flex" style="margin-right: 1%">
            <!-- Navbar links -->
            <ul class="nav navbar-nav nav-flex-icons ">

                <li class="nav-item mr-2" >
                    <a class="nav-link waves-effect" href="{{route('homePage')}}">
                        <i class="far fa-home"></i>
                        <span  class="clearfix d-none d-sm-inline-block font-weight-bold text-dark">صفحه ی اصلی</span>
                    </a>
                </li>
                <li class="nav-item mr-2 ml-2">
                    <a class="nav-link waves-effect">
                        <i class="far fa-home"></i>
                        <span class="clearfix d-none d-sm-inline-block font-weight-bold text-dark">پشتیبانی</span>
                    </a>
                </li>
                <li class="nav-item dropdown mr-4">
                    <a class="nav-link dropdown-toggle waves-effect font-weight-bold text-dark" href="#" id="userDropdown" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                     <span class="clearfix d-none d-sm-inline-block">حساب کاربری</span>   <i class="fas fa-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg-left dropdown-menu-sm-left text-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="{{route('logout')}}">خروج</a>
                        <a class="dropdown-item" href="{{route('login.choice')}}">ورود کاربری</a>
                        <a class="dropdown-item" href="{{route('login.choice')}}">ارسال تیکت</a>
                    </div>
                </li>

            </ul>
            <!-- Navbar links -->

        </div>

    </nav>
    <!-- Navbar -->
    <!-- Fixed button -->
    <div class="fixed-action-btn clearfix d-none d-xl-block" style="bottom: 45px; right: 24px;">

        <a class="btn-floating btn-lg red">
            <i class="fas fa-pencil-alt"></i>
        </a>

        <ul class="list-unstyled">
            <li><a class="btn-floating red"><i class="fas fa-star"></i></a></li>
            <li><a class="btn-floating yellow darken-1"><i class="fas fa-user"></i></a></li>
            <li><a class="btn-floating green"><i class="fas fa-envelope"></i></a></li>
            <li><a class="btn-floating blue"><i class="fas fa-shopping-cart"></i></a></li>
        </ul>

    </div>
    <!-- Fixed button -->
</div>
