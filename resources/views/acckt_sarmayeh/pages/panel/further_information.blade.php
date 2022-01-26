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

                          <form method="POST" action="/portal/user/{{Auth::user()->id}}" >
                              {{csrf_field()}}
                              {{method_field('PATCH')}}
                            <div class="row">
                              <div class="col-12">
                                <div class="form-group">
                                  <div class="controls">
                                    <label>تاریخ تولد</label>
                                    <input type="text" id="birth_date" name="birth_date" value="{{old('birth_date',Auth::user())->birth_date}}" class="form-control birthdate-picker" required placeholder="تاریخ تولد" data-validation-required-message="وارد کردن تاریخ تولد الزامی است">
                                  </div>
                                </div>
                              </div>
                              <div class="col-12">
                                <div class="form-group">
                                  <div class="controls">
                                    <label>آدرس</label>
                                    <input type="text" id="address" name="address" class="form-control" placeholder="آدرس" value="{{old('address',Auth::user())->address}}" required data-validation-required-message="وارد کردن آدرس الزامی است">
                                  </div>
                                </div>
                              </div>
                              <div class="col-6">
                                <div class="form-group">
                                  <div class="controls">
                                    <label>تلفن ثابت</label>
                                    <input type="text" id="phone" name="phone" class="form-control text-left" required placeholder="شماره تلفن" value="{{old('phone',Auth::user())->phone}}" data-validation-required-message="وارد کردن شماره تلفن الزامی است" dir="ltr">
                                  </div>
                                </div>
                              </div>
                              <div class="col-6">
                                <div class="form-group">
                                  <label>وب‌سایت</label>
                                  <input type="text" id="site" name="site" class="form-control text-left" placeholder="آدرس وب سایت" value="{{old('site',Auth::user())->site}}" dir="ltr">
                                </div>
                              </div>
                              <div class="col-6">
                                <div class="form-group">
                                  <div class="controls">
                                    <label>دانشگاه</label>
                                    <input type="text" id="university" name="university" class="form-control" placeholder="دانشگاه" value="{{old('university',Auth::user())->university}}" required data-validation-required-message="وارد کردن دانشگاه الزامی است">
                                  </div>
                                </div>
                              </div>
                              <div class="col-6">
                                <div class="form-group">
                                  <div class="controls">
                                    <label>دانشکده</label>
                                    <input type="text" id="faculty" name="faculty" class="form-control" placeholder="دانشکده" value="{{old('faculty',Auth::user())->faculty}}" required data-validation-required-message="وارد کردن دانشکده الزامی است">
                                  </div>
                                </div>
                              </div>
                              <div class="col-6">
                                <div class="form-group">
                                  <div class="controls">
                                    <label>رشته تحصیلی</label>
                                    <input type="text" id="study_field" name="study_field" class="form-control" placeholder="رشته تحصیلی" value="{{old('study_field',Auth::user())->study_field}}" required data-validation-required-message="وارد کردن رشته تحصیلی الزامی است">
                                  </div>
                                </div>
                              </div>
                              <div class="col-6">
                                <div class="form-group">
                                  <div class="controls">
                                    <label>گرایش</label>
                                    <input type="text" id="major" name="major" class="form-control" placeholder="گرایش" value="{{old('major',Auth::user())->major}}" required data-validation-required-message="وارد کردن گرایش الزامی است">
                                  </div>
                                </div>
                              </div>
                              <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                <button type="submit" class="btn btn-primary glow mr-sm-1 mb-1">ذخیره تغییرات</button>
                                <button type="reset" class="btn btn-light mb-1">انصراف</button>
                              </div>
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

@section('footerScript')
<script type="text/javascript">
    // $(window).on('load', function() {
    //     $('#ModalCenter').modal('show');
    // });
</script>
@endsection
