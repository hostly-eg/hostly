@extends('layouts.app')
@section('head')
{{--    <link rel="stylesheet" href="assets/css/index.css">--}}
{{--    <link rel="stylesheet" href="assets/css/bootstrapp.min.css">--}}
@endsection
@section('content')
    <div class="container" style="margin-top: 10rem">
        <div class="row p-3 mt-5">
            <div class="fs-2 fw-semibold mb-4">You're almost there! Complete your order</div>
            <div class="fs-4 fw-semibold mb-5">Register New Domain</div>
            <form action="{{route('check_domain')}}" method="POST" class="d-flex justify-content-center align-items-center flex-column flex-md-row">
                @csrf
                <input type="text" name="domain" value="{{$domain}}" required class="col-12 text-dark col-md-9 p-1 border px-3 mb-3 mb-md-0">
                <button class="btn btn-primary ms-3  col-12 col-md-3 bg-blue mb-3 mb-md-0">
                    search
                </button>
            </form>
            @foreach($results as $result)
                @if($result['show'] == 1)
                    @if($result['status'] == 'مستخدم')
                        <div class="col-12 p-3 bg-light border rounded-3 mt-5 mb-4 d-flex flex-column flex-md-row align-items-center">
                            <div class="text-danger fw-semibold fs-5 text-center">{{$result['domain']}} is already taken</div>
                            <div class="fs-6 text-secondary">This domain name is taken, please search for a different domain or choose from the options below</div>
                        </div>
                    @else
                        <div class="col-12 p-3 bg-light border mb-5 rounded-3 mt-5 d-flex justify-content-between flex-column flex-md-row align-items-center">
                            <div class="text-success fw-semibold fs-5 text-center">{{$result['domain']}}
                            </div>
                            <div class="fw-semibold">EGP {{$result['price']}} -1year</div>
                            <div>
                                <a class="p-2 border rounded-3 text-center bg-transparent" href="{{route('domain_cart',['plan_id' => $result['id'],'subs_id' => 0 , 'dom' => $result['domain']])}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-cart2" viewBox="0 0 16 16">
                                        <path
                                            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l1.25 5h8.22l1.25-5zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    @endif
                @endif
            @endforeach
            <div class="fs-2 fw-semibold mb-4">more option</div>
            <div class="p-3 border rounded-3 col-12 " style="height: 400px; overflow: auto; ">
                @foreach($results as $result)
                    @if($result['show'] == 2)
                        <div class="col-12 p-3 bg-light border mb-3 rounded-3 d-flex justify-content-between flex-column flex-md-row align-items-center">
                            <div class="text-success fw-semibold fs-5 text-center">{{$result['domain']}}
                            </div>
                            <div class="fw-semibold">EGP {{$result['price']}} -1year</div>
                            <div>
                                <a class="p-2 border rounded-3 text-center bg-transparent" href="{{route('domain_cart',['plan_id' => $result['id'],'subs_id' => 0 , 'dom' => $result['domain']])}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-cart2" viewBox="0 0 16 16">
                                        <path
                                            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l1.25 5h8.22l1.25-5zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection
