<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!--------------BOOTSTRAP ----------------->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!--------------JS RASANE ----------------->
    <!--<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script> -->

    <!--------------JS GLOBAL MANAGEMENT ----------------->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="{{asset('/sarmayeh/js/hover-animation/js/index.js')}}"></script>
    <!--------------JS MODELS ----------------->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>

    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no, shrink-to-fit=no">
    <link href="{{asset('/sarmayeh/css/style.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('/acckt/css/home.css')}}">

    <link rel="stylesheet" href="https://use.typekit.net/jpv1bvw.css">
    <link rel="stylesheet" type="text/css" href=" {{asset('/sarmayeh/css/base1.css')}} " />
    <script>document.documentElement.className="js";var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("Please view this demo in a modern browser that supports CSS Variables.");</script>


    <!--------------JS MODEL ----------------->

    <!--------------JS locomotive-scroll ----------------->

    <title>صاحبان سرمایه خوارزم</title>
</head>
<body>
<main>
    <header class="my-header ">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <button class="navbar-toggler row" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarResponsive">
                    <ul class="navbar-nav ml-auto" style="margin: 0 auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">صفحه اصلی</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/value-adding-cycle">رسانه</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/acceleration-network">فرآیند مدیریت سرمایه و تجربیات جهانی</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/online-acceleration">مدل های سرمایه گذاری</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/shop">درباره ما</a>
                        </li>
                        <li class="nav-item">
                            @if(Auth::check())
                                <a href="/panel" class="btn btn-actions-header">پروفایل</a>
                            @else
                                <a href="/login" class="btn btn-actions-header">ورود</a>
                                <a href="/register_idea" class="btn btn-actions-header">ثبت ایده</a>
                            @endif
                        </li>
                    </ul>
                </div>
                <a class="navbar-brand" href="/">
                    <img src="{{('/acckt/img/logo.png')}}" height="36">
                </a>
            </div>
        </nav>
    </header>
    <!------------------------------------------------------------- AVAL ----------------->
    <section data-role="section" id="section-section1">
        <div class="container-fluid p-0" >
            <div class="row page-1">
                <div class="col-12 p-0 mid-text" >
                    <div class="position-absolute text-center text-1 col-12 ">
                        <div class="text-hover ">
                            <a href="#section-section2" class="menu-1"><p>رسانه خوارزم</p></a>
                        </div>
                        <div class="text-hover ">
                            <div class="text-border mb-3"></div>
                            <a href="#section-section3" class="menu-1"><p>فرآیند مدیریت سرمایه و تجربیات جهانی</p></a>
                            <div class="text-border mb-3"></div>
                        </div>

                        <div class="text-hover ">
                            <a href="#section-section6" class="menu-1"><p>همکاری با خوارزم</p></a>
                        </div>
                    </div>
                    <video autoplay muted loop class="full position-reletive">
                        <source src="{{asset('/sarmayeh/videos/borj.mp4')}}" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </section>

    <!------------------------------------------------------------- RASANE ----------------->
