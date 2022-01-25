@extends('acckt_master.layouts.panel')
@section('content')
            <section class="row flexbox-container">
				<div class="col-xl-12 col-md-12 col-12  px-0">
					<div class="card bg-authentication mb-0">
						<div class="row m-0">
							<!-- left section-forgot password -->
							<div class="col-md-6 col-12 px-0">
								<div class="card disable-rounded-right mb-0 p-2">
									<div class="card-header pb-1">
										<div class="card-title">
											<h4 class="text-center mb-2">رمز عبورتان را میخواهید تغییر دهید؟</h4>
										</div>
									</div>

									<div class="card-content">
										<div class="card-body">
											<form action="/portal_idea/user/update_password" class="mb-2" method="POST" data-request="onForgotPassword" data-request-validate>
                                                {{csrf_field()}}
												<div class="form-group mb-2">
													<label class="text-bold-700" for="password">رمز جدید:</label>
													<input type="password" class="form-control text-left" id="password" name="password" >
                                                </div>
                                                <div class="form-group mb-2">
                                                    <label class="text-bold-700" for="password_confirmation">تکرار رمز  جدید:</label>
                                                    <input type="password" class="form-control text-left" id="password_confirmation" name="password_confirmation" >
                                                </div>
												<button type="submit" class="btn btn-primary glow position-relative w-100">تغییر رمز عبور</button>
											</form>
										</div>
									</div>
								</div>
							</div>
							<!-- right section image -->
							<div class="col-md-6 d-md-block d-none text-center align-self-center">
								<img class="img-fluid" src="{{ asset('/panel_assets/images/pages/forgot-password.png') }}" alt="branding logo" width="300">
							</div>
						</div>
					</div>
				</div>
			</section>
@endsection
