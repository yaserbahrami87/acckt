<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no, shrink-to-fit=no">

    <link rel="shortcut icon" href="{{asset('/acckt/img/favicon.ico')}}" type="" sizes="" color="">
    <link rel="icon" href="{{asset('/acckt/img/favicon-16x16.png')}}" type="image/png" sizes="16x16" color="">
    <link rel="icon" href="{{asset('/acckt/img/favicon-32x32.png')}}" type="image/png" sizes="32x32" color="">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lalezar">
    <link rel="stylesheet" href="{{asset('/acckt/css/bootstrap.min.css')}}">
    <!------------------------------ Add the slick-theme.css if you want default styling ------------------------>
    <link rel="stylesheet" type="text/css" href="{{asset('/acckt/css/slick.css')}}"/>
    <!------------------------------ Add the slick-theme.css if you want default styling ------------------------>
    <link rel="stylesheet" type="text/css" href="{{asset('/acckt/css/slick-theme.css')}}"/>
    <link rel="stylesheet" href="{{asset('/acckt/css/home.css')}}">
    <link href="{{asset('/acckt/css/idea_style.css')}}" rel="stylesheet" type="text/css">

</head>
<body>
<!----------------------------------START ANIMATION ------------------->
<div class="se-pre-con"></div>
<div class="top-curtain">
    <div class="bottom-stripe"></div>
</div>
<div class="bottom-curtain">
    <div class="top-stripe"></div>
</div>
<!-------------------------------- START Navigation ----------------->
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
                        <a class="nav-link" href="/value-adding-cycle">چرخه تولید ارزش</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/acceleration-network">خدمات شتابدهی</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/online-acceleration">شتابدهی آنلاین</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/shop">فروشگاه ایده</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/blog">وبلاگ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">تماس با ما</a>
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
                <img src="{{('/acckt/img/logo.png')}}" height="40">
            </a>
        </div>
    </nav>
