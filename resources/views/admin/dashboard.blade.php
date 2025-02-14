@extends('layouts.app')
@section('head')

@endsection
@section('content')
    <main class="main-content">
      <div class="position-relative iq-banner">
          @include('layouts.navbars.auth_nav')
          <div class="iq-navbar-header" style="height: 215px;">
              <div class="container-fluid iq-container">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="flex-wrap d-flex justify-content-between align-items-center">
                              <div>
                                  <h1>Hello Admin</h1>
                                  <p>Welcome to dashboard for your website to control every thing.</p>
                              </div>

                          </div>
                      </div>
                  </div>
              </div>
              <div class="iq-header-img">
                  <img src="../assets/img/top-header.png" alt="header" class="theme-color-default-img img-fluid w-100 h-100 animated-scaleX">
              </div>
          </div>
          <div class="conatiner-fluid content-inner mt-n5 py-0">
              <div class="row">
                  <div class="col-md-12 col-lg-12">
                      <div class="row row-cols-1">
                          <div class="overflow-hidden d-slider1 ">
                              <ul  class="p-0 m-0 mb-2 swiper-wrapper list-inline">
                                  <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="900">
                                      <div class="card-body">
                                          <div class="progress-widget">
                                              <div id="circle-progress-03" class="text-center circle-progress-01 circle-progress circle-progress-primary" data-min-value="0" data-max-value="100" data-value="70" data-type="percent">
                                                  <svg class="card-slie-arrow icon-24" width="24" viewBox="0 0 24 24">
                                                      <path fill="currentColor" d="M19,6.41L17.59,5L7,15.59V9H5V19H15V17H8.41L19,6.41Z" />
                                                  </svg>
                                              </div>
                                              <div class="progress-detail">
                                                  <p  class="mb-2">Orders</p>
                                                  <h4 class="counter">{{$orders->count()}}</h4>
                                              </div>
                                          </div>
                                      </div>
                                  </li>
                                  <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="700">
                                      <div class="card-body">
                                          <div class="progress-widget">
                                              <div id="circle-progress-01" class="text-center circle-progress-01 circle-progress circle-progress-primary" data-min-value="0" data-max-value="100" data-value="90" data-type="percent">
                                                  <svg class="card-slie-arrow icon-24" width="24"  viewBox="0 0 24 24">
                                                      <path fill="currentColor" d="M5,17.59L15.59,7H9V5H19V15H17V8.41L6.41,19L5,17.59Z" />
                                                  </svg>
                                              </div>
                                              <div class="progress-detail">
                                                  <p  class="mb-2">Hosting Plan</p>
                                                  <h4 class="counter">{{$hosting_plans->count()}}</h4>
                                              </div>
                                          </div>
                                      </div>
                                  </li>
                                  <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="800">
                                      <div class="card-body">
                                          <div class="progress-widget">
                                              <div id="circle-progress-02" class="text-center circle-progress-01 circle-progress circle-progress-info" data-min-value="0" data-max-value="100" data-value="80" data-type="percent">
                                                  <svg class="card-slie-arrow icon-24" width="24" viewBox="0 0 24 24">
                                                      <path fill="currentColor" d="M19,6.41L17.59,5L7,15.59V9H5V19H15V17H8.41L19,6.41Z" />
                                                  </svg>
                                              </div>
                                              <div class="progress-detail">
                                                  <p  class="mb-2">Vps Plan</p>
                                                  <h4 class="counter">{{$vps_plans->count()}}</h4>
                                              </div>
                                          </div>
                                      </div>
                                  </li>
                                  <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="1000">
                                      <div class="card-body">
                                          <div class="progress-widget">
                                              <div id="circle-progress-04" class="text-center circle-progress-01 circle-progress circle-progress-info" data-min-value="0" data-max-value="100" data-value="60" data-type="percent">
                                                  <svg class="card-slie-arrow icon-24" width="24px"  viewBox="0 0 24 24">
                                                      <path fill="currentColor" d="M5,17.59L15.59,7H9V5H19V15H17V8.41L6.41,19L5,17.59Z" />
                                                  </svg>
                                              </div>
                                              <div class="progress-detail">
                                                  <p  class="mb-2">Customers</p>
                                                  <h4 class="counter">{{$customers->count()}}</h4>
                                              </div>
                                          </div>
                                      </div>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-12 col-lg-8">
                      <div class="row">
                          <div class="col-md-12 col-xl-6">
                              <div class="card" data-aos="fade-up" data-aos-delay="900">
                                  <div class="flex-wrap card-header d-flex justify-content-between">
                                      <div class="header-title">
                                          <h4 class="card-title">Earnings</h4>
                                      </div>
                                      <div class="dropdown">
                                          <a href="#" class="text-gray dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                              This Week
                                          </a>
                                          <ul class="dropdown-menu dropdown-menu-end custom-dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                              <li><a class="dropdown-item" href="#">This Week</a></li>
                                              <li><a class="dropdown-item" href="#">This Month</a></li>
                                              <li><a class="dropdown-item" href="#">This Year</a></li>
                                          </ul>
                                      </div>
                                  </div>
                                  <div class="card-body">
                                      <div class="flex-wrap d-flex align-items-center justify-content-between">
                                          <div id="myChart" class="col-md-8 col-lg-8 myChart"></div>
                                          <div class="d-grid gap col-md-4 col-lg-4">
                                              <div class="d-flex align-items-start">
                                                  <svg class="mt-2 icon-14" xmlns="http://www.w3.org/2000/svg" width="14" viewBox="0 0 24 24" fill="#3a57e8">
                                                      <g>
                                                          <circle cx="12" cy="12" r="8" fill="#3a57e8"></circle>
                                                      </g>
                                                  </svg>
                                                  <div class="ms-3">
                                                      <span class="text-gray">Fashion</span>
                                                      <h6>251K</h6>
                                                  </div>
                                              </div>
                                              <div class="d-flex align-items-start">
                                                  <svg class="mt-2 icon-14" xmlns="http://www.w3.org/2000/svg" width="14" viewBox="0 0 24 24" fill="#4bc7d2">
                                                      <g>
                                                          <circle cx="12" cy="12" r="8" fill="#4bc7d2"></circle>
                                                      </g>
                                                  </svg>
                                                  <div class="ms-3">
                                                      <span class="text-gray">Accessories</span>
                                                      <h6>176K</h6>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-12 col-xl-6">
                              <div class="card" data-aos="fade-up" data-aos-delay="1000">
                                  <div class="flex-wrap card-header d-flex justify-content-between">
                                      <div class="header-title">
                                          <h4 class="card-title">Conversions</h4>
                                      </div>
                                      <div class="dropdown">
                                          <a href="#" class="text-gray dropdown-toggle" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                                              This Week
                                          </a>
                                          <ul class="dropdown-menu dropdown-menu-end custom-dropdown-menu-end" aria-labelledby="dropdownMenuButton3">
                                              <li><a class="dropdown-item" href="#">This Week</a></li>
                                              <li><a class="dropdown-item" href="#">This Month</a></li>
                                              <li><a class="dropdown-item" href="#">This Year</a></li>
                                          </ul>
                                      </div>
                                  </div>
                                  <div class="card-body">
                                      <div id="d-activity" class="d-activity"></div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-12 col-lg-4">
                      <div class="row">
                          <div class="col-md-12 col-lg-12 mb-3">
                              <div class="card" data-aos="fade-up" data-aos-delay="500">
                                  <div class="text-center card-body d-flex justify-content-around">
                                      <div>
                                          <h2 class="mb-2">750<small>K</small></h2>
                                          <p class="mb-0 text-gray">Website Visitors</p>
                                      </div>
                                      <hr class="hr-vertial">
                                      <div>
                                          <h2 class="mb-2">7,500</h2>
                                          <p class="mb-0 text-gray">New Customers</p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-12 col-lg-12">
                              <div class="card" data-aos="fade-up" data-aos-delay="500">
                                  <div class="text-center card-body d-flex justify-content-around">
                                      <div>
                                          <h2 class="mb-2">750<small>K</small></h2>
                                          <p class="mb-0 text-gray">Website Visitors</p>
                                      </div>
                                      <hr class="hr-vertial">
                                      <div>
                                          <h2 class="mb-2">7,500</h2>
                                          <p class="mb-0 text-gray">New Customers</p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
        @include('layouts.footers.auth_footer')
    </main>
@endsection
@section('script')

@endsection
