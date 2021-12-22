@push('styles')
    <style>
        #relate_article {
            transition: all .2s ease-in-out;
            cursor: pointer;
        }
        #relate_article:hover {
            transform: scale(1.1);
        }
    </style>
@endpush
<div>
    <div class="mt-5 pt-3 rounded" style="margin-top: 5rem;background-color: #efefef; ">
        <div class="row mt-5 pt-3">
            <div class="col-lg-9 col-md-12 mt-1">
                <!--Main Layout-->
                <main>

                    <div>

                        <!--Section: Blog v.4-->
                        <section class="section mt-5 pb-3 wow fadeIn">

                            <h2 class="text-dark text-center mb-3"><a><strong>{{$singleArticle->title}}</strong></a></h2>

                            <!--Grid row-->
                            <div class="row d-flex justify-content-center">
                                <div class="col-md-10">
                                    <!-- Card -->
                                    <div class="card card-cascade wider reverse">

                                        <!-- Card image -->
                                        <div class="view view-cascade overlay">
                                            <img class="card-img-top" src="{{$singleArticle->image}}" alt="Card image cap">
                                            <a href="#">
                                                <div class="mask rgba-white-slight"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <!--Post data-->
                                    <div class="card-body card-body-cascade text-center rounded mt-4 text-light" style="background-color: #cfcfcf">
                                        <!--Social shares-->
                                        <div class="social-counters mt-3" dir="rtl">
                                            <div class="col-4 text-right"  >
                                                <ul>
                                                    <!--Comments-->

                                                    <li>
                                                        <a>
                                                            <span class="clearfix d-none d-md-block mb-2">نظرات : <strong>18</strong></span>
                                                        </a>
                                                    </li>
                                                    <!--Comments-->

                                                    <li>
                                                        <a>
                                                            <span class="clearfix d-none d-md-block mb-2"> تعداد بازدید : <strong>254</strong></span>
                                                        </a>

                                                    </li>
                                                    <li>
                                                        <a>
                                                            <span class="clearfix d-none d-md-block mb-2">تاریخ انتشار : <strong>{{$singleArticle->created_at}}</strong></span>
                                                        </a>
                                                    </li>
                                                    <li>

                                                    </li>
                                                </ul>
                                            </div>

                                        </div>

                                    </div>
                                    <!--Post data-->

                                    <!--Excerpt-->
                                    <div class="excerpt mt-5 wow fadeIn text-right text-dark mx-3" data-wow-delay="0.3s">
                                        <p >
                                            {!! $singleArticle->body  !!}
                                        </p>
                                        {{--                            <blockquote class="blockquote mt-4 mb-4">--}}
                                        {{--                                <p class="mb-0"><em>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد</em></p>--}}
                                        {{--                                <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>--}}
                                        {{--                            </blockquote>--}}

                                        <div class="mt-4 d-flex justify-content-end">
                                            <span class="badge pink">Travel</span>
                                            <span class="badge badge-primary mx-1">Adventure</span>
                                            <span class="badge grey mr-1">Photography</span>
                                            <span class="badge badge-info">Education</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--Grid row-->
                        </section>
                        <!--Section: Blog v.4-->

                        <hr>

                        <!--Section: Blog v.2-->
                        <section class="section extra-margins pb-3 wow fadeIn" data-wow-delay="0.3s">

                            <!--Section heading-->
                            <h3 class="text-center my-5 h3 pt-3 text-dark">مطالب مرتبط</h3>

                            <!--Grid row-->
                            <div class="row mx-5" dir="rtl">

                            @foreach($relate_articles as $relate_article)
                                <!--Grid column-->
                                    <div class="col-lg-4 col-md-12 mb-4 " id="relate_article">
                                        <!--Card Light-->
                                        <div class="card">
                                            <!--Card image-->
                                            <div class="view overlay">
                                                <img src="{{$relate_article->image}}" class="card-img-top"
                                                     alt="">
                                                <a href="{{route('single.article',$relate_article->slug)}}">
                                                    <div class="mask"></div>
                                                </a>
                                            </div>
                                            <!--/.Card image-->
                                            <!--Card content-->
                                            <div class="card-body text-center">
                                                <!--Social shares button-->
                                                <a class="activator mr-3"><i class="fas fa-share-alt"></i></a>
                                                <!--Title-->
                                                <h4 class="card-title">{{$relate_article->title}}</h4>
                                                <hr>
                                                <!--Text-->

                                                <p class="card-text">{!! Str::limit($relate_article->body,40) !!}</p>

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

                        <livewire:articles.comments :article="$singleArticle->id"/>

                        <!--Section: Leave a reply (Logged In User)-->
                        <section class="pb-5 mt-5 wow fadeIn" data-wow-delay="0.3s">


                            @include('layouts.comments-send' , ['item' => $singleArticle])
                        </section>
                        <!--/Section: Leave a reply (Logged In User)-->
                    </div>

                </main>
                <!--Main Layout-->
            </div>
            <div class="col-lg-3 container d-flex justify-content-center">
                <div class=" col-12 px-4 mt-1 blue-gray lighten-5">
                    <livewire:articles.sidebar/>
                </div>
            </div>
        </div>
    </div>
</div>

