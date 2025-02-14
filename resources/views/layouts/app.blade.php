<!DOCTYPE html>
{{--<html lang="en">--}}
<html lang="{{ session('lang', 'en') }}" dir="{{ session('lang') == 'ar' ? 'rtl' : 'ltr' }}">
<!--<< Header Area >>-->
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="gramentheme">
    <meta name="description" content="Web hosting & WHMCS Html Template ">
    <!-- ======== Page title ============ -->
    <title>HOSTLY EGYPT </title>
    <!--<< Favcion >>-->
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.svg')}}">
    @if(auth()->user() && auth()->user()->role == 'admin')
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">
        <link rel="stylesheet" href="{{asset('assets/css/core/libs.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendor/aos/dist/aos.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/hope-ui.min.css?v=5.0.0')}}">
        <link rel="stylesheet" href="{{asset('assets/css/custom.min.css?v=5.0.0')}}">
        <link rel="stylesheet" href="{{asset('assets/css/customizer.min.css?v=5.0.0')}}">
    @else
        <!--<< Bootstrap min.css >>-->
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
        <!--<< All Min Css >>-->
        <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
        <!--<< Animate.css >>-->
        <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
        <!--<< Magnific Popup.css >>-->
        <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
        <!--<< MeanMenu.css >>-->
        <link rel="stylesheet" href="{{asset('assets/css/meanmenu.css')}}">
        <!--<< Swiper Bundle.css >>-->
        <link rel="stylesheet" href="{{asset('assets/css/swiper-bundle.min.css')}}">
        <!--<< Nice Select.css >>-->
        <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
        <!--<< Color.css >>-->
        <link rel="stylesheet" href="{{asset('assets/css/color.css')}}">
        <!--<< Main.css >>-->
        <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/index2.css')}}">
    @endif
    @yield('head')
    @livewireStyles
</head>
<body>
@if(auth()->user() && auth()->user()->role == 'admin')
@include('layouts.navbars.asidebar')
@else
    <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="spinner">
            </div>
            <div class="txt-loading">
                    <span data-text-preloader="H" class="letters-loading">
                        H
                    </span>
                <span data-text-preloader="O" class="letters-loading">
                        O
                    </span>
                <span data-text-preloader="S" class="letters-loading">
                        S
                    </span>
                <span data-text-preloader="T" class="letters-loading">
                        T
                    </span>
                <span data-text-preloader="L" class="letters-loading">
                        L
                    </span>
                <span data-text-preloader="Y" class="letters-loading">
                        Y
                    </span>

            </div>
            <p class="text-center">Loading</p>
        </div>
        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div>
    <!--<< Mouse Cursor Start >>-->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/67ad15813a842732607dfce8/1iju1o0up';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
    @include('layouts.navbars.navbar')
@endif

@yield('content')
{{--<livewire:counter />--}}
@if((auth()->user() && auth()->user()->role == 'customer') || !auth()->user())
    @include('layouts.footers.footer')
@endif
@yield('script')
@if(auth()->user() && auth()->user()->role == 'admin')
    <script src="../assets/js/core/libs.min.js"></script>
    <script src="../assets/js/core/external.min.js"></script>
    <script src="../assets/js/charts/widgetcharts.js"></script>
    <script src="../assets/js/charts/vectore-chart.js"></script>
    <script src="../assets/js/charts/dashboard.js" ></script>
    <script src="../assets/js/plugins/fslightbox.js"></script>
    <script src="../assets/js/plugins/setting.js"></script>
    <script src="../assets/js/plugins/slider-tabs.js"></script>
    <script src="../assets/js/plugins/form-wizard.js"></script>
    <script src="../assets/vendor/aos/dist/aos.js"></script>
    <script src="../assets/js/hope-ui.js" defer></script>
@else
    <!--<< All JS Plugins >>-->
    <script src="{{asset('assets/js/jquery-3.7.1.min.js')}}"></script>
    <!--<< Viewport Js >>-->
    <script src="{{asset('assets/js/viewport.jquery.js')}}"></script>
    <!--<< Bootstrap Js >>-->
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <!--<< Nice Select Js >>-->
    <script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>
    <!--<< Waypoints Js >>-->
    <script src="{{asset('assets/js/jquery.waypoints.js')}}"></script>
    <!--<< Counterup Js >>-->
    <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
    <!--<< Swiper Slider Js >>-->
    <script src="{{asset('assets/js/swiper-bundle.min.js')}}"></script>
    <!--<< MeanMenu Js >>-->
    <script src="{{asset('assets/js/jquery.meanmenu.min.js')}}"></script>
    <!--<< Magnific Popup Js >>-->
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <!--<< Wow Animation Js >>-->
    <script src="{{asset('assets/js/wow.min.js')}}"></script>
    <!--<< Main.js >>-->
    <script src="{{asset('assets/js/main.js')}}"></script>
    {{-- <script type="text/javascript" src="assets/js/main2.js"></script> --}}
    {{-- <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> --}}
    @livewireScripts
@endif
</body>
</html>
