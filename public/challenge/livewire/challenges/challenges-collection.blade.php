@push('styles')
    <style>
        #articleCard {
            transition: all .2s ease-in-out;
            cursor: pointer;
        }
        #articleCard:hover {
            transform: scale(1.1);
        }
        .navbardropdownedit {
            background: none;
            color: inherit;
            border: none;
            font: inherit;
            cursor: pointer;
            outline: inherit;
        }
    </style>
@endpush
<div class="container mt-5 pt-3">


    <div class="row">

        <!-- Main listing -->
        <div class="col-lg-9 col-12 mt-1">

            <!-- Section: Blog v.3 -->
            <section class="pb-3 text-center text-lg-right">
            @foreach($challenges as $challenge)
                <!-- Grid row -->
                    <div class="row">

                        <!-- Grid column -->
                        <div class="col-lg-5 mb-4">
                            <!-- Featured image -->
                            <div class="view overlay z-depth-1">
                                <img src="{{$challenge->image}}" class="img-fluid"
                                     alt="{{$challenge->title}}">
                                <a href="{{route('single.challenge',$challenge->slug)}}">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-lg-6 ml-xl-4 mb-4">
                            <!-- Grid row -->
                            <div class="row">

                                <!-- Grid column -->
                                <div class="col-xl-2 col-md-6 text-sm-center text-md-right text-lg-left">
                                    <p class="orange-text font-small font-weight-bold mb-1 spacing d-flex justify-content-around">
                                        <a href="{{route('challenges.category.single',$challenge->category_id)}}" style="text-decoration: none;color: #0f9d58">
                                            {{$challenge->main_category ?? ''}}
                                        </a>
                                        <a class="navbardropdownedit" wire:click="like({{$challenge->id}})">
                                            <i class="{{$challenge->like_process == true ? 'fas fa-heart'  : 'far fa-heart' }} float-right ml-2"></i>
                                        </a>

                                    </p>
                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-xl-10 col-md-6 text-sm-right text-md-right">
                                    <p class="font-small grey-text">
                                        <em>{{jdate($challenge->created_at)->ago() ?? ''}}</em>
                                    </p>
                                </div>
                                <!-- Grid column -->

                            </div>
                            <!-- Grid row -->

                            <h4 class="mb-3 dark-grey-text mt-0">
                                <strong>
                                    <a>{{$challenge->title}}</a>
                                </strong>
                            </h4>
                            <p class="dark-grey-text">{!! Str::limit($challenge->body,350) !!}</p>

                            <!-- Deep-orange -->
                            <a type="button" href="{{route('single.challenge',$challenge->slug)}}" class="btn btn-deep-orange btn-rounded btn-sm">ادامه ی مطلب</a>
                        </div>
                        <!-- Grid column -->

                    </div>
                    <!-- Grid row -->

                    <hr class="mb-5">
                @endforeach
            </section>
            <!-- Section: Blog v.3 -->

            {{ $challenges->links() }}

        </div>
        <!-- Main listing -->

        <div class="col-lg-3 col-12 px-4 mt-1 blue-grey lighten-5">
            <div class=" col-12 px-2 blue-gray lighten-5">
                <livewire:challenges.sidebar/>
            </div>
        </div>
    </div>
</div>
