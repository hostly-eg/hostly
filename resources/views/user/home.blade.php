@extends('layouts.app')

@section('head')
@endsection

@section('content')
    <!-- Hero Section Start -->
    <section class="hero-section hero-1 style-hero-2 bg-cover fix"
        style="background-image: url('assets/img/hero/hero-bg-2.jpg');">
        <div class="dot-right">
            <img src="assets/img/hero/hero-2-dot-right.png" alt="img">
        </div>
        <div class="hero-social">
            <span>Follow on</span>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
            <a href="#"><i class="fa-brands fa-youtube"></i></a>
        </div>
        <div class="container">
            <div class="row g-4 justify-content-between">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <h1 class="wow fadeInUp" data-wow-delay=".3s">
                            Your Perfect Domain Hosting <span>Solution</span>
                        </h1>
                        <div class="hero-list-items">
                            <ul class="hero-list">
                                <li>
                                    <i class="fa-solid fa-check"></i>
                                    Lifetime Free Wildcard SLL certificate
                                </li>
                                <li>
                                    <i class="fa-solid fa-check"></i>
                                    24/7 Chat, call & Ticket Support
                                </li>
                            </ul>
                            <ul class="hero-list">
                                <li>
                                    <i class="fa-solid fa-check"></i>
                                    Free Domain 2 Years Billing
                                </li>
                                <li>
                                    <i class="fa-solid fa-check"></i>
                                    30-day money back guarantee
                                </li>
                            </ul>
                        </div>
                        <div class="hero-author">
                          
                            <a href="{{ route("support") }}" class="theme-btn border-white wow fadeInUp" data-wow-delay=".7s">
                                Start Free Consaltaion <i class="fas fa-long-arrow-alt-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 wow fadeInUp" data-wow-delay=".4s">
                    <div class="hero-image">
                        <img src="assets/img/hero/hero-hosting.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Doming Name Section Start -->
    <section class="doming-name-area section-padding pt-0">
        <div class="container">
            <div class="doming-name-wrapper style-2">
                <h3 class="text-white wow fadeInUp" data-wow-delay=".3s">Find Your Perfect Domain Name</h3>
                <form action="{{ route('check_domain') }}" method="POST" class="doming-input-form wow fadeInUp"
                    data-wow-delay=".5s">
                    @csrf
                    <div class="doming-input">
                        <input type="text" placeholder="domain.com" name="domain">
                        <button class="theme-btn bg-color-2"    type="submit">Search Now</button>
                    </div>
                </form>
                <ul class="doming-list">
                    <li class="wow fadeInUp" data-wow-delay=".2s">
                        <span>.com</span>
                        $9.95
                    </li>
                    <li class="wow fadeInUp" data-wow-delay=".4s">
                        <span>.Info</span>
                        $11.99
                    </li>
                    <li class="wow fadeInUp" data-wow-delay=".6s">
                        <span>.Net</span>
                        $8.95
                    </li>
                    <li class="wow fadeInUp" data-wow-delay=".8s">
                        <span>.Store</span>
                        $10.50
                    </li>
                    <li class="wow fadeInUp" data-wow-delay=".9s">
                        <span>.ORG</span>
                        $11.95
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Brand Section Start -->
    <div class="brand-section pt-0">
        <div class="container">
            <div class="swiper brand-slider bor-bottom pb-100 pt-0">
                <div class="swiper-wrapper">
                    @foreach ($partners as $partner)
                        <div class="swiper-slide">
                            <div class="brand-img center">
                                <img src="{{ asset(route('partner_image', str_replace('partners/', '', $partner->image))) }}"
                                    alt="{{ $partner->name }}">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Hosting Section Start -->
    <section class="hosting-section fix section-padding">
        <div class="container">
            <div class="section-title-area">
                <div class="section-title">
                    <span class="style-bg wow fadeInUp">Premium Feature</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Discover all Our Web <br> Hosting Services</h2>
                </div>
                <a href="{{route('pricing')}}" class="theme-btn wow fadeInUp" data-wow-delay=".5s">see all Feature <i
                        class="fas fa-long-arrow-alt-right"></i></a>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp"  data-wow-delay=".2s">
                    <div class="hosting-box-items" style="height:350px">
                        <div class="icon">
                            <img src="assets/img/hosting/icon-4.png" alt="img">
                        </div>
                        <div class="content">
                            <h3><a href="{{ route("coming_soon") }}">Cloud Hosting</a></h3>
                            <p>
                            If you are looking to take your business site to new heights , cloud hosting is the right choice 
