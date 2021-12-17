@extends('acckt_master.layouts.panel')

@section('content')
<!-- BEGIN: Content-->
<div class="app-content content">
  <div class="content-overlay"></div>
  <div class="content-wrapper">
    <div class="content-header row">
      <div class="content-header-left col-12 mb-2 mt-1">
        <div class="row breadcrumbs-top">
          <div class="col-12">
            <h5 class="content-header-title float-left pr-1">تنظیمات حساب کاربری</h5>
            <div class="breadcrumb-wrapper">
              <ol class="breadcrumb p-0 mb-0">
                <li class="breadcrumb-item"><a href="/portal"><i class="bx bx-home-alt"></i></a></li>
                <li class="breadcrumb-item"> تنظیمات حساب کاربری</li>
                <li class="breadcrumb-item active">اطلاعات عمومی</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="content-body"><!-- account setting page start -->
      <section id="page-account-settings">
        <div class="row">
          <div class="col-12">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-content">
                    <div class="card-body">
                      <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="account-vertical-general" aria-labelledby="account-pill-general" aria-expanded="true">
                        @if(Auth::user()->tel_verify==0)
                            <div class="col-12">
                                @if ($verifyStatus==false)
                                    <div class="alert alert-danger">
                                        <i class="bi bi-exclamation-triangle-fill"></i>
                                        برای ادامه فعالیت باید تلفن همراه خود را در سیستم ثبت کنید
                                        <form class="d-inline" method="post" action="/portal_idea/verify/sendCode/tel">
                                            {{csrf_field()}}
                                            <button class="btn btn-info text-light btn-sm text-dark" type="submit" id="activeMobile" data-toggle="modal" data-target="#ModalMobile">ارسال کد فعال سازی</button>
                                        </form>
                                    </div>
                                @else
                                    <div class="alert alert-warning">
                                        جهت فعال سازی کد ارسال شده به تلفن همراه را وارد کنید
                                        <form method="post" action="/portal_idea/verify/checkCode/tel" class="mt-2">
                                            {{csrf_field()}}
                                            <div class="input-group">
                                                <input id="tel" type="text" class="form-control @error('code') is-invalid @enderror" name="code" value="{{ old('code') }}" required autocomplete="tel">
                                                <div class="input-group-prepend ">
                                                    <button class="btn btn-outline-secondary btn-info text-light m-0" type="submit" id="activeMobile" data-toggle="modal" data-target="#ModalMobile">فعال سازی</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                @endif

                            </div>
                        @endif

                        @if($errors->any())
                                <div class="col-12">
                                    <div class="alert alert-danger" role="alert">
                                        @foreach($errors->all() as $error)
                                            <li>{{$error}}</li>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                                <form method="POST" action="/portal_idea/user/{{Auth::user()->id}}" enctype="multipart/form-data" >
                                    {{csrf_field()}}
                                    {{method_field('PATCH')}}
                                    <div class="media">
                                        @if(!is_null(Auth::user()->avatar))
                                            <img src="{{'/images/users/'.Auth::user()->avatar}}" class="rounded mr-75" alt="" height="64" width="64">
                                        @else
                                            <img src="{{('/panel_assets/images/profile/user-profile-thumbnail.png')}}" class="rounded mr-75" alt="" height="64" width="64">
                                        @endif
                                        <div class="media-body mt-25">
                                            <div class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start">
                                                <label for="select-files" class="btn btn-sm btn-light-primary ml-50 mb-50 mb-sm-0">
                                                    <span>ارسال تصویر جدید</span>
                                                    <input id="select-files" name="avatar" type="file" hidden>
                                                </label>
                                                <button class="btn btn-sm btn-light-secondary ml-50">بازنشانی</button>
                                            </div>
                                            <p class="text-muted ml-1 mt-50"><small>فایل های مجاز: JPG، PNG و GIF. حداکثر اندازه مجاز: 800KB</small></p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label>نام کاربری (شماره همراه)</label>
                                                    <input type="text" class="form-control text-left" placeholder="نام کاربری" value="{{old('tel',Auth::user()->tel)}}" required data-validation-required-message="وارد کردن نام کاربری الزامی است" dir="ltr" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label>نام و نام خانوادگی</label>
                                                    <input type="text" class="form-control" placeholder="نام و نام خانوادگی" value="{{old('lname',Auth::user()->lname)}}" required data-validation-required-message="وارد کردن نام و نام خانوادگی الزامی است"  name="lname" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label>کد ملی</label>
                                                    <input type="text" id="national_code" name="national_code" class="form-control" placeholder="کد ملی" value="{{old('national_code',Auth::user()->national_code)}}" required data-validation-required-message="وارد کردن کد ملی الزامی است">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label>ایمیل</label>
                                                    <input type="email" id="email" name="email" class="form-control text-left" placeholder="ایمیل" value="{{old('email',Auth::user()->email)}}" required data-validation-required-message="وارد کردن ایمیل الزامی است" data-validation-email-message="ایمیل وارد شده نامعتبر است" dir="ltr">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>بیوگرافی</label>
                                                <textarea class="form-control" id="biography" name="biography" rows="3" placeholder="اطلاعات بیوگرافی خود را وارد کنید ...">{{old('biography',Auth::user()->biography)}}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                            <button type="submit" class="btn btn-primary glow mr-sm-1 mb-1">ذخیره تغییرات</button>
                                            <button type="reset" class="btn btn-light mb-1">انصراف</button>
                                        </div>
                                    </div>
                                </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- account setting page ends -->
    </div>
  </div>
</div>
<!-- END: Content-->

@endsection
