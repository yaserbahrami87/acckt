@extends('livewire.auth.profile.company-users')
@section('styles')
    <link  href="{{asset('/css/profile-sidenav.css')}} " rel="stylesheet">
    <link rel="stylesheet" href="{{asset('js/sweetalert2/dist/sweetalert2.min.css')}}">
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
            <p class="mt-2 mr-2 ml-2" style="font-size: .8rem;font-weight: 500;color: #5472d3">حذف اکانت</p>
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
                            <form id="delete_account_form" method="POST" action="{{route('profile.user.delete.account.post')}}" style="font-size: .8rem">

                            @csrf
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group text-right">
                                            <label for="contact-Subject">دلیل حذف(بعد از ارسال درخواست دلایل شما توسط مدیریت برسی میگردد و پس از تایید اکانت شما حذف میگردد)</label>
                                            <textarea type="text" id="contact-Subject" rows="10" class="form-control  @error('deleted_reason') is-invalid @enderror" placeholder="دلیل حذف..." name="deleted_reason" value="{{ old('deleted_reason')}}">
                                            </textarea>
                                            @error('deleted_reason')
                                            <span class="invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            <!--Grid row-->
                                <div class="row d-flex justify-content-center">
                                    <span class="btn btn-md btn-primary" onclick="confirmAlert()">
                                        برای حذف اکانت کلیک کنید
                                    </span>
                                </div>

                            </form>


                            <div class="row">
                                <div class="mr-auto text-center text-md-right ">
                                    <button  class="btn btn-sm mt-3 ml-3 text-light font-weight-bold" style="background-color: #9e9e9e;font-size: .9rem" href="{{route('profile.user.inaformation')}}">انصراف</button>
                                </div>
                            </div>

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
    <script src="{{asset('js/sweetalert2/dist/sweetalert2.all.min.js')}}"></script>
    <script>
        function confirmAlert(){
            Swal.fire({
                title: '<strong>آیا برای <u>حذف اکانت</u> مطمئنید</strong>',
                html: '<p>تا زمان تایید مدیریت اکانت حذف نمیگردد در صورت فعال بودن چالش های شما این امکان مقدور نمیباشد</p>',
                icon: 'warning',
                showCloseButton: false,
                showCancelButton: true,
                focusConfirm: false,
                confirmButtonText:
                    '<i class="fa fa-thumbs-up"></i> !مطمئنم',
                confirmButtonAriaLabel: 'Thumbs up, great!',
                cancelButtonText:
                    'انصراف',
                cancelButtonAriaLabel: 'Thumbs down'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete_account_form').submit();

                }
                else{
                    Swal.fire({
                        title: 'لغو توسط کاربر',
                        icon: 'error',
                        html:
                            ' ... درخواست شما لغو شد',
                        showConfirmButton: false,

                    });
                }
            })
        }
    </script>
@endsection


