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
@endsection
