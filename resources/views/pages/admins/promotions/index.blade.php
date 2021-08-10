@extends('layouts.admin')

@section('title', 'Quản lý khuyến mãi')

@section('css_inline')
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
            {{--            <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModal" aria-hidden="true">--}}
            {{--                <div class="modal-dialog modal-dialog-centered">--}}
            {{--                    <div class="modal-content">--}}
            {{--                        <div class="modal-header">--}}
            {{--                            <h5 class="modal-title" id="titleForm">--}}
            {{--                                {{old('_method') === 'put' ? 'Sửa' : 'Thêm'}} danh mục món ăn--}}
            {{--                            </h5>--}}
            {{--                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
            {{--                        </div>--}}
            {{--                        <div class="modal-body">--}}
            {{--                            <form id="categoryForm" action="{{route('category.update')}}" method="post">--}}
            {{--                                @csrf--}}
            {{--                                <input type="hidden" name="_method" value="{{old('_method')}}">--}}
            {{--                                <input type="hidden" name="id" id="categoryId" value="{{old('id')}}">--}}
            {{--                                <div class="form-group mb-3 {{$errors->has('category_name') ? 'invalid' : ''}}">--}}
            {{--                                    <input class="form-control" id="categoryName" type="text" name="category_name"--}}
            {{--                                           placeholder="Tên danh mục" value="{{ old('category_name') }}">--}}
            {{--                                    @if($errors->has('category_name'))--}}
            {{--                                        <div class="invalid-feedback">{{ $errors->first('category_name') }}</div>--}}
            {{--                                    @endif--}}
            {{--                                </div>--}}
            {{--                                <div class="form-group mb-3 {{$errors->has('category_active') ? 'invalid' : ''}}">--}}
            {{--                                    <select class="form-select" id="categoryActive" name="category_active"--}}
            {{--                                            value="{{ old('category_active') }}">--}}
            {{--                                        <option selected disabled hidden value="">Tình trạng</option>--}}
            {{--                                        <option value="1">Hoạt động</option>--}}
            {{--                                        <option value="0">Chưa hoạt động</option>--}}
            {{--                                    </select>--}}
            {{--                                    @if($errors->has('category_active'))--}}
            {{--                                        <div class="invalid-feedback">{{ $errors->first('category_active') }}</div>--}}
            {{--                                    @endif--}}
            {{--                                </div>--}}
            {{--                                <div class="form-group mb-4">--}}
            {{--                                    <textarea class="form-control" id="categoryDescription"--}}
            {{--                                              name="category_description" style="resize: none;"--}}
            {{--                                              placeholder="Mô tả">{{ old('category_description') }}</textarea>--}}
            {{--                                </div>--}}
            {{--                                <div class="form-group mb-2 row text-center">--}}
            {{--                                    <div class="col-6">--}}
            {{--                                        <button id="btnSubmit" type="submit" class="btn btn-primary w-75">--}}
            {{--                                            {{old('_method') === 'put' ? 'Sửa' : 'Thêm'}}--}}
            {{--                                        </button>--}}
            {{--                                    </div>--}}
            {{--                                    <div class="col-6">--}}
            {{--                                        <button type="button" class="btn btn-secondary w-75" data-bs-dismiss="modal">--}}
            {{--                                            Hủy--}}
            {{--                                        </button>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                            </form>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}

            {{--            main--}}
            <div class="row mb-4">
                <div class="col-7">
                    <h5 class="mb-0">Quản lý khuyến mãi</h5>
                </div>
                <div class="col-5" style="text-align: right">
                    <button id="btnAdd" type="button" class="btn btn-primary btn-icon btn-pills" data-bs-toggle="modal"
                            data-bs-target="#formModal">
                        <i class="uil uil-plus"></i>
                    </button>
                </div>
            </div>

            <div class="table-responsive shadow rounded">
                @if(count($promotions) === 0)
                    <p class="text-center">Không có khuyến mãi nào!</p>
                @else
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
                            <tr>
                                <th class="p-2 text-start">
                                    <a href="#" class="text-dark">
                                        <div class="d-flex align-items-center">
                                            <img
                                                src="{{$promotion['food_avatar'] ? asset($promotion['food_avatar']) : asset('/images/default/no-image-food.jpg')}}"
                                                class="avatar avatar-md-sm rounded-circle shadow" alt="">
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
                                                <form method="post" action="{{route('category.delete')}}"
                                                      style="margin-bottom: 0"
                                                >
                                                    @csrf
                                                    @method('delete')
                                                    <input type="hidden" name="id"
                                                           value="{{$promotion['food_id']}}">
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
                @endif
            </div>


        </div>
    </div>
@endsection

@section('js_use')
    <script>

        $('.show-edit-form').forEach(btn => {
            btn.onclick = e => {
                $('#titleForm').innerText = "Sửa danh mục món ăn";
                $('#btnSubmit').innerText = "Sửa";
                let formElm = $('#categoryForm');
                formElm.action = '{{route('category.update')}}'
                formElm.querySelector('input[name=_method]').value = 'put';
                $('#categoryId').value = e.target.getAttribute('data-cate-id') ||
                    e.target.parentElement.getAttribute('data-cate-id');
                $('#categoryName').value = e.target.getAttribute('data-cate-name') ||
                    e.target.parentElement.getAttribute('data-cate-name');
                $('#categoryActive').value = e.target.getAttribute('data-cate-active') ||
                    e.target.parentElement.getAttribute('data-cate-active');
                $('#categoryDescription').value = e.target.getAttribute('data-cate-desc') ||
                    e.target.parentElement.getAttribute('data-cate-desc');
            }
        })
        $('#btnAdd').onclick = () => {
            $('#titleForm').innerText = "Thêm danh mục món ăn";
            $('#btnSubmit').innerText = "Thêm";
            let formElm = $('#categoryForm');
            formElm.reset();
            formElm.action = '{{route('category.store')}}'
            formElm.querySelector('input[name=_method]').value = 'post';
        }

        // Load modal
        let isError = {{$errors->any() ? 'true' : 'false'}};
        if (isError) {
            new bootstrap.Modal($('#formModal'), {
                keyboard: false
            }).show();
        }
        //validate
        $('#categoryForm').validate({
            formGroup: '.form-group',
            rules: {
                "#categoryName": {
                    required: true,
                },
                "#categoryActive": {
                    required: true,
                },
            },
            message: {
                "#categoryName": {
                    required: "Vui lòng nhập danh mục!",
                },
                "#categoryActive": {
                    required: "Vui lòng chọn tình trạng!",
                },
            },
        });
        $('#formModal').addEventListener('hidden.bs.modal', function (event) {
            $('#categoryForm').resetValidate();
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
