@extends('layouts.app')
@section('head')
    <style>
        .feature-item {
            display: flex;
            justify-content: space-between;
            /* لضبط العناصر على الأطراف */
            align-items: center;
            /* لتوسيط الزر والنص عموديًا */
            padding: 0.5rem;
            border: 1px solid #007bff;
            border-radius: 0.25rem;
            margin-bottom: 0.5rem;
            background-color: #f1f1f1;
            margin-top: 10px;
        }

        .delete-btn {
            background-color: red;
            color: white;
            border: none;
            padding: 0.2rem 0.5rem;
            cursor: pointer;
            border-radius: 0.25rem;
        }

        .checkmark {
            color: green;
            font-weight: bold;
            margin-right: 0.5rem;
            /* مسافة صغيرة بين العلامة والنص */
        }

        .checkmark_X {
            color: red;
            font-weight: bold;
            margin-right: 0.5rem;
        }

        .feature-text {
            display: flex;
            align-items: center;
        }
    </style>

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
        </div>
        <div class="conatiner-fluid content-inner mt-n5 py-0">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Create New Vps Plan</h4>
                    </div>
                </div>
                @if(session()->has('notify'))
                    <div class="alert alert-left alert-{{ session()->get('notify')['type'] }} alert-dismissible fade show mb-3" role="alert">
                        <span> {{ session()->get('notify')['content'] }}</span>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                <div class="card-body">
                    <form class="row" action="{{route('store_vps')}}" method="POST">
                        @csrf
                        <div class="form-group col-md-6 col-12">
                            <label class="form-label" for="plan_name">Plan Name</label>
                            <input type="text" class="form-control" id="plan_name" name="plan_name">
                            @error('plan_name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6 col-12">
                            <label class="form-label" for="plan_description">Plan Description</label>
                            <input type="text" class="form-control" id="plan_description" name="plan_description">
                            @error('plan_description')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6 col-12">
                            <label class="form-label" for="price_month">Price Plan In Month</label>
                            <input type="text" class="form-control" id="price_month" name="price_month">
                            @error('price_month')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6 col-12">
                            <label class="form-label" for="price_12month">Price Plan In 12Month</label>
                            <input type="text" class="form-control" id="price_12month" name="price_12month">
                            @error('price_12month')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6 col-12">
                            <label class="form-label" for="price_24month">Price Plan In 24Month</label>
                            <input type="text" class="form-control" id="price_24month" name="price_24month">
                            @error('price_24month')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6 col-12">
                            <label class="form-label" for="price_48month">Price Plan In 48Month</label>
                            <input type="text" class="form-control"  id="price_48month" name="price_48month">
                            @error('price_48month')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6 col-12">
                            <label class="form-label" for="plan_Renew">Price Renew Plan</label>
                            <input type="text" class="form-control" id="plan_Renew" name="plan_Renew">
                            @error('plan_Renew')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group ">
                            <label class="form-label" for="includeFeatureInput">Plan Feature Include</label>
                            <div class="d-flex align-items-center">
                                <input id="includeFeatureInput" type="text" class="col-11 border rounded p-2 mt-2">
                                <div id="includeAddBtn" class="btn btn-primary ms-2">Add</div>
                            </div>
                            <div id="includeFeaturesList" class="features-list   mt-2"></div>
                            <input type="hidden" name="include_features" id="includeFeaturesHiddenInput">
                            @error('include_features')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="excludeFeatureInput">Plan Feature Not Include</label>
                            <div class="d-flex align-items-center">
                                <input id="excludeFeatureInput" type="text" class="col-11 border rounded p-2 mt-2">
                                <div id="excludeAddBtn" class="btn btn-primary ms-2">Add</div>
                            </div>
                            <div id="excludeFeaturesList" class="features-list   mt-2"></div>
                            <input type="hidden" name="not_include_features" id="not_includeFeaturesHiddenInput">
                            @error('not_include_features')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth_footer')
    </main>
@endsection
@section('script')
    <script>
        // Feature Include Section
        const includeAddBtn = document.getElementById('includeAddBtn');
        const includeFeatureInput = document.getElementById('includeFeatureInput');
        const includeFeaturesList = document.getElementById('includeFeaturesList');
        const includeFeaturesHiddenInput = document.getElementById('includeFeaturesHiddenInput');

        let includeFeatures = [];
        includeAddBtn.addEventListener('click', function () {
            const feature = includeFeatureInput.value;

            if (feature.trim() !== "") {
                const featureItem = document.createElement('div');
                featureItem.classList.add('feature-item');

                const featureText = document.createElement('div');
                featureText.classList.add('feature-text');

                // Use checkmark for included features
                const checkmark = document.createElement('span');
                checkmark.classList.add('checkmark');
                checkmark.textContent = '✔'; // علامة صح

                const text = document.createElement('span');
                text.textContent = feature;

                featureText.appendChild(checkmark);
                featureText.appendChild(text);

                const deleteBtn = document.createElement('button');
                deleteBtn.classList.add('delete-btn');
                deleteBtn.textContent = 'Delete';

                deleteBtn.addEventListener('click', function () {
                    includeFeaturesList.removeChild(featureItem);
                    includeFeatures = includeFeatures.filter(item => item !== feature);
                    updateHiddenInput();
                });

                featureItem.appendChild(featureText);
                featureItem.appendChild(deleteBtn);

                includeFeaturesList.appendChild(featureItem);
                includeFeatures.push(feature);
                includeFeatureInput.value = "";

                updateHiddenInput();
            }
        });

        function updateHiddenInput() {
            includeFeaturesHiddenInput.value = JSON.stringify(includeFeatures);
        }

        // Feature Not Include Section
        const excludeAddBtn = document.getElementById('excludeAddBtn');
        const excludeFeatureInput = document.getElementById('excludeFeatureInput');
        const excludeFeaturesList = document.getElementById('excludeFeaturesList');
        const not_includeFeaturesHiddenInput = document.getElementById('not_includeFeaturesHiddenInput');

        let not_includeFeatures = [];
        excludeAddBtn.addEventListener('click', function () {
            const feature = excludeFeatureInput.value;

            if (feature.trim() !== "") {
                const featureItem = document.createElement('div');
                featureItem.classList.add('feature-item');

                const featureText = document.createElement('div');
                featureText.classList.add('feature-text');

                // Use cross for excluded features
                const checkmark = document.createElement('span');
                checkmark.classList.add('checkmark_X');
                checkmark.textContent = '✘'; // علامة إكس

                const text = document.createElement('span');
                text.textContent = feature;

                featureText.appendChild(checkmark);
                featureText.appendChild(text);

                const deleteBtn = document.createElement('button');
                deleteBtn.classList.add('delete-btn');
                deleteBtn.textContent = 'Delete';

                deleteBtn.addEventListener('click', function () {
                    excludeFeaturesList.removeChild(featureItem);
                    not_includeFeatures = not_includeFeatures.filter(item => item !== feature);
                    updateHiddenNotInput();
                });

                featureItem.appendChild(featureText);
                featureItem.appendChild(deleteBtn);

                excludeFeaturesList.appendChild(featureItem);
                not_includeFeatures.push(feature);
                excludeFeatureInput.value = "";

                updateHiddenNotInput();
            }
        });

        function updateHiddenNotInput() {
            not_includeFeaturesHiddenInput.value = JSON.stringify(not_includeFeatures);
        }

    </script>
@endsection
