@extends('layouts.admin')

@section('title', 'Quản lý thể loại')
@section('main_content')
    <div class="container-fluid">
        <div class="layout-specing">

            <!-- Modal Form -->
            <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModal" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="titleForm">Thêm thể loại món ăn</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="categoryForm" action="{{route('category.update')}}" method="post">
                                @csrf
                                @method('post')
                                <input type="hidden" name="id" id="categoryId">
                                <div class="form-group mb-3">
                                    {{--                                <label class="form-label">Tên thể loại:</label>--}}
                                    <input class="form-control" id="categoryName" type="text" name="category_name"
                                           placeholder="Tên thể loại">
                                </div>
                                <div class="form-group mb-3">
                                    {{--                                <label class="form-label">Tình trạng:</label>--}}
                                    <select class="form-select" id="categoryActive" name="category_active">
                                        <option selected disabled hidden>Tình trạng</option>
                                        <option value="1">Hoạt động</option>
                                        <option value="0">Chưa hoạt động</option>
                                    </select>
                                </div>
                                <div class="form-group mb-4">
                                    <input class="form-control" type="text" id="categoryDescription"
                                           name="category_description" placeholder="Mô tả">
                                </div>
                                <div class="form-group mb-2 row text-center">
                                    <div class="col-6">
                                        <button id="btnSubmit" type="submit" class="btn btn-primary w-75">Thêm</button>
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
                    <h5 class="mb-0">Quản lý thể loại món ăn</h5>
                </div>
                <div class="col-5" style="text-align: right">
                    <button id="btnAdd" type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#formModal">
                        Thêm thể loại
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 mt-12">
                    @if(count($categories)==0)
                        <p class="text-center">Không có thể loại nào!</p>
                    @else
                        <table class="table table-striped table-hover text-center table-bordered">
                            <thead class="table-secondary">
                            <tr>
                                <th class="col-1" scope="col">STT</th>
                                <th class="col-3" scope="col">Tên thể loại</th>
                                <th class="col-2" scope="col">Số món ăn</th>
                                <th class="col-2" scope="col">Mô tả</th>
                                <th class="col-2" scope="col">Tình trạng</th>
                                <th class="col-2" scope="col">Hành động</th>
                            </tr>
                            </thead>
                            <tbody>
                            @for($i = 0; $i< count($categories); $i++)
                                <tr>
                                    <th scope="row">{{$i+1}}</th>
                                    <td>{{$categories[$i]['category_name']}}</td>
                                    <td>Chưa viết query</td>
                                    <td>{{$categories[$i]['category_description']}}</td>
                                    <td>
                                        <button
                                            href=""
                                            class="btn {{$categories[$i]['category_active'] === 1 ? 'btn-outline-success' : 'btn-outline-danger'}}
                                                btn-sm"
                                        >
                                            {{$categories[$i]['category_active'] === 1 ? 'Hoạt động' : 'Không kinh doanh'}}
                                        </button>
                                    </td>
                                    <td>
                                        <button class="btn btn-warning btn-sm show-edit-form"
                                                data-cate-id="{{$categories[$i]['id']}}"
                                                data-cate-name="{{$categories[$i]['category_name']}}"
                                                data-cate-active="{{$categories[$i]['category_active']}}"
                                                data-cate-desc="{{$categories[$i]['category_description']}}"
                                                data-bs-toggle="modal" data-bs-target="#formModal"
                                        >
                                            Sửa
                                        </button>
                                        {{--                                    <button class="btn btn-danger btn-sm delete-category">Xóa</button>--}}
                                        <div class="dropdown d-inline-block">
                                            <button class="btn btn-danger dropdown-toggle btn-sm" type="button"
                                                    id="dropdownMenuButton1"
                                                    data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                Xóa
                                            </button>
                                            <div class="dropdown-menu"
                                                 aria-labelledby="dropdownMenuButton1"
                                                 style="padding: 0; min-width: 15rem"
                                            >
                                                <div class="card">
                                                    <div class="card-header text-center" style="padding: .25rem">
                                                        Bạn muốn xóa {{$categories[$i]['category_name']}}?
                                                    </div>
                                                    <div class="card-footer text-center">
                                                        <form method="post" action="{{route('category.delete')}}"
                                                              style="margin-bottom: 0"
                                                        >
                                                            @csrf
                                                            @method('delete')
                                                            <input type="hidden" name="id"
                                                                   value="{{$categories[$i]['id']}}">
                                                            <button type="submit" class="btn btn-danger btn-sm">Xóa
                                                            </button>
                                                            <button type="button" class="btn btn-dark btn-sm">
                                                                Hủy
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endfor
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
        <script>
            let editBtn = document.querySelectorAll('.show-edit-form');
            editBtn.forEach(btn => {
                btn.onclick = e => {
                    btnSubmit
                    document.getElementById('titleForm').innerText = "Sửa thể loại món ăn";
                    document.getElementById('btnSubmit').innerText = "Sửa";
                    let formElm = document.getElementById('categoryForm');
                    formElm.action = '{{route('category.update')}}'
                    formElm.querySelector('input[name=_method]').value = 'put';
                    document.getElementById('categoryId').value = e.target.getAttribute('data-cate-id');
                    document.getElementById('categoryName').value = e.target.getAttribute('data-cate-name');
                    document.getElementById('categoryActive').value = e.target.getAttribute('data-cate-active');
                    document.getElementById('categoryDescription').value = e.target.getAttribute('data-cate-desc');
                }
            })
            document.getElementById('btnAdd').onclick = () => {
                document.getElementById('titleForm').innerText = "Thêm thể loại món ăn";
                document.getElementById('btnSubmit').innerText = "Thêm";
                let formElm = document.getElementById('categoryForm');
                formElm.reset();
                formElm.action = '{{route('category.store')}}'
                formElm.querySelector('input[name=_method]').value = 'post';
            }
        </script>
    </div>
@stop
