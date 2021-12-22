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
<div id="slide-out" class="side-nav fixed right-aligned " style="background-color: #01579b">
    <ul class="custom-scrollbar right-aligned text-white">

        <!-- Logo -->
        <li class="logo-sn waves-effect py-3">
            <div class="text-right mr-3 d-flex justify-content-center">

                <a href="#"><img src="{{asset('dist/img/logo_old.png')}}" style="width: 8rem"></a>
            </div>
        </li>
        <li>
            <ul class="collapsible collapsible-accordion right-aligned ">

                @can('show_users')
                    <li>
                        <a class="collapsible-header text-center waves-effect font-weight-bold profile-side-item"
                           id="sidebar-item" style="font-size: .8rem">
                            <i class="w-fa fas fa-users float-right" style="margin-top: .80rem"></i> کاربران <i
                                class="fas fa-angle-down float-left" style="margin-top: .80rem"></i>
                        </a>
                        <div class="collapsible-body text-right mr-2">
                            <ul>
                                @can('show_users')

                                    <li>
                                        <a href="{{route('users.index')}}" id="sidebar-item"
                                           class="waves-effect font-weight-bold profile-side-item"
                                           style="font-size: .8rem;text-decoration: none">لیست کاربران<i
                                                class="fa fa-arrow-left mx-2" aria-hidden="true"></i></a>
                                    </li>
                                @endcan
                                @can('delete_user')
                                    <li>
                                        <a href="{{route('deleted.users.index')}}" id="sidebar-item"
                                           class="waves-effect font-weight-bold profile-side-item"
                                           style="font-size: .8rem;text-decoration: none">لیست کاربران حذف شده<i
                                                class="fa fa-arrow-left mx-2" aria-hidden="true"></i></a>
                                    </li>
                                @endcan
                                @canany(['approved_user_information','denay_user_information'])
                                    <li>
                                        <a href="{{route('users.information.index')}}" id="sidebar-item"
                                           class="waves-effect font-weight-bold profile-side-item"
                                           style="font-size: .8rem;text-decoration: none">لیست اطلاعات کاربران<i
                                                class="fa fa-arrow-left mx-2" aria-hidden="true"></i></a>
                                    </li>
                                @endcan
                                @can('create_user')
                                    <li>
                                        <a href="{{route('create.user')}}" id="sidebar-item"
                                           class="waves-effect font-weight-bold profile-side-item"
                                           style="font-size: .8rem;text-decoration: none"> ثبت کاربر جدید<i
                                                class="fa fa-arrow-left mx-2" aria-hidden="true"></i></a>
                                    </li>
                                @endcan

                            </ul>
                        </div>
                    </li>

                @endcan
            </ul>
        </li>

        <li>
            <ul class="collapsible collapsible-accordion right-aligned ">
                @can('show_backend_users')
                    <li>
                        <a class="collapsible-header text-center waves-effect font-weight-bold profile-side-item"
                           id="sidebar-item" style="font-size: .8rem">

                            <i class="w-fa fas fa-users float-right" style="margin-top: .80rem"></i>کاربران مدیریت<i
                                class="fas fa-angle-down float-left" style="margin-top: .80rem"></i>
                        </a>
                        <div class="collapsible-body text-right mr-2">
                            <ul>
                                @can('show_backend_users')
                                    <li>
                                        <a href="{{route('backend.users.index')}}" id="sidebar-item"
                                           class="waves-effect font-weight-bold profile-side-item"
                                           style="font-size: .8rem;text-decoration: none">لیست کاربران مدیریت<i
                                                class="fa fa-arrow-left mx-2" aria-hidden="true"></i></a>
                                    </li>
                                @endcan
                                @can('create_backend_user')
                                    <li>
                                        <a href="{{route('create.backend.user')}}" id="sidebar-item"
                                           class="waves-effect font-weight-bold profile-side-item"
                                           style="font-size: .8rem;text-decoration: none"> ثبت کاربر مدیریت<i
                                                class="fa fa-arrow-left mx-2" aria-hidden="true"></i></a>
                                    </li>
                                @endcan
                            </ul>
                        </div>
                    </li>
            </ul>
        </li>

        @endcan
        <li>
            <ul class="collapsible collapsible-accordion right-aligned ">

                @can('show_company')
                    <li>
                        <a class="collapsible-header text-center waves-effect font-weight-bold profile-side-item"
                           id="sidebar-item" style="font-size: .8rem">
                            <i class="w-fa fas fa-users float-right" style="margin-top: .80rem"></i>کاربران حقوقی<i
                                class="fas fa-angle-down float-left" style="margin-top: .80rem"></i>
                        </a>
                        <div class="collapsible-body text-right mr-2">
                            <ul>
                                @can('show_company')
                                    <li>
                                        <a href="{{route('company.users.index')}}" id="sidebar-item"
                                           class="waves-effect font-weight-bold profile-side-item"
                                           style="font-size: .8rem;text-decoration: none">لیست کاربران حقوقی<i
                                                class="fa fa-arrow-left mx-2" aria-hidden="true"></i></a>
                                    </li>
                                @endcan
                                @canany(['approved_company_info','denay_company_info'])
                                    <li>
                                        <a href="{{route('company.users.information.index')}}" id="sidebar-item"
                                           class="waves-effect font-weight-bold profile-side-item"
                                           style="font-size: .8rem;text-decoration: none">لیست اطلاعات کاربران حقوقی<i
                                                class="fa fa-arrow-left mx-2" aria-hidden="true"></i></a>
                                    </li>
                                @endcan
                                @can('delete_company')
                                    <li>
                                        <a href="{{route('company.users.deleted')}}" id="sidebar-item"
                                           class="waves-effect font-weight-bold profile-side-item"
                                           style="font-size: .8rem;text-decoration: none">کاربران حقوقی حذف شده <i
                                                class="fa fa-arrow-left mx-2" aria-hidden="true"></i></a>
                                    </li>
                                @endcan
                                @can('create_company')
                                    <li>
                                        <a href="{{route('create.company.user')}}" id="sidebar-item"
                                           class="waves-effect font-weight-bold profile-side-item"
                                           style="font-size: .8rem;text-decoration: none"> ثبت کاربر حقوقی<i
                                                class="fa fa-arrow-left mx-2" aria-hidden="true"></i></a>
                                    </li>
                                @endcan
                            </ul>
                        </div>
                    </li>
                @endcan
            </ul>
        </li>


        <li>
            <ul class="collapsible collapsible-accordion right-aligned ">
                @can('show_category')

                    <li>
                        <a class="collapsible-header text-center waves-effect font-weight-bold profile-side-item"
                           id="sidebar-item" style="font-size: .8rem">
                            <i class="w-fa fas fa-users float-right" style="margin-top: .80rem"></i>دسته بندی ها<i
                                class="fas fa-angle-down float-left" style="margin-top: .80rem"></i>
                        </a>
                        <div class="collapsible-body text-right mr-2">
                            <ul>
                                @can('show_category')

                                    <li>
                                        <a href="{{route('admin.category.index')}}" id="sidebar-item"
                                           class="waves-effect font-weight-bold profile-side-item"
                                           style="font-size: .8rem;text-decoration: none">لیست دسته بندی ها<i
                                                class="fa fa-arrow-left mx-2" aria-hidden="true"></i></a>
                                    </li>
                                @endcan
                                @can('create_category')
                                    <li>
                                        <a href="{{route('admin.category.create')}}" id="sidebar-item"
                                           class="waves-effect font-weight-bold profile-side-item"
                                           style="font-size: .8rem;text-decoration: none"> ثبت دسته جدید<i
                                                class="fa fa-arrow-left mx-2" aria-hidden="true"></i></a>
                                    </li>
                                @endcan
                            </ul>
                        </div>
                    </li>
                @endcan

            </ul>
        </li>

        <li>
            <ul class="collapsible collapsible-accordion right-aligned ">

                @can('show_comments')
                    <li>
                        <a class="collapsible-header text-center waves-effect font-weight-bold profile-side-item"
                           id="sidebar-item" style="font-size: .8rem">
                            <i class="w-fa fas fa-users float-right" style="margin-top: .80rem"></i>نظرات کاربران<i
                                class="fas fa-angle-down float-left" style="margin-top: .80rem"></i>
                        </a>
                        <div class="collapsible-body text-right mr-2">
                            <ul>
                                @canany(['approved_comment','delete_comments'])
                                    <li>
                                        <a href="{{route('approved.comments')}}" id="sidebar-item"
                                           class="waves-effect font-weight-bold profile-side-item"
                                           style="font-size: .8rem;text-decoration: none">نظرات تایید شده<i
                                                class="fa fa-arrow-left mx-2" aria-hidden="true"></i></a>
                                    </li>
                                @endcan
                                @can('approved_comment')
                                    <li>
                                        <a href="{{route('unapproved.comments')}}" id="sidebar-item"
                                           class="waves-effect font-weight-bold profile-side-item"
                                           style="font-size: .8rem;text-decoration: none">نظرات تایید نشده<i
                                                class="fa fa-arrow-left mx-2" aria-hidden="true"></i></a>
                                    </li>
                                @endcan
                            </ul>
                        </div>
                    </li>
                @endcan
            </ul>
        </li>


        <li>
            <ul class="collapsible collapsible-accordion right-aligned ">

                @can('show_permissions')
                    <li>
                        <a class="collapsible-header text-center waves-effect font-weight-bold profile-side-item"
                           id="sidebar-item" style="font-size: .8rem">
                            <i class="w-fa fas fa-users float-right" style="margin-top: .80rem"></i>سطوح دسترسی<i
                                class="fas fa-angle-down float-left" style="margin-top: .80rem"></i>
                        </a>
                        <div class="collapsible-body text-right mr-2">
                            <ul>
                                @can('show_permissions')
                                    <li>
                                        <a href="{{route('permissions.index')}}" id="sidebar-item"
                                           class="waves-effect font-weight-bold profile-side-item"
                                           style="font-size: .8rem;text-decoration: none">لیست سطوح دسترسی کاربران<i
                                                class="fa fa-arrow-left mx-2" aria-hidden="true"></i></a>
                                    </li>
                                @endcan
                                @can('create_permission')
                                    <li>
                                        <a href="{{route('create.backend.permission')}}" id="sidebar-item"
                                           class="waves-effect font-weight-bold profile-side-item"
                                           style="font-size: .8rem;text-decoration: none">ثبت دسترسی جدید<i
                                                class="fa fa-arrow-left mx-2" aria-hidden="true"></i></a>
                                    </li>
                                @endcan
                            </ul>
                        </div>
                    </li>
                @endcan
            </ul>
        </li>

        <li>
            <ul class="collapsible collapsible-accordion right-aligned ">
                @can('show_roles')
                    <li>
                        <a class="collapsible-header text-center waves-effect font-weight-bold profile-side-item"
                           id="sidebar-item" style="font-size: .8rem">
                            <i class="w-fa fas fa-users float-right" style="margin-top: .80rem"></i>مقام های کاربران<i
                                class="fas fa-angle-down float-left" style="margin-top: .80rem"></i>
                        </a>
                        <div class="collapsible-body text-right mr-2">
                            <ul>
                                @can('show_roles')
                                    <li>
                                        <a href="{{route('roles.index')}}" id="sidebar-item"
                                           class="waves-effect font-weight-bold profile-side-item"
                                           style="font-size: .8rem;text-decoration: none">لیست مقام های کاربران<i
                                                class="fa fa-arrow-left mx-2" aria-hidden="true"></i></a>
                                    </li>
                                @endcan
                                @can('create_role')
                                    <li>
                                        <a href="{{route('create.backend.role')}}" id="sidebar-item"
                                           class="waves-effect font-weight-bold profile-side-item"
                                           style="font-size: .8rem;text-decoration: none">ثبت مقام جدید<i
                                                class="fa fa-arrow-left mx-2" aria-hidden="true"></i></a>
                                    </li>
                                @endcan
                            </ul>
                        </div>
                    </li>
                @endcan
            </ul>
        </li>

        <li>
            <ul class="collapsible collapsible-accordion right-aligned ">

                @can('show_articles')
                    <li>
                        <a class="collapsible-header text-center waves-effect font-weight-bold profile-side-item"
                           id="sidebar-item" style="font-size: .8rem">
                            <i class="w-fa fas fa-users float-right" style="margin-top: .80rem"></i>اخبار شتابدهنده<i
                                class="fas fa-angle-down float-left" style="margin-top: .80rem"></i>
                        </a>
                        <div class="collapsible-body text-right mr-2">
                            <ul>
                                @can('show_articles')
                                    <li>
                                        <a href="{{route('articles.index')}}" id="sidebar-item"
                                           class="waves-effect font-weight-bold profile-side-item"
                                           style="font-size: .8rem;text-decoration: none">لیست اخبار شتابدهنده<i
                                                class="fa fa-arrow-left mx-2" aria-hidden="true"></i></a>
                                    </li>
                                @endcan
                                @can('create_article')

                                    <li>
                                        <a href="{{route('admin.articles.create')}}" id="sidebar-item"
                                           class="waves-effect font-weight-bold profile-side-item"
                                           style="font-size: .8rem;text-decoration: none">ثبت خبر جدید<i
                                                class="fa fa-arrow-left mx-2" aria-hidden="true"></i></a>
                                    </li>
                                @endcan
                            </ul>
                        </div>
                    </li>
                @endcan
            </ul>
        </li>

        <li>
            <ul class="collapsible collapsible-accordion right-aligned ">

                @can('show_challenge')
                    <li>
                        <a class="collapsible-header text-center waves-effect font-weight-bold profile-side-item"
                           id="sidebar-item" style="font-size: .8rem">
                            <i class="w-fa fas fa-users float-right" style="margin-top: .80rem"></i>چالش های شتابدهنده<i
                                class="fas fa-angle-down float-left" style="margin-top: .80rem"></i>
                        </a>
                        <div class="collapsible-body text-right mr-2">
                            <ul>
                                @can('show_challenge')
                                    <li>
                                        <a href="{{route('challenges.index')}}" id="sidebar-item"
                                           class="waves-effect font-weight-bold profile-side-item"
                                           style="font-size: .8rem;text-decoration: none">لیست چالش های شتابدهنده<i
                                                class="fa fa-arrow-left mx-2" aria-hidden="true"></i></a>
                                    </li>
                                @endcan
                                @can('create_challenge')
                                    <li>
                                        <a href="{{route('admin.challenges.create')}}" id="sidebar-item"
                                           class="waves-effect font-weight-bold profile-side-item"
                                           style="font-size: .8rem;text-decoration: none">ثبت چالش جدید<i
                                                class="fa fa-arrow-left mx-2" aria-hidden="true"></i></a>
                                    </li>
                                @endcan
                            </ul>
                        </div>
                    </li>
                @endcan
            </ul>
        </li>

        <li>
            <ul class="collapsible collapsible-accordion right-aligned ">

                @can('show_notification')
                    <li>
                        <a class="collapsible-header text-center waves-effect font-weight-bold profile-side-item"
                           id="sidebar-item" style="font-size: .8rem">
                            <i class="w-fa fas fa-users float-right" style="margin-top: .80rem"></i>اطلاع رسانی به
                            کاربران<i
                                class="fas fa-angle-down float-left" style="margin-top: .80rem"></i>
                        </a>
                        <div class="collapsible-body text-right mr-2">
                            <ul>
                                @can('show_notification')
                                    <li>
                                        <a href="{{route('notification.index')}}" id="sidebar-item"
                                           class="waves-effect font-weight-bold profile-side-item"
                                           style="font-size: .8rem;text-decoration: none">پیام های ارسالی<i
                                                class="fa fa-arrow-left mx-2" aria-hidden="true"></i></a>
                                    </li>
                                @endcan
                                @can('send_notification')
                                    <li>
                                        <a href="{{route('create.send.notification')}}" id="sidebar-item"
                                           class="waves-effect font-weight-bold profile-side-item"
                                           style="font-size: .8rem;text-decoration: none">ارسال پیام جدید<i
                                                class="fa fa-arrow-left mx-2" aria-hidden="true"></i></a>
                                    </li>
                                @endcan
                            </ul>
                        </div>
                    </li>
                @endcan
            </ul>
        </li>
        <!-- Side navigation links -->

    </ul>
    <div class="sidenav-bg mask-strong"></div>
</div>
<!-- Sidebar navigation -->
