<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!--------------BOOTSTRAP ----------------->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!--------------JS RASANE ----------------->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <!--------------JS GLOBAL MANAGEMENT ----------------->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="{{asset('/sarmayeh/js/hover-animation/js/index.js')}}"></script>
    <!--------------JS MODELS ----------------->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>

    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no, shrink-to-fit=no">
    <link href="{{asset('/sarmayeh/css/style.css')}}" rel="stylesheet" type="text/css">
    <!--------------JS SCROLL ----------------->
    <script type="text/javascript" src="{{asset('/sarmayeh/jquery-1.10.2.js')}}"></script>
    <script type="text/javascript" src="{{asset('/sarmayeh/jquery.touchSwipe.js')}}"></script>
    <script type="text/javascript" src="{{asset('/sarmayeh/jquery.horizonScroll.js')}}"></script>
    <title>صاحبان سرمایه خوارزم</title>
</head>
<body>
<header data-role="header" id="header">
    <nav class="menu text-center">
        <ul>
            <li>
                <a href="#section-section1"><span></span></a>
            </li>
            <li>
                <a href="/login">
                    @if(Auth::check())
                        <a href="/panel">
                            <span>پروفایل</span>
                        </a>
                    @else
                        <a href="/login">
                            <span>ثبت نام/ورود</span>
                        </a>
                    @endif
                </a>
            </li>
            <li>
                <a href="#section-section2"><span>رسانه</span></a>
            </li>
            <li>
                <a href="#section-section3"><span>فرآیند مدیریت سرمایه و تجربیات جهانی</span></a>
            </li>
            <li>
                <a href="#section-section4"><span>مدل های سرمایه گذاری </span></a>
            </li>
            <li>
                <a href="#section-section5"><span>درباره ما</span></a>
            </li>
        </ul>
    </nav>
</header>
<!------------------------------------------------------------- AVAL ----------------->
<section data-role="section" id="section-section1">
</section>

<!------------------------------------------------------------- RASANE ----------------->
<section data-role="section" id="section-section2">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-sx-12 p-0" >
                <video autoplay muted loop class="height">
                    <source src="{{asset('/sarmayeh/videos/moshen.mp4')}}" type="video/mp4">
                </video>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-sx-12 p-0"  id="pol">
                <style>.h_iframe-aparat_embed_frame{position:relative;}.h_iframe-aparat_embed_frame .ratio{display:block;width:100%;height:auto;}.h_iframe-aparat_embed_frame iframe{position:absolute;top:0;left:0;width:100%;height:100%;}</style><div class="h_iframe-aparat_embed_frame"><span style="display: block;padding-top: 57%"></span><iframe src="https://www.aparat.com/video/video/embed/videohash/n7c9e/vt/frame" title="گزارش وبینار دانش آموزی آکادمی تولید ثروت از دانش" allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe></div>
                <!--<video autoplay muted loop  class="height" >
                    <source src="videos/pol.mp4" type="video/mp4">
                </video> -->
            </div>
        </div>
        <div class="row" id="row-2">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-sx-12 p-0">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-sx-12 p-0" >
                        <img src="{{asset('/sarmayeh/images/photo3.jpg')}}"/>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-sx-12 p-0">
                        <div class="row">
                            <div class="col-12 p-0 text-center position-relative">
                                <div class="col-12 p-0">
                                    <div id="image"></div>
                                </div>
                            </div>
                            <div class="w-100 p-5 m-0 text" >
                                <!-- چطوری ایده هامو تبدیل به استارتاپ کنم ؟  -->
                             <div class="w-75 p-5 m-0 text1"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-sx-12 p-0">
                <style>.h_iframe-aparat_embed_frame{position:relative;}.h_iframe-aparat_embed_frame .ratio{display:block;width:100%;height:auto;}.h_iframe-aparat_embed_frame iframe{position:absolute;top:0;left:0;width:100%;height:100%;}</style><div class="h_iframe-aparat_embed_frame"><span style="display: block;padding-top: 57%"></span><iframe src="https://www.aparat.com/video/video/embed/videohash/FSbqr/vt/frame" allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe></div>
                <!--<video autoplay muted loop poster="" class="w-100 position-relative" id="heram">
                    <source src="videos/heram.mp4" type="video/mp4">
                </video> -->
            </div>
        </div>
