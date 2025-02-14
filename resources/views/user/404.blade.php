@extends('layouts.app')

@section('head')

@endsection

@section('content')
    <!--<< Breadcrumb Section Start >>-->
    <div class="breadcrumb-wrapper bg-cover" style="background-image: url('assets/img/breadcrumb-1.jpg');">
        <div class="container">
            <div class="page-heading">
                <div class="page-header-left">
                    <h1 class="wow fadeInUp" data-wow-delay=".3s">Pages not found</h1>
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                        <li>
                            <a href="index.html">
                                Home
                            </a>
                        </li>
                        <li>
                            <i class="fa-regular fa-chevrons-right"></i>
                        </li>
                        <li>
                           404
                        </li>
                    </ul>
                </div>
                <div class="breadcrumb-image wow fadeInUp" data-wow-delay=".4s">
                    <img src="assets/img/breadcrumb.png" alt="img">
                </div>
            </div>
        </div>
    </div>

    <!-- Eror Section Start -->
    <section class="Error-section section-padding fix">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="error-items">
                        <div class="error-image wow fadeInUp" data-wow-delay=".3s">
                            <img src="assets/img/404.png" alt="img">
                        </div>
                        <h2 class="wow fadeInUp" data-wow-delay=".5s">
                            <span>Oops!</span> Page not found
                        </h2>
                        <p class="mb-3 wow fadeInUp" data-wow-delay=".6s">The page you are looking for does not exist</p>
                        <a href="index.html" class="theme-btn wow fadeInUp" data-wow-delay=".7s">
                            Back to home pages
                            <i class="fa-solid fa-arrow-right-long"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
@endsection
