@extends('livewire.auth.profile.company-users')
@section('styles')
    <link  href="{{asset('/css/profile-sidenav.css')}} " rel="stylesheet">

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
            <p class="mt-2 mr-2 ml-2" style="font-size: .8rem;font-weight: 500;color: #5472d3">تغییر رمز</p>
            <i class="fas fa-chevron-left mr-3 ml-2 mt-2" style="margin-top: 1.5vh;color: #757575"></i>
            <p class="mt-2 mr-2" style="font-size: .8rem;font-weight: 500;color: #757575">تنظیمات حساب کاربری</p>
            <i class="fas fa-chevron-left mr-2 ml-2 mt-2"  style="color: #757575"></i>
            <a href="{{route('homePage')}}"><i class="fas fa-home mr-2 ml-2 mt-2" style="font-size: 1rem;color: #524c00"></i></a>
            <i class="fas fa-grip-lines-vertical ml-1 mt-2" style="font-size: 1rem;color: #524c00"></i>
            <p class="mt-1 mr-2 ml-2" style="font-weight: 900;color: #524c00 !important;">پورتابل صاحبان ایده</p>

        </div>

        <div  dir="rtl">
            <!--Grid row-->
            <div class="row"  >


                <!--Grid column-->
                <div class="col-md-12 " >

                    <div class="card ml-5" style="border-radius: 5px">
                        <div class="card-body " style="background-color: #fafafa;border-radius: 5px">


                            <!--Section: Contact v.2-->

                            <!--Section heading-->
                            <!--Grid column-->
                            <form method="POST" action="{{route('profile.company.inaformation.password.post')}}" style="font-size: .8rem">

                            @csrf
                            <!--Grid row-->
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group text-right">
                                            <label for="exampleFormControlSelect2">رمز عبور قدیمی</label>
                                            <input type="password" id="contact-Subject" class="form-control  @error('before_pass') is-invalid @enderror" placeholder="رمز عبور قدیمی" name="before_pass" value="{{ old('before_pass')}}">
                                            @error('before_pass')
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
                                            <label for="exampleFormControlSelect2">رمز عبور جدید</label>
                                            <input type="password" id="contact-Subject" class="form-control  @error('password') is-invalid @enderror" placeholder="رمز عبور جدید" name="password" value="{{ old('password')}}">
                                            @error('password')
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
                                            <label for="exampleFormControlSelect2">تایید رمز عبور جدید</label>
                                            <input type="password" id="contact-Subject" class="form-control  @error('password_confirmation') is-invalid @enderror" placeholder="تایید رمز عبور جدید" name="password_confirmation" value="{{ old('password_confirmation')}}">
                                            @error('password_confirmation')
                                            <span class="invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mr-auto text-center text-md-right ">
                                        <button  class="btn btn-primary btn-sm mt-3 ml-2 font-weight-bold" style="background-color: #69f0ae;font-size: .9rem" type="submit">ثبت تغییرات</button>
                                        <button  class="btn btn-sm mt-3 ml-3 text-light font-weight-bold" style="background-color: #9e9e9e;font-size: .9rem" type="submit">انصراف</button>

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


