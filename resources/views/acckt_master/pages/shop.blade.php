<html>
<head>
    <meta charset="utf-8">
    <!--------------BOOTSTRAP ----------------->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!--------------JS MODELS ----------------->


    <link rel="stylesheet" href="{{asset('/acckt/css/cardStyle.css')}}">
    <!--------------JS locomotive-scroll ----------------->
    <title>فروشگاه ایده</title>
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
                            <a class="nav-link" href="/value-adding-cycle"> رسانه خوارزم</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/acceleration-network">فرآیند مدیریت سرمایه</a>
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
                            <a href="/login" class="btn btn-actions-header">بانک سرمایه گزاران</a>
                            <a href="/register_idea" class="btn btn-actions-header">وبلاگ</a>
                        </li>
                    </ul>
                </div>
                <a class="navbar-brand" href="/">
                    <img src="{{('/acckt/img/logo.png')}}" height="36">
                </a>
            </div>
        </nav>
    </header>
    <div class="container text-justify ">
        <div class="row">
            @foreach($ideas as $item)
                <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                    <div class="card">
                        <img class="card-img-top" src="{{asset('/images/idea/'.$item->avatar)}}">
                        <div class="card-block">
                            <h4 class="card-title">{{$item->group_name}}</h4>
                            <div class="meta">
                                <a href="#">{{$item->lname}}</a>
                            </div>
                            <div class="card-text">
                                {{$item->description}}
                            </div>
                        </div>
                        <div class="card-footer">
                            <span class="float-right"> (ایده پرداز)مبلغ پیشنهادی سرمایه گذاری</span>
                            <span><i class=""></i>5 فالوور</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</main>
</body>
</html>
