@extends('layouts.admin')

@section('title', $foods->getPageName())

@section('css_inline')
    .loading-img{
    position: absolute;
    top: calc(50% - 14.1125px);
    left: calc(50% - 14.1125px);
    }
@endsection

@section('css_external')
    <link rel="stylesheet" href="{{asset('/css/validate/style.css')}}">
@endsection
@section('js_before_declare')
    <script src="{{asset('/js/library/Ajax.js')}}"></script>
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
                                {{old('_method') === 'put' ? 'Sửa' : 'Thêm'}} món ăn
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="foodForm"
                                  action="{{route('foods')}}{{old('_method') === 'put' ? '/' . old('id') : ''}}"
                                  method="post">
                                @csrf
                                <input type="hidden" name="_method" value="{{old('_method')}}">
                                <input type="hidden" name="id" id="foodId" value="{{old('id')}}">
                                <input type="hidden" name="food_avatar" id="foodAvatarPath" value="{{old('food_avatar')}}">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="form-group mb-3 {{$errors->has('food_name') ? 'invalid' : ''}}">
                                            <input class="form-control" id="foodName" type="text"
                                                   name="food_name"
                                                   placeholder="Tên món ăn" value="{{ old('food_name') }}">
                                            @if($errors->has('food_name'))
                                                <div class="invalid-feedback">{{ $errors->first('food_name') }}</div>
                                            @endif
                                        </div>
                                        <div class="form-group mb-3 {{$errors->has('price') ? 'invalid' : ''}}">
                                            <input class="form-control" id="price" type="number" name="price"
                                                   placeholder="Giá bán" value="{{ old('price') }}">
                                            @if($errors->has('price'))
                                                <div
                                                    class="invalid-feedback">{{ $errors->first('price') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <label for="foodAvatar" id="foodAvatarLabel"
                                               style="display: block; position: relative; width: 110px; height: 110px; cursor: pointer">
                                            <img
                                                @if(old('food_avatar'))
                                                    src="{{old('food_avatar')}}"
                                                @else
                                                    src="{{asset(session('foodAvatarCurrent') ?? '/images/default/no-image-food.jpg')}}"
                                                @endif
                                                class="avatar avatar-medium rounded shadow" alt=""
                                                id="foodAvatarImg">
                                            <input type="file" id="foodAvatar" style="display: none">
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-3 {{$errors->has('category') ? 'invalid' : ''}}">
                                    <select class="form-select" id="category" name="category">
                                        <option {{old('category') === null || '' ? 'selected' : ''}} disabled hidden
                                                value="">Chọn danh mục
                                        </option>
                                        @foreach($categories as $catygory)
                                            <option
                                                value="{{$catygory->id}}" {{old('category') === $catygory->id ? 'selected' : ''}}>
                                                {{$catygory->category_name}}
                                            </option>
                                        @endforeach
                                    </select>
                                    @if($errors->has('category'))
                                        <div class="invalid-feedback">{{ $errors->first('category') }}</div>
                                    @endif
                                </div>

                                <div class="form-group mb-3 {{$errors->has('category') ? 'invalid' : ''}}"
                                     style="{{count($stores) === 1 ? 'display:none': ""}}">
                                    <select class="form-select" id="store" name="store">
                                        @if(count($stores) === 1 )
                                            <option value="{{$stores[0]->id}}" selected></option>
                                        @else
                                            <option {{old('store') === null || '' ? 'selected' : ''}} disabled hidden
                                                    value="">Chọn cửa hàng
                                            </option>
                                            @foreach($stores as $store)
                                                <option
                                                    value="{{$store->id}}" {{old('store') === $store->id ? 'selected' : ''}}>
                                                    {{$store->store_name}}
                                                </option>
                                            @endforeach
                                        @endif
                                    </select>
                                    @if($errors->has('store'))
                                        <div class="invalid-feedback">{{ $errors->first('store') }}</div>
                                    @endif
                                </div>

                                <div class="form-group mb-3 {{$errors->has('food_active') ? 'invalid' : ''}}">
                                    <select class="form-select" id="foodActive" name="food_active">
                                        <option {{old('food_active') === null || '' ? 'selected' : ''}} disabled hidden
                                                value="">Tình trạng
                                        </option>
                                        <option value="1" {{old('food_active') === '1' ? 'selected' : ''}}>Kích hoạt
                                        </option>
                                        <option value="0" {{old('food_active') === '0' ? 'selected' : ''}}>Chưa Kích
                                            hoạt
                                        </option>
                                    </select>
                                    @if($errors->has('food_active'))
                                        <div class="invalid-feedback">{{ $errors->first('food_active') }}</div>
                                    @endif
                                </div>
                                <div class="form-group mb-4">
                                                <textarea class="form-control" id="foodDescription"
                                                          name="food_description" style="resize: none;"
                                                          placeholder="Mô tả">{{ old('food_description') }}</textarea>
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

            {{--            main--}}
            <div class="row mb-4">
                <div class="col-7">
                    <h5 class="mb-0">{{$foods->getPageName()}}</h5>
                </div>
                <div class="col-5" style="text-align: right">
                    <button id="btnAdd" type="button" class="btn btn-primary btn-icon btn-pills" data-bs-toggle="modal"
                            data-bs-target="#formModal">
                        <i class="uil uil-plus"></i>
                    </button>
                </div>
            </div>

            @if(count($foods)==0)
                <p class="text-center">Không có món ăn nào!</p>
            @else
                <div class="table-responsive shadow rounded">
                    <table class="table table-center bg-white mb-0 table-hover table-bordered ">
                        <thead class="table-secondary-200 text-center">
                        <tr>
                            <th class="border-bottom p-3" style="min-width: 25px;">Id</th>
                            <th class="border-bottom p-3">Tên</th>
                            <th class="border-bottom p-3">Cửa hàng</th>
                            <th class="border-bottom p-3">Thể loại</th>
                            <th class="border-bottom p-3">Giá gốc</th>
                            <th class="border-bottom p-3">Giá bán</th>
                            <th class="border-bottom p-3">Lợi nhuận</th>
                            <th class="border-bottom p-3">Tiêu thụ</th>
                            <th class="border-bottom p-3">Đánh giá</th>
                            <th class="border-bottom p-3" style="max-width: 150px">Mô tả</th>
                            <th class="border-bottom p-3">Tình trạng</th>
                            <th class="border-bottom p-3" style="min-width: 60px;"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($foods as $food)
                            <tr class="row-food-info"
                                data-food-id="{{$food['id']}}"
                                data-food-name="{{$food['food_name']}}"
                                data-food-avatar="{{$food['food_avatar'] ? $food['food_avatar'] : '/images/default/no-image-food.jpg'}}"
                                data-food-price="{{$food['price']}}"
                                data-food-store-id="{{$food['store_id']}}"
                                data-food-category-id="{{$food['category_id']}}"
                                data-food-store-name="{{$food['store_name']}}"
                                data-food-active="{{$food['food_active']}}"
                                data-food-description="{{$food['food_description']}}"
                            >
                                <th class="p-2">{{$food['id']}}</th>
                                <td class="p-2">
                                    <a href="#" class="text-dark">
                                        <div class="d-flex align-items-center">
                                            <img
                                                src="{{$food['food_avatar'] ? asset($food['food_avatar']) : asset('/images/default/no-image-food.jpg')}}"
                                                class="avatar avatar-md-sm rounded shadow" alt="">
                                            <span class="ms-2">{{$food['food_name']}}</span>
                                        </div>
                                    </a>
                                </td>
                                <td class="p-2">{{$food['store_name']}}</td>
                                <td class="p-2">{{$food['category_name']}}</td>
                                <td class="p-2">{{currency_format($food['price'])}}</td>
                                <td class="p-2">
                                    @if(isset($food['discount']))
                                        {{currency_after_promotions($food['price'], $food['discount'], $food['max_discount'], $food['is_percent'])}}
                                    @else
                                        {{currency_format($food['price'])}}
                                    @endif
                                </td>
                                <td class="p-2">{{currency_format($food['food_profit'])}}</td>
                                <td class="p-2">{{$food['food_consume']}}</td>
                                <td class="p-2">{{$food['avg_rate']}}</td>
                                <td class="p-2 ellipsis" style="max-width: 150px">{{$food['food_description']}}</td>


                                <td class="p-2">
                                    @if($food['food_active'] === 1)
                                        <span class="badge bg-soft-success">Kích hoạt</span>
                                    @else
                                        <span class="badge badge bg-soft-warning">Chưa kích hoạt</span>
                                    @endif
                                </td>
                                <td class="p-2 text-center">
                                    <a href="#" class="btn btn-icon btn-pills btn-soft-primary" data-bs-toggle="modal"
                                       data-bs-target="#viewprofile">
                                        <i class="uil uil-eye"></i>
                                    </a>
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
                                                Bạn muốn xóa {{$food['food_name']}}?
                                            </div>
                                            <div class="card-footer text-center">
                                                <form method="post" action="{{route('foods')}}/{{$food['id']}}"
                                                      style="margin-bottom: 0"
                                                >
                                                    @csrf
                                                    @method('delete')
                                                    <input type="hidden" name="id"
                                                           value="{{$food['id']}}">
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
                {{paginate($foods->lastPage(), $foods->currentPage(), $foods->path())}}
                {{--paginate--}}
            @endif

        </div>
    </div>
@endsection

@section('js_inline')
    <script>
        function setFormEdit(data) {
            var id = data.getAttribute('data-food-id');
            let formElm = $('#foodForm');
            formElm.action = `/manager/foods/${id}`
            formElm.querySelector('input[name=_method]').value = 'put';
            $('#foodId').value = id;
            $('#foodName').value = data.getAttribute('data-food-name');
            $('#price').value = data.getAttribute('data-food-price');
            $('#foodAvatarImg').src = data.getAttribute('data-food-images');
            $('#category').value = data.getAttribute('data-food-category-id');
            $('#store').value = data.getAttribute('data-food-store-id');
            $('#foodActive').value = data.getAttribute('data-food-active');
            $('#foodDescription').value = data.getAttribute('data-food-description');
        }

        $('.show-edit-form').forEach((btn, index) => {
            btn.onclick = e => {
                $('#titleForm').innerText = "Sửa món ăn";
                $('#btnSubmit').innerText = "Sửa";
                let rowData = $('.row-food-info')[index];
                setFormEdit(rowData);
            }
        })

        function resetField(form) {
            form.querySelectorAll('input[name], textarea[name], select[name]').forEach((field) => {
                if (field.type !== 'hidden') {
                    if (field.parentElement.style.display !== 'none') {
                        field.value = '';
                    }
                }
            })
        }

        $('#btnAdd').onclick = () => {
            $('#titleForm').innerText = "Thêm món ăn";
            $('#btnSubmit').innerText = "Thêm";
            let formElm = $('#foodForm');
            formElm.action = `/manager/foods`
            resetField(formElm);
            formElm.querySelector('input[name=_method]').value = 'post';
        }

        {{--// Load modal--}}
        {{--let isError = {{$errors->any() ? 'true' : 'false'}};--}}
        {{--if (isError) {--}}
        {{--    new bootstrap.Modal($('#formModal'), {--}}
        {{--        keyboard: false--}}
        {{--    }).show();--}}
        {{--}--}}

        {{--//validate--}}
        {{--$('#categoryForm').validate({--}}
        {{--    formGroup: '.form-group',--}}
        {{--    rules: {--}}
        {{--        "#categoryName": {--}}
        {{--            required: true,--}}
        {{--        },--}}
        {{--        "#categoryActive": {--}}
        {{--            required: true,--}}
        {{--        },--}}
        {{--    },--}}
        {{--    message: {--}}
        {{--        "#categoryName": {--}}
        {{--            required: "Vui lòng nhập danh mục!",--}}
        {{--        },--}}
        {{--        "#categoryActive": {--}}
        {{--            required: "Vui lòng chọn tình trạng!",--}}
        {{--        },--}}
        {{--    },--}}
        {{--});--}}

        // Load modal
        loadModal($('#formModal'));
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


        // ajax
        function deleteImageRequest(token) {
            var path = $('#foodAvatarPath').value;
            if (path) {
                ajax({
                    url: '/api/v1/manager/deleteFoodAvatar',
                    method: 'post',
                    header: {
                        'Authorization': `Bearer ${token}`
                    },
                    data: {
                        path,
                    },
                    success: (data) => {
                        return data;
                    },
                })
            }
        }

        $('#formModal').addEventListener('hidden.bs.modal', function (event) {
            $('#foodForm').resetValidate();
            deleteImageRequest("{{access_token()}}");
            $('#foodAvatarPath').value = null;
            $('#foodAvatarLabel').removeAttribute('file-name');
            $('#foodAvatarImg').src = '/images/default/no-image-food.jpg';
        })
        $('#food-images').onchange = function (e) {
            deleteImageRequest("{{access_token()}}")
            if (e.target.files.length !== 0) {
                var loadingSpan = document.createElement('div');
                loadingSpan.classList.add("visually-hidden");
                var loading = document.createElement('div');
                loading.className = 'spinner-border text-primary loading-img';
                loading.setAttribute('role', 'status');
                loading.append(loadingSpan);
                ajax({
                    url: '/api/v1/manager/uploadFoodAvatar',
                    method: 'post',
                    header: {
                        'Authorization': `Bearer {{access_token()}}}`
                    },
                    data: {'food_avatar': $('#food-images').files[0]},
                    success: (data) => {
                        $('#foodAvatarImg').removeAttribute('scr');
                        $('#foodAvatarImg').setAttribute('src', data.path);
                        $('#foodAvatarPath').value = data.path;
                        loading.remove();
                        e.target.removeAttribute('disabled')
                    },
                    loading: () => {
                        $('#foodAvatarLabel').append(loading);
                        e.target.setAttribute('disabled', 'true');
                    },
                    failure: () => {
                        loading.remove();
                        e.target.removeAttribute('disabled')
                    }
                })
            }
        }
    </script>
@endsection
