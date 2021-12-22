@extends('livewire.admin.layouts.bladeIndex')
@section('adminMain')
    <div class="container-fluid col-10">
        <div>
            <!-- Section: Table -->
            <section>


                <div class="card card-cascade narrower z-depth-0">

                    <div
                        class="view view-cascade narrower py-2 mt-5 mx-4 mb-3 d-flex justify-content-around align-items-center"
                        style="background: rgb(25,19,149);background: linear-gradient(32deg, rgba(25,19,149,1) 0%, rgba(63,55,144,1) 51%, rgba(147,83,164,1) 100%);">

                        <div>

                        </div>

                        <a href="" class="white-text mx-3">جدول نظرات تایید شده</a>

                        <div>

                        </div>

                    </div>

                    <div class="px-4">

                        <div class="table-responsive">

                            <!--Table-->
                            <table class="table table-hover mb-0" style="direction: rtl !important;">

                                <!-- Table head -->
                                <thead>
                                <tr class="text-center">
                                    <th class="th-lg"><a>فرستنده</a></th>
                                    <th class="th-lg"><a>پیام</a></th>
                                    <th class="th-lg"><a></a></th>
                                    <th class="th-lg "><a>اقدامات</a></th>
                                </tr>
                                </thead>
                                <!-- Table head -->

                                <!-- Table body -->
                                <tbody>
                                @foreach($comments as $comment)
                                    <tr>
                                        <td>{{\App\User::firstWhere('id',$comment->user_id)->email}}</td>
                                        <td>{{Str::limit($comment->body,50)}}</td>
                                        <td>
                                        <td class="d-flex justify-content-around">
                                            @can('delete_comments')
                                            <form action="{{route('delete.comments',$comment->id)}}" method="POST">
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
                                {{ $comments->links() }}
                            </div>
                        </div>

                        <hr class="my-0">


                    </div>

                </div>

            </section>
            <!--Section: Table-->
        </div>

    </div>

@endsection
