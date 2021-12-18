<!DOCTYPE html>
<html>
<head>
    <title>Accordion</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('/css/khadamat_shetabdehi.css')}}" />
</head>
<body>
<div class="container">
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
                            <a class="nav-link" href="/value-adding-cycle">رسانه خوارزم</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/acceleration-network">فرآیند مدیریت سرمایه </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/online-acceleration">مدل های سرمایه گذاری</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/shop">درباره ما</a>
                        </li>
                        <li class="nav-item">
                            <a href="/login" class="btn btn-actions-header">بانک سرمایه گذاران</a>
                            <a href="/register_idea" class="btn btn-actions-header">وبلاگ </a>
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
    <ul class="timeline">
        <li>
            <div class="timeline-badge primary"><a><i class="glyphicon glyphicon-record" rel="tooltip" title="11 hours ago via Twitter" id=""></i></a></div>
            <div class="timeline-panel mt-5">
                <div class="timeline-heading">
                    <img class="img-responsive" src="logo2.png" width="20%"/>

                </div>
                <div class="timeline-body">
                    <p>خدمت 1</p>

                </div>

                <div class="timeline-footer">
                    <a><i class="glyphicon glyphicon-thumbs-up"></i></a>
                    <a><i class="glyphicon glyphicon-share"></i></a>
                    <a class="pull-right"> شبکه شتابدهی خوارزم</a>
                </div>
            </div>
        </li>

        <li  class="timeline-inverted">
            <div class="timeline-badge primary">
                <a>
                    <img class="img-responsive" src="logo2.png" width="500%"/>
                    <!--<i class="glyphicon glyphicon-record invert" rel="tooltip" title="11 hours ago via Twitter" id=""></i>-->
                </a>
            </div>
            <div class="timeline-panel mt-5">
                <div class="timeline-heading">
                    <img class="img-responsive" src="logo2.png" width="20%" />

                </div>
                <div class="timeline-body">
                    <p>خدمت 2</p>

                </div>

                <div class="timeline-footer">
                    <a><i class="glyphicon glyphicon-thumbs-up"></i></a>
                    <a><i class="glyphicon glyphicon-share"></i></a>
                    <a class="pull-right">شبکه شتابدهی خوارزم</a>
                </div>
            </div>
        </li>
        <li>
            <div class="timeline-badge primary"><a><i class="glyphicon glyphicon-record" rel="tooltip" title="11 hours ago via Twitter" id=""></i></a></div>
            <div class="timeline-panel mt-5">
                <div class="timeline-heading">
                    <img class="img-responsive" src="logo2.png" width="20%"/>

                </div>
                <div class="timeline-body">
                    <p>خدمت 1</p>

                </div>

                <div class="timeline-footer">
                    <a><i class="glyphicon glyphicon-thumbs-up"></i></a>
                    <a><i class="glyphicon glyphicon-share"></i></a>
                    <a class="pull-right"> شبکه شتابدهی خوارزم</a>
                </div>
            </div>
        </li>

        <li  class="timeline-inverted">
            <div class="timeline-badge primary"><a><i class="glyphicon glyphicon-record invert" rel="tooltip" title="11 hours ago via Twitter" id=""></i></a></div>
            <div class="timeline-panel mt-5">
                <div class="timeline-heading">
                    <img class="img-responsive" src="logo2.png" width="20%" />

                </div>
                <div class="timeline-body">
                    <p>خدمت 2</p>

                </div>

                <div class="timeline-footer">
                    <a><i class="glyphicon glyphicon-thumbs-up"></i></a>
                    <a><i class="glyphicon glyphicon-share"></i></a>
                    <a class="pull-right">شبکه شتابدهی خوارزم</a>
                </div>
            </div>
        </li><li>
            <div class="timeline-badge primary"><a><i class="glyphicon glyphicon-record" rel="tooltip" title="11 hours ago via Twitter" id=""></i></a></div>
            <div class="timeline-panel mt-5">
                <div class="timeline-heading">
                    <img class="img-responsive" src="logo2.png" width="20%"/>

                </div>
                <div class="timeline-body">
                    <p>خدمت 1</p>

                </div>

                <div class="timeline-footer">
                    <a><i class="glyphicon glyphicon-thumbs-up"></i></a>
                    <a><i class="glyphicon glyphicon-share"></i></a>
                    <a class="pull-right"> شبکه شتابدهی خوارزم</a>
                </div>
            </div>
        </li>

        <li  class="timeline-inverted">
            <div class="timeline-badge primary"><a><i class="glyphicon glyphicon-record invert" rel="tooltip" title="11 hours ago via Twitter" id=""></i></a></div>
            <div class="timeline-panel">
                <div class="timeline-heading">
                    <img class="img-responsive" src="logo2.png" width="20%" />

                </div>
                <div class="timeline-body">
                    <p>خدمت 2</p>

                </div>

                <div class="timeline-footer">
                    <a><i class="glyphicon glyphicon-thumbs-up"></i></a>
                    <a><i class="glyphicon glyphicon-share"></i></a>
                    <a class="pull-right">شبکه شتابدهی خوارزم</a>
                </div>
            </div>
        </li><li>
            <div class="timeline-badge primary"><a><i class="glyphicon glyphicon-record" rel="tooltip" title="11 hours ago via Twitter" id=""></i></a></div>
            <div class="timeline-panel">
                <div class="timeline-heading">
                    <img class="img-responsive" src="logo2.png" width="20%"/>

                </div>
                <div class="timeline-body">
                    <p>خدمت 1</p>

                </div>

                <div class="timeline-footer">
                    <a><i class="glyphicon glyphicon-thumbs-up"></i></a>
                    <a><i class="glyphicon glyphicon-share"></i></a>
                    <a class="pull-right"> شبکه شتابدهی خوارزم</a>
                </div>
            </div>
        </li>

        <li  class="timeline-inverted">
            <div class="timeline-badge primary"><a><i class="glyphicon glyphicon-record invert" rel="tooltip" title="11 hours ago via Twitter" id=""></i></a></div>
            <div class="timeline-panel">
                <div class="timeline-heading">
                    <img class="img-responsive" src="logo2.png" width="20%" />

                </div>
                <div class="timeline-body">
                    <p>خدمت 2</p>

                </div>

                <div class="timeline-footer">
                    <a><i class="glyphicon glyphicon-thumbs-up"></i></a>
                    <a><i class="glyphicon glyphicon-share"></i></a>
                    <a class="pull-right">شبکه شتابدهی خوارزم</a>
                </div>
            </div>
        </li>

        <li class="clearfix" style="float: none;"></li>
    </ul>
</div>
<script>
    $(document).ready(function(){
        var my_posts = $("[rel=tooltip]");

        var size = $(window).width();
        for(i=0;i<my_posts.length;i++){
            the_post = $(my_posts[i]);

            if(the_post.hasClass('invert') && size >=767 ){
                the_post.tooltip({ placement: 'left'});
                the_post.css("cursor","pointer");
            }else{
                the_post.tooltip({ placement: 'rigth'});
                the_post.css("cursor","pointer");
            }
        }
    });
</script>
</body>
</html>