</section>

<!------------------------------------------------------------- GLOBAL MANAGEMENT ----------------->
<section data-role="section" id="section-section3">
    <div class="container-fluid p-0 global">
        <div class="row">
          <div class="col-12 block-wrap">
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
            <div class="block">C</div>
            <div class="block">a</div>
            <div class="block">p</div>
            <div class="block">i</div>
            <div class="block">t</div>
            <div class="block">a</div>
            <div class="block">l</div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block">M</div>
            <div class="block">a</div>
            <div class="block">n</div>
            <div class="block">a</div>
            <div class="block">g</div>
            <div class="block">e</div>
            <div class="block">m</div>
            <div class="block">e</div>
            <div class="block">n</div>
            <div class="block">t</div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block">G</div>
            <div class="block">l</div>
            <div class="block">o</div>
            <div class="block">b</div>
            <div class="block">a</div>
            <div class="block">l</div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block">E</div>
            <div class="block">x</div>
            <div class="block">p</div>
            <div class="block">e</div>
            <div class="block">r</div>
            <div class="block">i</div>
            <div class="block">e</div>
            <div class="block">n</div>
            <div class="block">c</div>
            <div class="block">e</div>
            <div class="block">s</div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
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
<section data-role="section" id="section-section4">
    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-12 position-absolute">
                    <div id="back-home">
                    </div>
                </div>
            </div>
            <div id="scene" class="scene text-center">
                <div data-depth="0.1" data-top="-112" data-left="-108" class=" attractHover"  id="find"></div>
                <div data-depth="0.4" data-top="-109" data-left="-109" class=" attractHover"  id="stroke"></div>
                <div data-depth="0.6" data-top="-203" data-left="-407" class=" attractHover" id="stroke2"></div>
                <div data-depth="0.9" data-top="-171" data-left="-170" class=" attractHover" id="stroke1"></div>
            </div>
        </div>
    </div>
</section>

<!------------------------------------------------------------- ABOUT US ----------------->
<section data-role="section" id="section-section6">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 p-0 ">
                <div id="client-grid" class="position-absolute"></div>
                <div id="logo-about"></div>
                <div id="grid" class="position-absolute"></div>
                <a referrerpolicy="origin" target="_blank" href="https://trustseal.enamad.ir/?id=202462&amp;Code=OnP9iP7WhdPHvSabe0Km"><img referrerpolicy="origin" src="https://Trustseal.eNamad.ir/logo.aspx?id=202462&amp;Code=OnP9iP7WhdPHvSabe0Km" alt="" style="cursor:pointer" id="OnP9iP7WhdPHvSabe0Km"></a>                <video autoplay muted loop>
                    <source src="{{asset('/acckt/video/about-us.mp4')}}" type="video/mp4">
                </video>
            </div>
        </div>
    </div>
</section>

<!------------------------------------------------------------- FOOTER ----------------->
<footer data-role="footer" id="footer">
    <nav class="menu text-center">
        <ul>
            <li>
                <a href="#section-section1"><span></span></a>
            </li>
            <li>
                <a href="#section-section2"><span>رسانه</span></a>
            </li>
            <li>
                <a href="#section-section3"><span>فرآیند مدیریت سرمایه و تجربیات جهانی</span></a>
            </li>
            <li>
                <a href="#section-section4"><span>مدل های سرمایه گذاری </span></a>
            </li>
            <li>
                <a href="#section-section5"><span>درباره ما</span></a>
            </li>
        </ul>
    </nav>
</footer>

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
              magnetism: 10 });
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

</body>
</html>
