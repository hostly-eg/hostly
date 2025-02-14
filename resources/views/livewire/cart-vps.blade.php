<div>
    <div class="progress-steps mb-3">
        <div class="top">
            <div class="progress">
                <span style="width: {{ $currentStep == 1 ? '0%' : ($currentStep == 2 ? '50%' : '100%') }};"></span>
            </div>
            <div class="steps">
                <div class="d-flex flex-column" style="position: relative;">
                    <div class="step {{ $currentStep >= 1 ? 'active' : '' }} text-center" data-step="1"><span>1</span></div>
                    <div class="text-center" style="position: absolute; bottom: -25px;">cart</div>
                </div>

                <div class="d-flex flex-column" style="position: relative;">
                    <div class="step {{ $currentStep >= 2 ? 'active' : '' }} text-center" data-step="2"><span>2</span></div>
                    <div class="text-center" style="position: absolute; bottom: -25px; left: -20px;">checkout</div>
                </div>

                <div class="d-flex flex-column" style="position: relative;">
                    <div class="step {{ $currentStep == 3 ? 'active' : '' }} text-center" data-step="3"><span>3</span></div>
                    <div class="text-center" style="position: absolute; bottom: -25px; left: -20px;">payment</div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of steps -->
    <div class="fs-md-2 fs-4 fw-bold mb-4 mt-3">You're almost done! Complete your order</div>
    <div class="row ">
        <div id="cart" class="section " style="display: {{ $currentStep == 1 ? 'block' : 'none' }};">
            <div class="fs-5 fw-semibold">Selected plan : <span class="fs-6 fw-normal"> plan name </span></div>
            <div class="row d-flex justify-content-center p-3 gap-2">
                <div class="col-12 col-lg-3 col-sm-6 border rounded-3 p-3 text-center box {{$priceSelectedBox==$plan->price_1_month ? 'active' : ''}} mb-3 mb-md-0" wire:click="selectBox(1)">
                    <div></div>
                    <div class="fs-5 text-center fw-bold mb-5">1month</div>
                    <div class="text-secondary text-decoration-line-through fs-6 mb-1">25Le</div>
                    <div class="fs-2 fw-bold mb-1">
                        @if(fmod($plan->price_1_month, 1) == 0)
                            {{ number_format($plan->price_1_month, 0) }} LE
                        @else
                            {{ number_format($plan->price_1_month, 2) }} LE
                        @endif</div>
                    <div class="text-secondary fs-5 mb-1"> LE / month </div>
                    <div class="text-secondary fs-6"> Plan renews at
                        @if(fmod($plan->price_reNew, 1) == 0)
                            {{ number_format($plan->price_reNew, 0) }}le
                        @else
                            {{ number_format($plan->price_reNew, 2) }}le
                        @endif
                        le per month on {{\Carbon\Carbon::now()->addMonth()->format('d/m/Y')}}</div>
                </div>
                <div class="col-12 col-lg-3 col-sm-6 border rounded-3 p-3 text-center box {{$priceSelectedBox==$plan->price_1_year * 12 ? 'active' : ''}} mb-3 mb-md-0" wire:click="selectBox(2)">
                    <div class="fs-5 text-center fw-bold mb-5">12month</div>
                    <div class="text-secondary text-decoration-line-through fs-6 mb-1">500Le</div>
                    <div class="fs-2 fw-bold mb-1">
                        @if(fmod($plan->price_1_year, 1) == 0)
                            {{ number_format($plan->price_1_year, 0) }} LE
                        @else
                            {{ number_format($plan->price_1_year, 2) }} LE
                        @endif
                    </div>
                    <div class="text-secondary fs-5 mb-1"> LE / month </div>
                    <div class="text-secondary fs-6"> Plan renews at
                        @if(fmod($plan->price_reNew, 1) == 0)
                            {{ number_format($plan->price_reNew, 0) }}le
                        @else
                            {{ number_format($plan->price_reNew, 2) }}le
                        @endif
                        le per month on {{\Carbon\Carbon::now()->addMonths(12)->format('d/m/Y')}}</div>
                </div>
                <div class="col-12 col-lg-3 col-sm-6 border rounded-3 p-3 text-center box {{$priceSelectedBox==$plan->price_2_years * 24 ? 'active' : ''}} mb-3 mb-md-0" wire:click="selectBox(3)">
                    <div class="fs-5 text-center fw-bold mb-5">24month</div>
                    <div class="text-secondary text-decoration-line-through fs-6 mb-1">500Le</div>
                    <div class="fs-2 fw-bold mb-1">
                        @if(fmod($plan->price_2_years, 1) == 0)
                            {{ number_format($plan->price_2_years, 0) }} LE
                        @else
                            {{ number_format($plan->price_2_years, 2) }} LE
                        @endif
                    </div>
                    <div class="text-secondary fs-5 mb-1"> LE / month </div>
                    <div class="text-secondary fs-6"> Plan renews at
                        @if(fmod($plan->price_reNew, 1) == 0)
                            {{ number_format($plan->price_reNew, 0) }}le
                        @else
                            {{ number_format($plan->price_reNew, 2) }}le
                        @endif
                        le per month on {{\Carbon\Carbon::now()->addMonths(24)->format('d/m/Y')}}
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-sm-6 border rounded-3 p-3 text-center box {{$priceSelectedBox==$plan->price_3_years * 48 ? 'active' : ''}} mb-3 mb-md-0" wire:click="selectBox(4)">
                    <div class="fs-5 text-center fw-bold mb-5">48month</div>
                    <div class="text-secondary text-decoration-line-through fs-6 mb-1">500Le</div>
                    <div class="fs-2 fw-bold mb-1">
                        @if(fmod($plan->price_3_years, 1) == 0)
                            {{ number_format($plan->price_3_years , 0) }} LE
                        @else
                            {{ number_format($plan->price_3_years, 2) }} LE
                        @endif
                    </div>
                    <div class="text-secondary fs-5 mb-1"> LE / month </div>
                    <div class="text-secondary fs-6"> Plan renews at
                        @if(fmod($plan->price_reNew, 1) == 0)
                            {{ number_format($plan->price_reNew, 0) }}le
                        @else
                            {{ number_format($plan->price_reNew, 2) }}le
                        @endif
                        le per month on {{\Carbon\Carbon::now()->addMonths(48)->format('d/m/Y')}}
                    </div>

                </div>
                <!-- end of periodic time select -->
                <div class="col-12 mt-4 bg-light p-3 rounded-3 boxshadow">
                    <div class="fs-3 fw-bold mb-2">Order Summary </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div>Order ID</div>
                        <div>ASDW11268</div>
                    </div>
                    <div class="form-group d-flex align-items-center my-3">
                        <input type="text" placeholder="promo code" class="form-control p-2 border rounded w-75 me-2" wire:model="promoCode">
                        <button class="btn btn-primary text-nowrap w-25" wire:click="applyPromoCode">Apply Code</button>
                    </div>
                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <div>Subtotal</div>
                        <div class="text-primary" >{{$priceSelectedBox}}le</div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <div>discount</div>
                        <div class="text-success">-{{$discount}}le</div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <div>tax</div>
                        <div>14%</div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <div>total</div>
                        <div>{{$priceSelectedBox - $discount + (($priceSelectedBox- $discount) * .14)}}le</div>
                    </div>
                </div>
                <!-- end of summary -->
            </div>
        </div>
        <!-- end of cart section -->
        <div id="checkout" class="section" style="display: {{ $currentStep == 2 ? 'block' : 'none' }};">
            <h2>Checkout</h2>
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-lg-6 d-flex flex-column mb-3">
                    <label>Name <span class="text-danger">*</span></label>
                    <input type="text" placeholder="Customer Name" class="form-control border rounded p-2" wire:model="name" required>
                    @error('name') <span class="alert alert-danger">{{ $message }}</span> @enderror
                </div>
                <div class="col-10 col-lg-6  d-flex flex-column mb-3">
                    <label>Email <span class="text-danger">*</span></label>
                    <input type="email" placeholder="Customer Email" class="form-control col-12 border rounded p-2" wire:model="email" required>
                    @error('email') <span class="alert alert-danger">{{ $message }}</span> @enderror
                </div>
                <div class="col-10 col-lg-6 d-flex flex-column mb-3">
                    <label>Phone Number<span class="text-danger">*</span></label>
                    <input type="number" placeholder="Customer Phone" class="form-control col-12 border rounded p-2" wire:model="PhoneNumber" required>
                    @error('PhoneNumber') <span class="alert alert-danger">{{ $message }}</span> @enderror
                </div>
                <div class="col-10 col-lg-6 d-flex flex-column mb-3">
                    <label>Phone Transaction<span class="text-danger">*</span></label>
                    <input type="number" title="This is the number through which the transfer will be made" wire:model="PhoneTransaction" placeholder="This is the number through which the transfer will be made" class="form-control col-12 border rounded p-2" required>
                    @error('PhoneTransaction') <span class="alert alert-danger">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>
        <div id="payment" class="section" style="display: {{ $currentStep == 3 ? 'block' : 'none' }};">
            <div class="row d-flex justify-content-center gap-3">

                <div class="col-12 col-md-5 d-flex justify-content-center rounded boxshadow flex-column">
                    <div class="d-flex justify-content-center p-3 rounded" style="background: #ee1c25;">
                        <img class="" src="../assets/img/vodafone-logo.png" alt="">
                    </div>
                    <div class=" col-12 bg-light text-center p-3 mt-3">
                        <div>transaction number</div>
                        <div class="fs-3 fw-bold">01028887470</div>
                        <div>this number just for transiction not for calls</div>
                    </div>
                </div>
                <div class="col-12 col-md-5 d-flex justify-content-center boxshadow rounded flex-column">

                    <div class="file-input-container d-flex flex-column-reverse">
                        <label for="imageUpload" class="file-input-label">
                            put transaction screen
                            <input type="file" id="imageUpload" accept="image/*" wire:model="imageUpload" class="file-input" required/>
                        </label>
                        <div class="preview-container">
                            <img src="{{ $imageUpload ? $imageUpload->temporaryUrl() : asset('placeholder.png') }}" style=" width: 100%;height: 100%;object-fit: cover;" alt="transaction screen">
                        </div>
                        @error('imageUpload') <span class="alert alert-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>
        </div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        @if (session()->has('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <div class="buttons my-4">
            @if ($currentStep > 0)
                <button wire:click="prevStep" class="btn">Prev</button>
            @endif
            @if ($currentStep < 2)
                <button wire:click="nextStep" class="btn">Proceed to Checkout</button>
            @elseif ($currentStep < 3)
                <button wire:click="nextStep" class="btn">Go to Payment</button>
            @else
                <button wire:click="applyForm" onclick="handleFinishButton(this)" class="btn">Finish</button>
            @endif
        </div>
    </div>
    <script>
        function handleFinishButton(button) {
            button.disabled = true;
            button.innerHTML = 'Loading...';

            Livewire.on('formSubmitted', () => {
                button.disabled = false;
                button.innerHTML = 'Finish';
            });
        }
    </script>

</div>
