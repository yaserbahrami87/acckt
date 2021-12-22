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
                        <a href="{{route('create.send.notification')}}">
                            <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i
                                    class="fas fa-plus mt-0"></i></button>
                        </a>
                    </div>
                    <a href="" class="white-text mx-3">پیام های ارسال شده</a>


                </div>

                <div class="px-4">

                    <div class="table-responsive">

                        <!--Table-->
                        <table class="table table-hover mb-0" style="direction: rtl !important;">

                            <!-- Table head -->
                            <thead>
                            <tr class="text-center">
                                <th class="th-lg"><a>عنوان</a></th>
                                <th class="th-lg"><a>مقصد</a></th>
                                <th class="th-lg"><a>متن</a></th>
                                <th class="th-lg "><a>اقدامات</a></th>
                            </tr>
                            </thead>
                            <!-- Table head -->

                            <!-- Table body -->
                            <tbody>
                            @foreach($notifications as $notification)
                                <tr class="text-center">
                                    <td>{{$notification->title}}</td>
                                    <td>{{$notification->destination}}</td>
                                    <td>{!! Str::limit($notification->body,50) !!}</td>

                                    <td class="d-flex">
                                        <form action="{{route('delete.send.notification',$notification->id)}}"
                                              method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-danger ml-1">حذف</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <!-- Table body -->

                        </table>
                        <!-- Table -->
                        <div class="card-footer">
                            {{ $notifications->links() }}
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



