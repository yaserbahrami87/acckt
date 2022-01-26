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
@endsection