<!--<section data-role="section" id="section-section2">
            <div class="container-fluid p-0 section-rasane" >
                <div class="row videos">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 p-0 " >
                        <video autoplay muted loop>
                            <source src="{{asset('/sarmayeh/videos/moshen.mp4')}}" type="video/mp4">
                        </video>
                        <div class=" w-100 position-absolute" id="moshen"></div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 p-0" >
                        <video autoplay muted loop >
                            <source src="{{asset('/sarmayeh/videos/acckt-video.mp4')}}" type="video/mp4">
                        </video>
                        <div class=" w-100 position-absolute"  id="cover-ide"></div>
                    </div>
                </div>
                <div class="row videos">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 p-0">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-4 p-0" >
                                <img id="bottom-rasane" src="{{asset('/sarmayeh/images/Asset 1.png')}}"/>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-8 p-0">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-8 col-12 p-0 text-center position-relative">
                                        <div class="box">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6 col-12 p-0">
                                        <div id="image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 p-0">
                        <video autoplay muted loop >
                            <source src="{{asset('/sarmayeh/videos/mark.mp4')}}" type="video/mp4">
                        </video>
                        <div class=" w-100 position-absolute" id="cover-aparat"></div>
                    </div>
                </div>
            </div>
        </section>-->
    <section data-role="section" id="section2">
        <div class="container-fluid p-0" >
            <div class="row videos">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 p-0" >
                    <video autoplay muted loop>
                        <source src="{{asset('/sarmayeh/videos/moshen.mp4')}}" type="video/mp4">
                    </video>
                    <div class="position-absolute" id="moshen"></div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-8 p-0" >
                    <video autoplay muted loop>
                        <source  src="{{asset('/sarmayeh/videos/acckt-video.mp4')}}" type="video/mp4">
                    </video>
                    <div class="position-absolute" id="cover-ide"></div>
                </div>
                <div class="col-4 p-0 text-center">
                    <div class="box-risponsive">
                    </div>
                </div>
            </div>
            <div class="row videos">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 p-0">
                    <div class="row ">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-4 col-6 p-0" >
                            <img id="bottom-rasane" src="{{asset('/sarmayeh/images/Asset 1.png')}}"/>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-8 col-6 p-0">
                            <div class="row ">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 p-0 text-center">
                                    <div class="box-what">
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6 col-0 p-0">
                                    <div id="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 p-0">
                    <video autoplay muted loop>
                        <source src="{{asset('/sarmayeh/videos/استیو جابز.mp4')}}" type="video/mp4">
                    </video>
                    <div class="position-absolute" id="cover-aparat"></div>
                </div>
            </div>
        </div>
    </section>

    <!------------------------------------------------------------- GLOBAL MANAGEMENT ----------------->
    <section data-role="section" id="section-section3" >
        <div class="container-fluid p-0 global">
            <div class="row">
                <div class="col-12 block-wrap " id="block-wrap">
                    <video autoplay muted loop id="video">
                        <source src="{{asset('/sarmayeh/videos/bbbb.mp4')}}" type="video/mp4">
                    </video>

                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <img  class="block" src="acckt/img/sarmaye-font/TT.png">
                    <img  class="block" src="acckt/img/sarmaye-font/e.png">
                    <img  class="block"src="acckt/img/sarmaye-font/r.png">
                    <img  class="block"src="acckt/img/sarmaye-font/e.png">
                    <img  class="block"src="acckt/img/sarmaye-font/d.png">
                    <img  class="block"src="acckt/img/sarmaye-font/m.png">
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <img class="block" src="acckt/img/sarmaye-font/HH.png">
                    <img  class="block"src="acckt/img/sarmaye-font/e.png">
                    <img  class="block" src="acckt/img/sarmaye-font/a.png">
                    <img  class="block" src="acckt/img/sarmaye-font/m.png">
                    <img  class="block" src="acckt/img/sarmaye-font/r.png">
                    <img  class="block" src="acckt/img/sarmaye-font/s.png">
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <img class="block" src="acckt/img/sarmaye-font/TT.png">
                    <img class="block" src="acckt/img/sarmaye-font/a.png">
                    <img class="block" src="acckt/img/sarmaye-font/e.png">
                    <img class="block" src="acckt/img/sarmaye-font/b.png">
                    <img class="block" src="acckt/img/sarmaye-font/r.png">
                    <img class="block" src="acckt/img/sarmaye-font/J.png">
                    <img class="block" src="acckt/img/sarmaye-font/t.png">
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <img class="block" src="acckt/img/sarmaye-font/EE.png">
                    <img class="block" src="acckt/img/sarmaye-font/n.png">
                    <img class="block" src="acckt/img/sarmaye-font/a.png">
                    <img class="block" src="acckt/img/sarmaye-font/h.png">
                    <img class="block" src="acckt/img/sarmaye-font/J.png">
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>         <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>

                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>

                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>

                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                    <div class="block"></div>
                </div>
            </div>
        </div>
    </section>
    <!------------------------------------------------------------- MODELS ----------------->
    <section data-role="section" id="section-section4 ">
        <div class="main ">
            <div class="container ">
                <div class="row ">
                    <div class="col-12 ">
                        <div id="back-home1">
                        </div>
                        <div id="scene" class="scene text-center ">
                            <div id="launch" class=" parallax-obj" data-depth="0.1" data-top="-112" data-left="-108" >
                            </div>
                            <span id="span" class="parallax-obj"  data-depth="0.1" data-top="10" data-left="-800">مدل های سرمایه گذاری</span>
                            <div id="find" class="parallax-obj" data-depth="0.2" data-top="-203" data-left="-407"></div>
                            <div id="known" class="parallax-obj" data-depth="0.2" data-top="193" data-left="-136">
                            </div>
                            <h3 id="risk" class="parallax-obj"  data-depth="0.3" data-top="40" data-left="-382">سرمایه گذاری خطر پذیر</h3>
                            <div id="lines" class="parallax-obj" data-depth="0.3" data-top="0" data-left="-282" style="display: block; margin-left: 25%;"></div>
                            <div id="stockholm" class="parallax-obj" data-depth="0.3" data-top="40" data-left="-382" ></div>
                            <h3 id="risk2" class="parallax-obj"  data-depth="0.3" data-top="40" data-left="-382">سرمایه گذاری جسورانه</h3>
                            <div id="stroke" class="parallax-obj" data-depth="0.4" data-top="-1009" data-left="-1009" ></div>
                            <div id="stroke1" class="parallax-obj" data-depth="0.9" data-top="-1071" data-left="-1700"></div>
                            <div id="stroke2" class="parallax-obj" data-depth="0.6" data-top="-1048" data-left="-1409"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!------------------------------------------------------------- ABOUT US ----------------->
    <section data-role="section" id="section-section6" class="h-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-0 text-center">
                    <div id="client-grid" class="position-absolute"></div>
                    <div id="logo-about" class="position-absolute mt-5"></div>
                    <div id="grid" class="position-absolute"></div>
                    <!--<a referrerpolicy="origin" target="_blank" href="https://trustseal.enamad.ir/?id=202462&amp;Code=OnP9iP7WhdPHvSabe0Km"><img referrerpolicy="origin" src="https://Trustseal.eNamad.ir/logo.aspx?id=202462&amp;Code=OnP9iP7WhdPHvSabe0Km" alt="" style="cursor:pointer" id="OnP9iP7WhdPHvSabe0Km"></a>      -->
                    <video autoplay muted loop>
                        <source src="{{asset('/acckt/video/about-us.mp4')}}" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </section>

    <!------------------------------------------------------------- FOOTER ----------------->
    <footer data-role="footer" id="footer">
    </footer>
