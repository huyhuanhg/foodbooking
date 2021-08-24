@extends('layouts.admin')

@section('title', $promotions->getPageName())

@section('css_inline')
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

        <!-- Modal Form -->
            <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModal" aria-hidden="true"
                 aria-initial-show="{{$errors->any()}}">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="titleForm">
                                Sửa khuyến mãi
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="promotionForm" action="{{route('promotions')}}/{{old('id')}}" method="post">
                                @csrf
                                @method('patch')
                                <input type="hidden" name="id" id="promotionId" value="{{old('id')}}">
                                <div class="form-group mb-3 {{$errors->has('discount') ? 'invalid' : ''}}">
                                    <input class="form-control" id="discount" type="number" name="discount"
                                           placeholder="Giá trị khuyến mãi" value="{{ old('discount') }}"
                                           autocomplete="off"
                                           min="0" max="100"
                                    >
                                    @if($errors->has('discount'))
                                        <div class="invalid-feedback">{{ $errors->first('discount') }}</div>
                                    @endif
                                    <select
                                        id="is_percent"
                                        name="is_percent"
                                        style="
                                                position: absolute;
                                                top: 50%;
                                                right: 15px;
                                                border: none;
                                                transform: translateY(-50%);
                                                background-color: white;
                                                outline: none;
                                                height: calc(100% - 2px);"
                                    >
                                        <option value="1" {{ old('is_percent') === '1' ? "selected" : '' }}>%</option>
                                        <option value="0" {{ old('is_percent') === '0' ? "selected" : '' }}>VNĐ</option>
                                    </select>
                                </div>
                                <div class="form-group mb-3" style="display: {{old('is_percent') === '1' ? "block" : 'none' }}">
                                    <input class="form-control" id="maxDiscount" type="number" name="max_discount"
                                           placeholder="Khuyến mãi tối đa" value="{{ old('max_discount') }}"
                                           autocomplete="off">
                                </div>
                                <div class="form-group row">
                                    <div class="d-flex align-items-center col">
                                        <img
                                            src="{{asset(session('foodCurrent')->food_avatar ?? '/images/default/no-image-food.jpg')}}"
                                            class="avatar avatar-md-sm rounded shadow" alt=""
                                            id="foodAvatar"
                                        />
                                        <span class="ms-2" id="foodName">{{session('foodCurrent')->food_name ?? ''}}</span>
                                    </div>
                                    <div id="foodPrice"
                                         class="d-flex align-items-center col text-decoration-line-through">{{session('foodCurrent')->price ?? ''}}</div>
                                    <div id="priceResult" class="d-flex align-items-center col">
                                        @if(session()->has('foodCurrent'))
                                            {{currency_after_promotions(
                                                session('foodCurrent')->price,
                                                session('foodCurrent')->discount,
                                                session('foodCurrent')->max_discount,
                                                session('foodCurrent')->is_percent
                                            )}}
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group mb-2 row text-center">
                                    <div class="col-6">
                                        <button id="btnSubmit" type="submit" class="btn btn-primary w-75">
                                            Sửa
                                        </button>
                                    </div>
                                    <div class="col-6">
                                        <button type="button" class="btn btn-secondary w-75" data-bs-dismiss="modal">
                                            Hủy
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            {{--            main--}}
            <div class="row mb-4">
                <div class="col-7">
                    <h5 class="mb-0">{{$promotions->getPageName()}}</h5>
                </div>
            </div>

            @if(count($promotions) === 0)
                <p class="text-center">Không có khuyến mãi nào!</p>
            @else
                <div class="table-responsive shadow rounded">
                    <table class="table table-center bg-white mb-0 table-hover table-bordered">
                        <thead class="table-secondary-200 text-center">
                        <tr>
                            <th class="border-bottom p-3" style="min-width: 25px;">Món ăn</th>
                            <th class="border-bottom p-3">Cửa hàng</th>
                            <th class="border-bottom p-3">Khuyến mãi</th>
                            <th class="border-bottom p-3">Khuyến mãi tối đa</th>
                            <th class="border-bottom p-3">Giá gốc</th>
                            <th class="border-bottom p-3">Giá hiện tại</th>
                            <th class="border-bottom p-3" style="min-width: 60px;"></th>
                        </tr>
                        </thead>
                        <tbody class="text-center">
                        @foreach($promotions as $promotion)
                            <tr
                                class="row-promotion-info"
                                promotion-id="{{$promotion['food_id']}}"
                                promotion-food-name="{{$promotion['food_name']}}"
                                promotion-food-avatar="{{$promotion['food_avatar'] ? asset($promotion['food_avatar']) : asset('/images/default/no-image-food.jpg')}}"
                                promotion-food-price="{{currency_format($promotion['price'])}}"
                                promotion-food-is_percent="{{$promotion['is_percent']}}"
                                promotion-food-discount="{{$promotion['discount']}}"
                                promotion-food-max-discount="{{$promotion['max_discount']}}"
                                promotion-food-price-result=
                                "{{currency_after_promotions($promotion['price'], $promotion['discount'], $promotion['max_discount'], $promotion['is_percent'])}}"
                            >
                                <th class="p-2 text-start">
                                    <a href="#" class="text-dark">
                                        <div class="d-flex align-items-center">
                                            <img
                                                src="{{$promotion['food_avatar'] ? asset($promotion['food_avatar']) : asset('/images/default/no-image-food.jpg')}}"
                                                class="avatar avatar-md-sm rounded shadow" alt="">
                                            <span class="ms-2">{{$promotion['food_name']}}</span>
                                        </div>
                                    </a>

                                </th>
                                <td class="p-2">{{$promotion['store_name']}}</td>
                                <td class="p-2">
                                    {{$promotion['is_percent'] === 1 ? $promotion['discount'].'%' : currency_format($promotion['discount'])}}
                                </td>
                                <td class="p-2">
                                    {{(bool)$promotion['max_discount'] ? currency_format($promotion['max_discount']) : ''}}
                                </td>
                                <td class="p-2">{{currency_format($promotion['price'])}}</td>
                                <td class="p-2">
                                    {{currency_after_promotions($promotion['price'], $promotion['discount'], $promotion['max_discount'], $promotion['is_percent'])}}
                                </td>
                                <td class="p-2 text-center">
                                    <a href="#"
                                       class="btn btn-icon btn-pills btn-soft-success show-edit-form"
                                       data-bs-toggle="modal" data-bs-target="#formModal"
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
                                                Bạn muốn xóa khuyến mãi này?
                                            </div>
                                            <div class="card-footer text-center">
                                                <form method="post" action="{{route('promotions')}}/{{$promotion['food_id']}}"
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
                {{paginate($promotions->lastPage(), $promotions->currentPage(), $promotions->path())}}
                {{--paginate--}}
            @endif


        </div>
    </div>
