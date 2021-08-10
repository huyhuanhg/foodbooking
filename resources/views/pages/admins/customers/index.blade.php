@extends('layouts.admin')

@section('title', 'Quản lý khách hàng')
@section('css')
    .card-content {
        background-color: rgba(0, 0, 0, .1);
        transform: translateY(85%);
        transition: .3s ease;
    }

    .team-person:hover .card-content {
        transform: translateY(50%);
    }

    [class^=delay-] {
        transform: scale(0);
        transition: .2s ease;
    }

    .team-person:hover [class^=delay-] {
        transform: scale(1);
    }

    .title:hover {
        color: #363636 !important;
    }

    .delay-2 {
        transition-delay: .2s;
    }

    .delay-3 {
        transition-delay: .3s;
    }

    .delay-4 {
        transition-delay: .4s;
    }
@endsection
@section('js')
@stop

@section('main_content')
    <div class="container-fluid">
        <div class="layout-specing">

            <div class="row mb-4">
                <div class="col">
                    <h5 class="mb-0">Quản lý khách hàng</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 mt-12">
                    @if(count($customersPaginate) == 0)
                        <p class="text-center">Không có khách hàng nào!</p>
                    @else

                        <div class="row row-cols-md-2 row-cols-lg-5">

                            @foreach($customersPaginate as $customerKey => $customer)
                                <div class="col mt-4">
                                    <div
                                        class="card bg-dark text-white team border-0 rounded shadow overflow-hidden position-relative">
                                        <div class="team-person position-relative overflow-hidden">
                                            @if(!$customer->avatar)
                                                <img
                                                    src="{{$customer->gender === 0 ? asset('images/default/no-image-female.jpeg') : asset('images/default/no-image-male.jpeg')}}"
                                                    class="img-fluid" style="width: 100%"
                                                    alt=""
                                                >
                                            @else
                                                <img src="{{asset('images/uploads/userAvatar/'.$customer->avatar)}}"
                                                     class="img-fluid" alt="">
                                            @endif
                                            <ul class="list-unstyled team-like">
                                                <li class="delay-2">
                                                    <a href="{{route('customer.profile', ['id'=> $customer->id])}}" class="btn btn-icon btn-pills btn-soft-primary">
                                                        <svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="feather feather-activity">
                                                            <circle cx="12" cy="12" r="10"></circle>
                                                            <line x1="12" y1="16" x2="12" y2="12"></line>
                                                            <line x1="12" y1="8" x2="12" y2="8"></line>
                                                        </svg>
                                                    </a>
                                                </li>
                                                <li class="delay-3">
                                                    <a href="#"
                                                       class="btn btn-icon btn-pills {{!$customer->status ? "btn-soft-danger" : "btn-soft-warning"}}">
                                                        <svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            width="24"
                                                            height="24"
                                                            viewBox="0 0 24 24"
                                                            fill="none"
                                                            stroke="currentColor"
                                                            stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="feather feather-activity">
                                                            <rect x="5" y="11" width="15" height="11" rx="2"
                                                                  ry="2"></rect>
                                                            @if(!$customer->status)
                                                                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                                            @else
                                                                <path d="M7 11V7a5 5 0 0 1 9.9-1"></path>
                                                            @endif
                                                        </svg>
                                                    </a>
                                                </li>
                                                <li class="delay-4">
                                                    <a href="#" class="btn btn-icon btn-pills btn-soft-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round" class="feather feather-activity">
                                                            <path
                                                                d="M21 4H8l-7 8 7 8h13a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2z"></path>
                                                            <line x1="18" y1="9" x2="12" y2="15"></line>
                                                            <line x1="12" y1="9" x2="18" y2="15"></line>
                                                        </svg>
                                                    </a>
                                                </li>
                                            </ul>

                                            <div class="card-img-overlay card-content">
                                                <h5 class="card-title">
                                                    <a href="{{route('customer.profile', ['id'=> $customer->id])}}"
                                                       class="title text-black-50 h4 d-block mb-0">{{"$customer->first_name $customer->last_name"}}</a>
                                                </h5>
                                                <p class="card-text">
                                                    <i class="ri-map-pin-line text-primary align-middle"></i>
                                                    <small class="text-primary ms-2">
                                                        {{$customer->address}}
                                                    </small>
                                                </p>
                                                <p class="card-text">
                                                    <i class="ri-phone-line text-primary align-middle"></i>
                                                    <small class="text-primary ms-2">
                                                        {{$customer->phone}}
                                                    </small>
                                                </p>
                                                <p class="card-text">
                                                    <i class="ri-chat-voice-fill text-primary align-middle"></i>
                                                    <small
                                                        class="ms-2 {{!$customer->status ? "text-primary" : "text-danger"}}">
                                                        {{!$customer->status ? "Bình thường" : "Hạn chế"}}
                                                    </small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end col-->
                            @endforeach
                        </div>


                        {{--paginate--}}
                        @if($customersPaginate->lastPage() > 1)
                            <nav aria-label="Page navigation example" class="mt-3">
                                <ul class="pagination justify-content-end pagination-sm">
                                    @if($customersPaginate->currentPage() > 1)
                                        <li class="page-item">
                                            <a class="page-link"
                                               href="{{route('customers', ['page'=> $customersPaginate->currentPage() - 1])}}"
                                               aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>
                                    @endif
                                    @for($i = 1; $i <= $customersPaginate->lastPage(); $i++)
                                        <li class="page-item {{$customersPaginate->currentPage() === $i ? 'active' : ''}}">
                                            <a class="page-link" href="{{route('customers', ['page'=> $i])}}">{{$i}}</a>
                                        </li>
                                    @endfor
                                    @if($customersPaginate->currentPage() < $customersPaginate->lastPage())
                                        <li class="page-item">
                                            <a class="page-link"
                                               href="{{route('customers', ['page'=> $customersPaginate->currentPage() + 1])}}"
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
            </div>
        </div>
@endsection
