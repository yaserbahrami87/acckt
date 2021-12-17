@extends('acckt_sarmayeh.layouts.panel')
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
                            <h5 class="content-header-title float-left pr-1">لیست سرمایه ها</h5>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb p-0 mb-0">
                                    <li class="breadcrumb-item"><a href="/portal"><i class="bx bx-home-alt"></i></a></li>
                                    <li class="breadcrumb-item active"> لیست سرمایه ها</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body"><!-- users list start -->
                <section class="users-list-wrapper">
                    <div class="users-list-table">
                        <div class="row">
                            @if($amountcapitals->count() >0)
                                <div class="table-responsive">
                                    <table id="users-list-datatable" class="table">
                                        <thead>
                                        <tr>
                                            <th>ردیف</th>
                                            <th>گروه سرمایه گذاری</th>
                                            <th>ویرایش</th>
                                            <th>حذف</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($amountcapitals as $item)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>
                                                    <p>{{$item->capitalgroup}}</p>
                                                </td>
                                                <td>
                                                    <a href="/portal/amountcapital/{{$item->id}}/edit"><i class="bx bx-edit-alt"></i></a>
                                                </td>
                                                <td>
                                                    <form method="post" action="/portal/amountcapital/{{$item->id}}" onsubmit="return confirm('آیا از حذف سرمایه مطمئن هستید؟');">
                                                        {{ method_field('DELETE') }}
                                                        {{ csrf_field() }}
                                                        <button  class="btn btn-danger" type="submit">
                                                            <i class="bx bx-trash-alt"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>

                                    </table>
                                </div>

                            @else
                                <div class="col-12 alert alert-warning">
                                    در حال حاضر سرمایه ای وجود ندارد.
                                </div>
                            @endif
                            {{$amountcapitals->links()}}
                        </div>
                    </div>
                </section>
                <!-- users list ends -->
            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection
