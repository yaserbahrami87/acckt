<div class="container-fluid col-10">
    <div>
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
                        @can('create_permission')
                        <a href="{{route('create.backend.permission')}}">
                            <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i
                                    class="fas fa-plus"></i></button>
                        </a>
                        @endcan
                    </div>

                    <a href="" class="white-text mx-3">جدول سطوح دسترسی کاربران شتابدهنده</a>


                </div>

                <div class="px-4">

                    <div class="table-responsive">

                        <!--Table-->
                        <table class="table table-hover mb-0" style="direction: rtl !important;">

                            <!-- Table head -->
                            <thead>
                            <tr class="text-center">
                                <th class="th-lg "><a>نام</a></th>
                                <th class="th-lg"><a>کد</a></th>
                                <th class="th-lg"><a>توضیحات</a></th>
                                <th class="th-lg"><a></a></th>
                                <th class="th-lg"><a>اقدامات</a></th>
                            </tr>
                            </thead>
                            <!-- Table head -->

                            <!-- Table body -->
                            <tbody>
                            @foreach($permissions as $permission)
                                <tr class="text-center">
                                    <td>{{$permission->name}}</td>
                                    <td>{{$permission->code}}</td>
                                    <td>{{$permission->label}}</td>
                                    <td>
                                    <td class="d-flex justify-content-around">
                                        @can('edit_permission')
                                            <form action="{{route('edit.backend.permission',$permission->id)}}">
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-outline-orange ml-1">ویرایش
                                                </button>
                                            </form>
                                        @endcan
                                        @can('delete_permission')
                                            <form action="{{route('delete.backend.permission',$permission->id)}}"
                                                  method="POST">
                                                @csrf
                                                <button class="btn btn-sm btn-outline-danger ml-1" type="submit">حذف
                                                </button>
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
                            {{ $permissions->links() }}
                        </div>
                    </div>

                    <hr class="my-0">


                </div>

            </div>

        </section>
        <!--Section: Table-->
        @livewireScripts
    </div>

</div>

