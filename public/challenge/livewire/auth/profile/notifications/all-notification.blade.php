@extends('livewire.auth.profile.company-users')
@section('styles')
    <link  href="{{asset('/css/profile-sidenav.css')}} " rel="stylesheet">

@endsection
@section('main')
    <div>

        <div class="breadcrumb-dn font-weight-bold text-right  d-flex justify-content-end">
            <p class="mt-2 mr-2 ml-2" style="font-size: .8rem;font-weight: 500;color: #5472d3">پیام های دریافتی</p>
            <i class="fas fa-chevron-left mr-3 ml-2 mt-2" style="margin-top: 1.5vh;color: #757575"></i>
            <p class="mt-2 mr-2" style="font-size: .8rem;font-weight: 500;color: #757575">صندوق پیام ها</p>
            <i class="fas fa-chevron-left mr-2 ml-2 mt-2"  style="color: #757575"></i>
            <a href="{{route('homePage')}}"><i class="fas fa-home mr-2 ml-2 mt-2" style="font-size: 1rem;color: #524c00"></i></a>
            <i class="fas fa-grip-lines-vertical ml-1 mt-2" style="font-size: 1rem;color: #524c00"></i>
            <p class="mt-1 mr-2 ml-2" style="font-weight: 900;color: #524c00 !important;">پورتابل صاحبان ایده</p>

        </div>

        <div  dir="rtl">
            <!--Grid row-->
            <div class="row"  style="margin-left: 2%">


                <!--Grid column-->
                <div class="col-md-12 " >

                    <div class="card ml-3">
                        <div class="card-body " style="background-color: #fafafa;overflow-x:auto" >

                            <!--Grid column-->
                            <table class="table table-striped table-hover text-right" >
                                <thead >
                                <tr>
                                    <th>عنوان پیام</th>
                                    <th>زمان ارسال</th>
                                    <th>خلاصه پیام</th>
                                    <th>وضعیت</th>
                                    <th class="text-center">اقدامات</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($notifications as $notification)
                                    <tr>
                                        <td>{{$notification->title}}</td>
                                        <td>{{jdate($notification->created_at)->ago()}}</td>
                                        <td>{!! \Illuminate\Support\Str::limit($notification->body,50) !!}</td>

                                        <td class="font-weight-bold ">Testing</td>
                                        <td class="d-flex justify-content-around">
                                            <a href="{{route('profile.user.notifications.show',$notification->id)}}" class="btn btn-sm" style="background-color: #8f9bff;font-size: .75rem;font-weight: bold;">مشاهده</a>
                                            <a href="" class="btn btn-sm ml-5" style="background-color: #ff616f;font-size: .75rem;font-weight: bold; ">حذف</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>


                            <!--Grid column-->


                        </div>
                    </div>

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </div>
    </div>
@endsection
