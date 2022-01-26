
<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto">
                <a class="navbar-brand" href="/panel">
                    <!--<div class="brand-logo"><img class="logo" src="{{ asset('/acckt/assets/img/logo.png') }}" width=""></div>-->
                    <div class="brand-logo">
                        @if(is_null(Auth::user()->avatar))
                            <img class="round" src="{{asset('/panel_assets/images/profile/user-profile-thumbnail.png')}}" width="40">
                        @else
                            <img class="round" src="{{asset('/images/users/'.Auth::user()->avatar)}}" width="40">
                        @endif
                    </div>
                    <h5 class="brand-text mb-0" style="font-size: 1.2rem;">{{Auth::user()->lname}}</h5>
                </a>
            </li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <div class="btn-group btn-block" role="group">
            <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                تغییر پورتال
            </button>
            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                <a class="dropdown-item" href="/portal_idea/change portal/idea">پورتال ایده</a>
                <a class="dropdown-item" href="/portal_idea/change portal/sarmayeh">پورتال سرمایه</a>
            </div>
        </div>
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="lines">
            <li class=" navigation-header"><span>پورتال صاحبان ایده</span></li>
            <li class=" nav-item has-sub ">
                <a href="#">
                    <i class="bi bi-person-fill"></i>
                    <span class="menu-title" >تنظیمات حساب کاربری</span>
                </a>
                <ul class="menu-content">
                    <li><a href="/panel"><i class="bx bx-left-arrow-alt"></i><span class="menu-item" data-i18n="Invoice List">اطلاعات عمومی</span></a></li>
                    <li><a href="/portal_idea/user/user_further_information"><i class="bx bx-left-arrow-alt"></i><span class="menu-item" data-i18n="Invoice Add">اطلاعات تکمیلی</span></a></li>
                    <li><a href="/portal_idea/user/social_networks"><i class="bx bx-left-arrow-alt"></i><span class="menu-item" data-i18n="Invoice Add">شبکه های اجتماعی</span></a></li>
                    <li><a href="/portal_idea/user/change_password"><i class="bx bx-left-arrow-alt"></i><span class="menu-item" data-i18n="Invoice Add">تغییر رمز</span></a></li>
                </ul>
            </li>

            @if(Auth::user()->tel_verify==1)
                <li class=" nav-item has-sub ">
                    <a href="#">
                        <i class="bi bi-archive-fill"></i>
                        <span class="menu-title">کارتابل</span>
                    </a>
                    <ul class="menu-content">
                        <!--<li><a href="/portal/inbox"><i class="bx bx-left-arrow-alt"></i><span class="menu-item" data-i18n="Invoice List">نامه های وارده</span></a></li>-->
                        <li><a href="#" class="disabled"><i class="bx bx-left-arrow-alt"></i><span class="menu-item" >نامه های وارده</span></a></li>
                        <li><a href=" nav-item has-sub "><i class="bx bx-left-arrow-alt"></i><span class="menu-item" >درخواست ها</span></a>
                            <ul class="menu-content">
                                <!--<li><a href="/portal/coworking_space_request"><i class="bx bx-left-arrow-alt"></i><span class="menu-item" data-i18n="Invoice List">فضای کار اشتراکی</span></a></li>-->
                                <li><a href="#" class="disabled"><i class="bx bx-left-arrow-alt"></i><span class="menu-item" data-i18n="Invoice List">فضای کار اشتراکی</span></a></li>
                                <li><a href="#" class="disabled"><i class="bx bx-left-arrow-alt"></i><span class="menu-item" data-i18n="Invoice Add">جلسه منتورینگ و کوچینگ</span></a></li>
                                <li><a href="#" class="disabled"><i class="bx bx-left-arrow-alt"></i><span class="menu-item" data-i18n="Invoice Add">گواهینامه و معرفی نامه</span></a></li>
                                <li><a href="#" class="disabled"><i class="bx bx-left-arrow-alt"></i><span class="menu-item" data-i18n="Invoice Add">سایر درخواست ها</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item">
                    <a href="#">
                        <i class="bi bi-lightbulb-fill"></i>
                        <span class="menu-title" >ایده/طرح</span>
                    </a>
                    <ul class="menu-content">
                        <li><a href="/portal_idea/idea/create" ><i class="bx bx-left-arrow-alt"></i><span class="menu-item" data-i18n="Invoice List">ثبت ایده</span></a></li>
                        <li><a href="#"><i class="bx bx-left-arrow-alt"></i><span class="menu-item" data-i18n="Invoice Add">ثبت طرح</span></a>
                            <ul class="menu-content">
                                <li><a href="/portal/business_model" class="disabled" ><i class="bx bx-left-arrow-alt"></i><span class="menu-item" data-i18n="Invoice List">مدل کسب و کار</span></a></li>
                                <li><a href="#" class="disabled"><i class="bx bx-left-arrow-alt"></i><span class="menu-item" data-i18n="Invoice Add">Business Plan</span></a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="disabled" ><i class="bx bx-left-arrow-alt"></i><span class="menu-item" data-i18n="Invoice Add">فروشگاه ایده بازار</span></a></li>
                        <li><a href="#"><i class="bx bx-left-arrow-alt"></i><span class="menu-item" data-i18n="Invoice Add">مشاهده ایده ها</span></a>
                            <ul class="menu-content">
                                <li><a href="/portal_idea/idea/my"><i class="bx bx-left-arrow-alt"></i><span class="menu-item" data-i18n="Invoice List">ایده های من</span></a></li>
                                <li><a href="#" class="disabled"><i class="bx bx-left-arrow-alt"></i><span class="menu-item" data-i18n="Invoice Add">دسترسی به بانک ایده ها</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item">
                    <a href="#">
                        <i class="bi bi-ui-checks"></i>
                        <span class="menu-title" >خدمات آنلاین</span>
                    </a>
                    <ul class="menu-content">
                        <li><a href="/portal/online_class" class="disabled"><i class="bx bx-left-arrow-alt"></i><span class="menu-item" data-i18n="Invoice List">کلاس ها</span></a></li>
                        <li><a href="/portal/online_meeting" class="disabled" ><i class="bx bx-left-arrow-alt"></i><span class="menu-item" data-i18n="Invoice Add">جلسات</span></a></li>
                        <li><a href="/portal/courses" class="disabled" ><i class="bx bx-left-arrow-alt"></i><span class="menu-item" data-i18n="Invoice Add">دوره ها</span></a></li>
                        <li><a href="#" class="disabled" ><i class="bx bx-left-arrow-alt"></i><span class="menu-item" data-i18n="Invoice Add">نشست ها</span></a></li>
                        <li><a href="#" class="disabled"><i class="bx bx-left-arrow-alt"></i><span class="menu-item" data-i18n="Invoice Add">فضای اختصاصی</span></a></li>
                    </ul>
                </li>
                <li class=" nav-item">
                    <a href="#">
                        <i class="bi bi-briefcase-fill"></i>
                        <span class="menu-title"  >گواهینامه ها و افتخارات</span>
                    </a>
                    <ul class="menu-content">
                        <li><a href="#" class="disabled"><i class="bx bx-left-arrow-alt"></i><span class="menu-item" data-i18n="Invoice List">شخصی</span></a></li>
                        <!--<li><a href="/portal/certificates"><i class="bx bx-left-arrow-alt"></i><span class="menu-item" data-i18n="Invoice Add">دریافت شده از شتابدهنده</span></a></li>-->
                        <li><a href="#" class="disabled"><i class="bx bx-left-arrow-alt"></i><span class="menu-item" data-i18n="Invoice Add">دریافت شده از شتابدهنده</span></a></li>
                    </ul>
                </li>
                <!--<li class=" nav-item"><a href="/portal/news"><i class="menu-livicon" data-icon="notebook"></i><span class="menu-title" data-i18n="Chat">اخبار</span></a></li>-->
                <li class=" nav-item">
                    <a href="#" class="disabled">
                        <i class="bi bi-newspaper"></i>
                        <span class="menu-title" >اخبار</span>
                    </a>
                </li>
                <li class=" nav-item"><a href="#"><span class="menu-title" data-i18n="Invoice">امتیازات</span></a>
                    <ul class="menu-content">
                        <li><a href="/portal/scores_list"><i class="bx bx-left-arrow-alt"></i><span class="menu-item" data-i18n="Invoice List">لیست امتیازات</span></a></li>
                        <li><a href="#" class="disabled"><i class="bx bx-left-arrow-alt"></i><span class="menu-item" data-i18n="Invoice Add">افزایش امتیاز</span></a></li>
                        <li><a href="#" class="disabled"><i class="bx bx-left-arrow-alt"></i><span class="menu-item" data-i18n="Invoice Add">شبکه بازار همکار</span></a></li>
                    </ul>
                </li>
            @endif
            <li class=" nav-item"><a href="#">
                <i class="bi bi-chat-left-dots-fill"></i>
                <span class="menu-title">تماس با ما</span></a>
                <ul class="menu-content">
                    <li><a href="/portal/contact"><i class="bx bx-left-arrow-alt"></i><span class="menu-item" data-i18n="Invoice List">انتقادات و پیشنهادات</span></a></li>
                    <li><a href="#" class="disabled"><i class="bx bx-left-arrow-alt"></i><span class="menu-item" data-i18n="Invoice Add">راه های ارتباطی</span></a></li>
                </ul>
            </li>
            <li class=" nav-item  ">
                <a href="/portal/faq">
                    <i class="bi bi-question-circle"></i>
                    <span class="menu-title"  >سوالات متداول</span>
                </a>
            </li>
            <!--<li class=" nav-item {% if this.page.id == 'panel-coming_soon' %}sidebar-group-active{% endif %}"><a href="/portal/coming_soon"><i class="menu-livicon" data-icon="loader-15"></i><span class="menu-title" data-i18n="Kanban">به زودی</span></a></li>-->
        </ul>
    </div>
</div>
<!-- END: Main Menu-->
