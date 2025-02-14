@extends('layouts.app')

@section('head')

@endsection

@section('content')
        <!--<< Breadcrumb Section Start >>-->
        <div class="breadcrumb-wrapper bg-cover" style="background-image: url('assets/img/breadcrumb-1.jpg');">
            <div class="container">
                <div class="page-heading">
                    <div class="page-header-left">
                        <h1 class="wow fadeInUp" data-wow-delay=".3s">Pricing V2</h1>
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
                                Pricing V2
                            </li>
                        </ul>
                    </div>
                    <div class="breadcrumb-image wow fadeInUp" data-wow-delay=".4s">
                        <img src="assets/img/breadcrumb.png" alt="img">
                    </div>
                </div>
            </div>
        </div>

        <!-- Choose Us Section Start -->
        <section class="choose-us-section fix section-padding">
            <div class="container">
                <div class="section-title text-center">
                    <span class="style-bg wow fadeInUp">Why Choose Us</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Why Choose hostly</h2>
                </div>
                <div class="choose-us-top-inner">
                    <ul>
                        <li class="wow fadeInUp" data-wow-delay=".2s">Step One</li>
                        <li class="wow fadeInUp" data-wow-delay=".4s">Step Two</li>
                        <li class="wow fadeInUp" data-wow-delay=".6s">Step Three</li>
                        <li class="wow fadeInUp" data-wow-delay=".8s">Step Four</li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="choose-us-card-items">
                            <div class="icon">
                                <img src="assets/img/choose/safe-icon.png" alt="img">
                            </div>
                            <div class="content">
                                <h3>Safe and Secured</h3>
                                <p>
                                    Collaboratively formulate principle capital. Progressively evolve user revolutionary hosting services.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="choose-us-card-items">
                            <div class="icon">
                                <img src="assets/img/choose/bank-icon.png" alt="img">
                            </div>
                            <div class="content">
                                <h3>Money-Back Guarantee</h3>
                                <p>
                                    Collaboratively formulate principle capital. Progressively evolve user revolutionary hosting services.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                        <div class="choose-us-card-items">
                            <div class="icon">
                                <img src="assets/img/choose/secured-icon.png" alt="img">
                            </div>
                            <div class="content">
                                <h3>Safe and Secured</h3>
                                <p>
                                    Collaboratively formulate principle capital. Progressively evolve user revolutionary hosting services.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                        <div class="choose-us-card-items">
                            <div class="icon">
                                <img src="assets/img/choose/support-icon.png" alt="img">
                            </div>
                            <div class="content">
                                <h3>Dedicated Support</h3>
                                <p>
                                    Collaboratively formulate principle capital. Progressively evolve user revolutionary hosting services.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pricing Section Start -->
        <section class="pricing-section fix section-padding section-bg">
            <div class="container">
                <div class="section-title text-center">
                    <span class="style-border wow fadeInUp">Pricing Plans</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Get the More Powerful With hostly <br> Website Hosting Plans</h2>
                </div>
                <div class="pricing-tab-header">
                    <div class="arrow-shape">
                        <img src="assets/img/arrow.png" alt="img">
                    </div>
                    <ul class="nav" role="tablist">
                        <li class="nav-item wow fadeInUp" data-wow-delay=".3s" role="presentation">
                            <a href="#monthly" data-bs-toggle="tab" class="nav-link active" aria-selected="true" role="tab">
                                Monthly
                            </a>
                        </li>
                        <li class="nav-item wow fadeInUp" data-wow-delay=".5s" role="presentation">
                            <a href="#yearly" data-bs-toggle="tab" class="nav-link" aria-selected="false" role="tab" tabindex="-1">
                                Yearly
                            </a>
                        </li>
                    </ul>
                    <div class="save-text">
                        Save 25%
                    </div>
                </div>
                <div class="tab-content">
                    <div id="monthly" class="tab-pane fade show active" role="tabpanel">
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                                <div class="pricing-card-items responsive-pricing-style">
                                    <div class="wing-shape">
                                        <img src="assets/img/wing-shape.png" alt="img">
                                    </div>
                                    <div class="icon">
                                        <img src="assets/img/pricing/icon-1.png" alt="img">
                                    </div>
                                    <div class="pricing-bg">
                                        <img src="assets/img/pricing/pricing-shape.png" alt="img">
                                    </div>
                                    <div class="pricing-header">
                                        <div class="price-content">
                                            <h3>Shared Hosting</h3>
                                            <p>Collaboratively formulate</p>
                                        </div>
                                        <h2>$29</h2>
                                    </div>
                                    <ul class="pricing-list">
                                        <li>
                                            <i class="fa-solid fa-check"></i>
                                            Branding and design Identity
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-check"></i>
                                            Web site Marketing Solutions
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-check"></i>
                                            Free 15 GB Linux Hosting
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-check"></i>
                                            Unlimited Application Installation
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-check"></i>
                                            Unlimited Download Data
                                        </li>
                                        <li class="color-2">
                                            <i class="fa-solid fa-xmark"></i>
                                            Dedicated IP Address
                                        </li>
                                    </ul>
                                    <div class="pricing-button">
                                        <a href="contact.html" class="theme-btn">
                                            get Started Now <i class="fas fa-long-arrow-alt-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                                <div class="pricing-card-items responsive-pricing-style">
                                    <div class="wing-shape">
                                        <img src="assets/img/wing-shape.png" alt="img">
                                    </div>
                                    <div class="icon">
                                        <img src="assets/img/pricing/icon-1.png" alt="img">
                                    </div>
                                    <div class="pricing-bg">
                                        <img src="assets/img/pricing/pricing-shape.png" alt="img">
                                    </div>
                                    <div class="pricing-header">
                                        <div class="price-content">
                                            <h3>VPS Hosting</h3>
                                            <p>Collaboratively formulate</p>
                                        </div>
                                        <h2>$39</h2>
                                    </div>
                                    <ul class="pricing-list">
                                        <li>
                                            <i class="fa-solid fa-check"></i>
                                            Branding and design Identity
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-check"></i>
                                            Web site Marketing Solutions
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-check"></i>
                                            Free 15 GB Linux Hosting
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-check"></i>
                                            Unlimited Application Installation
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-check"></i>
                                            Unlimited Download Data
                                        </li>
                                        <li class="color-2">
                                            <i class="fa-solid fa-xmark"></i>
                                            Dedicated IP Address
                                        </li>
                                    </ul>
                                    <div class="pricing-button">
                                        <a href="contact.html" class="theme-btn">
                                            get Started Now <i class="fas fa-long-arrow-alt-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                                <div class="pricing-card-items responsive-pricing-style">
                                    <div class="wing-shape">
                                        <img src="assets/img/wing-shape.png" alt="img">
                                    </div>
                                    <div class="icon">
                                        <img src="assets/img/pricing/icon-1.png" alt="img">
                                    </div>
                                    <div class="pricing-bg">
                                        <img src="assets/img/pricing/pricing-shape.png" alt="img">
                                    </div>
                                    <div class="pricing-header">
                                        <div class="price-content">
                                            <h3>Cloud Hosting</h3>
                                            <p>Collaboratively formulate</p>
                                        </div>
                                        <h2>$59</h2>
                                    </div>
                                    <ul class="pricing-list">
                                        <li>
                                            <i class="fa-solid fa-check"></i>
                                            Branding and design Identity
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-check"></i>
                                            Web site Marketing Solutions
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-check"></i>
                                            Free 15 GB Linux Hosting
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-check"></i>
                                            Unlimited Application Installation
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-check"></i>
                                            Unlimited Download Data
                                        </li>
                                        <li class="color-2">
                                            <i class="fa-solid fa-xmark"></i>
                                            Dedicated IP Address
                                        </li>
                                    </ul>
                                    <div class="pricing-button">
                                        <a href="contact.html" class="theme-btn">
                                            get Started Now <i class="fas fa-long-arrow-alt-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="yearly" class="tab-pane fade" role="tabpanel">
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="pricing-card-items responsive-pricing-style">
                                    <div class="wing-shape">
                                        <img src="assets/img/wing-shape.png" alt="img">
                                    </div>
                                    <div class="icon">
                                        <img src="assets/img/pricing/icon-1.png" alt="img">
                                    </div>
                                    <div class="pricing-bg">
                                        <img src="assets/img/pricing/pricing-shape.png" alt="img">
                                    </div>
                                    <div class="pricing-header">
                                        <div class="price-content">
                                            <h3>Shared Hosting</h3>
                                            <p>Collaboratively formulate</p>
                                        </div>
                                        <h2>$29</h2>
                                    </div>
                                    <ul class="pricing-list">
                                        <li>
                                            <i class="fa-solid fa-check"></i>
                                            Branding and design Identity
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-check"></i>
                                            Web site Marketing Solutions
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-check"></i>
                                            Free 15 GB Linux Hosting
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-check"></i>
                                            Unlimited Application Installation
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-check"></i>
                                            Unlimited Download Data
                                        </li>
                                        <li class="color-2">
                                            <i class="fa-solid fa-xmark"></i>
                                            Dedicated IP Address
                                        </li>
                                    </ul>
                                    <div class="pricing-button">
                                        <a href="contact.html" class="theme-btn">
                                            get Started Now <i class="fas fa-long-arrow-alt-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="pricing-card-items responsive-pricing-style">
                                    <div class="wing-shape">
                                        <img src="assets/img/wing-shape.png" alt="img">
                                    </div>
                                    <div class="icon">
                                        <img src="assets/img/pricing/icon-1.png" alt="img">
                                    </div>
                                    <div class="pricing-bg">
                                        <img src="assets/img/pricing/pricing-shape.png" alt="img">
                                    </div>
                                    <div class="pricing-header">
                                        <div class="price-content">
                                            <h3>VPS Hosting</h3>
                                            <p>Collaboratively formulate</p>
                                        </div>
                                        <h2>$39</h2>
                                    </div>
                                    <ul class="pricing-list">
                                        <li>
                                            <i class="fa-solid fa-check"></i>
                                            Branding and design Identity
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-check"></i>
                                            Web site Marketing Solutions
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-check"></i>
                                            Free 15 GB Linux Hosting
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-check"></i>
                                            Unlimited Application Installation
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-check"></i>
                                            Unlimited Download Data
                                        </li>
                                        <li class="color-2">
                                            <i class="fa-solid fa-xmark"></i>
                                            Dedicated IP Address
                                        </li>
                                    </ul>
                                    <div class="pricing-button">
                                        <a href="contact.html" class="theme-btn">
                                            get Started Now <i class="fas fa-long-arrow-alt-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="pricing-card-items responsive-pricing-style">
                                    <div class="wing-shape">
                                        <img src="assets/img/wing-shape.png" alt="img">
                                    </div>
                                    <div class="icon">
                                        <img src="assets/img/pricing/icon-1.png" alt="img">
                                    </div>
                                    <div class="pricing-bg">
                                        <img src="assets/img/pricing/pricing-shape.png" alt="img">
                                    </div>
                                    <div class="pricing-header">
                                        <div class="price-content">
                                            <h3>Cloud Hosting</h3>
                                            <p>Collaboratively formulate</p>
                                        </div>
                                        <h2>$59</h2>
                                    </div>
                                    <ul class="pricing-list">
                                        <li>
                                            <i class="fa-solid fa-check"></i>
                                            Branding and design Identity
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-check"></i>
                                            Web site Marketing Solutions
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-check"></i>
                                            Free 15 GB Linux Hosting
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-check"></i>
                                            Unlimited Application Installation
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-check"></i>
                                            Unlimited Download Data
                                        </li>
                                        <li class="color-2">
                                            <i class="fa-solid fa-xmark"></i>
                                            Dedicated IP Address
                                        </li>
                                    </ul>
                                    <div class="pricing-button">
                                        <a href="contact.html" class="theme-btn">
                                            get Started Now <i class="fas fa-long-arrow-alt-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pricing-title wow fadeInUp" data-wow-delay=".4s">
                    <p>Cost-effective hosting that delivers secure, reliable performance. </p>
                    <a href="pricing.html" class="theme-btn">See all plan & details</a>
                </div>
            </div>
        </section>

        <!-- Faq Section Start -->
        <section class="faq-section fix section-padding">
            <div class="container">
                <div class="faq-wrapper">
                    <div class="row g-4">
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="faq-image">
                                <img src="assets/img/faq.png" alt="img">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="faq-content">
                                <div class="section-title">
                                    <span class="wow fadeInUp">FAQ’S</span>
                                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                        Prioritize Your Site’s Safety and Security
                                    </h2>
                                </div>
                                <div class="faq-accordion mt-4 mt-md-0">
                                    <div class="accordion" id="accordion">
                                        <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true" aria-controls="faq1">
                                                    How to Install WordPress theme on cPanel?
                                                </button>
                                            </h5>
                                            <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    Nullam faucibus eleifend mi eu varius. Integer vel tincidunt massa, quis semper odio. Mauris et mollis quam. Nullam fringilla erat id ante commodo sodales. In maximus ultrices euismod. Vivamus porta justo ex.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item wow fadeInUp" data-wow-delay=".5s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                                                    Do you have Custom Hosting Service?
                                                </button>
                                            </h5>
                                            <div id="faq2" class="accordion-collapse show" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    Nullam faucibus eleifend mi eu varius. Integer vel tincidunt massa, quis semper odio. Mauris et mollis quam. Nullam fringilla erat id ante commodo sodales. In maximus ultrices euismod. Vivamus porta justo ex.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                                    Better Security And Faster Server?
                                                </button>
                                            </h5>
                                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    There are many variations of passages Lorem Ipsum but the majority have suffered alteration in some form, by injected humor.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                                                    Deployment Within Few Minutes
                                                </button>
                                            </h5>
                                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    Nullam faucibus eleifend mi eu varius. Integer vel tincidunt massa, quis semper odio. Mauris et mollis quam. Nullam fringilla erat id ante commodo sodales. In maximus ultrices euismod. Vivamus porta justo ex.
                                                </div>
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

@endsection
@section('script')
@endsection
