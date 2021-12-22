<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    {!! SEOMeta::generate() !!}

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/6831b81fdf.js" crossorigin="anonymous"></script>
    <link href="{{asset('js/mdbootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('js/mdbootstrap/css/mdb.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link id="profile_css_link" rel="stylesheet" href="{{asset('css/dark.css')}}">
    <!-- Your custom styles (optional) -->
    @yield('styles')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>


<body id="profile_body" class="fixed-sn" style="background-color: #efefef">
<div class="row">
    <div class="nav navbar-nav ">
        <div class="fixed-top ml-3 mr-2">
            <input id="search_input" name="profileSearch" class="form-control text-right text-dark" type="text" placeholder="جستوجو" style="width: 85%;height: 7vh;display: none"/>
            <a id="close_search" onclick="closeSearch()"  href="#" style="position: absolute;top: 2%;left: 0;display: none;color: #9e9e9e"><i class="fas fa-times closebtn ml-5 mt-3" style="font-size: 2rem"></i></a>
        </div>
    </div>
</div>

<!-- Main Navigation -->
<header>


    <div class="d-flex justify-content-between" style="margin: 1rem" >
        <div class="text-center float-left">
            <a href="#"><img src="{{auth('web')->user()->profile_image ?? auth('challenge')->user()->profile_image ?? 'https://yazdanbabazade.ir/dist/img/user-profile-thumbnail%20_1_.png'}}" style="width: 3rem;border-radius: 50%"></a>
            <a href="{{route('user.profile.notifications.all')}}" class="text-dark" ><i class="far fa-bell" style="font-size: 1.3rem;margin-left: 1rem"></i></a>
            <a href="#" onclick="searchToggle()" class="text-dark"><i class="fas fa-search" style="font-size: 1.3rem;margin-left: 1rem"></i></a>
        </div>
        <div class="d-flex justify-content-center" dir="rtl" style="margin-right: 10%">
            <a href="#" class="pl-0"><img src="https://yazdanbabazade.ir/dist/img/logo_old.png" style="width: 11vh;"></a>
            <p class=" mr-2 " style="font-size: 1.5rem;font-weight: 900;color: #5472d3 ;" >اندیشه خوارزم</p>
        </div>
        <span style="font-size:30px;cursor:pointer" data-activates="slide-out" class="button-collapse float-right text-right">&#9776;</span>

    </div>

