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
                                                        <form class="row" method="POST" action="/portal/investmentmodel" >
                                                            {{csrf_field()}}
                                                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                                <div class="form-group">
                                                                    <label for="familiaritymodel_id">میزان آشنایی شما با مدلهای سرمایه گذاری بر روی استارتاپ ها تا چه اندازه است ؟</label>
                                                                    <select class="form-control" id="familiaritymodel_id" name="familiaritymodel_id">
                                                                        <option disabled selected>یک گزینه انتخاب کنید</option>
                                                                        <option value="1">کاملا آشنا هستم</option>
                                                                        <option value="2">تا حدی اطلاع دارم</option>
                                                                        <option value="3">هیچ اطلاعاتی در این زمینه ندارم</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="investmentmodel_id">کدامیک از مدل های سرمایه گذاری زیر برای شما امکان پذیر است ؟</label>
                                                                    <select class="form-control" id="investmentmodel_id" name="investmentmodel_id[]" multiple>
                                                                        <option value="1">سرمایه گذاری جسورانه</option>
                                                                        <option value="2">مشارکت در توسعه و فروش محصولات</option>
                                                                        <option value="3">دریافت سهام از استارتاپ توسعه یافته </option>
                                                                        <option value="4">سرمایه گذاری عام المنفعه </option>
                                                                    </select>
                                                                </div>





                                                                <p class="mt-5 border-top pt-1">اگر تمایلی به آشنایی با انواع مدل های سرمایه گذاری بین المللی دارید <a href="" data-toggle="modal" data-target="#exampleModal">اینجا</a> کلیک کنید</p>
                                                                <!-- Modal -->
                                                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                ...
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="investmentmethod_id">روش سرمایه گذاری خود را بر اساس اولویت شماره گذاری کنید. </label>
                                                                    <select class="form-control" id="investmentmethod_id" name="investmentmethod_id" >
                                                                        <option disabled selected>یک گزینه انتخاب کنید</option>
                                                                        <option value="1">سرمایه گذاری مستقیم</option>
                                                                        <option value="2">سرمایه گذاری غیرمستقیم</option>
                                                                    </select>
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
