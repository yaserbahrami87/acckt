@push('styles')
    <style>
        #recent_challenges {
            transition: all .2s ease-in-out;
            cursor: pointer;
        }
        #recent_challenges:hover {
            transform: scale(1.1);
        }
    </style>
@endpush
<div >
    <p class="font-weight-bold font-weight-bold text-dark text-center spacing">
        اخرین چالش ها
    </p>
    <hr>
    <!-- Section: Recent posts -->
    <section class="section mb-5">

        @foreach($challenges as $challenge)
            <div class="post-border">

                <!-- Grid row -->
                <div class="row mt-4" id="recent_challenges">

                    <!-- Grid column -->
                    <div class="col-12">

                        <!-- Image -->
                        <div class="view overlay z-depth-1 mb-3">
                            <img src="{{$challenge->image}}" class="img-fluid" alt="Post">
                            <a href="{{route('single.challenge',$challenge->slug)}}">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                    </div>
                    <!-- Grid column -->

                    <!-- Second column -->
                    <div class="col-12 mb-1">

                        <!-- Post data -->
                        <div class="text-center">
                            <p class="mb-1">
                                <a href="{{route('single.challenge',$challenge->slug)}}" class="font-weight-bold text-dark" style="text-decoration: none">{{$challenge->title}}</a>
                            </p>
                            <p class="font-small grey-text">
                                <em>{{jdate($challenge->created_at)->ago()}}</em>
                            </p>
                        </div>

                    </div>
                    <!-- Second column -->

                </div>
                <!-- Grid row -->
            </div>
        @endforeach
    </section>
    <!-- Section: Recent posts -->

    <!-- Title -->
</div>
