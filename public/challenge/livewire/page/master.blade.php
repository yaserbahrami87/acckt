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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="{{ asset('css/master-page.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <style>
        @media (max-width: 1024px) {
            main {
                height: 70vh;
                margin-top: 18vh;
                margin-bottom: 5vh;
            }
        }

        @media (max-width: 800px) {
            main {
                height: 60vh;
                margin-top: 20vh;
                margin-bottom: 15vh;
            }
        }

        @media (max-width: 600px) {
            main {
                height: 40vh;
                margin-top: 27.5vh;
                margin-bottom: 27.5vh;
            }
        }

        @media (max-height: 400px) {
            main {
                height: 90vh;
                margin-top: 2vh;
                margin-bottom: 2vh;
            }
        }
		.modal {
            position: fixed;
            left: 0;
            top: 0;
			display: flex;
		    justify-content: center;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            opacity: 1;
            visibility: visible;
            transform: scale(1.1);
            transition: visibility 0s linear 0.25s, opacity 0.25s 0s, transform 0.25s;
        }
 		.modal-content {
            direction: rtl;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 1rem 1.5rem;
            width: 30vw;
            border-radius: 0.5rem;
        }
        .close-button {
            position: absolute;
            margin-top: 1vh;
            margin-right: 1vh;
            width: 2rem;
            line-height: 2rem;
            text-align: center;
            cursor: pointer;
            border-radius: 0.25rem;
            background-color: lightgray;
        }
        .close-button:hover {
            background-color: darkgray;
        }
        .close-modal {
            opacity: 0;
            display: none;
            visibility: hidden;
            transform: scale(1.0);
            transition: visibility 3s linear 0s, opacity 0.5s 0.5s, transform 1s;
        }



    </style>
    @stack('styles')

</head>

<body style="max-height: 100vh">

<div id="preloader">
    <div class="lds-dual-ring"></div>
</div>

<div class="container-fluid col-12">
<!-- Main layout -->
    <main id="content" data-scroll-container style="background-image: linear-gradient(to right, rgba(25,19,149,0.5), rgba(0,0,255,0.5)),
  url({{asset('/dist/img/Master-Page-Images/Intro-Section/Background.png')}});background-size: contain">
        <livewire:layouts.header/>

        <section class="modal" style="display: flex !important; ">
            <div class="modal-content">
                <span class="close-button" id="close-modal">×</span>
                <img src="{{asset('/dist/img/131313.jpg')}}" style="height: 80vh;width: 80%" alt="">
                <h6 class="text-center font-weight-bold mt-4 mb-2" style="color: red">
                    برای ثبت نام با 50% تخفیف ایده تو اینجا ثبت کن

                </h6>
            </div>
        </section>
        <section id="first_section" data-scroll-section>
            <livewire:page.about/>
        </section>

        <section id="second_section" data-scroll-section>
            <livewire:page.about/>
        </section>
        <section id="third_section" data-scroll-section>
            <livewire:page.about/>
        </section>

        <section id="for_section" data-scroll-section>
            <livewire:page.about/>
        </section>

        <section id="five_section" data-scroll-section>
            <livewire:page.about/>
        </section>
        <section id="six_section" data-scroll-section>
            <livewire:page.about/>
        </section>
        <section id="seven_section" data-scroll-section>
            <livewire:page.about/>
        </section>

    </main>
</div>
<script type="text/javascript" src="{{asset('js/mdbootstrap/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/mdbootstrap/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/mdbootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/mdbootstrap/js/mdb.min.js')}}"></script>
<script src="{{asset('js/locomotive-scroll/dist/locomotive-scroll.min.js')}}"></script>
<script src="{{asset('js/sweetalert2/dist/sweetalert2.all.min.js')}}"></script>

@if(session()->has('delete-account'))
    <script>
        Swal.fire({
            icon: 'success',
            showConfirmButton: false,

            html:
                'اکانت شما با موفقیت از دسترس خارج شد و با تایید مدیریت حذف میگردد',
        })
    </script>
@endif

<script>

    document.addEventListener('DOMContentLoaded', function () {
        let preloader = document.getElementById('preloader')
        let content = document.getElementById('content')

        preloader.style.display = 'none';
        content.style.display = 'flex';

        const scroll = new LocomotiveScroll({
            el: document.querySelector('[data-scroll-container]'),
            smooth: true,
            direction: 'horizontal',
            gestureDirection: 'both',

            smartphone: {
                smooth: true,
                direction: 'horizontal',
                gestureDirection: 'both',

            },
            tablet: {
                smooth: true,
                direction: 'horizontal',
                gestureDirection: 'both',
            },
        });
    });


    const modal = document.querySelector(".modal");
    const closeButton = document.getElementById("close-modal");

    function closeModal() {
        modal.classList.add("close-modal");
    }


    closeButton.addEventListener("click", closeModal);

    window.addEventListener('resize', function () {
        scroll.start();
    });

</script>

</body>

</html>
