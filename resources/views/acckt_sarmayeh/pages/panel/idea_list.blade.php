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
              <div class="users-list-filter px-1">
                  <form>
                      <div class="row border rounded py-2 mb-2">
                          <div class="col-12 col-sm-6 col-lg-4">
                              <label for="users-list-role">عنوان ایده</label>
                              <fieldset class="form-group">
                                <input type="text" class="form-control text-left" id="users-list-role">
                              </fieldset>
                          </div>
                          <div class="col-12 col-sm-6 col-lg-4">
                              <label for="users-list-status">وضعیت</label>
                              <fieldset class="form-group">
                                  <select class="form-control" id="users-list-status">
                                      <option value="">همه</option>
                                      <option value="فعال">فعال</option>
                                      <option value="بسته شده">بسته شده</option>
                                      <option value="غیرفعال">غیرفعال</option>
                                  </select>
                              </fieldset>
                          </div>
                          <div class="col-12 col-sm-6 col-lg-4 d-flex align-items-center">
                              <button type="reset" class="btn btn-primary btn-block glow users-list-clear mb-0 mt-75">پاکسازی</button>
                          </div>
                      </div>
                  </form>
              </div>
              <div class="users-list-table">
                    <div class="row">
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
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endforeach
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
