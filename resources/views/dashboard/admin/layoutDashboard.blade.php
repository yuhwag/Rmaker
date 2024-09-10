<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/dashboard/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard/style-admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard/dark-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard/responsive.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/719a6dea95.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Dashboard</title>
    @stack('head')
</head>

<body>
    <div class="container-fluid m-0 p-0 dashboard-container d-flex @if(Auth::user()->dark_mode) dark @endif">
        <div class="btn-show-hide-nav show-nav position-absolute d-md-none">
            <i class="fa-solid fa-bars"></i>
        </div>
        <div class="side-container nav-expanded">
            <div class="d-none d-md-flex exp-col-btn"><i class="fa-solid fa-angle-right close"></i></div>
            <div class="side-navigation">
                <ul>
                    <a href="/" class="nav-header d-flex align-items-end">
                        <div class="rmaker-img">
                            <img class="black-logo" src="{{ asset('image/logo/lg-rmaker2-black.png') }}" alt="Avatar Profile">
                            <img class="white-logo" src="{{ asset('image/logo/lg-rmaker2-white.png') }}" alt="Avatar Profile">
                        </div>
                        <div class="rmaker-title">
                            <div class="title">Rmaker</div>
                        </div>
                    </a>
                    <a href="{{route('dashboard.admin.templates')}}" class="templates nav-li @if($page == 'templates') li-active @endif"><span class="fa-solid fa-newspaper"></span><span>Templates</span></a>
                    <a href="{{route('dashboard.admin.users')}}" class="users nav-li @if($page == 'users') li-active @endif"><span class="fa-solid fa-users"></span><span>Users</span></a>
                    <a href="{{route('dashboard.admin.profile')}}" class="profile nav-li @if($page == 'profile') li-active @endif"><span class="fa-solid fa-circle-user"></span><span>Profile</span></a>
                    <a href="{{route('dashboard.admin.setting')}}" class="setting nav-li @if($page == 'setting') li-active @endif"><span class="fa-solid fa-gear"></span><span>Setting</span></a>
                </ul>

                <ul>
                    <a href="{{route('dashboard.help')}}" class="help nav-li"><span class="fa-solid fa-lightbulb"></span><span>Help</span></a>
                    <a href="{{route('user.logout')}}" class="nav-li"><span class="fa-solid fa-right-from-bracket"></span><span>Sign Out</span></a>
                </ul>
            </div>
            <div class="btn-show-hide-nav hide-nav d-md-none position-absolute"><i class="fa-solid fa-angles-left"></i></div>
        </div>
        <div class="dashboard-content">
            @yield('content')
            
        </div>
    </div>
</body>

<script src="{{ asset('js/dashboard/navigation.js') }}"></script>
@stack('script')

</html>