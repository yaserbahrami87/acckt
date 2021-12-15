@extends('acckt_master.layouts.panel')
@section('headerScript')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <style>
        .users-list-table .card img
        {
            height: 200px;
        }
    </style>
@endsection
@section('content')

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-12 mb-2 mt-1">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h5 class="content-header-title float-left pr-1">لیست ایده ها</h5>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb p-0 mb-0">
                                    <li class="breadcrumb-item"><a href="/portal"><i class="bx bx-home-alt"></i></a></li>
                                    <li class="breadcrumb-item active"> لیست ایده ها</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body"><!-- users list start -->
                <section class="users-list-wrapper table-responsive">

                    <table class="table table-striped table-bordered">
                        <tr>

                            <th>سرمایه گذار</th>
                            <th>مبلغ پیشنهادی (تومان)</th>
                            <th>توضیحات</th>
                        </tr>
                        @foreach($demands as $item)
                            <tr>
                                <td>{{$item->lname}}</td>
                                <td>{{number_format($item->proposed_price)}}</td>
                                <td>{{$item->description}}</td>
                            </tr>
                        @endforeach
                    </table>
                </section>
                <!-- users list ends -->
            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection
