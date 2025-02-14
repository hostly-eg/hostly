<aside class="sidebar sidebar-default sidebar-white sidebar-base navs-rounded-all ">
    <div class="sidebar-header d-flex align-items-center justify-content-start">
        <a href="../dashboard/index.html" class="navbar-brand">
            <img src="{{  asset('assets/img/favicon.svg')}}">
            <h4 class="logo-title">Hostly EG</h4>
        </a>
        <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
            <i class="icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.25 12.2744L19.25 12.2744" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M10.2998 18.2988L4.2498 12.2748L10.2998 6.24976" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </i>
        </div>
    </div>
    <div class="sidebar-body pt-0 data-scrollbar">
        <div class="sidebar-list">
            <!-- Sidebar Menu Start -->
            <ul class="navbar-nav iq-main-menu" id="sidebar-menu">
                <li class="nav-item static-item">
                    <a class="nav-link static-item disabled" href="#" tabindex="-1">
                        <span class="default-icon">Home</span>
                        <span class="mini-icon">-</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (Str::contains(Request::path(), 'dashboard') ? 'active' : '') }}" aria-current="page" href="{{route('dashboard')}}">
                        <i class="icon">
                            <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-20">
                                <path opacity="0.4" d="M16.0756 2H19.4616C20.8639 2 22.0001 3.14585 22.0001 4.55996V7.97452C22.0001 9.38864 20.8639 10.5345 19.4616 10.5345H16.0756C14.6734 10.5345 13.5371 9.38864 13.5371 7.97452V4.55996C13.5371 3.14585 14.6734 2 16.0756 2Z" fill="currentColor"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.53852 2H7.92449C9.32676 2 10.463 3.14585 10.463 4.55996V7.97452C10.463 9.38864 9.32676 10.5345 7.92449 10.5345H4.53852C3.13626 10.5345 2 9.38864 2 7.97452V4.55996C2 3.14585 3.13626 2 4.53852 2ZM4.53852 13.4655H7.92449C9.32676 13.4655 10.463 14.6114 10.463 16.0255V19.44C10.463 20.8532 9.32676 22 7.92449 22H4.53852C3.13626 22 2 20.8532 2 19.44V16.0255C2 14.6114 3.13626 13.4655 4.53852 13.4655ZM19.4615 13.4655H16.0755C14.6732 13.4655 13.537 14.6114 13.537 16.0255V19.44C13.537 20.8532 14.6732 22 16.0755 22H19.4615C20.8637 22 22 20.8532 22 19.44V16.0255C22 14.6114 20.8637 13.4655 19.4615 13.4655Z" fill="currentColor"></path>
                            </svg>
                        </i>
                        <span class="item-name">Dashboard</span>
                    </a>
                </li>
                <li><hr class="hr-horizontal"></li>
                <li class="nav-item static-item">
                    <a class="nav-link static-item disabled" href="#" tabindex="-1">
                        <span class="default-icon">Pages</span>
                        <span class="mini-icon">-</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (Str::contains(Request::path(), 'plan') ? 'active' : '') }}" data-bs-toggle="collapse" href="#Plans" role="button" aria-expanded="false" aria-controls="Plans">
                        <i class="icon" data-bs-toggle="tooltip" title="Appointment" data-bs-placement="right">
                            <svg width="20" class="icon-20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3 16.87V9.25699H21V16.931C21 20.07 19.0241 22 15.8628 22H8.12733C4.99561 22 3 20.03 3 16.87ZM7.95938 14.41C7.50494 14.431 7.12953 14.07 7.10977 13.611C7.10977 13.151 7.46542 12.771 7.91987 12.75C8.36443 12.75 8.72997 13.101 8.73985 13.55C8.7596 14.011 8.40395 14.391 7.95938 14.41ZM12.0198 14.41C11.5653 14.431 11.1899 14.07 11.1701 13.611C11.1701 13.151 11.5258 12.771 11.9802 12.75C12.4248 12.75 12.7903 13.101 12.8002 13.55C12.82 14.011 12.4643 14.391 12.0198 14.41ZM16.0505 18.09C15.596 18.08 15.2305 17.7 15.2305 17.24C15.2206 16.78 15.5862 16.401 16.0406 16.391H16.0505C16.5148 16.391 16.8902 16.771 16.8902 17.24C16.8902 17.71 16.5148 18.09 16.0505 18.09ZM11.1701 17.24C11.1899 17.7 11.5653 18.061 12.0198 18.04C12.4643 18.021 12.82 17.641 12.8002 17.181C12.7903 16.731 12.4248 16.38 11.9802 16.38C11.5258 16.401 11.1701 16.78 11.1701 17.24ZM7.09989 17.24C7.11965 17.7 7.49506 18.061 7.94951 18.04C8.39407 18.021 8.74973 17.641 8.72997 17.181C8.72009 16.731 8.35456 16.38 7.90999 16.38C7.45554 16.401 7.09989 16.78 7.09989 17.24ZM15.2404 13.601C15.2404 13.141 15.596 12.771 16.0505 12.761C16.4951 12.761 16.8507 13.12 16.8705 13.561C16.8804 14.021 16.5247 14.401 16.0801 14.41C15.6257 14.42 15.2503 14.07 15.2404 13.611V13.601Z" fill="currentColor"/>
                                <path opacity="0.4" d="M3.00336 9.2569C3.0162 8.6699 3.0656 7.5049 3.15846 7.1299C3.63267 5.0209 5.24298 3.6809 7.54485 3.4899H16.4559C18.738 3.6909 20.3681 5.0399 20.8423 7.1299C20.9342 7.4949 20.9836 8.6689 20.9964 9.2569H3.00336Z" fill="currentColor"/>
                                <path d="M8.30486 6.59C8.73955 6.59 9.06556 6.261 9.06556 5.82V2.771C9.06556 2.33 8.73955 2 8.30486 2C7.87017 2 7.54416 2.33 7.54416 2.771V5.82C7.54416 6.261 7.87017 6.59 8.30486 6.59Z" fill="currentColor"/>
                                <path d="M15.6949 6.59C16.1197 6.59 16.4556 6.261 16.4556 5.82V2.771C16.4556 2.33 16.1197 2 15.6949 2C15.2603 2 14.9342 2.33 14.9342 2.771V5.82C14.9342 6.261 15.2603 6.59 15.6949 6.59Z" fill="currentColor"/>
                            </svg>
                        </i>
                        <span class="item-name">Plans</span>
                        <i class="right-icon">
                            <svg class="icon-18" xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </i>
                    </a>
                    <ul class="sub-nav collapse {{ (Str::contains(Request::path(), 'plan') ? 'show' : '') }}" id="Plans" data-bs-parent="#sidebar-menu">
                        <li class="nav-item">
                            <a class="nav-link {{ (Str::contains(Request::path(), 'plan-list') ? 'active' : '') }}" href="{{route('plans')}}">
                                <i class="icon">
                                    <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                        <g>
                                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                        </g>
                                    </svg>
                                </i>
                                <i class="sidenav-mini-icon"> P </i>
                                <span class="item-name"> Plan List </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ (Str::contains(Request::path(), 'new-plan') ? 'active' : '') }}" href="{{route('new_plan')}}">
                                <i class="icon">
                                    <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                        <g>
                                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                        </g>
                                    </svg>
                                </i>
                                <i class="sidenav-mini-icon"> N-P </i>
                                <span class="item-name"> New Plan </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (Str::contains(Request::path(), 'domains') ? 'active' : '') }}" data-bs-toggle="collapse" href="#domains" role="button" aria-expanded="false" aria-controls="domains">
                        <svg fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-20" width="20" height="20" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M3.5 10.3178C3.5 5.71789 7.34388 2 11.9934 2C16.6561 2 20.5 5.71789 20.5 10.3178C20.5 12.6357 19.657 14.7876 18.2695 16.6116C16.7388 18.6235 14.8522 20.3765 12.7285 21.7524C12.2425 22.0704 11.8039 22.0944 11.2704 21.7524C9.13474 20.3765 7.24809 18.6235 5.7305 16.6116C4.34198 14.7876 3.5 12.6357 3.5 10.3178ZM9.19423 10.5768C9.19423 12.1177 10.4517 13.3297 11.9934 13.3297C13.5362 13.3297 14.8058 12.1177 14.8058 10.5768C14.8058 9.0478 13.5362 7.77683 11.9934 7.77683C10.4517 7.77683 9.19423 9.0478 9.19423 10.5768Z" fill="currentColor"></path></svg>
                        <span class="item-name">Domain</span>
                        <i class="right-icon">
                            <svg class="icon-18" xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </i>
                    </a>
                    <ul class="sub-nav collapse {{ (Str::contains(Request::path(), 'domains') ? 'show' : '') }}" id="domains" data-bs-parent="#sidebar-menu">
                        <li class="nav-item">
                            <a class="nav-link {{ (Str::contains(Request::path(), 'domains-list') ? 'active' : '') }}" href="{{route('domains')}}">
                                <i class="icon">
                                    <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                        <g>
                                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                        </g>
                                    </svg>
                                </i>
                                <i class="sidenav-mini-icon"> D </i>
                                <span class="item-name"> Domain List </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ (Str::contains(Request::path(), 'new-domains') ? 'active' : '') }}" href="{{route('new_domain')}}">
                                <i class="icon">
                                    <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                        <g>
                                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                        </g>
                                    </svg>
                                </i>
                                <i class="sidenav-mini-icon"> N-D </i>
                                <span class="item-name"> New Domain </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (Str::contains(Request::path(), 'vps') ? 'active' : '') }}" data-bs-toggle="collapse" href="#vps" role="button" aria-expanded="false" aria-controls="vps">
                        <svg fill="none" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.75 1C12.75 0.585786 12.4142 0.25 12 0.25C11.5858 0.25 11.25 0.585786 11.25 1V4.03081C6.63035 4.41192 3 8.282 3 13C3 17.9706 7.02944 22 12 22C16.9706 22 21 17.9706 21 13C21 8.282 17.3696 4.41192 12.75 4.03081V1ZM12.75 4.03081C12.5027 4.0104 12.2526 4 12 4C11.7474 4 11.4973 4.0104 11.25 4.03081V15C11.25 15.4142 11.5858 15.75 12 15.75C12.4142 15.75 12.75 15.4142 12.75 15V4.03081Z" fill="currentColor"></path>
                        </svg>
                        <span class="item-name">Vps</span>
                        <i class="right-icon">
                            <svg class="icon-18" xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </i>
                    </a>
                    <ul class="sub-nav collapse {{ (Str::contains(Request::path(), 'vps') ? 'show' : '') }}" id="vps" data-bs-parent="#sidebar-menu">
                        <li class="nav-item">
                            <a class="nav-link {{ (Str::contains(Request::path(), 'vps-list') ? 'active' : '') }}" href="{{route('vps')}}">
                                <i class="icon">
                                    <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                        <g>
                                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                        </g>
                                    </svg>
                                </i>
                                <i class="sidenav-mini-icon"> V </i>
                                <span class="item-name"> Vps List </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ (Str::contains(Request::path(), 'new-vps') ? 'active' : '') }}" href="{{route('new_vps')}}">
                                <i class="icon">
                                    <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                        <g>
                                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                        </g>
                                    </svg>
                                </i>
                                <i class="sidenav-mini-icon"> N-V </i>
                                <span class="item-name"> New Vps </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (Str::contains(Request::path(), 'code') ? 'active' : '') }}" data-bs-toggle="collapse" href="#Coupons" role="button" aria-expanded="false" aria-controls="Coupons">
                        <i class="icon">
                            <svg width="20" class="icon-20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.4" d="M11.7761 21.8374C9.49311 20.4273 7.37081 18.7645 5.44807 16.8796C4.09069 15.5338 3.05404 13.8905 2.41735 12.0753C1.27971 8.53523 2.60399 4.48948 6.30129 3.2884C8.2528 2.67553 10.3752 3.05175 12.0072 4.29983C13.6398 3.05315 15.7616 2.67705 17.7132 3.2884C21.4105 4.48948 22.7436 8.53523 21.606 12.0753C20.9745 13.8888 19.944 15.5319 18.5931 16.8796C16.6686 18.7625 14.5465 20.4251 12.265 21.8374L12.0161 22L11.7761 21.8374Z" fill="currentColor"></path>
                                <path d="M12.0109 22.0001L11.776 21.8375C9.49013 20.4275 7.36487 18.7648 5.43902 16.8797C4.0752 15.5357 3.03238 13.8923 2.39052 12.0754C1.26177 8.53532 2.58605 4.48957 6.28335 3.28849C8.23486 2.67562 10.3853 3.05213 12.0109 4.31067V22.0001Z" fill="currentColor"></path>
                                <path d="M18.2304 9.99922C18.0296 9.98629 17.8425 9.8859 17.7131 9.72157C17.5836 9.55723 17.5232 9.3434 17.5459 9.13016C17.5677 8.4278 17.168 7.78851 16.5517 7.53977C16.1609 7.43309 15.9243 7.00987 16.022 6.59249C16.1148 6.18182 16.4993 5.92647 16.8858 6.0189C16.9346 6.027 16.9816 6.04468 17.0244 6.07105C18.2601 6.54658 19.0601 7.82641 18.9965 9.22576C18.9944 9.43785 18.9117 9.63998 18.7673 9.78581C18.6229 9.93164 18.4291 10.0087 18.2304 9.99922Z" fill="currentColor"></path>
                            </svg>
                        </i>
                        <span class="item-name">Coupons</span>
                        <i class="right-icon">
                            <svg class="icon-18" xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </i>
                    </a>
                    <ul class="sub-nav collapse {{ (Str::contains(Request::path(), 'code') ? 'show' : '') }}" id="Coupons" data-bs-parent="#sidebar-menu">
                        <li class="nav-item">
                            <a class="nav-link {{ (Str::contains(Request::path(), 'code-list') ? 'active' : '') }}" href="{{route('code_list')}}">
                                <i class="icon">
                                    <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                        <g>
                                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                        </g>
                                    </svg>
                                </i>
                                <i class="sidenav-mini-icon"> C </i>
                                <span class="item-name"> Coupon List </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ (Str::contains(Request::path(), 'new-code') ? 'active' : '') }}" href="{{route('new_code')}}">
                                <i class="icon">
                                    <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                        <g>
                                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                        </g>
                                    </svg>
                                </i>
                                <i class="sidenav-mini-icon"> N-C </i>
                                <span class="item-name"> New Coupon </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (Str::contains(Request::path(), 'order') ? 'active' : '') }}" data-bs-toggle="collapse" href="#Orders" role="button" aria-expanded="false" aria-controls="Orders">
                        <i class="icon">
                            <svg width="20" class="icon-20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.4" d="M16.6203 22H7.3797C4.68923 22 2.5 19.8311 2.5 17.1646V11.8354C2.5 9.16894 4.68923 7 7.3797 7H16.6203C19.3108 7 21.5 9.16894 21.5 11.8354V17.1646C21.5 19.8311 19.3108 22 16.6203 22Z" fill="currentColor"></path>
                                <path d="M15.7551 10C15.344 10 15.0103 9.67634 15.0103 9.27754V6.35689C15.0103 4.75111 13.6635 3.44491 12.0089 3.44491C11.2472 3.44491 10.4477 3.7416 9.87861 4.28778C9.30854 4.83588 8.99272 5.56508 8.98974 6.34341V9.27754C8.98974 9.67634 8.65604 10 8.24487 10C7.8337 10 7.5 9.67634 7.5 9.27754V6.35689C7.50497 5.17303 7.97771 4.08067 8.82984 3.26285C9.68098 2.44311 10.7814 2.03179 12.0119 2C14.4849 2 16.5 3.95449 16.5 6.35689V9.27754C16.5 9.67634 16.1663 10 15.7551 10Z" fill="currentColor"></path>
                            </svg>
                        </i>
                        <span class="item-name">Orders</span>
                        <i class="right-icon">
                            <svg class="icon-18" xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </i>
                    </a>
                    <ul class="sub-nav collapse {{ (Str::contains(Request::path(), 'order') ? 'show' : '') }}" id="Orders" data-bs-parent="#sidebar-menu">
                        <li class="nav-item">
                            <a class="nav-link {{ (Str::contains(Request::path(), 'orders.blade.php') ? 'active' : '') }}" href="{{route('orders')}}">
                                <i class="icon">
                                    <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                        <g>
                                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                        </g>
                                    </svg>
                                </i>
                                <i class="sidenav-mini-icon"> O </i>
                                <span class="item-name"> Orders </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ (Str::contains(Request::path(), 'order-list') ? 'active' : '') }}" href="{{route('order_list')}}">
                                <i class="icon">
                                    <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                        <g>
                                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                        </g>
                                    </svg>
                                </i>
                                <i class="sidenav-mini-icon"> N-O </i>
                                <span class="item-name"> Order List </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (Str::contains(Request::path(), 'customers') ? 'active' : '') }}" aria-current="page" href="{{route('customers')}}">
                        <i class="icon" data-bs-toggle="tooltip" title="Users" data-bs-placement="right">
                            <svg width="20" class="icon-20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.9488 14.54C8.49884 14.54 5.58789 15.1038 5.58789 17.2795C5.58789 19.4562 8.51765 20.0001 11.9488 20.0001C15.3988 20.0001 18.3098 19.4364 18.3098 17.2606C18.3098 15.084 15.38 14.54 11.9488 14.54Z" fill="currentColor"></path>
                                <path opacity="0.4" d="M11.949 12.467C14.2851 12.467 16.1583 10.5831 16.1583 8.23351C16.1583 5.88306 14.2851 4 11.949 4C9.61293 4 7.73975 5.88306 7.73975 8.23351C7.73975 10.5831 9.61293 12.467 11.949 12.467Z" fill="currentColor"></path>
                                <path opacity="0.4" d="M21.0881 9.21923C21.6925 6.84176 19.9205 4.70654 17.664 4.70654C17.4187 4.70654 17.1841 4.73356 16.9549 4.77949C16.9244 4.78669 16.8904 4.802 16.8725 4.82902C16.8519 4.86324 16.8671 4.90917 16.8895 4.93889C17.5673 5.89528 17.9568 7.0597 17.9568 8.30967C17.9568 9.50741 17.5996 10.6241 16.9728 11.5508C16.9083 11.6462 16.9656 11.775 17.0793 11.7948C17.2369 11.8227 17.3981 11.8371 17.5629 11.8416C19.2059 11.8849 20.6807 10.8213 21.0881 9.21923Z" fill="currentColor"></path>
                                <path d="M22.8094 14.817C22.5086 14.1722 21.7824 13.73 20.6783 13.513C20.1572 13.3851 18.747 13.205 17.4352 13.2293C17.4155 13.232 17.4048 13.2455 17.403 13.2545C17.4003 13.2671 17.4057 13.2887 17.4316 13.3022C18.0378 13.6039 20.3811 14.916 20.0865 17.6834C20.074 17.8032 20.1698 17.9068 20.2888 17.8888C20.8655 17.8059 22.3492 17.4853 22.8094 16.4866C23.0637 15.9589 23.0637 15.3456 22.8094 14.817Z" fill="currentColor"></path>
                                <path opacity="0.4" d="M7.04459 4.77973C6.81626 4.7329 6.58077 4.70679 6.33543 4.70679C4.07901 4.70679 2.30701 6.84201 2.9123 9.21947C3.31882 10.8216 4.79355 11.8851 6.43661 11.8419C6.60136 11.8374 6.76343 11.8221 6.92013 11.7951C7.03384 11.7753 7.09115 11.6465 7.02668 11.551C6.3999 10.6234 6.04263 9.50765 6.04263 8.30991C6.04263 7.05904 6.43303 5.89462 7.11085 4.93913C7.13234 4.90941 7.14845 4.86348 7.12696 4.82926C7.10906 4.80135 7.07593 4.78694 7.04459 4.77973Z" fill="currentColor"></path>
                                <path d="M3.32156 13.5127C2.21752 13.7297 1.49225 14.1719 1.19139 14.8167C0.936203 15.3453 0.936203 15.9586 1.19139 16.4872C1.65163 17.4851 3.13531 17.8066 3.71195 17.8885C3.83104 17.9065 3.92595 17.8038 3.91342 17.6832C3.61883 14.9167 5.9621 13.6046 6.56918 13.3029C6.59425 13.2885 6.59962 13.2677 6.59694 13.2542C6.59515 13.2452 6.5853 13.2317 6.5656 13.2299C5.25294 13.2047 3.84358 13.3848 3.32156 13.5127Z" fill="currentColor"></path>
                            </svg>
                        </i>
                        <span class="item-name">Customers</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (Str::contains(Request::path(), 'offers-header') ? 'active' : '') }}" data-bs-toggle="collapse" href="#offers-header" role="button" aria-expanded="false" aria-controls="offers-header">
                        <i class="right-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" viewBox="0 0 433.961 433.961" xml:space="preserve">
                                <g>
                                    <path d="M166.362,164.256c-6.652-5.561-16.232-4.853-21.848,1.012c-1.426,0.898-2.81,1.911-3.934,3.273   c-5.876,7.121-4.098,18.236,2.754,24.053C161.142,207.712,184.21,179.175,166.362,164.256z"/>
                                    <path d="M271.025,230.208c-1.112,0.154-2.158,0.503-3.204,0.849c-0.345,0.061-0.678,0.178-1.023,0.271   c-0.027,0.012-0.058,0.019-0.085,0.03c-3.777,1.057-7.353,3.951-9.358,7.973c-0.009,0.015-0.004,0.031-0.014,0.046   c-2.994,4.971-3.666,11.197-0.396,16.869c0.174,0.303,0.436,0.512,0.628,0.8c2.211,4.721,5.922,8.759,11.006,10.641   c11.87,4.391,25.442-3.255,26.639-16.189C296.44,238.324,283.46,228.489,271.025,230.208z"/>
                                    <path d="M430.9,186.517c2.399-3.358,0.387-7.897-2.609-9.952c-11.774-8.072-29.615-17.682-45.254-20.936   c10.21-10.754,18.758-24.241,27.518-35.667c2.901-3.783-1.039-9.529-5.374-9.361c-7.976,0.308-15.957,0.555-23.928,0.966   c-7.531,0.388-15.91,1.977-23.346,0.517c-0.565-0.111-1.076-0.044-1.604-0.034c4.512-11.851,8.505-23.941,12.606-35.932   c2.102-6.15,5.733-15.511-2.468-19.109c-7.698-3.38-22.116,3.728-29.471,5.893c-6.136,1.807-12.277,3.854-18.369,6.014   c-1.033,0.27-2.062,0.541-3.093,0.811c1.507-15.139,2.098-30.348,1.211-45.567c-0.25-4.286-5.269-8.345-9.387-5.388   c-13.89,9.982-27.862,20.2-41.029,31.194c-4.819-15.143-10.132-30.177-15.387-45.132c-1.409-4.009-7.516-6.98-10.724-2.832   c-7.972,10.301-18.38,21.214-25.433,32.914c-8.332-11.934-19.085-22.988-28.485-32.77c-3.634-3.779-9.89-1.778-11.345,2.994   c-5.059,16.608-11.918,32.259-18.984,48.036c-3.485-2.927-7.035-5.804-10.306-8.796c-8.032-7.345-15.794-14.976-23.454-22.706   c-2.621-2.644-8.326-2.535-10.008,1.289c-4.672,10.64-3.177,23.02-2.341,34.378c0.316,4.304,0.347,10.025,1.039,15.513   c-12.926-4.998-26.006-9.678-38.888-14.562c-5.05-1.913-9.367,3.704-8.273,8.271c3.805,15.862,7.198,32.156,12.651,47.613   c-15.207-1.118-30.225-2.25-45.341-5.328c-5.315-1.082-10.795,4.547-7.478,9.724c7.921,12.349,16.566,25.532,26.627,36.982   c-4.399,1.662-8.693,3.745-12.882,5.568c-10.779,4.691-21.31,9.882-31.66,15.454c-5.179,2.789-4.494,9.961,0,12.908   c11.405,7.479,22.445,15.473,33.52,23.415c-11.231,8.982-22.236,18.229-33.836,26.758c-4.641,3.413-4.228,10.421,1.608,12.314   c9.106,2.954,18.157,6.066,27.114,9.445c5.038,1.9,10.075,4.268,15.183,6.299c-9.091,12.469-16.989,25.883-25.675,38.614   c-3.046,4.461,1.014,10.471,6.011,10.477c15.011,0.019,29.991,0.519,44.978,1.016c-3.381,13.788-6.416,27.669-9.892,41.437   c-1.206,4.765,3.391,10.561,8.597,8.6c9.866-3.718,19.732-7.434,29.6-11.152c2.839-1.07,6.697-2.025,10.368-3.314   c-2.31,16.337-1.896,33.52-3.342,49.779c-0.392,4.427,4.543,7.384,8.401,6.399c9.607-2.456,16.264-9.595,24.233-15.133   c5.307-3.686,11.561-6.567,17.194-10.063c3.578,14.977,9.709,29.851,13.639,44.552c1.682,6.304,9.598,6.486,12.984,1.697   c9.118-12.901,19.155-26.031,27.128-39.795c2.138,3.431,4.443,6.775,6.61,10.11c5.64,8.676,11.302,17.356,17.198,25.86   c2.721,3.927,9.602,5.099,12.045,0c6.074-12.683,11.712-25.714,16.999-38.841c3.311,3.661,6.732,7.138,10.06,10.1   c7.567,6.736,20.669,19.405,31.482,16.334c1.927-0.546,2.986-2.036,3.629-3.699c0.714-0.788,1.269-1.675,1.433-2.687   c2.867-17.58,5.188-35.734,5.017-53.647c5.187,2.663,10.764,4.804,16.012,6.875c9.934,3.921,19.915,7.722,29.874,11.575   c4.601,1.781,10.114-3.71,8.32-8.32c-3.65-9.371-7.337-18.677-10.317-28.292c-1.653-5.33-2.926-10.856-4.501-16.253l-0.34-4.626   c15.323,1.623,31.489,0.63,46.574,0.85c5.202,0.076,9.073-6.145,6.123-10.67c-7.596-11.662-14.967-25.865-24.271-37.151   c4.303-1.296,8.542-3.035,12.66-4.434c8.951-3.043,17.819-6.288,26.692-9.547c5.838-2.145,7.604-10.158,1.778-13.607   c-11.776-6.974-22.718-14.758-33.598-22.785C406.765,209.243,421.629,199.489,430.9,186.517z M139.49,223.502   c-3.415-1.653-6.861-3.819-10.361-6.933c-25.321-22.546-22.803-67.639,11.554-79.399c31.94-10.934,68.499,10.058,61.131,47.067   C195.664,215.121,166.665,224.006,139.49,223.502z M182.891,293.879c-7.434-0.236-14.949,0.287-22.27,0.892   c-4.311,0.356-8.894,0.662-13.415,1.258c40.837-51.728,72.055-108.062,105.152-164.243c6.096-0.35,12.175-0.884,18.276-1.585   C234.957,179.681,205.364,238.656,182.891,293.879z M273.054,294.853c-10.969,0.817-20.664-0.961-28.362-5.711   c-18.271-18.604-22.789-48.865-3.368-70.01c21.879-23.824,61.167-18.279,75.303,10.661   C331.913,261.085,304.676,292.496,273.054,294.853z"/>
                                    <path style="stroke:#E71D73;stroke-width:0;stroke-linecap:round;stroke-linejoin:round;" d="M269.77,372.764   c0.058,0,0.058-0.091,0-0.091"/>
                                </g>
                                </svg>
                        </i>
                        <span class="item-name">Offers Header</span>
                    </a>
                    <ul class="sub-nav collapse {{ (Str::contains(Request::path(), 'offers-header') ? 'show' : '') }}" id="offers-header" data-bs-parent="#sidebar-menu">
                        <li class="nav-item">
                            <a class="nav-link {{ (Str::contains(Request::path(), 'offers-header') ? 'active' : '') }}" href="{{route('offers_header')}}">
                                <span class="item-name">Offers Header</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ (Str::contains(Request::path(), 'new-offers-header') ? 'active' : '') }}" href="{{route('new_offers_header')}}">
                                <span class="item-name">New Offers Header</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (Str::contains(Request::path(), 'partners') ? 'active' : '') }}" data-bs-toggle="collapse" href="#Partners" role="button" aria-expanded="false" aria-controls="Partners">
                        <i class="icon">
                            <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                <g>
                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                </g>
                            </svg>
                        </i>
                        <span class="item-name">Partners</span>
                        <i class="right-icon">
                            <svg class="icon-18" xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </i>
                    </a>
                    <ul class="sub-nav collapse {{ (Str::contains(Request::path(), 'list_partners') ? 'show' : '') }}" id="Partners" data-bs-parent="#sidebar-menu">
                        <li class="nav-item">
                            <a class="nav-link {{ (Str::contains(Request::path(), 'list_partners') ? 'active' : '') }}" href="{{route('list_partners')}}">
                                <span class="item-name">Partners</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ (Str::contains(Request::path(), 'new-partners') ? 'active' : '') }}" href="{{route('new_partners')}}">
                                <span class="item-name">New Partners</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (Str::contains(Request::path(), 'client-testmonial') ? 'active' : '') }}" data-bs-toggle="collapse" href="#client-testmonial" role="button" aria-expanded="false" aria-controls="client-testmonial">
                        <i class="icon">
                            <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                <g>
                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                </g>
                            </svg>
                        </i>
                        <span class="item-name">Client Testmonial</span>
                        <i class="right-icon">
                            <svg class="icon-18" xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </i>
                    </a>
                        <ul class="sub-nav collapse {{ Str::contains(Request::path(), 'client-testmonial') ? 'show' : '' }}" id="client-testmonial" data-bs-parent="#sidebar-menu">
                            <li class="nav-item">
                                <a class="nav-link {{ (Str::contains(Request::path(), 'list_client_testmonials') ? 'active' : '') }}" href="{{route('list_client_testmonials')}}">
                                    <span class="item-name">Client Testmonial</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ (Str::contains(Request::path(), 'new_client_testmonial') ? 'active' : '') }}" href="{{route('new_client_testmonial')}}">
                                    <span class="item-name">New Client Testmonial</span>
                                </a>
                            </li>
                        </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (Str::contains(Request::path(), 'team-members') ? 'active' : '') }}" data-bs-toggle="collapse" href="#team-members" role="button" aria-expanded="false" aria-controls="team-members">
                        <i class="icon">
                            <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                <g>
                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                </g>
                            </svg>
                        </i>
                        <span class="item-name">Team Members</span>
                        <i class="right-icon">
                            <svg class="icon-18" xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </i>
                    </a>
                    <ul class="sub-nav collapse {{ Str::contains(Request::path(), 'team-members') ? 'show' : '' }}" id="team-members" data-bs-parent="#sidebar-menu">
                        <li class="nav-item">
                            <a class="nav-link {{ (Str::contains(Request::path(), 'list_team_members') ? 'active' : '') }}" href="{{route('list_team_members')}}">
                                <span class="item-name">Team Members</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ (Str::contains(Request::path(), 'new_team_member') ? 'active' : '') }}" href="{{route('new_team_member')}}">
                                <span class="item-name">New Team Member</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (Str::contains(Request::path(), 'faqs') ? 'active' : '') }}" data-bs-toggle="collapse" href="#faqs" role="button" aria-expanded="false" aria-controls="faqs">
                        <i class="icon">
                            <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                <g>
                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                </g>
                            </svg>
                        </i>
                        <span class="item-name">FAQs</span>
                        <i class="right-icon">
                            <svg class="icon-18" xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </i>
                    </a>
                    <ul class="sub-nav collapse {{ Str::contains(Request::path(), 'faqs') ? 'show' : '' }}" id="faqs" data-bs-parent="#sidebar-menu">
                        <li class="nav-item">
                            <a class="nav-link {{ (Str::contains(Request::path(), 'faqs') ? 'active' : '') }}" href="{{route('faqs')}}">
                                <span class="item-name">FAQs</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ (Str::contains(Request::path(), 'new_faq') ? 'active' : '') }}" href="{{route('new_faq')}}">
                                <span class="item-name">New FAQ</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (Str::contains(Request::path(), 'support') ? 'active' : '') }}" data-bs-toggle="collapse" href="#support" role="button" aria-expanded="false" aria-controls="support">
                        <i class="icon">
                            <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                <g>
                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                </g>
                            </svg>
                        </i>
                        <span class="item-name">Support</span>
                        <i class="right-icon">
                            <svg class="icon-18" xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </i>
                    </a>
                    <ul class="sub-nav collapse {{ Str::contains(Request::path(), 'support') ? 'show' : '' }}" id="support" data-bs-parent="#sidebar-menu">
                        <li class="nav-item">
                            <a class="nav-link {{ (Str::contains(Request::path(), 'contact_requests') ? 'active' : '') }}" href="{{route('contact_requests')}}">
                                <span class="item-name">Contact Requests</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu End -->      
        </div>
    </div>
    <div class="sidebar-footer"></div>
</aside>
