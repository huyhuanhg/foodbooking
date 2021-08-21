<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Foodbooking | @yield('title')</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}">

    <!-- Bootstrap -->
    <link href="{{ asset('/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>

    <!-- simplebar -->
    <link href="{{ asset('/css/pages/admin/simplebar.css') }}" rel="stylesheet" type="text/css"/>

    <!-- Select2 -->
    <link href="{{ asset('/css/pages/admin/select2.css') }}" rel="stylesheet"/>

    <!-- Icons -->
    <link href="{{ asset('/css/pages/admin/materialdesignicons.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/css/pages/admin/remixicon.css') }}" rel="stylesheet" type="text/css"/>
    <script src="https://kit.fontawesome.com/efc0cf8ca8.js" crossorigin="anonymous"></script>
    <link href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" rel="stylesheet">

    <!-- SLIDER -->
    <link href="{{ asset('/css/pages/admin/tiny-slider.css') }}" rel="stylesheet"/>

    <!-- Css -->
    <link href="{{ asset('/css/pages/admin/style.css') }}" rel="stylesheet" type="text/css" id="theme-opt"/>
    <link rel="stylesheet" href="{{asset('/css/pages/admin/otherStyle.css')}}">

    @yield('css_external')
    <style>
        @yield('css_inline')
    </style>


    <!-- javascript -->
    <script src="{{asset('/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- simplebar -->
    <script src="{{asset('/js/simplebar.min.js')}}"></script>
    <!-- Chart -->
    {{--<script src="{{asset('/js/apexcharts.min.js')}}"></script>--}}
    {{--<script src="{{asset('/js/columnchart.init.js')}}"></script>--}}
<!-- Icons -->
    <script src="{{asset('/js/feather.min.js')}}"></script>
    <script src="{{asset('/js/library/libCommon.js')}}"></script>

    @yield('js_declare')
</head>

<body>
<!-- Loader -->
<div id="preloader">
    <div id="status">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
</div>
<!-- Loader -->

<div class="page-wrapper doctris-theme toggled">
{{view('blocks.admins.sidebar')}}
<!-- sidebar-wrapper  -->

    <!-- Start Page Content -->
    <main class="page-content bg-light">

    {{view('blocks.admins.header')}}
    @yield('main_content')
    <!--end container-->

        <!-- Footer Start -->
    {{view('blocks.admins.footer')}}
    <!--end footer-->
        <!-- End -->
    </main>
    <!--End page-content" -->
</div>

<!-- page-wrapper -->

