@extends('layouts.app')

@section('head')

@endsection

@section('content')
        <!-- Hero Section Start -->
        <section class="hero-section hero-1 style-hosting bg-cover fix" style="background-image: url('assets/img/hero/hero-bg-1.jpg');">
            <div class="circle-shape-left">
                <img src="assets/img/hero/hero-1-circle-left.png" alt="shape-img">
            </div>
            <div class="circle-shape-right">
                <img src="assets/img/hero/hero-1-circle-right.png" alt="shape-img">
            </div>
            <div class="dot-left">
                <img src="assets/img/hero/hero-1-dot-left.png" alt="img">
            </div>
            <div class="dot-right">
                <img src="assets/img/hero/hero-1-dot-right.png" alt="img">
            </div>
            <div class="container">
                <div class="row g-4 justify-content-between align-items-center">
                    <div class="col-lg-6">
                        <div class="hero-content">
                            <span class="sub-text-2 wow fadeInUp">
                                <img src="assets/img/hero/activity.png" alt="img" class="me-2">
                                Dedicated Starter Plan - 12 months for $99/month
                            </span>
                            <h1 class="wow fadeInUp" data-wow-delay=".3s">
                                Managed Dedicated Server Hosting
                            </h1>
                            <div class="hero-list-items wow fadeInUp" aria-errormessage=".5s">
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
                            <a href="href="{{ route('pricing') }}" class="theme-btn bg-color-2 wow fadeInUp" data-wow-delay=".7s">
                                view plan <i class="fas fa-long-arrow-alt-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 wow fadeInUp" data-wow-delay=".4s">
                        <div class="hero-image">
                            <img src="assets/img/Server-amico.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pricing Section Start -->
        <section class="pricing-section fix section-padding section-bg">
            <div class="pricing-shape">
                <img src="assets/img/pricing-shape.png" alt="img">
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <span class="wow fadeInUp">Pricing Plans</span>
                    <h2 class="mb-3 wow fadeInUp" data-wow-delay=".3s">Shared Hosting Plan</h2>
                    <p class="wow fadeInUp" data-wow-delay=".5s">Aliquam viverra accumsan lectus in dignissim ante interdum eu Sed odio <br> massa rhoncus ac nulla vel iaculis egestas mauris</p>
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
                            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                <div class="pricing-items style-2">
                                    <h6 class="top-text">Regular Plans</h6>
                                    <div class="pricing-header-2">
                                            <div class="price-list">
                                                <del>120.99</del>
                                                <span>SAVE 75%</span>
                                            </div>
                                            <h2>$99 <sub>/mo</sub></h2>
                                    </div>
                                    <p class="text-center">
                                        Lnteger sapien nec sapien sollicitudin ultrices Cras tempor id lorem et
                                    </p>
                                    <ul class="pricing-list">
                                        <li>
                                            <span>
                                                <i class="fa-solid fa-check"></i>
                                                100 GB SSD Storage
                                            </span>
                                            <i class="fa-light fa-circle-question"></i>
                                        </li>
                                        <li>
                                            <span>
                                                <i class="fa-solid fa-check"></i>
                                                Weekly Backups
                                            </span>
                                            <i class="fa-light fa-circle-question"></i>
                                        </li>
                                        <li>
                                            <span>
                                                <i class="fa-solid fa-check"></i>
                                                Unlimited Free SSL
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
                                        <li>
                                            <span>
                                                <i class="fa-solid fa-xmark"></i>
                                                Free Domain ($9.99 value)
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
                                        <li class="color-2">
                                            <span>
                                                <i class="fa-solid fa-xmark"></i>
                                                20+ Payment Methods
                                            </span>
                                            <i class="fa-light fa-circle-question"></i>
                                        </li>
                                    </ul>
                                    <div class="pricing-button">
                                        <a href="contact.html" class="pricing-btn">
                                            get Started Now
                                            <i class="fa-solid fa-arrow-right-long"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                <div class="pricing-items style-2 active">
                                    <h6 class="top-text">Premium Plans</h6>
                                    <div class="pricing-header-2">
                                            <div class="price-list">
                                                <del>120.99</del>
                                                <span>SAVE 75%</span>
                                            </div>
                                            <h2>$59 <sub>/mo</sub></h2>
                                    </div>
                                    <p class="text-center">
                                        Lnteger sapien nec sapien sollicitudin ultrices Cras tempor id lorem et
                                    </p>
                                    <ul class="pricing-list">
                                        <li>
                                            <span>
                                                <i class="fa-solid fa-check"></i>
                                                100 GB SSD Storage
                                            </span>
                                            <i class="fa-light fa-circle-question"></i>
                                        </li>
                                        <li>
                                            <span>
                                                <i class="fa-solid fa-check"></i>
                                                Weekly Backups
                                            </span>
                                            <i class="fa-light fa-circle-question"></i>
                                        </li>
                                        <li>
                                            <span>
                                                <i class="fa-solid fa-check"></i>
                                                Unlimited Free SSL
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
                                        <li>
                                            <span>
                                                <i class="fa-solid fa-xmark"></i>
                                                Free Domain ($9.99 value)
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
                                        <li class="color-2">
                                            <span>
                                                <i class="fa-solid fa-xmark"></i>
                                                20+ Payment Methods
                                            </span>
                                            <i class="fa-light fa-circle-question"></i>
                                        </li>
                                    </ul>
                                    <div class="pricing-button">
                                        <a href="contact.html" class="pricing-btn">
                                            get Started Now
                                            <i class="fa-solid fa-arrow-right-long"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                <div class="pricing-items style-2">
                                    <h6 class="top-text">Business</h6>
                                    <div class="pricing-header-2">
                                            <div class="price-list">
                                                <del>120.99</del>
                                                <span>SAVE 75%</span>
                                            </div>
                                            <h2>$39 <sub>/mo</sub></h2>
                                    </div>
                                    <p class="text-center">
                                        Lnteger sapien nec sapien sollicitudin ultrices Cras tempor id lorem et
                                    </p>
                                    <ul class="pricing-list">
                                        <li>
                                            <span>
                                                <i class="fa-solid fa-check"></i>
                                                100 GB SSD Storage
                                            </span>
                                            <i class="fa-light fa-circle-question"></i>
                                        </li>
                                        <li>
                                            <span>
                                                <i class="fa-solid fa-check"></i>
                                                Weekly Backups
                                            </span>
                                            <i class="fa-light fa-circle-question"></i>
                                        </li>
                                        <li>
                                            <span>
                                                <i class="fa-solid fa-check"></i>
                                                Unlimited Free SSL
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
                                        <li>
                                            <span>
                                                <i class="fa-solid fa-xmark"></i>
                                                Free Domain ($9.99 value)
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
                                        <li class="color-2">
                                            <span>
                                                <i class="fa-solid fa-xmark"></i>
                                                20+ Payment Methods
                                            </span>
                                            <i class="fa-light fa-circle-question"></i>
                                        </li>
                                    </ul>
                                    <div class="pricing-button">
                                        <a href="contact.html" class="pricing-btn">
                                            get Started Now
                                            <i class="fa-solid fa-arrow-right-long"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                                <div class="pricing-items style-2">
                                    <h6 class="top-text">Cloud Startup</h6>
                                    <div class="pricing-header-2">
                                            <div class="price-list">
                                                <del>120.99</del>
                                                <span>SAVE 75%</span>
                                            </div>
                                            <h2>$29 <sub>/mo</sub></h2>
                                    </div>
                                    <p class="text-center">
                                        Lnteger sapien nec sapien sollicitudin ultrices Cras tempor id lorem et
                                    </p>
                                    <ul class="pricing-list">
                                        <li>
                                            <span>
                                                <i class="fa-solid fa-check"></i>
                                                100 GB SSD Storage
                                            </span>
                                            <i class="fa-light fa-circle-question"></i>
                                        </li>
                                        <li>
                                            <span>
                                                <i class="fa-solid fa-check"></i>
                                                Weekly Backups
                                            </span>
                                            <i class="fa-light fa-circle-question"></i>
                                        </li>
                                        <li>
                                            <span>
                                                <i class="fa-solid fa-check"></i>
                                                Unlimited Free SSL
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
                                        <li>
                                            <span>
                                                <i class="fa-solid fa-xmark"></i>
                                                Free Domain ($9.99 value)
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
                                        <li class="color-2">
                                            <span>
                                                <i class="fa-solid fa-xmark"></i>
                                                20+ Payment Methods
                                            </span>
                                            <i class="fa-light fa-circle-question"></i>
                                        </li>
                                    </ul>
                                    <div class="pricing-button">
                                        <a href="contact.html" class="pricing-btn">
                                            get Started Now
                                            <i class="fa-solid fa-arrow-right-long"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="yearly" class="tab-pane fade" role="tabpanel">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="pricing-items style-2">
                                    <h6 class="top-text">Regular Plans</h6>
                                    <div class="pricing-header-2">
                                            <div class="price-list">
                                                <del>120.99</del>
                                                <span>SAVE 75%</span>
                                            </div>
                                            <h2>$99 <sub>/mo</sub></h2>
                                    </div>
                                    <p class="text-center">
                                        Lnteger sapien nec sapien sollicitudin ultrices Cras tempor id lorem et
                                    </p>
                                    <ul class="pricing-list">
                                        <li>
                                            <span>
                                                <i class="fa-solid fa-check"></i>
                                                100 GB SSD Storage
                                            </span>
                                            <i class="fa-light fa-circle-question"></i>
                                        </li>
                                        <li>
                                            <span>
                                                <i class="fa-solid fa-check"></i>
                                                Weekly Backups
                                            </span>
                                            <i class="fa-light fa-circle-question"></i>
                                        </li>
                                        <li>
                                            <span>
                                                <i class="fa-solid fa-check"></i>
                                                Unlimited Free SSL
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
                                        <li>
                                            <span>
                                                <i class="fa-solid fa-xmark"></i>
                                                Free Domain ($9.99 value)
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
                                        <li class="color-2">
                                            <span>
                                                <i class="fa-solid fa-xmark"></i>
                                                20+ Payment Methods
                                            </span>
                                            <i class="fa-light fa-circle-question"></i>
                                        </li>
                                    </ul>
                                    <div class="pricing-button">
                                        <a href="contact.html" class="pricing-btn">
                                            get Started Now
                                            <i class="fa-solid fa-arrow-right-long"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="pricing-items style-2 active">
                                    <h6 class="top-text">Premium Plans</h6>
                                    <div class="pricing-header-2">
                                            <div class="price-list">
                                                <del>120.99</del>
                                                <span>SAVE 75%</span>
                                            </div>
                                            <h2>$59 <sub>/mo</sub></h2>
                                    </div>
                                    <p class="text-center">
                                        Lnteger sapien nec sapien sollicitudin ultrices Cras tempor id lorem et
                                    </p>
                                    <ul class="pricing-list">
                                        <li>
                                            <span>
                                                <i class="fa-solid fa-check"></i>
                                                100 GB SSD Storage
                                            </span>
                                            <i class="fa-light fa-circle-question"></i>
                                        </li>
                                        <li>
                                            <span>
                                                <i class="fa-solid fa-check"></i>
                                                Weekly Backups
                                            </span>
                                            <i class="fa-light fa-circle-question"></i>
                                        </li>
                                        <li>
                                            <span>
                                                <i class="fa-solid fa-check"></i>
                                                Unlimited Free SSL
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
                                        <li>
                                            <span>
                                                <i class="fa-solid fa-xmark"></i>
                                                Free Domain ($9.99 value)
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
                                        <li class="color-2">
                                            <span>
                                                <i class="fa-solid fa-xmark"></i>
                                                20+ Payment Methods
                                            </span>
                                            <i class="fa-light fa-circle-question"></i>
                                        </li>
                                    </ul>
                                    <div class="pricing-button">
                                        <a href="contact.html" class="pricing-btn">
                                            get Started Now
                                            <i class="fa-solid fa-arrow-right-long"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="pricing-items style-2">
                                    <h6 class="top-text">Business</h6>
                                    <div class="pricing-header-2">
                                            <div class="price-list">
                                                <del>120.99</del>
                                                <span>SAVE 75%</span>
                                            </div>
                                            <h2>$39 <sub>/mo</sub></h2>
                                    </div>
                                    <p class="text-center">
                                        Lnteger sapien nec sapien sollicitudin ultrices Cras tempor id lorem et
                                    </p>
                                    <ul class="pricing-list">
                                        <li>
                                            <span>
                                                <i class="fa-solid fa-check"></i>
                                                100 GB SSD Storage
                                            </span>
                                            <i class="fa-light fa-circle-question"></i>
                                        </li>
                                        <li>
                                            <span>
                                                <i class="fa-solid fa-check"></i>
                                                Weekly Backups
                                            </span>
                                            <i class="fa-light fa-circle-question"></i>
                                        </li>
                                        <li>
                                            <span>
                                                <i class="fa-solid fa-check"></i>
                                                Unlimited Free SSL
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
                                        <li>
                                            <span>
                                                <i class="fa-solid fa-xmark"></i>
                                                Free Domain ($9.99 value)
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
                                        <li class="color-2">
                                            <span>
                                                <i class="fa-solid fa-xmark"></i>
                                                20+ Payment Methods
                                            </span>
                                            <i class="fa-light fa-circle-question"></i>
                                        </li>
                                    </ul>
                                    <div class="pricing-button">
                                        <a href="contact.html" class="pricing-btn">
                                            get Started Now
                                            <i class="fa-solid fa-arrow-right-long"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="pricing-items style-2">
                                    <h6 class="top-text">Cloud Startup</h6>
                                    <div class="pricing-header-2">
                                            <div class="price-list">
                                                <del>120.99</del>
                                                <span>SAVE 75%</span>
                                            </div>
                                            <h2>$29 <sub>/mo</sub></h2>
                                    </div>
                                    <p class="text-center">
                                        Lnteger sapien nec sapien sollicitudin ultrices Cras tempor id lorem et
                                    </p>
                                    <ul class="pricing-list">
                                        <li>
                                            <span>
                                                <i class="fa-solid fa-check"></i>
                                                100 GB SSD Storage
                                            </span>
                                            <i class="fa-light fa-circle-question"></i>
                                        </li>
                                        <li>
                                            <span>
                                                <i class="fa-solid fa-check"></i>
                                                Weekly Backups
                                            </span>
                                            <i class="fa-light fa-circle-question"></i>
                                        </li>
                                        <li>
                                            <span>
                                                <i class="fa-solid fa-check"></i>
                                                Unlimited Free SSL
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
                                        <li>
                                            <span>
                                                <i class="fa-solid fa-xmark"></i>
                                                Free Domain ($9.99 value)
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
                                        <li class="color-2">
                                            <span>
                                                <i class="fa-solid fa-xmark"></i>
                                                20+ Payment Methods
                                            </span>
                                            <i class="fa-light fa-circle-question"></i>
                                        </li>
                                    </ul>
                                    <div class="pricing-button">
                                        <a href="contact.html" class="pricing-btn">
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

        <!-- Choose Us Section Start -->
        <section class="choose-us-section fix section-padding">
            <div class="container">
                <div class="section-title text-center">
                    <span class="style-border wow fadeInUp">Features</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Quick Look on Our <br> VPS Features</h2>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="choose-us-card-items">
                            <div class="icon">
                                <img src="assets/img/choose/ram.png" alt="img">
                            </div>
                            <div class="content">
                                <h3>RAM & Storage</h3>
                                <p>
                                    Collaboratively formulate principle capital. Progressively evolve user revolutionary hosting services.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="choose-us-card-items">
                            <div class="icon">
                                <img src="assets/img/choose/ssd.png" alt="img">
                            </div>
                            <div class="content">
                                <h3>SSDs, Email & SSL</h3>
                                <p>
                                    Collaboratively formulate principle capital. Progressively evolve user revolutionary hosting services.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                        <div class="choose-us-card-items">
                            <div class="icon">
                                <img src="assets/img/choose/backups.png" alt="img">
                            </div>
                            <div class="content">
                                <h3>Daily Backups</h3>
                                <p>
                                    Collaboratively formulate principle capital. Progressively evolve user revolutionary hosting services.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                        <div class="choose-us-card-items">
                            <div class="icon">
                                <img src="assets/img/choose/security.png" alt="img">
                            </div>
                            <div class="content">
                                <h3>Maximum Security</h3>
                                <p>
                                    Collaboratively formulate principle capital. Progressively evolve user revolutionary hosting services.
                                </p>
                            </div>
                        </div>
                    </div>
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

        <!-- Feature Section Start -->
        <section class="feature-hosting-section fix section-padding section-bg">
            <div class="container">
                <div class="feature-content-warpper style-3">
                    <div class="row g-4 justify-content-between align-items-center">
                        <div class="col-lg-6">
                            <div class="hosting-image-2">
                                <div class="shape-image">
                                    <img src="assets/img/feature-circle.png" alt="img">
                                </div>
                                <div class="row g-4">
                                    <div class="col-md-6 wow fadeInUp" data-wow-delay=".3s">
                                        <div class="hosting-thumb">
                                            <img src="assets/img/feature-hosting.jpg" alt="img">
                                        </div>
                                    </div>
                                    <div class="col-md-6 wow fadeInUp" data-wow-delay=".5s">
                                        <div class="hosting-thumb style-image">
                                            <img src="assets/img/feature-hosting-2.jpg" alt="img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="feature-hosting-content ps-lg-4">
                                <div class="section-title">
                                    <span class="wow fadeInUp">Best hosting</span>
                                    <h2 class="wow fadeInUp" data-wow-delay=".3s">A Successful Web Hosting <br> Migration Story</h2>
                                </div>
                                <div class="feature-hosting-tab-area mt-4 mt-md-0">
                                    <ul class="nav">
                                        <li class="nav-item wow fadeInUp" data-wow-delay=".3s">
                                            <a href="#web" data-bs-toggle="tab" class="nav-link ps-0 active">
                                                <h5><img src="assets/img/hosting/web-host-icon.png" alt="img">Web Hosting</h5>
                                            </a>
                                        </li>
                                        <li class="nav-item wow fadeInUp" data-wow-delay=".5s">
                                            <a href="#vps" data-bs-toggle="tab" class="nav-link">
                                                <h5><img src="assets/img/hosting/vps-host-icon.png" alt="img">VPS Hosting</h5>
                                            </a>
                                        </li>
                                        <li class="nav-item wow fadeInUp" data-wow-delay=".7s">
                                        <a href="#cloud" data-bs-toggle="tab" class="nav-link">
                                            <h5><img src="assets/img/hosting/cloud-host-icon.png" alt="img">Cloud Hosting</h5>
                                        </a>
                                    </li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div id="web" class="tab-pane fade show active">
                                        <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".3s">
                                            Pellentesque varius mauris sit amet nisi tincidunt finibus Donec faucibus diam quis feugiat accumsan Integer molestie sapien ut ipsum fermentum feugiat Curabitur.
                                        </p>
                                        <div class="list-items">
                                            <ul class="wow fadeInUp" data-wow-delay=".5s">
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Auto Backup & Cloud Storage
                                                </li>
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Free Supersonic CDN
                                                </li>
                                            </ul>
                                            <ul class="wow fadeInUp" data-wow-delay=".7s">
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Understanding brand perception
                                                </li>
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    100 Subdomains per account
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="about.html" class="theme-btn wow fadeInUp" data-wow-delay=".5s">Explore More <i class="fas fa-long-arrow-alt-right"></i>
                                        </a>
                                    </div>
                                    <div id="vps" class="tab-pane fade">
                                        <p class="mt-3 mt-md-0">
                                            Pellentesque varius mauris sit amet nisi tincidunt finibus Donec faucibus diam quis feugiat accumsan Integer molestie sapien ut ipsum fermentum feugiat Curabitur.
                                        </p>
                                        <div class="list-items">
                                            <ul>
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Auto Backup & Cloud Storage
                                                </li>
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Free Supersonic CDN
                                                </li>
                                            </ul>
                                            <ul>
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Understanding brand perception
                                                </li>
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    100 Subdomains per account
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="about.html" class="theme-btn">Explore More <i class="fas fa-long-arrow-alt-right"></i>
                                        </a>
                                    </div>
                                    <div id="cloud" class="tab-pane fade">
                                        <p class="mt-3 mt-md-0">
                                            Pellentesque varius mauris sit amet nisi tincidunt finibus Donec faucibus diam quis feugiat accumsan Integer molestie sapien ut ipsum fermentum feugiat Curabitur.
                                        </p>
                                        <div class="list-items">
                                            <ul>
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Auto Backup & Cloud Storage
                                                </li>
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Free Supersonic CDN
                                                </li>
                                            </ul>
                                            <ul>
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    Understanding brand perception
                                                </li>
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    100 Subdomains per account
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="about.html" class="theme-btn">Explore More <i class="fas fa-long-arrow-alt-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                        @foreach ($faqs as $faq)
                                        <div class="accordion-item wow fadeInUp" data-wow-delay="{{$loop->index * 0.3}}s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq{{$loop->index}}" aria-expanded="true" aria-controls="faq{{$loop->index}}">
                                                    {{$faq->question}}
                                                </button>
                                            </h5>
                                            <div id="faq{{$loop->index}}" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    {{$faq->answer}}
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
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

        <!-- Brand Section Start -->
     {{-- --}}

@endsection
@section('script')
@endsection
