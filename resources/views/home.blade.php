@extends('layout')
@section('title', 'Welcome to Rmaker!')
@section('content')

@push('head')
    <link rel="stylesheet" href="{{ asset('css/home/style.css') }}">
@endpush

<div class="video d-none">
    <div class="close-vd position-absolute">
        <span>Close</span> <i class="fa fa-times"></i>
    </div>
    <div class="vd-wrap">
        <video id="intro-video" controls>
            <source src="{{ asset('image/videos/Rmaker-video.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="vd-img">
            <div class="btn-play-vd">
                <i class="fa fa-play"></i>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid m-0 p-0 body-homepage">
    <div class="w-100 welcome-section set-section-bgcolor">
        <div class="container">
            <div class="row mx-0">
                <div class="col-lg welcome-main-content px-4 p-lg-0 m-lg-0 d-flex flex-column justify-content-center">
                    <h1>Navigate Your Career Path with Rmaker: Crafting Resumes for Success</h1>
                    <!-- <h5>Unlock Your Professional Potential.</h5> -->
                    <p>Ready to advance your career? Rmaker empowers you to create a standout, professionally polished resume that leaves a lasting impression on employers. Make every word count with our user-friendly tool.</p>
                    
                    <div class="wel-btns d-flex flex-wrap">
                        <a class="btn-createRe" href="{{route('templates.resume')}}">Get Started</a>
                        <a class="btn-watchVd" href=""><i class="fa fa-play-circle-o"></i> Watch Video</a>
                    </div>
                </div>
                <div class="col-lg d-flex justify-content-center align-items-center" style="padding-top: 50px;">
                    <img class="wel-img" src="{{ asset('image/pics-home/hero-img.png') }}" alt="Resume template" style="width: 90% ;max-width: 600px;">
                </div>
            </div>
        </div>
    </div>

    <!-- Why Choose Rmaker __ Section -->
    <div class="w-100 why-section py-5">
        <div class="row text-center p-4 pt-0 m-0">
            <h2>Why Choose Rmaker?</h2>
        </div>
        <div class="w-100 pb-3">
            <div class="container why-main-content">
                <div class="row">
                    <div class="col-lg position-relative">
                        <img src="{{ asset('image/pics-home/employees-cv-candidates-resume.jpg') }}" alt="Resume template" style="width: 90%;opacity: 0;">
                        <img class="reas-img img-1 w-pic-active" src="{{ asset('image/pics-home/online-document-concept-illustration.jpg') }}" alt="Resume template">
                        <img class="reas-img img-2" src="{{ asset('image/pics-home/online-resume-concept-illustration.jpg') }}" alt="Resume template">
                        <img class="reas-img img-3" src="{{ asset('image/pics-home/businessman-choosing-options-computer.jpg') }}" alt="Resume template">
                        <img class="reas-img img-4" src="{{ asset('image/pics-home/personal-settings-concept-illustration.jpg') }}" alt="Resume template">
                        <img class="reas-img img-5" src="{{ asset('image/pics-home/download-concept-illustration.jpg') }}" alt="Resume template" style="max-width: 450px;">
                    </div>
                    <div class="col-lg d-flex flex-column justify-content-center align-items-start px-5">
                        <div class="reason reason-1 w-active">
                            <div class="bar-progress-reason"></div>
                            <h4>Tailored Templates</h4>
                            <p>We provide expertly designed resume templates for every industry, experience level, and style, catering to recent graduates, seasoned professionals, and career changers alike.</p>
                        </div>
                        <div class="reason reason-2">
                            <div class="bar-progress-reason"></div>
                            <h4>Easy Editing</h4>
                            <p>No technical skills required! Our intuitive editor lets you effortlessly add, edit, and format your resume content. Just click and type to create a stunning document that showcases your skills and achievements.</p>
                        </div>
                        <div class="reason reason-3">
                            <div class="bar-progress-reason"></div>
                            <h4>Dynamic Content Suggestions</h4>
                            <p>Struggling to find the right words? Our AI-powered suggestion engine provides real-time tips and examples to help you write compelling descriptions of your work experience, skills, and accomplishments.</p>
                        </div>
                        <div class="reason reason-4">
                            <div class="bar-progress-reason"></div>
                            <h4>Customization</h4>
                            <p>our resume should reflect your unique journey and aspirations. Customize fonts, colors, and layouts to make your resume stand out and truly represent you.</p>
                        </div>
                        <div class="reason reason-5">
                            <div class="bar-progress-reason"></div>
                            <h4>Instant PDF Downloads</h4>
                            <p>Once you're satisfied with your resume, simply download it as a high-quality PDF document ready to be shared with employers. No hidden fees or limitations.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 

    <!-- How It Works __ Section -->
    <div class="w-100 how-section py-5 set-section-bgcolor-darker">
        <div class="row text-center mb-4 m-0">
            <h2>How It Works</h2>
        </div>
        <div class="w-100 pb-3">
            <div class="container how-main-content d-flex flex-column align-items-center p-0">
                <div class="row set-section-bgcolor-fff my-4 p-4 w-75 show-step">
                    <div class="col-md ps-md-5 d-flex flex-column justify-content-center">
                        <h4>1. Sign Up</h4>
                        <p>Create your free account to get started on the path to a standout resume.</p>
                    </div>
                    <div class="col-md d-flex justify-content-center align-items-center">
                        <img src="{{ asset('image/pics-home/user-verification-sign-up.jpg') }}" alt="Sign Up">
                    </div>
                </div>
                <div class="row set-section-bgcolor-fff my-4 p-4 w-75">
                    <!--  -->
                    <div class="col-md d-none d-md-flex justify-content-center align-items-center">
                        <img src="{{ asset('image/pics-home/select-concept-illustration.jpg') }}" alt="">
                    </div>
                    <div class="col-md pe-md-5 d-flex flex-column justify-content-center">
                        <h4>2. Choose a Template</h4>
                        <p>Select a template that aligns with your career goals and style preferences.</p>
                    </div>
                    <!-- responsive -->
                    <div class="col-md d-md-none d-flex justify-content-center align-items-center">
                        <img src="{{ asset('image/pics-home/select-concept-illustration.jpg') }}" alt="Sign Up">
                    </div>
                </div>
                <div class="row set-section-bgcolor-fff my-4 p-4 w-75">
                    <div class="col-md ps-md-5 d-flex flex-column justify-content-center">
                        <h4>3. Enter Your Information</h4>
                        <p>Input your personal details, work experience, education, skills, and more. Our system will guide you every step of the way.</p>
                    </div>
                    <div class="col-md d-flex justify-content-center align-items-center">
                        <img src="{{ asset('image/pics-home/forms-concept-illustration.jpg') }}" alt="">
                    </div>
                </div>
                <div class="row set-section-bgcolor-fff my-4 p-4 w-75">
                    <!--  -->
                    <div class="col-md d-none d-md-flex justify-content-center align-items-center">
                        <img src="{{ asset('image/pics-home/design-team-concept-illustration.jpg') }}" alt="">
                    </div>
                    <div class="col-md pe-md-5 d-flex flex-column justify-content-center">
                        <h4>4. Edit and Customize</h4>
                        <p>Fine-tune your resume by editing content, formatting, and layout. Use our suggestions to improve your wording.</p>
                    </div>
                    <!-- responsive -->
                    <div class="col-md d-md-none d-flex justify-content-center align-items-center">
                        <img src="{{ asset('image/pics-home/design-team-concept-illustration.jpg') }}" alt="Sign Up">
                    </div>
                </div>
                <div class="row set-section-bgcolor-fff my-4 p-4 w-75">
                    <div class="col-md ps-md-5 d-flex flex-column justify-content-center">
                        <h4>5. Download and Share</h4>
                        <p>When you're ready, download your resume as a PDF or save it for future edits. Share it confidently with potential employers.</p>
                    </div>
                    <div class="col-md d-flex justify-content-center align-items-center">
                        <img src="{{ asset('image/pics-home/download-concept-illustration-2.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="slide-dots d-flex justify-content-center mt-3">
                <div class="dots d-flex justify-content-center position-relative">
                    <div class="dot-choosed"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                </div>
            </div>
        </div>
    </div> 

    <!-- Join us __ Section -->
    <div class="w-100 joinus-section py-5">
        <!-- <div class="row text-center mb-4 m-0">
            <h2>Join Thousands of Satisfied Users</h2>
        </div> -->
        <div class="w-100 pb-3">
            <div class="container joinus-main-content">
                <div class="row py-4">
                    <div class="col-lg position-relative mb-5 m-lg-0">
                        <img src="{{ asset('image/pics-home/download-concept-illustration-2.jpg') }}" alt="resume" style="opacity: 0;">
                        <img src="{{ asset('image/pics-home/boston-resume-templates.avif') }}" alt="Resumes">
                        <img src="{{ asset('image/pics-home/stockholm-resume-templates.avif') }}" alt="Resumes">
                        <img src="{{ asset('image/pics-home/toronto-resume-templates.avif') }}" alt="Resumes">
                    </div>
                    <div class="col-lg px-4 p-md-0 d-flex flex-column justify-content-center">
                        <h2 class="py-3">Join Thousands of Satisfied Users</h2>
                        <p>Rmaker has helped thousands of individuals like you create resumes that get noticed. Whether you're applying for your dream job, seeking a career change, or just want to keep your resume up-to-date, we're here to support your journey.</p>
                        <p>Take control of your career destiny today. Sign up for free and start building your winning resume with Rmaker. Your path to success begins here.</p>
                        <div class="joinus-btns mt-4 d-flex flex-wrap">
                            <a class="btn-createRe" href="{{route('templates.resume')}}">Create My Resume</a>
                            <a class="btn-exampleRe" href="{{route('templates.resume')}}">Resume Examples</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 

    <!-- Join us 2 __ Section -->
    <div class="w-100 joinus2-section py-5">
        <div class="container joinus2-main-content">
            <div class="row py-4">
                <div class="col-lg"></div>
                <div class="col-lg-6 text-center px-4 p-md-0 d-flex flex-column justify-content-center">
                    <h4 class="py-3">Let's embark on this journey together, where your career dreams become reality. Welcome to Rmaker, where your success story begins.</h4>
                    <p>Start for free — try our resume builder now</p>
                    <div class="joinus-btns mt-4 d-flex flex-wrap justify-content-center">
                        <a class="btn-createRe" href="{{route('templates.resume')}}">Try For Free</a>
                    </div>
                </div>
                <div class="col-lg"></div>
            </div>
        </div>
    </div> 

</div>

@endsection

@push('scripts')
<script src="{{ asset('js/home/script.js')}}"></script>
@endpush