<!-- Offcanvas Start -->
{{--<div class="offcanvas offcanvas-end bg-white shadow" tabindex="-1" id="offcanvasRight"--}}
{{--     aria-labelledby="offcanvasRightLabel">--}}
{{--    <div class="offcanvas-header p-4 border-bottom">--}}
{{--        <h5 id="offcanvasRightLabel" class="mb-0">--}}
{{--            <img src="" height="24" class="light-version" alt="">--}}
{{--            <img src="" height="24" class="dark-version" alt="">--}}
{{--        </h5>--}}
{{--        <button type="button" class="btn-close d-flex align-items-center text-dark" data-bs-dismiss="offcanvas"--}}
{{--                aria-label="Close"><i class="uil uil-times fs-4"></i></button>--}}
{{--    </div>--}}
{{--    <div class="offcanvas-body p-4 px-md-5">--}}
{{--        <div class="row">--}}
{{--            <div class="col-12">--}}
{{--                <!-- Style switcher -->--}}
{{--                <div id="style-switcher">--}}
{{--                    <div>--}}
{{--                        <ul class="text-center list-unstyled mb-0">--}}
{{--                            <li class="d-grid"><a href="javascript:void(0)" class="rtl-version t-rtl-light"--}}
{{--                                                  onclick="setTheme('style-rtl')"><img--}}
{{--                                        src=""--}}
{{--                                        class="img-fluid rounded-md shadow-md d-block" alt=""><span--}}
{{--                                        class="text-muted mt-2 d-block">RTL Version</span></a></li>--}}
{{--                            <li class="d-grid"><a href="javascript:void(0)" class="ltr-version t-ltr-light"--}}
{{--                                                  onclick="setTheme('style')"><img--}}
{{--                                        src=""--}}
{{--                                        class="img-fluid rounded-md shadow-md d-block" alt=""><span--}}
{{--                                        class="text-muted mt-2 d-block">LTR Version</span></a></li>--}}
{{--                            <li class="d-grid"><a href="javascript:void(0)" class="dark-rtl-version t-rtl-dark"--}}
{{--                                                  onclick="setTheme('style-dark-rtl')"><img--}}
{{--                                        src=""--}}
{{--                                        class="img-fluid rounded-md shadow-md d-block" alt=""><span--}}
{{--                                        class="text-muted mt-2 d-block">RTL Version</span></a></li>--}}
{{--                            <li class="d-grid"><a href="javascript:void(0)" class="dark-ltr-version t-ltr-dark"--}}
{{--                                                  onclick="setTheme('style-dark')"><img--}}
{{--                                        src=""--}}
{{--                                        class="img-fluid rounded-md shadow-md d-block" alt=""><span--}}
{{--                                        class="text-muted mt-2 d-block">LTR Version</span></a></li>--}}
{{--                            <li class="d-grid"><a href="javascript:void(0)" class="dark-version t-dark mt-4"--}}
{{--                                                  onclick="setTheme('style-dark')"><img--}}
{{--                                        src=""--}}
{{--                                        class="img-fluid rounded-md shadow-md d-block" alt=""><span--}}
{{--                                        class="text-muted mt-2 d-block">Dark Version</span></a></li>--}}
{{--                            <li class="d-grid"><a href="javascript:void(0)" class="light-version t-light mt-4"--}}
{{--                                                  onclick="setTheme('style')"><img--}}
{{--                                        src=""--}}
{{--                                        class="img-fluid rounded-md shadow-md d-block" alt=""><span--}}
{{--                                        class="text-muted mt-2 d-block">Light Version</span></a></li>--}}
{{--                            <li class="d-grid"><a href="../landing/index.html" target="_blank" class="mt-4"><img--}}
{{--                                        src=""--}}
{{--                                        class="img-fluid rounded-md shadow-md d-block" alt=""><span--}}
{{--                                        class="text-muted mt-2 d-block">Landing Demos</span></a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- end Style switcher -->--}}
{{--            </div><!--end col-->--}}
{{--        </div><!--end row-->--}}
{{--    </div>--}}

{{--    <div class="offcanvas-footer p-4 border-top text-center">--}}
{{--        <ul class="list-unstyled social-icon mb-0">--}}
{{--            <li class="list-inline-item mb-0"><a href="https://1.envato.market/doctris" target="_blank" class="rounded"><i--}}
{{--                        class="uil uil-shopping-cart align-middle" title="Buy Now"></i></a></li>--}}
{{--            <li class="list-inline-item mb-0"><a href="https://dribbble.com/shreethemes" target="_blank"--}}
{{--                                                 class="rounded"><i class="uil uil-dribbble align-middle"--}}
{{--                                                                    title="dribbble"></i></a></li>--}}
{{--            <li class="list-inline-item mb-0"><a href="https://www.facebook.com/shreethemes" target="_blank"--}}
{{--                                                 class="rounded"><i class="uil uil-facebook-f align-middle"--}}
{{--                                                                    title="facebook"></i></a></li>--}}
{{--            <li class="list-inline-item mb-0"><a href="https://www.instagram.com/shreethemes/" target="_blank"--}}
{{--                                                 class="rounded"><i class="uil uil-instagram align-middle"--}}
{{--                                                                    title="instagram"></i></a></li>--}}
{{--            <li class="list-inline-item mb-0"><a href="https://twitter.com/shreethemes" target="_blank" class="rounded"><i--}}
{{--                        class="uil uil-twitter align-middle" title="twitter"></i></a></li>--}}
{{--            <li class="list-inline-item mb-0"><a href="mailto:support@shreethemes.in" class="rounded"><i--}}
{{--                        class="uil uil-envelope align-middle" title="email"></i></a></li>--}}
{{--            <li class="list-inline-item mb-0"><a href="https://shreethemes.in" target="_blank" class="rounded"><i--}}
{{--                        class="uil uil-globe align-middle" title="website"></i></a></li>--}}
{{--        </ul><!--end icon-->--}}
{{--    </div>--}}
{{--</div>--}}

<!-- Main Js -->
<script src="{{asset('/js/app.js')}}"></script>
@yield('js_external_body_bottom')
@yield('js_inline')
</body>
</html>
