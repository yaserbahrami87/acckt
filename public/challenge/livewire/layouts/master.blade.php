<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    {!! SEOMeta::generate() !!}

    <meta charset="utf-8">
    <!-- CSS only -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
	<meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Font Awesome -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <livewire:styles />
    <script src="https://kit.fontawesome.com/6831b81fdf.js" crossorigin="anonymous"></script>
    <link href="{{asset('js/mdbootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('js/mdbootstrap/css/mdb.min.css')}}" rel="stylesheet">

    <script src="https://kit.fontawesome.com/6831b81fdf.js" crossorigin="anonymous"></script>
    @stack('styles')


</head>
<body class="homepage-v2" style="background-color: #f5f5f5 !important;">

    <header>
        <div class="bg-dark intro-section fixed-top" style="max-height: 6rem; min-width: 100%;">
            <img src="{{asset('/images/blockchain02.gif')}}" alt="">
        </div>
        <livewire:layouts.header/>
    </header>
        <main>
            <livewire:layouts.carousel/>
            <div class="col-11 mx-auto mt-5">
                {{$slot}}

            </div>
        </main>
    <livewire:layouts.footer/>

@stack('scripts')
@livewireScripts
<script src="{{ asset('/js/app.js') }}" ></script>
    <script type="text/javascript" src="{{asset('js/mdbootstrap/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/mdbootstrap/js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/mdbootstrap/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/mdbootstrap/js/mdb.min.js')}}"></script>
    <script src="{{asset('js/sweetalert2/dist/sweetalert2.all.min.js')}}"></script>

    @if(session()->has('like_success'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-start',
                showConfirmButton: false,
                timer: 4000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'success',
                html: '<p style="text-align: right">با تشکر،نظر شما با موفقیت ثبت شد</p>',
            })
        </script>

    @endif

    @if(session()->has('like_error'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-start',
                showConfirmButton: false,
                timer: 4000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'error',
                html: '<p style="text-align: right"> با عرض پوزش مشکلی در پردازش رخ داده لطفا دوباره برسی نمایید </p>',

            })
        </script>
    @endif

    @if(session()->has('like_repeat'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-start',
                showConfirmButton: false,
                timer: 4000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'warning',
                html: '<p style="text-align: right"> کاربر گرامی نظر شما قبلا ثبت شده </p>',
            })
        </script>
    @endif

    @if(session()->has('like_authenticate'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-start',
                showConfirmButton: false,
                timer: 4000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'info',
                html: '<p style="text-align: right"> ثبت نظر برای کاربران عضو امکانپذیر میباشد </p>',
            })
        </script>
    @endif

</body>
