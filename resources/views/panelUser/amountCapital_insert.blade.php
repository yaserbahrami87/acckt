@extends('acckt_sarmayeh.layouts.panel')

@section('content')
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
                                    <li class="breadcrumb-item active">شبکه های اجتماعی</li>
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
                                                        @if($errors->any())
                                                            <div class="col-12">
                                                                <div class="alert alert-danger" role="alert">
                                                                    @foreach($errors->all() as $error)
                                                                        <li>{{$error}}</li>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        @endif
                                                            <form class="row" method="POST" action="/portal/user/amountcapital/{{Auth::user()->id}}/update" >
                                                                {{csrf_field()}}
                                                                {{method_field('PATCH')}}
                                                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                                    <div class="form-group">
                                                                        <label for="amountcapitals">میزان سرمایه ای که تمایل دارید برای یک کسب و کار نو سرمایه گذاری کنید چقدر است؟</label>
                                                                        <select class="form-control" id="amountcapitals" name="amountcapitals_id">
                                                                            <option selected disabled>انتخاب کنید</option>
                                                                            <option @if(Auth::user()->amountcapitals_id==1) selected @endif value="1">کمتر از یک میلیارد تومان</option>
                                                                            <option @if(Auth::user()->amountcapitals_id==2) selected @endif value="2">بین یک تا دو میلیارد تومان</option>
                                                                            <option @if(Auth::user()->amountcapitals_id==3) selected @endif value="3">بیش از دو میلیارد تومان</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12">
                                                                    <input type="submit" value="ثبت" class="btn btn-success" />
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
