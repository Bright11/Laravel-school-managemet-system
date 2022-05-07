@extends('include.fmaster')
@section('title')
{{ $startlearning['Video_name'] }}
@endsection
@section('fbody')
<div class="container mt-5 text-center">
   <div class="col-md-10 hostview mb-5">
           <video controls download="0" style="height: 400px; width:100%;" src="{{ asset('onlinevideo/'.$startlearning->Video)}}"></video>
        </div>
        <div class="col-md-10">
            <div class="hostels">
                <h1>Video Name:{{ $startlearning['Video_name'] }}</h1>
                <hr>
                </div>
        </div>
        <hr>
    </div>
    <p class="text-center">{{ $startlearning['Video_description'] }}</p>
</div>
@endsection
