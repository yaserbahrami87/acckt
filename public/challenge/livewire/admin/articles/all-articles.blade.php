<div>
    <style>
        #action {
            transition: all .2s ease-in-out;
        }

        #action:hover {
            transform: scale(1.1);
        }
    </style>
    <div>
        <!-- Section: Table -->


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
                class="view view-cascade narrower py-2 mt-5 mx-4 mb-3 d-flex justify-content-between align-items-center"
                style="background: rgb(25,19,149);background: linear-gradient(32deg, rgba(25,19,149,1) 0%, rgba(63,55,144,1) 51%, rgba(147,83,164,1) 100%);">


                <div>
                    @can('create_article')
                        <a href="{{route('admin.articles.create')}}">
                            <button type="button" class="btn btn-outline-white btn-sm px-2"><i
                                    class="fas fa-plus mt-0"></i></button>
                        </a>
                    @endcan


                </div>
                <a class="white-text mx-3">جدول کاربران</a>


            </div>

            <div class="px-4">

                <div class="table-responsive">

                    <!--Table-->
                    <table class="table table-hover mb-0 text-center" style="direction: rtl !important;">

                        <!-- Table head -->
                        <thead>
                        <tr>
                            <th style="font-weight: bold;font-style: italic">عنوان</th>
                            <th style="font-weight: bold;font-style: italic">متن</th>
                            <th style="font-weight: bold;font-style: italic">اقدامات</th>
                        </tr>
                        </thead>
                        <!-- Table head -->

                        <!-- Table body -->
                        <tbody>
                        @foreach($articles as $article)
                            <tr>
                                <td>{{$article->title}}</td>
                                <td>{!! Str::limit($article->body,50) !!}</td>

                                <td style="font-size: 1.3rem">
                                    @can('edit_article')
                                        <a href="{{route('admin.articles.edit',$article->id)}}" class="teal-text"
                                           data-toggle="tooltip" data-placement="bottom" title="ویرایش"><i id="action"
                                                                                                           class="fas fa-pencil-alt"></i></a>
                                    @endcan
                                    @can('delete_article')
                                        <a onclick="document.getElementById('delete_form').submit();" class="red-text"
                                           data-toggle="tooltip" data-placement="bottom" title="حذف"><i id="action"
                                                                                                        class="fas fa-times"></i></a>
                                        <form id="delete_form" action="{{route('admin.articles.delete',$article->id)}}"
                                              method="POST">
                                            @csrf
                                        </form>
                                    @endcan
                                </td>
                        @endforeach

                        </tbody>
                        <!-- Table body -->

                    </table>
                    <!-- Table -->
                    <div class="card-footer">
                        {{ $articles->links() }}
                    </div>
                </div>


            </div>

        </div>

        <!--Section: Table-->
    </div>

</div>

