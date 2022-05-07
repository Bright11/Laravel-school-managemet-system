@extends('include.fmaster')
@section('title')
{{ $newevent->event_name }}
@endsection
@section('fbody')
<div class="container homeindex text-center mt-5">
    <h5>Location: {{ $newevent->event_location }}</h5>
    <img class="img-fluid" src="{{ asset('eventimg/'.$newevent->event_img) }}" alt="">
        <h1 style="font-size: 25px;text-align:center;">{{ $newevent->event_name }}</h1>
        <p>Date::{{ $newevent->event_date }} ::Time::{{ $newevent->event_time }}</p>
        <hr>
        <p>{{ $newevent->event_description }}</p>
        </div>


@endsection
