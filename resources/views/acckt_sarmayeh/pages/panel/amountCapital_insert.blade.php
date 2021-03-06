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


                                                        <form  id="new_wizard_form"  data-request-validate class="wizard-validation" method="POST" action="/portal/amountcapital" enctype="multipart/form-data">
                                                            {{csrf_field()}}
                                                            <!-- Step 1 -->
                                                            <h6>
                                                                <i class="step-icon"></i>
                                                                <span class="fonticon-wrap"></span>
                                                            </h6>
                                                            <!-- Step 1 end-->
                                                            <!-- body content step 1 -->
                                                            <fieldset>
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label for="capitalgroup_id">???? ???????? ???? ???????? ?????? ?????????? ?????????????????? ???????????? ???????????? ?????????? ?????? ???? ???????????? ?????????? ???? ???????? ???????? ???????? ???? ?????????? <span class="text-danger">*</span> </label>
                                                                            <select class="form-control" id="capitalgroup_id" name="capitalgroup_id" required>
                                                                                <option selected disabled>???????????? ????????</option>
                                                                                <option value="1" {{ old('capitalgroup_id') == 1 ? 'selected' : '' }}>?????????? ??????????????????</option>
                                                                                <option value="2" {{ old('capitalgroup_id') == 2 ? 'selected' : '' }}>??????????</option>
                                                                                <option value="3" {{ old('capitalgroup_id') == 3 ? 'selected' : '' }}>??????????????</option>
                                                                                <option value="3" {{ old('capitalgroup_id') == 4 ? 'selected' : '' }}>?????????? ???? IT</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <p></p>

                                                                            <label for="capitalcategory_id">???????????? ?????????? ?????? ???? ???????? ???????? ???????? ???????????? ?????????? ???????? <span class="text-danger">*</span> </label>
                                                                            <select class="form-control" id="capitalcategory_id" name="capitalcategory_id" required>
                                                                                <option selected disabled>???????????? ????????</option>
                                                                                <option value="1" {{ old('capitalcategory_id') == 1 ? 'selected' : '' }}>?????????? ????????</option>
                                                                                <option value="2" {{ old('capitalcategory_id') == 2 ? 'selected' : '' }}>???????????????? ???? ???????? ????????????????</option>
                                                                                <option value="3" {{ old('capitalcategory_id') == 3 ? 'selected' : '' }}>???????????? ??????????</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                            <!-- body content step 1 end-->
                                                            <!-- Step 2 -->
                                                            <h6>
                                                                <i class="step-icon"></i>
                                                                <span class="fonticon-wrap"></span>
                                                            </h6>
                                                            <!-- Step 2 end-->
                                                            <!-- body content of step 2 -->
                                                            <fieldset>
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label for="trl">?????????? ???????????? ?????????? ???? ?????? ???????????? ???????????? (<a href="" data-toggle="modal" data-target="#TRLModal">?????????? ?????? TRL</a>): <span class="text-danger">*</span></label>
                                                                            <!-- Modal -->
                                                                            <div class="modal fade" id="TRLModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                                <div class="modal-dialog">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h5 class="modal-title" id="exampleModalLabel">???????????????? TRL</h5>
                                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                <span aria-hidden="true">&times;</span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <img src="{{asset('/img/trl1.jpg')}}"  class="img-fluid"/>
                                                                                        </div>
                                                                                        <div class="modal-footer">
                                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">????????</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <select class="form-control" id="trl" name="trl[]" multiple required>
                                                                                <option selected disabled>???????????? ????????</option>
                                                                                <option value="1" {{ old('trl') == 1 ? 'selected' : '' }}>TRL1</option>
                                                                                <option value="2" {{ old('trl') == 2 ? 'selected' : '' }}>TRL2</option>
                                                                                <option value="3" {{ old('trl') == 3 ? 'selected' : '' }}>TRL3</option>
                                                                                <option value="4" {{ old('trl') == 4 ? 'selected' : '' }}>TRL4</option>
                                                                                <option value="5" {{ old('trl') == 5 ? 'selected' : '' }}>TRL5</option>
                                                                                <option value="6" {{ old('trl') == 6 ? 'selected' : '' }}>TRL6</option>
                                                                                <option value="7" {{ old('trl') == 7 ? 'selected' : '' }}>TRL7</option>
                                                                                <option value="8" {{ old('trl') == 8 ? 'selected' : '' }}>TRL8</option>
                                                                                <option value="9" {{ old('trl') == 9 ? 'selected' : '' }}>TRL9</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label for="amountcapitals">?????????? ???????????? ???? ???? ?????????? ?????????? ???????? ???? ?????? ?? ?????? ???? ???????????? ?????????? ???????? ???????? ???????? <span class="text-danger">*</span></label>
                                                                            <select class="form-control" id="amountcapitals" name="amountcapitals_id" required>
                                                                                <option selected disabled>???????????? ????????</option>
                                                                                <option {{ old('amountcapitals_id') == 1 ? 'selected' : '' }} value="1">???????? ???? 500 ???????????? ?????????? </option>
                                                                                <option {{ old('amountcapitals_id') == 2 ? 'selected' : '' }} value="2">???????? ???? 1 ?????????????? ?????????? </option>
                                                                                <option {{ old('amountcapitals_id') == 3 ? 'selected' : '' }} value="3">?????? ???? ???? ???? ?????????????? ??????????</option>
                                                                                <option {{ old('amountcapitals_id') == 4 ? 'selected' : '' }} value="4">?????? ???? ???? ?????????????? ??????????</option>
                                                                            </select>
                                                                            <div class="custom-control custom-checkbox" id="div_amount_Verify" style="display: none">
                                                                                <input type="checkbox" class="custom-control-input" id="amount_Verify" name="amount_Verify"  />
                                                                                <label class="custom-control-label" for="amount_Verify">?????????? ?????????? ???????????? ???????? ???????? ???????? </label>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="statute">???? ???????? ???????????? ?????????? ?????? ?????????? (???????? / ?????????? ?????????? ) ???????????????? ???????? ?????????? ????????</label>
                                                                                <input type="file" class="form-control-file" id="statute" name="statute">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                            <!-- body content of step 2 end-->
                                                            <!-- Step 3 -->
                                                            <h6>
                                                                <i class="step-icon"></i>
                                                                <span class="fonticon-wrap"></span>
                                                            </h6>
                                                            <!-- Step 3 end-->
                                                            <!-- body content of Step 3 -->
                                                            <fieldset>
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label for="description">?????? ???????????????? ???????????? ??????????:<span class="text-danger">*</span> </label>
                                                                            <textarea class="form-control" id="description" rows="3" name="description" required>{{ old('description')}}</textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label for="description_startup">?????? ???????????? ???? ???????????????? ???? ???????????? ?????????? ???????? ?????? ??(???? ???????? ???????? ?????? ??????????)</label>
                                                                            <textarea class="form-control" id="description_startup" name="description_startup"  rows="3">{{ old('description_startup')}}</textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <label for="injectioncapital_id">???????????? ?????????? ???????? ?????????? ???? ???? ???????? ????????<span class="text-danger">*</span> </label>
                                                                            <select class="form-control" id="injectioncapital_id" name="injectioncapital_id" required>
                                                                                <option selected disabled>???????????? ????????</option>
                                                                                <option value="1" {{ old('injectioncapital_id') == 1 ? 'selected' : '' }}>????????</option>
                                                                                <option value="2" {{ old('injectioncapital_id') == 2 ? 'selected' : '' }}>??????????????</option>
                                                                                <option value="3" {{ old('injectioncapital_id') == 3 ? 'selected' : '' }}>?????????????? ?? ??????????????</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </fieldset>
                                                            <!-- body content of Step 3 end-->
                                                            <!-- Step 4 -->
                                                            <h6>
                                                                <i class="step-icon"></i>
                                                                <span class="fonticon-wrap"></span>
                                                            </h6>
                                                            <!-- Step 4 end-->
                                                            <!-- body content of Step 4 -->
                                                            <fieldset>
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label for="outstanding_investment">?????????? ???????? ???????????? ?????????? ?????? ???????? ?? ( ???? ???????? ?????? ???? ???? ???????? ???????????? ???????????? ???????? ???????????? ???? ?????? )</label>
                                                                            <textarea class="form-control" id="outstanding_investment"  name="outstanding_investment" rows="3">{{ old('outstanding_investment')}}</textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label for="request">?????????????? ?????? ???? ?????????????????? ?????? ?????????? ???????????? ?????????? ??????????</label>
                                                                            <textarea class="form-control" id="request" rows="3" name="request">{{ old('request')}}</textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </fieldset>
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
