@extends('sarmayeh.master.index')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                    <tr>

                        <th scope="col">نام</th>
                        <th scope="col">نام خانوادگی</th>
                        <th scope="col">شماره همراه</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $item)
                        <tr>
                            <td>
                                <a href="/admin/user/{{$item->id}}">{{$item->fname}}</a>
                            </td>
                            <td>
                                <a href="/admin/user/{{$item->id}}">{{$item->lname}}</a>
                            </td>
                            <td>
                                <a href="/admin/user/{{$item->id}}">{{$item->tel}}</a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
