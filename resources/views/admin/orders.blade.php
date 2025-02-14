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
        <div class="container-fluid content-inner pb-0" id="page_layout">
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
            <div class="row">
                @foreach($orders as $order)
                    <div class="col-lg-12 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex justify-content-between mb-3">
                                            <h4 class="mb-0">{{$order->customer->user->name}}  #ID:{{$order->customer->id}}</h4>
                                            <div>
                                                @if($order->type == 'new')
                                                    <span class="badge rounded-pill bg-primary">New</span>
                                                @else
                                                    <span class="badge rounded-pill bg-info">ReNew</span>
                                                @endif
                                            </div>
                                        </div>
                                        <h5 class="mb-4">Order
                                            @if($order->hosting_plan_id)
                                                Hosting
                                            @elseif($order->domain_plan_id)
                                                Domain
                                            @elseif($order->vps_plan_id)
                                                Vps
                                            @endif
                                        </h5>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6 col-sm-6 mt-3 mt-sm-0">
                                                <div>
                                                    <h6>Info Bill:</h6>
                                                    <p>{{$order->name}}</p>
                                                    <p class="mb-1">{{$order->email}}</p>
                                                    <p class="mb-1">{{$order->phone}}</p>
                                                    <p class="mb-1">
                                                        @if($order->hosting_plan_id)
                                                           domain: {{$order->subscription->domain_name}}
                                                        @endif
                                                    </p>
                                                </div>
                                                <div class="d-flex pt-5 gap-4 flex-wrap">
                                                    <button onclick="
                                                        @if($order->hosting_plan_id)
                                                            showDeleteConfirmation('{{route('cancel_order',[$order->subscription->id,1])}}')
                                                        @elseif($order->domain_plan_id)
                                                            showDeleteConfirmation('{{route('cancel_order',[$order->domain_subscription->id,2])}}')
                                                        @elseif($order->vps_plan_id)
                                                            showDeleteConfirmation('{{route('cancel_order',[$order->vps_subscription->id,3])}}')
                                                        @endif
                                                    " class="btn btn-warning d-flex align-items-center gap-2">
                                                    <span class="btn-inner d-flex ">
                                                        <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.4" d="M16.6203 22H7.3797C4.68923 22 2.5 19.8311 2.5 17.1646V11.8354C2.5 9.16894 4.68923 7 7.3797 7H16.6203C19.3108 7 21.5 9.16894 21.5 11.8354V17.1646C21.5 19.8311 19.3108 22 16.6203 22Z" fill="currentColor"></path>
                                                            <path d="M15.7551 10C15.344 10 15.0103 9.67634 15.0103 9.27754V6.35689C15.0103 4.75111 13.6635 3.44491 12.0089 3.44491C11.2472 3.44491 10.4477 3.7416 9.87861 4.28778C9.30854 4.83588 8.99272 5.56508 8.98974 6.34341V9.27754C8.98974 9.67634 8.65604 10 8.24487 10C7.8337 10 7.5 9.67634 7.5 9.27754V6.35689C7.50497 5.17303 7.97771 4.08067 8.82984 3.26285C9.68098 2.44311 10.7814 2.03179 12.0119 2C14.4849 2 16.5 3.95449 16.5 6.35689V9.27754C16.5 9.67634 16.1663 10 15.7551 10Z" fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                        Cancel
                                                    </button>
                                                    @if($order->hosting_plan_id)
                                                        <button class="btn btn-primary d-flex align-items-center cart-btn active-button gap-2" type="button" data-toggle="modal" data-target="#activeModal" data-link="{{$order->subscription->cPanel_link}}" data-id="{{$order->subscription->id}}" data-type="{{$order->type}}" data-user_host="{{$order->subscription->user_host}}" data-password_host="{{$order->subscription->password_host}}">
                                                            <span class="btn-inner d-flex">
                                                                <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd" d="M5.91064 20.5886C5.91064 19.7486 6.59064 19.0686 7.43064 19.0686C8.26064 19.0686 8.94064 19.7486 8.94064 20.5886C8.94064 21.4186 8.26064 22.0986 7.43064 22.0986C6.59064 22.0986 5.91064 21.4186 5.91064 20.5886ZM17.1606 20.5886C17.1606 19.7486 17.8406 19.0686 18.6806 19.0686C19.5106 19.0686 20.1906 19.7486 20.1906 20.5886C20.1906 21.4186 19.5106 22.0986 18.6806 22.0986C17.8406 22.0986 17.1606 21.4186 17.1606 20.5886Z" fill="currentColor"></path>
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M20.1907 6.34909C20.8007 6.34909 21.2007 6.55909 21.6007 7.01909C22.0007 7.47909 22.0707 8.13909 21.9807 8.73809L21.0307 15.2981C20.8507 16.5591 19.7707 17.4881 18.5007 17.4881H7.59074C6.26074 17.4881 5.16074 16.4681 5.05074 15.1491L4.13074 4.24809L2.62074 3.98809C2.22074 3.91809 1.94074 3.52809 2.01074 3.12809C2.08074 2.71809 2.47074 2.44809 2.88074 2.50809L5.26574 2.86809C5.60574 2.92909 5.85574 3.20809 5.88574 3.54809L6.07574 5.78809C6.10574 6.10909 6.36574 6.34909 6.68574 6.34909H20.1907ZM14.1307 11.5481H16.9007C17.3207 11.5481 17.6507 11.2081 17.6507 10.7981C17.6507 10.3781 17.3207 10.0481 16.9007 10.0481H14.1307C13.7107 10.0481 13.3807 10.3781 13.3807 10.7981C13.3807 11.2081 13.7107 11.5481 14.1307 11.5481Z" fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                            Active Now
                                                        </button>
                                                    @elseif($order->domain_plan_id)
                                                        <button class="btn btn-primary d-flex align-items-center cart-btn active-domain-button gap-2" type="button" data-toggle="modal" data-target="#activeDModal" data-id="{{$order->domain_subscription->id}}" data-type="{{$order->type}}" data-dns1="{{$order->domain_subscription->dns1}}" data-dns2="{{$order->domain_subscription->dns2}}" data-dns3="{{$order->domain_subscription->dns3}}" data-dns4="{{$order->domain_subscription->dns4}}">
                                                            <span class="btn-inner d-flex">
                                                                <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd" d="M5.91064 20.5886C5.91064 19.7486 6.59064 19.0686 7.43064 19.0686C8.26064 19.0686 8.94064 19.7486 8.94064 20.5886C8.94064 21.4186 8.26064 22.0986 7.43064 22.0986C6.59064 22.0986 5.91064 21.4186 5.91064 20.5886ZM17.1606 20.5886C17.1606 19.7486 17.8406 19.0686 18.6806 19.0686C19.5106 19.0686 20.1906 19.7486 20.1906 20.5886C20.1906 21.4186 19.5106 22.0986 18.6806 22.0986C17.8406 22.0986 17.1606 21.4186 17.1606 20.5886Z" fill="currentColor"></path>
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M20.1907 6.34909C20.8007 6.34909 21.2007 6.55909 21.6007 7.01909C22.0007 7.47909 22.0707 8.13909 21.9807 8.73809L21.0307 15.2981C20.8507 16.5591 19.7707 17.4881 18.5007 17.4881H7.59074C6.26074 17.4881 5.16074 16.4681 5.05074 15.1491L4.13074 4.24809L2.62074 3.98809C2.22074 3.91809 1.94074 3.52809 2.01074 3.12809C2.08074 2.71809 2.47074 2.44809 2.88074 2.50809L5.26574 2.86809C5.60574 2.92909 5.85574 3.20809 5.88574 3.54809L6.07574 5.78809C6.10574 6.10909 6.36574 6.34909 6.68574 6.34909H20.1907ZM14.1307 11.5481H16.9007C17.3207 11.5481 17.6507 11.2081 17.6507 10.7981C17.6507 10.3781 17.3207 10.0481 16.9007 10.0481H14.1307C13.7107 10.0481 13.3807 10.3781 13.3807 10.7981C13.3807 11.2081 13.7107 11.5481 14.1307 11.5481Z" fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                            Active Now
                                                        </button>
                                                    @elseif($order->vps_plan_id)
                                                        <button class="btn btn-primary d-flex align-items-center cart-btn active-vps-button gap-2" type="button" data-toggle="modal" data-target="#activeVModal" data-ip="{{$order->vps_subscription->ip}}" data-id="{{$order->vps_subscription->id}}" data-type="{{$order->type}}" data-user="{{$order->vps_subscription->user}}" data-password="{{$order->vps_subscription->password}}">
                                                            <span class="btn-inner d-flex">
                                                                <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd" d="M5.91064 20.5886C5.91064 19.7486 6.59064 19.0686 7.43064 19.0686C8.26064 19.0686 8.94064 19.7486 8.94064 20.5886C8.94064 21.4186 8.26064 22.0986 7.43064 22.0986C6.59064 22.0986 5.91064 21.4186 5.91064 20.5886ZM17.1606 20.5886C17.1606 19.7486 17.8406 19.0686 18.6806 19.0686C19.5106 19.0686 20.1906 19.7486 20.1906 20.5886C20.1906 21.4186 19.5106 22.0986 18.6806 22.0986C17.8406 22.0986 17.1606 21.4186 17.1606 20.5886Z" fill="currentColor"></path>
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M20.1907 6.34909C20.8007 6.34909 21.2007 6.55909 21.6007 7.01909C22.0007 7.47909 22.0707 8.13909 21.9807 8.73809L21.0307 15.2981C20.8507 16.5591 19.7707 17.4881 18.5007 17.4881H7.59074C6.26074 17.4881 5.16074 16.4681 5.05074 15.1491L4.13074 4.24809L2.62074 3.98809C2.22074 3.91809 1.94074 3.52809 2.01074 3.12809C2.08074 2.71809 2.47074 2.44809 2.88074 2.50809L5.26574 2.86809C5.60574 2.92909 5.85574 3.20809 5.88574 3.54809L6.07574 5.78809C6.10574 6.10909 6.36574 6.34909 6.68574 6.34909H20.1907ZM14.1307 11.5481H16.9007C17.3207 11.5481 17.6507 11.2081 17.6507 10.7981C17.6507 10.3781 17.3207 10.0481 16.9007 10.0481H14.1307C13.7107 10.0481 13.3807 10.3781 13.3807 10.7981C13.3807 11.2081 13.7107 11.5481 14.1307 11.5481Z" fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                            Active Now
                                                        </button>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 mt-3 mt-sm-0">
                                                <div class="mb-3">
                                                    <h6 class="mb-0">Order Date</h6>
                                                    <p>{{$order->created_at->format('d/m/Y')}}</p>
                                                    </p>
                                                </div>
                                                <div class="mb-3">
                                                    <h6 class="mb-0">Total</h6>
                                                    <p>{{$order->total}}le
                                                    </p>
                                                </div>
                                                <div class="mb-3">
                                                    <h6 class="mb-0">Plan Order</h6>
                                                    <p>
                                                        @if($order->hosting_plan_id)
                                                            {{$order->plan->name}}
                                                        @elseif($order->domain_plan_id)
                                                            {{$order->product}}
                                                        @elseif($order->vps_plan_id)
                                                            {{$order->vps_plan->name}}
                                                        @endif
                                                    </p>
                                                </div>
                                                <div class="mb-3">
                                                    <h6 class="mb-0">Duration</h6>
                                                    <p>{{$order->num_months}} months
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-md-6 col-sm-6 mt-3 mt-lg-0 text-center">
                                                <div class="">
                                                    <h6 class="mb-0">Transaction Number</h6>
                                                    <p class="mb-0">{{$order->transaction_number}}</p>
                                                    <img src="{{asset('storage/images/transaction/'.$order->image_path)}}" style="width: 300px;height: 200px">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                @if($orders->isEmpty())
                    <div class="mt-60 p-5 text-center">
                        No orders pending found
                    </div>
                @endif
            </div>
        </div>
    @include('layouts.footers.auth_footer')
    </main>

    <div class="modal fade" id="activeModal" tabindex="-1" role="dialog" aria-labelledby="activeModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="activeModalLabel">Active Hosting Subscription</h5>
                    <span class="badge"></span>
                </div>
                <div class="modal-body">
                    <form class="row" action="{{route('active_order',0)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group col-md-6 col-12">
                            <label class="form-label" for="user_host">User Name Host</label>
                            <input type="text" class="form-control" id="user_host" name="user_host" required>
                            @error('user_host')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6 col-12">
                            <label class="form-label" for="password_host">Password Host</label>
                            <input type="text" class="form-control" id="password_host" name="password_host" required>
                            @error('password_host')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6 col-12">
                            <label class="form-label" for="cPanel_link">CPanel Link</label>
                            <input type="text" class="form-control " id="cPanel_link" name="link" required>
                            @error('cPanel_link')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary mx-2">Submit</button>
                            <button type="button" class="btn btn-secondary mx-2" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="activeDModal" tabindex="-1" role="dialog" aria-labelledby="activeDModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="activeDModalLabel">Active Domain Subscription</h5>
                    <span class="badge"></span>
                </div>
                <div class="modal-body">
                    <form class="row" action="#" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group col-12">
                            <label class="form-label" for="dns1">Dns1</label>
                            <input type="text" class="form-control" id="dns1" name="dns1" required>
                            @error('dns1')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-12">
                            <label class="form-label" for="dns2">Dns2</label>
                            <input type="text" class="form-control" id="dns2" name="dns2" required>
                            @error('dns2')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-12">
                            <label class="form-label" for="dns3">Dns3</label>
                            <input type="text" class="form-control" id="dns3" name="dns3" required>
                            @error('dns3')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-12">
                            <label class="form-label" for="dns4">Dns4</label>
                            <input type="text" class="form-control" id="dns4" name="dns4" required>
                            @error('dns4')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary mx-2">Submit</button>
                            <button type="button" class="btn btn-secondary mx-2" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="activeVModal" tabindex="-1" role="dialog" aria-labelledby="activeVModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="activeVModalLabel">Active Vps Subscription</h5>
                    <span class="badge"></span>
                </div>
                <div class="modal-body">
                    <form class="row" action="#" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group col-md-6 col-12">
                            <label class="form-label" for="user">User</label>
                            <input type="text" class="form-control" id="user" name="user" required>
                            @error('user')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6 col-12">
                            <label class="form-label" for="password">Password</label>
                            <input type="text" class="form-control" id="password" name="password" required>
                            @error('password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-12">
                            <label class="form-label" for="ip">IP</label>
                            <input type="text" class="form-control " id="ip" name="ip" required>
                            @error('ip')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary mx-2">Submit</button>
                            <button type="button" class="btn btn-secondary mx-2" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function showDeleteConfirmation(deleteRoute) {
            Swal.fire({
                title: 'Are you sure?',
                text: 'You won\'t be able to cancel this!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, cancel it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = deleteRoute;
                    Swal.fire(
                        'Cancel!',
                        'Your file has been canceled.',
                        'success'
                    ).then(() => {
                        window.location.reload();
                    });
                }
            });
        }

        $(document).ready(function() {
            $('.active-button').on('click', function() {
                var link = $(this).data('link');
                var user_host = $(this).data('user_host');
                var password_host = $(this).data('password_host');
                var type = $(this).data('type');
                var id = $(this).data('id');

                $('#activeModal input[name="user_host"]').val(user_host);
                $('#activeModal input[name="password_host"]').val(password_host);
                $('#activeModal input[name="link"]').val(link);
                if (type === 'new') {
                    $('#activeModal span.badge').removeClass().addClass('badge rounded-pill bg-primary').text('NEW SUBSCRIPTION');
                } else if (type === 're_new'){
                    $('#activeModal span.badge').removeClass().addClass('badge rounded-pill bg-info').text('RENEW SUBSCRIPTION');
                }
                var action = "{{ route('active_order', ':id') }}".replace(':id', id);
                $('#activeModal form').attr('action', action);
            });
        });

        $(document).ready(function() {
            $('.active-domain-button').on('click', function() {
                var dns1 = $(this).data('dns1');
                var dns2 = $(this).data('dns2');
                var dns3 = $(this).data('dns3');
                var dns4 = $(this).data('dns4');
                var type = $(this).data('type');
                var id = $(this).data('id');

                $('#activeDModal input[name="dns1"]').val(dns1);
                $('#activeDModal input[name="dns2"]').val(dns2);
                $('#activeDModal input[name="dns3"]').val(dns3);
                $('#activeDModal input[name="dns4"]').val(dns4);
                if (type === 'new') {
                    $('#activeDModal span.badge').removeClass().addClass('badge rounded-pill bg-primary').text('NEW SUBSCRIPTION');
                } else if (type === 're_new'){
                    $('#activeDModal span.badge').removeClass().addClass('badge rounded-pill bg-info').text('RENEW SUBSCRIPTION');
                }
                var action = "{{ route('active_domain_order', ':id') }}".replace(':id', id);
                $('#activeDModal form').attr('action', action);
            });
        });

        $(document).ready(function() {
            $('.active-vps-button').on('click', function() {
                var ip = $(this).data('ip');
                var user = $(this).data('user');
                var password = $(this).data('password');
                var type = $(this).data('type');
                var id = $(this).data('id');

                $('#activeVModal input[name="user"]').val(user);
                $('#activeVModal input[name="password"]').val(password);
                $('#activeVModal input[name="ip"]').val(ip);
                if (type === 'new') {
                    $('#activeVModal span.badge').removeClass().addClass('badge rounded-pill bg-primary').text('NEW SUBSCRIPTION');
                } else if (type === 're_new'){
                    $('#activeVModal span.badge').removeClass().addClass('badge rounded-pill bg-info').text('RENEW SUBSCRIPTION');
                }
                var action = "{{ route('active_vps_order', ':id') }}".replace(':id', id);
                $('#activeVModal form').attr('action', action);
            });
        });
    </script>
@endsection