It offers greater stability , faster performance and better security
                            </p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp"  data-wow-delay=".4s">
                    <div class="hosting-box-items" style="height:350px">
                        <div class="icon">
                            <img src="assets/img/hosting/icon-5.png" alt="img">
                        </div>
                        <div class="content">
                            <h3><a href="{{ route("coming_soon") }}">Reseller Hosting</a></h3>
                            <p>Allows  you to  provide  web  hosting  services  without the  infrastructure  and  management  overhead  .</p>
                        
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp"  data-wow-delay=".6s">
                    <div class="hosting-box-items" style="height:350px">
                        <div class="icon">
                            <img src="assets/img/hosting/icon-7.png" alt="img">
                        </div>
                        <div class="content">
                            <h3><a href="{{ route("share_hosting") }}">Web Hosting</a></h3>
                            <p>Perfect for blogs, small business websites, and portfolio sites 
It's budget-friendly, easy setup, high uptime, and 24/7 support .</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp"  data-wow-delay=".8s">
                    <div class="hosting-box-items" style="height:350px">
                        <div class="icon">
                            <img src="assets/img/hosting/icon-8.png" alt="img">
                        </div>
                        <div class="content">
                            <h3><a href="domain.html">Domain Name</a></h3>
                            <p>We used to establish a unique identity using domain name , secure the perfect domain for your brand with our domain registration services</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section Start -->
    <section class="pricing-section fix section-padding bg-cover"
        style="background-image: url('assets/img/pricing-bg.jpg');">
        <div class="container">
            <div class="section-title text-center">
                <span class="style-bg-2 text-white wow fadeInUp">Pricing Plans</span>
                <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">Choose Awesome Plan for <br> your Needs</h2>
            </div>
            <div class="pricing-tab-header style-2">
                <ul class="nav" role="tablist">
                    <li class="nav-item wow fadeInUp" data-wow-delay=".3s" role="presentation">
                        <a href="#domain" data-bs-toggle="tab" class="nav-link active" aria-selected="true"
                            role="tab">
                            Domain & Hosting
                        </a>
                    </li>
                    <li class="nav-item wow fadeInUp" data-wow-delay=".5s" role="presentation">
                        <a href="#dedicated" data-bs-toggle="tab" class="nav-link" aria-selected="false" role="tab"
                            tabindex="-1">
                            vps Server
                        </a>
                    </li>
                </ul>
            </div>
            <div class="tab-content">
                <div id="domain" class="tab-pane fade show active" role="tabpanel">
                    <div class="row">
                        @foreach ($plans as $plan)
                            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                                <div class="pricing-items">
                                    <div class="tag">
                                        <h6>{{ $plan->name }}</h6>
                                    </div>
                                    <div class="pricing-header">
                                        <div class="icon">
                                            <img src="assets/img/pricing/icon-2.png" alt="img">
                                        </div>
                                        <h2>
                                            @if (fmod($plan->price_1_month, 1) == 0)
                                                {{ number_format($plan->price_1_month, 0) }} LE
                                            @else
                                                {{ number_format($plan->price_1_month, 2) }} LE
                                            @endif
                                        </h2>
                                        <span class="month">Par month</span>
                                        <del class="price-text">25le</del>
                                        <p>
                                            {{ $plan->description }}
                                        </p>
                                    </div>
                                    <?php
                                    $includeFeatures = json_decode($plan->features_included, true);
                                    $not_includeFeatures = json_decode($plan->features_not_included, true);
                                    ?>
                                    <ul class="pricing-list">
                                        @foreach ($includeFeatures as $feature)
                                            <li>
                                                <span><i class="fa-solid fa-check"></i>{{ $feature }}</span>
                                                <i class="fa-light fa-circle-question"></i>
                                            </li>
                                        @endforeach
                                        @foreach ($not_includeFeatures as $feature)
                                            <li class="color-2">
                                                <span><i class="fa-solid fa-xmark"></i>{{ $feature }}</span>
                                                <i class="fa-light fa-circle-question"></i>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <div class="pricing-button">
                                        <a @if (auth()->user()) href="{{ route('cart', [$plan->id, 0]) }}"
                                        @else
                                            href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#exampleModal" @endif
                                            class="pricing-btn mt-4">
                                            get Started Now
                                            <i class="fa-solid fa-arrow-right-long"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div id="dedicated" class="tab-pane fade" role="tabpanel">
                    <div class="row">
                        @foreach ($vps as $plan)
                            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                                <div class="pricing-items">
                                    <div class="tag">
                                        <h6>{{ $plan->name }}</h6>
                                    </div>
                                    <div class="pricing-header">
                                        <div class="icon">
                                            <img src="assets/img/pricing/icon-2.png" alt="img">
                                        </div>
                                        <h2>
                                            @if (fmod($plan->price_1_month, 1) == 0)
                                                {{ number_format($plan->price_1_month, 0) }} LE
                                            @else
                                                {{ number_format($plan->price_1_month, 2) }} LE
                                            @endif
                                        </h2>
                                        <span class="month">Par month</span>
                                        <del class="price-text">25le</del>
                                        <p>
                                            {{ $plan->description }}
                                        </p>
                                    </div>
                                    <?php
                                    $includeFeatures = json_decode($plan->features_included, true);
                                    $not_includeFeatures = json_decode($plan->features_not_included, true);
                                    ?>
                                    <ul class="pricing-list">
                                        @foreach ($includeFeatures as $feature)
                                            <li>
                                                <span><i class="fa-solid fa-check"></i>{{ $feature }}</span>
                                                <i class="fa-light fa-circle-question"></i>
                                            </li>
                                        @endforeach
                                        @foreach ($not_includeFeatures as $feature)
                                            <li class="color-2">
                                                <span><i class="fa-solid fa-xmark"></i>{{ $feature }}</span>
                                                <i class="fa-light fa-circle-question"></i>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <div class="pricing-button">
                                        <a @if (auth()->user()) href="{{ route('cart_vps', [$plan->id, 0]) }}"
                                        @else
                                            href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#exampleModal" @endif
                                            class="pricing-btn mt-4">
                                            get Started Now
                                            <i class="fa-solid fa-arrow-right-long"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div id="private" class="tab-pane fade" role="tabpanel">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="pricing-items">
                                <div class="tag">
                                    <h6>Regular Plans</h6>
                                </div>
                                <div class="pricing-header">
                                    <div class="icon">
                                        <img src="assets/img/pricing/icon-2.png" alt="img">
                                    </div>
                                    <h2>$99</h2>
                                    <span class="month">Par month</span>
                                    <del class="price-text">$129</del>
                                    <p>
                                        Lnteger sapien nec sapien sollicitudin ultrices Cras tempor id lorem et
                                    </p>
                                </div>
                                <ul class="pricing-list">
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Branding and design Identity
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Web site Marketing Solutions
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Unlimited Application Installation
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            24/7 system Monitoring
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li class="color-2">
                                        <span>
                                            <i class="fa-solid fa-xmark"></i>
                                            Dedicated IP Address
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                </ul>
                                <div class="pricing-button">
                                    <a href="contact.html" class="pricing-btn mt-4">
                                        get Started Now
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="pricing-items">
                                <div class="tag">
                                    <h6>Premium Plans</h6>
                                </div>
                                <div class="pricing-header">
                                    <div class="icon">
                                        <img src="assets/img/pricing/icon-2.png" alt="img">
                                    </div>
                                    <h2>$129</h2>
                                    <span class="month">Par month</span>
                                    <del class="price-text">$149</del>
                                    <p>
                                        Lnteger sapien nec sapien sollicitudin ultrices Cras tempor id lorem et
                                    </p>
                                </div>
                                <ul class="pricing-list">
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Branding and design Identity
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Web site Marketing Solutions
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Unlimited Application Installation
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            24/7 system Monitoring
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li class="color-2">
                                        <span>
                                            <i class="fa-solid fa-xmark"></i>
                                            Dedicated IP Address
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                </ul>
                                <div class="pricing-button">
                                    <a href="contact.html" class="pricing-btn mt-4">
                                        get Started Now
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="pricing-items">
                                <div class="tag">
                                    <h6>Starlight Plans</h6>
                                </div>
                                <div class="pricing-header">
                                    <div class="icon">
                                        <img src="assets/img/pricing/icon-2.png" alt="img">
                                    </div>
                                    <h2>$149</h2>
                                    <span class="month">Par month</span>
                                    <del class="price-text">$169</del>
                                    <p>
                                        Lnteger sapien nec sapien sollicitudin ultrices Cras tempor id lorem et
                                    </p>
                                </div>
                                <ul class="pricing-list">
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Branding and design Identity
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Web site Marketing Solutions
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            Unlimited Application Installation
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                            24/7 system Monitoring
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                    <li class="color-2">
                                        <span>
                                            <i class="fa-solid fa-xmark"></i>
                                            Dedicated IP Address
                                        </span>
                                        <i class="fa-light fa-circle-question"></i>
                                    </li>
                                </ul>
                                <div class="pricing-button">
                                    <a href="contact.html" class="pricing-btn mt-4">
                                        get Started Now
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Hosting Section Start -->
    <section class="hosting section-padding fix">
        <div class="container">
            <div class="hosting-wrapper">
                <div class="row g-4 justify-content-between align-items-center">
                    <div class="col-lg-6">
                        <div class="hosting-content style-2">
                            <div class="section-title">
                                <span class="style-bg wow fadeInUp">Best Services</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">hostly provide secure & web application
                                    hosting</h2>
                            </div>
                            <div class="hosting-items mt-4 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                <div class="icon">
                                    <img src="assets/img/hosting/icon-11.png" alt="img">
                                </div>
                                <div class="content">
                                    <h4>Turbo Hosting</h4>
                                    <p>If  you  need  blazing-fast  website  performance 
