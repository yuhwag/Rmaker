<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="./syle-letter-editor.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <title>Enter your informations</title>
    <link rel="stylesheet" href="{{ asset('css/cover-letter/editor/style-letter-editor.css') }}">
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
            <!-- @if(isset($covDocuments))
            <div>{{ $covDocuments->id }}</div>
            @endif -->
        <div class="row h-100 position-relative overflow-hidden">
            <!-- Form Section -->
            <form class="col-lg-7 forms-section position-relative h-100" action="@if(isset($covDocuments)) {{ route('cov.update', [$covDocuments->id]) }} @else {{ route('cov.save') }} @endif" method="post">
                @csrf

                <input type="hidden" name="id_user" id="id_user" @if(Auth::check()) value="{{Auth::user()->id}}" @endif>
                <input type="hidden" name="img_template" id="img_template" value="{{ $template->image }}">
                <!-- personal information -->
                <div class="personal-info-form form-page">
                    <div class="form-header w-100 my-3">
                        <div class="header_title">
                            <h4 class="title">Personal Details</h4>
                            <p class="subtitle">Make sure employers have your contact information so they can set up interviews.</p>
                        </div>
                    </div>

                    <div class="information-form form py-3">
                        <div class="row mb-4 position-relative d-flex">
                            <div class="col-6 pe-2 position-relative">
                                <input type="text" class="form-control" id="contact-firstname" name="contact_firstname" placeholder="ex: John" @if(isset($covDocuments)) value="{{$covDocuments->contact_firstname}}" @endif>
                                <span class="input-placeholder" style="width: 60%;left: calc(var(--bs-gutter-x)*.5 + 25px);">Firstname</span>
                            </div>
                            <div class="col-6 ps-2 position-relative">
                                <input type="text" class="form-control" id="contact-lastname" name="contact_lastname" placeholder="ex: Smith" @if(isset($covDocuments)) value="{{$covDocuments->contact_lastname}}" @endif>
                                <span class="input-placeholder" style="width: 60%;left: calc(var(--bs-gutter-x)*.5 + 22px);">Lastname</span>
                            </div>
                        </div>
                        <div class="mb-4 position-relative">
                            <input type="text" class="form-control" id="job-title" name="job_title" placeholder="ex: Account Manager"  @if(isset($covDocuments)) value="{{$covDocuments->job_title}}" @endif>
                            <span class="input-placeholder">Job Title</span>
                        </div>
                        <div class="row mb-4 position-relative d-flex">
                            <div class="col-6 pe-2 position-relative">
                                <input type="email" class="form-control" id="contact-email" name="contact_email" placeholder="example@gmail.com" @if(isset($covDocuments)) value="{{$covDocuments->contact_email}}" @endif>
                                <span class="input-placeholder" style="width: 70%;left: calc(var(--bs-gutter-x)*.5 + 25px);">Email</span>
                            </div>
                            <div class="col-6 ps-2 position-relative">
                                <input type="text" class="form-control" id="contact-phone" name="contact_phone" placeholder="ex: (+84) 331583961" @if(isset($covDocuments)) value="{{$covDocuments->contact_phone}}" @endif>
                                <span class="input-placeholder" style="width: 70%;left: calc(var(--bs-gutter-x)*.5 + 22px);">Phone</span>
                            </div>
                        </div>
                        <div class="mb-4 position-relative">
                            <input type="text" class="form-control" id="contact-address" name="contact_address" placeholder="ex: District 7, Ho Chi Minh City." @if(isset($covDocuments)) value="{{$covDocuments->contact_address}}" @endif>
                            <span class="input-placeholder">Address</span>
                        </div>
                    </div>
                </div>


                <!-- recipient information -->
                <div class="recipient-info-form form-page">
                    <div class="form-header w-100 my-3">
                        <div class="header_title">
                            <h4 class="title">Employer Details</h4>
                            <p class="subtitle">Make sure you input the information accurately. The fields you are unsure of can be left blank.</p>
                        </div>
                    </div>

                    <div class="recipient-form form py-3">
                        <div class="row mb-4 position-relative d-flex">
                            <div class="col-6 pe-2 position-relative">
                                <input type="text" class="form-control" id="greeting" name="greeting" placeholder="ex: Dear" @if(isset($covDocuments)) value="{{$covDocuments->greeting}}" @endif>
                                <span class="input-placeholder" style="width: 60%;left: calc(var(--bs-gutter-x)*.5 + 25px);">Greeting</span>
                            </div>
                            <div class="col-6 ps-2 position-relative">
                                <input type="text" class="form-control" id="recipient-title-name" name="recipient_title" placeholder="ex: Mrs." @if(isset($covDocuments)) value="{{$covDocuments->recipient_title}}" @endif>
                                <span class="input-placeholder" style="width: 60%;left: calc(var(--bs-gutter-x)*.5 + 22px);">Title</span>
                            </div>
                        </div>
                        <div class="row mb-4 position-relative d-flex">
                            <div class="col-6 pe-2 position-relative">
                                <input type="text" class="form-control" id="recipient-firstname" name="recipient_firstname" placeholder="ex: Jenkins" @if(isset($covDocuments)) value="{{$covDocuments->recipient_firstname}}" @endif>
                                <span class="input-placeholder" style="width: 60%;left: calc(var(--bs-gutter-x)*.5 + 25px);">Firstname</span>
                            </div>
                            <div class="col-6 ps-2 position-relative">
                                <input type="text" class="form-control" id="recipient-lastname" name="recipient_lastname" placeholder="ex: Hawk" @if(isset($covDocuments)) value="{{$covDocuments->recipient_lastname}}" @endif>
                                <span class="input-placeholder" style="width: 60%;left: calc(var(--bs-gutter-x)*.5 + 22px);">Lastname</span>
                            </div>
                        </div>
                        <div class="mb-4 position-relative">
                            <input type="text" class="form-control" id="company-name" name="company_name" placeholder="ex: Maste Foods" @if(isset($covDocuments)) value="{{$covDocuments->company_name}}" @endif>
                            <span class="input-placeholder">Company Name</span>
                        </div>
                    </div>
                </div>

                <!-- main content Cover Letter -->
                <div class="main-content-form form-page">
                    <div class="form-header w-100 my-3">
                        <div class="header_title">
                            <h4 class="title">Letter Details</h4>
                            <p class="subtitle">Sum up your motivations, experience, and key skills in 3 or 4 short paragraphs.</p>
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
                                <img src="{{ asset('image/videos/guide-preText.gif') }}" alt="How to use Pre-written Text" class="guide-gif">
                            </div>
                        </div>
                    </div>

                    <div class="main-form form position-relative">
                        <div class="btn-add-container position-absolute">
                            <div class="btn-add-pre-write d-flex">
                                <span class="d-flex align-items-center">
                                    <i class="fa fa-plus-circle"></i>
                                    <span class="title-add-text">Add pre-written</span>
                                </span>
                            </div>
                        </div>
                        <div id="editor-container"></div>
                        <input type="hidden" id="doc-body" name="doc_body" @if(isset($covDocuments)) value="{{$covDocuments->doc_body}}" @endif>
                    </div>
                </div>

                <div class="button-container">
                    <div class="btn-preview d-block d-lg-none">
                        <p>Preview & Download</p>
                    </div>
                    <div class="btn-save">
                        <!-- <p>Save</p> -->
                        <button type="submit">Save</button>
                    </div>
                </div>

                <!-- previous/next part -->
                <!-- <div class="btn-next-prev w-lg-100 mt-4 py-3 d-flex justify-content-between align-items-center d-none" data-page-index="0">
                    <div class="btn-prev"><i class="fa fa-arrow-left"></i> Previous</div>
                    <div class="full-preview d-flex d-lg-none">
                        <span class="d-flex align-items-center">
                            <i class="fa fa-arrows-alt me-1"></i>
                            <span class="title-full-preview d-none d-sm-block">Preview</span>
                        </span> 
                    </div>
                    <div class="btn-next">Next <i class="fa fa-arrow-right"></i></div>
                </div> -->
            </form>


            <!-- Pre-written hints -->
            <div class="col-lg-5 bg-preview pre-written-section dis-none h-100">
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
            </div>

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
                        <div class="cover-letter page page-1 p-0" id="cover-letter-content">
                            @if($template->html != "")
                                {!! $template->html !!}
                            @else
                                Sorry! This template is not available!
                            @endif
                            <!-- <div class="preview-letter-content container-fluid">
                                <div class="cover_letter-header contact_info">
                                    <h3 class="contact-name mb-1" style="font-size: 1.6rem;"><span class="contact-firstname">Matthew</span> <span class="contact-lastname">Jones</span></h3>
                                    <p class="contact-job job-title" style="color: #7a7a7a; font-weight: 500;">Account Administration Assistant</p>
                                </div>

                                <div class="row cover-letter-body h-100">
                                    <div class="col-8 h-100">
                                        <p class="my-2"><span class="greeting">Dear</span> <span class="recipient-title-name">Mrs.</span> <span class="recipient-firstname">Jenkins</span>,</p>
                                        <div class="mb-3 body-content">
                                            <p>I have recently been informed of a new position available at your company as an Account Administration Assistant and I attach to this letter my resume as part of my application for this role.
                                                As can be seen in my resume, I have years of experience in administration and with client relations which I believe are central to any business and therefore I dedicate a great deal of my time to improving communications and human relations within the workplace.
                                                I also often do new courses in IT and business administration related subjects in order to keep up-to-date with the latest methods and technologies available to carry out my tasks in client account administration support and optimize systems and processes throughout the office.
                                                In addition to my vast experience and varied skills, I feel I would be able to offer new ideas and a fresh perspective to your company and look forward to our future collaboration. Thank you for considering my application. For any further details or references, do not hesitate to contact me.
                                            </p>
                                        </div>
                                        <i>Yours sincerely</i>
                                        <p class="my-1 contact-name"><strong class="contact-firstname">Matthew</strong> <strong class="contact-lastname">Jones</strong></p>
                                    </div>
                                    <div class="col-4">
                                        <div class="recipient_information my-2">
                                            <strong>To</strong>
                                            <p class="my-1 company-name">Maste Foods</p>
                                            <p class="my-1 recipient-name"><span class="recipient-title-name">Mrs.</span> <span class="recipient-firstname">Jenkins</span> <span class="recipient-lastname">Hawk</span></p>
                                        </div>
                                        <div class="contact_information my-4">
                                            <strong>From</strong>
                                            <p class="my-1 contact-name"><span class="contact-firstname">Matthew</span> <span class="contact-lastname">Jones</span></p>
                                            <p class="my-1 job-title">Account Administration Assistant</p>
                                            <p class="my-1 contact-address">Nguyen Huu Tho, District 7, Ho Chi Minh City.</p>
                                            <p class="my-1 contact-phone">(+84) 45698731</p>
                                            <p class="my-1"><a href="#" class="contact-email">example123@gmail.com</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>

                        <!-- <div class="cover-letter page page-2">
                            <div class="preview-letter-content container-fluid p-0">
                                <div class="row cover-letter-body">
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
    <div class="container-fluid bg-preview full-preview-container position-absolute dis-none" style="z-index: 2000;">
        <div class="row">
            <div class="col-4 letter-templates-container bg-templates dis-none d-md-block">
                <div class="header-choose-templ pt-3">
                    <div class="header-title text-center text-white">
                        <h3>Choose Templates</h3>
                    </div>
                    <div class="btn-close-temps d-block d-md-none position-absolute" style="cursor: pointer; top: 5px; right: 10px; color: #ffffff8c;">
                        <i class="fa fa-times"></i>
                    </div>
                </div>

                <div class="row letter-templates">
                    @forelse($alltemplates as $templ)
                    <div class="col-lg-5 m-3 p-0 templates @if($templ->id == $template->id) template-choosed @endif" id="{{ $templ->image }}">
                        <div class="template-img">
                            <img src="{{ asset('/templates/uploads/' . $templ->image) }}" alt="Cover Letter Templates">
                            <a href="#"><i class="fa fa-check-circle"></i></a>
                        </div>
                    </div>
                    @empty
                    There are no templates available!
                    @endforelse

                    <!-- <div class="col-lg-5 m-3 p-0 templates template-choosed" id="template-2">
                        <div class="template-img">
                            <img src="{{ asset('templates/uploads/new-york-cover-letter-templates.avif') }}" alt="Cover Letter Templates">
                            <a href="#"><i class="fa fa-check-circle"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-5 m-3 p-0 templates" id="template-3">
                        <div class="template-img">
                            <img src="{{ asset('templates/uploads/berlin-cover-letter-templates.avif') }}"  alt="Cover Letter Templates">
                            <a href="#"><i class="fa fa-check-circle"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-5 m-3 p-0 templates" id="template-4">
                        <div class="template-img">
                            <img src="{{ asset('templates/uploads/template-1.png') }}" alt="Cover Letter Templates">
                            <a href="#"><i class="fa fa-check-circle"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-5 m-3 p-0 templates" id="template-5">
                        <div class="template-img">
                            <img src="{{ asset('templates/uploads/template-2.png') }}" alt="Cover Letter Templates">
                            <a href="#"><i class="fa fa-check-circle"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-5 m-3 p-0 templates" id="template-6">
                        <div class="template-img">
                            <img src="{{ asset('templates/uploads/template-3.png') }}" alt="Cover Letter Templates">
                            <a href="#"><i class="fa fa-check-circle"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-5 m-3 p-0 templates" id="template-7">
                        <div class="template-img">
                            <img src="{{ asset('templates/uploads/template-4.png') }}" alt="Cover Letter Templates">
                            <a href="#"><i class="fa fa-check-circle"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-5 m-3 p-0 templates" id="template-8">
                        <div class="template-img">
                            <img src="{{ asset('templates/uploads/template-5.png') }}" alt="Cover Letter Templates">
                            <a href="#"><i class="fa fa-check-circle"></i></a>
                        </div>
                    </div> -->
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
                        <div class="cover-letter-full-preview page-preview page-1 position-relative p-0">

                            @if($template->html != "")
                                {!! $template->html !!}
                            @else
                                Sorry! This template is not available!
                            @endif
                            
                            <!-- <div class="full-preview-letter-content container-fluid">
                                <div class="cover_letter-header contact_info">
                                    <h3 class="contact-name mb-1" style="font-size: 1.6rem;"><span class="contact-firstname">Matthew</span> <span class="contact-lastname">Jones</span></h3>
                                    <p class="contact-job job-title" style="color: #7a7a7a; font-weight: 500;">Account Administration Assistant</p>
                                </div>

                                <div class="row cover-letter-body">
                                    <div class="col-8">
                                        <p class="my-2"><span class="greeting">Dear</span> <span class="recipient-title-name">Mrs.</span> <span class="recipient-firstname">Jenkins</span>,</p>
                                        <div class="mb-3 body-content">
                                            <p>I have recently been informed of a new position available at your company
                                                as an Financial Analyst and I attach to this letter my resume as part of
                                                my application for this role.
                                                As can be seen in my resume, I have years of experience in
                                                administration and with client relations which I believe are central to
                                                any business and therefore I dedicate a great deal of my time to
                                                improving communications and human relations within the workplace.
                                                I also often do new courses in IT and business administration related
                                                subjects in order to keep up-to-date with the latest methods and
                                                technologies available to carry out my tasks in client account
                                                administration support and optimize systems and processes throughout the
                                                office.
                                                In addition to my vast experience and varied skills, I feel I would be
                                                able to offer new ideas and a fresh perspective to your company and look
                                                forward to our future collaboration. Thank you for considering my
                                                application. For any further details or references, do not hesitate to
                                                contact me.
                                            </p>
                                        </div>
                                        <i>Yours sincerely</i>
                                        <p class="my-1 contact-name"><strong class="contact-firstname">Matthew</strong>
                                            <strong class="contact-lastname">Jones</strong></p>
                                    </div>
                                    <div class="col-4">
                                        <div class="recipient_information my-2">
                                            <strong>To</strong>
                                            <p class="my-1 company-name">Maste Foods</p>
                                            <p class="my-1 recipient-name"><span class="recipient-title-name">Mrs.</span> <span class="recipient-firstname">Jenkins</span> <span class="recipient-lastname">Hawk</span></p>
                                        </div>
                                        <div class="contact_information my-4">
                                            <strong>From</strong>
                                            <p class="my-1 contact-name"><span class="contact-firstname">Matthew</span> <span class="contact-lastname">Jones</span></p>
                                            <p class="my-1 job-title">Account Administration Assistant</p>
                                            <p class="my-1 contact-address">Nguyen Huu Tho, District 7, Ho Chi Minh City.</p>
                                            <p class="my-1 contact-phone">(+84) 45698731</p>
                                            <p class="my-1"><a href="#" class="contact-email">example123@gmail.com</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="{{ asset('js/cover-letter/editor/script.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script>
    var quill = new Quill('#editor-container', {
        theme: 'snow'
    });
</script>
