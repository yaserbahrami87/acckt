@extends('panelUser.master.index')
@section('content')
    <div class="col-12">
        <div class="container" dir="rtl">
            <div class="card shadow-lg">
                <h5 class="card-header bg-info text-light">
                    <i class="bi bi-person-circle"></i>
                    میزان سرمایه
                </h5>
                <div class="card-body">
                    <form class="row" method="POST" action="/panel/amountcapital" >
                        {{csrf_field()}}

                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <div class="form-group">
                                <label for="amountcapitals">میزان سرمایه ای که تمایل دارید برای یک کسب و کار نو سرمایه گذاری کنید چقدر است؟</label>
                                <select class="form-control" id="amountcapitals" name="amountcapitals">
                                    <option selected disabled>انتخاب کنید</option>
                                    <option>کمتر از یک میلیارد تومان</option>
                                    <option>بین یک تا دو میلیارد تومان</option>
                                    <option>بیش از دو میلیارد تومان</option>
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
@endsection
