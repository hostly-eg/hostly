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
        <div class="content-inner container-fluid pb-0" id="page_layout">
            <div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Order List</h4>
                                </div>
                            </div>
                            <div class="card-body px-0">
                                <div class="table-responsive">
                                    <table id="user-list-table" class="table table-striped" role="grid" data-toggle="data-table">
                                        <thead>
                                        <tr class="ligth">
                                            <th class="text-center">Customer</th>
                                            <th class="text-center">Order Type</th>
                                            <th class="text-center">Plan</th>
                                            <th class="text-center">Start</th>
                                            <th class="text-center">End</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Type</th>
                                            <th class="text-center">TNumber</th>
                                            <th class="text-center">Total</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($orders as $order)
                                            @if($order->hosting_plan_id)
                                                <tr>
                                                    <td class="text-center">{{$order->customer->user->name}}</td>
                                                    <td class="text-center">Hosting</td>
                                                    <td class="text-center">{{$order->plan->name}} </td>
                                                    <td class="text-center">{{$order->subscription->start_date->format('d/m/Y')}}</td>
                                                    <td class="text-center">{{$order->subscription->end_date->format('d/m/Y')}}</td>
                                                    <td class="text-center">
                                                        @if($order->subscription->status == 'active')
                                                            <span class="badge bg-primary">Active</span>
                                                        @elseif($order->subscription->status == 'pending')
                                                            <span class="badge bg-warning">Pending</span>
                                                        @elseif($order->subscription->status == 'cancelled')
                                                            <span class="badge bg-danger">Cancelled</span>
                                                        @elseif($order->subscription->status == 'ended')
                                                            <span class="badge bg-dark">Ended</span>
                                                        @endif
                                                    </td>
                                                    <td class="text-center">
                                                        @if($order->type == 'new')
                                                            <span class="badge bg-primary">New</span>
                                                        @elseif($order->type == 're_new')
                                                            <span class="badge bg-info">ReNew</span>
                                                        @endif
                                                    </td>
                                                    <td class="text-center">{{$order->transaction_number}}</td>
                                                    <td class="text-center">{{$order->total}}</td>
                                                </tr>
                                            @elseif($order->domain_plan_id)
                                                <tr>
                                                    <td class="text-center">{{$order->customer->user->name}}</td>
                                                    <td class="text-center"> Domain</td>
                                                    <td class="text-center">{{$order->domain_plan->extension}}</td>
                                                    <td class="text-center">{{$order->domain_subscription->start_date->format('d/m/Y')}}</td>
                                                    <td class="text-center">{{$order->domain_subscription->end_date->format('d/m/Y')}}</td>
                                                    <td class="text-center">
                                                        @if($order->domain_subscription->status == 'active')
                                                            <span class="badge bg-primary">Active</span>
                                                        @elseif($order->domain_subscription->status == 'pending')
                                                            <span class="badge bg-warning">Pending</span>
                                                        @elseif($order->domain_subscription->status == 'cancelled')
                                                            <span class="badge bg-danger">Cancelled</span>
                                                        @elseif($order->domain_subscription->status == 'ended')
                                                            <span class="badge bg-dark">Ended</span>
                                                        @endif
                                                    </td>
                                                    <td class="text-center">
                                                        @if($order->type == 'new')
                                                            <span class="badge bg-primary">New</span>
                                                        @elseif($order->type == 're_new')
                                                            <span class="badge bg-info">ReNew</span>
                                                        @endif
                                                    </td>
                                                    <td class="text-center">{{$order->transaction_number}}</td>
                                                    <td class="text-center">{{$order->total}}</td>
                                                </tr>
                                            @elseif($order->vps_plan_id)
                                                <tr>
                                                    <td class="text-center">{{$order->customer->user->name}}</td>
                                                    <td class="text-center">  Vps  </td>
                                                    <td class="text-center">{{$order->vps_plan->name}} </td>
                                                    <td class="text-center">{{$order->vps_subscription->start_date->format('d/m/Y')}}</td>
                                                    <td class="text-center">{{$order->vps_subscription->end_date->format('d/m/Y')}}</td>
                                                    <td class="text-center">
                                                        @if($order->vps_subscription->status == 'active')
                                                            <span class="badge bg-primary">Active</span>
                                                        @elseif($order->vps_subscription->status == 'pending')
                                                            <span class="badge bg-warning">Pending</span>
                                                        @elseif($order->vps_subscription->status == 'cancelled')
                                                            <span class="badge bg-danger">Cancelled</span>
                                                        @elseif($order->vps_subscription->status == 'ended')
                                                            <span class="badge bg-dark">Ended</span>
                                                        @endif
                                                    </td>
                                                    <td class="text-center">
                                                        @if($order->type == 'new')
                                                            <span class="badge bg-primary">New</span>
                                                        @elseif($order->type == 're_new')
                                                            <span class="badge bg-info">ReNew</span>
                                                        @endif
                                                    </td>
                                                    <td class="text-center">{{$order->transaction_number}}</td>
                                                    <td class="text-center">{{$order->total}}</td>
                                                </tr>
                                            @endif
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
