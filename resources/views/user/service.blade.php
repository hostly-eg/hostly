@extends('layouts.app')

@section('head')

@endsection

@section('content')

        <!--<< Breadcrumb Section Start >>-->
        <div class="breadcrumb-wrapper bg-cover" style="background-image: url('assets/img/breadcrumb-1.jpg');">
            <div class="container">
                <div class="page-heading">
                    <div class="page-header-left">
                        <h1 class="wow fadeInUp" data-wow-delay=".3s">Services</h1>
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
                                Services
                            </li>
                        </ul>
                    </div>
                    <div class="breadcrumb-image wow fadeInUp" data-wow-delay=".4s">
                        <img src="assets/img/breadcrumb.png" alt="img">
                    </div>
                </div>
            </div>
        </div>

        <!-- Brand Section Start -->
        {{-- <div class="brand-section fix section-padding section-bg margin-top-10 pb-0">
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
        </div> --}}

        <!-- Choose Us Section Start -->
   <section class="choose-us-section mt-5">
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
        <!-- Hosting Section Start -->
        <section class="hosting-section fix section-padding">
            <div class="container">
                <div class="section-title text-center">
                    <span class="wow fadeInUp">Best hosting</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Discover Most Powerful Web <br> Hosting Features</h2>
               </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="hosting-inner-items responsive-style" style="background-image: url('assets/img/hosting/card-bg.png');height:300px">
                            <div class="icon">
                                <img src="assets/img/hosting/icon-1.png" alt="img">
                            </div>
                            <div class="content">
                                <h3><a href="dedicated-hosting.html">Dedicated Hosting</a></h3>
                                <p>
                                    If you use dedicated service  offers  the benefits of high  performance , security , email  stability  and  control 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="hosting-inner-items responsive-style" style="background-image: url('assets/img/hosting/card-bg.png');height:300px">
                            <div class="icon">
                                <img src="assets/img/hosting/icon-2.png" alt="img">
                            </div>
                            <div class="content">
                                <h3><a href="dedicated-hosting.html">Email Hosting</a></h3>
                                <p>
                                     with email hosting, you have greater control over your email data and security. This will help you better comply with data protection laws
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="hosting-inner-items responsive-style" style="background-image: url('assets/img/hosting/card-bg.png');height:300px">
                            <div class="icon">
                                <img src="assets/img/hosting/icon-3.png" alt="img">
                            </div>
                            <div class="content">
                                <h3><a href="dedicated-hosting.html">Ecommerce Hosting</a></h3>
                                <p>
                                     It's the perfect choice for online store owners looking for powerful, secure, and fast hosting to support their business growth and improve customer experience.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="hosting-inner-items responsive-style" style="background-image: url('assets/img/hosting/card-bg.png');height:300px">
                            <div class="icon">
                                <img src="assets/img/hosting/icon-4.png" alt="img">
                            </div>
                            <div class="content">
                                <h3><a href="cloud-hosting.html">Cloud Hosting</a></h3>
                                <p>
If you are looking to take your business site to new heights , cloud hosting is the right choice                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="hosting-inner-items responsive-style" style="background-image: url('assets/img/hosting/card-bg.png');height:300px">
                            <div class="icon">
                                <img src="assets/img/hosting/icon-5.png" alt="img">
                            </div>
                            <div class="content">
                                <h3><a href="reseller-hosting.html">Reseller Hosting</a></h3>
                                <p>
Allows  you to  provide  web  hosting  services  without the  infrastructure  and  management  overhead                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="hosting-inner-items responsive-style" style="background-image: url('assets/img/hosting/card-bg.png');height:300px">
                            <div class="icon">
                                <img src="assets/img/hosting/icon-6.png" alt="img">
                            </div>
                            <div class="content">
                                <h3><a href="{{route("vps_hosting")}}">VPS Hosting</a></h3>
                                <p>
It's best for medium to large website owners who need dedicated resources and powerful performance with customization flexibility, without the cost of fully dedicated servers                                </p>
                            </div>
                        </div>
                    </div>
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
                                                    {!! $faq->answer !!}
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
