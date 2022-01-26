@extends('acckt_sarmayeh.layouts.panel')

@section('content')

                <section id="page-account-settings">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-body">
                                                <div class="tab-content">
                                                    <div role="tabpanel" class="tab-pane active" id="account-vertical-general" aria-labelledby="account-pill-general" aria-expanded="true">
                                                        @if($errors->any())
                                                            <div class="col-12">
                                                                <div class="alert alert-danger" role="alert">
                                                                    @foreach($errors->all() as $error)
                                                                        <li>{{$error}}</li>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        @endif
                                                        <h5> ثبت درخواست برای ایده {{$idea->group_name}}</h5>
                                                        <form class="row" method="post" action="/portal/demand" >
                                                            {{csrf_field()}}
                                                            <input type="hidden" value="{{$idea->id}}" name="idea_id" />
                                                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                                <div class="form-group">
                                                                    <label for="proposed_price">مبلغ سرمایه گذاری (تومان): <span class="text-danger">*</span></label>
                                                                    <input type="number" class="form-control" id="proposed_price" name="proposed_price" min="0"/>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="description">توضیحات</label>
                                                                    <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <input type="submit" value="ثبت" class="btn btn-success" />
                                                            </div>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

@endsection
