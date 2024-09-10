@extends('dashboard.user.layoutDashboard')
@section('content')


<!-- profile section -->
<div class="container profile-container">
    <form action="{{route('user.update.profile' ,[Auth::user()->id])}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="user-avatar d-flex align-items-center mb-4">
            <div class="image me-5" style="background-image: url({{ url('/') }}/user/uploads/@if(Auth::user()->image){{ Auth::user()->image }} @else{{'Default.jpeg'}} @endif)"></div>
            <div class="avatar-buttons">
                <input type="file" class="avatar-input d-none" name="image">
                <div class="change-avatar">Change picture</div>
                <a href="{{ route('user.delete.avatar', [Auth::user()->id]) }}" class="delete-avatar">Delete picture</a>
            </div>
        </div>
        <div class="inputs-info">
            <div class="user-name row">
                <div class="col-md-6">
                    <label for="firstname">First name</label>
                    <input type="text" name="firstname" id="firstname" class="mb-4" value="{{ Auth::user()->firstname }}">
                </div>
                <div class="col-md-6">
                    <label for="lastname">Last name</label>
                    <input type="text" name="lastname" id="lastname" class="mb-4" value="{{ Auth::user()->lastname }}">
                </div>
            </div>
            <div class="user-email">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="mb-4" value="{{ Auth::user()->email }}" @if(Auth::user()->google_id) readonly style="opacity: 0.5; outline: none;" @endif>
            </div>
            <div class="user-phone">
                <label for="phone">Phone</label>
                <input type="phone" name="phone" id="phone" class="mb-4" value="{{ Auth::user()->phone }}">
            </div>
            <div class="user-address">
                <label for="address">Address</label>
                <input type="address" name="address" id="address" class="mb-4" value="{{ Auth::user()->address }}">
            </div>
        </div>
        <div class="form-btns d-flex justify-content-end mt-3">
            <button type="submit" class="btn-save me-4">Save changes</button>
            <div class="btn-cancel">Cancel</div>
        </div>
    </form>
</div>

@endsection

@push('script')
<script src="{{ asset('js/dashboard/profile.js') }}"></script>
@endpush