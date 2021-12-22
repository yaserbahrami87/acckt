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
                <p class="mt-2 mr-2 ml-2" style="font-size: .8rem;font-weight: 500;color: #5472d3">اطلاعات تکمیلی</p>
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
                                <form method="POST" action="{{route('profile.user.inaformation.plus.post')}}" style="font-size: .8rem">

                                @csrf
                                <!--Grid row-->
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group text-right">
                                                <label for="exampleFormControlSelect2">تاریخ تولد</label>
                                                <input type="text" id="contact-Subject" class="form-control  @error('birthday') is-invalid @enderror" placeholder="تاریخ تولد" name="birthday" value="{{ old('birthday')}}">
                                                @error('birthday')
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
                                                <label for="exampleFormControlSelect2">آدرس</label>
                                                <input type="text" id="contact-Subject" class="form-control  @error('address') is-invalid @enderror" placeholder="آدرس..." name="address" value="{{ old('address')}}">
                                                @error('address')
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
                                                <label for="exampleFormControlSelect2">تلفن ثابت</label>
                                                <input type="text" id="contact-Subject" class="form-control  @error('stable_phone_number') is-invalid @enderror" placeholder="تلفن ثابت..." name="stable_phone_number" value="{{ old('stable_phone_number')}}">
                                                @error('stable_phone_number')
                                                <span class="invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group text-right">
                                                <label for="exampleFormControlSelect2">تلفن همراه</label>
                                                <input type="text" id="contact-Subject" class="form-control  @error('phone_number') is-invalid @enderror" placeholder="تلفن همراه..." name="phone_number" value="{{ old('phone_number')}}">
                                                @error('phone_number')
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
                                                <label for="exampleFormControlSelect2">استان</label>
                                                <input  type="text" id="contact-Subject" class="form-control  @error('state') is-invalid @enderror" placeholder="استان" name="state" value="{{old('state') }}">
                                                @error('state')
                                                <span class="invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group text-right">
                                                <label for="exampleFormControlSelect2">شهر</label>
                                                <input type="text" id="contact-Subject" class="form-control  @error('city') is-invalid @enderror" placeholder="شهر" name="city" value="{{old('city')}}">
                                                @error('city')
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
                                                <label for="exampleFormControlSelect2">دانشگاه</label>
                                                <input type="text" id="contact-Subject" class="form-control  @error('university') is-invalid @enderror" placeholder="دانشگاه..." name="university" value="{{ old('university')}}">
                                                @error('university')
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
                                                <label for="exampleFormControlSelect2">رشته تحصیلی</label>
                                                <input type="text" id="contact-Subject" class="form-control  @error('field_of_study') is-invalid @enderror" placeholder="رشته تحصیلی..." name="field_of_study" value="{{ old('field_of_study')}}">
                                                @error('field_of_study')
                                                <span class="invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group text-right">
                                                <label for="exampleFormControlSelect2">گرایش</label>
                                                <input type="text" id="contact-Subject" class="form-control  @error('orientation') is-invalid @enderror" placeholder="گرایش..." name="orientation" value="{{ old('orientation')}}">
                                                @error('orientation')
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
                                                <label for="exampleFormControlSelect2">بیوگرافی</label>
                                                <textarea id="contact-Subject" class="form-control  @error('about') is-invalid @enderror" placeholder="اطلاعات بیوگرافی خود را وارد کنید..." name="about" value="{{ old('about')}}" rows="5"></textarea>
                                                @error('about')
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
                                            <button  class="btn btn-sm mt-3 ml-3 text-light font-weight-bold" style="background-color: #9e9e9e;font-size: .9rem" >انصراف</button>

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
