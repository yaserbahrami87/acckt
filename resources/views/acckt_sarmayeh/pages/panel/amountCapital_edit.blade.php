@extends('acckt_sarmayeh.layouts.panel')
@section('headerScript')
    <style>

    </style>
@endsection

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

                                                        <form id="new_wizard_form"  data-request-validate class="wizard-validation" method="POST" action="/portal/amountcapital/{{$amountcapital->id}}" enctype="multipart/form-data" >
                                                            {{csrf_field()}}
                                                            {{method_field('PATCH')}}
                                                            <!-- Step 1 -->
                                                            <h6>
                                                                <i class="step-icon"></i>
                                                                <span class="fonticon-wrap"></span>
                                                            </h6>
                                                            <!-- Step 1 end-->
                                                            <!-- body content step 1 -->
                                                            <fieldset>
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label for="capitalgroup_id">با توجه به گروه های تخصصی شتابدهنده اندیشه خوارزم علاقه شما به سرمایه گذاری در کدام گروه قرار می گیرد؟ </label>
                                                                            <select class="form-control" id="capitalgroup_id" name="capitalgroup_id">
                                                                                <option selected disabled>انتخاب کنید</option>
                                                                                <option value="1" {{ old('capitalgroup_id',$amountcapital->capitalgroup_id) == 1 ? 'selected' : '' }}>تجارت الکترونیک</option>
                                                                                <option value="2" {{ old('capitalgroup_id',$amountcapital->capitalgroup_id) == 2 ? 'selected' : '' }}>سلامت</option>
                                                                                <option value="3" {{ old('capitalgroup_id',$amountcapital->capitalgroup_id) == 3 ? 'selected' : '' }}>گردشگری</option>
                                                                                <option value="3" {{ old('capitalgroup_id',$amountcapital->capitalgroup_id) == 4 ? 'selected' : '' }}>مرتبط با IT</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label for="capitalcategory_id">سرمایه گذاری شما در کدام دسته بندی موضوعی خواهد بود؟ </label>
                                                                            <select class="form-control" id="capitalcategory_id" name="capitalcategory_id">
                                                                                <option selected disabled>انتخاب کنید</option>
                                                                                <option value="1" {{ old('capitalcategory_id',$amountcapital->capitalcategory_id) == 1 ? 'selected' : '' }}>کاملا جدید</option>
                                                                                <option value="2" {{ old('capitalcategory_id',$amountcapital->capitalcategory_id) == 2 ? 'selected' : '' }}>بازتولید با نگاه نوآورانه</option>
                                                                                <option value="3" {{ old('capitalcategory_id',$amountcapital->capitalcategory_id) == 3 ? 'selected' : '' }}>مهندسی معکوس</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </fieldset>

                                                            <!-- Step 2 -->
                                                            <h6>
                                                                <i class="step-icon"></i>
                                                                <span class="fonticon-wrap"></span>
                                                            </h6>
                                                            <!-- Step 2 end-->
                                                            <!-- body content step 2 -->
                                                            <fieldset>
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label for="trl">تزریق سرمایه مطابق با سطع آمادگی فناوری (<a href="" data-toggle="modal" data-target="#TRLModal">معیار های TRL</a>): </label>
                                                                            <!-- Modal -->
                                                                            <div class="modal fade" id="TRLModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                                <div class="modal-dialog modal-lg	">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h5 class="modal-title" id="exampleModalLabel">معیارهای TRL</h5>
                                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                <span aria-hidden="true">&times;</span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <img src="{{asset('/img/trl1.jpg')}}"  class="img-fluid"/>
                                                                                        </div>
                                                                                        <div class="modal-footer">
                                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <select class="form-control" id="trl" name="trl[]" multiple>
                                                                                <option selected disabled>انتخاب کنید</option>
                                                                                <option value="1" {{ old('trl',$amountcapital->trl) == 1 ? 'selected' : '' }}>TRL1</option>
                                                                                <option value="2" {{ old('trl',$amountcapital->trl) == 2 ? 'selected' : '' }}>TRL2</option>
                                                                                <option value="3" {{ old('trl',$amountcapital->trl) == 3 ? 'selected' : '' }}>TRL3</option>
                                                                                <option value="4" {{ old('trl',$amountcapital->trl) == 4 ? 'selected' : '' }}>TRL4</option>
                                                                                <option value="5" {{ old('trl',$amountcapital->trl) == 5 ? 'selected' : '' }}>TRL5</option>
                                                                                <option value="6" {{ old('trl',$amountcapital->trl) == 6 ? 'selected' : '' }}>TRL6</option>
                                                                                <option value="7" {{ old('trl',$amountcapital->trl) == 7 ? 'selected' : '' }}>TRL7</option>
                                                                                <option value="8" {{ old('trl',$amountcapital->trl) == 8 ? 'selected' : '' }}>TRL8</option>
                                                                                <option value="9" {{ old('trl',$amountcapital->trl) == 9 ? 'selected' : '' }}>TRL9</option>
                                                                            </select>
                                                                        </div>

                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label for="amountcapitals">میزان سرمایه ای که تمایل دارید برای یک کسب و کار نو سرمایه گذاری کنید چقدر است؟</label>
                                                                            <select class="form-control" id="amountcapitals" name="amountcapitals_id">
                                                                                <option selected disabled>انتخاب کنید</option>
                                                                                <option {{ old('amountcapitals_id',$amountcapital->amountcapitals_id) == 1 ? 'selected' : '' }} value="1">کمتر از 500 میلیون تومان </option>
                                                                                <option {{ old('amountcapitals_id',$amountcapital->amountcapitals_id) == 2 ? 'selected' : '' }} value="2">کمتر از 1 میلیارد تومان </option>
                                                                                <option {{ old('amountcapitals_id',$amountcapital->amountcapitals_id) == 3 ? 'selected' : '' }} value="3">بین یک تا دو میلیارد تومان</option>
                                                                                <option {{ old('amountcapitals_id',$amountcapital->amountcapitals_id) == 4 ? 'selected' : '' }} value="4">بیش از دو میلیارد تومان</option>
                                                                            </select>
                                                                            <div class="custom-control custom-checkbox" id="div_amount_Verify" style="display: none">
                                                                                <input type="checkbox" class="custom-control-input" id="amount_Verify" name="amount_Verify"  />
                                                                                <label class="custom-control-label" for="amount_Verify">امکان ارائه تضامین مالی وجود دارد </label>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="statute">در صورت سرمایه گذاری بخش حقوقی (شرکت / موسسه حقوقی ) اساسنامه شرکت پیوست گردد</label>
                                                                                <input type="file" class="form-control-file" id="statute" name="statute" />
                                                                            </div>
                                                                            @if(!is_null($amountcapital->statute)||$amountcapital->statute!="")
                                                                                <a href="{{asset('/documents/users/sarmayeh/'.$amountcapital->statute)}}">دانلود</a>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </fieldset>

                                                            <!-- Step 3 -->
                                                            <h6>
                                                                <i class="step-icon"></i>
                                                                <span class="fonticon-wrap"></span>
                                                            </h6>
                                                            <!-- Step 3 end-->
                                                            <!-- body content step 3 -->
                                                            <fieldset>
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label for="description">شرح انتظارات سرمایه گذاری: </label>
                                                                            <textarea class="form-control" id="description" rows="3" name="description">{{ old('description',$amountcapital->description)}}</textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label for="description_startup">آیا تاکنون در استارتاپ ها سرمایه گذاری کرده اید ؟(در صورت وجود نام ببرید)</label>
                                                                            <textarea class="form-control" id="description_startup" name="description_startup"  rows="3">{{ old('description_startup',$amountcapital->description_startup)}}</textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <label for="injectioncapital_id">سرمایه مدنظر برای تزریق به چه صورت است؟ </label>
                                                                            <select class="form-control" id="injectioncapital_id" name="injectioncapital_id">
                                                                                <option selected disabled>انتخاب کنید</option>
                                                                                <option value="1" {{ old('injectioncapital_id',$amountcapital->injectioncapital_id) == 1 ? 'selected' : '' }}>نقدی</option>
                                                                                <option value="2" {{ old('injectioncapital_id',$amountcapital->injectioncapital_id) == 2 ? 'selected' : '' }}>اعتباری</option>
                                                                                <option value="3" {{ old('injectioncapital_id',$amountcapital->injectioncapital_id) == 3 ? 'selected' : '' }}>امکانات و تجهیزات</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </fieldset>

                                                            <!-- Step 4 -->
                                                            <h6>
                                                                <i class="step-icon"></i>
                                                                <span class="fonticon-wrap"></span>
                                                            </h6>
                                                            <!-- Step 4 end-->
                                                            <!-- body content step 4 -->
                                                            <fieldset>
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label for="outstanding_investment">ویژگی بارز سرمایه گذاری شما چیست ؟ ( چه چیزی شما را از سایر سرمایه گذاران رقیب متمایز می کند )</label>
                                                                            <textarea class="form-control" id="outstanding_investment"  name="outstanding_investment" rows="3">{{ old('outstanding_investment',$amountcapital->outstanding_investment)}}</textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label for="request">درخواست شما از شتابدهنده جهت تسهیل سرمایه گذاری چیست؟</label>
                                                                            <textarea class="form-control" id="request" rows="3" name="request">{{ old('request',$amountcapital->request)}}</textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </fieldset>
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

@section('footerScript')
    <script>
        $("#amountcapitals").change(function()
        {
            if($(this).val()==3 || $(this).val()==4)
            {
                $("#div_amount_Verify").show();
            }
            else
            {
                $("#div_amount_Verify").hide();
            }
        });
    </script>
@endsection
