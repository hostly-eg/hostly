@extends('layouts.app')
@section('head')
<link rel="stylesheet" href="/richtexteditor/rte_theme_default.css" />
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
                        <h4 class="card-title">Create New Team Member</h4>
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
                    <form class="row" action="{{route('store_team_member')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group col-md-6">
                                <label class="form-label" for="name">Team Member Name</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-label" for="job">Team Member Job Title</label>
                                <input type="text" name="job" id="job" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-label" for="testmonial">Team Member Image</label>
                                <input type="file" name="image" id="image" class="form-control">
                            </div>
                        </div>
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary">Submit</button>
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
