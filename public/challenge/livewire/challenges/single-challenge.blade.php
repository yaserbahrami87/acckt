@push('styles')
    <style>
        #relate_challenges {
            transition: all .2s ease-in-out;
            cursor: pointer;
        }
        #relate_challenges:hover {
            transform: scale(1.1);
        }
        #box_detail {
            list-style-type: none;
        }
    </style>

@endpush
<div class="mt-5 pt-3" style="margin-top: 5rem;background-color: #efefef;">
    <div class="row mt-5 pt-3">
        <div class="col-lg-9 col-12 mt-1">
            <!--Main Layout-->
            <main>

                <div>

                    <!--Section: Blog v.4-->
                    <section class="section mt-5 pb-3 wow fadeIn">
                        <h2 class="text-center mb-3"><a><strong>{{$singleChallenge->title}}</strong></a></h2>
                        <!--Grid row-->
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-10">
                                <!-- Card -->
                                <div class="card card-cascade wider reverse">

                                    <!-- Card image -->
                                    <div class="view view-cascade overlay">
                                        <img class="card-img-top" src="{{$singleChallenge->image}}" alt="Card image cap">
                                        <a href="#!">
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                </div>
                                <!--Post data-->
                                <div class="card-body card-body-cascade text-center rounded mt-4" style="background-color: #cfcfcf">

                                    <!--Social shares-->
                                    <div class="social-counters mt-3" dir="rtl">
                                        <div class="col-4 text-right" >
                                            <ul id="box_detail">
                                                <li>
                                                    <a>
                                                        <span class="clearfix d-none d-md-block mb-2">پیشنهادات : <strong>{{$singleChallenge->idea_count}}</strong></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a>
                                                        <span class="clearfix d-none d-md-block mb-2"> سرمایه کل : <strong>{{$singleChallenge->total_investments}}</strong></span>
                                                    </a>

                                                </li>
                                                <li>
                                                    <a>
                                                        <span class="clearfix d-none d-md-block mb-2">ایده های تایید شده : <strong>{{$singleChallenge->idea_count}}</strong></span>
                                                    </a>
                                                </li>
                                                <li>

                                                </li>
                                            </ul>
                                        </div>

                                        <!--Comments-->

                                    </div>

                                    <!--Social shares-->

                                </div>
                                <!--Post data-->

                                <!--Excerpt-->
                                <div class="excerpt mt-5 wow fadeIn text-right mx-3" data-wow-delay="0.3s">
                                    <p>
                                        {!! $singleChallenge->body !!}
                                    </p>
                                    <!-- Google + -->
                                    <div class="">
                                        <a href="{{route('create.challenge.idea',$singleChallenge->id)}}">
                                            <button type="button" class="btn btn-primary btn-sm" >ثبت ایده</button>
                                        </a>
                                        <a href="{{route('create.invesment',$singleChallenge->id)}}">
                                            <button type="button" class="btn btn-primary btn-sm">ثبت سرمایه</button>
                                        </a>
                                    </div>


                                    <span class="badge pink">Travel</span>
                                    <span class="badge badge-primary mx-1">Adventure</span>
                                    <span class="badge grey mr-1">Photography</span>
                                    <span class="badge badge-info">Education</span>
                                </div>
                            </div>
                            <!--/.Third row-->
                        </div>
                        <!--/.Leave a reply form-->

                    </section>
                    <!--Section: Blog v.4-->




                    <!--Section: Blog v.2-->
                    <section class="section extra-margins pb-3 wow fadeIn" data-wow-delay="0.3s">

                        <!--Section heading-->
                        <h3 class="text-center my-5 text-center h3 pt-3">مطالب مرتبط</h3>

                        <!--Grid row-->
                        <div class="row mx-5" dir="rtl">

                        @foreach($relate_challenges as $relate_challenge)
                            <!--Grid column-->
                                <div class="col-lg-4 col-md-12 mb-4">
                                    <!--Card Light-->
                                    <div class="card" id="relate_challenges">
                                        <!--Card image-->
                                        <div class="view overlay">
                                            <img src="{{$relate_challenge->image}}" class="card-img-top"
                                                 alt="">
                                            <a href="{{route('single.challenge',$relate_challenge->slug)}}">
                                                <div class="mask"></div>
                                            </a>
                                        </div>
                                        <!--/.Card image-->
                                        <!--Card content-->
                                        <div class="card-body text-right">
                                            <!--Social shares button-->
                                            <a class="activator mr-3"><i class="fas fa-share-alt"></i></a>
                                            <!--Title-->
                                            <h4 class="card-title text-center">{{$relate_challenge->title}}</h4>
                                            <hr>
                                            <!--Text-->
                                            <p class="card-text">{!! Str::limit($relate_challenge->body,100) !!}</p>

                                        </div>
                                        <!--/.Card content-->
                                    </div>
                                    <!--/.Card Light-->

                                </div>
                                <!--Grid column-->
                            @endforeach

                        </div>
                        <!--Grid row-->

                    </section>
                    <!--Section: Blog v.2-->
                    <livewire:challenges.comments :challenge="$singleChallenge->id"/>
                    <!--Section: Leave a reply (Logged In User)-->
                    <section class="pb-5 mt-5 wow fadeIn" data-wow-delay="0.3s">

                        @include('layouts.comments-send' , ['item' => $singleChallenge])

                    </section>
                    <!--/Section: Leave a reply (Logged In User)-->
                </div>

            </main>
            <!--Main Layout-->
        </div>
        <div class="col-lg-3 container d-flex justify-content-center">
            <div class=" col-12 px-4 mt-1 blue-gray lighten-5">
                <livewire:challenges.sidebar/>
            </div>
        </div>
    </div>
</div>
