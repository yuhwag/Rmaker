@extends('layout')
@section('title', 'About Us')
@section('content')

@push('head')
    <link rel="stylesheet" href="{{ asset('css/about/style.css') }}">
@endpush

<div class="container-fluid m-0 p-0 body-aboutpage">
    <div class="ab-header w-100">
        <h1>About Us</h1>
    </div>
    <div class="row about-content m-0">
        <div class="col-lg"></div>
        <div class="col-lg-7 px-5 px-lg-0">
            <div class="ab-row about-1">
                <p>At Rmaker, we are deeply committed to empowering individuals in their career journeys. We recognize that your professional path is a unique and evolving narrative, and we are dedicated to being your steadfast partner in shaping it.</p>
                <p>Our mission at Rmaker is rooted in the belief that everyone should have the opportunity to tell their professional story with confidence.</p>
            </div>
            <div class="ab-row about-2">
                <h4>Our Mission</h4>
                <p>Our core mission is to simplify the process of crafting impactful resumes and cover letters, making it accessible, efficient, and effective for job seekers at every stage of their careers.</p>
                <p>In a competitive job market, we understand that your resume is often the first introduction to potential employers.</p>  
                <p>We want to ensure that this introduction is not just impressive but also truly reflective of your skills and aspirations and our platform is designed to empower you to create resumes that not only stand out but also resonate with your unique professional identity.</p>
            </div>
            <div class="ab-row about-3">
                <h4>Experience and Expertise</h4>
                <p>Backed by a team of seasoned experts in the fields of career development and resume creation, Rmaker brings a wealth of knowledge to our platform. Our experts are dedicated to staying at the forefront of industry trends, ensuring that our users have access to the latest and most effective resume-building solutions. </p>
                <p>Whether you're a recent graduate embarking on your first job search or an experienced professional aiming for career growth, our platform is tailored to meet your specific needs and aspirations.</p>
            </div>
            <div class="ab-row about-4">
                <h4>Community and Support</h4>
                <p>At Rmaker, we believe in the power of community and support in achieving career success. When you choose Rmaker, you're not just gaining access to a resume-building tool; you're becoming part of a network of like-minded individuals who share your passion for professional growth.</p>
                <p>We encourage collaboration, knowledge sharing, and mutual support to help you navigate the twists and turns of your career journey. Together, we can achieve our professional goals and celebrate each other's successes.</p>
            </div>
            <div class="ab-row about-5">
                <h4>Our Team</h4>
                <div class="row m-0 members d-none active">
                    <div class="col-md member my-4">
                        <q class="member-quote mb-5">Your resume is the most important thing in your application. Our goal is to help job applicants from every field land their dream job.</q>
                        <div class="bottom-mem d-flex flex-wrap justify-content-between">
                            <div class="member-info">
                                <div class="member-name">Ngo Quang Huy</div>
                                <div class="member-position">Developer</div>
                            </div>
                            <div class="btn-next-prev d-flex align-items-end">
                                <div class="btn-prev-mem"><i class="fa fa-angle-left"></i></div>
                                <div class="btn-next-mem"><i class="fa fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 member-pic my-4 ms-md-4 p-0 d-flex justify-content-center d-md-block">
                        <img src="{{ asset('image/pics-about/members/3d-illustration-human-avatar-profile.jpg') }}" alt="Team member">
                    </div>
                </div>

                <div class="row m-0 members d-none">
                    <div class="col-md member mt-4">
                        <q class="member-quote mb-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo enim necessitatibus aperiam nesciunt eaque eum, eligendi, ab voluptatum laudantium recusandae laborum deserunt nulla incidunt itaque doloribus nobis modi, porro eos!</q>
                        <div class="bottom-mem d-flex flex-wrap justify-content-between">
                            <div class="member-info">
                                <div class="member-name">Alex Smith</div>
                                <div class="member-position">Developer</div>
                            </div>
                            <div class="btn-next-prev d-flex align-items-end">
                                <div class="btn-prev-mem"><i class="fa fa-angle-left"></i></div>
                                <div class="btn-next-mem"><i class="fa fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 member-pic mt-4 ms-md-4 p-0 d-flex justify-content-center d-md-block">
                        <img src="{{ asset('image/pics-about/members/3d-illustration-person-with-sunglasses.jpg') }}" alt="Team member">
                    </div>
                </div>

                <div class="row m-0 members d-none">
                    <div class="col-md member mt-4">
                        <q class="member-quote mb-5">AM Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore magni fugit corrupti accusamus quaerat vitae adipisci in amet tempora eaque nostrum similique exercitationem provident, nobis quibusdam nam deleniti odit dignissimos?!</q>
                        <div class="bottom-mem d-flex flex-wrap justify-content-between">
                            <div class="member-info">
                                <div class="member-name">Alice Mount</div>
                                <div class="member-position">Content Writer</div>
                            </div>
                            <div class="btn-next-prev d-flex align-items-end">
                                <div class="btn-prev-mem"><i class="fa fa-angle-left"></i></div>
                                <div class="btn-next-mem"><i class="fa fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 member-pic mt-4 ms-md-4 p-0 d-flex justify-content-center d-md-block">
                        <img src="{{ asset('image/pics-about/members/3d-illustration-female-person-with-sunglasses.jpg') }}" alt="Team member">
                    </div>
                </div>                    
            </div>
            <div class="ab-row about-6">
                <h4>Your Journey Starts Here</h4>
                <p>No matter where you are on your career path, whether you're a recent graduate with dreams of your first job or an experienced professional looking to make a significant change, Rmaker is here to guide you.</p>
                <p>Our mission is to collaborate with you in creating resumes and cover letters that not only open doors but also tell your unique professional story.</p>
                <p>Your journey towards career success starts with Rmaker, and we're excited to be part of it.</p>
            </div>
        </div>
        <div class="col-lg"></div>
    </div>
</div>

@endsection

@push('scripts')
<script src="{{ asset('js/about/script.js')}}"></script>
@endpush