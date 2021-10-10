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
                    <form class="row" method="POST" action="/panel/user/amountcapital/{{Auth::user()->id}}/update" >
                        {{csrf_field()}}
                        {{method_field('PATCH')}}
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <div class="form-group">
                                <label for="amountcapitals">میزان سرمایه ای که تمایل دارید برای یک کسب و کار نو سرمایه گذاری کنید چقدر است؟</label>
                                <select class="form-control" id="amountcapitals" name="amountcapitals_id">
                                    <option selected disabled>انتخاب کنید</option>
                                    <option @if(Auth::user()->amountcapitals_id==1) selected @endif value="1">کمتر از یک میلیارد تومان</option>
                                    <option @if(Auth::user()->amountcapitals_id==2) selected @endif value="2">بین یک تا دو میلیارد تومان</option>
                                    <option @if(Auth::user()->amountcapitals_id==3) selected @endif value="3">بیش از دو میلیارد تومان</option>
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