Turbo hosting  ensures your  visitors  enjoy  unmatched  speed  and performance  
.</p>
                                </div>
                            </div>
                            <div class="hosting-items wow fadeInUp" data-wow-delay=".7s">
                                <div class="icon">
                                    <img src="assets/img/hosting/icon-12.png" alt="img">
                                </div>
                                <div class="content">
                                    <h4>Share Hosting</h4>
                                    <p>Perfect for blogs, small business websites, and portfolio sites 
It's budget-friendly, easy setup, high uptime, and 24/7 support . </p>
                                </div>
                            </div>
                            <div class="hosting-items wow fadeInUp" data-wow-delay=".9s">
                                <div class="icon">
                                    <img src="assets/img/hosting/icon-13.png" alt="img">
                                </div>
                                <div class="content">
                                    <h4>Dedicated Hosting</h4>
                                    <p>If you use dedicated service  offers  the benefits of high  performance , security , email  stability  and  control 
It's perfect  for  large  businesses , eCommerce  stores ,  and  resource-intensive  applications 
</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 wow fadeInUp" data-wow-delay=".4s">
                        <div class="hosting-image">
                            <img src="assets/img/hero/secure-data.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Data Center Section Start -->
    <section class="data-center-section fix section-padding section-bg">
        <div class="container">
            <div class="section-title text-center">
                <span class="style-bg wow fadeInUp">Our Location</span>
                <h2 class="wow fadeInUp" data-wow-delay=".3s">Our Data Center Location</h2>
            </div>
            <div class="data-center-wrapper">
                <div class="row g-4">
                    <div class="col-lg-12">
                        <div class="data-center-image">
                            <img src="assets/img/data-center-bg.png" alt="img">
                            <span class="text-box box-1">Canada</span>
                            <span class="text-box box-2">United States</span>
                            <span class="text-box box-3">Brazil</span>
                            <span class="text-box box-4">Finland</span>
                            <span class="text-box box-5">Ukraine</span>
                            <span class="text-box box-6">Nigeria</span>
                            <span class="text-box box-7">South Africa</span>
                            <span class="text-box box-8">India</span>
                            <span class="text-box box-9">China</span>
                            <span class="text-box box-10">Australia</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cta Contact Section Start -->
    <section class="cta-contct-section section-padding bg-cover fix"
        style="background-image: url('assets/img/cta/cta-conact-bg-2.jpg');">
        <div class="container">
            <div class="row g-4 justify-content-between align-items-center">
                <div class="col-lg-8">
                    <div class="cta-contact-left">
                        <div class="section-title">
                            <span class="white-text wow fadeInUp">Contact Us</span>
                            <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">24/7 Expert Hosting Support <br> Our
                                Customers Love</h2>
                        </div>
                        <div class="cta-contact-button mt-4 mt-md-0">
                            <a href="https://wa.me/01028887119?text=Hi!%20I'm%20interested%20in%20your%20services%20and%20would%20love%20to%20know%20more%20about%20it.%20Could%20you%20please%20send%20me%20more%20information?%20Thank%20you!" class="theme-btn bg-color-2 wow fadeInUp"
                                data-wow-delay=".5s">WhatsApp Now <i class="fas fa-long-arrow-alt-right"></i></a>
                            <h4 class="wow fadeInUp" data-wow-delay=".5s">
                                <i class="fa-light fa-envelope"></i>
                                <a href="mailto:info@hostly-eg.com">info@hostly-eg.com</a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeInUp" data-wow-delay=".4s">
                    <div class="cta-contact-image mb-0">
                        <img src="assets/img/hero/cta-man-2.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                    <div class="choose-us-card-items"style="height:350px">
                        <div class="icon">
                            <img src="assets/img/choose/safe-icon.png" alt="img">
                        </div>
                        <div class="content">
                            <h3>Safe and Secured</h3>
                            <p>
                               We put your security and privacy at the top of our priorities, so our site provides a safe environment that guarantees you a smooth and risk-free browsing experience
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
We believe in the quality of our services and products, which is why we offer a money-back guarantee. If you're not satisfied for any reason, you can get a full refund, ensuring a risk-free experience.                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                    <div class="choose-us-card-items"style="height:350px">
                        <div class="icon">
                            <img src="assets/img/choose/secured-icon.png" alt="img">
                        </div>
                        <div class="content">
                            <h3>Cost optimization</h3>
                            <p>