</header>
<!------------------------------START SECTION PAGE1 ---------------->
<main>
    <section data-role="section" id="section-section1">
        <video autoplay loop muted class="fullscreen">
            <!--            <source src="videos/default.webm" type="video/webm">-->
            <source src="{{asset('/acckt/video/default.mp4')}}" type="video/mp4">
            مرورگر شما از نمایش ویدئو پشتیبانی نمی کند
        </video>
        <div class="home-text centered-title col-12 text-center">
            <h1>
                شتابدهنده اندیشه خوارزم
            </h1>
            <br/>
            <p class="scroll-down"><a href="#section-section2" id="show-next-section" class="animate">More</a></p>
        </div>
    </section>
    <!------------------------------START SECTION PAGE2 ---------------->
    <section class="panel panel1 mt-5 section-item-recpancive" data-section-name="one" data-role="section" id="section-section2">
        <div class="container" style="height: 100vh">
            <div class="section2-item">
                <div class="row slick-slide">
                    <div class=" text-center mt-5 ">
                        <h2>ویدئو های شبکه شتابدهی خوارزم </h2>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-8 col-12 mt-2 rasaneh float-left">
                        <div class="video_container">
                            <div class="video-tv">
                                <img src="{{asset('/acckt/img/tv.png')}}" id="laptop" class="img-fluid position-absolute">
                                <video autoplay loop muted playsinline class="video-list-item1" width="100%">
                                <!--<source src="{{asset('/acckt/video/moshen.webm')}}" type='video/webm; codecs="vp8, vorbis"'> -->
                                    <source src="{{asset('/acckt/video/moshen.mp4')}}" type="video/mp4">
                                    مرورگر شما از نمایش ویدئو پشتیبانی نمی کند
                                </video>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-sx-6 video-list mt-5 text-center d-xl-none">
                        <div class="row videos text-center">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-6 text-center float-left mb-2 p-1">
                                <video autoplay loop muted playsinline width="100%">
                                    <source src="{{asset('/sarmayeh/videos/استیو جابز.mp4')}}" type="video/mp4">
                                    مرورگر شما از نمایش ویدئو پشتیبانی نمی کند
                                </video>
                                <img id="stive" src="{{asset('/sarmayeh/images/cover-aparat-stive-jobz.jpg')}}" class=" position-absolute" alt="">
                                <p class="mr-2"> وتوضیحات ویدئوی شماره 1</p>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-6 text-center float-left mb-2 p-1">
                                <video autoplay loop muted playsinline width="100%">
                                    <source src="{{asset('/sarmayeh/videos/acckt-video.mp4')}}" type="video/mp4">
                                    مرورگر شما از نمایش ویدئو پشتیبانی نمی کند
                                </video>
                                <img id="stive2" src="{{asset('/acckt/img/cover1.jpg')}}" class=" position-absolute " alt="">
                                <p class="mr-2 mt-2"> وتوضیحات ویدئوی شماره 1</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!------------------------------START SECTION PAGE3 ---------------->
    <section class="panel panel1 mt-5 " data-section-name="second">
        <div class="container" style="height: 100vh">
            <div class="section2-item">
                <div class="row slick-slide">
                    <div class= "col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 my-video">
                        <video autoplay loop muted playsinline>
                            <source src="{{asset('/acckt/video/section2-1.webm')}}" type='video/webm; codecs="vp8, vorbis"'>
                            <source src="{{asset('/acckt/video/section2-1.mp4')}}" type="video/mp4">
                            مرورگر شما از نمایش ویدئو پشتیبانی نمی کند
                        </video>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 my-video-content text-justify">
                        <div>
                            <h3>فرآیند جذب و شناسایی</h3>
                            <div class="section2-content">
                                <p>
                                    با ثبت نام در سایت و تکمیل فرم اطلاعات فردی، دوره های آموزشی فشرده همراه با مشاوره رایگان به صورت آنلاین برای صاحب ایده فراهم می شود، برگزاری آزمون رایگان استعدادیابی شغلی و مهارتی، ثبت ایده به همراه ارائه گواهی معتبر، و همچنین ارائه کارنامه تحلیلی برای صاحبان ایده تدارک دیده شده است.

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" row slick-slide">
                    <div class=" col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 my-video">
                        <video autoplay loop muted>
                            <source src="{{asset('/acckt/video/section2-2.webm')}}" type='video/webm; codecs="vp8, vorbis"'>
                            <source src="{{asset('/acckt/video/section2-2.mp4')}}" type="video/mp4">
                            مرورگر شما از نمایش ویدئو پشتیبانی نمی کند
                        </video>
                    </div>
                    <div class=" col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 my-video-content text-justify">
                        <h3>فرآیند انتخاب</h3>
                        <div class="section2-content">
                            <p>
                                متقاضیاني كه موفق به كسب امتیازات لازم و كارنامه تحلیلي نهايي دوره جذب و شناسایی شده اند، به مصاحبه حضوری/آنلاین دعوت مي شوند. فرايند انتخاب مبتني بر كسب امتیازات حداقلي از تعیین سطح نوآوری و ايده پردازی و میزان تطابق با حوزه تخصصي فعالیت شتابدهنده و همچنین میزان تطابق نیمرخ شغلي و مهارتي فرد با ايده مطرح شده  می باشد.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row slick-slide">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 my-video">
                        <video autoplay loop muted>
                            <source src="{{asset('/acckt/video/section2-3.webm')}}" type="video/webm">
                            <source src="{{asset('/acckt/video/section2-3.mp4')}}" type="video/mp4">
                            مرورگر شما از نمایش ویدئو پشتیبانی نمی کند
                        </video>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 my-video-content text-justify">
                        <h3>دوره ی پیش شتابدهی</h3>
                        <div class="section2-content">
                            <p>
                                در این مرحله مسئول تیم جزئیات ایده را ثبت می کند. ایده در مقایسه با ایده های موجود در پایگاه داده ی شتابدهنده در سه سطح ایده ی برتر، ایده ی قابل ارتقا و ایده ی مکمل طبقه بندی می شود. دوره های آموزش عمومی متناسب با سطح ایده و توانمنندی های تیم فراهم می شود. بعد از گذراندن دوره ها بسته های تسهیلاتی در اختیار تیم صاحب ایده قرار می گیرد.
                            </p>
                        </div>
                    </div>
                </div>
                <div class=" row slick-slide">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 my-video">
                        <video autoplay loop muted>
                            <source src="{{asset('/acckt/video/section2-4.webm')}}" type="video/webm">
                            <source src="{{asset('/acckt/video/section2-4.mp4')}}" type="video/mp4">
                            مرورگر شما از نمایش ویدئو پشتیبانی نمی کند
                        </video>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 my-video-content text-justify">
                        <h3>دوره ی شتابدهی</h3>
                        <div class="section2-content">
                            <p>
                                در این مرحله با تمرکز بر تولید محصول و ارائه به بارازار هدف در زمان 4 الی 6 ماه آموزش های تخصصی و خدمات ویژه از جمله کمک های مالی و حمایت های معنوی برای شرکت نوپا در نظر گرفته می شود. برگزاری دوره های مشترک با صنایع مربوطه و تلاش برای یافتن سرمایه گذاران مرتبط از دیگر برنامه های شتابدهنده در این مرحله است.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row slick-slide">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 my-video">
                        <video autoplay loop muted>
                            <source src="{{asset('/acckt/video/section2-5.webm')}}" type="video/webm">
                            <source src="{{asset('/acckt/video/section2-4.mp4')}}" type="video/mp4">
                            مرورگر شما از نمایش ویدئو پشتیبانی نمی کند
                        </video>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 my-video-content text-justify">
                        <h3>دوره ی پسا شتابدهی</h3>
                        <div class="section2-content">
                            <p>
                                در این مرحله با حمایت نامحسوس و با کمترین مداخله در امور شرکت های  نوپا سعی می شود تا روند رو به رشد و پایداری برای شرکت های نوپا و ارائه محصولات آنها توسط شتابدهنده فراهم آید. سعي میکنیم تا با استفاده از شبکه های فعال خود در بازار، شركت های مذكور را هدايت و حمايت کنیم. در اين دوره برنامه های درآمدزايي شتابدهنده مي تواند شامل فروش محصولات شركت های نوپا به صورت واسطه ای و يا خريد خدمات از اين شركت ها باشد.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!------------------------------START SECTION PAGE4 ---------------->
    <section class="panel mt-5" data-section-name="third" data-role="section" id="section-section4">
        <div class="section4">
            <div class="marquee mt-4 mx-auto">خدمات شتابدهی
                <svg class="bullet" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 10C7.76138 10 10 7.76142 10 5C10 2.23858 7.76138 1.95706e-07 5 4.37114e-07L5 10Z"
                          fill="white"/>
                    <circle cx="5" cy="5" r="4.725" transform="rotate(180 5 5)" stroke="white" stroke-width="0.55"/>
                </svg>
                <span class="text-stroked">خدمات شتابدهی</span>
            </div>
            <div class="section3-text">
                <p>
                    بدون تردید آنچه می‌تواند برای شکل‌گیری، شکوفایی و بلوغ کسب و کار شما مفید باشد خدمات و راهکارهایی
                    است که ما در اختیار شما قرار می‌دهیم. برای این منظور در دو بخش در کنار شما خواهیم بود.
                </p>
            </div>
            <div id="section3-slide">
                <div class="section3-slider">
                    <div>
                        <img src="{{asset('/acckt/img/01-600x400.jpg')}}" class="item-image" alt=" ">
                        <span>فضای کار اشتراکی</span>
                    </div>
                    <div>
                        <img src="{{asset('/acckt/img/02-600x400.jpg')}}" class="item-image" alt=" ">
                        <span>مشاوره فنی و مالی</span>
                    </div>
                    <div>
                        <img src="{{asset('/acckt/img/03-600x400.jpg')}}" class="item-image" alt=" ">
                        <span>منتورینگ و کوچینگ</span>
                    </div>
                    <div>
                        <img src="{{asset('/acckt/img/04-600x400.jpg')}}" class="item-image" alt=" ">
                        <span>امکانات سخت افزاری و نرم افزاری</span>
                    </div>
                    <div>
                        <img src="{{asset('/acckt/img/05-600x400.jpg')}}" class="item-image" alt=" ">
                        <span>تشریح بازار مرتبط</span>
                    </div>
                    <div>
                        <img src="{{asset('/acckt/img/06-600x400.jpg')}}" class="item-image" alt=" ">
                        <span>خرید سهام</span>
                    </div>
                    <div>
                        <img src="{{asset('/acckt/img/07-600x400.jpg')}}" class="item-image" alt=" ">
                        <span>وام قرض الحسنه</span>
                    </div>
                    <div>
                        <img src="{{asset('/acckt/img/08-600x400.jpg')}}" class="item-image" alt=" ">
                        <span>بسته های تشویقی</span>
                    </div>
                </div>
                <div class="section3-slider-responsive">
                    <div>
                        <img src="{{asset('/acckt/img/01-600x400.jpg')}}" class="item-image" alt=" ">
                        <span>فضای کار اشتراکی</span>
                    </div>
                    <div>
                        <img src="{{asset('/acckt/img/02-600x400.jpg')}}" class="item-image" alt=" ">
                        <span>مشاوره فنی و مالی</span>
                    </div>
                    <div>
                        <img src="{{asset('/acckt/img/03-600x400.jpg')}}" class="item-image" alt=" ">
                        <span>منتورینگ و کوچینگ</span>
                    </div>
                    <div>
                        <img src="{{asset('/acckt/img/04-600x400.jpg')}}" class="item-image" alt=" ">
                        <span>امکانات سخت افزاری و نرم افزاری</span>
                    </div>
                    <div>
                        <img src="{{asset('/acckt/img/05-600x400.jpg')}}" class="item-image" alt=" ">
                        <span>تشریح بازار مرتبط</span>
                    </div>
                    <div>
                        <img src="{{asset('/acckt/img/06-600x400.jpg')}}" class="item-image" alt=" ">
                        <span>خرید سهام</span>
                    </div>
                    <div>
                        <img src="{{asset('/acckt/img/07-600x400.jpg')}}" class="item-image" alt=" ">
                        <span>وام قرض الحسنه</span>
                    </div>
                    <div>
                        <img src="{{asset('/acckt/img/08-600x400.jpg')}}" class="item-image" alt=" ">
                        <span>بسته های تشویقی</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!------------------------------START SECTION FOOTER ---------------->
    <section class="panel panel3 mt-5" data-section-name="third" data-role="section">
        <footer class="footer">
            <div class="container-fluid footer-container">
                <div class="row">
                    <div class="col-12" style="padding-left:0;margin-right:45px;min-width: 300px;">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-sx-12">
                                <img src="{{asset('/acckt/img/logo.png')}}" style="height: 30px">
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-sx-12 justify-content-md-center">
                                <div class="row">
                                    <div class="footer-link col-2">
                                        <a href="/value-adding-cycle" class="link--elara">درباره ما </a>
                                    </div>
                                    <div class="footer-link col-2">
                                        <a href="/store">استارتاپ ها</a>
                                    </div>
                                    <div class="footer-link col-2">
                                        <a href="/acceleration-network">منتورها</a>
                                    </div>
                                    <div class="footer-link col-2">
                                        <a href="">شبکه ها</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-sx-12 enamad">
                                <div class="row  text-right">
                                    <div class="col-12">
                                        <img src="{{asset('/acckt/img/logo.aspx.png')}}" class=" p-3 mb-1">
                                        <img src="{{asset('/acckt/img/star1.png')}}" class=" p-3 mb-1" >
                                    </div>
                                </div>
                                <!--<a referrerpolicy="origin" target="_blank" href="https://trustseal.enamad.ir/?id=202462&amp;Code=OnP9iP7WhdPHvSabe0Km"><img referrerpolicy="origin" src="https://Trustseal.eNamad.ir/logo.aspx?id=202462&amp;Code=OnP9iP7WhdPHvSabe0Km" alt="" style="cursor:pointer" id="OnP9iP7WhdPHvSabe0Km"></a>
                                <img id = 'nbqergvjapfurgvjoeukfukz' style = 'cursor:pointer' onclick = 'window.open("https://logo.samandehi.ir/Verify.aspx?id=235386&p=uiwkxlaodshwxlaomcsigvka", "Popup","toolbar=no, scrollbars=no, location=no, statusbar=no, menubar=no, resizable=0, width=450, height=630, top=30")' alt = 'logo-samandehi' src = 'https://logo.samandehi.ir/logo.aspx?id=235386&p=odrfqftiujynqftiaqgwwlbq' /> -->
                                <div class="footer-info">ایمیل: acckt2020.co@gmail.com</div>
                                <div class="footer-info ">آدرس: مشهد، سعدی ۱۴، پلاک ۱۵۳</div>
                                <div class="footer-info">شماره تماس: ۰۹۰۵۳۴۰۲۴۹۳</div>
                                <div class="footer-info">شبکه های اجتماعی</div>
                                <div class="footer-info">
                                    <div class="row text-center">
                                        <img src="{{asset('/acckt/img/social/linkedin.png')}}" class=" p-0">
                                        <img src="{{asset('/acckt/img/social/twitter.png')}}" class=" p-0">
                                        <img src="{{asset('/acckt/img/social/aparat.png')}}" class=" p-0" >
                                        <img src="{{asset('/acckt/img/social/telegram.png')}}" class=" p-0" >
                                        <img src="{{asset('/acckt/img/social/instagram.png')}}" class=" p-0" >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </section>
