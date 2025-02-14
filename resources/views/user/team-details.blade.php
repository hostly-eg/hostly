@extends('layouts.app')

@section('head')

@endsection

@section('content')

        <!--<< Breadcrumb Section Start >>-->
        <div class="breadcrumb-wrapper bg-cover" style="background-image: url('assets/img/breadcrumb-1.jpg');">
            <div class="container">
                <div class="page-heading">
                    <div class="page-header-left">
                        <h1 class="wow fadeInUp" data-wow-delay=".3s">Team Details</h1>
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
                                Team Details
                            </li>
                        </ul>
                    </div>
                    <div class="breadcrumb-image wow fadeInUp" data-wow-delay=".4s">
                        <img src="assets/img/breadcrumb.png" alt="img">
                    </div>
                </div>
            </div>
        </div>

        <!--<< Team Details Section Start >>-->
        <section class="team-details-section fix section-padding">
        <div class="container">
            <div class="team-details-wrapper">
                <div class="team-author-items ">
                    <div class="thumb">
                        <img src="assets/img/team/details.jpg" alt="img">
                    </div>
                    <div class="content">
                        <h2>Savannah Nguyen</h2>
                        <span>Children Diet</span>
                        <p>
                            Adipiscing elit. Mauris viverra nisl quis mollis laoreet. Ut eget lacus a felis accumsan pharetra in dignissim enim. In amet odio  mollis urna aliquet volutpat. Sed bibendum nisl vehicula imperdiet imperdiet, augue massa fringilla.
                        </p>
                        <ul>
                            <li>
                                <b>Experience:</b> 10 Years
                            </li>
                            <li>
                                <b>Position:</b>
                                Web Developer
                            </li>
                            <li>
                                <b>Phone:</b>
                                +208-555-0112
                            </li>
                        </ul>
                        <div class="social-icon d-flex align-items-center">
                            <span>Social Media</span>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="details-info-items">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6">
                            <div class="info-content">
                                <h2>Professional Info</h2>
                                <p class="mb-3">
                                    Consectetur adipisicing elit, sed do eiusmod tempor is incididunt ut labore et dolore of magna aliqua. Ut enim ad minim veniam, made of owl the quis nostrud exercitation ullamco laboris nisi ut aliquip
                                </p>
                                <p>
                                    The is ipsum dolor sit amet consectetur adipiscing elit. Fusce eleifend porta arcu In hac augu ehabitasse the is platea augue thelorem turpoi dictumst. In lacus libero faucibus
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="progress-area">
                                <div class="progress-wrap">
                                    <div class="pro-items">
                                        <div class="pro-head">
                                            <h6 class="title">
                                                Web Design
                                            </h6>
                                            <span class="point">
                                                90%
                                            </span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-value"></div>
                                        </div>
                                    </div>
                                    <div class="pro-items">
                                        <div class="pro-head">
                                            <h6 class="title">
                                                Plugin Development
                                            </h6>
                                            <span class="point">
                                                70%
                                            </span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-value style-two"></div>
                                        </div>
                                    </div>
                                    <div class="pro-items">
                                        <div class="pro-head">
                                            <h6 class="title">
                                                Customize
                                            </h6>
                                            <span class="point">
                                                55%
                                            </span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-value style-three"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>

        <!-- Team Section Start -->
        <section class="team-section-details fix section-padding pt-0">
            <div class="container">
                <div class="section-title-area">
                    <div class="section-title mb-0">
                        <span>Our Expert</span>
                        <h2>Other team Member</h2>
                    </div>
                    <div class="arry-button">
                        <button class="array-prev"><i class="fa-solid fa-chevron-left"></i></button>
                        <button class="array-next"><i class="fa-solid fa-chevron-right"></i></button>
                    </div>
                </div>
                <div class="swiper team-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="team-card-item">
                                <div class="team-image">
                                    <img src="assets/img/team/05.jpg" alt="img">
                                </div>
                                <div class="team-content bg-cover" style="background-image: url('assets/img/team/team-shape.png');">
                                   <h5><a href="team-details.html">Esther Howard</a></h5>
                                   <p>Legal adviser</p>
                                    <div class="social-profile">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                        </ul>
                                        <span class="plus-btn"><i class="fa-light fa-share-nodes"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-card-item">
                                <div class="team-image">
                                    <img src="assets/img/team/06.jpg" alt="img">
                                </div>
                                <div class="team-content bg-cover" style="background-image: url('assets/img/team/team-shape.png');">
                                   <h5><a href="team-details.html">Wade Warren</a></h5>
                                   <p>Nursing Assistant</p>
                                    <div class="social-profile">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                        </ul>
                                        <span class="plus-btn"><i class="fa-light fa-share-nodes"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-card-item">
                                <div class="team-image">
                                    <img src="assets/img/team/07.jpg" alt="img">
                                </div>
                                <div class="team-content bg-cover" style="background-image: url('assets/img/team/team-shape.png');">
                                   <h5><a href="team-details.html">Bessie Cooper</a></h5>
                                   <p>UI/UX Designer</p>
                                    <div class="social-profile">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                        </ul>
                                        <span class="plus-btn"><i class="fa-light fa-share-nodes"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-card-item">
                                <div class="team-image">
                                    <img src="assets/img/team/08.jpg" alt="img">
                                </div>
                                <div class="team-content bg-cover" style="background-image: url('assets/img/team/team-shape.png');">
                                   <h5><a href="team-details.html">Kathryn Murphy</a></h5>
                                   <p>Physiotherapist</p>
                                    <div class="social-profile">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                        </ul>
                                        <span class="plus-btn"><i class="fa-light fa-share-nodes"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
@section('script')
@endsection
