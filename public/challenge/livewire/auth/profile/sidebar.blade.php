<style>
    #sidebar-item {
        transition: all .2s ease-in-out;
        cursor: pointer;
    }

    #sidebar-item:hover {
        margin-right: 1vh;
        transform: scale(1.1);
    }
</style>
<!-- Sidebar navigation -->
<div id="slide-out" class="side-nav fixed right-aligned " style="background-color: #153a64">
    <ul class="custom-scrollbar right-aligned ">

        <!-- Logo -->
        <li class="logo-sn waves-effect py-3">
            <div class="text-right mr-3 d-flex justify-content-end">
                <a class="profile-side-item" id="sidebar-item"
                   href="#">{{auth('web')->user()->name ?? auth('challenge')->user()->name }}</a>

                <a href="#"><img
                        src="{{auth('web')->user()->profile_image ?? auth('challenge')->user()->profile_image ??'https://yazdanbabazade.ir/dist/img/user-profile-thumbnail%20_1_.png'}}"
                        style="width: 3rem;border-radius: 50%"></a>
            </div>
        </li>

        <li>
            <ul class="collapsible collapsible-accordion right-aligned ">

                <li>
                    <a class="collapsible-header text-center waves-effect font-weight-bold profile-side-item"
                       id="sidebar-item" style="font-size: .8rem">
                        <i class="w-fa fas fa-users float-right" style="margin-top: .80rem"></i> مدیریت چالش ها <i
                            class="fas fa-angle-down float-left" style="margin-top: .80rem"></i>
                    </a>
                    <div class="collapsible-body text-right ">
                        <ul>
                            <li>
                                <a href="{{route('profile.user.challenges.create')}}" id="sidebar-item"
                                   class="waves-effect font-weight-bold profile-side-item"
                                   style="font-size: .8rem;text-decoration: none">ثبت چالش جدید<i
                                        class="fa fa-arrow-left mx-2" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="{{route('show.all.company.challenges')}}" id="sidebar-item"
                                   class="waves-effect font-weight-bold profile-side-item"
                                   style="font-size: .8rem;text-decoration: none"> چالش های ثبت شده<i
                                        class="fa fa-arrow-left mx-2" aria-hidden="true"></i></a>
                            </li>

                        </ul>
                    </div>
                </li>

            </ul>
        </li>


        <li>
            <ul class="collapsible collapsible-accordion right-aligned ">
                @if (auth('web')->user())
                    <li>
                        <a class="collapsible-header text-center waves-effect font-weight-bold profile-side-item"
                           id="sidebar-item" style="font-size: .8rem">
                            <i class="w-fa fas fa-users float-right" style="margin-top: .80rem"></i> اطلاعات کاربری <i
                                class="fas fa-angle-down float-left" style="margin-top: .80rem"></i>
                        </a>
                        <div class="collapsible-body text-right ">
                            <ul>
                                <li>
                                    <a href="{{route('profile.user.inaformation')}}" id="sidebar-item"
                                       class="waves-effect font-weight-bold profile-side-item"
                                       style="font-size: .8rem;text-decoration: none">اطلاعات عمومی<i
                                            class="fa fa-arrow-left mx-2" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="{{route('profile.user.inaformation.plus')}}" id="sidebar-item"
                                       class="waves-effect font-weight-bold profile-side-item"
                                       style="font-size: .8rem;text-decoration: none"> اطلاعات تکمیلی<i
                                            class="fa fa-arrow-left mx-2" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="{{route('profile.user.socialite.inaformation')}}" id="sidebar-item"
                                       class="waves-effect font-weight-bold profile-side-item"
                                       style="font-size: .8rem;text-decoration: none">شبکه های اجتماعی <i
                                            class="fa fa-arrow-left mx-2" aria-hidden="true"></i></a>
                                </li>
                                @auth('web')
                                    <li>
                                        <a href="{{route('profile.user.inaformation.2fa')}}" id="sidebar-item"
                                           class="waves-effect font-weight-bold profile-side-item"
                                           style="font-size: .8rem;text-decoration: none">احراز هویت دو مرحله ای<i
                                                class="fa fa-arrow-left mx-2" aria-hidden="true"></i></a>
                                    </li>
                                @endauth
                                <li>
                                    <a href="{{route('profile.user.inaformation.password')}}" id="sidebar-item"
                                       class="waves-effect font-weight-bold profile-side-item"
                                       style="font-size: .8rem;text-decoration: none">تغییر رمز<i
                                            class="fa fa-arrow-left mx-2" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="{{route('profile.user.delete.account')}}" id="sidebar-item"
                                       class="waves-effect font-weight-bold profile-side-item"
                                       style="font-size: .8rem;text-decoration: none">حذف اکانت<i
                                            class="fa fa-arrow-left mx-2" aria-hidden="true"></i></a>
                                </li>


                            </ul>
                        </div>
                    </li>
                @endif

                @if (auth('challenge')->user())
                    <li>
                        <a class="collapsible-header text-center waves-effect font-weight-bold profile-side-item"
                           id="sidebar-item" style="font-size: .8rem">
                            <i class="w-fa fas fa-users float-right" style="margin-top: .80rem"></i> اطلاعات شرکت <i
                                class="fas fa-angle-down float-left" style="margin-top: .80rem"></i>
                        </a>
                        <div class="collapsible-body text-right ">
                            <ul>
                                <li>
                                    <a href="{{route('profile.company.inaformation')}}" id="sidebar-item"
                                       class="waves-effect font-weight-bold profile-side-item"
                                       style="font-size: .8rem;text-decoration: none">اطلاعات عمومی<i
                                            class="fa fa-arrow-left mx-2" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="{{route('profile.company.inaformation.plus')}}" id="sidebar-item"
                                       class="waves-effect font-weight-bold profile-side-item"
                                       style="font-size: .8rem;text-decoration: none"> اطلاعات تکمیلی<i
                                            class="fa fa-arrow-left mx-2" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="{{route('profile.company.socialite.informations')}}" id="sidebar-item"
                                       class="waves-effect font-weight-bold profile-side-item"
                                       style="font-size: .8rem;text-decoration: none">شبکه های اجتماعی <i
                                            class="fa fa-arrow-left mx-2" aria-hidden="true"></i></a>
                                </li>
                                @auth('challenge')
                                    <li>
                                        <a href="{{route('profile.company.user.inaformation.2fa')}}" id="sidebar-item"
                                           class="waves-effect font-weight-bold profile-side-item"
                                           style="font-size: .8rem;text-decoration: none">احراز هویت دو مرحله ای<i
                                                class="fa fa-arrow-left mx-2" aria-hidden="true"></i></a>
                                    </li>
                                @endauth
                                <li>
                                    <a href="{{route('profile.company.inaformation.password')}}" id="sidebar-item"
                                       class="waves-effect font-weight-bold profile-side-item"
                                       style="font-size: .8rem;text-decoration: none">تغییر رمز<i
                                            class="fa fa-arrow-left mx-2" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="{{route('profile.company.delete.account')}}" id="sidebar-item"
                                       class="waves-effect font-weight-bold profile-side-item"
                                       style="font-size: .8rem;text-decoration: none">حذف اکانت<i
                                            class="fa fa-arrow-left mx-2" aria-hidden="true"></i></a>
                                </li>


                            </ul>
                        </div>
                    </li>

                @endif
            </ul>
        </li>
        <!-- Side navigation links -->

    </ul>
    <div class="sidenav-bg mask-strong"></div>
</div>
<!-- Sidebar navigation -->
