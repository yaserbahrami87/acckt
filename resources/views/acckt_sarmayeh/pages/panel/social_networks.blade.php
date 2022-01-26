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
                          <form method="POST" action="/portal/user/{{Auth::user()->id}}" >
                              {{csrf_field()}}
                              {{method_field('PATCH')}}
                            <div class="row">
                              <!--<div class="col-12">
                                <div class="form-group">
                                  <label>توییتر</label>
                                  <input type="text" class="form-control text-left" placeholder="افزودن لینک" value="https://www.twitter.com" dir="ltr">
                                </div>
                              </div>
                              <div class="col-12">
                                <div class="form-group">
                                  <label>فیسبوک</label>
                                  <input type="text" class="form-control text-left" placeholder="افزودن لینک" dir="ltr">
                                </div>
                              </div>
                              <div class="col-12">
                                <div class="form-group">
                                  <label>واتساپ</label>
                                  <input type="text" class="form-control text-left" placeholder="افزودن لینک" dir="ltr">
                                </div>
                              </div>-->
                              <div class="col-12">
                                <div class="form-group">
                                  <label>اینستاگرام</label>
                                  <input type="text" id="instagram" name="instagram" class="form-control text-left" required placeholder="افزودن لینک" value="{{old('instagram',Auth::user()->instagram)}}" dir="ltr" data-validation-required-message="وارد کردن آدرس اینستاگرام الزامی است">
                                </div>
                              </div>
                              <div class="col-12">
                                <div class="form-group">
                                  <label>لینکدین</label>
                                  <input type="text" id="linkedin" name="linkedin" class="form-control text-left" placeholder="افزودن لینک" value="{{old('linkedin',Auth::user()->linkedin)}}" dir="ltr">
                                </div>
                              </div>
                              <!--<div class="col-12">
                                <div class="form-group">
                                  <label>تلگرام</label>
                                  <input type="text" class="form-control text-left" placeholder="افزودن لینک" dir="ltr">
                                </div>
                              </div>-->
                              <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                <button type="submit" class="btn btn-primary glow mr-sm-1 mb-1">ذخیره تغییرات</button>
                                <button type="reset" class="btn btn-light mb-1">انصراف</button>
                              </div>
                            </div>
                          </form>
                        </div>
                        <div class="tab-pane fade" id="account-vertical-connections" role="tabpanel" aria-labelledby="account-pill-connections" aria-expanded="false">
                          <div class="row">
                            <div class="col-12 my-2">
                              <a href="javascript:%20void(0);" class="btn btn-info">اتصال به
                                <strong>توییتر</strong></a>
                            </div>
                            <hr>
                            <div class="col-12 my-2">
                              <button class=" btn btn-sm btn-light-secondary float-right">ویرایش</button>
                              <h6>شما به فیسبوک متصل هستید.</h6>
                              <p>Johndoe@gmail.com</p>
                            </div>
                            <hr>
                            <div class="col-12 my-2">
                              <a href="javascript:%20void(0);" class="btn btn-danger">اتصال به
                                <strong>گوگل</strong>
                              </a>
                            </div>
                            <hr>
                            <div class="col-12 my-2">
                              <button class=" btn btn-sm btn-light-secondary float-right">ویرایش</button>
                              <h6>شما به اینستاگرام متصل هستید.</h6>
                              <p>Johndoe@gmail.com</p>
                            </div>
                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                              <button type="submit" class="btn btn-primary glow mr-sm-1 mb-1">ذخیره تغییرات</button>
                              <button type="reset" class="btn btn-light mb-1">انصراف</button>
                            </div>
                          </div>
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
