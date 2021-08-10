@extends('layouts.admin')

@section('title', 'Quản lý danh mục')

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
                            <h5 class="modal-title" id="titleForm">
                                {{old('_method') === 'put' ? 'Sửa' : 'Thêm'}} danh mục món ăn
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="categoryForm" action="{{route('category.update')}}" method="post">
                                @csrf
                                <input type="hidden" name="_method" value="{{old('_method')}}">
                                <input type="hidden" name="id" id="categoryId" value="{{old('id')}}">
                                <div class="form-group mb-3 {{$errors->has('category_name') ? 'invalid' : ''}}">
                                    <input class="form-control" id="categoryName" type="text" name="category_name"
                                           placeholder="Tên danh mục" value="{{ old('category_name') }}">
                                    @if($errors->has('category_name'))
                                        <div class="invalid-feedback">{{ $errors->first('category_name') }}</div>
                                    @endif
                                </div>
                                <div class="form-group mb-3 {{$errors->has('category_active') ? 'invalid' : ''}}">
                                    <select class="form-select" id="categoryActive" name="category_active"
                                            value="{{ old('category_active') }}">
                                        <option selected disabled hidden value="">Tình trạng</option>
                                        <option value="1">Hoạt động</option>
                                        <option value="0">Chưa hoạt động</option>
                                    </select>
                                    @if($errors->has('category_active'))
                                        <div class="invalid-feedback">{{ $errors->first('category_active') }}</div>
                                    @endif
                                </div>
                                <div class="form-group mb-4">
                                    <textarea class="form-control" id="categoryDescription"
                                              name="category_description" style="resize: none;"
                                              placeholder="Mô tả">{{ old('category_description') }}</textarea>
                                </div>
                                <div class="form-group mb-2 row text-center">
                                    <div class="col-6">
                                        <button id="btnSubmit" type="submit" class="btn btn-primary w-75">
                                            {{old('_method') === 'put' ? 'Sửa' : 'Thêm'}}
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

            <div class="row mb-4">
                <div class="col-7">
                    <h5 class="mb-0">Quản lý danh mục món ăn</h5>
                </div>
                <div class="col-5" style="text-align: right">
                    <button id="btnAdd" type="button" class="btn btn-primary btn-icon btn-pills" data-bs-toggle="modal"
                            data-bs-target="#formModal">
                        <i class="uil uil-plus"></i>
                    </button>
                </div>
            </div>

            <div class="table-responsive shadow rounded">
                @if(count($categories)==0)
                    <p class="text-center">Không có danh mục nào!</p>
                @else
                    <table class="table table-hover table-bordered table-center bg-white mb-0">
                        <thead class="table-secondary-200 text-center">
                        <tr>
                            <th class="border-bottom p-3" style="min-width: 25px;">Id</th>
                            <th class="border-bottom p-3" style="min-width: 180px;">Tên danh mục</th>
                            <th class="border-bottom p-3">Số món ăn</th>
                            <th class="border-bottom p-3" style="min-width: 250px;">Mô tả</th>
                            <th class="border-bottom p-3">Tình trạng</th>
                            <th class="border-bottom p-3" style="min-width: 60px;"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <th class="p-2 text-center">{{$category['id']}}</th>
                                <th class="py-3">
                                    <div class="d-flex align-items-center">
                                        <span class="ms-2">{{$category['category_name']}}</span>
                                    </div>
                                </th>
                                <td class="p-2 text-center">{{$category['food_totals']}}</td>
                                <td class="p-2 ellipsis"
                                    style="max-width: 250px">{{$category['category_description']}}</td>
                                <td class="p-2 text-center">
                                    @if($category['category_active'] === 1)
                                        <span class="badge bg-soft-success">Hoạt động</span>
                                    @else
                                        <span class="badge badge bg-soft-warning">Không hoạt động</span>
                                    @endif
                                </td>
                                <td class="p-2 text-center">
                                    <a href="#"
                                       class="btn btn-icon btn-pills btn-soft-success show-edit-form"
                                       data-bs-toggle="modal" data-bs-target="#formModal"
                                       data-cate-id="{{$category['id']}}"
                                       data-cate-name="{{$category['category_name']}}"
                                       data-cate-active="{{$category['category_active']}}"
                                       data-cate-desc="{{$category['category_description']}}"
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
                                                Bạn muốn xóa {{$category['category_name']}}?
                                            </div>
                                            <div class="card-footer text-center">
                                                <form method="post" action="{{route('category.delete')}}"
                                                      style="margin-bottom: 0"
                                                >
                                                    @csrf
                                                    @method('delete')
                                                    <input type="hidden" name="id"
                                                           value="{{$category['id']}}">
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

@section('js_inline')
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
