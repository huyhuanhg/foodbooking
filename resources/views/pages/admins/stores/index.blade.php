@extends('layouts.admin')

@section('title', 'Quản lý cửa hàng')

@section('css_inline')
    .alert{
    position: absolute;
    z-index: 3;
    right: 10px;
    min-width: 20%;
    }
    .alert-dismissible .btn-close {
    top: 50%;
    right: 5px;
    transform: translateY(-50%);
    }
    .table-secondary-200{
    background-color: #E9ECEF;
    }
@endsection

@section('css_external')
    <link rel="stylesheet" href="{{asset('/css/validate/style.css')}}">
@endsection

@section('js_declare')
    <script src="{{asset('/js/library/library_validate.js')}}"></script>
    <script src="{{asset('/js/library/library_native_objects.js')}}"></script>
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
                                    <select class="form-select" id="storeStatus" name="store_status"
                                            value="{{old('store_status')}}">
                                        <option selected disabled hidden>Tình trạng</option>
                                        <option value="1">Hoạt động</option>
                                        <option value="0">Đóng cửa</option>
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


            <div class="row mb-4">
                <div class="col-7">
                    <h5 class="mb-0">Quản lý danh sách cửa hàng</h5>
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
                                        data-store-status="{{$store->store_status}}"
                                    >
                                        <th class="p-2" scope="row">{{$store['id']}}</th>
                                        <td class="p-2" scope="row">
                                            <a key="{{$storeKey}}">
                                                {{$store->store_name}}
                                            </a>
                                        </td>
                                        <td class="p-2" scope="row">{{$store->store_address}}</td>
                                        <td class="p-2" scope="row">{{$store->phone_contact}}</td>
                                        <td class="p-2" scope="row">{{"$store->first_name $store->last_name"}}</td>
                                        <td class="p-2" scope="row">{{$store->avg_rate}}</td>
                                        <td class="p-2" scope="row">{{$store->store_description}}</td>
                                        <td class="p-2" scope="row">
                                            @if($store->store_status === 1)
                                                <span class="badge bg-soft-success">Hoạt động</span>
                                            @else
                                                <span class="badge badge bg-soft-warning">Đóng cửa</span>
                                            @endif
                                        </td>
                                        <td class="p-2" scope="row">
                                            <a href="#" class="btn btn-icon btn-pills btn-soft-primary"
                                               data-bs-toggle="modal"
                                               data-bs-target="#viewprofile"
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
                                                              action="{{route('stores')}}/{{$store['id']}}"
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
                        @if($storesPaginate->lastPage() > 1)
                            <nav aria-label="Page navigation example" class="mt-3">
                                <ul class="pagination justify-content-end pagination-sm">
                                    @if($storesPaginate->currentPage() > 1)
                                        <li class="page-item">
                                            <a class="page-link"
                                               href="{{route('stores', ['page'=> $storesPaginate->currentPage() - 1])}}"
                                               aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>
                                    @endif
                                    @for($i = 1; $i <= $storesPaginate->lastPage(); $i++)
                                        <li class="page-item {{$storesPaginate->currentPage() === $i ? 'active' : ''}}">
                                            <a class="page-link" href="{{route('stores', ['page'=> $i])}}">{{$i}}</a>
                                        </li>
                                    @endfor
                                    @if($storesPaginate->currentPage() < $storesPaginate->lastPage())
                                        <li class="page-item">
                                            <a class="page-link"
                                               href="{{route('stores', ['page'=> $storesPaginate->currentPage() + 1])}}"
                                               aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    @endif
                                </ul>
                            </nav>
                        @endif
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

@section('js_inline')
    <script>

        $('.show-edit-form').forEach(btn => {
            btn.onclick = e => {
                let key = e.target.getAttribute('key') || e.target.parentElement.getAttribute('key');
                let rowData = document.querySelectorAll(".row-store-info")[key];

                $('#titleForm').innerText = "Sửa thông tin cửa hàng";
                $('#btnSubmit').innerText = "Sửa";

                let formElm = $('#storeForm');
                formElm.action = `{{route('stores')}}/${rowData.getAttribute('data-store-id')}`
                formElm.querySelector('input[name=_method]').value = 'put';
                formElm.querySelector('input[name=id]').value = rowData.getAttribute('data-store-id');

                $('#storeName').value = rowData.getAttribute('data-store-name');
                $('#phone').value = rowData.getAttribute('data-store-phone');
                $('#storeAddress').value = rowData.getAttribute('data-store-address');
                $('#storeStatus').value = rowData.getAttribute('data-store-status');
                $('#storeDescription').value = rowData.getAttribute('data-store-desc')
            }
        })

        $('#btnAdd').onclick = () => {
            $('#titleForm').innerText = "Thêm cửa hàng";
            $('#btnSubmit').innerText = "Thêm";
            let formElm = $('#storeForm');
            formElm.reset();
            formElm.action = '{{route('stores.create')}}'
            formElm.querySelector('input[name=_method]').value = 'post';
            $('#phone').value = '{{auth('admin')->user()->phone}}';
            $('#storeAddress').value = '{{auth('admin')->user()->address}}';
        }

        // Load modal
        let isError = {{$errors->any() ? 'true' : 'false'}};
        if (isError) {
            new bootstrap.Modal($('#formModal'), {
                keyboard: false
            }).show();
        }
        //validate
        $('#storeForm').validate({
            formGroup: '.form-group',
            rules: {
                "#storeName": {
                    required: true,
                },
                "#phone": {
                    required: true,
                    regex: /^(0|\+84)[3|5|7|8|9][\d+]{8}$/,
                },
                "#storeAddress": {
                    required: true,
                },
                "#storeStatus": {
                    required: true,
                },
            },

            message: {
                "#storeName": {
                    required: "Vui lòng nhập tên cửa hàng!",
                },
                "#phone": {
                    required: "Vui lòng nhập số điện thoại!",
                    regex: 'Định dạng: 0... / +84...'
                },
                "#storeAddress": {
                    required: "Vui lòng nhập địa chỉ!",
                },
                "#storeStatus": {
                    required: "Vui lòng chọn trạng thái!",
                },
            },
        });
        $('#formModal').addEventListener('hidden.bs.modal', function (event) {
            $('#storeForm').resetValidate();
        })

        //alert
        let alertList = document.querySelectorAll('.alert')
        alertList.forEach(function (alert) {
            new bootstrap.Alert(alert)
        })
        let alertNode = document.querySelector('.alert');
        if (alertNode) {
            let alert = bootstrap.Alert.getInstance(alertNode)
            setTimeout(function () {
                alert.close();
            }, 2500)
        }

    </script>
@endsection
