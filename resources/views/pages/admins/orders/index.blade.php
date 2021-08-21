@extends('layouts.admin')

@section('title', $orders->getPageName())

@section('css_inline')
    .l-70{
    left: -70px!important;
    }
    .order-status{
    cursor: pointer;
    opacity: .7;
    transition: .3s ease;
    }
    .order-status:hover{
    opacity: 1;
    }
@endsection

@section('css_external')
    <link rel="stylesheet" href="{{asset('/css/validate/style.css')}}">
@endsection

@section('js_declare')
    <script src="{{asset('/js/library/formValidate.js')}}"></script>
    <script src="{{asset('/js/library/libNativeObjects.js')}}"></script>
    <script src="{{asset('/js/library/showModal.js')}}"></script>
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="layout-specing">
        {{--        alert--}}
        @include('flash-message')
        <!-- Modal Form Edit-->
            <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModal"
                 aria-hidden="true" aria-initial-show="{{$errors->any()}}">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="titleForm">Người đặt: <span id="orderFullName"></span> - <span
                                    id="edit_order_id"></span></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="orderForm" action="{{route('orders')}}/{{old('id')}}" method="post">
                                @csrf
                                @method('patch')
                                <input type="hidden" name="id" value="{{old('id')}}">
                                <div
                                    class="form-group mb-3 {{$errors->has('order_number_phone') ? 'invalid' : ''}}">
                                    <input class="form-control" id="orderNumberPhone" type="text"
                                           name="order_number_phone"
                                           placeholder="Số điện thoại" value="{{ old('order_number_phone') }}">
                                    @if($errors->has('order_number_phone'))
                                        <div class="invalid-feedback">{{ $errors->first('order_number_phone') }}</div>
                                    @endif
                                </div>
                                <div
                                    class="form-group mb-3 {{$errors->has('order_address') ? 'invalid' : ''}}">
                                    <input class="form-control" id="orderAddress" type="text"
                                           name="order_address"
                                           placeholder="Địa chỉ" value="{{ old('order_address') }}">
                                    @if($errors->has('order_address'))
                                        <div class="invalid-feedback">{{ $errors->first('order_address') }}</div>
                                    @endif
                                </div>
                                <div
                                    class="form-group mb-3 {{$errors->has('order_status') ? 'invalid' : ''}}">
                                    <select class="form-select" id="orderStatus" name="order_status">
                                        <option {{ old('order_status') === null || '' ? 'selected' : '' }} disabled hidden value="">Tình trạng</option>
                                        <option value="1" {{ old('order_status') === '1' ? 'selected' : '' }}>Đã giao hàng</option>
                                        <option value="0"{{ old('order_status') === '0' ? 'selected' : '' }}>Chờ xử lý</option>
                                    </select>
                                    @if($errors->has('order_status'))
                                        <div class="invalid-feedback">{{ $errors->first('order_status') }}</div>
                                    @endif
                                </div>
                                <div class="form-group mb-4">
                                                <textarea class="form-control" id="orderNote"
                                                          name="order_note" style="resize: none;"
                                                          placeholder="Lời nhắn">{{ old('order_note') }}</textarea>
                                </div>
                                <div class="form-group mb-2 row text-center">
                                    <div class="col-6">
                                        <button id="btnSubmit" type="submit" class="btn btn-primary w-75">
                                            Sửa
                                        </button>
                                    </div>
                                    <div class="col-6">
                                        <button type="button" class="btn btn-secondary w-75"
                                                data-bs-dismiss="modal">
                                            Hủy
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            {{--modal detail--}}
            <div class="modal fade" id="modalDetail" tabindex="-1" aria-labelledby="modalDetail" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="detailLabel">Thông tin đơn hàng</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-3 pt-4">
                            <div class="d-flex align-items-center ms-5 mb-3 justify-content-between">
                                <div class="d-flex align-items-center">
                                    <img src=""
                                         class="avatar avatar-md-md rounded-circle shadow" alt=""
                                         id="customer_avatar"
                                    >
                                    <div class="mb-0 ms-5">
                                        <h4 id="customer_fullname"></h4>
                                        <h6 class="text-muted" id="order_phone"></h6>
                                    </div>
                                </div>
                                <div class="mx-5">
                                    <p class="text-muted col-8" id="order_status">
                                    </p>
                                    <small class="text-muted" id="order_create_at"></small>
                                    <p class="" id="order_total_price">220,000đ</p>
                                </div>
                            </div>
                            <ul class="list-unstyled mb-0 mt-4 ms-3">
                                <li class="row">
                                    <h6 class="col-3">Địa chỉ:</h6>
                                    <p class="text-muted col-9" id="order_address"></p>
                                </li>
                                <li class="row">
                                    <h6 class="col-3">Lời nhắn:</h6>
                                    <p class="text-muted col-9" id="order_note"></p>
                                </li>
                                <li class="row mt-3 mb-4">
                                    <h6 class="col-12">Chi tiết đơn hàng:</h6>
                                    <ul class="list-unstyled col-12 row" id="modal_order_detail">

                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                            <button type="button"
                                    class="btn btn-warning"
                                    data-bs-toggle="modal"
                                    data-bs-target="#formModal"
                                    data-bs-dismiss="modal"
                            >
                                Sửa đơn hàng
                            </button>
                            <button id="btn_do_finish_order" type="button" class="btn btn-primary">Giao hàng</button>
                            <button type="button" class="btn btn-danger">Xóa</button>
                        </div>
                    </div>
                </div>
            </div>
            {{--form toggle status--}}
            <form id="toggleState" method="post" action="">
                @csrf
                @method('patch')
            </form>
            {{--            main--}}
            <div class="row mb-4">
                <div class="col-7">
                    <h5 class="mb-0">{{$orders->getPageName()}}</h5>
                </div>
            </div>

            @if(count($orders) === 0)
                <p class="text-center">Không có đơn hàng nào!</p>
            @else
                <div class="table-responsive shadow rounded">
                    <table class="table table-center bg-white mb-0 table-hover table-bordered">
                        <thead class="table-secondary-200 text-center">
                        <tr>
                            <th class="border-bottom p-3" style="min-width: 25px;">Id</th>
                            <th class="border-bottom p-3">Khách hàng</th>
                            <th class="border-bottom p-3">Số điện thoại</th>
                            <th class="border-bottom p-3">Địa chỉ</th>
                            <th class="border-bottom p-3">Lời nhắn</th>
                            <th class="border-bottom p-3">Ngày đặt</th>
                            <th class="border-bottom p-3">Tổng tiền</th>
                            <th class="border-bottom p-3">Tình trạng</th>
                            <th class="border-bottom p-3" style="min-width: 60px;"></th>
                        </tr>
                        </thead>
                        <tbody class="text-center">
                        @foreach($orders as $orderKey => $order)
                            <tr class="row-order-info"
                                key="{{$orderKey}}"
                                data-order-id="{{$order['id']}}"
                                data-order-detail="{{$order->order_detail}}"
                                @if($order['avatar'])
                                data-order-avatar="{{asset($order['avatar'])}}"
                                @else
                                data-order-avatar="{{
                                                        $order['gender'] === 1 ?
                                                        asset('/images/default/no-image-male.jpeg') :
                                                        asset('/images/default/no-image-female.jpeg')
                                                        }}"
                                @endif
                                data-order-fullname="{{$order['first_name']}} {{$order['last_name']}}"
                                data-order-phone="{{$order['order_phone']}}"
                                data-order-address="{{$order['order_address']}}"
                                data-order-note="{{$order['order_note']}}"
                                data-order-total_price="{{currency_format($order['total_price'])}}"
                                data-order-status="{{$order['order_status']}}"
                                data-order-created="{{$order['created_at']}}"
                            >
                                <th>{{$order['id']}}</th>
                                <th class="p-2 text-start">
                                    <a href="#" class="text-dark show-order-info"
                                       data-bs-toggle="modal"
                                       data-bs-target="#modalDetail"
                                       key="{{$orderKey}}"
                                    >
                                        <div class="d-flex align-items-center">
                                            <img
                                                @if($order['avatar'])
                                                src="{{asset($order['avatar'])}}"
                                                @else
                                                src="{{
                                                        $order['gender'] === 1 ?
                                                        asset('/images/default/no-image-male.jpeg') :
                                                        asset('/images/default/no-image-female.jpeg')
                                                        }}"
                                                @endif
                                                class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                            <span class="ms-2">{{$order['first_name']}} {{$order['last_name']}}</span>
                                        </div>
                                    </a>
                                </th>
                                <td class="p-2">{{$order['order_phone']}}</td>
                                <td class="p-2 ellipsis" style="max-width: 250px"
                                    data-bs-toggle="tooltip"
                                    data-bs-placement="bottom"
                                    title="{{$order->order_address}}"
                                >{{$order['order_address']}}</td>
                                <td class="p-2 ellipsis" style="max-width: 250px"
                                    data-bs-toggle="tooltip"
                                    data-bs-placement="bottom"
                                    title="{{$order->order_note}}"
                                >{{$order['order_note']}}</td>
                                <td class="p-2">{{date('H:m d/m', strtotime($order['created_at']))}}</td>
                                <td class="p-2">{{currency_format($order['total_price'])}}</td>
                                <td class="p-2">
                                        <span
                                            class="badge {{$order['order_status'] === 1 ? 'bg-soft-success' : 'bg-soft-warning wait'}} order-status"
                                            current="{{$order['order_status']}}"
                                            data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            {{$order['order_status'] === 1 ? 'Đã giao hàng' : 'Chờ xử lý'}}
                                        </span>
                                    <div class="dropdown-menu"
                                         aria-labelledby="dropdownMenuButton"
                                         style="padding: 0; min-width: 15rem;"
                                    >
                                        <div class="card">
                                            <div class="card-header text-center" style="padding: .25rem">
                                                {{$order['order_status'] === 1 ? 'Ngừng giao hàng?' : 'Xác nhận giao hàng?'}}
                                            </div>
                                            <div class="card-footer text-center">
                                                <button type="button"
                                                        class="btn {{$order['order_status'] === 1 ? 'btn-danger' : 'btn-primary'}} btn-sm btn-toggle-state"
                                                >
                                                    Chấp nhận
                                                </button>
                                                <button type="button" class="btn btn-dark btn-sm">
                                                    Hủy
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-2 text-center">
                                    <a href="#" class="btn btn-icon btn-pills btn-soft-primary show-order-info-icon"
                                       data-bs-toggle="modal"
                                       data-bs-target="#modalDetail"
                                       key="{{$orderKey}}"
                                    >
                                        <i class="uil uil-eye"></i>
                                    </a>
                                    <a href="#"
                                       class="btn btn-icon btn-pills btn-soft-success show-edit-form"
                                       data-bs-toggle="modal" data-bs-target="#formModal" key="{{$order['id']}}"
                                    >
                                        <i class="uil uil-pen"></i>
                                    </a>
                                    <a href="#" class="btn btn-icon btn-pills btn-soft-danger"
                                       data-bs-toggle="dropdown"
                                       aria-expanded="false">
                                        <i class="uil uil-trash"></i>
                                    </a>
                                    <div class="dropdown-menu"
                                         aria-labelledby="dropdownMenuButton1"
                                         style="padding: 0; min-width: 15rem"
                                    >
                                        <div class="card">
                                            <div class="card-header text-center" style="padding: .25rem">
                                                Bạn muốn xóa đơn hàng này?
                                            </div>
                                            <div class="card-footer text-center">
                                                <form method="post" action="{{route('orders')}}/{{$order['id']}}"
                                                      style="margin-bottom: 0"
                                                >
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger btn-sm">Xóa
                                                    </button>
                                                    <button type="button" class="btn btn-dark btn-sm">
                                                        Hủy
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                {{--paginate--}}
            {{paginate($orders->lastPage(), $orders->currentPage(), $orders->path())}}
                {{--paginate--}}
            @endif

        </div>
    </div>
