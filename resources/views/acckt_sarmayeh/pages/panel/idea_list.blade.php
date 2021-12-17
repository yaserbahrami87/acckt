@extends('acckt_sarmayeh.layouts.panel')
@section('headerScript')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <style>
        .users-list-table .card img
        {
            height: 200px;
        }
    </style>
@endsection
@section('content')

    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-12 mb-2 mt-1">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h5 class="content-header-title float-left pr-1">لیست ایده ها</h5>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb p-0 mb-0">
                                <li class="breadcrumb-item"><a href="/portal"><i class="bx bx-home-alt"></i></a></li>
                                <li class="breadcrumb-item active"> لیست ایده ها</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body"><!-- users list start -->
          <section class="users-list-wrapper">
              <div class="users-list-table">
                    <div class="row">
                        @if($idea->count() >0)
                            @foreach($idea as $item)
                            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                                <div class="card" style="width: 18rem;">
                                    <img src="{{asset('/images/idea/'.$item->avatar)}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">{{$item->group_name}}</h5>
                                        <small>سرمایه موردنیاز:</small>
                                        <p class="card-text text-center">{{$item->amountcapitals}}</p>
                                        <p >تعداد پیشنهاد:
                                        @if($item->demand>0)
                                            @for($i=0;$i<$item->demand;$i++)
                                                <i class="bi bi-star-fill text-warning"></i>
                                            @endfor
                                        @endif
                                        </p>
                                        <a href="{{asset('/portal/idea/'.$item->id)}}" class="btn btn-primary btn-sm">نمایش</a>
                                        @if($item->demandUser==0)
                                            <a href="{{asset('/portal/idea/'.$item->id.'/create')}}" class="btn btn-primary btn-sm">ثبت درخواست</a>
                                        @else
                                            <a href="#" class="btn btn-warning btn-sm">درخواست ارسال شده</a>
                                            <!-- <a href="{{asset('/message/idea/'.$item->id)}}" class="btn btn-success btn-sm btn-block mt-1" >ارسال پیام</a> -->
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @else
                            <div class="col-12 alert alert-warning">
                                در حال حاضر پروژه ای وجود ندارد.
                            </div>
                        @endif
                        {{$idea->links()}}
                    </div>
              </div>
          </section>
          <!-- users list ends -->
        </div>
      </div>
    </div>
    <!-- END: Content-->
@endsection
