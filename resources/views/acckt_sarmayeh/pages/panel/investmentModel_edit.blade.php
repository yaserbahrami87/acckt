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
                                                        <form class="row" method="POST" action="/portal/investmentmodel/{{$investmentModel->id}}" >
                                                            {{csrf_field()}}
                                                            {{method_field('PATCH')}}
                                                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                                <div class="form-group">
                                                                    <label for="familiaritymodel_id">میزان آشنایی شما با مدلهای سرمایه گذاری بر روی استارتاپ ها تا چه اندازه است ؟</label>
                                                                    <select class="form-control" id="familiaritymodel_id" name="familiaritymodel_id">
                                                                        <option disabled selected>یک گزینه انتخاب کنید</option>
                                                                        <option value="1" {{ old('familiaritymodel_id',$investmentModel->familiaritymodel_id) == 1 ? 'selected' : '' }}>کاملا آشنا هستم</option>
                                                                        <option value="2" {{ old('familiaritymodel_id',$investmentModel->familiaritymodel_id) == 2 ? 'selected' : '' }}>تا حدی اطلاع دارم</option>
                                                                        <option value="3" {{ old('familiaritymodel_id',$investmentModel->familiaritymodel_id) == 3 ? 'selected' : '' }}>هیچ اطلاعاتی در این زمینه ندارم</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="investmentmodel_id">کدامیک از مدل های سرمایه گذاری زیر برای شما امکان پذیر است ؟</label>
                                                                    <select class="form-control" id="investmentmodel_id" name="investmentmodel_id[]" multiple>
                                                                        <option disabled selected>یک گزینه انتخاب کنید</option>
                                                                        <option value="1" {{ old('investmentmodel_id',$investmentModel->investmentmodel_id) == 1 ? 'selected' : '' }}>سرمایه گذاری جسورانه</option>
                                                                        <option value="2" {{ old('investmentmodel_id',$investmentModel->investmentmodel_id) == 2 ? 'selected' : '' }} >مشارکت در توسعه و فروش محصولات</option>
                                                                        <option value="3" {{ old('investmentmodel_id',$investmentModel->investmentmodel_id) == 3 ? 'selected' : '' }}>دریافت سهام از استارتاپ توسعه یافته </option>
                                                                        <option value="4" {{ old('investmentmodel_id',$investmentModel->investmentmodel_id) == 4 ? 'selected' : '' }}>سرمایه گذاری عام المنفعه </option>
                                                                    </select>
                                                                </div>





                                                                <p class="mt-5 border-top pt-1">اگر تمایلی به آشنایی با انواع مدل های سرمایه گذاری بین المللی دارید <a href="" data-toggle="modal" data-target="#exampleModal">اینجا</a> کلیک کنید</p>
                                                                <!-- Modal -->
                                                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                ...
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="investmentmethod_id">روش سرمایه گذاری خود را بر اساس اولویت شماره گذاری کنید. </label>
                                                                    <select class="form-control" id="investmentmethod_id" name="investmentmethod_id" >
                                                                        <option disabled selected>یک گزینه انتخاب کنید</option>
                                                                        <option value="1" {{ old('investmentmodel_id',$investmentModel->investmentmethod_id) == 1 ? 'selected' : '' }}>سرمایه گذاری مستقیم</option>
                                                                        <option value="2" {{ old('investmentmodel_id',$investmentModel->investmentmethod_id) == 2 ? 'selected' : '' }}>سرمایه گذاری غیرمستقیم</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <input type="submit" value="بروزرسانی" class="btn btn-success" />
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
