<div>
    <!-- Navbar -->
    <livewire:auth.profile.header/>

    <!-- Navbar -->
    <div class="container" style="margin-top: 7rem">
        <div style="margin-top: 7rem">
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
                                                <img src="{{$notification->image ?? 'https://mdbootstrap.com/img/Photos/Others/model1.jpg'}}" class="img-fluid z-depth-1">
                                            </div>
                                            <!-- Grid column -->

                                            <!-- Grid column -->
                                            <div class="col-md-7 ml-xl-5 text-right">
                                                {!! $notification->body !!}
                                            </div>

                                            <!-- Grid Column -->

                                        </div>

                                    </div>

                                    <h6 class="text-right text-primary">{{jdate($notification->created_at)->format('%B %d، %Y')}}</h6>
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
</div>

