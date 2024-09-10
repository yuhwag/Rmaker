@extends('dashboard.admin.layoutDashboard')
@section('content')
<style>
    tbody>tr>td,
    tbody>tr>th {
        background: #fff0 !important;
    }

    .dark tbody>tr>td,
    .dark tbody>tr>th {
        color: #fff !important;
        background: #fff0 !important;
    }
</style>
<!-- users -->
<div class="container users-container">
    <h5 class="head-text" style="padding-bottom: 10px;">Manage users</h5>
    <div class="temp-section all-section">
        @if(session('success'))
        <div class="alert alert-success">{{ session('success' ) }}</div>
        @endif
        @if(session('error'))
        <div class="alert alert-danger">{{ session('error' ) }}</div>
        @endif
        <div class="table-responsive">

            <table class="table table-hover">
                <thead class="table-primary">
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Avatar</th>
                        <th scope="col">Firstname</th>
                        <th scope="col">Lastname</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Address</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($users as $index => $row)
                    <tr>
                        <th>{{$row->id}}</th>
                        <td>
                            <div class="showImg">
                                <div id="imgPreview" style="background-image: url('{{ url('/') }}/user/uploads/{{ $row->image }}')"></div>
                                <!-- No Image -->
                            </div>
                        </td>
                        <td>{{$row->firstname}}</td>
                        <td>{{$row->lastname}}</td>
                        <td>{{$row->email}}</td>
                        <td>{{$row->phone}}</td>
                        <td><div class="html" style="white-space: nowrap; width: 110px; overflow: hidden; text-overflow: ellipsis;">{{$row->address}}</div></td>
                        <!-- <td>{{$row->password}}</td> -->
                        <td>
                            <a href="{{ route('user.edit', [$row->id]) }}" class="btn btn-primary">Edit</a>
                            <!-- <button class="btn btn-danger" class="del-template" onclick="deleteTemplate()">Delete</button>
                            <form action="/admin/user/delete" method="post" id="del-templ">
                                
                                <input type="hidden" name="t_id" value="">
                            </form> -->
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5">No Users Found</td>
                    </tr>
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
