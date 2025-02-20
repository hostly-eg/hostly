@extends('layouts.app')

@section('head')

@endsection

@section('content')
        <!--<< Breadcrumb Section Start >>-->
        <div class="breadcrumb-wrapper bg-cover" style="background-image: url('assets/img/breadcrumb-1.jpg');">
            <div class="container">
                <div class="page-heading">
                    <div class="page-header-left">
                        <h1 class="wow fadeInUp" data-wow-delay=".3s">Support</h1>
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
                                Support
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
                    <span class="style-border wow fadeInUp">our Support</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">our Premium Support</h2>
                    <p class="wow fadeInUp" data-wow-delay=".5s">Aliquam viverra accumsan lectus in dignissim ante interdum eu Sed odio massa</p>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="choose-us-card-items">
                            <div class="icon">
                                <img src="assets/img/support/support.png" alt="img">
                            </div>
                            <div class="content">
                                <h3>24/7 Support</h3>
                                <p>
                                    24/7 priority Live Chat and ticketing support.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="choose-us-card-items">
                            <div class="icon">
                                <img src="assets/img/support/customization.png" alt="img">
                            </div>
                            <div class="content">
                                <h3>Site Customization</h3>
                                <p>
                                    2Collaboratively formulate principle capital. Progressively evolve
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                        <div class="choose-us-card-items">
                            <div class="icon">
                                <img src="assets/img/support/technical.png" alt="img">
                            </div>
                            <div class="content">
                                <h3>Technical Support </h3>
                                <p>
                                    24/7/365 priority Live Chat and ticketing support.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                        <div class="choose-us-card-items">
                            <div class="icon">
                                <img src="assets/img/support/account.png" alt="img">
                            </div>
                            <div class="content">
                                <h3>Account Manager</h3>
                                <p>
                                    2Collaboratively formulate principle capital. Progressively evolve
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Faq Section Start -->
        <section class="faq-section fix section-padding section-bg">
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

          <!--<< Contact Section Start >>-->
          <section class="contact-section fix section-padding">
            <div class="container">
                <div class="contact-wrapper">
                    <div class="row g-4">
                        <div class="col-lg-6">
                           <div class="contact-left">
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">Request a <br> Consultation</h2>
                                <div class="contact-image wow fadeInUp" data-wow-delay=".5s">
                                    <img src="assets/img/contact.png" alt="contact-img">
                                </div>
                           </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-right">
                                <h3 class="wow fadeInUp">Get in Touch</h3>
                                <form action="{{ route('store_contact') }}" id="contact-form" method="POST" class="contact-form-items">
                                    @csrf
                                    <div class="row g-4">
                                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                                            <div class="form-clt">
                                                <input type="text" name="name" id="name" placeholder="Full Name" required>
                                            </div>
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                                            <div class="form-clt">
                                                <input type="text" name="email" id="email" placeholder="Email Address" required>
                                            </div>
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                                            <div class="form-clt">
                                                <input type="text" name="phone" id="phone" placeholder="Phone Number" required>
                                            </div>
                                            @error('phone')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                                            <div class="form-clt">
                                                <div class="category-oneadjust">
                                                    <select name="subject" class="category" required>
                                                        <option value="1">
                                                            Subject
                                                        </option>
                                                        <option value="1">
                                                          Doming
                                                        </option>
                                                        <option value="1">
                                                            Hosting
                                                        </option>
                                                        <option value="1">
                                                          VPS Hosting
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            @error('subject')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".7s">
                                            <div class="form-clt">
                                                <textarea name="message" id="message" placeholder="Messages" required></textarea>
                                            </div>
                                            @error('message')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".9s">
                                            <div class="form-check d-flex gap-2 from-customradio">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" required>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Collaboratively formulate principle capital. Progressively evolve user
                                                </label>
                                            </div>
                                            <button type="submit" class="theme-btn">
                                                Submit Now <i class="fa-solid fa-arrow-right-long"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
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
    
@endsection
@section('script')
@endsection
