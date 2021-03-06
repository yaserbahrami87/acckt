@extends('acckt_master.layouts.panel')

@section('content')
    <section id="icon-tabs">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">ثبت ایده</h4>
                    </div>
                    <div class="card-content mt-2">
                        <div class="card-body">
                            @if($errors->any())
                                <div class="col-12">
                                    <div class="alert alert-danger" role="alert">
                                        @foreach($errors->all() as $error)
                                            <li>{{$error}}</li>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                            <form method="POST" id="new_wizard_form"  data-request-validate class="wizard-validation" action="/portal_idea/idea" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <!-- Step 1 -->
                                <h6>
                                    <i class="step-icon"></i>
                                    <span class="fonticon-wrap"></span>
                                </h6>
                                <!-- Step 1 end-->
                                <!-- body content step 1 -->
                                <fieldset>
                                    <div class="row">
                                        <div class="col-12">
                                            <h6 class="py-50">سرپرست تیم</h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>باتوجه به گروه های تخصصی شتابدهنده اندیشه خوارزم ، ایده شما در کدام گروه قرار می گیرد؟</label>
                                                <select class="form-control" id="group" name="group">
                                                    <option value="1">تجارت الکترونیک</option>
                                                    <option value="2">سلامت</option>
                                                    <option value="3">گردشگری</option>
                                                    <option value="4">سایر حوزه های مرتبط با IT</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>ایده شما درکدام دسته بندی رایج ایده ها واقع شده است؟</label>
                                                <select class="form-control" id="category" name="category">
                                                    <option value="1">کاملا جدید</option>
                                                    <option value="2">بازتولید با نگاه نوآورانه</option>
                                                    <option value="3">مهندس معکوس</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="avatar">پوستر ایده</label>
                                                <input type="file" class="form-control-file" id="avatar" name="avatar" required />
                                                <small>فایل های مجاز: JPG، PNG و GIF. حداکثر اندازه مجاز: 600KB</small>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>وضعیت</label>
                                                <select class="form-control" id="status" name="status">
                                                    <option value="1">فعال</option>
                                                    <option value="2">مسدود شده</option>
                                                    <option value="3">بستن</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <!-- body content step 1 end-->
                                <!-- Step 2 -->
                                <h6>
                                    <i class="step-icon"></i>
                                    <span class="fonticon-wrap"></span>
                                </h6>
                                <!-- Step 2 end-->
                                <!-- body content of step 2 -->
                                <fieldset>
                                    <div class="row">
                                        <div class="col-12">
                                            <h6 class="py-50">مشخصات گروه کاری</h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>نام گروه</label>
                                                <input type="text" id="group_name" name="group_name" class="form-control required" placeholder="نام گروه را وارد کنید" value="">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="table-responsive">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4 class="card-title">اعضای گروه</h4>
                                                    </div>
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div data-repeater-list="contact">
                                                                <div class="row">
                                                                    <!--<div class="col-12 mb-2">
                                                                        <button class="btn btn-icon rounded-circle btn-primary" type="button" data-repeater-create="">
                                                                            <i class="bx bx-plus"></i>
                                                                        </button>
                                                                        <span class="ml-1 font-weight-bold text-primary">افزودن جدید</span>
                                                                    </div>-->
                                                                    <div class="col-md-2 col-2 mb-50">
                                                                        <label class="text-nowrap">نام و نام خانوادگی</label>
                                                                    </div>
                                                                    <div class="col-md-2 col-2 mb-50">
                                                                        <label class="text-nowrap">تاریخ تولد</label>
                                                                    </div>
                                                                    <div class="col-md-1 col-1 mb-50">
                                                                        <label class="text-nowrap">تلفن همراه</label>
                                                                    </div>
                                                                    <div class="col-md-2 col-2 mb-50">
                                                                        <label class="text-nowrap">پست الکترونیکی</label>
                                                                    </div>
                                                                    <div class="col-md-2 col-2 mb-50">
                                                                        <label class="text-nowrap">مدرک تحصیلی و رشته تحصیلی</label>
                                                                    </div>
                                                                    <div class="col-md-2 col-2 mb-50">
                                                                        <label class="text-nowrap">تخصص در تیم</label>
                                                                    </div>
                                                                </div>
                                                                <div class="row justify-content-between" data-repeater-item="">
                                                                    <div class="col-md-2 col-2 form-group">
                                                                        <input type="text" name="full_name[]" class="form-control required" placeholder="نام و نام خانوادگی">
                                                                    </div>
                                                                    <div class="col-md-2 col-2 form-group">
                                                                        <input type="text" name="birth_date[]" class="form-control birthdate-picker required" placeholder="تاریخ تولد">
                                                                    </div>
                                                                    <div class="col-md-2 col-2 form-group">
                                                                        <input type="text" name="mobile[]" class="form-control text-left required" placeholder="تلفن همراه" dir="ltr">
                                                                    </div>
                                                                    <div class="col-md-2 col-2 form-group">
                                                                        <input type="text" name="email[]" class="form-control text-left required" placeholder="پست الکترونیکی" dir="ltr">
                                                                    </div>
                                                                    <div class="col-md-2 col-2 form-group">
                                                                        <input type="text" name="degree_and_field_of_study[]" class="form-control text-left required" placeholder="مدرک تحصیلی و رشته تحصیلی" dir="ltr">
                                                                    </div>
                                                                    <div class="col-md-2 col-2 form-group">
                                                                        <input type="text" name="specialty[]" class="form-control text-left" placeholder="تخصص در تیم" dir="ltr">
                                                                    </div>
                                                                    <!--<div class="col-md-1 col-1 form-group">
                                                                        <button class="btn btn-icon btn-danger rounded-circle" type="button" data-repeater-delete="">
                                                                            <i class="bx bx-x"></i>
                                                                        </button>
                                                                    </div>-->
                                                                </div>
                                                                <div class="row justify-content-between" data-repeater-item="">
                                                                    <div class="col-md-2 col-2 form-group d-flex align-items-center">
                                                                        <input type="text" name="full_name[]" class="form-control" placeholder="نام و نام خانوادگی">
                                                                    </div>
                                                                    <div class="col-md-2 col-2 form-group">
                                                                        <input type="text" name="birth_date[]" class="form-control birthdate-picker" placeholder="تاریخ تولد">
                                                                    </div>
                                                                    <div class="col-md-2 col-2 form-group">
                                                                        <input type="text" name="mobile[]" class="form-control text-left" placeholder="تلفن همراه" dir="ltr">
                                                                    </div>
                                                                    <div class="col-md-2 col-2 form-group">
                                                                        <input type="text" name="email[]" class="form-control text-left" placeholder="پست الکترونیکی" dir="ltr">
                                                                    </div>
                                                                    <div class="col-md-2 col-2 form-group">
                                                                        <input type="text" name="degree_and_field_of_study[]" class="form-control text-left" placeholder="مدرک تحصیلی و رشته تحصیلی" dir="ltr">
                                                                    </div>
                                                                    <div class="col-md-2 col-2 form-group">
                                                                        <input type="text" name="specialty[]" class="form-control text-left" placeholder="تخصص در تیم" dir="ltr">
                                                                    </div>
                                                                    <!--<div class="col-md-1 col-1 form-group">
                                                                        <button class="btn btn-icon btn-danger rounded-circle" type="button" data-repeater-delete="">
                                                                            <i class="bx bx-x"></i>
                                                                        </button>
                                                                    </div>-->
                                                                </div>
                                                                <div class="row justify-content-between" data-repeater-item="">
                                                                    <div class="col-md-2 col-2 form-group d-flex align-items-center">
                                                                        <input type="text" name="full_name[]" class="form-control" placeholder="نام و نام خانوادگی">
                                                                    </div>
                                                                    <div class="col-md-2 col-2 form-group">
                                                                        <input type="text" name="birth_date[]" class="form-control birthdate-picker" placeholder="تاریخ تولد">
                                                                    </div>
                                                                    <div class="col-md-2 col-2 form-group">
                                                                        <input type="text" name="mobile[]" class="form-control text-left" placeholder="تلفن همراه" dir="ltr">
                                                                    </div>
                                                                    <div class="col-md-2 col-2 form-group">
                                                                        <input type="text" name="email[]" class="form-control text-left" placeholder="پست الکترونیکی" dir="ltr">
                                                                    </div>
                                                                    <div class="col-md-2 col-2 form-group">
                                                                        <input type="text" name="degree_and_field_of_study[]" class="form-control text-left" placeholder="مدرک تحصیلی و رشته تحصیلی" dir="ltr">
                                                                    </div>
                                                                    <div class="col-md-2 col-2 form-group">
                                                                        <input type="text" name="specialty[]" class="form-control text-left" placeholder="تخصص در تیم" dir="ltr">
                                                                    </div>
                                                                    <!--<div class="col-md-1 col-1 form-group">
                                                                        <button class="btn btn-icon btn-danger rounded-circle" type="button" data-repeater-delete="">
                                                                            <i class="bx bx-x"></i>
                                                                        </button>
                                                                    </div>-->
                                                                </div>
                                                                <div class="row justify-content-between" data-repeater-item="">
                                                                    <div class="col-md-2 col-2 form-group d-flex align-items-center">
                                                                        <input type="text" name="full_name[]" class="form-control" placeholder="نام و نام خانوادگی">
                                                                    </div>
                                                                    <div class="col-md-2 col-2 form-group">
                                                                        <input type="text" name="birth_date[]" class="form-control birthdate-picker" placeholder="تاریخ تولد">
                                                                    </div>
                                                                    <div class="col-md-2 col-2 form-group">
                                                                        <input type="text" name="mobile[]" class="form-control text-left" placeholder="تلفن همراه" dir="ltr">
                                                                    </div>
                                                                    <div class="col-md-2 col-2 form-group">
                                                                        <input type="text" name="email[]" class="form-control text-left" placeholder="پست الکترونیکی" dir="ltr">
                                                                    </div>
                                                                    <div class="col-md-2 col-2 form-group">
                                                                        <input type="text" name="degree_and_field_of_study[]" class="form-control text-left" placeholder="مدرک تحصیلی و رشته تحصیلی" dir="ltr">
                                                                    </div>
                                                                    <div class="col-md-2 col-2 form-group">
                                                                        <input type="text" name="specialty[]" class="form-control text-left" placeholder="تخصص در تیم" dir="ltr">
                                                                    </div>
                                                                    <!--<div class="col-md-1 col-1 form-group">
                                                                        <button class="btn btn-icon btn-danger rounded-circle" type="button" data-repeater-delete="">
                                                                            <i class="bx bx-x"></i>
                                                                        </button>
                                                                    </div>-->
                                                                </div>
                                                                <div class="row justify-content-between" data-repeater-item="">
                                                                    <div class="col-md-2 col-2 form-group d-flex align-items-center">
                                                                        <input type="text" name="full_name[]" class="form-control" placeholder="نام و نام خانوادگی">
                                                                    </div>
                                                                    <div class="col-md-2 col-2 form-group">
                                                                        <input type="text" name="birth_date[]" class="form-control birthdate-picker" placeholder="تاریخ تولد">
                                                                    </div>
                                                                    <div class="col-md-2 col-2 form-group">
                                                                        <input type="text" name="mobile[]" class="form-control text-left" placeholder="تلفن همراه" dir="ltr">
                                                                    </div>
                                                                    <div class="col-md-2 col-2 form-group">
                                                                        <input type="text" name="email[]" class="form-control text-left" placeholder="پست الکترونیکی" dir="ltr">
                                                                    </div>
                                                                    <div class="col-md-2 col-2 form-group">
                                                                        <input type="text" name="degree_and_field_of_study[]" class="form-control text-left" placeholder="مدرک تحصیلی و رشته تحصیلی" dir="ltr">
                                                                    </div>
                                                                    <div class="col-md-2 col-2 form-group">
                                                                        <input type="text" name="specialty[]" class="form-control text-left" placeholder="تخصص در تیم" dir="ltr">
                                                                    </div>
                                                                    <!--<div class="col-md-1 col-1 form-group">
                                                                        <button class="btn btn-icon btn-danger rounded-circle" type="button" data-repeater-delete="">
                                                                            <i class="bx bx-x"></i>
                                                                        </button>
                                                                    </div>-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <!-- body content of step 2 end-->
                                <!-- Step 3 -->
                                <h6>
                                    <i class="step-icon"></i>
                                    <span class="fonticon-wrap"></span>
                                </h6>
                                <!-- Step 3 end-->
                                <!-- body content of Step 3 -->
                                <fieldset>
                                    <div class="row">
                                        <div class="col-12">
                                            <h6 class="py-50">مشخصات ایده</h6>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label>عنوان ایده</label>
                                                    <input type="text" id="title" name="title" class="form-control text-left required" placeholder="عنوان ایده" value="" dir="ltr">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>شرح ایده ( مختصر ، دقیق ، صریح):</label>
                                                <textarea rows="4" id="description" name="description" class="form-control required"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label>آیا ایده شما بر گرفته از موارد مشابهی است ؟ (در صورت وجود نام ببرید)</label>
                                                <input type="text" id="similar_idea" name="similar_idea" class="form-control text-left required" placeholder="" value="" dir="ltr">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label>ایده شما در چه مرحله است؟</label>
                                                    <select class="form-control" id="level" name="level">
                                                        <option value="1">ظهور</option>
                                                        <option value="2">پردازش اولیه</option>
                                                        <option value="3">رشد یافته (بلوغ)</option>
                                                    </select>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label>میزان سرمایه ای مورد نیاز برای شروع ایده چقدر است؟</label>
                                                    <select class="form-control" id="amountcapitals" name="amountcapitals_id">
                                                        <option selected disabled>انتخاب کنید</option>
                                                        <option value="1">کمتر از یک میلیارد تومان</option>
                                                        <option value="2">بین یک تا دو میلیارد تومان</option>
                                                        <option value="3">بیش از دو میلیارد تومان</option>
                                                    </select>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form-group">
                                                <label>ویژگی مشخص ایده شما چیست ؟ (چه چیزی شما را از رقبا متمایز می کند؟)</label>
                                                <textarea rows="4" id="idea_property" name="idea_property" class="form-control required"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label>درخواست شما از شتابدهنده چیست؟</label>
                                                <textarea rows="4" id="your_request" name="your_request" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <!-- body content of Step 3 end-->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