@endsection

@section('js_external_body_bottom')
    <script src="{{asset('/js/admins/orderScript/initial.js')}}"></script>
    <script src="{{asset('/js/admins/orderScript/validate.js')}}"></script>
    <script src="{{asset('/js/admins/orderScript/eventSetElement.js')}}"></script>
@endsection

@section('js_inline')
    <script>
        $('.show-order-info').forEach((elm, index) => {
            let allRowStoreInfo = $('.row-order-info');
            elm.onmouseover = () => {
                setActionToggleStatus(allRowStoreInfo[index]);
                setValueModalDetail(allRowStoreInfo[index]);
            }
            $('.show-order-info-icon')[index].onmouseover = () => {
                setValueModalDetail(allRowStoreInfo[index]);
            }
            $('.btn-toggle-state')[index].onclick = () => {
                $('#toggleState').submit();
            }
            $('.order-status')[index].onclick = () => {
                setActionToggleStatus(allRowStoreInfo[index]);
            }
        })
        //set value form edit
        $('.show-edit-form').forEach((btn, index) => {
            btn.onclick = e => {
                let allRowStoreInfo = $('.row-order-info');
                setFormEdit(allRowStoreInfo[index]);
            }
        })

        //submit form toggle
        $('#btn_do_finish_order').onclick = () => {
            $('#toggleState').submit();
        }
    </script>
@endsection
