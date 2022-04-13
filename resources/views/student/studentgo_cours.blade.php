@extends('include.fmaster')

@section('fbody')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-3">
            @include('student.studentinclude.student_sidebar')
        </div>
        <div class="col-md-8">
           <div class="row">
           @forelse ($tutorial as $sl)
           <div class="col-md-4 gotocouse">
            <a href="/student_watch/{{ $sl->id }}">
           <img src="{{ asset('tutorial/'.$sl['picture']) }}" alt="" class="img-fluid learningp">
           <h1>{{ $sl['subject'] }}</h1>
        </a>
        </div>

           @empty
           <div class="col-md-4">
            <h1>No course</h1>
           </div>
           @endforelse


           </div>
    </div>
    </div>
</div>
@endsection
