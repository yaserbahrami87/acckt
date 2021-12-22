    @extends('livewire.auth.profile.company-users')
    @section('styles')
        <link  href="{{asset('css/profile-sidenav.css')}} " rel="stylesheet">

        <link  href="{{asset('css/create-user-challenge.css')}} " rel="stylesheet">

    @endsection
    @section('main')
        <div>

            <div class="breadcrumb-dn font-weight-bold text-right  d-flex justify-content-end">
                <p class="mt-2 mr-2 ml-2" style="font-size: .8rem;font-weight: 500;color: #5472d3">ثبت چالش جدید</p>
                <i class="fas fa-chevron-left mr-3 ml-2 mt-2" style="margin-top: 1.5vh;color: #757575"></i>
                <p class="mt-2 mr-2" style="font-size: .8rem;font-weight: 500;color: #757575">تنظیمات حساب کاربری</p>
                <i class="fas fa-chevron-left mr-2 ml-2 mt-2"  style="color: #757575"></i>
                <a href="{{route('homePage')}}"><i class="fas fa-home mr-2 ml-2 mt-2" style="font-size: 1rem;color: #524c00"></i></a>
                <i class="fas fa-grip-lines-vertical ml-1 mt-2" style="font-size: 1rem;color: #524c00"></i>
                <p class="mt-1 mr-2 ml-2" style="font-weight: 900;color: #524c00 !important;">پورتابل صاحبان ایده</p>

            </div>

            <!-- multistep form -->
        </div>
        <div class="row ml-3">
            <div class="col-md-12 ">
                <form id="msform" action="{{route('create.company.challenge.post')}}" method="POST">
                    @csrf
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active text-dark font-weight-bold" style="font-size: 1rem"><i class="far fa-file"></i></li>
                        <li class="text-dark font-weight-bold" style="font-size: 1rem"><i class="fas fa-user-friends"></i></li>
                        <li class="text-dark font-weight-bold" style="font-size: 1rem"><i class="fas fa-home"></i></li>
                    </ul>
                    <!-- fieldsets -->
                    <fieldset dir="rtl">
                        <h2 class="fs-title">مرحله ی اول</h2>
                        <h3 class="fs-subtitle">مواردی که بعدا گفته میشود</h3>
                        <input type="text" class="font-weight-bold" name="title" placeholder="نام چالش"/>
                        <input type="text" class="font-weight-bold" name="main_category" placeholder="دسته بندی چالش"/>
                        <input type="text" class="font-weight-bold" name="phone" placeholder="شماره تماس"/>
                        <button type="button" name="next" class="next action-button" value="Next">بعدی</button>
                    </fieldset>
                    <fieldset dir="rtl">
                        <h2 class="fs-title">اطلاعات شرکت</h2>
                        <h3 class="fs-subtitle">اطلاعات سازمان منتشر کننده چالش</h3>
                        <input type="text" class="font-weight-bold" name="expired_time" placeholder="نام سرپرست"/>
                        <input type="text" class="font-weight-bold" name="company_name" placeholder="نام شرکت"/>
                        <button type="button" name="previous" class="previous action-button-previous" value="Previous">قبلی</button>
                        <button type="button" name="next" class="next action-button" value="Next">بعدی</button>
                    </fieldset>
                    <fieldset dir="rtl">
                        <h2 class="fs-title">انتشار چالش</h2>
                        <h3 class="fs-subtitle">مرحله ی اخر</h3>
                        <input type="text" class="font-weight-bold" name="starter_investment" placeholder="میزان سرمایه اولیه"/>
                        <input type="text" class="font-weight-bold" name="speciale" placeholder="موارد خاص"/>
                        <button type="button" name="previous" class="previous action-button-previous" value="Previous">قبلی</button>
                        <button type="submit" name="submit" class="submit action-button" value="Submit">ثبت</button>
                    </fieldset>
                </form>

            </div>
        </div>
    @endsection
    @section('scripts')

        <script src="{{asset('js/create-user-challenge.js')}}"></script>
    @endsection



