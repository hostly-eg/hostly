@extends('layouts.app')

@section('content')
    <div class="modall modall-common-wrap ">
        <div class="modall-dialog modall-dialog-centered modall-xl">
            <div class="modall-content">

                <div class="modall-body d-md-flex d-grid gap-md-0 gap-5 align-items-center">
                    <div class="modall-common-content">
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
                                    <input type="email" class="col-12 p-2 text-dark" placeholder="Enter Email" name="email">
                                    @error('email')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-grp">
                                    <input type="password" class="col-12 p-2 text-dark" placeholder="Enter Password" name="password">
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
                                    {{--  <a href="#" class="forgot">
                                    Forgot Your password?
                                </a> --}}
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
                    <div class="modall-right-thumb position-relative">
                        <img src="assets/img/Computer login-rafiki.png" class="col-12" alt="img">
                        <div class="signlogin-btnwrap">
                            <a href="{{ route('register') }}">
                            <button class="theme-btn">
                                    create account
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
