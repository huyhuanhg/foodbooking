<div class="top-header">
    <div class="header-bar d-flex justify-content-between border-bottom">
        <div class="d-flex align-items-center">
            <a id="close-sidebar" class="btn btn-icon btn-pills btn-soft-primary ms-2" href="#">
                <i class="uil uil-bars"></i>
            </a>
            <div class="search-bar p-0 d-none d-md-block ms-2">
                <div id="search" class="menu-search mb-0">
                    <form role="search" method="get" id="searchform" class="searchform">
                        <div>
                            <input type="text" class="form-control border rounded-pill" name="s" id="s"
                                   placeholder="Tìm kiếm">
                            <input type="submit" id="searchsubmit" value="Search">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <ul class="list-unstyled mb-0">

            <li class="list-inline-item mb-0 ms-1">
                <a href="javascript:void(0)" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                   aria-controls="offcanvasRight">
                    <div class="btn btn-icon btn-pills btn-soft-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-settings fea icon-sm">
                            <circle cx="12" cy="12" r="3"></circle>
                            <path
                                d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                            </path>
                        </svg>
                    </div>
                </a>
            </li>

            <li class="list-inline-item mb-0 ms-1">
                <div class="dropdown dropdown-primary">
                    {{--tin nhắn--}}
                    <button type="button" class="btn btn-icon btn-pills btn-soft-primary dropdown-toggle p-0"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-mail fea icon-sm">
                            <path
                                d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                            </path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                    </button>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        0{{--số tin nhắn--}}
                        <span class="visually-hidden">unread mail</span>
                    </span>

                    <div class="dropdown-menu dd-menu dropdown-menu-end bg-white shadow rounded border-0 mt-3 px-2 py-2"
                         data-simplebar="init" style="height: 320px; width: 300px;">
                        <div class="simplebar-wrapper" style="margin: -8px;">
                            <div class="simplebar-height-auto-observer-wrapper">
                                <div class="simplebar-height-auto-observer"></div>
                            </div>
                            <div class="simplebar-mask">
                                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                    <div class="simplebar-content-wrapper" style="height: auto; overflow: hidden;">
                                        <div class="simplebar-content" style="padding: 8px;">
                                            <a href="#" class="d-flex align-items-center justify-content-between py-2">
                                                <div class="d-inline-flex position-relative overflow-hidden">
                                                    <img src="" class="avatar avatar-md-sm rounded-circle shadow"
                                                         alt="">
                                                    <small class="text-dark mb-0 d-block text-truncat ms-3">
                                                        You received a new email from <b>Janalia</b>
                                                        <small class="text-muted fw-normal d-inline-block">
                                                            1 hour ago
                                                        </small>
                                                    </small>
                                                </div>
                                            </a>

                                            <a href="#"
                                               class="d-flex align-items-center justify-content-between py-2 border-top">
                                                <div class="d-inline-flex position-relative overflow-hidden">
                                                    <img src="" class="avatar avatar-md-sm rounded-circle shadow"
                                                         alt="">
                                                    <small class="text-dark mb-0 d-block text-truncat ms-3">
                                                        You received a new email from <b>codepen</b>
                                                        <small class="text-muted fw-normal d-inline-block">
                                                            4 hour ago
                                                        </small>
                                                    </small>
                                                </div>
                                            </a>

                                            <a href="#"
                                               class="d-flex align-items-center justify-content-between py-2 border-top">
                                                <div class="d-inline-flex position-relative overflow-hidden">
                                                    <img src=""
                                                         class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                                    <small class="text-dark mb-0 d-block text-truncat ms-3">
                                                        You received a new email from <b>Cristina</b>
                                                        <small class="text-muted fw-normal d-inline-block">
                                                            5 hour ago
                                                        </small>
                                                    </small>
                                                </div>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div>
                        </div>
                        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                            <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                        </div>
                        <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                            <div class="simplebar-scrollbar" style="height: 0px; display: none;"></div>
                        </div>
                    </div>
                </div>
            </li>

            <li class="list-inline-item mb-0 ms-1">
                <div class="dropdown dropdown-primary">
                    <button type="button" class="btn btn-pills btn-soft-primary dropdown-toggle p-0"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        @if(auth('admin')->user()->avatar)
                            'Ảnh'
                        @else
                            <p
                                class="avatar avatar-ex-small rounded-circle shadow"
                                style="margin-bottom: 0; display: flex; justify-content: center; align-items: center">
                                <span>{{auth('admin')->user()->last_name[0]}}</span>
                            </p>
                        @endif
                        {{--                        ảnh đại diện--}}
                        {{--                        <img--}}
                        {{--                            src="../assets/images/doctors/01.jpg" class="avatar avatar-ex-small rounded-circle" alt="">--}}
                    </button>
                    <div class="dropdown-menu dd-menu dropdown-menu-end bg-white shadow border-0 mt-3 py-3"
                         style="min-width: 200px;">
                        <a class="dropdown-item d-flex align-items-center text-dark" href="profile.html">
                            @if(auth('admin')->user()->avatar)
                                'Ảnh'
                            @else
                                <p
                                    class="avatar avatar-ex-small rounded-circle shadow"
                                    style="margin-bottom: 0; display: flex; justify-content: center; align-items: center">
                                    <span>{{auth('admin')->user()->last_name[0]}}</span>
                                </p>
                            @endif
                            {{--                        ảnh đại diện--}}
                            {{--                        <img--}}
                            {{--                            src="../assets/images/doctors/01.jpg" class="avatar avatar-ex-small rounded-circle" alt="">--}}
                            <div class="flex-1 ms-2">
                                <span class="d-block mb-1">
                                    {{ auth('admin')->user()->first_name . ' ' .auth('admin')->user()->last_name}}
                                </span>
                                <small class="text-muted">{{ auth('admin')->user()->email }}</small>
                            </div>
                        </a>
                        <a class="dropdown-item text-dark" href="{{route('dashboard')}}">
                            <span class="mb-0 d-inline-block me-1">
                                <i class="uil uil-dashboard align-middle h6"></i>
                            </span>
                            Bảng điều khiển
                        </a>
                        <a class="dropdown-item text-dark" href="dr-profile.html">
                            <span class="mb-0 d-inline-block me-1">
                                <i class="uil uil-setting align-middle h6"></i>
                            </span>
                            Thông tinh cá nhân
                        </a>
                        <div class="dropdown-divider border-top"></div>
                        <form id="logout" method="post" action="{{route('manager.logout')}}">
                            @csrf
                        </form>
                        <a class="dropdown-item text-dark" href=""
                           onclick="event.preventDefault();
                           document.getElementById('logout').submit()">
                            <span class="mb-0 d-inline-block me-1">
                                <i class="uil uil-sign-out-alt align-middle h6"></i>
                            </span>
                            Đăng xuất
                        </a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
