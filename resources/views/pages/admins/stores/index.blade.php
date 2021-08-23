@extends('layouts.admin')

@section('title', $storesPaginate->getPageName())

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
            <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModal" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="titleForm">{{old('_method') === 'put' ? 'Sửa' : 'Thêm'}} cửa
                                hàng</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="storeForm"
                                  action="{{route('stores')}}{{old('_method') === 'put' ? '/' . old('id') : ''}}"
                                  method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{old('id')}}">
                                <input type="hidden" name="_method" value="{{old('_method')}}">
                                <div class="form-group mb-3{{$errors->has('store_name') ? ' invalid' : ''}}">
                                    <input class="form-control" id="storeName" type="text" name="store_name"
                                           placeholder="Tên cửa hàng" value="{{old('store_name')}}">
                                    @if($errors->has('store_name'))
                                        <div class="invalid-feedback">{{ $errors->first('store_name') }}</div>
                                    @endif
                                </div>
                                <div class="form-group mb-3{{$errors->has('phone_contact') ? ' invalid' : ''}}">
                                    <input class="form-control" id="phone" type="text" name="phone_contact"
                                           placeholder="Số điện thoại" value="{{old('phone_contact')}}">
                                    @if($errors->has('phone_contact'))
                                        <div class="invalid-feedback">{{ $errors->first('phone_contact') }}</div>
                                    @endif
                                </div>
                                <div class="form-group mb-3{{$errors->has('store_address') ? ' invalid' : ''}}">
                                    <input class="form-control" id="storeAddress" type="text" name="store_address"
                                           placeholder="Địa chỉ" value="{{old('store_address')}}">
                                    @if($errors->has('store_address'))
                                        <div class="invalid-feedback">{{ $errors->first('store_address') }}</div>
                                    @endif
                                </div>
                                <div class="form-group mb-3{{$errors->has('store_status') ? ' invalid' : ''}}">
                                    <select class="form-select" id="storeStatus" name="store_status">
                                        <option {{old('store_status') === null || '' ? 'selected' : ''}} disabled hidden
                                                value=""
                                        >
                                            Tình trạng
                                        </option>
                                        <option value="1" {{old('store_status') === '1' ? 'selected' : ''}}>Hoạt động
                                        </option>
                                        <option value="0" {{old('store_status') === '0' ? 'selected' : ''}}>Đóng cửa
                                        </option>
                                    </select>
                                    @if($errors->has('store_status'))
                                        <div class="invalid-feedback">{{ $errors->first('store_status') }}</div>
                                    @endif
                                </div>
                                <div class="form-group mb-4">
                                    <textarea class="form-control" type="text" id="storeDescription"
                                              name="store_description"
                                              placeholder="Mô tả">{{old('store_description')}}</textarea>
                                </div>
                                <div class="form-group mb-2 row text-center">
                                    <div class="col-6">
                                        <button id="btnSubmit" type="submit"
                                                class="btn btn-primary w-75">{{old('_method') === 'put' ? 'Sửa' : 'Thêm'}}</button>
                                    </div>
                                    <div class="col-6">
                                        <button type="button" class="btn btn-secondary w-75" data-bs-dismiss="modal">Hủy
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
                            <h5 class="modal-title" id="detailLabel">Thông tin cửa hàng</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-3 pt-4">
                            <div class="d-flex align-items-center ms-5 mb-3 justify-content-between">
                                <div class="d-flex align-items-center">
                                    <img src=""
                                         class="avatar avatar-md-md rounded-circle shadow" alt=""
                                         id="store_owner_avatar"
                                    >
                                    <div class="mb-0 ms-5">
                                        <h4 id="store_name"></h4>
                                        <h6 class="text-muted" id="store_owner_fullname"></h6>
                                    </div>
                                </div>
                                <div class="mx-5">
                                    <p class="text-muted col-8" id="store_status"></p>
                                    <small class="text-muted" id="store_create_at"></small>
                                    <p class="" id="store_rate"></p>
                                </div>
                            </div>
                            <ul class="list-unstyled mb-0 mt-4">
                                <div class="row">
                                    <li class="row col-8">
                                        <h6 class="col-3">Điện thoại:</h6>
                                        <p class="text-muted col-8" id="store_phone"></p>
                                    </li>
                                    <li class="row col-4">
                                        <h6 class="col-5">Món ăn:</h6>
                                        <p class="text-muted col-7" id="store_total_food"></p>
                                    </li>
                                </div>
                                <div class="row">
                                    <li class="row col-8">
                                        <h6 class="col-3">Địa chỉ:</h6>
                                        <p class="text-muted col-9" id="store_address"></p>
                                    </li>
                                    <li class="row col-4">
                                        <h6 class="col-5">Lợi thu:</h6>
                                        <p class="text-muted col-7" id="store_profit"></p>
                                    </li>
                                </div>
                            </ul>
                            <div class="mt-3 mb-4" style="width: 90%; margin-left: 5%">
                                <p class="text-muted ms-2 mb-0 d-inline-block" id="store_description"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row mb-4">
                <div class="col-7">
                    <h5 class="mb-0">{{$storesPaginate->getPageName()}}</h5>
                </div>
                {{--                @if(auth('admin')->user()->role_id === 0)--}}
                <div class="col-5" style="text-align: right">
                    <!-- Button trigger modal -->
                    <button id="btnAdd" type="button" class="btn btn-primary btn-icon btn-pills"
                            data-bs-toggle="modal"
                            data-bs-target="#formModal">
                        <i class="uil uil-plus"></i>
                    </button>
                </div>
                {{--                @endif--}}
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 mt-12">
                    @if(count($storesPaginate)==0)
                        <p class="text-center">Không có thể loại nào!</p>
                    @else
                        <div class="table-responsive shadow rounded">
                            <table class="table table-center bg-white mb-0 table-hover table-bordered text-center">
                                <thead class="table-secondary-200 text-center">
                                <tr>
                                    <th class="border-bottom p-3" style="min-width: 25px;">Id</th>
                                    <th class="border-bottom p-3">Tên cửa hàng</th>
                                    <th class="border-bottom p-3">Địa chỉ</th>
                                    <th class="border-bottom p-3">Số điện thoại</th>
                                    <th class="border-bottom p-3">Chủ sở hữu</th>
                                    <th class="border-bottom p-3">Đánh giá</th>
                                    <th class="border-bottom p-3" style="max-width: 150px">Mô tả</th>
                                    <th class="border-bottom p-3">Tình trạng</th>
                                    <th class="border-bottom p-3" style="min-width: 60px;"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($storesPaginate as $storeKey => $store)
                                    <tr class="row-store-info" key="{{$storeKey}}"
                                        data-store-id="{{$store->id}}"
                                        data-store-name="{{$store->store_name}}"
                                        data-store-address="{{$store->store_address}}"
                                        data-store-phone="{{$store->phone_contact}}"
                                        data-store-desc="{{$store->store_description}}"
                                        data-store-rate="{{$store->avg_rate}}"
                                        data-store-status="{{$store->store_status}}"
                                        data-owner-fullname="{{"$store->first_name $store->last_name"}}"
                                        @if($store['avatar'])
                                        data-owner-avatar="{{asset($store['avatar'])}}"
                                        @else
                                        data-owner-avatar="{{
                                                        $store['gender'] === 1 ?
                                                        asset('/images/default/no-image-male.jpeg') :
                                                        asset('/images/default/no-image-female.jpeg')
                                                        }}"
                                        @endif
                                        data-store-total-food="{{$store['total_food']}}"
                                        data-store-create-at="{{$store['created_at']}}"
                                        data-store-profit="{{currency_format($store['total_profit'])}}"
                                    >
                                        <th class="p-2" scope="row">{{$store['id']}}</th>
                                        <td class="p-2" style="max-width: 200px" scope="row">
                                            <a href="#" class="text-dark show-modal-detail" data-bs-toggle="modal"
                                               data-bs-target="#modalDetail"
                                               key="{{$storeKey}}">
                                                <div class="d-flex align-items-center">
                                                    <span class="ms-2 ellipsis"
                                                          data-bs-toggle="tooltip"
                                                          data-bs-placement="bottom"
                                                          title="{{$store->store_name}}"
                                                    >
                                                        {{$store->store_name}}
                                                    </span>
                                                </div>
                                            </a>
                                        </td>
                                        <td class="p-2 ellipsis" style="max-width: 250px"
                                            scope="row"
                                            data-bs-toggle="tooltip"
                                            data-bs-placement="bottom"
                                            title="{{$store->store_address}}"
                                        >
                                            {{$store->store_address}}
                                        </td>
                                        <td class="p-2" scope="row">{{$store->phone_contact}}</td>
                                        <td class="p-2" scope="row">{{"$store->first_name $store->last_name"}}</td>
                                        <td class="p-2" scope="row">{{$store->avg_rate}}</td>
                                        <td class="p-2 ellipsis" style="max-width: 300px"
                                            scope="row">{{$store->store_description}}</td>
                                        <td class="p-2" scope="row">
                                            @if($store->store_status === 1)
                                                <span class="badge bg-soft-success">Hoạt động</span>
                                            @else
                                                <span class="badge badge bg-soft-warning">Đóng cửa</span>
                                            @endif
                                        </td>
                                        <td class="p-2" scope="row">
                                            <a href="#"
                                               class="btn btn-icon btn-pills btn-soft-primary show-modal-detail-icon"
                                               data-bs-toggle="modal"
                                               data-bs-target="#modalDetail"
                                               key="{{$storeKey}}"
                                            >
                                                <i class="uil uil-eye"></i>
                                            </a>
                                            <a href="#"
                                               class="btn btn-icon btn-pills btn-soft-success show-edit-form"
                                               data-bs-toggle="modal" data-bs-target="#formModal"
                                               key="{{$storeKey}}"
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
                                                        Bạn muốn xóa {{$store['store_name']}}?
                                                    </div>
                                                    <div class="card-footer text-center">
                                                        <form method="post"
                                                              action="{{route('stores')}}/{{$store['id']}}}}"
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
                        {{paginate($storesPaginate->lastPage(), $storesPaginate->currentPage(), $storesPaginate->path())}}
                        {{--paginate--}}
                    @endif
                </div>
                <script>
                    let currentPage = {{$storesPaginate->currentPage()}};
                    let lastPage = {{$storesPaginate->lastPage()}}
                </script>
            </div>
        </div>
    </div>
