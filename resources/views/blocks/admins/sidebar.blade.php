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
                                        <i class="uil uil-apps me-2 d-inline-block"></i>
                                        Quản lý danh mục
                                    </a>
                                </li>

                                <li>
                                    <a href="{{route('customers')}}">
                                        <i class="uil uil-chat-bubble-user me-2 d-inline-block"></i>
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
                                    <a href="{{route('foods')}}">
                                        <i class="uil uil-crockery me-2 d-inline-block"></i>
                                        Quản lý đồ ăn
                                    </a>
                                </li>

                                <li>
                                    <a href="{{route('orders')}}">
                                        <i
                                            class="uil uil-shopping-cart me-2 d-inline-block"></i>
                                        Quản lý đơn hàng
                                    </a>
                                </li>

                                <li>
                                    <a href="{{route('promotions')}}">
                                        <i class="uil uil-percentage me-2 d-inline-block"></i>
                                        Quản lý khuyến mãi
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="uil uil-user me-2 d-inline-block"></i>
                                        Quản lý người dùng
                                    </a>
                                </li>
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
