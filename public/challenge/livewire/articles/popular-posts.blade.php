@push('styles')
    <style>
        #popular_articles {
            transition: all .2s ease-in-out;
            cursor: pointer;
        }
        #popular_articles:hover {
            transform: scale(1.1);
        }
    </style>
@endpush
<div>
    <!-- Title -->
    <hr>
    <p class="font-weight-bold text-center spacing" style="color: #212121;">
        محبوبترین ها
    </p>
    <hr>

    <!-- Popular posts -->
    <section class="mb-5 ">

        <!-- Grid row -->
        <div class="row mt-4 ">

            <!-- Grid column -->
            <div class="mx-md-4">

                @foreach($articles as $article)
                <!-- Image -->
                <div class="view overlay z-depth-1" id="popular_articles" >
                    <img src="{{$article->image}}" class="img-fluid" alt="Post">
                    <a href="{{route('single.article',$article->slug)}}">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!-- Post data -->
                <div class="text-center mt-3">
                    <p class="mb-1">
                        <a href="{{route('single.article',$article->slug)}}" style="color: #212121" class=" text-dark">{{$article->title}}</a>
                    </p>
                    <p class="font-small grey-text">
                        <em>{{jdate($article->created_at)->ago()}}</em>
                    </p>

                    @endforeach
                </div>
            </div>
            <!-- Grid column -->


        </div>
        <!-- Grid row -->

    </section>
    <!-- Popular posts -->

    <!-- Title -->
</div>
