@extends('panelUser.master.index')
@section('content')
    <div class="col-12">
        <div class="container" dir="rtl">
            <div class="card shadow-lg">
                <h5 class="card-header bg-info text-light">
                    <i class="bi bi-person-circle"></i>
                    تنظیمات حساب کاربری
                </h5>
                <div class="card-body">
                    <form class="row" method="POST" action="/panel/user/{{Auth::user()->id}}" enctype="multipart/form-data" >
                        {{csrf_field()}}
                        {{method_field('PATCH')}}
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <div class="form-group">
                                <label for="fname">نام:</label>
                                <input type="text" class="form-control" id="fname" name="fname" value="{{Auth::user()->fname}}" />
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <div class="form-group">
                                <label for="lname">خانوادگی:</label>
                                <input type="text" class="form-control" id="lname" name="lname" value="{{Auth::user()->lname}}"/>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <div class="form-group">
                                <label for="tel">شماره همراه:</label>
                                <input type="text" class="form-control" id="tel" name="tel" value="{{Auth::user()->tel}}" @if(!is_null(Auth::user()->tel)) disabled @endif />
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <div class="form-group">
                                <label for="email">پست الکترونیکی:</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{Auth::user()->email}}" />
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <div class="form-group">
                                <input type="file" class="form-control" id="customFile">
                                <label class="custom-file-label" for="customFile">انتخاب عکس</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <input type="submit" value="بروزرسانی" class="btn btn-success" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
