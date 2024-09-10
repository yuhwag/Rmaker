@extends('layout')
@section('title', 'Login')
@section('content')

@push('head')
    <link rel="stylesheet" href="{{ asset('css/login/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login/positionResponsive.css') }}">
@endpush

<div class="container-fluid p-3">
    <div class="row w-100 h-100 m-0 justify-content-center align-items-center">
        <div class="col-md"></div>
        <div class="col-md-10 col-lg-8 col-xl-7">
            <div class="row position-relative" style="border-radius: 15px;overflow: hidden;">
                <!-- Sign in form -->
                <div class="col-lg-6 py-5 px-4 login-form form position-mx-lg-absolute" style="background: #fff;">
                    <h3 class="text-center mb-1" style="letter-spacing: 2px;"><i>Sign In</i></h3>
                    <p class="text-center mb-5" style="letter-spacing: 1px; color: #8c8c8c;"><i>using your account</i></p>

                    <form action="{{route('user.login')}}" method="post">
                        @csrf

                        @if(session()->has('error'))
                        <p style="font-weight: bold; margin-left: 25px; font-size: .9rem; color: #f32424;">{{session('error')}}</p>
                        @endif
                        <div class="mb-4 position-relative">
                            <input type="email" class="form-control" name="email" id="emailLogin" placeholder="example@gmail.com" required>
                            <span class="input-placeholder">Email</span>
                        </div>
                        <div class="mb-3 position-relative">
                            <input type="password" class="form-control" name="password" id="passwordLogin" placeholder="Enter your password" required>
                            <span class="input-placeholder">Password</span>
                            <i class="showHidePass position-absolute fa fa-eye" aria-hidden="true" style="top: 20px;right: 30px;cursor: pointer;color: #565656;"></i>

                            @error('password')
                            <p style="margin-top: 10px; margin-left: 25px; font-size: .8rem; color: #f32424;">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="text-center">
                            <a href="#" class="a-link" style="color: #8c8c8c;">Forgot your password?</a>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn-form btn-login w-100"><i>SIGN IN</i></button>
                        </div>
                    </form>

                    <div class="mt-3 text-center">
                        <p class="textOr text-center">or</p>
                        <!-- <p class="textOr text-center">or continue with</p> -->
                        <div class="login-social">
                            <a href="{{ route('auth.google') }}">
                                <img src="{{ URL::asset('image/logo/google-logo.png') }}" alt="Google">
                                Continue with Google 
                            </a>
                            <!-- <a class="d-flex align-items-center" href="#">
                                <img src="{{ URL::asset('image/logo/logo-facebook.png') }}" alt="Facebook">
                            </a> -->
                        </div>
                    </div>

                    <!-- <a href="/" class="btn-home"><i class="fa fa-long-arrow-left"></i> Home</a> -->
                    <button class="btn-openLogReg d-lg-none position-mx-lg-absolute" style="top: 42px; right: 0; border-radius: 50px 0 0 50px;">
                        Sign Up <i class='fa fa-long-arrow-right' aria-hidden='true'></i>
                    </button>
                </div>
                <!-- Sign up form -->
                <form class="col-lg-6 py-5 px-4 register-form form" style="background: #fff;" action="{{route('user.register')}}" method="post">
                    @csrf
                    <h3 class="text-center mb-1" style="letter-spacing: 2px;"><i>Sign Up</i></h3>
                    <p class="text-center mb-5" style="letter-spacing: 1px; color: #8c8c8c;"><i>use your email to create a new account</i></p>

                    <div class="row mb-4 position-relative d-flex">
                        <div class="col-5 pe-0 position-relative">
                            <input type="text" class="form-control" name="firstname" id="firstnameRegister" placeholder="ex: John" required>
                            <span class="input-placeholder" style="width: 60%;left: calc(var(--bs-gutter-x)*.5 + 25px);">Firstname</span>
                        </div>
                        <div class="col-7 position-relative">
                            <input type="text" class="form-control" name="lastname" id="lastnameRegister" placeholder="ex: Smith" required>
                            <span class="input-placeholder" style="width: 60%;left: calc(var(--bs-gutter-x)*.5 + 25px);">Lastname</span>
                        </div>
                    </div>
                    <div class="mb-4 position-relative">
                        <input type="email" class="form-control" name="email" id="emailRegister" placeholder="example@gmail.com" required>
                        <span class="input-placeholder">Email</span>
                    </div>
                    <div class="mb-4 position-relative">
                        <input type="tel" class="form-control" name="phone" id="phoneRegister" placeholder="Enter your phone number" style="padding-left: 25px;" required>
                        <span class="input-placeholder plhPhone">Phone</span>
                    </div>
                    <div class="mb-3 position-relative">
                        <input type="password" class="form-control" name="password" id="passwordRegister" placeholder="Enter your password" required>
                        <span class="input-placeholder">Password</span>
                        <i class="showHidePass position-absolute fa fa-eye" aria-hidden="true" style="top: 20px;right: 30px;cursor: pointer;color: #565656;"></i>
                        <i style="margin-left: 25px; margin-top: 5px; font-size: .7rem; color: #8c8c8c;">At least 8 characters include letters and numbers.</i>
                    </div>

                    <div class="mt-4">
                        <button type="submit" class="btn-form btn-register w-100"><i>CREATE ACCOUNT</i></button>
                    </div>
                </form>

                <div class="logRegPage d-none d-lg-flex flex-column justify-content-center align-items-center position-absolute top-0 bottom-0">
                    <div class="logo d-flex align-items-end mb-4">
                        <img src="{{ URL::asset('image/logo/lg-rmaker2-white.png') }}" alt="Rmaker" class="me-2" style="width:65px; padding-bottom: 15px;">
                        <!-- <p style="font-family: Courier, monospace; font-size: 2rem; font-weight: bold; margin: 0; color: #fff; letter-spacing: 1px;">maker</p> -->
                    </div>
                    <div class="welcome-page-title text-center w-100 px-2">
                        <h2>Welcome Back!</h2>
                        <p style="font-size: 1.2rem;"><i>To keep with us please sign in with your personal info.</i></p>
                    </div>
                    <button class="btn-logReg">Sign Up <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                </div>
            </div>
        </div>
        <div class="col-md"></div>
    </div>
</div>

@endsection

@push('scripts')
<script src="{{ asset('js/login/script.js')}}"></script>
@endpush