@extends('livewire.admin.layouts.bladeIndex')
@section('adminMain')
    <style>
        li.list-group-item > ul.list-group {
            margin-top: 10px;
        }
    </style>
    <div class="container-fluid col-10">
        <div>
            <!-- Section: Table -->
            <section>


                <div class="card card-cascade narrower z-depth-0">

                    <div
                        class="view view-cascade narrower py-2 mt-5 mx-4 mb-3 d-flex justify-content-around align-items-center"
                        style="background: rgb(25,19,149);background: linear-gradient(32deg, rgba(25,19,149,1) 0%, rgba(63,55,144,1) 51%, rgba(147,83,164,1) 100%);">

                        <div>
                            @can('create_category')
                            <a href="{{route('admin.category.create')}}" class="btn btn-outline-white btn-rounded btn-sm px-2"><i
                                    class="fas fa-plus mt-0"></i></a>
                            @endcan
                        </div>

                        <a href="" class="white-text mx-3">جدول دسته بندی ها</a>

                    </div>

                    <div class="px-4">

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <!-- /.card-header -->
                                    <div class="card-body table-responsive p-0" style="direction: rtl !important;">
                                        @include('livewire.admin.layouts.category-group' , ['categories' => $categories])
                                    </div>

                                </div>
                                <!-- /.card -->
                            </div>
                        </div>
                        <div class="card-footer">
                            {{ $categories->links() }}
                        </div>

                        <hr class="my-0">


                    </div>
                </div>
            </section>
            <!--Section: Table-->
        </div>

    </div>

@endsection
