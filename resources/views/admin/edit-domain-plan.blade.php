@extends('layouts.app')
@section('head')

@endsection
@section('content')
    <main class="main-content">
        <div class="position-relative iq-banner">
            @include('layouts.navbars.auth_nav')
            <div class="iq-navbar-header" style="height: 215px;">
                <div class="container-fluid iq-container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="flex-wrap d-flex justify-content-between align-items-center">
                                <div>
                                    <h1>Hello Admin</h1>
                                    <p>Welcome to dashboard for your website to control every thing.</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="iq-header-img">
                    <img src="../assets/img/top-header.png" alt="header" class="theme-color-default-img img-fluid w-100 h-100 animated-scaleX">
                </div>
            </div>
        </div>
        <div class="conatiner-fluid content-inner mt-n5 py-0">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Create New Domain Plan</h4>
                    </div>
                </div>
                @if(session()->has('notify'))
                    <div class="alert alert-left alert-{{ session()->get('notify')['type'] }} alert-dismissible fade show mb-3" role="alert">
                        <span> {{ session()->get('notify')['content'] }}</span>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                <div class="card-body">
                    <form class="row" action="{{route('update_domain',$domain->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group col-md-6 col-12">
                            <label class="form-label" for="extension">Extension</label>
                            <input type="text" class="form-control" id="extension" value="{{$domain->extension}}" name="extension">
                            @error('extension')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6 col-12">
                            <label class="form-label" for="price_12month">Price Plan In 12Month</label>
                            <input type="text" class="form-control" id="price_12month" value="{{$domain->price_1_year}}" name="price_12month">
                            @error('price_12month')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6 col-12">
                            <label class="form-label" for="price_24month">Price Plan In 24Month</label>
                            <input type="text" class="form-control" id="price_24month" value="{{$domain->price_2_years}}" name="price_24month">
                            @error('price_24month')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6 col-12">
                            <label class="form-label" for="price_48month">Price Plan In 48Month</label>
                            <input type="text" class="form-control"  id="price_48month" value="{{$domain->price_3_years}}" name="price_48month">
                            @error('price_48month')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6 col-12">
                            <label class="form-label" for="plan_Renew">Price Renew Plan</label>
                            <input type="text" class="form-control" id="plan_Renew" value="{{$domain->price_reNew}}" name="plan_Renew">
                            @error('plan_Renew')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth_footer')
    </main>
@endsection
@section('script')

@endsection
