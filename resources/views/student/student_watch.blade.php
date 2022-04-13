@extends('include.fmaster')

@section('fbody')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-3">
            @include('student.studentinclude.student_sidebar')
        </div>
        <div class="col-md-8">
           <div class="row">

           <div class="col-md-9">
            <video controls src="{{ asset('tutorialvideo/'.$studentwatch['video']) }}" class="watch img-fluid"></video>
        </div>
        <div class="col-md-3">
            <div class="reamenow">
            <h1>{{ $studentwatch['subject'] }}</h1>
            </div>
            <div class="reame">
                <a href="/readpdf/{{ $studentwatch->id }}" class="readpdflink" target="_blank" rel="noopener noreferrer">Read Pdf</a>
            </div>
        </div>


           </div>
    </div>
    </div>
</div>
@endsection
