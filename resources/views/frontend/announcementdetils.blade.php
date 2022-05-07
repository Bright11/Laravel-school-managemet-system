@extends('include.fmaster')
@section('title')
{{ $announcedetail->title }}
@endsection
@section('fbody')
<div class="container homeindex text-center mt-5">
        <h1 style="font-size: 25px;text-align:center;">{{ $announcedetail->title }}</h1>
        <p>{{ $announcedetail->detals }}</p>
        </div>


@endsection
