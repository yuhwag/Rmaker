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

<!-- templates section -->
<div class="container templates-container">
    <div class="header-templates d-flex">
        <h5 class="head-text">Manage templates</h5>
    </div>
    <div class="text-end mt-5 mb-4">
        <a href="{{route('template.create')}}" class="btn btn-primary">Add new Template</a>
    </div>
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
                        <th scope="col">Type</th>
                        <th scope="col">Name</th>
                        <th scope="col">Image</th>
                        <th scope="col">HTML</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($templates as $index => $row)
                    <tr>
                        <th>{{ $row->id }}</th>
                        <td>{{ $row->type }}</td>
                        <td>{{ $row->name }}</td>
                        <td>
                            <div class="showImg">
                                @if($row->image != '')
                                <div id="imgPreview" style="background-image: url('{{ url('/') }}/templates/uploads/{{ $row->image }}')"></div>
                                @else
                                No Image
                                @endif
                            </div>
                        </td>
                        <td> <div class="html" style="white-space: nowrap; width: 110px; overflow: hidden; text-overflow: ellipsis;">{{ $row->html }}</div></td>
                        <td>
                            <div class="d-flex">
                                <a href="{{route('template.edit', [$row->id])}}" class="btn btn-primary me-3">Edit</a>
                                <button type="submit" class="btn btn-danger del-template">Delete</button>
                                <form action="{{route('template.delete')}}" method="post" id="del-templ" class="del-template-form">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="t_id" value="{{ $row->id }}">
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5">No Templates Found</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
@push('script')

<script>
    const delTemp = document.querySelectorAll('.del-template');
    const delTempForm = document.querySelectorAll('.del-template-form');
    delTemp.forEach((element, index) => {
        element.addEventListener('click', ()=>{
            var ans = confirm('Do you want to delete this template?')
            if(ans){
                delTempForm[index].submit();
            }
        });
    });
</script>

@endpush