<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>پنل مدیریت شتابدهنده</title>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/6831b81fdf.js" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link href="{{asset('js/mdbootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('js/mdbootstrap/css/mdb.min.css')}}" rel="stylesheet">

    <style>

    </style>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body class="container-fluid col-10">

<!-- Main Navigation -->
<header>
    <livewire:admin.layouts.navigation/>

</header>
<!-- Main Navigation -->
<!-- Main layout -->
<main>
    <div class="row">
        <livewire:admin.layouts.sidebar/>

        <div class="col-lg-10 col-md-12 col-sm-12 " style="margin-top: 5%">
            @yield('adminMain')
        </div>
    </div>
</main>
<!-- Main layout -->
<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="{{asset('js/sweetalert/dist/sweetalert.min.js')}}"></script>

<script type="text/javascript" src="{{asset('js/mdbootstrap/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/mdbootstrap/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/mdbootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/mdbootstrap/js/mdb.min.js')}}"></script>

<!-- Initializations -->
<script src="{{asset('js/admin/index.js')}}"></script>

<script>


</script>
<!-- Charts -->
@stack('scripts')
@include('sweet::alert')
</body>

</html>