</header>
<!-- Main Navigation -->
<!-- Main layout -->

    @include('livewire.auth.profile.sidebar')

    <div class="row">
            <span id="colorChoice"  class="float-left  ml-2" style="font-size:1.2rem;cursor:pointer;border-radius : 15%;background-color: #1e88e5;z-index: 10;position: fixed;margin-top: 20%;padding: 1.3vh !important;" onclick="myOpenNav()"><i class="fas fa-cog"></i></span>


        <div id="mySidenav" class="sideNavColor"  style="overflow: hidden; ">
            <div class="mr-2 mx-5">
                <div class=" text-right d-flex justify-content-around " onclick="myCloseNav()" >
                    <p style="font-size: 1.5rem;position: absolute;top: 1rem;right: 1rem">سفارشی سازی قالب</p>
                    <a  href="javascript:void(0)"><i class="fas fa-times closebtn ml-5 "></i></a>
                </div>
                <hr>
                <p class="text-right" style="font-size: 1.15rem;">طرح قالب</p>

                <div class="d-flex ">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" onclick="themeHandler()">
                            <label class="form-check-label text-right" for="flexRadioDefault1" >
                                روشن
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" onclick="themeHandler()" >
                            <label class="form-check-label" for="flexRadioDefault2">
                                نیمه تیره
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" onclick="themeHandler()" >
                            <label class="form-check-label" for="flexRadioDefault3">
                                تیره
                            </label>
                        </div>
                </div>
                <hr>
                <p class="text-right" style="font-size: 1.15rem;">رنگ های فهرست</p>
                <div class="d-flex justify-content-center">
                    <div class="form-check">
                        <input type="radio" class="btn-check" name="colorOption2" id="colorOption1" autocomplete="off" onclick="colorCheck()">
                        <label class="btn btn-elegant" style="height: 1.5rem" for="colorOption1"></label>

                    </div>
                    <div class="form-check">
                        <input type="radio" class="btn-check" name="colorOption1" id="colorOption2" autocomplete="off" onclick="colorCheck()">
                        <label class="btn btn-danger" style="height: 1.5rem" for="colorOption2"></label>

                    </div>
                    <div class="form-check">
                        <input type="radio" class="btn-check" name="colorOption1" id="colorOption3" autocomplete="off" onclick="colorCheck()">
                        <label class="btn btn-primary" style="height: 1.5rem" for="colorOption3"></label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="btn-check" name="colorOption1" id="colorOption3" autocomplete="off" onclick="colorCheck()">
                        <label class="btn btn-success" style="height: 1.5rem" for="colorOption3"></label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="btn-check" name="colorOption1" id="colorOption3" autocomplete="off" onclick="colorCheck()">
                        <label class="btn btn-warning" style="height: 1.5rem" for="colorOption3"></label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="btn-check" name="colorOption1" id="colorOption3" autocomplete="off" onclick="colorCheck()">
                        <label class="btn btn-secondary" style="height: 1.5rem" for="colorOption3"></label>
                    </div>
                </div>
                <hr>
                <p class="text-right" style="font-size: 1.15rem;">رنگ های نوار بالای صفحه</p>
                <div class="d-flex justify-content-center">
                    <div class="form-check">
                        <input type="radio" class="btn-check" name="colorOption2" id="colorOption1" autocomplete="off" onclick="colorCheck()">
                        <label class="btn btn-elegant" style="height: 1.5rem" for="colorOption1"></label>

                    </div>
                    <div class="form-check">
                        <input type="radio" class="btn-check" name="colorOption1" id="colorOption2" autocomplete="off" onclick="colorCheck()">
                        <label class="btn btn-danger" style="height: 1.5rem" for="colorOption2"></label>

                    </div>
                    <div class="form-check">
                        <input type="radio" class="btn-check" name="colorOption1" id="colorOption3" autocomplete="off" onclick="colorCheck()">
                        <label class="btn btn-primary" style="height: 1.5rem" for="colorOption3"></label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="btn-check" name="colorOption1" id="colorOption3" autocomplete="off" onclick="colorCheck()">
                        <label class="btn btn-success" style="height: 1.5rem" for="colorOption3"></label>
                    </div>
                    <div class="form-check">

                        <input type="radio" class="btn-check" name="colorOption1" id="colorOption3" autocomplete="off" onclick="colorCheck()">
                        <label class="btn btn-warning" style="height: 1.5rem" for="colorOption3"></label>
                    </div>
                    <div class="form-check">

                        <input type="radio" class="btn-check" name="colorOption1" id="colorOption3" autocomplete="off" onclick="colorCheck()">
                        <label class="btn btn-secondary" style="height: 1.5rem" for="colorOption3"></label>
                    </div>
                </div>
                <hr>
            </div>

        </div>
    </div>

<div class="col-lg-10 col-md-12 col-sm-12 ">

    @yield('main')
</div>
<!-- Main layout -->
{{--@include('sweet::alert')--}}


<script type="text/javascript" src="{{asset('js/mdbootstrap/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/mdbootstrap/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/mdbootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/mdbootstrap/js/mdb.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/profile-main.js')}}"></script>

<!-- Initializations -->
<script>
    function themeHandler() {
        if (document.getElementById("flexRadioDefault1").checked == true){
            document.getElementById("profile_css_link").setAttribute('href', '{{asset('css/light.css')}}');
        }
        if (document.getElementById("flexRadioDefault2").checked == true){
            document.getElementById("profile_css_link").setAttribute('href', '{{asset('css/dark.css')}}');
        }
        if (document.getElementById("flexRadioDefault3").checked == true){
            document.getElementById("profile_css_link").setAttribute('href', '{{asset('css/black.css')}}');
        }
    }
</script>
<!-- Charts -->
@yield('scripts')
@include('sweet::alert')
</body>

</html>
