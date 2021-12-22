@push('styles')
    <style>
        #articles_recent {
            transition: all .2s ease-in-out;
            cursor: pointer;
        }
        #articles_recent:hover {
            transform: scale(1.1);
        }
    </style>
@endpush
<div>
    <hr>
    <p class="font-weight-bold text-center spacing" style="color: #212121">
        <strong>اخرین خبر ها</strong>
    </p>
    <hr>
    <!-- Section: Recent posts -->
    <section class="section mb-5">

        @foreach($articles as $article)
        <div class="post-border" id="articles_recent">

            <!-- Grid row -->
            <div class="row mt-4">

                <!-- Grid column -->
                <div class="col-12">

                    <!-- Image -->
                    <div class="view overlay z-depth-1 mb-3">
                        <img src="{{$article->image}}" class="img-fluid" alt="Post">
                        <a href="{{route('single.article',$article->slug)}} ">
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
                            <a href="{{route('single.article',$article->slug)}}" class=" font-weight-bold text-dark">{{$article->title}}</a>
                        </p>
                        <p class="font-small " style="color: #212121">
                            <em>{{jdate($article->created_at)->ago()}}</em>
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
