@extends('layouts.app')

@section('content')
    <div class="breadcrumb-wrapper bg-cover" style="background-image: url('assets/img/breadcrumb-1.jpg');">
        <div class="container">
            <div class="page-heading">
                <div class="page-header-left">
                    <h1 class="wow fadeInUp" data-wow-delay=".3s">
                        Privacy Policy</h1>
                    {{--       <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                    <li>
                        <a href="index.html">
                            Home
                        </a>
                    </li>
                    <li>
                        <i class="fa-regular fa-chevrons-right"></i>
                    </li>
                    <li>
                        About Us
                    </li>
                </ul> --}}
                </div>
                <div class="breadcrumb-image wow fadeInUp" data-wow-delay=".4s">
                    <img src="assets/img/Privacy policy-amico.png" alt="img">
                </div>
            </div>
        </div>
    </div>
    <div class="terms-section py-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="terms-wrapper">
                        <div class="terms-header text-center mb-5">
                            <h1 class="terms-title">Privacy Policy</h1>
                            <p class="terms-subtitle">Last updated: {{ date('F d, Y') }}</p>
                        </div>

                        <div class="terms-content">
                            <div class="terms-block mb-4">
                                <h3>1. Information Collection</h3>
                                <p>At Hostly-EG, we collect various types of information to provide and improve our
                                    services:</p>
                                <ul>
                                    <li>Personal information (name, email address, phone number)</li>
                                    <li>Payment information</li>
                                    <li>Server usage and performance data</li>
                                    <li>IP addresses and browser information</li>
                                </ul>
                            </div>

                            <div class="terms-block mb-4">
                                <h3>2. Use of Information</h3>
                                <p>We use the collected information for:</p>
                                <ul>
                                    <li>Service provision and maintenance</li>
                                    <li>Account management</li>
                                    <li>Communication about service updates</li>
                                    <li>Security and fraud prevention</li>
                                    <li>Legal compliance</li>
                                </ul>
                            </div>

                            <div class="terms-block mb-4">
                                <h3>3. Data Storage and Security</h3>
                                <p>Your data is stored securely on our servers. We implement industry-standard security
                                    measures to protect your information. However, no method of transmission over the
                                    internet is 100% secure.</p>
                                <p class="text-muted small">By using our services, you acknowledge that we may store and
                                    process your data in any country where we maintain facilities.</p>
                            </div>

                            <div class="terms-block mb-4">
                                <h3>4. Information Sharing</h3>
                                <p>We may share your information with:</p>
                                <ul>
                                    <li>Service providers and partners</li>
                                    <li>Law enforcement when required by law</li>
                                    <li>Third parties with your consent</li>
                                </ul>
                                <p class="text-muted small">We reserve the right to share user information as needed for
                                    service operation and improvement.</p>
                            </div>

                            <div class="terms-block mb-4">
                                <h3>5. Cookies and Tracking</h3>
                                <p>We use cookies and similar tracking technologies to:</p>
                                <ul>
                                    <li>Remember your preferences</li>
                                    <li>Analyze website traffic</li>
                                    <li>Improve user experience</li>
                                    <li>Monitor service performance</li>
                                </ul>
                            </div>

                            <div class="terms-block mb-4">
                                <h3>6. User Rights</h3>
                                <p>You have the right to:</p>
                                <ul>
                                    <li>Access your personal data</li>
                                    <li>Request data correction</li>
                                    <li>Request data deletion</li>
                                    <li>Object to data processing</li>
                                </ul>
                                <p class="text-muted small">Some requests may be declined due to legal obligations or
                                    technical limitations.</p>
                            </div>

                            <div class="terms-block mb-4">
                                <h3>7. Data Retention</h3>
                                <p>We retain your information for as long as necessary to provide our services and comply
                                    with legal obligations. When no longer needed, data will be securely deleted or
                                    anonymized.</p>
                            </div>

                            <div class="terms-block mb-4">
                                <h3>8. Changes to Privacy Policy</h3>
                                <p>Hostly-EG reserves the right to modify this privacy policy at any time. Changes will be
                                    effective immediately upon posting to our website.</p>
                            </div>

                            <div class="terms-block mb-4">
                                <h3>9. Contact Information</h3>
                                <p>For privacy-related inquiries, please contact us at privacy@hostly-eg.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        .terms-section {
            background-color: #f8f9fa;
        }

        .terms-wrapper {
            background: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
        }

        .terms-title {
            font-size: 2.5rem;
            color: #333;
            margin-bottom: 10px;
        }

        .terms-subtitle {
            color: #666;
            font-size: 1rem;
        }

        .terms-content {
            color: #444;
            line-height: 1.8;
        }

        .terms-block h3 {
            color: #333;
            font-size: 1.5rem;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .terms-block p {
            margin-bottom: 20px;
            color: #666;
        }

        .terms-block ul {
            margin-bottom: 20px;
            padding-left: 20px;
        }

        .terms-block ul li {
            color: #666;
            margin-bottom: 10px;
        }

        .text-muted.small {
            font-size: 0.85rem;
            color: #999;
        }

        @media (max-width: 768px) {
            .terms-wrapper {
                padding: 20px;
            }

            .terms-title {
                font-size: 2rem;
            }
        }
    </style>
@endpush
