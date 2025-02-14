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
                                    <h1>Admin</h1>
                                    <p>Welcom to dashboard for your website to control every thing.</p>
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
        <div class="content-inner container-fluid pb-0" id="page_layout">
            <div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">User List</h4>
                                </div>
                            </div>
                            <div class="card-body px-0">
                                <div class="table-responsive">
                                    <table id="user-list-table" class="table table-striped" role="grid" data-toggle="data-table">
                                        <thead>
                                        <tr class="ligth">
                                            <th class="text-center">Name</th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center">Phone</th>
                                            <th class="text-center">Address</th>
                                            <th class="text-center">Total Orders</th>
                                            <th class="text-center">Join Date</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($customers as $customer)
                                            <tr>
                                                <td class="text-center">{{ $customer->user->name }}</td>
                                                <td class="text-center">{{ $customer->user->email }}</td>
                                                <td class="text-center">{{ $customer->phone }}</td>
                                                <td class="text-center">{{ $customer->address }}</td>
                                                <td class="text-center">{{ $customer->orders->count() }}</td>
                                                <td class="text-center">{{ $customer->created_at->format('d/m/Y') }}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth_footer')
    </main>
@endsection
@section('script')

@endsection
