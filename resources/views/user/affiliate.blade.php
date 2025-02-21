@extends('layouts.app')

@section('head')

@endsection

@section('content')
    <!-- Hero Section Start -->
    <section class="hero-section hero-1 style-affiliate bg-cover fix" style="background-image: url('assets/img/hero/hero-bg-1.jpg');">
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
                            Affiliate Program
                        </span>
                        <h1 class="wow fadeInUp" data-wow-delay=".3s">
                            Hostly Web Hosting Affiliate Program
                        </h1>
                     {{--    <a href="{{ route("pricing") }}" class="theme-btn bg-color-2 wow fadeInUp" data-wow-delay=".5s">
                            view plan <i class="fas fa-long-arrow-alt-right"></i>
                        </a> --}}
                    </div>
                </div>
                <div class="col-lg-3 wow fadeInUp" data-wow-delay=".4s">
                    <div class="hero-image">
                        <img src="assets/img/Server status-cuate.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Feature Section Start -->
    <section class="feature-section">
        <div class="container">
            <div class="feature-wrapper-2">
                <div class="row g-4">
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="feature-card-items">
                            <div class="icon">
                                <img src="assets/img/feature-icon/icon-1.png" alt="img">
                            </div>
                            <div class="content">
                                <h3>Maximum Performance</h3>
                                <p>Collaboratively formulate principle capital progressively evolve</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="feature-card-items">
                            <div class="icon">
                                <img src="assets/img/feature-icon/icon-2.png" alt="img">
                            </div>
                            <div class="content">
                                <h3>Maximum Data Transfer</h3>
                                <p>Collaboratively formulate principle capital progressively evolve</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                        <div class="feature-card-items">
                            <div class="icon">
                                <img src="assets/img/feature-icon/icon-3.png" alt="img">
                            </div>
                            <div class="content">
                                <h3>Super Easy To Use</h3>
                                <p>Collaboratively formulate principle capital progressively evolve</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                        <div class="feature-card-items">
                            <div class="icon">
                                <img src="assets/img/feature-icon/icon-4.png" alt="img">
                            </div>
                            <div class="content">
                                <h3>Maximum Security</h3>
                                <p>Collaboratively formulate principle capital progressively evolve</p>
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
            <div class="feature-content-warpper margin-top-60">
                <div class="row g-4 justify-content-between align-items-center">
                    <div class="col-lg-5 wow fadeInUp" data-wow-delay=".3s">
                        <div class="feature-hosting-image">
                            <img src="assets/img/hosting-boy.png" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="feature-hosting-content">
                            <div class="section-title">
                                <span class="wow fadeInUp">Best hosting</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">Get the Good Level Hosting <br> at Budget Price</h2>
                            </div>
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                Pellentesque varius mauris sit amet nisi tincidunt finibus Donec faucibus diam quis feugiat accumsan Integer molestie sapien ut ipsum fermentum feugiat Curabitur.
                            </p>
                            <div class="list-items">
                                <ul class="wow fadeInUp" data-wow-delay=".3s">
                                    <li>
                                        <i class="far fa-check"></i>
                                        5-days money back guarantee
                                    </li>
                                
                                </ul>
                                <ul class="wow fadeInUp" data-wow-delay=".5s">
                                    <li>
                                        <i class="far fa-check"></i>
                                        Unlimited Application Installation
                                    </li>
                                    <li>
                                        <i class="far fa-check"></i>
                                        24/7 system Monitoring
                                    </li>
                                </ul>
                            </div>
                            <a href="pricing.html" class="theme-btn wow fadeInUp" data-wow-delay=".5s">See Pricing <i class="fas fa-long-arrow-alt-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Brand Section Start -->
{{--     <div class="brand-section fix section-padding section-bg margin-top-10 pb-0">
        <div class="container">
            <h3 class="brand-head-title wow fadeInUp" data-wow-delay=".3s"></h3>
            <div class="swiper brand-slider-2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/brand/trustipilot.png" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/brand/google.png" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/brand/wpbeginner.png" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/brand/hostadvice.png" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-img center">
                            <img src="assets/img/brand/capterra.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 --}}
    <!-- Choose Us Section Start -->
    <section class="choose-us-section-2 pt-100 pb-100 margin-top-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="choose-us-card-items mt-0">
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
                    <div class="choose-us-card-items mt-0">
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
                    <div class="choose-us-card-items mt-0">
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
                    <div class="choose-us-card-items mt-0">
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

    <!-- Affiliate Section Start -->
    <section class="affiliate-section fix section-padding">
        <div class="container">
            <div class="section-title text-center">
                <span class="style-border wow fadeInUp">Affiliate Program</span>
                <h2 class="mb-3 wow fadeInUp" data-wow-delay=".3s">How Affiliate Works</h2>
                <p class="wow fadeInUp" data-wow-delay=".5s">Aliquam viverra accumsan lectus in dignissim ante interdum eu Sed odio massa</p>
            </div>
            <div class="row g-0">
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="affiliate-card-items">
                        <h6 class="top-text">All Plan Features</h6>
                        <div class="pricing-header">
                            <div class="affiliate-img">
                                <img src="assets/img/affiliate.png" alt="img">
                            </div>
                        </div>
                        <ul>
                            @foreach ($affilateFields as $affilateField)
                                <li>
                                    {{ $affilateField->name }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @foreach ($affilates as $affilate)
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="affiliate-card-items">
                        <h6 class="top-text">{{ $affilate->name }}</h6>
                        <div class="pricing-header">
                            <div class="price-list">
                                <del>{{ $affilate->price }}</del>
                            </div>
                            <p class="text-center">
                                {{ $affilate->description }}
                            </p>
                            <a href="contact.html" class="theme-btn">get Started Now  <i class="fas fa-long-arrow-alt-right"></i>
                            </a>
                        </div>
                        <ul class="text-center">
                            @foreach ($affilateFields as $affilateField)
                                <li>
                                    @if ($affilateField->type == 'checkbox')
                                        $affilate->fields[$affilateField->id] == 1 ? <i class="fa-regular fa-check"></i> : <i class="fa-regular fa-xmark"></i>
                                    @else
                                        {{ $affilate->fields_rendered[$affilateField->id]['value'] }}
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Faq Section Start -->
    <section class="faq-section fix section-padding pt-0">
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
                                    <div class="accordion-item wow fadeInUp" data-wow-delay="{{ $loop->index * 0.2 }}s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq{{ $faq->id }}" aria-expanded="true" aria-controls="faq{{ $faq->id }}">
                                                {{ $faq->question }}
                                            </button>
                                        </h5>
                                        <div id="faq{{ $faq->id }}" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                {{ $faq->answer }}
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
@endsection
@section('script')
@endsection
