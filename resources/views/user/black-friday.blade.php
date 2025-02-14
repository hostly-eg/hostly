@extends('layouts.app')

@section('head')

@endsection

@section('content')
        <!-- Hero Section Start -->
        <section class="hero-section hero-1 style-black-friday bg-cover fix" style="background-image: url('assets/img/hero/hero-bg-1.jpg');">
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
                                Black Friday
                            </span>
                            <h1 class="wow fadeInUp" data-wow-delay=".3s">
                               <span>Black Friday</span> super Sale Hosting deals
                            </h1>
                            <div class="coming-soon-timer">
                                <div class="timer-content wow fadeInUp" data-wow-delay=".2s">
                                    <h3 id="day">00</h3>
                                    <p>Days</p>
                                </div>
                                <div class="timer-content wow fadeInUp" data-wow-delay=".4s">
                                    <h3 id="hour">00</h3>
                                    <p>hrs</p>
                                </div>
                                <div class="timer-content wow fadeInUp" data-wow-delay=".6s">
                                    <h3 id="min">00</h3>
                                    <p>mins</p>
                                </div>
                                <div class="timer-content wow fadeInUp" data-wow-delay=".8s">
                                    <h3 id="sec">00</h3>
                                    <p>secs</p>
                                </div>
                            </div>
                            <a href="pricing.html" class="theme-btn bg-color-2 wow fadeInUp" data-wow-delay=".5s">
                                view plan <i class="fas fa-long-arrow-alt-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 wow fadeInUp" data-wow-delay=".4s">
                        <div class="hero-image">
                            <img src="assets/img/breadcrumb.png" alt="img">
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
                <h2 class="wow fadeInUp" data-wow-delay=".3s">Choose Awesome Plan for <br> your Needs</h2>
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

        <!-- Feature Section Start -->
        <section class="feature-hosting-section fix section-padding">
            <div class="container">
                <div class="feature-content-warpper style-3">
                    <div class="row g-4 justify-content-between align-items-center">
                        <div class="col-lg-5 wow fadeInUp" data-wow-delay=".3s">
                           <div class="hosting-image">
                            <img src="assets/img/hosting/hosting-2.png" alt="img">
                           </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="feature-hosting-content">
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

        <!-- Cta Contact Section Start -->
        <section class="cta-contct-section section-padding bg-cover fix" style="background-image: url('assets/img/cta/cta-conact-bg-2.jpg');">
            <div class="container">
                <div class="row g-4 justify-content-between align-items-center">
                    <div class="col-lg-8">
                        <div class="cta-contact-left">
                            <div class="section-title">
                                <span class="white-text wow fadeInUp">Contact Us</span>
                                <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">24/7 Expert Hosting Support <br> Our Customers Love</h2>
                            </div>
                            <div class="cta-contact-button mt-4 mt-md-0">
                                <a href="contact.html" class="theme-btn bg-color-2 wow fadeInUp" data-wow-delay=".5s">WhatsApp Now <i class="fas fa-long-arrow-alt-right"></i></a>
                                <h4 class="wow fadeInUp" data-wow-delay=".5s">
                                    <i class="fa-light fa-envelope"></i>
                                    <a href="mailto:info@hostly-eg.com">info@hostly-eg.com</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 wow fadeInUp" data-wow-delay=".4s">
                        <div class="cta-contact-image mb-0">
                            <img src="assets/img/cta-man-2.png" alt="img">
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
