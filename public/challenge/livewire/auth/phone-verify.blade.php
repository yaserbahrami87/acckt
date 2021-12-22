<div>
@auth
    <!-- Main Navigation -->
        <header>
            <!-- Navbar -->
            <nav class="navbar fixed-top navbar-expand-lg scrolling-navbar double-nav">

                <!-- SideNav slide-out button -->
                <div class="float-left">
                    <a href="#" data-activates="slide-out" class="button-collapse"><i class="fas fa-bars"></i></a>
                </div>

                <!-- Breadcrumb -->
                <div class="breadcrumb-dn mr-auto">
                    <p>پروفایل کاربری</p>
                </div>
                <!-- Navbar links -->
                <ul class="nav navbar-nav nav-flex-icons ml-auto">

                    <li class="nav-item">
                        <a class="nav-link waves-effect"><i class="fas fa-envelope"></i> <span
                                class="clearfix d-none d-sm-inline-block">تماس با ما</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-effect"><i class="far fa-comments"></i> <span
                                class="clearfix d-none d-sm-inline-block">پشتیبانی</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle waves-effect" href="#" id="userDropdown" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user"></i> <span class="clearfix d-none d-sm-inline-block">پروفایل</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">خروج</a>
                            <a class="dropdown-item" href="#">تنظیمات اکانت</a>
                        </div>
                    </li>

                </ul>
                <!-- Navbar links -->



            </nav>
            <!-- Navbar -->

        </header>
        <!-- Main Navigation -->

        <!-- Main layout -->
        <main style="direction: rtl !important;">
            <div class="container-fluid">

                <!-- Section: Team v.1 -->
                <section class="section team-section">

                    <!-- Grid row -->
                    <div class="row text-center">

                        <!-- Grid column -->
                        <div class="col-md-4 mb-4">

                            <!-- Card -->
                            <div class="card profile-card">

                                <!-- Avatar -->

                                <div class="card-body pt-0 mt-0">

                                    <!-- Name -->
                                    <h3 class="mb-3 font-weight-bold"><strong>{{$user->first_name}}</strong><strong>{{$user->last_name}}</strong></h3>
                                    <h6 class="font-weight-bold cyan-text mb-4">Web Designer</h6>

                                    <p class="mt-4 text-muted">
                                        لورم ایپسوم یا  (به انگلیسی: Lorem ipsum) به متنی آزمایشی و  در صنعت چاپ،  و
                                        طراحی گرافیک گفته . طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارای
                                        ه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید، تا از نظر گرافیکی نشانگر چگونگی نوع و اندازه</p>

                                    <a class="btn btn-info btn-rounded"> اپلود عکس پروفایل</a>

                                </div>

                            </div>
                            <!-- Card -->

                        </div>
                        <!-- Grid column -->


                        <!-- Grid column -->
                        <div class="col-md-8 mb-4">

                            <!-- Card -->
                            <div class="card card-cascade cascading-admin-card user-card">

                                <!-- Card Data -->
                                <div class="admin-up d-flex justify-content-start">
                                    <i class="fas fa-users info-color py-4 mr-3 z-depth-2"></i>
                                    <div class="data">
                                        <h5 class="font-weight-bold dark-grey-text mr-3">ویرایش اطلاعات شخصی </h5>
                                    </div>
                                </div>
                                <!-- Card Data -->

                                <!-- Card content -->
                                <div class="card-body card-body-cascade">
                                    <form action="{{ route('profile.twofactor.phone.post') }}" method="POST">
                                        @csrf

                                        <div class="form-group">
                                            <label for="token" class="col-form-label">لطفا کد فعالسازی ارسال شده را وارد کنید</label>
                                            <input type="text" class="form-control @error('token') is-invalid @enderror" name="token" placeholder="enter your token">
                                            @error('token')
                                            <span class="invalid-feedback">
                                       <strong>{{ $message }}</strong>
                                   </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-primary">اعتبارسنجی</button>
                                        </div>
                                    </form>


                                </div>
                                <!-- Card content -->

                            </div>
                            <!-- Card -->

                        </div>
                        <!-- Grid column -->



                    </div>
                    <!-- Grid row -->

                </section>
                <!-- Section: Team v.1 -->

            </div>
        </main>
        <!-- Main layout -->


    @endauth
</div>
