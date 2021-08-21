@extends('layouts.admin')

@section('title', 'Quản lý danh mục')

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
                                    <select class="form-select" id="categoryActive" name="category_active">
                                        <option {{ old('category_active') === null || '' ? 'selected' : ''}} disabled hidden value="">Tình trạng</option>
                                        <option value="1" {{ old('category_active') === '1' ? 'selected' : ''}}>Hoạt động</option>
                                        <option value="0"{{ old('category_active') === '0' ? 'selected' : ''}}>Chưa hoạt động</option>
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

@section('js_external_body_bottom')
    <script src="{{asset('/js/admins/categoryScript/initial.js')}}"></script>
    <script src="{{asset('/js/admins/categoryScript/validate.js')}}"></script>
    <script src="{{asset('/js/admins/categoryScript/eventSetElement.js')}}"></script>
@endsection

@section('js_inline')
    <script>
        $('#formModal').addEventListener('hidden.bs.modal', function () {
            $('#categoryForm').resetValidate();
        })
    </script>
@endsection
