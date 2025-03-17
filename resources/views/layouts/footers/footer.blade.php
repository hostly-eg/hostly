<!--<< Footer Section Start >>-->
<footer class="footer-section fix bg-cover" style="background-image: url('assets/img/footer-bg-2.jpg');">
    <div class="footer-widgets-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <a href="/">
                                <img class="col-12" src="assets/img/logo/white-logo.png" alt="logo-img">
                            </a>
                        </div>
                        <div class="footer-content">
                            <p>
                                We provide reliable and easy-to-use hosting solutions, with high performance and advanced security to ensure the best experience for your site.  unlimited data transfer, and technical support available around the clock.
                            </p>
                            <h4 class="payment-text">Payment Method</h4>
                            <ul class="brand-logo">
                                <li>
                                    <img src="assets/img/visa-logo.png" alt="img">
                                </li>
                                <li>
                                    <img src="assets/img/mastercard-logo.png" alt="img">
                                </li>
                                <li class="bg-light">
                                    <img src="assets/img/instapay.png" width="80" alt="img">
                                </li>
                                <li class="bg-light">
                                    <img src="assets/img/vodafone.png" width="30" alt="img">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 ps-lg-5 wow fadeInUp" data-wow-delay=".4s">
                    <div class="single-footer-widget ml-50">
                        <div class="widget-head">
                            <h3>Company</h3>
                        </div>
                        <ul class="list-area">
                            <li>
                                <a href="{{ route('about') }}">
                                    <i class="fa-regular fa-chevrons-right"></i>
                                    hostly About
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('support') }}">
                                    <i class="fa-regular fa-chevrons-right"></i>
                                    Contact Us
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('pricing') }}">
                                    <i class="fa-regular fa-chevrons-right"></i>
                                    Pricing Plans
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('faq') }}">
                                    <i class="fa-regular fa-chevrons-right"></i>
                                    FAQ’S
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('privacy') }}">
                                    <i class="fa-regular fa-chevrons-right"></i>
                                    Privacy Policy
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 ps-lg-5 wow fadeInUp" data-wow-delay=".6s">
                    <div class="single-footer-widget style-margin">
                        <div class="widget-head">
                            <h3>Hosting</h3>
                        </div>
                        <ul class="list-area">
                            <li>
                                <a href="{{ route('share_hosting') }}">
                                    <i class="fa-regular fa-chevrons-right"></i>
                                    Shared Hosting
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('coming_soon') }}">
                                    <i class="fa-regular fa-chevrons-right"></i>
                                    Reseller Hosting
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('vps_hosting') }}">
                                    <i class="fa-regular fa-chevrons-right"></i>
                                    VPS Hosting
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('coming_soon') }}">
                                    <i class="fa-regular fa-chevrons-right"></i>
                                    Cloud Hosting
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('coming_soon') }}">
                                    <i class="fa-regular fa-chevrons-right"></i>
                                    Dedicated Hosting
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 ps-lg-4 wow fadeInUp" data-wow-delay=".9s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h3>Newsletter</h3>
                        </div>
                        <div class="footer-content">
                            <p>
                                Sign up to seargin weekly newsletter to get the latest updates.
                            </p>
                            <div class="footer-input">
                                <form action="{{ route('store_news_subscriber') }}" method="POST">
                                    @csrf
                                    <input type="email" id="email2" placeholder="Enter Email Address" name="email">
                                    <button class="newsletter-btn" type="submit">
                                        <i class="fa-regular fa-paper-plane"></i>
                                    </button>
                                </form>
                            </div>
                            <div class="social-icon d-flex align-items-center">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom style-2">
        <div class="container">
            <div class="footer-wrapper d-flex align-items-center justify-content-between">
                <p class="wow fadeInLeft" data-wow-delay=".3s">
                    © All Copyright 2024 by <a href="/">HOSLTY-EG</a>
                </p>
                <ul class="footer-menu wow fadeInRight" data-wow-delay=".5s">
                    <li>
                        <a href="{{ route('terms') }}">
                            Terms & Condition
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('privacy') }}">
                            Privacy Policy
                        </a>
                    </li>
                </ul>

            </div>
        </div>
        <a href="#" id="scrollUp" class="scroll-icon">
            <i class="far fa-arrow-up"></i>
        </a>
    </div>
</footer>
