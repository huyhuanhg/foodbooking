@extends('layouts.admin')

@section('title', 'Quản lý khách hàng')
@section('css_inline')
@endsection
@section('js_use')
@stop

@section('main_content')
    <div class="container-fluid">
        <div class="layout-specing">
            <div class="row mb-4">
                <div class="col">
                    <h5 class="mb-0">Quản lý khách hàng</h5>
                    <nav aria-label="breadcrumb" class="d-inline-block mt-2">
                        <ul class="breadcrumb breadcrumb-muted bg-transparent rounded mb-0 p-0">
                            <li class="breadcrumb-item">
                                <a href="{{route('customers')}}"><small>Quản lý khách hàng</small></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <small>{{"$customerInfo->first_name $customerInfo->last_name"}}</small>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="card bg-white rounded shadow overflow-hidden mt-4 border-0">
                <div class="p-5 bg-primary bg-gradient"></div>
                <div class="avatar-profile d-flex margin-nagative mt-n5 position-relative ps-3">
                    @if(!$customerInfo->avatar)
                        <img
                            src="{{$customerInfo->gender === 0 ? asset('images/default/no-image-female.jpeg') : asset('images/default/no-image-male.jpeg')}}"
                            class="rounded-circle shadow-md avatar avatar-medium" alt="">
                    @else
                        <img src="{{asset('images/uploads/userAvatar/'.$customerInfo->avatar)}}"
                             class="rounded-circle shadow-md avatar avatar-medium" alt="">
                    @endif
                    <div class="mt-4 ms-3 pt-3">
                        <h5 class="mt-3 mb-1">{{"$customerInfo->first_name $customerInfo->last_name"}}</h5>
                        <p class="text-muted mb-0">Người tiêu dùng</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 mt-4">
                        <div class="card border-0 rounded-0 p-4">
                            <ul class="nav nav-pills nav-justified flex-column flex-sm-row rounded shadow overflow-hidden bg-light"
                                id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link rounded-0 active" id="overview-tab" data-bs-toggle="pill"
                                       href="#pills-overview" role="tab" aria-controls="pills-overview"
                                       aria-selected="false">
                                        <div class="text-center pt-1 pb-1">
                                            <h4 class="title fw-normal mb-0">Thông tin</h4>
                                        </div>
                                    </a><!--end nav link-->
                                </li><!--end nav item-->

                                <li class="nav-item">
                                    <a class="nav-link rounded-0" id="experience-tab" data-bs-toggle="pill"
                                       href="#pills-experience" role="tab" aria-controls="pills-experience"
                                       aria-selected="false">
                                        <div class="text-center pt-1 pb-1">
                                            <h4 class="title fw-normal mb-0">Thống kê</h4>
                                        </div>
                                    </a><!--end nav link-->
                                </li><!--end nav item-->

                                <li class="nav-item">
                                    <a class="nav-link rounded-0" id="review-tab" data-bs-toggle="pill"
                                       href="#pills-review" role="tab" aria-controls="pills-review"
                                       aria-selected="false">
                                        <div class="text-center pt-1 pb-1">
                                            <h4 class="title fw-normal mb-0">Hành động</h4>
                                        </div>
                                    </a><!--end nav link-->
                                </li><!--end nav item-->

                                <li class="nav-item">
                                    <a class="nav-link rounded-0" id="timetable-tab" data-bs-toggle="pill"
                                       href="#pills-timetable" role="tab" aria-controls="pills-timetable"
                                       aria-selected="false">
                                        <div class="text-center pt-1 pb-1">
                                            <h4 class="title fw-normal mb-0">Giao dịch</h4>
                                        </div>
                                    </a><!--end nav link-->
                                </li><!--end nav item-->

                                <li class="nav-item">
                                    <a class="nav-link rounded-0" id="settings-tab" data-bs-toggle="pill"
                                       href="#pills-settings" role="tab" aria-controls="pills-settings"
                                       aria-selected="false">
                                        <div class="text-center pt-1 pb-1">
                                            <h4 class="title fw-normal mb-0">Cài đặt</h4>
                                        </div>
                                    </a><!--end nav link-->
                                </li><!--end nav item-->
                            </ul><!--end nav pills-->

                            <div class="tab-content mt-2" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-overview" role="tabpanel"
                                     aria-labelledby="overview-tab">
                                    <p class="text-muted">
                                        {{-- Description--}}
                                        {{$customerInfo->descripton}}
                                    </p>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 mt-4 mt-lg-0 pt-2 pt-lg-0">
                                            <h6 class="mb-0">Thông tin khách hàng: </h6>
                                            <ul class="list-unstyled mt-4">
                                                {{--                                                <li class="mt-1">--}}
                                                {{--                                                    <i class="far fa-envelope text-primary mx-1" style="width: 18px;"></i>--}}
                                                {{--                                                    --}}{{--                                            /<i class="uil uil-arrow-right text-primary"></i>--}}
                                                {{--                                                    <span class="text-muted">Email:</span> {{$customerInfo->email}}--}}
                                                {{--                                                </li>--}}
                                                {{--                                                <li class="mt-1">--}}
                                                {{--                                                    <i class="fas fa-phone-alt text-primary mx-1" style="width: 18px;"></i>--}}
                                                {{--                                                    <span class="text-muted">Số điện thoại:</span> {{$customerInfo->phone}}--}}
                                                {{--                                                </li>--}}
                                                <li class="mt-1">
                                                    <i class="fas fa-venus-mars text-primary mx-1"
                                                       style="width: 18px;"></i>
                                                    <span
                                                        class="text-muted">Giới tính:</span> {{$customerInfo->gender === 1 ? "Nam" : "Nữ"}}
                                                </li>
                                                <li class="mt-1">
                                                    <i class="fas fa-birthday-cake text-primary mx-1"
                                                       style="width: 18px;"></i>
                                                    <span
                                                        class="text-muted">Ngày sinh:</span> {{$customerInfo->birthday ? $customerInfo->birthday: '???'}}
                                                </li>
                                                <li class="mt-1">
                                                    <i class="fas fa-map-marker-alt text-primary mx-1"
                                                       style="width: 18px;"></i>
                                                    <span class="text-muted">Địa chỉ:</span> {{$customerInfo->address}}
                                                </li>
                                                <li class="mt-1">
                                                    <i class="far fa-calendar-minus text-primary mx-1"
                                                       style="width: 18px;"></i>
                                                    <span
                                                        class="text-muted">Tình trạng:</span> {{!$customerInfo->status ? "Bình thường":"Hạn chế"}}
                                                </li>
                                            </ul>
                                        </div><!--end col-->


                                        <div class="col-lg-4 col-md-6 mt-4 mt-lg-0 pt-2 pt-lg-0">
                                            <div class="card border-0 text-center features feature-primary">
                                                <div class="icon text-center mx-auto rounded-md">
                                                    <i class="uil uil-phone h3 mb-0"></i>
                                                </div>

                                                <div class="card-body p-0 mt-4">
                                                    <h5 class="title fw-bold">Phone</h5>
                                                    {{--                                                    <p class="text-muted">Great doctor if you need your family member to--}}
                                                    {{--                                                        get effective immediate assistance</p>--}}
                                                    <a href="tel:+152534-468-854"
                                                       class="link">{{$customerInfo->phone}}</a>
                                                </div>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-lg-4 col-md-6 mt-4 mt-lg-0 pt-2 pt-lg-0">
                                            <div class="card border-0 text-center features feature-primary">
                                                <div class="icon text-center mx-auto rounded-md">
                                                    <i class="uil uil-envelope h3 mb-0"></i>
                                                </div>

                                                <div class="card-body p-0 mt-4">
                                                    <h5 class="title fw-bold">Email</h5>
                                                    {{--                                                    <p class="text-muted">Great doctor if you need your family member to--}}
                                                    {{--                                                        get effective immediate assistance</p>--}}
                                                    <a href="mailto:contact@example.com"
                                                       class="link">{{$customerInfo->email}}</a>
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                    </div>
                                </div><!--end teb pane-->

                                <div class="tab-pane fade" id="pills-experience" role="tabpanel"
                                     aria-labelledby="experience-tab">
                                    <h5 class="mb-1">Experience:</h5>

                                    <p class="text-muted mt-4">The most well-known dummy text is the 'Lorem Ipsum',
                                        which is said to have originated in the 16th century. Lorem Ipsum is composed in
                                        a pseudo-Latin language which more or less corresponds to 'proper' Latin. It
                                        contains a series of real Latin words. This ancient dummy text is also
                                        incomprehensible, but it imitates the rhythm of most European languages in Latin
                                        script. The advantage of its Latin origin and the relative meaninglessness of
                                        Lorum Ipsum is that the text does not attract attention to itself or distract
                                        the viewer's attention from the layout.</p>

                                    <h6 class="mb-0">Professional Experience:</h6>

                                    <div class="row">
                                        <div class="col-12 mt-4">
                                            <div class="col-md-12">
                                                <div class="tns-outer" id="tns2-ow">
                                                    <div class="tns-liveregion tns-visually-hidden" aria-live="polite"
                                                         aria-atomic="true">slide <span class="current">1 to 4</span> of
                                                        5
                                                    </div>
                                                    <div id="tns2-mw" class="tns-ovh">
                                                        <div class="tns-inner" id="tns2-iw">
                                                            <div
                                                                class="slider-range-four tiny-timeline  tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal"
                                                                id="tns2" style="transform: translate3d(0%, 0px, 0px);">
                                                                <div
                                                                    class="tiny-slide text-center tns-item tns-slide-active"
                                                                    id="tns2-item0">
                                                                    <div
                                                                        class="card border-0 p-4 item-box mb-2 shadow rounded">
                                                                        <p class="text-muted mb-0">2010 - 2014</p>
                                                                        <h6 class="mt-1">Master Of Science</h6>
                                                                        <p class="text-muted mb-0">X.Y.Z Hospital
                                                                            (NZ)</p>
                                                                    </div>
                                                                </div>

                                                                <div
                                                                    class="tiny-slide text-center tns-item tns-slide-active"
                                                                    id="tns2-item1">
                                                                    <div
                                                                        class="card border-0 p-4 item-box mb-2 shadow rounded">
                                                                        <p class="text-muted mb-0">2014 - 2016</p>
                                                                        <h6 class="mt-1">Gynecology Test</h6>
                                                                        <p class="text-muted mb-0">X.Y.Z Hospital
                                                                            (NZ)</p>
                                                                    </div>
                                                                </div>

                                                                <div
                                                                    class="tiny-slide text-center tns-item tns-slide-active"
                                                                    id="tns2-item2">
                                                                    <div
                                                                        class="card border-0 p-4 item-box mb-2 shadow rounded">
                                                                        <p class="text-muted mb-0">2016 - 2019</p>
                                                                        <h6 class="mt-1">Master Of Medicine</h6>
                                                                        <p class="text-muted mb-0">X.Y.Z Hospital
                                                                            (NZ)</p>
                                                                    </div>
                                                                </div>

                                                                <div
                                                                    class="tiny-slide text-center tns-item tns-slide-active"
                                                                    id="tns2-item3">
                                                                    <div
                                                                        class="card border-0 p-4 item-box mb-2 shadow rounded">
                                                                        <p class="text-muted mb-0">2019 - 2020</p>
                                                                        <h6 class="mt-1">Orthopedics</h6>
                                                                        <p class="text-muted mb-0">X.Y.Z Hospital
                                                                            (NZ)</p>
                                                                    </div>
                                                                </div>

                                                                <div class="tiny-slide text-center tns-item"
                                                                     id="tns2-item4" aria-hidden="true" tabindex="-1">
                                                                    <div
                                                                        class="card border-0 p-4 item-box mb-2 shadow rounded">
                                                                        <p class="text-muted mb-0">2020 to
                                                                            continue..</p>
                                                                        <h6 class="mt-1">Gynecologist (Final)</h6>
                                                                        <p class="text-muted mb-0">X.Y.Z Hospital
                                                                            (NZ)</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tns-nav" aria-label="Carousel Pagination">
                                                        <button type="button" data-nav="0" aria-controls="tns2" style=""
                                                                aria-label="Carousel Page 1 (Current Slide)"
                                                                class="tns-nav-active"></button>
                                                        <button type="button" data-nav="1" aria-controls="tns2" style=""
                                                                aria-label="Carousel Page 2" class=""
                                                                tabindex="-1"></button>
                                                        <button type="button" data-nav="2" tabindex="-1"
                                                                aria-controls="tns2" style="display:none"
                                                                aria-label="Carousel Page 3"></button>
                                                        <button type="button" data-nav="3" tabindex="-1"
                                                                aria-controls="tns2" style="display:none"
                                                                aria-label="Carousel Page 4"></button>
                                                        <button type="button" data-nav="4" tabindex="-1"
                                                                aria-controls="tns2" style="display:none"
                                                                aria-label="Carousel Page 5"></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end teb pane-->

                                <div class="tab-pane fade" id="pills-review" role="tabpanel"
                                     aria-labelledby="review-tab">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8 text-center">
                                            <div class="tns-outer" id="tns1-ow">
                                                <div class="tns-liveregion tns-visually-hidden" aria-live="polite"
                                                     aria-atomic="true">slide <span class="current">5</span> of 6
                                                </div>
                                                <div id="tns1-mw" class="tns-ovh">
                                                    <div class="tns-inner" id="tns1-iw">
                                                        <div
                                                            class="client-review-slider  tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal"
                                                            id="tns1"
                                                            style="transform: translate3d(-66.6667%, 0px, 0px);">
                                                            <div class="tiny-slide text-center tns-item" id="tns1-item0"
                                                                 aria-hidden="true" tabindex="-1">
                                                                <p class="text-muted h6 fw-normal fst-italic">" It seems
                                                                    that only fragments of the original text remain in
                                                                    the Lorem Ipsum texts used today. The most
                                                                    well-known dummy text is the 'Lorem Ipsum', which is
                                                                    said to have originated in the 16th century. "</p>
                                                                <img src="../assets/images/client/01.jpg"
                                                                     class="img-fluid avatar avatar-small rounded-circle mx-auto shadow my-3"
                                                                     alt="">
                                                                <ul class="list-unstyled mb-0">
                                                                    <li class="list-inline-item"><i
                                                                            class="mdi mdi-star text-warning"></i></li>
                                                                    <li class="list-inline-item"><i
                                                                            class="mdi mdi-star text-warning"></i></li>
                                                                    <li class="list-inline-item"><i
                                                                            class="mdi mdi-star text-warning"></i></li>
                                                                    <li class="list-inline-item"><i
                                                                            class="mdi mdi-star text-warning"></i></li>
                                                                    <li class="list-inline-item"><i
                                                                            class="mdi mdi-star text-warning"></i></li>
                                                                </ul>
                                                                <h6 class="text-primary">- Thomas Israel <small
                                                                        class="text-muted">C.E.O</small></h6>
                                                            </div><!--end customer testi-->

                                                            <div class="tiny-slide text-center tns-item" id="tns1-item1"
                                                                 aria-hidden="true" tabindex="-1">
                                                                <p class="text-muted h6 fw-normal fst-italic">" The
                                                                    advantage of its Latin origin and the relative
                                                                    meaninglessness of Lorum Ipsum is that the text does
                                                                    not attract attention to itself or distract the
                                                                    viewer's attention from the layout. "</p>
                                                                <img src="../assets/images/client/02.jpg"
                                                                     class="img-fluid avatar avatar-small rounded-circle mx-auto shadow my-3"
                                                                     alt="">
                                                                <ul class="list-unstyled mb-0">
                                                                    <li class="list-inline-item"><i
                                                                            class="mdi mdi-star text-warning"></i></li>
                                                                    <li class="list-inline-item"><i
                                                                            class="mdi mdi-star text-warning"></i></li>
                                                                    <li class="list-inline-item"><i
                                                                            class="mdi mdi-star text-warning"></i></li>
                                                                    <li class="list-inline-item"><i
                                                                            class="mdi mdi-star text-warning"></i></li>
                                                                    <li class="list-inline-item"><i
                                                                            class="mdi mdi-star text-warning"></i></li>
                                                                </ul>
                                                                <h6 class="text-primary">- Carl Oliver <small
                                                                        class="text-muted">P.A</small></h6>
                                                            </div><!--end customer testi-->

                                                            <div class="tiny-slide text-center tns-item" id="tns1-item2"
                                                                 aria-hidden="true" tabindex="-1">
                                                                <p class="text-muted h6 fw-normal fst-italic">" There is
                                                                    now an abundance of readable dummy texts. These are
                                                                    usually used when a text is required purely to fill
                                                                    a space. These alternatives to the classic Lorem
                                                                    Ipsum texts are often amusing and tell short, funny
                                                                    or nonsensical stories. "</p>
                                                                <img src="../assets/images/client/03.jpg"
                                                                     class="img-fluid avatar avatar-small rounded-circle mx-auto shadow my-3"
                                                                     alt="">
                                                                <ul class="list-unstyled mb-0">
                                                                    <li class="list-inline-item"><i
                                                                            class="mdi mdi-star text-warning"></i></li>
                                                                    <li class="list-inline-item"><i
                                                                            class="mdi mdi-star text-warning"></i></li>
                                                                    <li class="list-inline-item"><i
                                                                            class="mdi mdi-star text-warning"></i></li>
                                                                    <li class="list-inline-item"><i
                                                                            class="mdi mdi-star text-warning"></i></li>
                                                                    <li class="list-inline-item"><i
                                                                            class="mdi mdi-star text-warning"></i></li>
                                                                </ul>
                                                                <h6 class="text-primary">- Barbara McIntosh <small
                                                                        class="text-muted">M.D</small></h6>
                                                            </div><!--end customer testi-->

                                                            <div class="tiny-slide text-center tns-item" id="tns1-item3"
                                                                 aria-hidden="true" tabindex="-1">
                                                                <p class="text-muted h6 fw-normal fst-italic">"
                                                                    According to most sources, Lorum Ipsum can be traced
                                                                    back to a text composed by Cicero in 45 BC.
                                                                    Allegedly, a Latin scholar established the origin of
                                                                    the text by compiling all the instances of the
                                                                    unusual word 'consectetur' he could find "</p>
                                                                <img src="../assets/images/client/04.jpg"
                                                                     class="img-fluid avatar avatar-small rounded-circle mx-auto shadow my-3"
                                                                     alt="">
                                                                <ul class="list-unstyled mb-0">
                                                                    <li class="list-inline-item"><i
                                                                            class="mdi mdi-star text-warning"></i></li>
                                                                    <li class="list-inline-item"><i
                                                                            class="mdi mdi-star text-warning"></i></li>
                                                                    <li class="list-inline-item"><i
                                                                            class="mdi mdi-star text-warning"></i></li>
                                                                    <li class="list-inline-item"><i
                                                                            class="mdi mdi-star text-warning"></i></li>
                                                                    <li class="list-inline-item"><i
                                                                            class="mdi mdi-star text-warning"></i></li>
                                                                </ul>
                                                                <h6 class="text-primary">- Christa Smith <small
                                                                        class="text-muted">Manager</small></h6>
                                                            </div><!--end customer testi-->

                                                            <div
                                                                class="tiny-slide text-center tns-item tns-slide-active"
                                                                id="tns1-item4">
                                                                <p class="text-muted h6 fw-normal fst-italic">" It seems
                                                                    that only fragments of the original text remain in
                                                                    the Lorem Ipsum texts used today. The most
                                                                    well-known dummy text is the 'Lorem Ipsum', which is
                                                                    said to have originated in the 16th century. "</p>
                                                                <img src="../assets/images/client/05.jpg"
                                                                     class="img-fluid avatar avatar-small rounded-circle mx-auto shadow my-3"
                                                                     alt="">
                                                                <ul class="list-unstyled mb-0">
                                                                    <li class="list-inline-item"><i
                                                                            class="mdi mdi-star text-warning"></i></li>
                                                                    <li class="list-inline-item"><i
                                                                            class="mdi mdi-star text-warning"></i></li>
                                                                    <li class="list-inline-item"><i
                                                                            class="mdi mdi-star text-warning"></i></li>
                                                                    <li class="list-inline-item"><i
                                                                            class="mdi mdi-star text-warning"></i></li>
                                                                    <li class="list-inline-item"><i
                                                                            class="mdi mdi-star text-warning"></i></li>
                                                                </ul>
                                                                <h6 class="text-primary">- Dean Tolle <small
                                                                        class="text-muted">Developer</small></h6>
                                                            </div><!--end customer testi-->

                                                            <div class="tiny-slide text-center tns-item" id="tns1-item5"
                                                                 aria-hidden="true" tabindex="-1">
                                                                <p class="text-muted h6 fw-normal fst-italic">" It seems
                                                                    that only fragments of the original text remain in
                                                                    the Lorem Ipsum texts used today. One may speculate
                                                                    that over the course of time certain letters were
                                                                    added or deleted at various positions within the
                                                                    text. "</p>
                                                                <img src="../assets/images/client/06.jpg"
                                                                     class="img-fluid avatar avatar-small rounded-circle mx-auto shadow my-3"
                                                                     alt="">
                                                                <ul class="list-unstyled mb-0">
                                                                    <li class="list-inline-item"><i
                                                                            class="mdi mdi-star text-warning"></i></li>
                                                                    <li class="list-inline-item"><i
                                                                            class="mdi mdi-star text-warning"></i></li>
                                                                    <li class="list-inline-item"><i
                                                                            class="mdi mdi-star text-warning"></i></li>
                                                                    <li class="list-inline-item"><i
                                                                            class="mdi mdi-star text-warning"></i></li>
                                                                    <li class="list-inline-item"><i
                                                                            class="mdi mdi-star text-warning"></i></li>
                                                                </ul>
                                                                <h6 class="text-primary">- Jill Webb <small
                                                                        class="text-muted">Designer</small></h6>
                                                            </div><!--end customer testi-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tns-nav" aria-label="Carousel Pagination">
                                                    <button type="button" data-nav="0" aria-controls="tns1" style=""
                                                            aria-label="Carousel Page 1" class=""
                                                            tabindex="-1"></button>
                                                    <button type="button" data-nav="1" aria-controls="tns1" style=""
                                                            aria-label="Carousel Page 2" class=""
                                                            tabindex="-1"></button>
                                                    <button type="button" data-nav="2" aria-controls="tns1" style=""
                                                            aria-label="Carousel Page 3" class=""
                                                            tabindex="-1"></button>
                                                    <button type="button" data-nav="3" aria-controls="tns1" style=""
                                                            aria-label="Carousel Page 4" class=""
                                                            tabindex="-1"></button>
                                                    <button type="button" data-nav="4" aria-controls="tns1" style=""
                                                            aria-label="Carousel Page 5 (Current Slide)"
                                                            class="tns-nav-active"></button>
                                                    <button type="button" data-nav="5" aria-controls="tns1" style=""
                                                            aria-label="Carousel Page 6" class=""
                                                            tabindex="-1"></button>
                                                </div>
                                            </div><!--end carousel-->
                                        </div><!--end col-->
                                    </div><!--end row-->

                                    <div class="row justify-content-center">
                                        <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                                            <img src="../assets/images/client/amazon.png" class="avatar avatar-client"
                                                 alt="">
                                        </div><!--end col-->

                                        <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                                            <img src="../assets/images/client/google.png" class="avatar avatar-client"
                                                 alt="">
                                        </div><!--end col-->

                                        <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                                            <img src="../assets/images/client/lenovo.png" class="avatar avatar-client"
                                                 alt="">
                                        </div><!--end col-->

                                        <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                                            <img src="../assets/images/client/paypal.png" class="avatar avatar-client"
                                                 alt="">
                                        </div><!--end col-->

                                        <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                                            <img src="../assets/images/client/shopify.png" class="avatar avatar-client"
                                                 alt="">
                                        </div><!--end col-->

                                        <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                                            <img src="../assets/images/client/spotify.png" class="avatar avatar-client"
                                                 alt="">
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end teb pane-->

                                <div class="tab-pane fade" id="pills-timetable" role="tabpanel"
                                     aria-labelledby="timetable-tab">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-12">
                                            <div class="card border-0 p-3 rounded shadow">
                                                <ul class="list-unstyled mb-0">
                                                    <li class="d-flex justify-content-between">
                                                        <p class="text-muted mb-0"><i
                                                                class="ri-time-fill text-primary align-middle h5 mb-0"></i>
                                                            Monday</p>
                                                        <p class="text-primary mb-0"><span
                                                                class="text-dark">Time:</span> 8.00 - 20.00</p>
                                                    </li>
                                                    <li class="d-flex justify-content-between mt-2">
                                                        <p class="text-muted mb-0"><i
                                                                class="ri-time-fill text-primary align-middle h5 mb-0"></i>
                                                            Tuesday</p>
                                                        <p class="text-primary mb-0"><span
                                                                class="text-dark">Time:</span> 8.00 - 20.00</p>
                                                    </li>
                                                    <li class="d-flex justify-content-between mt-2">
                                                        <p class="text-muted mb-0"><i
                                                                class="ri-time-fill text-primary align-middle h5 mb-0"></i>
                                                            Wednesday</p>
                                                        <p class="text-primary mb-0"><span
                                                                class="text-dark">Time:</span> 8.00 - 20.00</p>
                                                    </li>
                                                    <li class="d-flex justify-content-between mt-2">
                                                        <p class="text-muted mb-0"><i
                                                                class="ri-time-fill text-primary align-middle h5 mb-0"></i>
                                                            Thursday</p>
                                                        <p class="text-primary mb-0"><span
                                                                class="text-dark">Time:</span> 8.00 - 20.00</p>
                                                    </li>
                                                    <li class="d-flex justify-content-between mt-2">
                                                        <p class="text-muted mb-0"><i
                                                                class="ri-time-fill text-primary align-middle h5 mb-0"></i>
                                                            Friday</p>
                                                        <p class="text-primary mb-0"><span
                                                                class="text-dark">Time:</span> 8.00 - 20.00</p>
                                                    </li>
                                                    <li class="d-flex justify-content-between mt-2">
                                                        <p class="text-muted mb-0"><i
                                                                class="ri-time-fill text-primary align-middle h5 mb-0"></i>
                                                            Saturday</p>
                                                        <p class="text-primary mb-0"><span
                                                                class="text-dark">Time:</span> 8.00 - 18.00</p>
                                                    </li>
                                                    <li class="d-flex justify-content-between mt-2">
                                                        <p class="text-muted mb-0"><i
                                                                class="ri-time-fill text-primary align-middle h5 mb-0"></i>
                                                            Sunday</p>
                                                        <p class="text-primary mb-0"><span
                                                                class="text-dark">Time:</span> 8.00 - 14.00</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div><!--end col-->

                                    </div><!--end row-->
                                </div><!--end teb pane-->

                                <div class="tab-pane fade" id="pills-settings" role="tabpanel"
                                     aria-labelledby="settings-tab">
                                    <h5 class="mb-1">Settings</h5>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="rounded shadow mt-4">
                                                <div class="p-4 border-bottom">
                                                    <h6 class="mb-0">Personal Information :</h6>
                                                </div>

                                                <div class="p-4">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-2 col-md-4">
                                                            <img src="../assets/images/doctors/01.jpg"
                                                                 class="avatar avatar-md-md rounded-pill shadow mx-auto d-block"
                                                                 alt="">
                                                        </div><!--end col-->

                                                        <div
                                                            class="col-lg-5 col-md-8 text-center text-md-start mt-4 mt-sm-0">
                                                            <h6 class="">Upload your picture</h6>
                                                            <p class="text-muted mb-0">For best results, use an image at
                                                                least 256px by 256px in either .jpg or .png format</p>
                                                        </div><!--end col-->

                                                        <div
                                                            class="col-lg-5 col-md-12 text-lg-end text-center mt-4 mt-lg-0">
                                                            <a href="#" class="btn btn-primary">Upload</a>
                                                            <a href="#" class="btn btn-soft-primary ms-2">Remove</a>
                                                        </div><!--end col-->
                                                    </div><!--end row-->

                                                    <form class="mt-4">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">First Name</label>
                                                                    <input name="name" id="name" type="text"
                                                                           class="form-control"
                                                                           placeholder="First Name :">
                                                                </div>
                                                            </div><!--end col-->

                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Last Name</label>
                                                                    <input name="name" id="name2" type="text"
                                                                           class="form-control"
                                                                           placeholder="Last Name :">
                                                                </div>
                                                            </div><!--end col-->

                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Your Email</label>
                                                                    <input name="email" id="email" type="email"
                                                                           class="form-control"
                                                                           placeholder="Your email :">
                                                                </div>
                                                            </div><!--end col-->

                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Phone no.</label>
                                                                    <input name="number" id="number" type="text"
                                                                           class="form-control"
                                                                           placeholder="Phone no. :">
                                                                </div>
                                                            </div><!--end col-->

                                                            <div class="col-md-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Your Bio Here</label>
                                                                    <textarea name="comments" id="comments" rows="4"
                                                                              class="form-control"
                                                                              placeholder="Bio :"></textarea>
                                                                </div>
                                                            </div>
                                                        </div><!--end row-->

                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <input type="submit" id="submit" name="send"
                                                                       class="btn btn-primary" value="Save changes">
                                                            </div><!--end col-->
                                                        </div><!--end row-->
                                                    </form><!--end form-->
                                                </div>
                                            </div>

                                            <div class="rounded shadow mt-4">
                                                <div class="p-4 border-bottom">
                                                    <h6 class="mb-0">Account Notifications :</h6>
                                                </div>

                                                <div class="p-4">
                                                    <form>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Old password :</label>
                                                                    <input type="password" class="form-control"
                                                                           placeholder="Old password" required="">
                                                                </div>
                                                            </div><!--end col-->

                                                            <div class="col-lg-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label">New password :</label>
                                                                    <input type="password" class="form-control"
                                                                           placeholder="New password" required="">
                                                                </div>
                                                            </div><!--end col-->

                                                            <div class="col-lg-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Re-type New password
                                                                        :</label>
                                                                    <input type="password" class="form-control"
                                                                           placeholder="Re-type New password"
                                                                           required="">
                                                                </div>
                                                            </div><!--end col-->

                                                            <div class="col-lg-12 mt-2 mb-0">
                                                                <button class="btn btn-primary">Save password</button>
                                                            </div><!--end col-->
                                                        </div><!--end row-->
                                                    </form>
                                                </div>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-lg-6">
                                            <div class="rounded shadow mt-4">
                                                <div class="p-4 border-bottom">
                                                    <h6 class="mb-0">General Notifications :</h6>
                                                </div>

                                                <div class="p-4">
                                                    <div class="d-flex justify-content-between pb-4">
                                                        <h6 class="mb-0 fw-normal">When someone mentions me</h6>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" value=""
                                                                   id="customSwitch1">
                                                            <label class="form-check-label" for="customSwitch1"></label>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-between py-4 border-top">
                                                        <h6 class="mb-0 fw-normal">When someone follows me</h6>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                   id="customSwitch2" checked="">
                                                            <label class="form-check-label" for="customSwitch2"></label>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-between py-4 border-top">
                                                        <h6 class="mb-0 fw-normal">When shares my activity</h6>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                   id="customSwitch3">
                                                            <label class="form-check-label" for="customSwitch3"></label>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-between py-4 border-top">
                                                        <h6 class="mb-0 fw-normal">When someone messages me</h6>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                   id="customSwitch4" checked="">
                                                            <label class="form-check-label" for="customSwitch4"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="rounded shadow mt-4">
                                                <div class="p-4 border-bottom">
                                                    <h6 class="mb-0">Marketing Notifications :</h6>
                                                </div>

                                                <div class="p-4">
                                                    <div class="d-flex justify-content-between pb-4">
                                                        <h6 class="mb-0 fw-normal">There is a sale or promotion</h6>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                   id="customSwitch5" checked="">
                                                            <label class="form-check-label" for="customSwitch5"></label>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-between py-4 border-top">
                                                        <h6 class="mb-0 fw-normal">Company news</h6>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                   id="customSwitch6">
                                                            <label class="form-check-label" for="customSwitch6"></label>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-between py-4 border-top">
                                                        <h6 class="mb-0 fw-normal">Weekly jobs</h6>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                   id="customSwitch7">
                                                            <label class="form-check-label" for="customSwitch7"></label>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-between py-4 border-top">
                                                        <h6 class="mb-0 fw-normal">Unsubscribe News</h6>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                   id="customSwitch8" checked="">
                                                            <label class="form-check-label" for="customSwitch8"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="rounded shadow mt-4">
                                                <div class="p-4 border-bottom">
                                                    <h6 class="mb-0">General Notifications :</h6>
                                                </div>

                                                <div class="p-4">
                                                    <div class="p-4 border-bottom">
                                                        <h5 class="mb-0 text-danger">Delete Account :</h5>
                                                    </div>

                                                    <div class="p-4">
                                                        <h6 class="mb-0 fw-normal">Do you want to delete the account?
                                                            Please press below "Delete" button</h6>
                                                        <div class="mt-4">
                                                            <button class="btn btn-danger">Delete Account</button>
                                                        </div><!--end col-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end teb pane-->
                            </div><!--end tab content-->
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div>


        </div>
    </div>
@endsection
