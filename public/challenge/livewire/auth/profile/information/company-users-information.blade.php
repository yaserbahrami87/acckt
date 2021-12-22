@extends('livewire.auth.profile.company-users')
@section('styles')
    <link href="{{asset('/css/profile-sidenav.css')}} " rel="stylesheet">

    <style>
        #contact-Subject {
            font-size: .75rem !important;
            font-weight: bold;
        }
    </style>
@endsection
@section('main')
    <div>

        <div class="breadcrumb-dn font-weight-bold text-right  d-flex justify-content-end">
            <p class="mt-2 mr-2 ml-2" style="font-size: .8rem;font-weight: 500;color: #5472d3">اطلاعات عمومی</p>
            <i class="fas fa-chevron-left mr-3 ml-2 mt-2" style="margin-top: 1.5vh;color: #757575"></i>
            <p class="mt-2 mr-2" style="font-size: .8rem;font-weight: 500;color: #757575">تنظیمات حساب کاربری</p>
            <i class="fas fa-chevron-left mr-2 ml-2 mt-2" style="color: #757575"></i>
            <a href="{{route('homePage')}}"><i class="fas fa-home mr-2 ml-2 mt-2"
                                               style="font-size: 1rem;color: #524c00"></i></a>
            <i class="fas fa-grip-lines-vertical ml-1 mt-2" style="font-size: 1rem;color: #524c00"></i>
            <p class="mt-1 mr-2 ml-2" style="font-weight: 900;color: #524c00 !important;">پورتابل صاحبان ایده</p>

        </div>
        <div dir="rtl">
            <!--Grid row-->
            <div class="row">


                <!--Grid column-->
                <div class="col-md-12 ">

                    <div class="card ml-5" style="border-radius: 5px">
                        <div class="card-body " style="background-color: #fafafa;border-radius: 5px">


                            <!--Section: Contact v.2-->

                            <!--Section heading-->

                            <div class="d-flex justify-content-start mb-3">
                                <img class=""
                                     src="{{auth('challenge')->user()->profile_image ?? 'https://yazdanbabazade.ir/dist/img/user-profile-thumbnail%20_1_.png'}}"
                                     style="width: 7vh;height: 7vh">
                                <div>
                                    <div class="btn-group-sm mr-3 mb-3 d-flex justify-content-start">
                                        <form id="upload_avatar_form"
                                              action="{{route('profile.company.avatar.update.post')}}" method="POST"
                                              enctype="multipart/form-data">
                                            @csrf
                                            <label for="select-files" class="btn btn-sm ml-50"
                                                   style="background-color: #aab6fe;font-size: .75rem;font-weight: bold; ">
                                                <span>ارسال تصویر جدید</span>
                                                <input id="select-files" name="avatar" type="file" hidden>
                                            </label>
                                        </form>

                                        <form action="{{route('profile.company.avatar.delete')}}" method="POST">
                                            @csrf
                                            <button class="btn btn-sm  ml-50"
                                                    style="background-color: #cfcfcf;font-size: .75rem;font-weight: bold;">
                                                بازنشانی
                                            </button>
                                        </form>

                                    </div>
                                    <p class="text-right mr-3 font-weight-bold"
                                       style="font-size: .75rem;color: #757575">
                                        فایل های مجاز: JPG، PNG و GIF. حداکثر اندازه مجاز: 800KB
                                    </p>
                                </div>
                            </div>
                            <hr>


                            <!--Grid column-->
                            <form method="POST" action="{{route('profile.company.inaformation.post')}}"
                                  style="font-size: .8rem">

                            @csrf
                            <!--Grid row-->
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group text-right">
                                            <label for="contact-Subject">نام شرکت</label>
                                            <input type="text" id="contact-Subject"
                                                   class="form-control  @error('name') is-invalid @enderror"
                                                   placeholder="نام شرکت" name="name" value="{{old('name') }}">
                                            @error('name')
                                            <span class="invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group text-right">
                                            <label for="contact-Subject">نوع شرکت</label>
                                            <select class="form-control @error('company_model') is-invalid @enderror"
                                                    name="company_model" id="contact-Subject">
                                                @foreach(config('companyModel.types') as $key => $name)
                                                    <option class="font-weight-bold"
                                                            value="{{ $key }}" {{ old('type') == $key ? 'selected' : '' }}>{{ $name }}</option>
                                                @endforeach
                                            </select>
                                            @error('company_model')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group text-right">
                                            <label for="contact-Subject">شناسه ملی شرکت</label>
                                            <input type="text" id="contact-Subject"
                                                   class="form-control  @error('national_id') is-invalid @enderror"
                                                   placeholder="شناسه ملی" name="national_id"
                                                   value="{{ old('national_id')}}">
                                            @error('national_id')
                                            <span class="invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group text-right">
                                            <label for="contact-Subject">شماره ثبت</label>
                                            <input type="text" id="contact-Subject"
                                                   class="form-control  @error('registration_number') is-invalid @enderror"
                                                   placeholder="شماره ثبت" name="registration_number"
                                                   value="{{ old('registration_number')}}">
                                            @error('registration_number')
                                            <span class="invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group text-right">
                                            <label for="contact-Subject">تاریخ ثبت شرکت</label>
                                            <input type="text" id="contact-Subject"
                                                   class="form-control  @error('established_time') is-invalid @enderror"
                                                   placeholder="تاریخ ثبت" name="established_time"
                                                   value="{{ old('established_time')}}">
                                            @error('established_time')
                                            <span class="invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mr-auto text-center text-md-right ">
                                        <button class="btn btn-primary btn-sm mt-3 ml-2 font-weight-bold"
                                                style="background-color: #69f0ae;font-size: .9rem" type="submit">ثبت
                                            تغییرات
                                        </button>
                                        <button class="btn btn-sm mt-3 ml-3 text-light font-weight-bold"
                                                style="background-color: #9e9e9e;font-size: .9rem">انصراف
                                        </button>

                                    </div>
                                </div>
                            </form>


                            <!--Grid column-->


                            <!--Section: Contact v.2-->

                        </div>
                    </div>

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </div>
    </div>
@endsection
@section('scripts')
    <script>
        document.getElementById("select-files").onchange = function () {
            document.getElementById("upload_avatar_form").submit();
        };

    </script>
@endsection