@endsection

@section('js_external_body_bottom')
    <script src="{{asset('/js/admins/storesScript/initial.js')}}"></script>
    <script src="{{asset('/js/admins/storesScript/validate.js')}}"></script>
    <script src="{{asset('/js/admins/storesScript/eventSetElement.js')}}"></script>
@endsection

@section('js_inline')
    <script>
        $('#btnAdd').onclick = () => {
            $('#titleForm').innerText = "Thêm cửa hàng";
            $('#btnSubmit').innerText = "Thêm";
            let formElm = $('#storeForm');
            formElm.reset();
            formElm.action = '{{route(
    'stores.create',
        ['page' => $storesPaginate->total() % 10 !== 0 || $storesPaginate->total() === 0 ?
        $storesPaginate->lastPage() : $storesPaginate->lastPage() + 1]
)}}';
            formElm.querySelector('input[name=_method]').value = 'post';
            $('#phone').value = '{{auth('admin')->user()->phone}}';
            $('#storeAddress').value = '{{auth('admin')->user()->address}}';
        }

        $('.show-modal-detail').forEach((btn, index) => {
            let allRowStoreInfo = $('.row-store-info');
            btn.onmouseover = () => {
                setValueModalDetail(allRowStoreInfo[index]);
            }
            $('.show-modal-detail-icon')[index].onmouseover = () => {
                setValueModalDetail(allRowStoreInfo[index]);
            }
        })
    </script>
@endsection
