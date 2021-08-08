<nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content" data-simplebar="init" style="height: calc(100% - 60px);">
        <div class="simplebar-wrapper" style="margin: 0px;">
            <div class="simplebar-height-auto-observer-wrapper">
                <div class="simplebar-height-auto-observer"></div>
            </div>
            <div class="simplebar-mask">
                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                    <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;">
                        <div class="simplebar-content" style="padding: 0px;">
                            <div class="sidebar-brand active">
                                <a href="{{route('dashboard')}}">
                                    <img src="https://forcky.com/assets/images/store-logo4.png" height="30"
                                         class="logo-light-mode" alt=""
                                         style="margin-bottom: 10px">
                                    <span style="font-size: 24px; font-weight: bold">FoodBooking</span>
                                </a>
                            </div>

                            <ul class="sidebar-menu pt-3">
                                <li>
                                    <a href="{{route('dashboard')}}">
                                        <i class="uil uil-dashboard me-2 d-inline-block"></i>
                                        Bảng điều khiển
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('categories')}}">
                                        <i
                                            class="uil uil-apps me-2 d-inline-block"></i>
                                        Quản lý thể loại
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="uil uil-user me-2 d-inline-block"></i>
                                        Quản lý khách hàng
                                    </a>
                                </li>

                                <li>
                                    <a href="{{route('stores')}}">
                                        <i class="uil uil-store me-2 d-inline-block"></i>
                                        Quản lý cửa hàng
                                    </a>
                                </li>

                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="uil uil-coffee me-2 d-inline-block"></i>
                                        Quản lý đồ ăn
                                    </a>
                                </li>

                                <li>
                                    <a href="javascript:void(0)">
                                        <i
                                            class="uil uil-shopping-cart me-2 d-inline-block"></i>
                                        Quản lý đơn hàng
                                    </a>
                                </li>

                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="uil uil-flip-h me-2 d-inline-block"></i>
                                        Quản lý khuyến mãi
                                    </a>
                                </li>

                                {{--                                <li class="sidebar-dropdown">--}}
                                {{--                                    <a href="javascript:void(0)"><i--}}
                                {{--                                            class="uil uil-file me-2 d-inline-block"></i>Pages</a>--}}
                                {{--                                    <div class="sidebar-submenu">--}}
                                {{--                                        <ul>--}}
                                {{--                                            <li><a href="faqs.html">FAQs</a></li>--}}
                                {{--                                            <li><a href="review.html">Reviews</a></li>--}}
                                {{--                                            <li><a href="invoice-list.html">Invoice List</a></li>--}}
                                {{--                                            <li><a href="invoice.html">Invoice</a></li>--}}
                                {{--                                            <li><a href="terms.html">Terms &amp; Policy</a></li>--}}
                                {{--                                            <li><a href="privacy.html">Privacy Policy</a></li>--}}
                                {{--                                            <li><a href="error.html">404 !</a></li>--}}
                                {{--                                            <li><a href="blank-page.html">Blank Page</a></li>--}}
                                {{--                                        </ul>--}}
                                {{--                                    </div>--}}
                                {{--                                </li>--}}

                                {{--                                <li class="sidebar-dropdown">--}}
                                {{--                                    <a href="javascript:void(0)"><i class="uil uil-sign-in-alt me-2 d-inline-block"></i>Authentication</a>--}}
                                {{--                                    <div class="sidebar-submenu">--}}
                                {{--                                        <ul>--}}
                                {{--                                            <li><a href="login.html">Login</a></li>--}}
                                {{--                                            <li><a href="signup.html">Signup</a></li>--}}
                                {{--                                            <li><a href="forgot-password.html">Forgot Password</a></li>--}}
                                {{--                                            <li><a href="lock-screen.html">Lock Screen</a></li>--}}
                                {{--                                            <li><a href="thankyou.html">Thank you...!</a></li>--}}
                                {{--                                        </ul>--}}
                                {{--                                    </div>--}}
                                {{--                                </li>--}}

                                {{--                                <li><a href="components.html"><i class="uil uil-cube me-2 d-inline-block"></i>Components</a>--}}
                                {{--                                </li>--}}

                                {{--                                <li><a href="../landing/index-two.html" target="_blank"><i--}}
                                {{--                                            class="uil uil-window me-2 d-inline-block"></i>Landing page</a></li>--}}
                            </ul>
                            <!-- sidebar-menu  -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="simplebar-placeholder" style="width: auto; height: 603px;"></div>
        </div>
        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
            <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
        </div>
        <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
            <div class="simplebar-scrollbar"
                 style="height: 258px; display: block; transform: translate3d(0px, 0px, 0px);"></div>
        </div>
    </div>
    <!-- sidebar-content  -->
    <ul class="sidebar-footer list-unstyled mb-0">
        <li class="list-inline-item mb-0 ms-1">
            <a href="#" class="btn btn-icon btn-pills btn-soft-primary">
                <i class="uil uil-comment icons"></i>
            </a>
        </li>
    </ul>
</nav>
