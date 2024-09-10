
<div class="header">
    <div class="site-mobile-menu d-xl-none">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <i class="fa fa-times"></i>
            </div>
        </div>
        <hr>
        <div class="site-mobile-menu-body">
            <ul class="site-nav-wrap">
                <li><a href="/"><span>Home</span></a></li>
                <li><a href="/resume/templates"><span>Resume</span></a></li>
                <li><a href="/cover-letter/templates"><span>Cover Letter</span></a></li>
                <li><a href="#"><span>Blog</span></a></li>
                <li><a href="/about-us"><span>About</span></a></li>
            </ul>
            
            <ul class="site-nav-wrap nav-bottom">
                @if(Auth::check())
                <!-- DO NOT REMOVE THIS COMMENT __ User logined-->
                <li><a href="{{route('dashboard')}}"><span><i class="fa fa-user"></i> Account</span></a></li>
                <li><a href="{{route('user.logout')}}"><span>Sign Out <i class="fa fa-sign-out"></i></span></a></li>
                @else
                <li><a href="/login"><span>Sign In <i class="fa fa-sign-in"></i></span></a></li>
                @endif
            </ul>
        </div>
    </div>
    <header class="site-navbar position-fixed" role="banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-11 col-xl-2">
                    <h1 class="mb-0 site-logo">
                        <a href="/" class="mb-0" style="text-decoration: none;width: fit-content;display: block;">
                            <div class="logo d-flex align-items-end">
                                <img src="{{ URL::asset('image/logo/lg-rmaker2-black.png') }}" alt="Rmaker" class="me-1" style="width:33px;">
                            </div>
                        </a>
                    </h1>
                </div>

                <div class="col-12 col-md-10 d-none d-xl-block">
                    <nav class="site-navigation position-relative text-right d-flex justify-content-end" role="navigation">
                        <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block" style="width: fit-content;">
                            <li><a href="/"><span>Home</span></a></li>
                            <li><a href="/resume/templates"><span>Resume</span></a></li>
                            <li><a href="/cover-letter/templates"><span>Cover Letter</span></a></li>
                            <li><a href="#"><span>Blog</span></a></li>
                            <li><a href="/about-us"><span>About</span></a></li>

                            @if(Auth::check())
                            <!-- DO NOT REMOVE THIS COMMENT __ User logined -->
                            <li class="has-children li-login-account li-account">
                                <a href="#"><span><i class="fa fa-user-circle"></i> {{Auth::user()->firstname}} <i class="fa fa-angle-down"></i></span></a>
                                <ul class="dropdown">
                                    <!-- <li><a href="#">Your resumes</a></li> -->
                                    <!-- <li><a href="#">Your cover letters</a></li> -->
                                    <li><a href="{{route('dashboard')}}">Dashboard</a></li>
                                    <hr class="m-0">
                                    <li><a href="{{route('user.logout')}}">Sign Out <i class="fa fa-sign-out"></i></a></li>
                                </ul>
                            </li>
                            @else
                            <li class="li-login-account"><a href="/login"><span>Sign In <i class="fa fa-sign-in"></i></span></a></li>
                            @endif
                        </ul>
                    </nav>
                </div>
                <div class="col-1 d-xl-none ml-md-0 mr-auto text-end">
                    <span href="" class="site-menu-toggle js-menu-toggle">
                        <i class="fa-solid fa-bars"></i>
                    </span>
                </div>
            </div>
        </div>
        </div>
    </header>
</div>