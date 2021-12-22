<style>
    #challenges_all_homepage {
        transition: all .2s ease-in-out;
        cursor: pointer;
    }
    #challenges_all_homepage:hover {
        transform: scale(1.05);
    }
</style>
<div >
    <!-- Third section -->
    <div id="challenges" class=" text-center" dir="rtl" style="margin-right: 2rem;margin-left: 2rem" >

        <!-- Section title -->
        <div>
            <h3 class="section-heading text-center wow fadeIn text-light" data-wow-delay="0.2s"> اخبار شتابدهنده</h3>


            <div class="row mb-3 wow fadeIn" data-wow-delay="0.4s" style="border: 1px solid #212121;background-color: #4a148c">

                <div class="row mt-5 mx-auto" style="max-height: 70vh">
                @foreach ($articles as $article)
                    <!-- First column -->
                        <div class="col-5 mb-5 mx-auto" data-scroll data-scroll-speed="3">

                            <!-- Card -->
                            <div class="card card-cascade narrower" style="background-color: #ede7f6;max-height: 60vh;" id="challenges_all_homepage">

                                <!-- Card image -->
                                <div class="view view-cascade overlay">

                                    <img src="{{$article->image}}"
                                         class="card-img-top img-fluid" alt="">

                                    <a href="{{route('single.challenge',$article->slug)}}">

                                        <div class="mask rgba-white-slight"></div>

                                    </a>

                                </div>
                                <!-- Card image -->

                                <!-- Card content -->
                                <div class="card-body card-body-cascade">

                                    <h6 class="red-text text-right"><i class="fas fa-laptop float-right ml-2"></i> {{$article->main_category ?? ''}}</h6>

                                    <!-- Title -->
                                    <h4 class="card-title text-center">{{Str::limit($article->title,7)}}</h4>
                                    <!-- Text -->
                                    <p class="card-text grey-text">{!!Str::limit($article->body,25) !!}</p>


                                </div>
                                <!-- Card content -->

                            </div>
                            <!-- Card -->

                        </div>
                        <!-- First column -->
                    @endforeach
                </div>
            </div>
        </div>

        <!-- First row -->

        <!-- First row -->
    </div>
    <!-- Third section -->
</div>