@endsection

@section('js_external_body_bottom')
    <script src="{{asset('/js/admins/promotionScript/initial.js')}}"></script>
        <script src="{{asset('/js/admins/promotionScript/validate.js')}}"></script>
    {{--    <script src="{{asset('/js/admins/promotionScript/eventSetElement.js')}}"></script>--}}
@endsection

@section('js_inline')
    <script>
        function setResultValue({result, price, isPercent, discount, maxDiscount}) {
            if (result) {
                $('#priceResult').innerText = result;
            } else {
                price = parseInt(price.replace('đ', '').replaceAll(',', ''));
                if (isPercent === '1') {
                    let discountPercent = price * discount / 100;
                    let discountResult = 0;
                    if (maxDiscount > 0) {
                        discountResult = maxDiscount < discountPercent ? maxDiscount : discountPercent;
                    } else {
                        discountResult = discountPercent;
                    }
                    $('#priceResult').innerText = new Intl.NumberFormat().format(price - discountResult) + 'đ';
                } else {
                    $('#priceResult').innerText = new Intl.NumberFormat().format(price - discount) + 'đ';
                }
            }
        }

        function displayMaxDiscount(isPercent, maxDiscount) {
            $('#is_percent').value = isPercent;
            if (isPercent === '0') {
                $('#maxDiscount').value = 0;
                $('#maxDiscount').parentElement.style.display = 'none';
            } else {
                $('#maxDiscount').parentElement.style.display = 'block';
                $('#maxDiscount').value = maxDiscount;
            }
        }

        function setFormValue(row) {
            let id = row.getAttribute('promotion-id');
            let form = $('#promotionForm');
            form.querySelector("input[name=id]").value = id;
            form.action = `/manager/promotions/${id}`;
            $('#discount').value = row.getAttribute('promotion-food-discount');
            let isPercent = row.getAttribute('promotion-food-is_percent');
            displayMaxDiscount(isPercent, row.getAttribute('promotion-food-max-discount'));
            $('#foodAvatar').src = row.getAttribute('promotion-food-avatar');
            $('#foodName').innerText = row.getAttribute('promotion-food-name');
            let price = row.getAttribute('promotion-food-price').replace('đ', '').replaceAll(',', '');
            $('#foodPrice').innerText = price;
            if (isPercent === '0'){
                $('#discount').max = price;
            }
            setResultValue({result: row.getAttribute('promotion-food-price-result')})
        }

        $('#discount').onchange = (e) => {
            if ($('#is_percent') === '1') {
                $('#discount').max = 100;
                if (e.target.value < 0) {
                    e.target.value = 0;
                } else if (e.target.value > 100) {
                    e.target.value = 100;
                }
            } else {
                let price = $('#foodPrice').innerText.replace('đ', '').replaceAll(',', '');
                $('#discount').max = price;
                if (e.target.value < 0) {
                    e.target.value = 0;
                } else if (e.target.value > parseInt(price)) {
                    e.target.value = price;
                }
            }
            setResultValue({
                isPercent: $('#is_percent').value,
                discount: e.target.value,
                maxDiscount: $('#maxDiscount').value,
                price: $('#foodPrice').innerText
            })
        }
        $('#maxDiscount').onchange = (e) => {
            let price = $('#foodPrice').innerText.replace('đ', '').replaceAll(',', '');
            if (e.target.value < 0) {
                e.target.value = 0;
            } else if (e.target.value > parseInt(price)) {
                e.target.value = price;
            }
            setResultValue({
                isPercent: $('#is_percent').value,
                discount: $('#discount').value,
                maxDiscount: e.target.value,
                price,
            })
        }
        $('#is_percent').onchange = (e) => {
            let value = e.target.value;
            if (value === '0') {
                let price = $('#foodPrice').innerText.replace('đ', '').replaceAll(',', '');
                $('#discount').max = price;
                $('#discount').value *= 1000;
                if ($('#discount').value > parseInt(price)) {
                    $('#discount').value = 0;
                }
            } else {
                $('#discount').max = 100;
                if ($('#discount').value / 1000 <= 100) {
                    $('#discount').value = Math.floor($('#discount').value / 1000);
                } else {
                    $('#discount').value = 0;
                }
            }
            let maxDiscount = $('maxDiscount').value
            displayMaxDiscount(value, maxDiscount);
            setResultValue({
                isPercent: e.target.value,
                discount: $('#discount').value,
                maxDiscount: $('#maxDiscount').value,
                price: $('#foodPrice').innerText
            })
        }
        $('.show-edit-form').forEach((btn, index) => {
            let rowInfo = $('tr.row-promotion-info');
            btn.onclick = () => {
                setFormValue(rowInfo[index])
            }
        })
    </script>
@endsection
