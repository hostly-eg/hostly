@extends('layouts.app')

@section('head')

@endsection

@section('content')
        <!-- Hero Section Start -->
        <section class="hero-section hero-4 fix" style="background-image: url('assets/img/hero/hero-bg-4.jpg');">
            <div class="hero-suppor-image">
                <img src="assets/img/hero/hero-support.png" alt="img">
            </div>
            <div class="hero-hosing-image">
                <img src="assets/img/hero/hero-hosting-2.png" alt="img">
            </div>
            <div class="container">
                <div class="row g-4 justify-content-between">
                   <div class="col-lg-12">
                    <div class="hero-doming-wrapper">
                        <h1 class="text-white wow fadeInUp" data-wow-delay=".3s">Get Fastest Domain Up to 60% Discount</h1>
                        <h6 class="wow fadeInUp" data-wow-delay=".5z">Unlimited storage, unmetered bandwidth, unbeatable hosting. This gator’s got ya covered.</h6>
                        <form action="{{route('check_domain')}}" method="POST" class="doming-input-form wow fadeInUp" data-wow-delay=".5s">
                            @csrf
                            <div class="doming-input">
                                <input type="text" placeholder="domain.com" name="domain">
                                <button class="theme-btn bg-color-2"
                                        @if(auth()->user())
                                            type="submit"
                                        @else
                                            type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    @endif
                                >Search Now</button>
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
                </div>
            </div>
        </section>

        <!-- Doming Section Start -->
        <section class="doming-hosting-section fix section-padding">
            <div class="container">
                <div class="section-title text-center">
                    <span class="style-border wow fadeInUp">Popular Domain</span>
                    <h2 class="mb-3 wow fadeInUp" data-wow-delay=".3s">Search Most Popular Domain</h2>
                    <p class="wow fadeInUp" data-wow-delay=".5s">Aliquam viverra accumsan lectus in dignissim ante interdum eu Sed odio massa</p>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="doming-card-items">
                            <div class="wing-shape">
                                <img src="assets/img/doming/wing-shape.png" alt="img">
                            </div>
                            <div class="doming-header">
                               <div class="tag">
                                    <img src="assets/img/doming/online.png" alt="img">
                               </div>

                            <h6>Save 25%</h6>
                            </div>
                            <h4>$5.99/yr</h4>
                            <p>Collaboratively formulate principle capital. Progressively evolve user revolutionary hosting.</p>
                            <a href="contact.html" class="theme-btn">Register <i class="fa-regular fa-chevrons-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="doming-card-items">
                            <div class="wing-shape">
                                <img src="assets/img/doming/wing-shape.png" alt="img">
                            </div>
                            <div class="doming-header">
                               <div class="tag">
                                    <img src="assets/img/doming/org.png" alt="img">
                               </div>

                            <h6>Save 25%</h6>
                            </div>
                            <h4>$5.99/yr</h4>
                            <p>Collaboratively formulate principle capital. Progressively evolve user revolutionary hosting.</p>
                            <a href="contact.html" class="theme-btn">Register <i class="fa-regular fa-chevrons-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                        <div class="doming-card-items">
                            <div class="wing-shape">
                                <img src="assets/img/doming/wing-shape.png" alt="img">
                            </div>
                            <div class="doming-header">
                               <div class="tag">
                                    <img src="assets/img/doming/com.png" alt="img">
                               </div>

                            <h6>Save 25%</h6>
                            </div>
                            <h4>$5.99/yr</h4>
                            <p>Collaboratively formulate principle capital. Progressively evolve user revolutionary hosting.</p>
                            <a href="contact.html" class="theme-btn">Register <i class="fa-regular fa-chevrons-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                        <div class="doming-card-items">
                            <div class="wing-shape">
                                <img src="assets/img/doming/wing-shape.png" alt="img">
                            </div>
                            <div class="doming-header">
                               <div class="tag">
                                    <img src="assets/img/doming/shop.png" alt="img">
                               </div>

                            <h6>Save 25%</h6>
                            </div>
                            <h4>$5.99/yr</h4>
                            <p>Collaboratively formulate principle capital. Progressively evolve user revolutionary hosting.</p>
                            <a href="contact.html" class="theme-btn">Register <i class="fa-regular fa-chevrons-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="doming-card-items">
                            <div class="wing-shape">
                                <img src="assets/img/doming/wing-shape.png" alt="img">
                            </div>
                            <div class="doming-header">
                               <div class="tag">
                                    <img src="assets/img/doming/net.png" alt="img">
                               </div>

                            <h6>Save 25%</h6>
                            </div>
                            <h4>$5.99/yr</h4>
                            <p>Collaboratively formulate principle capital. Progressively evolve user revolutionary hosting.</p>
                            <a href="contact.html" class="theme-btn">Register <i class="fa-regular fa-chevrons-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="doming-card-items">
                            <div class="wing-shape">
                                <img src="assets/img/doming/wing-shape.png" alt="img">
                            </div>
                            <div class="doming-header">
                               <div class="tag">
                                    <img src="assets/img/doming/pro.png" alt="img">
                               </div>

                            <h6>Save 25%</h6>
                            </div>
                            <h4>$5.99/yr</h4>
                            <p>Collaboratively formulate principle capital. Progressively evolve user revolutionary hosting.</p>
                            <a href="contact.html" class="theme-btn">Register <i class="fa-regular fa-chevrons-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                        <div class="doming-card-items">
                            <div class="wing-shape">
                                <img src="assets/img/doming/wing-shape.png" alt="img">
                            </div>
                            <div class="doming-header">
                               <div class="tag">
                                    <img src="assets/img/doming/xyz.png" alt="img">
                               </div>

                            <h6>Save 25%</h6>
                            </div>
                            <h4>$5.99/yr</h4>
                            <p>Collaboratively formulate principle capital. Progressively evolve user revolutionary hosting.</p>
                            <a href="contact.html" class="theme-btn">Register <i class="fa-regular fa-chevrons-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                        <div class="doming-card-items">
                            <div class="wing-shape">
                                <img src="assets/img/doming/wing-shape.png" alt="img">
                            </div>
                            <div class="doming-header">
                               <div class="tag">
                                    <img src="assets/img/doming/top.png" alt="img">
                               </div>

                            <h6>Save 25%</h6>
                            </div>
                            <h4>$5.99/yr</h4>
                            <p>Collaboratively formulate principle capital. Progressively evolve user revolutionary hosting.</p>
                            <a href="contact.html" class="theme-btn">Register <i class="fa-regular fa-chevrons-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Doming List Section Start -->
        <section class="doming-list-section fix section-padding pt-0">
            <div class="container">
                <div class="section-title text-center pb-md-3">
                    <span class="style-border wow fadeInUp">Domains list</span>
                    <h2 class="mb-3 wow fadeInUp" data-wow-delay=".3s">Top Domains Price List</h2>
                    <p class="wow fadeInUp" data-wow-delay=".5s">Aliquam viverra accumsan lectus in dignissim ante interdum eu Sed odio massa</p>
                </div>
                <div class="row g-0">
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="doming-list-items">
                            <h6 class="top-text">Name</h6>
                            <ul>
                                <li class="border-none">
                                    <span></span>
                                </li>
                                <li><img src="assets/img/doming/online.png" alt="img"></li>
                                <li><img src="assets/img/doming/org.png" alt="img"></li>
                                <li><img src="assets/img/doming/com.png" alt="img"></li>
                                <li><img src="assets/img/doming/shop.png" alt="img"></li>
                                <li><img src="assets/img/doming/net.png" alt="img"></li>
                                <li><img src="assets/img/doming/pro.png" alt="img"></li>
                                <li><img src="assets/img/doming/xyz.png" alt="img"></li>
                                <li><img src="assets/img/doming/top.png" alt="img"></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="doming-list-items">
                            <h6 class="top-text">Register</h6>
                            <ul>
                                <li class="border-none">
                                    <span></span>
                                </li>
                                <li class="text-center style-2">$19.95 <del>$23.90</del></li>
                                <li class="text-center style-2">$10.95 <del>$18.90</del></li>
                                <li class="text-center style-2">$15.95 <del>$23.90</del></li>
                                <li class="text-center style-2">$19.95</li>
                                <li class="text-center style-2">$18.95 <del>$23.90</del></li>
                                <li class="text-center style-2">$19.95</li>
                                <li class="text-center style-2">$12.95 <del>$23.90</del></li>
                                <li class="text-center style-2">$9.95</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                        <div class="doming-list-items">
                            <h6 class="top-text">Transfer</h6>
                            <ul>
                                <li class="border-none">
                                    <span></span>
                                </li>
                                <li class="text-center style-2">$18.99</li>
                                <li class="text-center style-2">$18.99</li>
                                <li class="text-center style-2">$18.99</li>
                                <li class="text-center style-2">$18.99</li>
                                <li class="text-center style-2">$18.99</li>
                                <li class="text-center style-2">$18.99</li>
                                <li class="text-center style-2">$18.99</li>
                                <li class="text-center style-2">$18.99</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                        <div class="doming-list-items">
                            <h6 class="top-text">Renew</h6>
                            <ul>
                                <li class="border-none">
                                    <span></span>
                                </li>
                                <li class="text-center style-2">$29.95</li>
                                <li class="text-center style-2">$29.95</li>
                                <li class="text-center style-2">$29.95</li>
                                <li class="text-center style-2">$29.95</li>
                                <li class="text-center style-2">$29.95</li>
                                <li class="text-center style-2">$29.95</li>
                                <li class="text-center style-2">$29.95</li>
                                <li class="text-center style-2">$29.95</li>
                            </ul>
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
