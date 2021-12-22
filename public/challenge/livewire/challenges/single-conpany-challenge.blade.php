@push('styles')
    <style>
        #relate_challenges {
            transition: all .2s ease-in-out;
            cursor: pointer;
        }
        #relate_challenges:hover {
            transform: scale(1.1);
        }
        ul {
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

                                    <!--Post data-->
                                    <div class="card-body card-body-cascade text-center rounded" style="background-color: #cfcfcf">
                                        <h2><a><strong>{{$singleChallenge->title}}</strong></a></h2>
                                        <!--Social shares-->
                                        <div class="social-counters mt-5" dir="rtl">
                                            <div class="col-4 text-right" >
                                                <ul>
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
                                </div>

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


                                    <span class="badge pink">فناوری</span>
                                    <span class="badge badge-primary mx-1">دیجیتال</span>
                                    <span class="badge grey mr-1">رمز ارز</span>
                                    <span class="badge badge-info">بلاک چین</span>
                                </div>
                            </div>
                            <!--/.Third row-->
                        </div>
                        <!--/.Leave a reply form-->

                    </section>
                    <!--Section: Blog v.4-->





                    <!--/Section: Leave a reply (Logged In User)-->
                </div>

            </main>
            <!--Main Layout-->
        </div>
        <div class="col-lg-3 col-12 px-4 mt-1 blue-grey lighten-5">
            <livewire:challenges.sidebar/>
        </div>
    </div>
</div>
