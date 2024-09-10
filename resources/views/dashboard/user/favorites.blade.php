@extends('dashboard.user.layoutDashboard')
@section('content')

<!-- favorites -->
<div class="container favorites-container">
    <h5 class="head-text" style="padding-bottom: 10px;">Favorites</h5>
    <div class="list-doc d-flex flex-wrap">
        <div class="document liked-doc position-relative" style="background-image: url({{ asset('templates/resume/template-cv-1.jpg') }})">
            <a href="#" class="btn-use-template position-absolute">
                <p class="position-absolute"><i class="fa-solid fa-copy me-2"></i>Use this template</p>
                <form class="form-like" action="" method="post">
                    <i class="fa-solid fa-heart liked"></i>
                </form>
            </a>
        </div>
        
        <div class="document liked-doc position-relative" style="background-image: url({{ asset('templates/resume/template-cv-1.jpg') }})">
            <a href="#" class="btn-use-template position-absolute">
                <p class="position-absolute"><i class="fa-solid fa-copy me-2"></i>Use this template</p>
                <form class="form-like" action="" method="post">
                    <i class="fa-solid fa-heart liked"></i>
                </form>
            </a>
        </div>
        
        <div class="document liked-doc position-relative" style="background-image: url({{ asset('templates/resume/template-cv-1.jpg') }})">
            <a href="#" class="btn-use-template position-absolute">
                <p class="position-absolute"><i class="fa-solid fa-copy me-2"></i>Use this template</p>
                <form class="form-like" action="" method="post">
                    <i class="fa-solid fa-heart liked"></i>
                </form>
            </a>
        </div>
    </div>
</div>

@endsection

@push('script')
<script src="{{ asset('js/dashboard/favorites.js') }}"></script>
@endpush