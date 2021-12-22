@push('styles')
    <style>
        #articles_category {
            transition: all .2s ease-in-out;
            cursor: pointer;
        }
        #articles_category:hover {
            transform: scale(1.2);
            text-decoration: none;
        }
    </style>
@endpush
<div class="rounded p-5"  style="background-color: #efefef;">
    <!-- Sidebar -->

    @auth('web')
        <livewire:layouts.about-us/>
    @endauth
    <div>
        <hr>
        <p class="font-weight-bold text-center spacing" style="color: #212121">
            <strong>دسته بندی ها</strong>
        </p>
        <hr>
        <!-- Section: Recent posts -->
        <section class="section mb-5">

            @foreach($categories as $category)
                <div class="post-border">

                    <!-- Grid row -->
                    <div class="row mt-2">

                        <!-- Second column -->
                        <div class="col-12 mb-1">

                            <!-- Post data -->
                            <div class="text-center">
                                <p class="mb-1" id="articles_category">
                                    <a href="{{route('articles.category.single',$category->id)}}" style="color: #212121;text-decoration: none"  class="font-weight-bold">{{$category->name}}</a>
                                </p>
                                <hr>
                            </div>

                        </div>
                        <!-- Second column -->

                    </div>
                    <!-- Grid row -->
                </div>
            @endforeach
        </section>
        <!-- Section: Recent posts -->

        <livewire:articles.popular-posts/>


        <livewire:articles.recent-articles/>

        <livewire:articles.features-articles/>

        <!-- Title -->
    </div>




    <!-- Sidebar -->
</div>
