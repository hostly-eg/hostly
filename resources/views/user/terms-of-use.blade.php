@extends('layouts.app')

@section('content')
<div class="breadcrumb-wrapper bg-cover" style="background-image: url('assets/img/breadcrumb-1.jpg');">
    <div class="container">
        <div class="page-heading">
            <div class="page-header-left">
                <h1 class="wow fadeInUp" data-wow-delay=".3s">Terms Of Use</h1>
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
                <img src="assets/img/Accept terms-cuate.png" alt="img">
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
                        <h1 class="terms-title">Terms of Use</h1>
                        <p class="terms-subtitle">Last updated: {{ date('F d, Y') }}</p>
                    </div>

                    <div class="terms-content">
                        <div class="terms-block mb-4">
                            <h3>1. Introduction</h3>
                            <p>Welcome to Hostly-EG! By accessing and using our services, you agree to comply with and be bound by the following terms and conditions of use.</p>
                        </div>

                        <div class="terms-block mb-4">
                            <h3>2. Services</h3>
                            <p>Hostly-EG offers web hosting, server hosting, and virtual server hosting services. Our services are subject to the following conditions:</p>
                            <p>Service availability and performance may vary.</p>
                            <p>We reserve the right to modify or discontinue any service at any time.</p>
                        </div>

                        <div class="terms-block mb-4">
                            <h3>3. User Responsibilities</h3>
                            <p>Users agree to:</p>
                            <p>Provide accurate and up-to-date information during registration.</p>
                            <p>Use the services in compliance with all applicable laws and regulations.</p>
                            <p>Not engage in any activity that could harm our services or reputation.</p>
                            <p>When user use servers or hosting for abuse or spam Hostly-EG has the right to cancel the services without consulting the user, and user does not have the right to recover the money paid.</p>
                        </div>

                        <div class="terms-block mb-4">
                            <h3>4. Payment and Fees</h3>
                            <p>Users must pay all fees associated with the services they subscribe to.</p>
                            <p>All transactions are final and non-reversible upon service activation. By agreeing to these terms, users acknowledge and accept that service fees are non-refundable under any circumstances, including but not limited to service cancellation, dissatisfaction, or any other reason.</p>
                            <p class="text-muted small">Service charges and payments are processed in accordance with our standard operating procedures.</p>
                        </div>

                        <div class="terms-block mb-4">
                            <h3>5. Account Termination</h3>
                            <p>We reserve the right to terminate or suspend any account at our discretion if the user violates these terms.</p>
                        </div>

                        <div class="terms-block mb-4">
                            <h3>6. Liability</h3>
                            <p>Hostly-EG is not liable for any direct, indirect, incidental, or consequential damages arising from the use of our services.</p>
                        </div>

                        <div class="terms-block mb-4">
                            <h3>7. Privacy Policy</h3>
                            <p>Please refer to our Privacy Policy for information on how we collect, use, and protect your personal data.</p>
                        </div>

                        <div class="terms-block mb-4">
                            <h3>8. Changes to Terms</h3>
                            <p>Hostly-EG reserves the right to update these terms at any time. Users will be notified of significant changes via email or through our website.</p>
                        </div>

                        <div class="terms-block mb-4">
                            <h3>9. Contact Us</h3>
                            <p>If you have any questions about these Terms of Use, please contact us at info@hostly-eg.com.</p>
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
    box-shadow: 0 0 20px rgba(0,0,0,0.05);
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