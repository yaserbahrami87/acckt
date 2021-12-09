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
                                                            <form class="row" method="POST" action="/portal/venturecapital" >
                                                                {{csrf_field()}}
                                                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                                    <div class="form-group">
                                                                        <label for="amountcapitals" class="d-block">کدامیک از گزینه های زیر در مورد سرمایه گذاری خطرپذیر صحیح است ؟</label>
                                                                        <div class="custom-control custom-radio custom-control-inline">
                                                                            <input type="radio" id="investmentIndex1" name="venturecapital_id" class="custom-control-input" value="1"   />
                                                                            <label class="custom-control-label" for="investmentIndex1">. دوره بازگشت کوتاه مدت استو سودآوری مناسبی در زمان کوتاه خواهد داشت.</label>
                                                                        </div>
                                                                        <div class="custom-control custom-radio custom-control-inline">
                                                                            <input type="radio" id="investmentIndex2" name="venturecapital_id" class="custom-control-input" value="2" />
                                                                            <label class="custom-control-label" for="investmentIndex2">دوره ی سرمایه گذاری بلندمدت است و سودآوری خوبی در کوتاه مدت خواهد داشت.</label>
                                                                        </div>
                                                                        <div class="custom-control custom-radio custom-control-inline">
                                                                            <input type="radio" id="investmentIndex3" name="venturecapital_id" class="custom-control-input" value="3"  />
                                                                            <label class="custom-control-label" for="investmentIndex3">دوره سرمایه گذاری بلندمدت است و میزان سود متناسب با درصد ریسک می باشد.</label>
                                                                        </div>
                                                                        <div class="custom-control custom-radio custom-control-inline">
                                                                            <input type="radio" id="investmentIndex4" name="venturecapital_id" class="custom-control-input" value="4"  />
                                                                            <label class="custom-control-label" for="investmentIndex4">گزینه ی الف و ج</label>
                                                                        </div>
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
