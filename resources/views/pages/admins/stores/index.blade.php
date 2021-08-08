@extends('layouts.admin');
@section('main')
    <div class="layout-specing">
        <div class="row mb-4">
            <div class="col-7">
                <h5 class="mb-0">Quản lý danh sách cửa hàng</h5>
            </div>
            <div class="col-5" style="text-align: right">
                <a class="btn btn-primary" href="">Thêm thể loại</a>
            </div>
        </div>
{{--        <div class="row">--}}
{{--            <div class="col-xl-12 col-lg-12 col-md-12 mt-12">--}}
{{--                <table class="table table-striped table-hover text-center table-bordered">--}}
{{--                    <thead class="table-secondary">--}}
{{--                    <tr>--}}
{{--                        <th class="col-1" scope="col">STT</th>--}}
{{--                        <th class="col-4"  scope="col">Tên thể loại</th>--}}
{{--                        <th class="col-2"  scope="col">Số món ăn</th>--}}
{{--                        <th class="col-2"  scope="col">Tình trạng</th>--}}
{{--                        <th class="col-3"  scope="col">Hành động</th>--}}
{{--                    </tr>--}}
{{--                    </thead>--}}
{{--                    <tbody>--}}
{{--                    @for($i = 0; $i< count($categories); $i++)--}}
{{--                        <tr>--}}
{{--                            <th scope="row">{{$i+1}}</th>--}}
{{--                            <td>{{$categories[$i]['category_name']}}</td>--}}
{{--                            <td>12</td>--}}
{{--                            <td>--}}
{{--                                <a--}}
{{--                                    href=""--}}
{{--                                    class="btn {{$categories[$i]['category_active'] === 1 ? 'btn-outline-success' : 'btn-outline-danger'}}--}}
{{--                                        btn-sm"--}}
{{--                                >--}}
{{--                                    {{$categories[$i]['category_active'] === 1 ? 'Hoạt động' : 'Không kinh doanh'}}--}}
{{--                                </a>--}}
{{--                            </td>--}}
{{--                            <td>--}}
{{--                                <a href="" class="btn btn-warning btn-sm">Sửa</a>--}}
{{--                                <a href="" class="btn btn-danger btn-sm">Xóa</a>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                    @endfor--}}
{{--                    </tbody>--}}
{{--                </table>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
@endsection
