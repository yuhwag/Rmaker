@extends('dashboard.admin.layoutDashboard')
@section('content')

<style>
    .template-img-upload{
        position: relative;
        max-width: 205px;
    }

    .template-img-upload .img-preview{
        width: 67%;
        height: 170px;
        position: relative;
        border-radius: 3%;
        border: 6px solid #f8f8f8;
    }

    .template-img-upload .img-preview>div{
        width: 100%;
        height: 100%;
        border-radius: 3%;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center; 
    }
</style>

<div class="container">
    <div class="col-md-12"> 
        <h3 class="mb-5">
            {{ $title }}
        </h3>
        <form class="form" method="post" action="@if(isset($edit->id)) {{route('template.update',[$edit->id])}} @else {{ route('template.store') }} @endif" enctype="multipart/form-data">
            @csrf
            <div class="form-group col-md-12 mb-3">
                <label for="type">Template type</label> 
                <select name="type" id="templateType" class="form-control" value="123">
                    <option value="">Select type</option>
                    <option value="COV" @if(isset($edit->id) && $edit->type == 'COV') selected @endif>Cover Letter</option>
                    <option value="RES" @if(isset($edit->id) && $edit->type == 'RES') selected @endif>Resume</option>
                </select>
                @error('type')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col-md-12 mb-3">
                <label for="name">Template name</label>
                <input type="text" class="form-control" id="templateName1" name="name" placeholder="Template name" value="@if(isset($edit->id)) {{ $edit->name }} @endif">
                @error('name')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col-md-12 mb-3">
                <label for="image">Image</label>
                <div class="template-img-upload">
                    <div>
                        <input type="file" id="imgUpload" name="image" accept=".png, .jpg, .jpeg, .avif" onchange="previewImg(this)">
                        <label for="imgUpload"></label>
                    </div>
                    <div class="img-preview">
                        <!-- <div id="imgPreview" style="background-image: url('{{ url('/templates/letter/template-1.png') }}')"></div> -->
                        <div id="imgPreview" style="@if(isset($edit->image)) background-image: url('{{ url('/') }}/templates/uploads/{{ $edit->image }}') @endif"></div>
                    </div>
                </div>
                @error('photo')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group col-md-12 mb-3">
                <label for="html">Template HTML</label>
                <textarea type="text" class="form-control" id="templatehtml" name="html" placeholder="Template HTML" rows="10">@if(isset($edit->html)) {{ $edit->html }} @endif</textarea>
                @error('name')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            
            <input type="submit" class="btn btn-primary" value="Submit">
            <a href="{{ route('dashboard.admin.templates') }}" class="btn btn-danger">Cancel</a>
        </form>
    </div>
</div>
<br><br><br><br>

@endsection

@push('script')
<script>
    function previewImg(input){
        if(input.files && input.files[0]){
            var reader = new FileReader();
            reader.onload = function(e){
                $("#imgPreview").css('background-image', 'url('+ e.target.result +')');
                $("#imgPreview").hide();
                $("#imgPreview").fadeIn(700);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

@endpush
