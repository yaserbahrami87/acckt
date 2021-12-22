<div class="container">
    <div>
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


                    <a href="" class="white-text mx-3">جدول چالش های شتابدهنده</a>

                </div>

                <div class="px-4">

                    <div class="table-responsive">

                        <!--Table-->
                        <table class="table table-hover mb-0" style="direction: rtl !important;">

                            <!-- Table head -->
                            <thead>
                            <tr class="text-center">
                                <th class="th-lg"><a>عنوان</a></th>
                                <th class="th-lg"><a>متن</a></th>
                                <th class="th-lg"><a></a></th>
                                <th class="th-lg "><a>اقدامات</a></th>
                            </tr>
                            </thead>
                            <!-- Table head -->

                            <!-- Table body -->
                            <tbody>
                            @foreach($challenges as $challenge)
                                <tr class="text-center">
                                    <td>{{$challenge->title}}</td>
                                    <td>{!! Str::limit($challenge->body,50) !!}</td>

                                    <td>
                                    <td class="d-flex justify-content-around">
                                        <a href="{{route('admin.company.challenges.edit',$challenge->id)}}"><button type="submit" class="btn btn-sm btn-outline-orange ml-1">ویرایش</button></a>
                                        <button class="btn btn-sm btn-outline-danger ml-1" wire:click="delete({{$challenge->id}})">حذف</button>
                                    </td>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <!-- Table body -->

                        </table>
                        <!-- Table -->
                        <div class="card-footer">
                            {{ $challenges->links() }}
                        </div>
                    </div>

                    <hr class="my-0">


                </div>

            </div>

        </section>
        <!--Section: Table-->
    </div>
    @livewireScripts

</div>
