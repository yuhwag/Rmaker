@extends('dashboard.user.layoutDashboard')
@section('content')

<div class="container documents-container">
    <div class="header-documents d-flex">
        <h5 class="coverletter head-text active">Cover Letters</h5>
        <h5 class="resume head-text">Resumes</h5>
    </div>

    <div class="doc-section resume-section d-none">
        <div class="list-doc d-flex flex-wrap">
            <a href="/resume/templates" class="btn-add-new-doc d-flex justify-content-center align-items-center"><i class="fa-solid fa-plus"></i></a>

            

            <div class="document doc-resume" style="background-image: url({{ asset('templates/resume/template-cv-2.jpg') }})">
                <a href="#" class="btn-edit"><p>Edit <i class="fa-solid fa-pen ms-1"></i></p></a>
                <div class="doc-info">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h5 class="doc-name mb-0" contenteditable="true">Document Untitled</h5>    
                        <i class="fa-solid fa-pen"></i>
                    </div>
                    <p class="doc-updated">Updated: Mar 12, 2023</p>
                    <hr>
                    <div class="activity-btns d-flex justify-content-end align-items-center">
                        <!-- <div class="btn-download"><i class="fa-solid fa-download"></i> Download</div> -->
                        <a href="#" class="btn-delete-doc"><i class="fa-solid fa-trash"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="doc-section coverletter-section">
        <div class="list-doc d-flex flex-wrap">
            <a href="/cover-letter/templates" class="btn-add-new-doc d-flex justify-content-center align-items-center"><i class="fa-solid fa-plus"></i></a>

            @forelse ($covDocuments as $cov)
            <div class="document doc-coverletter" style="background-image: url('{{ url('/') }}/templates/uploads/{{ $cov->image_template }}')">
                <a href="{{ route('update.coverletter', [$cov->id]) }}" class="btn-edit"><p>Edit <i class="fa-solid fa-pen ms-1"></i></p></a>
                <div class="doc-info">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h5 class="doc-name mb-0" contenteditable="true">@if($cov->doc_name == '') Document Untitled @else {{ $cov->doc_name }} @endif</h5>    
                        <i class="fa-solid fa-pen"></i>
                    </div>
                    <p class="doc-updated">Updated: {{ $cov->updated_at->format('d/m/Y') }}</p>
                    <hr>
                    <div class="activity-btns d-flex justify-content-end align-items-center">
                        <!-- <div class="btn-download"><i class="fa-solid fa-download"></i> Download</div> -->
                        <a href="#" class="btn-delete-doc"><i class="fa-solid fa-trash"></i></a>
                    </div>
                </div>
            </div>
            @empty
            @endforelse
        </div>
    </div>

</div>

@endsection

@push('script')
<script src="{{ asset('js/dashboard/documents.js') }}"></script>
@endpush