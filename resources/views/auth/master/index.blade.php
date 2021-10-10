@extends('master.index')

@section('headerScript')
    <style>
        main{
            background: #0264d6; /* Old browsers */
            background: -moz-radial-gradient(center, ellipse cover,  #0264d6 1%, #1c2b5a 100%); /* FF3.6+ */
            background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(1%,#0264d6), color-stop(100%,#1c2b5a)); /* Chrome,Safari4+ */
            background: -webkit-radial-gradient(center, ellipse cover,  #0264d6 1%,#1c2b5a 100%); /* Chrome10+,Safari5.1+ */
            background: -o-radial-gradient(center, ellipse cover,  #0264d6 1%,#1c2b5a 100%); /* Opera 12+ */
            background: -ms-radial-gradient(center, ellipse cover,  #0264d6 1%,#1c2b5a 100%); /* IE10+ */
            background: radial-gradient(ellipse at center,  #0264d6 1%,#1c2b5a 100%); /* W3C */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0264d6', endColorstr='#1c2b5a',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
            width:100%;
            min-height: 800px;
        }

        [class*="fontawesome-"]:before {
            font-family: 'FontAwesome', sans-serif;
        }

        /* ---------- GENERAL ---------- */

        * {
            box-sizing: border-box;
            margin:0px auto;

        &:before,
        &:after {
             box-sizing: border-box;
         }

        }

        body {

            color: #606468;
            font: 87.5%/1.5em 'Open Sans', sans-serif;
            margin: 0;
        }

        a {
            color: #eee;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
            color: #000000;
        }

        input {
            border: none;
            font-size: 14px;
            line-height: 1.5em;
            padding: 0;
            -webkit-appearance: none;
        }

        p {
            line-height: 1.5em;
        }

        .clearfix {
            *zoom: 1;

        &:before,
        &:after {
             content: ' ';
             display: table;
         }

        &:after {
             clear: both;
         }

        }

        /* ---------- LOGIN ---------- */

        .container
        {
            padding-top: 200px;
        }

        #login form{
            width: 250px;
        }
        #login, .logo{
            display:inline-block;
            width:40%;
        }
        #login{
            border-left:1px solid #fff;
            padding: 0px 22px;
            width: 59%;
        }
        .logo{
            color:#fff;
            font-size:50px;
            line-height: 125px;
        }

        #login form span.fa {
            background-color: #fff;
            border-radius: 0px 3px 3px 0px;
            color: #000;
            display: block;
            float: right;
            height: 50px;
            font-size:24px;
            line-height: 50px;
            text-align: center;
            width: 50px;
        }

        #login form input {
            height: 50px;
        }
        fieldset{
            padding:0;
            border:0;
            margin: 0;

        }
        #login form input[type="text"], input[type="password"] {
            background-color: #fff;
            border-radius: 3px 0px 0px 3px;
            color: #000;
            padding: 0 16px;
            width: 200px;
        }

        #login form input[type="submit"] {
            border-radius: 3px;
            -moz-border-radius: 3px;
            -webkit-border-radius: 3px;
            background-color: #000000;
            color: #eee;
            font-weight: bold;
            /* margin-bottom: 2em; */
            text-transform: uppercase;
            padding: 5px 10px;
            height: 30px;
        }

        #login form input[type="submit"]:hover {
            background-color: #d44179;
        }

        #login > p {
            text-align: center;
        }

        #login > p span {
            padding-left: 5px;
        }
        .middle {
            display: flex;
            width: 600px;
        }
    </style>
@endsection

@section('content')
    <div class="main">
        <div class="container text-center">
            <div class="row">
                <div class="col-12 col-md-6 col-xl-6 col-lg-6" id="login">
                    @if($errors->any())
                        <div class="col-12">
                            <div class="alert alert-danger" role="alert">
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </div>
                        </div>
                    @endif
                    @yield('forms')
                    <div class="clearfix"></div>

                </div> <!-- end login -->
                <div class="col-12 col-md-6 col-xl-6 col-lg-6 logo pr-5 pt-5">
                    <img src="{{asset('/images/logo.png')}}" class="img-fluid" />

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>

@endsection
