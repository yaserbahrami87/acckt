<div>
    <!--Section: Comments list-->
    <section class="mb-4 pt-5 wow fadeIn" data-wow-delay="0.3s">

        <!--Main wrapper-->
        <div class="comments-list text-center text-md-left mb-5">
            <div class="mb-4">
                <h3 class="font-weight-bold pt-3 mb-5 text-dark text-center"> نظرات<span class="badge pink ">{{count($comments)}}</span></h3>
            </div>
        @foreach($comments as $comment )
            <!--First row-->
            <div class="row mb-4 ">
                <!--Image column-->
                <div class="col-2 mb-md-0 mb-3">
                    <img src="{{$comment->profile_image ?? 'https://yazdanbabazade.parsaspace.com/images/451-4517876_default-profile-hd-png-download.jpg'}}" class="avatar rounded-circle z-depth-1-half">
                </div>
                <!--/.Image column-->

                <!--Content column-->
                <div class="col-10 text-dark" >
                    <a>
                        <h4 class="font-weight-bold">{{$comment->name}}</h4>
                    </a>
                    <div class="mt-2">
                        <ul class="list-unstyled">
                            <li class="comment-date"><i class="fas fa-clock"></i> {{ jdate($comment->created_at)->ago() }}</li>
                        </ul>
                    </div>
                    {!! $comment->body !!}

                </div>
                <!--/.Content column-->

            </div>
            <!--/.First row-->
            @endforeach

        </div>
        <!--/.Main wrapper-->

    </section>
    <!--/Section: Comments list-->

</div>

