@push('styles')
    <style>
        #articleCard {
            transition: all .2s ease-in-out;
            cursor: pointer;
        }
        #articleCard:hover {
            transform: scale(1.1);
        }
    </style>
@endpush
<div class="col-12 rounded" style="background-color: #38006b;">


    <div class="row" >
        <div class="col-lg-9 d-flex justify-content-center">

            <div class=" col-12">
                <div class="row" style="background-color: #38006b;margin-top: 2rem;margin-bottom: 4rem;">
                    <div class="input-group ">
                        <div class="form-outline mx-auto" style="width: 100%">
                            <input type="search" id="form1" class="form-control input-lg text-right mx-auto" style="width: 60%" placeholder="جستوجو" wire:model.lazy="search" />
                        </div>
                    </div>
                </div>
                <section class="pb-3 text-center text-md-right">
                    <!-- Grid row -->
                    <h3 id="articleCard" class="section-heading text-center mr-5 mb-5 wow fadeIn text-light mx-auto" style="width: max-content"  data-wow-delay="0.2s" >اخبار شتابدهنده</h3>
                    <div class="row rounded" style="border: 1px solid #212121;background-color: #4a148c" dir="rtl">
                        <div class="row m-5">
                        @foreach($challenges as $challenge)
                            <!-- First column -->
                                <div class="col-lg-4 col-md-12 col-xs-12 mb-5" >


                                    <!-- Card -->
                                    <div class="card card-cascade narrower" id="articleCard" style="background-color: #ede7f6;min-height: 38vh;">

                                        <!-- Card image -->
                                        <div class="view view-cascade overlay">

                                            <img src="{{$challenge->image}}"
                                                 class="card-img-top" alt="">

                                            <a href="{{route('single.challenge',$challenge->slug)}}">

                                                <div class="mask rgba-white-slight"></div>

                                            </a>

                                        </div>
                                        <!-- Card image -->

                                        <!-- Card content -->
                                        <div class="card-body card-body-cascade ">

                                            <button class="navbardropdownedit" wire:click="like({{$challenge->id}})">
                                                <h6 class="red-text text-right"><i class="{{$challenge->like_process == true ? 'fas fa-heart'  : 'far fa-heart' }} float-right ml-2"></i>{{$challenge->main_category ?? ''}}</h6>
                                            </button>
                                            <!-- Title -->
                                            <h4 class="card-title text-center">{{$challenge->title}}</h4>

                                            <!-- Text -->
                                            <p class="card-text dark-text" style="text-align:right !important;">{!!Str::limit($challenge->body,50) !!}</p>


                                        </div>
                                        <!-- Card content -->

                                    </div>
                                    <!-- Card -->

                                </div>
                                <!-- First column -->
                            @endforeach
                        </div>

                    </div>
                    <!-- Grid row -->
                    <hr class="mb-5">
                    <div class="flex-center">
                    </div>
                </section>
            </div>
        </div>
        <div class="col-lg-3 container d-flex justify-content-center">
            <div class=" col-12 px-4 mt-1 blue-gray lighten-5">
                <livewire:challenges.sidebar/>
            </div>
        </div>
    </div>
    @include('sweet::alert')

</div>
