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

                <div>
                    <a href="{{route('create.user')}}">
                        <button type="submit" class="btn btn-outline-white btn-rounded btn-sm px-2"><i
                                class="fas fas fa-user-plus mt-0"></i></button>
                    </a>

                </div>

                <a href="" class="text-white text-center mx-3">جدول کاربران حذف شده</a>


            </div>

            <div class="px-4">

                <div class="table-responsive">

                    <!--Table-->
                    <table class="table table-hover mb-0" style="direction: rtl !important;">

                        <!-- Table head -->
                        <thead>
                        <tr class="text-center">
                            <th class="th-lg"><a>نام</a></th>
                            <th class="th-lg"><a>ایمیل</a></th>
                            <th class="th-lg "><a>وضعیت ایمیل</a></th>
                            <th class="th-lg"><a></a></th>
                            <th class="th-lg "><a>اقدامات</a></th>
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
                                    <a onclick="document.getElementById('delete_form').submit();"
                                       class="red-text" data-toggle="tooltip" data-placement="bottom"
                                       title="حذف"><i id="action" class="fas fa-times"></i>
                                    </a><i class=""></i>
                                    <form action="{{route('deleted.user.delete',$user->id)}}" method="POST" id="delete_form">
                                        @csrf
                                    </form>
                                    <a onclick="document.getElementById('restore_form').submit();"
                                       class="teal-text" data-toggle="tooltip" data-placement="bottom"
                                       title="بازگردانی"><i id="action" class="fas fa-redo"></i></a>
                                    <form action="{{route('deleted.user.restore',$user->id)}}" id="restore_form" method="POST">
                                        @csrf
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <!-- Table body -->

                    </table>
                    <div class="card-footer">
                        {{ $users->links() }}
                    </div>
                    <!-- Table -->

                </div>


            </div>

        </div>

    </section>
    @livewireScripts
</div>

