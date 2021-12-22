@push('styles')
    <style>
        #challenges_category {
            transition: all .2s ease-in-out;
            cursor: pointer;
        }
        #challenges_category:hover {
            transform: scale(1.2);
            text-decoration: none;
        }
    </style>
@endpush
    <!-- Sidebar -->

        <!-- Section: Recent posts -->
        <section class="section mb-5 mt-5">
            <p class="font-weight-bold text-center spacing" style="color: #212121">
                دسته بندی ها
            </p>
            <hr>
            @foreach($categories as $category)
                <div class="post-border">

                    <!-- Grid row -->
                    <div class="row mt-2">

                        <!-- Second column -->
                        <div class="col-12 mb-1">

                            <!-- Post data -->
                            <div class="text-center" id="challenges_category">
                                <p class="mb-1">
                                    <a href="{{route('challenges.category.single',$category->id)}}" style="color: #212121;text-decoration: none"  class="text-hover font-weight-bold">{{$category->name}}</a>
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

<livewire:articles.popular-posts/>
<livewire:challenges.recent-challenges/>
<livewire:challenges.features-challenges/>
