@extends('layout')
@section('content')

<!-- <style>
    .showImg{
        width: 51%;
        height: 54px;
    }
    .showImg>div{
        width: 100%;
        height: 100%;
        border-radius: 10px;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }
</style> -->

<br><br><br><br>
<div class="container"> 
    <div class="text-end mb-5">
        <a href="/admin/template/create" class="btn btn-primary">Add new Template</a>
    </div>
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
                        <a href="/admin/template/edit/{{ $row->id }}" class="btn btn-primary">Edit</a>
                        <button class="btn btn-danger" class="del-template" onclick="deleteTemplate()">Delete</button>
                        <form action="/admin/template/delete" method="post" id="del-templ">
                            {{ csrf_field() }}
                            <input type="hidden" name="t_id" value="{{ $row->id }}">
                        </form>
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
<br><br><br><br>

@endsection

@push('scripts')

<script>
    function deleteTemplate(){
        var ans = confirm('Do you want to delete this template?')
        if(ans){
            document.getElementById('del-templ').submit();
        }
    }
</script>

@endpush