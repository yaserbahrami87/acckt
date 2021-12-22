@extends('livewire.auth.profile.company-users')
@section('styles')
    <link  href="{{asset('/css/profile-sidenav.css')}} " rel="stylesheet">

    <style>
        #contact-Subject {
            font-size: .75rem !important;
            font-weight: bold;
        }
    </style>
@endsection
@section('main')
    <div class="breadcrumb-dn font-weight-bold text-right  d-flex justify-content-end">
            <p class="mt-2 mr-2 ml-2" style="font-size: .8rem;font-weight: 500;color: #5472d3">صندوق پیام ها</p>
            <i class="fas fa-chevron-left mr-3 ml-2 mt-2" style="margin-top: 1.5vh;color: #757575"></i>
            <p class="mt-2 mr-2" style="font-size: .8rem;font-weight: 500;color: #757575">تنظیمات حساب کاربری</p>
            <i class="fas fa-chevron-left mr-2 ml-2 mt-2"  style="color: #757575"></i>
            <a href="{{route('homePage')}}"><i class="fas fa-home mr-2 ml-2 mt-2" style="font-size: 1rem;color: #524c00"></i></a>
            <i class="fas fa-grip-lines-vertical ml-1 mt-2" style="font-size: 1rem;color: #524c00"></i>
            <p class="mt-1 mr-2 ml-2" style="font-weight: 900;color: #524c00 !important;">پورتابل صاحبان ایده</p>

    </div>

    <div >
        <div >
            <!-- Main Layout -->
            <main>

                <div class="container-fluid mt-md-0 mt-5 mb-5">

                    <!-- Grid row -->
                    <div class="row">

                        <!-- Grid column -->
                        <div class="col-md-12 px-lg-5">
                            <!-- Card -->
                            <div class="card pb-5 mx-md-3">
                                <div class="card-body">

                                    <div class="container">

                                        <!-- Section heading -->
                                        <h1 class="text-center h1 pt-4 mb-3">
                                            <strong>{!! $notification->title !!}</strong>
                                        </h1>

                                        <!-- Grid row -->
                                        <div class="row pt-lg-5 pt-3">

                                            <!-- Grid column -->
                                            <div class="col-md-4 mb-3">
                                                <img src="{{$notification->image ?? 'https://mdbootstrap.com/img/Photos/Others/photo10.jpg'}}" class="img-fluid z-depth-1">
                                            </div>
                                            <!-- Grid column -->

                                            <!-- Grid column -->
                                            <div class="col-md-7 ml-xl-5 text-right">
                                                {!! $notification->body !!}
                                            </div>

                                            <!-- Grid Column -->

                                        </div>

                                    </div>

                                    <h5 class="text-right text-primary">{{jdate($notification->created_at)->format('%B %d، %Y')}}</h5>
                                </div>
                                <!-- Card -->
                            </div>
                            <!-- Grid column -->

                        </div>
                        <!-- Grid row -->
                    </div>

                </div>
            </main>
            <!-- Main Layout -->
        </div>

    </div>
@endsection
