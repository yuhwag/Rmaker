@extends('dashboard.admin.layoutDashboard')
@section('content')


<!-- setting -->
<div class="container setting-container">
    <h5 class="head-text" style="padding-bottom: 10px;">Setting</h5>
    <div class="setting-body">
        <div class="row">
            <div class="col-md-4 dark-mode d-flex justify-content-between align-items-center">
                <div class="title-mode">Dark mode</div>
                <div class="btn-mode @if(Auth::user()->dark_mode) on @endif">
                    <div class="circle-btn"></div>
                </div>
            </div>
        </div>
    </div>
    <form action="{{route('user.setting.dark')}}" method="post" id="setting-dark">
        @csrf
        <input type="hidden" name="dark_mode">
    </form>
</div>

@endsection

@push('script')
<script src="{{ asset('js/dashboard/setting.js') }}"></script>
@endpush