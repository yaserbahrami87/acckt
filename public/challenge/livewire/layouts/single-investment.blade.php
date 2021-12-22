<div>
    <!-- Navbar -->
    <livewire:auth.profile.header/>

    <!-- Navbar -->
    <div class="container" style="margin-top: 7rem">
        <div style="margin-top: 7rem">
            <!-- Main Layout -->
            <main>

                <div class="container-fluid mt-md-0 mt-5 mb-5">

                    <!-- Grid row -->
                    <div class="row">

                        <!-- Grid column -->
                        <div class="col-md-12 px-lg-5">
                            <!-- Card -->
                            <div class="card pb-5 mx-md-3">
                                <div class="card-body">
                                    @foreach($investments as $investment)
                                    <div class="container">

                                        <!-- Section heading -->
                                        <h1 class="text-center h1 pt-4 mb-3">
                                           {{ $investment->title }}
                                        </h1>

                                        <!-- Grid row -->
                                        <div class="row pt-lg-5 pt-3">

                                            <!-- Grid column -->
                                            <div class="col-md-4 mb-3">
                                                <img src="{{$investment->image ?? 'https://mdbootstrap.com/img/Photos/Others/model1.jpg'}}" class="img-fluid z-depth-1">
                                            </div>
                                            <!-- Grid column -->

                                            <!-- Grid column -->
                                            <div class="col-md-7 ml-xl-5 text-right">
                                                {!! $investment->message !!}
                                            </div>

                                            <!-- Grid Column -->

                                        </div>
                                        <table class="table table-hover mb-0" style="direction: rtl !important;">

                                            <!-- Table head -->
                                            <thead>
                                            <tr class="text-center">
                                                <th class="th-lg "><a>مبلغ کل جمع اوری شده</a></th>
                                                <th class="th-lg "><a> کل ایده های ثبت شده</a></th>
                                                <th class="th-lg "><a>مبلغ متعهد شده</a></th>
                                                <th class="th-lg"><a>زمان دریافت</a></th>
                                                <th class="th-lg"><a>اقدامات</a></th>
                                            </tr>
                                            </thead>
                                            <!-- Table head -->

                                            <!-- Table body -->
                                            <tbody>
                                                <tr class="text-center">
                                                    <td>{{$investment->total_investments}}</td>
                                                    <td>{{$investment->idea_count}}</td>
                                                    <td>{{$investment->price}}</td>
                                                    <td>{{$investment->order_date}}</td>
                                                    <td class="d-flex justify-content-around">
                                                        <button class="btn btn-sm btn-outline-danger ml-1" wire:click="delete({{$investment->id}})">درخواست لغو</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!-- Table body -->

                                        </table>

                                    </div>

                                        <h6 class="text-right text-primary mr-5">{{jdate($investment->created_at)->format('%B %d، %Y')}}</h6>
                                </div>
                                <!-- Card -->
                            </div>
                            <!-- Grid column -->

                        </div>
                        <!-- Grid row -->
                    </div>
                    @endforeach
                </div>
            </main>
            <!-- Main Layout -->
        </div>
        @livewireScripts

    </div>
</div>

