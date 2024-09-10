@extends('layout')
@section('title', 'Choose your template!')
@section('content')

@push('head')
    <link rel="stylesheet" href="{{ asset('css/cover-letter/style.css') }}">
@endpush
<!-- 
<div class="loader position-fixed w-100 h-100">
    <i class="fa fa-spinner"></i>
</div> -->
<div class="header">
    <header class="site-navbar position-fixed" role="banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col d-flex align-items-center">
                    <h1 class="mb-0 site-logo me-5">
                        <a href="/" class="mb-0" style="text-decoration: none;width: fit-content;display: block;">
                            <div class="logo d-flex align-items-end">
                                <img src="{{ asset('/image/logo/lg-rmaker2-black.png') }}" alt="Rmaker" class="me-1" style="width:33px;">
                            </div>
                        </a>
                    </h1>
                    <div class="header_steps ps-5">
                        <h6 class="step-number">Step 1 of 2</h6>
                        <h4 class="step-title m-0">Templates</h4>
                    </div>
                </div>

                <div class="col d-block">
                    <nav class="site-navigation position-relative text-right d-flex justify-content-end" role="navigation">
                        <ul class="site-menu js-clone-nav mr-auto d-block mb-0" style="width: fit-content;">
                            <li class="li-home-btn"><a href="/"><span>Home <i class="fa fa-home"></i></span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
</div>

<div class="container-fluid m-0 p-0 body-cover-letter">
    <div class="letter-header w-100">
        <div class="header_title">
            <h3 class="title text-center">Choose a template to create your new cover letter</h3>
            <p class="subtitle text-center">Pick your favorite! You'll be able to change it later</p>
        </div>
    </div>
    <div class="w-100 p-5 bg-cvletter">
        <div class="container d-flex justify-content-center">
            <div class="letter-templates">
                @forelse ($templates as $template)
                <div class="templates">
                    <div class="template-name">
                        <h6>{{ $template->name }}</h6>
                    </div>
                    <div class="template-img">
                        <img src="{{ asset('/templates/uploads/' . $template->image) }}" alt="Cover Letter Templates">
                        <a href="/cover-letter/templates/edit/{{ $template->id }}"><span><i class="fa fa-clone"></i> Use this template</span></a>
                    </div>
                </div>
                @empty
                <p>No templates</p>
                @endforelse
                <!-- <div class="templates">
                    <div class="template-name">
                        <h6>Template 1</h6>
                    </div>
                    <div class="template-img">
                        <img src="{{ asset('/templates/letter/stockholm-cover-letter-templates.avif') }}" alt="Cover Letter Templates">
                        <a href="#"><span><i class="fa fa-clone"></i> Use this template</span></a>
                    </div>
                </div>
                <div class="templates">
                    <div class="template-name">
                        <h6>Template 2</h6>
                    </div>
                    <div class="template-img">
                        <img src="../templates/letter/new-york-cover-letter-templates.avif" alt="Cover Letter Templates">
                        <a href="#"><span><i class="fa fa-clone"></i> Use this template</span></a>
                    </div>
                </div>
                <div class="templates">
                    <div class="template-name">
                        <h6>Template 3</h6>
                    </div>
                    <div class="template-img">
                        <img src="../templates/letter/berlin-cover-letter-templates.avif" alt="Cover Letter Templates">
                        <a href="#"><span><i class="fa fa-clone"></i> Use this template</span></a>
                    </div>
                </div>
                <div class="templates">
                    <div class="template-name">
                        <h6>Template 4</h6>
                    </div>
                    <div class="template-img">
                        <img src="../templates/letter/template-1.png" alt="Cover Letter Templates">
                        <a href="#"><span><i class="fa fa-clone"></i> Use this template</span></a>
                    </div>
                </div>
                <div class="templates">
                    <div class="template-name">
                        <h6>Template 5</h6>
                    </div>
                    <div class="template-img">
                        <img src="../templates/letter/template-2.png" alt="Cover Letter Templates">
                        <a href="#"><span><i class="fa fa-clone"></i> Use this template</span></a>
                    </div>
                </div>
                <div class="templates">
                    <div class="template-name">
                        <h6>Template 6</h6>
                    </div>
                    <div class="template-img">
                        <img src="../templates/letter/template-3.png" alt="Cover Letter Templates">
                        <a href="#"><span><i class="fa fa-clone"></i> Use this template</span></a>
                    </div>
                </div>
                <div class="templates">
                    <div class="template-name">
                        <h6>Template 7</h6>
                    </div>
                    <div class="template-img">
                        <img src="../templates/letter/template-4.png" alt="Cover Letter Templates">
                        <a href="#"><span><i class="fa fa-clone"></i> Use this template</span></a>
                    </div>
                </div>
                <div class="templates">
                    <div class="template-name">
                        <h6>Template 8</h6>
                    </div>
                    <div class="template-img">
                        <img src="../templates/letter/template-5.png" alt="Cover Letter Templates">
                        <a href="#"><span><i class="fa fa-clone"></i> Use this template</span></a>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>