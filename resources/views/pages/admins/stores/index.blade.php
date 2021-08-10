@extends('layouts.admin')
@section('title', 'Quản lý cửa hàng')
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
                    <h5 class="mb-0">Quản lý danh sách cửa hàng</h5>
                </div>
                <div class="col-5" style="text-align: right">

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
                        Thêm cửa hàng
                    </button>

                </div>

            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 mt-12">
                    @if(count($storesPaginate)==0)
                        <p class="text-center">Không có thể loại nào!</p>
                    @else
                        <table class="table table-striped table-hover text-center table-bordered">
                            <thead class="table-secondary">
                            <tr>
                                <th class="col-1" scope="col">STT</th>
                                <th class="col-2" scope="col">Tên cửa hàng</th>
                                <th class="col-2" scope="col">Địa chỉ</th>
                                <th class="col-1" scope="col">Số điện thoại</th>
                                <th class="col-1" scope="col">Chủ sở hữu</th>
                                <th class="col-1" scope="col">Đánh giá</th>
                                <th class="col-2" scope="col">Mô tả</th>
                                <th class="col-1" scope="col">Tình trạng</th>
                                <th class="col-2" scope="col">Hành động</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($storesPaginate as $storeKey => $store)
                                <tr>
                                    <th scope="row">{{($storeKey + 1) + ($storesPaginate->currentPage()-1) * 10}}</th>
                                    <td scope="row">{{$store->store_name}}</td>
                                    <td scope="row">{{$store->store_address}}</td>
                                    <td scope="row">{{$store->phone_contact}}</td>
                                    <td scope="row">{{"$store->first_name $store->last_name"}}</td>
                                    <td scope="row">{{$store->avg_rate}}</td>
                                    <td scope="row">{{$store->store_description}}</td>
                                    <td scope="row">
                                        <button
                                            href=""
                                            class="btn {{$store->store_status === 1 ? 'btn-outline-success' : 'btn-outline-danger'}}
                                                btn-sm"
                                        >
                                            {{$store->store_status === 1 ? 'Hoạt động' : 'Đóng cửa'}}
                                        </button>
                                    </td>
                                    <td scope="row">{{$store->store_owner}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

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
@endsection
