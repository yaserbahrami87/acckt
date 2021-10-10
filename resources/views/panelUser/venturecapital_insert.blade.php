@extends('panelUser.master.index')
@section('content')
    <div class="col-12">
        <div class="container" dir="rtl">
            <div class="card shadow-lg">
                <h5 class="card-header bg-info text-light">
                    <i class="bi bi-cash"></i>
                    سرمایه گذاری خطرپذیر
                </h5>
                <div class="card-body">
                    <form class="row" method="POST" action="/panel/user/venturecapital/{{Auth::user()->id}}/update" >
                        {{csrf_field()}}
                        {{method_field('PATCH')}}
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <div class="form-group">
                                <label for="amountcapitals" class="d-block">میزان آشنایی شما با شاخص های سرمایه گذاری خطرپذیر چقدر است ؟</label>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="investmentIndex1" name="investmentIndex_id" class="custom-control-input" value="1" @if(Auth::user()->investmentindex_id==1) checked @endif  />
                                    <label class="custom-control-label" for="investmentIndex1">کم</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="investmentIndex2" name="investmentIndex_id" class="custom-control-input" value="2" @if(Auth::user()->investmentindex_id==2) checked @endif />
                                    <label class="custom-control-label" for="investmentIndex2">متوسط</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="investmentIndex3" name="investmentIndex_id" class="custom-control-input" value="3" @if(Auth::user()->investmentindex_id==3) checked @endif />
                                    <label class="custom-control-label" for="investmentIndex3">زیاد</label>
                                </div>
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