</main>
<!------------------------------END SECTION FOOTER ---------------->
<div class="loader" style="display: none">
    <img src="{{asset('/acckt/img/logo-acckt.gif')}}" />
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{asset('/acckt/js/popper.min.js')}}"></script>
<script src="{{asset('/acckt/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/acckt/js/jquery-1.10.2.js')}}"></script>
<script type="text/javascript" src="{{asset('/acckt/js/jquery.touchSwipe.js')}}"></script>
<script type="text/javascript" src="{{asset('/acckt/js/jquery.horizonScroll.js')}}"></script>
<script>
    // By default, swipe is enabled.
    $('section').horizon();
    // If you do not want to include another plugin, TouchSwipe, you can set it to false in the default options by passing in the option as false.
    $('section').horizon({swipe: false});
    $(document).on('click', '.go-to-2', function () {
        $(document).horizon('scrollTo', 'section-section2');
    });
</script>


<script type="text/javascript" src="{{asset('/acckt/js/slick.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/acckt/js/jquery.marquee.min.js')}}"></script>
<script>
    function toPersianNumber(input) {

        let output = input.toString()

        output = output.replace(/0/g, '۰')

        output = output.replace(/1/g, '۱')

        output = output.replace(/2/g, '۲')

        output = output.replace(/3/g, '۳')

        output = output.replace(/4/g, '۴')

        output = output.replace(/5/g, '۵')

        output = output.replace(/6/g, '۶')

        output = output.replace(/7/g, '۷')

        output = output.replace(/8/g, '۸')

        output = output.replace(/9/g, '۹')

        return output;
    }


    $(function () {

        $('.loader').hide()

        setTimeout(function () {

            $(".se-pre-con").fadeOut("fast")

        }, 200)


        $('.my-bullet').click(function () {
            $.scrollify.move($(this).data('section'));
            $('.my-bullet').each(function() {
                $(this).removeClass("active-section");
            })
            $(this).addClass("active-section");
        })



        $('#show-next-section').click(function () {

            $.scrollify.move("#2");

        })



        $('.section2-item').slick({

            // initialSlide: 4,

            // rtl: true,

            dots: true,

            autoplay: true,

            arrows: false,

            autoplaySpeed: 10000,

            customPaging: function (slider, i) {

                return '<a>' + toPersianNumber(i + 1) + '</a>';

            },

        });



        $('.section3-slider').slick({

            infinite: true,

            slidesToShow: 3,

            slidesToScroll: 3,

            //dots: true,

            autoplay: true,

            arrows: false,

            autoplaySpeed: 5000,

            customPaging: function (slider, i) {

                return '<a>.</a>';

            },

        })



        $('.section3-slider-responsive').slick({

            // customPaging: function (slider, i) {

            //     return '<a>.</a>';

            // },

            // dots: true,

            arrows: true,

            infinite: true,

            speed: 300,

            slidesToShow: 4,

            slidesToScroll: 4,

            responsive: [

                {

                    breakpoint: 1024,

                    settings: {

                        slidesToShow: 3,

                        slidesToScroll: 3,

                        infinite: true,

                        dots: true

                    }

                },

                {

                    breakpoint: 600,

                    settings: {

                        slidesToShow: 2,

                        slidesToScroll: 2

                    }

                },

                {

                    breakpoint: 480,

                    settings: {

                        slidesToShow: 1,

                        slidesToScroll: 1

                    }

                }

                // You can unslick at a given breakpoint now by adding:

                // settings: "unslick"

                // instead of a settings object

            ]

        })



        $('.marquee').marquee({

            //speed in milliseconds of the marquee

            duration: 10000,

            //gap in pixels between the tickers

            gap: 50,

            //time in milliseconds before the marquee will start animating

            delayBeforeStart: 0,

            //'left' or 'right'

            direction: 'left',

            //true or false - should the marquee be duplicated to show an effect of continues flow

            duplicated: true

        });

    });
</script>

</body>
</html>
