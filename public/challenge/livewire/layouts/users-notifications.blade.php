<div class="container">
    <livewire:auth.profile.header/>


    <div style="margin-top: 7rem">
        <!-- Section: Table -->
        <section>



            <div class="card card-cascade narrower z-depth-0">

                <div class="row mt-2">
                    <div class="input-group d-flex justify-content-center">
                        <div class="form-outline d-flex">
                            <input type="search" id="form1" class="form-control text-right" placeholder="جستوجو" wire:model.debounce.1000="search" />
                        </div>
                    </div>
                </div>


                <div
                    class="view view-cascade gradient-card-header blue-gradient narrower py-2 mt-5 mx-4 mb-3 d-flex justify-content-between align-items-center">


                    <div>

                    </div>

                    <a href="" class="white-text mx-3">پیام های دریافتی</a>


                </div>

                <div class="px-4">

                    <div class="table-responsive">

                        <!--Table-->
                        <table class="table table-hover mb-0" style="direction: rtl !important;">

                            <!-- Table head -->
                            <thead>
                            <tr class="text-center">
                                <th class="th-lg "><a>متن پیام</a></th>
                                <th class="th-lg"><a>زمان دریافت</a></th>
                                <th class="th-lg"><a>اقدامات</a></th>
                            </tr>
                            </thead>
                            <!-- Table head -->

                            <!-- Table body -->
                            <tbody>
                            @foreach($notifications as $notification)
                                <tr class="text-center">
                                    <td>{!! $notification->body !!}</td>
                                    <td>{{$notification->created_at}}</td>

                                    <td class="d-flex justify-content-around">
                                        <button class="btn btn-sm btn-outline-danger ml-1" wire:click="delete({{$notification->id}})">حذف</button>
                                        <a href="{{route('user.notification.single',$notification->id)}}"><button class="btn btn-sm btn-outline-primary ml-1">مشاهده</button></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <!-- Table body -->

                        </table>
                        {{$notifications->render()}}
                    </div>

                    <hr class="my-0">


                </div>

            </div>
            @livewireScripts

        </section>
        <!--Section: Table-->
    </div>
</div>
