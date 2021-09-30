@extends('panelUser.master.index')
@section('content')
    @if(!Auth::user()->tel_verify)
        <div class="col-12">
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="material-icons">close</i>
                </button>
                <span>خطا -  برای ادامه لطفا تلفن همراه خود را با ارسال کد تائید کنید
                    <form method="post" action="/panel/verify/sendCode/tel">
                        {{csrf_field()}}
                        <button type="submit" class="btn btn-success" href="#">ارسال کد</button>
                    </form>
                </span>
            </div>
        </div>
    @endif
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
                <div class="card-icon">
                    <i class="bi bi-envelope-fill"></i>
                </div>
                <p class="card-category">پیام ناخوانده</p>
                <h3 class="card-title">1
                    <small>پیام</small>
                </h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">mail</i>
                    <a href="#" class="warning-link">نمایش</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">category</i>
                </div>
                <p class="card-category">آیتم 1</p>
                <h3 class="card-title">تست</h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">date_range</i> Last 24 Hours
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-danger card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">info_outline</i>
                </div>
                <p class="card-category">آیتم 2</p>
                <h3 class="card-title">تست</h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">local_offer</i>نمایش
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
                <div class="card-icon">
                    <i class="fa fa-telegram"></i>
                </div>
                <p class="card-category">آیتم 3</p>
                <h3 class="card-title">+245</h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">update</i> نمایش
                </div>
            </div>
        </div>
    </div>
@endsection
