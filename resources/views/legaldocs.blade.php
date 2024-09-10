@extends('layout')
@section('title', 'Legal Documents')
@section('content')

@push('head')
    <link rel="stylesheet" href="{{ asset('css/legal-documents/style.css') }}">
@endpush

<div class="container-fluid m-0 p-0 body-legalDocu">
    <div class="legalDocu-header w-100 text-center">
        <div class="header-title">
            <!-- <h1>Terms of Service</h1> -->
            <h1>Legal Documents</h1>
            <p>Last Updated: October 03, 2023.</p>
        </div>
        <div class="header-menu">
            @if($title == "terms")
            <a href="#" class="menu-tabs menu-tab-tos tab-active">Terms of Service</a>
            <a href="#" class="menu-tabs menu-tab-pp">Privacy Policy</a>
            <div class="tab-active-bg tab-0"></div>
            @elseif($title == "privacy")
            <a href="#" class="menu-tabs menu-tab-tos">Terms of Service</a>
            <a href="#" class="menu-tabs menu-tab-pp tab-active">Privacy Policy</a>
            <div class="tab-active-bg tab-1"></div>
            @else
            <a href="#" class="menu-tabs menu-tab-tos tab-active">Terms of Service</a>
            <a href="#" class="menu-tabs menu-tab-pp">Privacy Policy</a>
            <div class="tab-active-bg tab-0"></div>
            @endif
        </div>
    </div>
    <div class="row m-0 p-0">
        <div class="col-lg"></div>

        <!-- Terms of Service -->
        @if($title == "terms")
        <div class="col-lg-7 px-4 px-lg-0 tos-content">
        @elseif($title == "privacy")
        <div class="col-lg-7 px-4 px-lg-0 tos-content d-none">
        @else
        <div class="col-lg-7 px-4 px-lg-0 tos-content">
        @endif
            <div class="tos-row term-0">
                <h4>Terms of Service</h4>
                <h6>Last Updated: October 03, 2023.</h6>
                <p>Welcome to Rmaker, the premier resume builder website. Please take the time to read and understand these Terms and Conditions ("Terms") before using our services. Your use of the Rmaker website and its associated services (collectively referred to as the "Service") signifies your acceptance of and agreement to be bound by these Terms.</p>
                <p>If you do not agree with any part of these Terms, we kindly ask that you do not use our Service.</p>
            </div>
            <div class="tos-row term-1">
                <h4>1. Acceptance of Terms</h4>
                <p>By accessing or using the Service, you acknowledge that you have read, understood, and agreed to comply with these Terms. This agreement forms a legally binding contract between you and Rmaker, governing your access to and use of the Service. Your continued use of the Service constitutes your ongoing acceptance of these Terms.</p>
            </div>
            <div class="tos-row term-2">
                <h4>2. Use of the Service</h4>
                <ul>
                    <li><p><strong>Eligibility:</strong> You must be at least 13 years old to use this Service. By using the Service, you represent and warrant that you are of legal age to form a binding contract with us.</p></li>
                    <li><p><strong>Account:</strong> To access certain features of the Service, you may be required to create an account. You are responsible for maintaining the confidentiality of your account credentials and for any activities conducted under your account. Please notify us immediately if you suspect any unauthorized access to your account.</p></li>
                    <li><p><strong>User Content:</strong> We encourage users to create, upload, or submit content ("User Content") that enhances their resume-building experience. While you retain ownership of your User Content, you grant Rmaker a worldwide, royalty-free license to use, store, reproduce, modify, and create derivative works from your User Content. This license allows us to provide you with our services effectively.</p></li>
                </ul>
            </div>
            <div class="tos-row term-3">
                <h4>3. Changes to Terms</h4>
                <p>We reserve the right to update or modify these Terms at any time without prior notice. Significant changes will be communicated through a prominent notice on our website. Your continued use of the Service following changes to these Terms signifies your acceptance of the revised Terms.</p>
            </div>
            <div class="tos-row term-4">
                <h4>4. Termination</h4>
                <p>Rmaker reserves the right to terminate or suspend your access to the Service immediately, with or without prior notice, for any reason, including but not limited to a breach of these Terms or activities that violate applicable laws or regulations.</p>
            </div>
            <div class="tos-row term-5">
                <h4>5. Disclaimer</h4>
                <p>The Service is provided "as is" and "as available" without warranties of any kind, whether express or implied. We do not guarantee that the Service will be error-free, uninterrupted, or meet your specific requirements.</p>
            </div>
            <div class="tos-row term-6">
                <h4>6. Limitation of Liability</h4>
                <p>In no event shall Rmaker be liable for any indirect, incidental, special, consequential, or punitive damages, or any loss of profits or revenues, whether incurred directly or indirectly, arising from the use of the Service or any content therein.</p>
            </div>
            <div class="tos-row term-7">
                <h4>7. Contact Us</h4>
                <p>If you have any questions, concerns, or comments about these Terms or the Service, please do not hesitate to contact us at ngoquanghuy59@gmail.com.</p>
            </div>
            <div class="tos-row term-8">
                <h4>8. Entire Agreement</h4>
                <p>These Terms constitute the entire agreement between you and Rmaker regarding your use of the Service and supersede all prior agreements and understandings.</p>
            </div>
        </div>

        <!-- Privacy Policy -->
        @if($title == "privacy")
        <div class="col-lg-7 px-4 px-lg-0 privacy-content">
        @elseif($title == "terms")
        <div class="col-lg-7 px-4 px-lg-0 privacy-content d-none">
        @else
        <div class="col-lg-7 px-4 px-lg-0 privacy-content d-none">
        @endif
            <div class="pp-row privacy-0">
                <h4>Privacy Policy</h4>
                <h6>Last Updated: October 03, 2023.</h6>
                <p>This Privacy Policy describes how Rmaker ("we," "us," or "our") collects, uses, and shares your personal information when you use our website and services (collectively, the "Service").</p>
            </div>
            <div class="pp-row privacy-1">
                <h4>Information We Collect</h4>
                <p>We may collect the following types of information when you use our Service:</p>
                <ol>
                    <li><p><strong>Personal Information:</strong> When you create an account or use certain features of our Service, we may collect personal information such as your name, email address, and contact details.</p></li>
                    <li><p><strong>Usage Information:</strong> We collect information about how you interact with our Service, including your IP address, browser type, pages visited, and actions taken.</p></li>
                    <li><p><strong>Cookies:</strong> We use cookies and similar tracking technologies to collect information about your browsing behavior on our website.</p></li>
                </ol>
            </div>
            <div class="pp-row privacy-2">
                <h4>How We Use Your Information</h4>
                <p>We may use your information for the following purposes:</p>
                <ol>
                    <li><p><strong>Provide and Improve our Service:</strong> We use your information to provide and enhance our Service, troubleshoot issues, and improve user experience.</p></li>
                    <li><p><strong>Communicate with You:</strong> We may send you updates, newsletters, and promotional materials. You can opt out of these communications at any time.</p></li>
                    <li><p><strong>Analytics:</strong> We use analytics tools to understand how users interact with our Service and to make data-driven improvements.</p></li>
                </ol>
            </div>
            <div class="pp-row privacy-3">
                <h4>Sharing Your Information</h4>
                <p>We may share your information with:</p>
                <ol>
                    <li><p><strong>Service Providers:</strong> We may share your information with third-party service providers who assist us in operating our Service.</p></li>
                    <li><p><strong>Legal Requirements:</strong> We may disclose your information in response to legal requests or to comply with applicable laws.</p></li>
                </ol>
            </div>
            <div class="pp-row privacy-4">
                <h4>Security</h4>
                <p>We take reasonable measures to protect your information, but no data transmission over the internet is completely secure. Please take precautions to protect your personal information.</p>
            </div>
            <div class="pp-row privacy-5">
                <h4>Your Choices</h4>
                <p>You can access, update, or delete your personal information through your account settings.</p>
                <p>You can also contact us to exercise your rights regarding your information.</p>
            </div>
            <div class="pp-row privacy-6">
                <h4>Changes to This Policy</h4>
                <p>We may update this Privacy Policy from time to time. We will notify you of any significant changes through a prominent notice on our website.</p>
            </div>
            <div class="pp-row privacy-7">
                <h4>Contact Us</h4>
                <p>If you have any questions or concerns about this Privacy Policy or our data practices, please contact us at ngoquanghuy59@gmail.com.</p>
            </div>
        </div>
        <div class="col-lg"></div>
    </div>
</div>

@endsection

@push('scripts')
<script src="{{ asset('js/legaldocs/script.js')}}"></script>
@endpush