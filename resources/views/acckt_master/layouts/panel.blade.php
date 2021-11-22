<!DOCTYPE html>
<html class="loading" lang="fa" data-textdirection="rtl" dir="rtl">
  <!-- BEGIN: Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>شتابدهنده اندیشه خوارزم</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/acckt/img/favicon.ico') }}">
	<meta name="theme-color" content="#5A8DEE">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/panel_assets/vendors/css/vendors.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('/panel_assets/vendors/css/extensions/swiper.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/panel_assets/vendors/css/forms/select/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/panel_assets/vendors/css/pickers/datepicker-jalali/bootstrap-datepicker.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/panel_assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/panel_assets/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/panel_assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/panel_assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/panel_assets/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/panel_assets/css/themes/semi-dark-layout.css') }}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/panel_assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/panel_assets/css/plugins/forms/validation/form-validation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/panel_assets/css/plugins/extensions/swiper.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/panel_assets/vendors/css/extensions/sweetalert2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/panel_assets/css/pages/faq.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/panel_assets/css/core/menu/menu-types/horizontal-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/panel_assets/css/pages/authentication.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/panel_assets/css/plugins/forms/wizard.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/panel_assets/css/pages/app-email.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lalezar">
    <!-- END: Page CSS-->
    <!--{% framework extras %}-->
    <link rel="stylesheet" property="stylesheet" href="/modules/system/assets/css/framework.extras.css">
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <style>
      .main-menu.menu-dark .navigation li a {
        color: #fff;
      }

      .main-menu.menu-dark {
        background: #153a64 !important;
      }

      .main-menu.menu-dark .navigation {
        background: #153a64 !important;
      }

      .main-menu.menu-dark .navigation > li.nav-item.open.has-sub.open{
        background-color: #153a64 !important;
      }

      .main-menu.menu-dark .navigation > li > ul > li:first-child > a.disabled {
        color: #7b889d;
      }

      .main-menu .navbar-header {
        padding: 0.85rem 1.3rem 0.3rem 1.45rem !important;
      }
    </style>

    @yield('headerScript')
  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <!--<body class="vertical-layout vertical-menu-modern dark-layout 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="dark-layout">-->
  <body class="vertical-layout vertical-menu-modern 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
  @include('sweet::alert')
  @include('acckt_master.partials.panel.header_menu')
  @include('acckt_master.partials.panel.right_menu')

  @yield('content')

    <!-- widget chat demo ends -->

    <!-- </div>-->



    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    @include('acckt_master.partials.panel.footer_menu')


    <!-- BEGIN: Vendor JS -->
    <script src="{{ asset('/acckt/js/jquery.min.js') }}"></script>
    <!--<script src="{{ asset('/acckt/js/bootstrap.min.js') }}"></script>-->
    <script src="{{ asset('/panel_assets/vendors/js/vendors.min.js') }}"></script>

    <script src="{{ asset('/panel_assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.min.js') }}"></script>
    <script src="{{ asset('/panel_assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js') }}"></script>
    <script src="{{ asset('/panel_assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('/panel_assets/vendors/js/extensions/swiper.min.js') }}"></script>
    <script src="{{ asset('/panel_assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
    <script src="{{ asset('/panel_assets/vendors/js/forms/validation/jqBootstrapValidation.js') }}"></script>
    <script src="{{ asset('/panel_assets/vendors/js/pickers/datepicker-jalali/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('/panel_assets/vendors/js/pickers/datepicker-jalali/bootstrap-datepicker.fa.min.js') }}"></script>
    <script src="{{ asset('/panel_assets/vendors/js/extensions/dropzone.min.js') }}"></script>
    <script src="{{ asset('/panel_assets/vendors/js/forms/repeater/jquery.repeater.min.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('/panel_assets/js/scripts/configs/vertical-menu-dark.js') }}"></script>
    <script src="{{ asset('/panel_assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('/panel_assets/js/core/app.js') }}"></script>
    <script src="{{ asset('/panel_assets/js/scripts/components.js') }}"></script>
    <script src="{{ asset('/panel_assets/js/scripts/footer.js') }}"></script>
    <script src="{{ asset('/panel_assets/js/scripts/customizer.js') }}"></script>
    <script src="{{ asset('/panel_assets/vendors/js/extensions/jquery.steps.js') }}"></script>
    <script src="{{ asset('/panel_assets/vendors/js/extensions/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('/panel_assets/vendors/js/forms/validation/jquery.validate.min.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('/panel_assets/js/scripts/pages/page-account-settings.js') }}"></script>
    <script src="{{ asset('/panel_assets/js/scripts/forms/form-repeater.js') }}"></script>
    <script src="{{ asset('/panel_assets/js/scripts/forms/wizard-steps.js') }}"></script>
    <script src="{{ asset('/panel_assets/js/scripts/forms/validation/form-validation.js') }}"></script>
    <script src="{{ asset('/panel_assets/js/scripts/pages/faq.js') }}"></script>
    <script src="{{ asset('/panel_assets/js/scripts/pages/app-email.js') }}"></script>
    <!-- END: Page JS-->


  @yield('footerScript')

  </body>
  <!-- END: Body-->
</html>