</main>
<!--------------SCRIPT locomotive-scroll-master ------------------->
<script type="text/javascript" src="{{asset('/sarmayeh/jquery-1.10.2.js')}}"></script>
<script type="text/javascript" src="{{asset('/sarmayeh/jquery.touchSwipe.js')}}"></script>
<script type="text/javascript" src="{{asset('/sarmayeh/jquery.horizonScroll.js')}}"></script>

<!--------------SCRIPT MODEL ------------------->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.0/gsap.min.js"></script>
<script href="{{asset('/sarmayeh/js/hover-animation/js/script.js')}}"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<script>
try {
  fetch(new Request("https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", { method: 'HEAD', mode: 'no-cors' })).then(function(response) {
    return true;
  }).catch(function(e) {
    var carbonScript = document.createElement("script");
    carbonScript.src = "//cdn.carbonads.com/carbon.js?serve=CK7DKKQU&placement=wwwjqueryscriptnet";
    carbonScript.id = "_carbonads_js";
    document.getElementById("carbon-block").appendChild(carbonScript);
  });
} catch (error) {
  console.log(error);
}
</script>-->
<!--------------SCRIPT SCROLL ----------------->
<script>
    /*function clickHover () {
        document.getElementById('block-wrap').style.opacity="0";
        document.getElementById('block-wrap').style.transition="2s";

    }*/
</script>
<script>
    /* function clickBlock () {
       document.getElementByClass('block').style.background="#0000";
     }*/
</script>
<!--------------SCRIPT SCROLL ----------------->
<script type="text/javascript">
    var scene = document.getElementById('scene');
    var parallax = new Parallax(scene);
</script>
<script >
    $(function () {
        $.attractHover(
            {
                proximity: 800,
                magnetism:100 });
    });
</script>
<!--------------SCRIPT SCROLL ----------------->
<script type="text/javascript">
    // By default, swipe is enabled.
    $('section').horizon();

    // If you do not want to include another plugin, TouchSwipe, you can set it to false in the default options by passing in the option as false.
    //$('section').horizon({swipe: false});

    $(document).on('click', '.go-to-2', function () {
        $(document).horizon('scrollTo', 'section-section2');
    });
</script>
<!--------------SCRIPT BLOCK ----------------->

</body>
</html>
