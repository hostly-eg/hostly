@extends('layouts.app')

@section('head')

@endsection

@section('content')
        <!--<< Breadcrumb Section Start >>-->
        <div class="breadcrumb-wrapper bg-cover" style="background-image: url('assets/img/breadcrumb-1.jpg');">
            <div class="container">
                <div class="page-heading">
                    <div class="page-header-left">
                        <h1 class="wow fadeInUp" data-wow-delay=".3s">Pricing</h1>
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
                                Pricing
                            </li>
                        </ul>
                    </div>
                    <div class="breadcrumb-image wow fadeInUp" data-wow-delay=".4s">
                        <img src="assets/img/Pricing plans-rafiki.png" width="700" height="700" alt="img">
                    </div>
                </div>
            </div>
        </div>

        <!-- Choose Us Section Start -->
   <section class="choose-us-section my-5">
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
                    </ul>
                    <div class="save-text">
                        Save 25%
                    </div>
                </div>
                <div class="tab-content">
                    <div id="monthly" class="tab-pane fade show active" role="tabpanel">
                        <div class="row">
                            @foreach ($plans as $plan)
                            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="{{$loop->index * 0.2}}s">
                                <div class="pricing-items style-2">
                                    <h6 class="top-text">{{$plan->name}}</h6>
                                    <div class="pricing-header-2">
                                            <h2>${{$plan->price_1_month}} <sub>/mo</sub></h2>
                                    </div>
                                    <p class="text-center">
                                        {{$plan->description}}
                                    </p>
                                    <ul class="pricing-list">
                                        @foreach (json_decode($plan->features_included) as $feature)
                                        <li>
                                            <span>
                                                <i class="fa-solid fa-check"></i>
                                                {{$feature}}
                                            </span>
                                            <i class="fa-light fa-circle-question"></i>
                                        </li>
                                        @endforeach
                                        @foreach (json_decode($plan->features_not_included) as $feature)
                                       
                                        <li class="color-2">
                                            <span>
                                                <i class="fa-solid fa-xmark"></i>
                                                {{$feature}}
                                            </span>
                                            <i class="fa-light fa-circle-question"></i>
                                        </li>
                                        @endforeach
                                    </ul>
                                    </ul>
                                    <div class="pricing-button">
                                        <a href="{{ route('cart', [$plan->id, 0]) }}" class="pricing-btn">
                                            get Started Now
                                            <i class="fa-solid fa-arrow-right-long"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
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

@endsection
@section('script')
@endsection
