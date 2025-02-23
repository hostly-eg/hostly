@extends('layouts.app')

@section('content')
<div class="modall modall-common-wrap ">
    <div class="modall-dialog modall-dialog-centered modall-xl">
        <div class="modall-content">

            <div class="modall-body d-md-flex d-grid gap-md-0 gap-5 align-items-center">
                <div class="modall-common-content">
                    <div class="box">
                        <h2>
                           cerate account
                        </h2>
                        @if ($errors->has('message'))
                            <div class="alert alert-danger">
                                {{ $errors->first('message') }}
                            </div>
                        @endif
                        <form action="{{ route('sign_up') }}" method="POST" class="login-from">
                            @csrf
                            <div class="form-grp cmn-mb">
                                <input class="col-12 p-2" text-dark  type="text" placeholder="Your name" name="name">
                                @error('name')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-grp cmn-mb">
                                <input class="col-12 p-2 text-dark " type="email" placeholder="Email Address" name="email">
                                @error('email')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-grp cmn-mb">
                                <input class="col-12 p-2 text-dark " type="number" placeholder="Phone Number" name="phone">
                                @error('phone')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-grp cmn-mb">
                                <input class="col-12 p-2 text-dark " type="text" placeholder="Your Address" name="address">
                                @error('address')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-grp cmn-mb">
                                <input class="col-12 p-2 text-dark " type="password" placeholder="Enter Password" name="password">
                                @error('password')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-grp">
                                <input class="col-12 p-2 text-dark " type="password" placeholder="Enter Confirm password"
                                    name="password_confirmation">
                                @error('confirm_password')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-check d-flex align-items-center gap-2 from-customradio">
                                <input class="form-check-input" type="radio" name="accept_terms" id="accept_terms"
                                    required>
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
                <div class="modall-right-thumb position-relative">
                    <img src="assets/img/Computer login-rafiki.png" class="col-12" alt="img">
                    <div class="signlogin-btnwrap">
                        <a href="{{ route('login') }}">
                        <button class="theme-btn">
                                login to account
                            </button>
                        </a>
                        {{--  <button class="theme-btn" data-bs-toggle="modall" >
                        Log In
                    </button> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
