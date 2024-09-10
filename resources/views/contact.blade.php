@extends('layout')
@section('title', 'Contact Us')
@section('content')

@push('head')
    <link rel="stylesheet" href="{{ asset('css/contact/style.css') }}">
@endpush

<div class="container-fluid m-0 p-0 body-contact">
    <div class="background-world-map"></div>
    <div class="row m-0 p-0 position-relative" style="z-index: 1;">
        <div class="col-md"></div>
        <div class="col-md-8 contact">
            <div class="contact-header">
                <h1 class="ct-header-title">Contact Us</h1>
                <h5 class="ct-header-subtitle">Have comments, questions, or feedback to share? Our team would love to hear from you. Give us a submit a message below.</h5>
            </div>

            <div class="contact-form rounded">
                <h4>Select a topic</h4>
                <div class="topic-form">
                    <span class="topic rounded tp-choosed">Feedback</span>
                    <span class="topic rounded">Page Errors</span>
                    <span class="topic rounded">Pricing</span>
                    <span class="topic rounded">Other</span>
                </div>
                <div class="form">
                    <div class="row mt-5">
                        <div class="col-lg me-lg-2">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control mt-2 mb-4">
    
                            <label for="name">Name</label> 
                            <input type="text" name="name" id="name" class="form-control mt-2 mb-4 mb-lg-0">
                        </div>
                        <div class="col-lg ms-lg-2">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" class="form-control mt-2 mb-4"></textarea>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-7 bottom-contact-caption">
                            <p>This site is protected by reCAPTCHA and the Google <a href="/legal-docs/privacy">Privacy Policy</a> and <a href="/legal-docs/terms">Terms of Service</a> apply.</p>
                        </div>
                        <div class="col-lg bottom-contact-button text-end d-flex justify-content-center d-lg-block mt-3 mt-lg-0">
                            <a href="#" class="btn-sendMessage rounded">Send Message</a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="contact-detail">
                <div class="row mb-4 contact-detail-address">
                    <div class="col-md-3 d-flex align-items-center">
                        <h6 class="contact-detail-label">Address:</h6>
                    </div>
                    <div class="col-md d-flex align-items-center">
                        <p class="m-0">Nguyen Huu Tho Street, Tan Phong, District 7, Ho Chi Minh City, Viet Nam.</p>
                    </div>
                </div>

                <div class="row mb-4 contact-detail-email">
                    <div class="col-md-3 d-flex align-items-center">
                        <h6 class="contact-detail-label">Email:</h6>
                    </div>
                    <div class="col-md d-flex align-items-center">
                        <p class="m-0">ngoquanghuy59@gmail.com</p>
                    </div>
                </div>

                <div class="row mb-4 contact-detail-phone">
                    <div class="col-md-3 d-flex align-items-center">
                        <h6 class="contact-detail-label">Phone:</h6>
                    </div>
                    <div class="col-md d-flex align-items-center">
                        <p class="m-0">(+84) 946-833-902</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md"></div>
    </div>
</div>

@endsection

@push('scripts')
<script src="{{ asset('js/contact/script.js')}}"></script>
@endpush