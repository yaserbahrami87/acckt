<div class="container-fluid col-10">
    <!-- Section: Table -->
    <section>
        <div class="card card-cascade narrower z-depth-0">

            <div class="row mt-2">
                <div class="input-group d-flex justify-content-center">
                    <div class="form-outline d-flex">
                        <input type="search" id="form1" class="form-control text-right" placeholder="جستوجو"
                               wire:model.debounce.1000="search"/>
                    </div>
                </div>
            </div>

            <div
                class="view view-cascade narrower py-2 mt-5 mx-4 mb-3 d-flex justify-content-around align-items-center"
                style="background: rgb(25,19,149);background: linear-gradient(32deg, rgba(25,19,149,1) 0%, rgba(63,55,144,1) 51%, rgba(147,83,164,1) 100%);">
                @can('create_company')

                <div>
                    <a href="{{route('create.company.user')}}">
                        <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i
                                class="fas fas fa-user-plus mt-0"></i></button>
                    </a>
                </div>
                @endcan

                <a href="" class="white-text mx-3">جدول کاربران</a>


            </div>

            <div class="px-4">

                <div class="table-responsive">

                    <!--Table-->
                    <table class="table table-hover mb-0" style="direction: rtl !important;">

                        <!-- Table head -->
                        <thead>
                        <tr class="text-center">
                            <th class="th-lg font-weight-bold"><a>نام</a></th>
                            <th class="th-lg font-weight-bold"><a>ایمیل</a></th>
                            <th class="th-lg font-weight-bold"><a>وضعیت ایمیل</a></th>
                            <th class="th-lg font-weight-bold"><a></a></th>
                            <th class="th-lg font-weight-bold"><a>اقدامات</a></th>
                        </tr>
                        </thead>
                        <!-- Table head -->

                        <!-- Table body -->
                        <tbody>
                        @foreach($users as $user)
                            <tr class="text-center">
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                @if($user->is_activated)
                                    <td><span class="badge badge-success">فعال</span></td>
                                @else
                                    <td><span class="badge badge-danger">غیرفعال</span></td>
                                @endif
                                <td>
                                <td class="d-flex justify-content-around">
                                    @can('edit_comapny')
                                    <a href="{{route('edit.company.user',$user->id)}}">
                                        <button class="btn btn-sm btn-outline-orange ml-1">ویرایش</button>
                                    </a>
                                    @endcan
                                    @can('delete_company')
                                    <form action="{{route('delete.company.user',$user->id)}}" method="POST">
                                        @csrf
                                        <button class="btn btn-sm btn-outline-danger ml-1" type="submit">حذف</button>
                                    </form>
                                        @endcan
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <!-- Table body -->

                    </table>
                    <!-- Table -->
                    <div class="card-footer">
                        {{ $users->links() }}
                    </div>
                </div>


            </div>

        </div>
    </section>

</div>


