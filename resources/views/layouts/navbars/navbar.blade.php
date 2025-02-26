<!-- Offcanvas Area Start -->
<div class="fix-area">
    <div class="offcanvas__info">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__content">
                <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                    <div class="offcanvas__logo">
                        <a href="/">
                            <img class="col-12" src="assets/img/logo/black-logo.png" alt="logo-img">
                        </a>
                    </div>
                    <div class="offcanvas__close">
                        <button>
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <p class="text d-none d-xl-block">
                    Nullam dignissim, ante scelerisque the is euismod fermentum odio sem semper the is erat, a feugiat
                    leo urna eget eros. Duis Aenean a imperdiet risus.
                </p>
                <div class="mobile-menu fix mb-3"></div>
                <div class="offcanvas__contact">
                    <h4>Contact Info</h4>
                    <ul>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon">
                                <i class="fal fa-map-marker-alt"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a target="_blank" href="#">29 AL-Arish, Al-Haram, Giza, Egypt.</a>
                            </div>
                            
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon">
                                <i class="fal fa-map-marker-alt"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a target="_blank" href="#">3049 Yanou ST, Riyadah ,Saudi Arabia.</a>
                            </div>
                            
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a href="mailto:info@hostly-eg.com"><span
                                        class="mailto:info@hostly-eg.com">info@hostly-eg.com</span></a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="fal fa-clock"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a target="_blank" href="#">Sun-Thu, 09am -05pm</a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="far fa-phone"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a href="tel:+201028887119">+201028887119</a>
                            </div>
                        </li>
                    </ul>
                    <div class="header-button mt-4">
                        <a href="{{ route('support') }}" class="theme-btn text-center">
                            Get A Quote <i class="fa-solid fa-arrow-right-long"></i>
                        </a>
                    </div>
                   {{--  <div class="social-icon d-flex align-items-center">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="offcanvas__overlay"></div>

<!-- Modal Version 1 -->
{{-- <div class="modal modal-common-wrap fade" id="exampleModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-md-flex d-grid gap-md-0 gap-5 align-items-center">
                <div class="modal-common-content">
                    <div class="box">
                        <h2>
                            welcome back!
                        </h2>
                        @if ($errors->has('message'))
                            <div class="alert alert-danger">
                                {{ $errors->first('message') }}
                            </div>
                        @endif
                        <form action="/session" method="POST" class="login-from">
                            @csrf
                            <div class="form-grp cmn-mb">
                                <input type="email" placeholder="Enter Email" name="email">
                                @error('email')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-grp">
                                <input type="password" placeholder="Enter Password" name="password">
                                @error('password')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div
                                class="d-flex forgot-inner-area cmn-mb justify-content-between gap-2 flex-wrap align-items-center">
                                <div class="form-check checkmark-inner">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                        checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Remember me
                                    </label>
                                </div>
                                <a href="#" class="forgot">
                                    Forgot Your password?
                                </a>
                            </div>
                            <button type="submit" class="theme-btn w-100">
                                <span>
                                    Log in
                                </span>
                            </button>
                        </form>
                        <span class="orting-badge">
                            Or
                        </span>
                        <div class="d-grid gap-3">
                            <a href="#" class="cmn-social">
                                <img src="assets/img/sign/google.png" alt="img">
                                Continue With Google
                            </a>
                            <a href="#" class="cmn-social">
                                <img src="assets/img/sign/fb.png" alt="img">
                                continue with facebook
                            </a>
                        </div>
                        <div class="form-check d-flex align-items-center gap-2 from-customradio">
                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                <a href="{{ route('terms') }}" style="text-decoration: underline">
                                    i accept your terms & conditions
                                </a>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-right-thumb position-relative">
                    <img src="assets/img/Computer login-rafiki.png" class="col-12" alt="img">
                    <div class="signlogin-btnwrap">
                        <button class="theme-btn" data-bs-toggle="modal"
                            data-bs-target="#exampleModal2">
                            create account
                        </button>
                        <button class="theme-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Log In
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Version 2 -->
<div class="modal modal-common-wrap fade" id="exampleModal2" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-md-flex d-grid gap-md-0 gap-5 align-items-center">
                <div class="modal-common-content">
                    <div class="box">
                        <h2>
                            Create account
                        </h2>
                        <form action="{{ route('sign_up') }}" method="POST" class="login-from">
                            @csrf
                            <div class="form-grp cmn-mb">
                                <input type="text" placeholder="Your name" name="name">
                                @error('name')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-grp cmn-mb">
                                <input type="email" placeholder="Email Address" name="email">
                                @error('email')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-grp cmn-mb">
                                <input type="number" placeholder="Phone Number" name="phone">
                                @error('phone')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-grp cmn-mb">
                                <input type="text" placeholder="Your Address" name="address">
                                @error('address')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-grp cmn-mb">
                                <input type="password" placeholder="Enter Password" name="password">
                                @error('password')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-grp">
                                <input type="password" placeholder="Enter Confirm password"
                                    name="password_confirmation">
                                @error('confirm_password')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-check d-flex align-items-center gap-2 from-customradio">
                                <input class="form-check-input" type="radio" name="accept_terms"
                                    id="accept_terms" required>
                                <label class="form-check-label" for="accept_terms">
                                    <a href="{{ route('terms') }}" style="text-decoration: underline">
                                        i accept your terms & conditions
                                    </a>
                                </label>
                            </div>
                            <div class="mt-4">
                                <button type="submit" class="theme-btn w-100">
                                    <span>
                                        Create
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-right-thumb position-relative">
                    <img src="assets/img/Sign up-rafiki.png" class="col-12" alt="img">
                    <div class="signlogin-btnwrap">
                        <button class="theme-btn " data-bs-toggle="modal"
                            data-bs-target="#exampleModal2">
                            create account
                        </button>
                        <button class="theme-btn " data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Log In
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 --}}
<!-- Search Area Start -->
<div class="search-wrap">
    <div class="search-inner">
        <i class="fas fa-times search-close" id="search-close"></i>
        <div class="search-cell">
            <form method="get">
                <div class="search-field-holder">
                    <input type="search" class="main-search-input" placeholder="Search...">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Header Section Start -->
<header class="header-section-1">
    <div class="header-top">
        <div class="container">
            <div class="header-top-wrapper">
                <ul class="contact-list">
                    <li>
                        <i class="far fa-envelope"></i>
                        <a href="mailto:info@hostly-eg.com">info@hostly-eg.com</a>
                    </li>
                    <li>
                        <i class="fa-regular fa-phone"></i>
                        <a href="tel:+20866660112">+201028887119</a>
                    </li>
                </ul>
                <p>Hostech Flash Discount: {!! request()->attributes->get('offers_header') !!}</p>
                <ul class="list">
@if(auth()->user())
                        <li><i class="fa-light fa-user"></i>
                            <a href="{{route('profile')}}">Profile</a>
                        </li>
                        @endif
                    <li>
                        @if (auth()->user())
                            <i class="fa-light fa-sign-out"></i>
                            <a href="{{ route('logout') }}">Logout</a>
                        @else
                            <i class="fa-light fa-sign-in"></i>
                            <a href="{{ route('login') }}">

                                <button class="exampleModal">
                                    Login
                                </button>
                            </a>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="header-sticky" class="header-1">
        <div class="container">
            <div class="mega-menu-wrapper">
                <div class="header-main">
                    <div class="header-left col-5 col-md-3">
                        <div class="logo " >
                            <a href="{{ route('home') }}" class="header-logo ">
                                <img class="col-9" src="assets/img/logo/white-logo.png" alt="logo-img">
                            </a>
                            <a href="{{ route('home') }}" class="header-logo-2">
                                <img class="col-9" src="assets/img/logo/black-logo.png" alt="logo-img">
                            </a>
                        </div>
                    </div>
                    <div class="header-right d-flex justify-content-end align-items-center">
                        <div class="mean__menu-wrapper">
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li class="has-dropdown active menu-thumb">
                                            <a href="{{ route('home') }}">
                                                Home

                                            </a>
                                            {{-- <ul class="submenu has-homemenu has-menu-home">
                                                <li class="border-none">
                                                    <div class="homemenu-items">
                                                        <div class="homemenu-list">
                                                            <div class="icon">
                                                                <img src="assets/img/menu-icon/web-host.png"
                                                                    alt="img">
                                                            </div>
                                                            <div class="content">
                                                                <h6><a href="{{ route('home') }}">Web Hosting</a></h6>
                                                                <p>
                                                                    Powerful bare metal server
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="homemenu-list">
                                                            <div class="icon">
                                                                <img src="assets/img/menu-icon/host-service.png"
                                                                    alt="img">
                                                            </div>
                                                            <div class="content">
                                                                <h6><a href="{{ route('home') }}">Hosting Services</a>
                                                                </h6>
                                                                <p>
                                                                    Flexible virtual machine
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="homemenu-list">
                                                            <div class="icon">
                                                                <img src="assets/img/menu-icon/host-solut.png"
                                                                    alt="img">
                                                            </div>
                                                            <div class="content">
                                                                <h6><a href="{{ route('home') }}">Hosting
                                                                        Solutions</a></h6>
                                                                <p>
                                                                    Powerful Hosting solutions
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="homemenu-list mb-0">
                                                            <div class="icon">
                                                                <img src="assets/img/menu-icon/host-agen.png"
                                                                    alt="img">
                                                            </div>
                                                            <div class="content">
                                                                <h6><a href="{{ route('home') }}">Hosting Agency</a>
                                                                </h6>
                                                                <p>
                                                                    Big hosting agency
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul> --}}
                                        </li>
                                        <li class="has-dropdown active d-xl-none">
                                            <a href="{{ route('home') }}" class="border-none">
                                                Home

                                            </a>
                                            {{-- <ul class="submenu">
                                                <li><a href="{{ route('home') }}">Web Hosting</a></li>
                                                <li><a href="{{ route('home') }}">Hosting Services</a></li>
                                                <li><a href="{{ route('home') }}">Hosting Solutions</a></li>
                                                <li><a href="{{ route('home') }}">Hosting Agency</a></li>
                                            </ul> --}}
                                        </li>
                                        <li class="has-dropdown menu-thumb">
                                            <a href="/">
                                                Pages
                                                <i class="fas fa-angle-down"></i>
                                            </a>
                                            <ul class="submenu has-homemenu has-menu-hosting">
                                                <li class="border-none">
                                                    <div class="homemenu-items">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="homemenu-list">
                                                                    <div class="icon">
                                                                        <img src="assets/img/menu-icon/about.png"
                                                                            alt="img">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h6><a href="{{ route('about') }}">About
                                                                                Us</a></h6>
                                                                        <p>
                                                                            About hostech
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{--      <div class="col-lg-4">
                                                                <div class="homemenu-list">
                                                                    <div class="icon">
                                                                        <img src="assets/img/menu-icon/black-friday.png"
                                                                            alt="img">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h6><a href="{{ route('black_friday') }}">Black
                                                                                Friday</a></h6>
                                                                        <p>
                                                                            Excellent Offer
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div> --}}
                                                            <div class="col-lg-6">
                                                                <div class="homemenu-list">
                                                                    <div class="icon">
                                                                        <img src="assets/img/menu-icon/affiliate.png"
                                                                            alt="img">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h6><a
                                                                                href="{{ route('affiliate') }}">Affiliate</a>
                                                                        </h6>
                                                                        <p>
                                                                            Best Provider
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="homemenu-list">
                                                                    <div class="icon">
                                                                        <img src="assets/img/menu-icon/pricing.png"
                                                                            alt="img">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h6><a
                                                                                href="{{ route('pricing') }}">Pricing</a>
                                                                        </h6>
                                                                        <p>
                                                                            Flexible Plans
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{--           <div class="col-lg-4">
                                                                <div class="homemenu-list">
                                                                    <div class="icon">
                                                                        <img src="assets/img/menu-icon/pricing.png"
                                                                            alt="img">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h6><a href="{{ route('pricing_2') }}">Pricing
                                                                                Package</a></h6>
                                                                        <p>
                                                                            Flexible Plans
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="homemenu-list">
                                                                    <div class="icon">
                                                                        <img src="assets/img/menu-icon/data-center.png"
                                                                            alt="img">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h6><a href="#">Data Center</a></h6>
                                                                        <p>
                                                                            Worldwide Data Center
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div> --}}
                                                            <div class="col-lg-6">
                                                                <div class="homemenu-list">
                                                                    <div class="icon">
                                                                        <img src="assets/img/menu-icon/service.png"
                                                                            alt="img">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h6><a
                                                                                href="{{ route('service') }}">Services</a>
                                                                        </h6>
                                                                        <p>
                                                                            Best Services Provider
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="homemenu-list">
                                                                    <div class="icon">
                                                                        <img src="assets/img/menu-icon/team.png"
                                                                            alt="img">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h6><a href="{{ route('team') }}">Team</a>
                                                                        </h6>
                                                                        <p>
                                                                            Experts Member
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{--      <div class="col-lg-4">
                                                                <div class="homemenu-list">
                                                                    <div class="icon">
                                                                        <img src="assets/img/menu-icon/team.png"
                                                                            alt="img">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h6><a href="{{ route('team_details') }}">Team
                                                                                Details</a></h6>
                                                                        <p>
                                                                            Experts Member
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="homemenu-list">
                                                                    <div class="icon">
                                                                        <img src="assets/img/menu-icon/error.png"
                                                                            alt="img">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h6><a href="{{ route('Error404') }}">Error
                                                                                Pages</a></h6>
                                                                        <p>
                                                                            Back to Home
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div> --}}
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown active d-xl-none">
                                            <a href="/" class="border-none">
                                                Pages
                                                <i class="fas fa-angle-down"></i>
                                            </a>
                                            <ul class="submenu">
                                                <li><a href="{{ route('about') }}">About Us</a></li>
                                                <li><a href="{{ route('pricing') }}">Pricing</a></li>
                                                <li><a href="{{ route('service') }}">Services</a></li>
                                                <li><a href="{{ route('team') }}">Team</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown menu-thumb">
                                            <a href="{{ route('home') }}">
                                                Hosting
                                                <i class="fas fa-angle-down"></i>
                                            </a>
                                            <ul class="submenu has-homemenu has-menu-hosting">
                                                <li class="border-none">
                                                    <div class="homemenu-items">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="homemenu-list">
                                                                    <div class="icon">
                                                                        <img src="assets/img/menu-icon/share-host.png"
                                                                            alt="img">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h6><a href="{{ route('share_hosting') }}">Share
                                                                                Hosting</a></h6>
                                                                        <p>
                                                                            About hostech
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="homemenu-list">
                                                                    <div class="icon">
                                                                        <img src="assets/img/menu-icon/reseller-shost.png"
                                                                            alt="img">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h6><a href="{{ route('reseller_hosting') }}">Reseller
                                                                                Hosting</a></h6>
                                                                        <p>
                                                                            Excellent Offer
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="homemenu-list">
                                                                    <div class="icon">
                                                                        <img src="assets/img/menu-icon/dedicated-host.png"
                                                                            alt="img">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h6><a href="{{ route('coming_soon') }}">Dedicated
                                                                                Hosting</a></h6>
                                                                        <p>
                                                                            Flexible Plans
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="homemenu-list">
                                                                    <div class="icon">
                                                                        <img src="assets/img/menu-icon/vps-host.png"
                                                                            alt="img">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h6><a href="{{ route('vps_hosting') }}">VPS
                                                                                Hosting</a></h6>
                                                                        <p>
                                                                            Flexible Plans
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- <div class="col-lg-6">
                                                                <div class="homemenu-list">
                                                                    <div class="icon">
                                                                        <img src="assets/img/menu-icon/wordpress-host.png"
                                                                            alt="img">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h6><a href="{{ route('coming_soon') }}">WordPress
                                                                                Hosting</a></h6>
                                                                        <p>
                                                                            Best Provider
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div> --}}
                                                            <div class="col-lg-6">
                                                                <div class="homemenu-list">
                                                                    <div class="icon">
                                                                        <img src="assets/img/menu-icon/cloud-host.png"
                                                                            alt="img">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h6><a href="{{ route('coming_soon') }}">Cloud
                                                                                Hosting</a></h6>
                                                                        <p>
                                                                            Worldwide Data Center
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown active d-xl-none">
                                            <a class="border-none">
                                                Hosting
                                                <i class="fas fa-angle-down"></i>
                                            </a>
                                            <ul class="submenu">
                                                <li><a href="{{ route('share_hosting') }}">Share Hosting</a></li>
                                                <li><a href="{{ route('reseller_hosting') }}">Reseller Hosting</a>
                                                </li>
                                                <li><a href="{{ route('coming_soon') }}">Dedicated Hosting</a></li>
                                                <li><a href="{{ route('vps_hosting') }}">VPS Hosting</a></li>
                                                {{-- <li><a href="{{ route('coming_soon') }}">WordPress Hosting</a></li> --}}
                                                <li><a href="{{ route('coming_soon') }}">Cloud Hosting</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{ route('doming') }}">Doming</a>
                                        </li>
                                        <li>
                                            <a>
                                                Help Center
                                                <i class="fas fa-angle-down"></i>
                                            </a>
                                            <ul class="submenu">
                                                <li><a href="{{ route('faq') }}">Faq</a></li>
                                                <li><a href="{{ route('support') }}">Support</a></li>
                                                <li><a href="{{ route('terms') }}">Terms Of Use</a></li>
                                                <li><a href="{{ route('privacy') }}">Privecy Policy</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        {{-- <a href="#0" class="search-trigger search-icon"><i class="fal fa-search"></i></a> --}}
                        <div class="header__hamburger d-xl-block my-auto">
                            <div class="sidebar__toggle">
                                <i class="fas fa-bars"></i>
                            </div>
                        </div>

                        {{-- <div id="google_translate_element"></div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
