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
                                                        <form class="wizard-validation" method="POST" action="/portal/venturecapital/{{$venturecapital->id}}" id="new_wizard_form"  data-request-validate>
                                                            {{csrf_field()}}
                                                            {{method_field('PATCH')}}
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
                                                                            <label for="amountcapitals" class="d-block">کدامیک از گزینه های زیر در مورد سرمایه گذاری خطرپذیر صحیح است ؟</label>
                                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                                <input type="radio" id="investmentIndex1" name="venturecapital_id" class="custom-control-input" value="1"  {{ old('venturecapital_id',$venturecapital->venturecapital_id) == 1 ? 'checked' : '' }} />
                                                                                <label class="custom-control-label" for="investmentIndex1">. دوره بازگشت کوتاه مدت استو سودآوری مناسبی در زمان کوتاه خواهد داشت.</label>
                                                                            </div>
                                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                                <input type="radio" id="investmentIndex2" name="venturecapital_id" class="custom-control-input" value="2" {{ old('venturecapital_id',$venturecapital->venturecapital_id) == 2 ? 'checked' : '' }} />
                                                                                <label class="custom-control-label" for="investmentIndex2">دوره ی سرمایه گذاری بلندمدت است و سودآوری خوبی در کوتاه مدت خواهد داشت.</label>
                                                                            </div>
                                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                                <input type="radio" id="investmentIndex3" name="venturecapital_id" class="custom-control-input" value="3" {{ old('venturecapital_id',$venturecapital->venturecapital_id) == 3 ? 'checked' : '' }}  />
                                                                                <label class="custom-control-label" for="investmentIndex3">دوره سرمایه گذاری بلندمدت است و میزان سود متناسب با درصد ریسک می باشد.</label>
                                                                            </div>
                                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                                <input type="radio" id="investmentIndex4" name="venturecapital_id" class="custom-control-input" value="4" {{ old('venturecapital_id',$venturecapital->venturecapital_id) == 4 ? 'checked' : '' }}  />
                                                                                <label class="custom-control-label" for="investmentIndex4">گزینه ی الف و ج</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label for="amountcapitals" class="d-block">کدامیک از گزینه های زیر در مورد سرمایه گذاری خطرپذیر صحیح است ؟</label>
                                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                                <input type="radio" id="q2_1" name="q2" class="custom-control-input" value="1"  {{ old('q2',$venturecapital->q2) == 1 ? 'checked' : '' }} />
                                                                                <label class="custom-control-label" for="q2_1">. دوره بازگشت کوتاه مدت استو سودآوری مناسبی در زمان کوتاه خواهد داشت.</label>
                                                                            </div>
                                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                                <input type="radio" id="q2_2" name="q2" class="custom-control-input" value="2" {{ old('q2',$venturecapital->q2) == 2 ? 'checked' : '' }} />
                                                                                <label class="custom-control-label" for="q2_2">دوره ی سرمایه گذاری بلندمدت است و سودآوری خوبی در کوتاه مدت خواهد داشت.</label>
                                                                            </div>
                                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                                <input type="radio" id="q2_3" name="q2" class="custom-control-input" value="3" {{ old('q2',$venturecapital->q2) == 3 ? 'checked' : '' }}  />
                                                                                <label class="custom-control-label" for="q2_3">دوره سرمایه گذاری بلندمدت است و میزان سود متناسب با درصد ریسک می باشد.</label>
                                                                            </div>
                                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                                <input type="radio" id="q2_4" name="q2" class="custom-control-input" value="4" {{ old('q2',$venturecapital->q2) == 4 ? 'checked' : '' }}  />
                                                                                <label class="custom-control-label" for="q2_4">گزینه ی الف و ج</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label for="amountcapitals" class="d-block">کدامیک از گزینه های زیر در مورد سرمایه گذاری خطرپذیر صحیح است ؟</label>
                                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                                <input type="radio" id="q3_1" name="q3" class="custom-control-input" value="1"  {{ old('q3',$venturecapital->q3) == 1 ? 'checked' : '' }} />
                                                                                <label class="custom-control-label" for="q3_1">. دوره بازگشت کوتاه مدت استو سودآوری مناسبی در زمان کوتاه خواهد داشت.</label>
                                                                            </div>
                                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                                <input type="radio" id="q3_2" name="q3" class="custom-control-input" value="2" {{ old('q3',$venturecapital->q3) == 2 ? 'checked' : '' }} />
                                                                                <label class="custom-control-label" for="q3_2">دوره ی سرمایه گذاری بلندمدت است و سودآوری خوبی در کوتاه مدت خواهد داشت.</label>
                                                                            </div>
                                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                                <input type="radio" id="q3_3" name="q3" class="custom-control-input" value="3" {{ old('q3',$venturecapital->q3) == 3 ? 'checked' : '' }}  />
                                                                                <label class="custom-control-label" for="q3_3">دوره سرمایه گذاری بلندمدت است و میزان سود متناسب با درصد ریسک می باشد.</label>
                                                                            </div>
                                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                                <input type="radio" id="q3_4" name="q3" class="custom-control-input" value="4" {{ old('q3',$venturecapital->q3) == 4 ? 'checked' : '' }}  />
                                                                                <label class="custom-control-label" for="q3_4">گزینه ی الف و ج</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label for="amountcapitals" class="d-block">کدامیک از گزینه های زیر در مورد سرمایه گذاری خطرپذیر صحیح است ؟</label>
                                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                                <input type="radio" id="q4_1" name="q4" class="custom-control-input" value="1"  {{ old('q4',$venturecapital->q4) == 1 ? 'checked' : '' }} />
                                                                                <label class="custom-control-label" for="q4_2">. دوره بازگشت کوتاه مدت استو سودآوری مناسبی در زمان کوتاه خواهد داشت.</label>
                                                                            </div>
                                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                                <input type="radio" id="q4_2" name="q4" class="custom-control-input" value="2" {{ old('q4',$venturecapital->q4) == 2 ? 'checked' : '' }} />
                                                                                <label class="custom-control-label" for="q4_2">دوره ی سرمایه گذاری بلندمدت است و سودآوری خوبی در کوتاه مدت خواهد داشت.</label>
                                                                            </div>
                                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                                <input type="radio" id="q4_3" name="q4" class="custom-control-input" value="3" {{ old('q4',$venturecapital->q4) == 3 ? 'checked' : '' }}  />
                                                                                <label class="custom-control-label" for="q4_3">دوره سرمایه گذاری بلندمدت است و میزان سود متناسب با درصد ریسک می باشد.</label>
                                                                            </div>
                                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                                <input type="radio" id="q4_4" name="q4" class="custom-control-input" value="4" {{ old('q4',$venturecapital->q4) == 4 ? 'checked' : '' }}  />
                                                                                <label class="custom-control-label" for="q4_4">گزینه ی الف و ج</label>
                                                                            </div>
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
                                                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                                        <div class="form-group">
                                                                            <label for="amountcapitals" class="d-block">کدامیک از گزینه های زیر در مورد سرمایه گذاری خطرپذیر صحیح است ؟</label>
                                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                                <input type="radio" id="q5_1" name="q5" class="custom-control-input" value="1"  {{ old('q5',$venturecapital->q5) == 1 ? 'checked' : '' }} />
                                                                                <label class="custom-control-label" for="q5_1">. دوره بازگشت کوتاه مدت استو سودآوری مناسبی در زمان کوتاه خواهد داشت.</label>
                                                                            </div>
                                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                                <input type="radio" id="q5_2" name="q5" class="custom-control-input" value="2" {{ old('q5',$venturecapital->q5) == 2 ? 'checked' : '' }} />
                                                                                <label class="custom-control-label" for="q5_2">دوره ی سرمایه گذاری بلندمدت است و سودآوری خوبی در کوتاه مدت خواهد داشت.</label>
                                                                            </div>
                                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                                <input type="radio" id="q5_3" name="q5" class="custom-control-input" value="3" {{ old('q5',$venturecapital->q5) == 3 ? 'checked' : '' }}  />
                                                                                <label class="custom-control-label" for="q5_3">دوره سرمایه گذاری بلندمدت است و میزان سود متناسب با درصد ریسک می باشد.</label>
                                                                            </div>
                                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                                <input type="radio" id="q5_4" name="q5" class="custom-control-input" value="4" {{ old('q5',$venturecapital->q5) == 4 ? 'checked' : '' }}  />
                                                                                <label class="custom-control-label" for="q5_4">گزینه ی الف و ج</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                                        <div class="form-group">
                                                                            <label for="amountcapitals" class="d-block">کدامیک از گزینه های زیر در مورد سرمایه گذاری خطرپذیر صحیح است ؟</label>
                                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                                <input type="radio" id="q6_1" name="q6" class="custom-control-input" value="1"  {{ old('q6',$venturecapital->q6) == 1 ? 'checked' : '' }} />
                                                                                <label class="custom-control-label" for="q6_1">. دوره بازگشت کوتاه مدت استو سودآوری مناسبی در زمان کوتاه خواهد داشت.</label>
                                                                            </div>
                                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                                <input type="radio" id="q6_2" name="q6" class="custom-control-input" value="2" {{ old('q6',$venturecapital->q6) == 2 ? 'checked' : '' }} />
                                                                                <label class="custom-control-label" for="q6_2">دوره ی سرمایه گذاری بلندمدت است و سودآوری خوبی در کوتاه مدت خواهد داشت.</label>
                                                                            </div>
                                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                                <input type="radio" id="q6_3" name="q6" class="custom-control-input" value="3" {{ old('q6',$venturecapital->q6) == 3 ? 'checked' : '' }}  />
                                                                                <label class="custom-control-label" for="q6_3">دوره سرمایه گذاری بلندمدت است و میزان سود متناسب با درصد ریسک می باشد.</label>
                                                                            </div>
                                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                                <input type="radio" id="q6_4" name="q6" class="custom-control-input" value="4" {{ old('q6',$venturecapital->q6) == 4 ? 'checked' : '' }}  />
                                                                                <label class="custom-control-label" for="q6_4">گزینه ی الف و ج</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label for="amountcapitals" class="d-block">کدامیک از گزینه های زیر در مورد سرمایه گذاری خطرپذیر صحیح است ؟</label>
                                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                                <input type="radio" id="q7_1" name="q7" class="custom-control-input" value="1"  {{ old('q7',$venturecapital->q7) == 1 ? 'checked' : '' }} />
                                                                                <label class="custom-control-label" for="q7_1">. دوره بازگشت کوتاه مدت استو سودآوری مناسبی در زمان کوتاه خواهد داشت.</label>
                                                                            </div>
                                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                                <input type="radio" id="q7_2" name="q7" class="custom-control-input" value="2" {{ old('q7',$venturecapital->q7) == 2 ? 'checked' : '' }} />
                                                                                <label class="custom-control-label" for="q7_2">دوره ی سرمایه گذاری بلندمدت است و سودآوری خوبی در کوتاه مدت خواهد داشت.</label>
                                                                            </div>
                                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                                <input type="radio" id="q7_3" name="q7" class="custom-control-input" value="3" {{ old('q7',$venturecapital->q7) == 3 ? 'checked' : '' }}  />
                                                                                <label class="custom-control-label" for="q7_3">دوره سرمایه گذاری بلندمدت است و میزان سود متناسب با درصد ریسک می باشد.</label>
                                                                            </div>
                                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                                <input type="radio" id="q7_4" name="q7" class="custom-control-input" value="4" {{ old('q7',$venturecapital->q7) == 4 ? 'checked' : '' }}  />
                                                                                <label class="custom-control-label" for="q7_4">گزینه ی الف و ج</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label for="q8_1" class="d-block">کدامیک از گزینه های زیر در مورد سرمایه گذاری خطرپذیر صحیح است ؟</label>
                                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                                <input type="radio" id="q8_1" name="q8" class="custom-control-input" value="1"  {{ old('q8',$venturecapital->q8) == 1 ? 'checked' : '' }} />
                                                                                <label class="custom-control-label" for="q8_1">. دوره بازگشت کوتاه مدت استو سودآوری مناسبی در زمان کوتاه خواهد داشت.</label>
                                                                            </div>
                                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                                <input type="radio" id="q8_2" name="q8" class="custom-control-input" value="2" {{ old('q8',$venturecapital->q8) == 2 ? 'checked' : '' }} />
                                                                                <label class="custom-control-label" for="q8_2">دوره ی سرمایه گذاری بلندمدت است و سودآوری خوبی در کوتاه مدت خواهد داشت.</label>
                                                                            </div>
                                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                                <input type="radio" id="q8_3" name="q8" class="custom-control-input" value="3" {{ old('q8',$venturecapital->q8) == 3 ? 'checked' : '' }}  />
                                                                                <label class="custom-control-label" for="q8_3">دوره سرمایه گذاری بلندمدت است و میزان سود متناسب با درصد ریسک می باشد.</label>
                                                                            </div>
                                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                                <input type="radio" id="q8_4" name="q8" class="custom-control-input" value="4" {{ old('q8',$venturecapital->q8) == 4 ? 'checked' : '' }}  />
                                                                                <label class="custom-control-label" for="q8_4">گزینه ی الف و ج</label>
                                                                            </div>
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
