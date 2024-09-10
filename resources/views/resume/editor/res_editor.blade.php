<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="./syle-resume-editor.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <title>Enter your informations</title>
    <link rel="stylesheet" href="{{ asset('css/resume/editor/style-resume-editor.css') }}">
</head>

<body>
    <div class="header">
        <header class="site-navbar" role="banner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col d-flex align-items-center">
                        <h1 class="mb-0 site-logo me-2 me-md-5">
                            <a href="/" class="mb-0" style="text-decoration: none;width: fit-content;display: block;">
                                <div class="logo d-flex align-items-end">
                                    <img src="{{ asset('image/logo/lg-rmaker2-black.png') }}" alt="Rmaker" class="me-1" style="width:33px;">
                                </div>
                            </a>
                        </h1>
                        <div class="header_steps ps-1 ps-md-5">
                            <h6 class="step-number">Step <span id="step-num">2</span> of 2</h6>
                            <h4 class="step-title m-0 dis-none form-active">Informations & Body</h4>
                        </div>
                    </div>

                    <div class="col d-block">
                        <nav class="site-navigation position-relative text-right d-flex justify-content-end" role="navigation">
                            <ul class="site-menu js-clone-nav mr-auto d-block mb-0" style="width: fit-content;">
                                <li class="li-home-btn"><a href="javascript:window.history.back();"><span>Back <i class="fa fa-home"></i></span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <div class="container-fluid body-personal-info">
        <div class="row h-100 position-relative overflow-hidden">
            <!-- Form Section -->
            <div class="col-lg-7 forms-section position-relative h-100">
                <!-- back button -->
                <!-- <div class="btn-back position-absolute" style="top: 40px;">
                    <a href="#"><i class="fa fa-arrow-left me-2"></i><span>Back</span></a>
                </div> -->

                <!-- personal information -->
                <div class="personal-info-form form-page">
                    <div class="form-header w-100 my-3">
                        <div class="header_title">
                            <div class="d-flex align-items-center">
                                <h4 class="title" contenteditable="true">Personal Details</h4>
                                <i class="fa fa-pencil-square-o"></i>
                            </div>
                            <p class="subtitle">Make sure employers have your contact information so they can set up interviews.</p>
                        </div>
                    </div>

                    <div class="information-form form py-3">
                        <div class="row mb-4 position-relative d-flex flex-md-row-reverse flex-column">
                            <div class="col-md-6 position-relative">
                                <input type="file" class="form-upload-photo" id="profile-photo" name="profile-photo" accept="image/*" hidden>
                                <label class="label-add-photo d-flex align-items-center mb-4 mb-md-0" for="profile-photo">
                                    <div class="user-photo position-relative">
                                        <img src="{{asset('templates/photo-users/default_photo.png')}}" class="preview-photo" alt="Profile Photo">
                                        <span class="upload-hover position-absolute"><i class="fa fa-upload"></i></span>
                                    </div>
                                    <span class="upload-title">Upload photo</span>
                                </label>
                            </div>
                            <div class="col-md-6 position-relative d-flex d-md-block">
                                <div class="col-6 col-md-12 pe-2 p-md-0 m-0 mb-md-4 position-relative">
                                    <input type="text" class="form-control" id="contact-firstname" placeholder="ex: John">
                                    <span class="input-placeholder ps-0" style="width: 60%;">Firstname</span>
                                </div>
                                <div class="col-6 col-md-12 ps-2 p-md-0 m-0 position-relative">
                                    <input type="text" class="form-control" id="contact-lastname" placeholder="ex: Smith">
                                    <span class="input-placeholder ps-0" style="width: 60%;">Lastname</span>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4 position-relative">
                            <input type="email" class="form-control" id="job-title" placeholder="ex: Account Manager">
                            <span class="input-placeholder">Job Title</span>
                        </div>
                        <div class="row mb-4 position-relative d-flex">
                            <div class="col-6 pe-2 position-relative">
                                <input type="text" class="form-control" id="contact-email" placeholder="example@gmail.com">
                                <span class="input-placeholder" style="width: 70%;left: calc(var(--bs-gutter-x)*.5 + 25px);">Email</span>
                            </div>
                            <div class="col-6 ps-2 position-relative">
                                <input type="text" class="form-control" id="contact-phone" placeholder="ex: (+84) 331583961">
                                <span class="input-placeholder" style="width: 70%;left: calc(var(--bs-gutter-x)*.5 + 22px);">Phone</span>
                            </div>
                        </div>
                        <div class="mb-4 position-relative">
                            <input type="tel" class="form-control" id="contact-address" placeholder="ex: District 7, Ho Chi Minh City.">
                            <span class="input-placeholder">Address</span>
                        </div>
                    </div>
                </div>

                <!-- professional summary -->
                <hr>
                <div class="summary-form-container form-page mb-5">
                    <div class="form-header w-100 my-3">
                        <div class="header_title">
                            <div class="d-flex align-items-center">
                                <h4 class="title" contenteditable="true">Summary</h4>
                                <i class="fa fa-pencil-square-o"></i>
                            </div>
                            <p class="subtitle">Mention your role, experience & most importantly - your biggest achievements, best qualities and skills in 2 or 3 short sentences (50-200 characters).</p>
                        </div>
                    </div>

                    <div class="hint-container py-3 px-4 my-4 bg-hint-container rounded position-relative">
                        <div class="hint-pre-text d-flex align-items-center">
                            <i class="fa fa-exclamation-circle me-3"></i><span class="hint-text">Explore our library of pre-written text to help you get started effortlessly.</span>
                        </div>
                        <div class="hover_show-guide position-absolute"></div>
                        <div class="guide-container p-4 position-absolute rounded">
                            <div class="use-guide">
                                <h6 class="guide-title">How to use?</h6>
                                <p class="guide-subtitle">Just click on the right corner!</p>
                                <img src="{{asset('image/videos/guide-preText.gif')}}" alt="How to use Pre-written Text" class="guide-gif">
                            </div>
                        </div>
                    </div>

                    <div class="main-summary-form form position-relative">
                        <div class="btn-add-container position-absolute">
                            <div class="btn-add-pre-write d-flex">
                                <span class="d-flex align-items-center">
                                    <i class="fa fa-plus-circle"></i>
                                    <span class="title-add-text">Add pre-written</span>
                                </span>
                            </div>
                        </div>
                        <div class="editor-textarea" id="editor-summary-container"></div>
                    </div>
                </div>


                <!-- history employment section -->
                <hr>
                <div class="history-employment-form form-page mb-5">
                    <div class="form-header w-100 my-3">
                        <div class="header_title">
                            <div class="d-flex align-items-center">
                                <h4 class="title" contenteditable="true">History Employment</h4>
                                <i class="fa fa-pencil-square-o"></i>
                            </div>
                            <p class="subtitle">Show your relevant experience (about last 10 years).</p>
                        </div>
                    </div>

                    <ul class="employment-inputs-form inputs-form ul-form p-0 mb-0"></ul>
                    <div class="add-employment-container add-container rounded py-2 px-3">
                        <strong class="add-employment"><i class="fa fa-plus me-2"></i><span>Add employment</span></strong>
                    </div>
                </div>


                <!-- education section -->
                <hr>
                <div class="education-form form-page mb-5">
                    <div class="form-header w-100 my-3">
                        <div class="header_title">
                            <div class="d-flex align-items-center">
                                <h4 class="title" contenteditable="true">Education</h4>
                                <i class="fa fa-pencil-square-o"></i>
                            </div>
                            <p class="subtitle">Start with your most recent period of education and work backwards.</p>
                        </div>
                    </div>

                    <ul class="education-inputs-form inputs-form ul-form p-0 mb-0"></ul>
                    <div class="add-education-container add-container rounded py-2 px-3">
                        <strong class="add-education"><i class="fa fa-plus me-2"></i><span>Add education</span></strong>
                    </div>
                </div>

                <!-- social section -->
                <hr>
                <div class="social-form form-page mb-5">
                    <div class="form-header w-100 my-3">
                        <div class="header_title">
                            <div class="d-flex align-items-center">
                                <h4 class="title" contenteditable="true">Websites and Social Links</h4>
                                <i class="fa fa-pencil-square-o"></i>
                            </div>
                            <p class="subtitle">You can add a link to your portfolio, LinkedIn profile, or personal website.</p>
                        </div>
                    </div>

                    <ul class="social-inputs-form inputs-form ul-form p-0 mb-0"></ul>
                    <div class="add-social-container add-container rounded py-2 px-3">
                        <strong class="add-social"><i class="fa fa-plus me-2"></i><span>Add social link</span></strong>
                    </div>
                </div>

                <!-- skill section -->
                <hr>
                <div class="skill-form form-page mb-5">
                    <div class="form-header w-100 my-3">
                        <div class="header_title">
                            <div class="d-flex align-items-center">
                                <h4 class="title" contenteditable="true">Skills</h4>
                                <i class="fa fa-pencil-square-o"></i>
                            </div>
                            <p class="subtitle">Ensure that your skills align with the necessary skills listed in the job posting.</p>
                        </div>
                    </div>

                    <div class="skill-form form py-1">
                        <div class="mb-4 position-relative">
                            <input type="text" class="form-control" id="skills" placeholder="Enter your skills" style="padding: 16px 25px;" onkeydown="enteredSkill(this)">
                            <div class="add-skill-container position-absolute">
                                <div class="add-btn"><i class="fa fa-plus me-2"></i><span>Add</span></div>
                            </div>
                        </div>
                    </div>
                    <ul class="list-skill ul-skills p-0 mb-0">
                        <!-- <li class="d-flex align-items-center">
                            <div class="skill-tag" contenteditable="true">Skill 1</div>
                            <i class="fa fa-times remove-skill"></i>
                        </li> -->
                        
                    </ul>
                </div>

                <!-- Languages section -->
                <hr>
                <div class="language-form form-page mb-5">
                    <div class="form-header w-100 my-3">
                        <div class="header_title">
                            <div class="d-flex align-items-center">
                                <h4 class="title" contenteditable="true">Languages</h4>
                                <i class="fa fa-pencil-square-o"></i>
                            </div>
                        </div>
                    </div>

                    <div class="skill-form form py-1">
                        <div class="mb-4 position-relative">
                            <input type="text" class="form-control" id="languages" placeholder="Enter your languages" style="padding: 16px 25px;" onkeydown="enteredLanguage(this)">
                            <div class="add-language-container position-absolute">
                                <div class="add-btn"><i class="fa fa-plus me-2"></i><span>Add</span></div>
                            </div>
                        </div>
                    </div>
                    <ul class="list-language ul-languages p-0 mb-0">
                        <!-- <li class="d-flex align-items-center">
                            <div class="skill-tag" contenteditable="true">Skill 1</div>
                            <i class="fa fa-times remove-skill"></i>
                        </li> -->
                        
                    </ul>
                </div>

                <div class="button-container">
                    <div class="btn-preview d-block d-lg-none">
                        <p>Preview & Download</p>
                    </div>
                    <div class="btn-save">
                        <p><a href="#">Save</a></p>
                    </div>
                </div>
            </div>

            <!-- Pre-written hints -->
            <!-- <div class="col-lg-5 bg-preview pre-written-section dis-none h-100">
                <div class="section-header w-100">
                    <div class="header_title d-flex justify-content-between align-items-center">
                        <h4 class="title m-0">Pre-written cover letters</h4>
                        <i class="fa fa-times close-pre-written"></i>
                    </div>
                </div>
                <div class="pre-written-options">
                    <div class="list-options tranditional-cl">
                        <p class="options-title text-uppercase">Tranditional cover letters</p>
                        <div class="options-cl" id="op-experienced">
                            <p><i class="option-check fa fa-plus-circle"></i><span class="option-name">Graduate / Experienced</span></p>
                        </div>
                        <div class="options-cl" id="op-re-graduate">
                            <p><i class="option-check fa fa-plus-circle"></i><span class="option-name">Recent graduate / Without experience</span></p>
                        </div>
                        <div class="options-cl" id="op-student">
                            <p><i class="option-check fa fa-plus-circle"></i><span class="option-name">Student</span></p>
                        </div>
                    </div>
                    <div class="list-options other-types-cl">
                        <p class="options-title text-uppercase">Other types of cover letters</p>
                        <div class="options-cl" id="op-internship">
                            <p><i class="option-check fa fa-plus-circle"></i><span class="option-name">Application for internship</span></p>
                        </div>
                        <div class="options-cl" id="op-career-change">
                            <p><i class="option-check fa fa-plus-circle"></i><span class="option-name">Career change</span></p>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- Preview Section -->
            <div class="col-lg-5 p-0 bg-preview preview-section d-none d-lg-block h-100">
                <div class="preview-content">
                    <div class="btn-download-container d-flex justify-content-end text-end mb-4">
                        <div class="btn-download" onclick="convertToPDF()"><i class="fa fa-download me-1"></i> Download PDF</div>
                    </div>
                    <div class="template-preview position-relative">
                        <div class="btn-full-preview-container">
                            <div class="btn-full-preview">
                                <i class="fa fa-arrows-alt"></i>
                            </div>
                        </div>
                        <div class="resume page page-1 p-0" id="resume-content">

                            @if($template->html != "")
                                {!! $template->html !!}
                            @else
                                Sorry! This template is not available!
                            @endif

                            <!-- <div class="preview-resume-content container-fluid p-0" style="height:1121px">
                                <div class="row resume-body h-100 m-0">
                                    <div class="col-4 p-0" style="background: #373d48; color: #fff;">
                                        <div class="photo-container d-flex justify-content-center align-items-center">
                                            <div class="preview-resume-photo" style="background: url({{asset('templates/photo-users/default_photo.png')}}) center / cover;"></div>
                                            <style>.preview-resume-photo{width: 160px;height: 160px;margin: 40px 0 20px 0;border-radius: 50%;}</style>
                                        </div>
                                        <div class="side-informations ps-5">
                                            <div class="info-section mb-3">
                                                <div class="mb-2 py-2" style="border-bottom: 2px solid #fff;">
                                                    <h4 class="section-title m-0 p-0">Contact</h4>
                                                </div>
                                                <div class="contact-information my-3 pe-4">
                                                    <strong>Phone</strong>
                                                    <p class="mb-3 contact-phone">(+84) 45698731</p>
                                                    <strong>Email</strong>
                                                    <p class="mb-3 contact-email">example123@gmail.com</p>
                                                    <strong>Address</strong>
                                                    <p class="mb-3 contact-address">District 7, HCM City.</p>
                                                </div>
                                            </div>
                                            <div class="info-section mb-3">
                                                <div class="mb-2 py-2" style="border-bottom: 2px solid #fff;">
                                                    <h4 class="section-title m-0 p-0">Education</h4>
                                                </div>
                                                <div class="edu-information my-3 pe-4">
                                                    <ul class="list-edu-info" style="list-style: none; padding: 0;">
                                                        <li>
                                                            <p class=" m-0 edu-year">2008</p>
                                                            <strong class="job-position">Enter Your Degree</strong>
                                                            <p class="uni-name">University/College</p>
                                                        </li>
                                                        <li>
                                                            <p class=" m-0 edu-year">2008</p>
                                                            <strong class="job-position">Enter Your Degree</strong>
                                                            <p class="uni-name">University/College</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="info-section mb-3">
                                                <div class="mb-2 py-2" style="border-bottom: 2px solid #fff;">
                                                    <h4 class="section-title m-0 p-0">Expertise</h4>
                                                </div>
                                                <div class="expertise-information my-3 pe-4">
                                                    <ul class="list-expertises-info" style="padding-left: 20px;">
                                                        <li>UI/UX</li>
                                                        <li>Visual Design</li>
                                                        <li>Wireframes</li>
                                                        <li>Storyboards</li>
                                                        <li>User Flows</li>
                                                        <li>Process Flows</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="info-section mb-3">
                                                <div class="mb-2 py-2" style="border-bottom: 2px solid #fff;">
                                                    <h4 class="section-title m-0 p-0">Language</h4>
                                                </div>
                                                <div class="lang-information my-3 pe-4">
                                                    <p class="mb-1"><strong>English</strong></p>
                                                    <p class="mb-1"><strong>Spanish</strong></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-8 h-100 p-4">
                                        <div class="resume-header pt-4 pb-2">
                                            <h1 class="contact-name mb-1" style="font-size: 2.3rem; color: #373d48;"><span class="contact-firstname" style="font-weight: 700;">Matthew</span> <span class="contact-lastname">Jones</span></h1>
                                            <p class="contact-job job-title mb-2" style="color: #373d48; font-size: 1.2rem; font-weight: 400; letter-spacing: 2px">Account Administration Assistant</p>
                                            <p class="intro-summary">Lorem ipsum, dolor sit amet consectetur adipisicing elit. A, vel odio. Cupiditate blanditiis ratione ipsam expedita quisquam nam. Quasi dicta hic nisi esse autem accusamus suscipit. Nam numquam tempora eum!</p>
                                        </div>

                                        <div class="res-body" style="color: #373d48;">
                                            <div class="info-section mb-3">
                                                <div class="mb-2 py-2" style="border-bottom: 2px solid #373d48;">
                                                    <h4 class="section-title m-0 p-0">Experience</h4>
                                                </div>
                                                <div class="exp-information my-3 pe-4">
                                                    <ul class="list-exp-info" style="list-style-type: circle;padding-left: 20px;">
                                                        <li>
                                                            <div class="exp-description position-relative">
                                                                <strong class=" m-0"><span class="exp-start-year">2019</span> - <span class="exp-stop-year">2022</span></strong>
                                                                <p class="mb-0"><span class="exp-company-name">Company Name</span> | <span class="company-address">123 Anywhere St., Any City</span></p>
                                                                <strong class="job-position mb-0" style="font-size: 1.1rem;">Job position here</strong>
                                                                <p class="position-description mb-4 d-inline-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis amet sit molestias consectetur deleniti quisquam, eum, necessitatibus hic distinctio eaque debitis quam incidunt nihil quod dolore facilis optio ipsa. Necessitatibus.</p>
                                                                <div class="process-line position-absolute" style="background-color:#373d48; width:2px; height: calc(100% - 5px); top: 15px; left: -15px;"></div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="exp-description position-relative">
                                                                <strong class=" m-0"><span class="exp-start-year">2017</span> - <span class="exp-stop-year">2019</span></strong>
                                                                <p class="mb-0"><span class="exp-company-name">Company Name</span> | <span class="company-address">123 Anywhere St., Any City</span></p>
                                                                <strong class="job-position mb-0" style="font-size: 1.1rem;">Job position here</strong>
                                                                <p class="position-description mb-4 d-inline-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis amet sit molestias consectetur deleniti quisquam, eum, necessitatibus hic distinctio eaque debitis quam incidunt nihil quod dolore facilis optio ipsa. Necessitatibus.</p>
                                                                <div class="process-line position-absolute" style="background-color:#373d48; width:2px; height: calc(100% - 5px); top: 15px; left: -15px;"></div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="exp-description position-relative">
                                                                <strong class=" m-0"><span class="exp-start-year">2015</span> - <span class="exp-stop-year">2017</span></strong>
                                                                <p class="mb-0"><span class="exp-company-name">Company Name</span> | <span class="company-address">123 Anywhere St., Any City</span></p>
                                                                <strong class="job-position mb-0" style="font-size: 1.1rem;">Job position here</strong>
                                                                <p class="position-description mb-4 d-inline-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis amet sit molestias consectetur deleniti quisquam, eum, necessitatibus hic distinctio eaque debitis quam incidunt nihil quod dolore facilis optio ipsa. Necessitatibus.</p>
                                                                <div class="process-line position-absolute" style="background-color:#373d48; width:2px; height: calc(100% - 5px); top: 15px; left: -15px;"></div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="info-section mb-3">
                                                <div class="mb-2 py-2" style="border-bottom: 2px solid #373d48;">
                                                    <h4 class="section-title m-0 p-0">Reference</h4>
                                                </div>
                                                <div class="reference-information my-3">
                                                    <ul class="list-ref-info d-flex flex-wrap justify-content-between" style="list-style: none; padding: 0;">
                                                        <li>
                                                            <div class="ref-detail pe-2" style="width: 225px;">
                                                                <p class="m-0 contact-name"><strong class="contact-firstname">Name</strong> <strong class="contact-lastname">Surname</strong></p>
                                                                <p class="m-0"><span class="ref-position">Job position</span>, <span class="ref-company-name">Company Name</span></p>
                                                                <p class="ref-contact m-0"><strong>Phone:</strong> <span class="ref-contact-phone">123456789</span></p>
                                                                <p class="ref-contact m-0"><strong>Email:</strong> <span class="ref-contact-email">hello@gmail.com</span></p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="ref-detail pe-2" style="width: 225px;">
                                                                <p class="m-0 contact-name"><strong class="contact-firstname">Name</strong> <strong class="contact-lastname">Surname</strong></p>
                                                                <p class="m-0"><span class="ref-position">Job position</span>, <span class="ref-company-name">Company Name</span></p>
                                                                <p class="ref-contact m-0"><strong>Phone:</strong> <span class="ref-contact-phone">123456789</span></p>
                                                                <p class="ref-contact m-0"><strong>Email:</strong> <span class="ref-contact-email">hello@gmail.com</span></p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>

                        <!-- <div class="cover-letter page page-2">
                            <div class="preview-letter-content container-fluid p-0">
                                <div class="row resume-body">
                                    <div class="col-8">
                                        <div class="body-content">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet laborum voluptatem maiores, ipsa odit aliquid ex doloremque, omnis quaerat est quam mollitia. Rerum molestiae numquam ea corrupti, sint doloremque cum! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero illum non ipsa ullam reprehenderit fuga blanditiis eligendi, voluptates placeat quas ad quo fugiat eum enim sit dicta dolores dolorem delectus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio assumenda cupiditate, repellendus modi distinctio blanditiis explicabo et reprehenderit perspiciatis expedita reiciendis laborum est ducimus voluptate quaerat consequuntur nihil error eaque!</p>
                                        </div>
                                    </div>
                                    <div class="col-4"></div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- full preview -->
    <div class="container-fluid bg-preview full-preview-container position-absolute dis-none">
        <div class="row">
            <div class="col-4 resume-templates-container bg-templates dis-none d-md-block">
                <div class="header-choose-templ pt-2 p-md-4">
                    <div class="header-title text-center text-white">
                        <h3>Choose Templates</h3>
                    </div>
                    <div class="btn-close-temps d-block d-md-none position-absolute" style="cursor: pointer; top: 5px; right: 10px; color: #ffffff8c;">
                        <i class="fa fa-times"></i>
                    </div>
                </div>

                <div class="row resume-templates">
                    @forelse($alltemplates as $templ)
                    <div class="col-lg-5 m-3 p-0 templates @if($templ->id == $template->id) template-choosed @endif" id="{{$templ->image}}">
                        <div class="template-img">
                            <img src="{{asset('templates/uploads/' . $templ->image)}}" alt="Resume Templates">
                            <a href="#"><i class="fa fa-check-circle"></i></a>
                        </div>
                    </div>
                    @empty
                    There are no templates available!
                    @endforelse
                    
                </div>
            </div>
            <div class="col p-0 bg-preview preview-section">
                <div class="full-preview-content">
                    <div class="header-full-prv d-flex justify-content-between">
                        <div class="btn-templates d-block d-md-none" style="cursor: pointer; font-size: 1.2rem; color: #505050;"><i class="fa fa-th-list"></i></div>
                        <div class="btn-download" onclick="convertToPDF()"><i class="fa fa-download me-1"></i> Download PDF</div>
                        <div class="btn-close-full-preview" style="cursor: pointer; font-size: 1.2rem; color: #888888;"><i class="fa fa-times"></i></div>
                    </div>
                    <div class="template-full-preview">
                        <div class="resume-full-preview page-preview page-1 position-relative p-0">
                            @if($template->html != "")
                                {!! $template->html !!}
                            @else
                                Sorry! This template is not available!
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="{{ asset('js/resume/script.js') }}"></script>
<script src="{{ asset('js/resume/functionSection.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script>
    document.querySelectorAll('.editor-textarea').forEach((editor, index) => {
        var quill = new Quill(editor, {
            theme: 'snow'
        });
    })

    document.querySelector('.add-employment-container').addEventListener('click', ()=>{
        setTimeout(() => {
            const newLiEl = document.querySelectorAll('.employment-info-form');
            const lastLi = newLiEl[newLiEl.length - 1];
            var quill = new Quill(lastLi.querySelector('.editor-textarea'), {
                theme: 'snow'
            });
        }, 1);
    });
    document.querySelector('.add-education-container').addEventListener('click', ()=>{
        setTimeout(() => {
            const newLiEl = document.querySelectorAll('.education-info-form');
            const lastLi = newLiEl[newLiEl.length - 1];
            var quill = new Quill(lastLi.querySelector('.editor-textarea'), {
                theme: 'snow'
            });
        }, 1);
    });
</script>

</html>