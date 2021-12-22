<div>
    <p class="font-weight-bold text-center spacing" style="color: #212121;">
        ...تازه ترین ها
    </p>

    <!-- Featured posts -->
    <section class="mb-5">

        <!-- Grid row -->
        <div class="row mt-4">
            <!-- Grid column -->
            <div class="col-md-12">

                <!-- Carousel Wrapper -->
                <div id="carousel-example-4" class="carousel slide carousel-fade z-depth-1-half" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-4" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-4" data-slide-to="1"></li>
                        <li data-target="#carousel-example-4" data-slide-to="2"></li>
                    </ol>
                    <!-- Indicators -->

                    <!-- Slides -->
                    <div class="carousel-inner" role="listbox">
                        <!-- First slide -->
                        @foreach($challenges as $challenge)
                            @if ($loop->first)
                                <div class="carousel-item active">
                                    <!-- Mask color -->
                                    <div class="view">
                                        <img src="{{$challenge->image}}" class="img-fluid" alt="">
                                        <a href="{{route('single.challenge',$challenge->slug)}}">
                                            <div class="mask flex-center rgba-black-light"></div>
                                        </a>
                                    </div>
                                    <!-- Caption -->
                                    <div class="carousel-caption">
                                        <div class="animated fadeInDown">
                                            <h4 class="h4-responsive">
                                                <a href="{{route('single.challenge',$challenge->slug)}}" class="white-text" style="text-decoration: none">{{$challenge->title}}</a>
                                            </h4>

                                        </div>
                                    </div>
                                    <!-- Caption -->
                                </div>
                                <!-- First slide -->
                        @elseif ($loop->last)
                            <!-- Third slide -->
                                <div class="carousel-item">
                                    <!-- Mask color -->
                                    <div class="view">
                                        <img src="{{$challenge->image}}" class="img-fluid" alt="">
                                        <a href="{{route('single.challenge',$challenge->slug)}}">
                                            <div class="mask flex-center rgba-black-light"></div>
                                        </a>
                                    </div>
                                    <!-- Caption -->
                                    <div class="carousel-caption">
                                        <div class="animated fadeInDown">
                                            <h4 class="h4-responsive">
                                                <a href="{{route('single.challenge',$challenge->slug)}}" class="white-text" style="text-decoration: none">{{$challenge->title}}</a>
                                            </h4>

                                        </div>
                                    </div>
                                @else
                                    <!-- Second slide -->
                                        <div class="carousel-item">
                                            <!-- Mask color -->
                                            <div class="view">
                                                <img src="{{$challenge->image}}" class="img-fluid" alt="">
                                                <a href="{{route('single.challenge',$challenge->slug)}}">
                                                    <div class="mask flex-center rgba-black-light"></div>
                                                </a>
                                            </div>
                                            <!-- Caption -->
                                            <div class="carousel-caption">
                                                <div class="animated fadeInDown">
                                                    <h4 class="h4-responsive">
                                                        <a href="{{route('single.challenge',$challenge->slug)}}" class="white-text" style="text-decoration: none">{{$challenge->title}}</a>
                                                    </h4>

                                                </div>
                                            </div>
                                            <!-- Caption -->
                                        </div>
                                        <!-- Second slide -->

                                @endif

                                @endforeach
                                <!-- Caption -->
                                </div>
                                <!-- Third slide -->
                    </div>
                    <!-- Slides -->

                    <!-- Controls -->
                    <a class="carousel-control-prev" href="#carousel-example-4" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">قبل</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-example-4" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">بعد</span>
                    </a>
                    <!-- Controls -->
                </div>
                <!-- Carousel Wrapper -->

            </div>
            <!-- Grid column -->
        </div>
        <!-- Grid row -->

    </section>
    <!-- Featured posts -->

    <!-- Title -->
</div>