Smart solutions ensure the highest quality at the lowest cost, with strategic planning to reduce expenses and maximize your business value.                            </p>
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
                                We believe that the perfect user experience starts with a strong support service and is always available. That's why we provide you with customized technical support to help you with any query or problem you may face
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Feature Section Start -->
    <section class="feature-section section-padding pt-0">
        <div class="container">
            <div class="feature-wrapper">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="feature-image">
                            <img src="assets/img/hero/feature.jpg" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="feature-content">
                            <div class="section-title">
                                <span class="style-bg wow fadeInUp">feature</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">Enhanced Security Capabilities</h2>
                            </div>
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                We understand the importance of security in today's digital environment, so we provide advanced security capabilities to ensure that your data and personal information are protected to the highest standards by using :
                            </p>
                            <div class="feature-list">
                                <ul class="wow fadeInUp" data-wow-delay=".3s">
                                    <li>
                                        <i class="fa-duotone fa-check"></i>
                                        Software updates and patching
                                    </li>
                                    <li>
                                        <i class="fa-duotone fa-check"></i>
                                        oftware updates and patching,
                                    </li>
                                </ul>
                                <ul class="wow fadeInUp" data-wow-delay=".5s">
                                    <li>
                                        <i class="fa-duotone fa-check"></i>
                                        device security using Endpoint
                                    </li>
                                    <li>
                                        <i class="fa-duotone fa-check"></i>
                                        Cloud migration consultancy,
                                    </li>
                                </ul>
                            </div>
                            <a href="contact.html" class="theme-btn wow fadeInUp" data-wow-delay=".7s">
                                Get Started <i class="fas fa-long-arrow-alt-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section Start -->
    <section class="testimonial-section-2 fix section-padding section-bg">
        <div class="container">
            <div class="section-title text-center">
                <span class="style-bg wow fadeInUp">clients Testimonials</span>
                <h2 class="wow fadeInUp" data-wow-delay=".3s">Latest Client Feedback</h2>
            </div>
            <div class="swiper testimonial-slider">
                <div class="swiper-wrapper">
                    @foreach ($testmonials as $testmonial)
                        <div class="swiper-slide">
                            <div class="testimonial-box-items">
                                <div class="pngwing-shape">
                                    <img src="assets/img/testimonial/pngwing-shape.png" alt="{{$testmonial->name}}">
                                </div>
                                <div class="star">
                                    @for ($i = 0; $i < $testmonial->rating; $i++)
                                        <i class="fa-solid fa-star"></i>
                                    @endfor
                                    @for ($i = 0; $i < 5 - $testmonial->rating; $i++)
                                        <i class="fa-regular fa-star"></i>
                                    @endfor
                                </div>
                                <p>
                                    {{$testmonial->testmonial}}
                                </p>
                                <div class="client-info">
                                    <div class="client-img bg-cover"
                                        style="background-image: url('{{asset(route('client_testmonial_image', str_replace('client-testmonial/', '', $testmonial->image)))}}');"></div>
                                    <div class="content">
                                        <h4>{{$testmonial->name}}</h4>
                                        <span>{{$testmonial->job_title}}</span>
                                    </div>
                                    <div class="icon">
                                        <i class="fa-solid fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-dot mt-5">
                    <div class="dot"></div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
@endsection
