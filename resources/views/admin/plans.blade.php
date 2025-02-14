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
            <div class="row gap-3">
                @if($plans->isNotEmpty())
                    @foreach($plans as $plan)
                        <div class="card col-lg-4 mb-3">
                            <div class="card-body">
                                <div class="border-bottom">
                                    <div class="d-flex justify-content-between mb-2">
                                        <h3 class="mb-0">{{$plan->name}}</h3>
                                    </div>
                                    <p class="py-2 mb-0">{{$plan->description}}</p>
                                    <div class="d-flex my-2">
                                        <h6 class="mb-0">Price For Month:</h6>
                                        <h6 class="text-primary mb-0 ms-2">{{$plan->price_1_month}}le</h6>
                                    </div>
                                </div>
                                <div class="text-start my-4">
                                    <?php
                                        $includeFeatures = json_decode($plan->features_included, true);
                                        $not_includeFeatures = json_decode($plan->features_not_included, true);
                                        ?>
                                    @foreach ($includeFeatures as $feature)
                                        <div class=""><span class="me-2">✔</span> {{$feature}}</div>
                                    @endforeach
                                    @foreach ($not_includeFeatures as $feature)
                                        <div class=""><span class="mx-2 text-danger ">✘</span> {{$feature}}</div>
                                    @endforeach
                                </div>
                                <div>
                                    <div class="d-flex justify-content-between py-4">
                                        <a href="{{route('edit_plan',$plan->id)}}" class="btn btn-warning d-flex align-items-center gap-2">
                                            Edit
                                        </a>
                                        <button onclick="showDeleteConfirmation('{{route('delete_plan',$plan->id)}}')" class="btn btn-danger ">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
        @include('layouts.footers.auth_footer')
    </main>
@endsection
@section('script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function showDeleteConfirmation(deleteRoute) {
            Swal.fire({
                title: 'Are you sure?',
                text: 'You won\'t be able to revert this!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = deleteRoute;
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    ).then(() => {
                        window.location.reload();
                    });
                }
            });
        }

    </script>
@endsection
