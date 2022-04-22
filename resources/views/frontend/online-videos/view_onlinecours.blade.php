@extends('include.fmaster')
@section('title')
{{ $onlinedetail['Video_name'] }}
@endsection
@section('fbody')
<div class="container mt-5">
    <div class="row text-center">

        <div class="col-md-6 hostview mb-5">
            <img src="{{ asset('onlineimg/'.$onlinedetail['Video_img']) }}" class="img-fluid" alt="">
        </div>
        <div class="col-md-6">
            <div class="hostels">
                <h1>Room number:{{ $onlinedetail['Video_name'] }}</h1>
                <hr>
                <h2>Price: {{ $onlinedetail['Video_price'] }}</h2>
                <hr>
                <hr>
                <div class="reame mb-5">
                    <a href="/successpay/{{ $onlinedetail['buyingcode'] }}/id/{{ $onlinedetail['id'] }}/price/{{ $onlinedetail['Video_price']}}" class="readpdflink" target="_blank" rel="noopener noreferrer">Book Now</a>
                </div>
                </div>
        </div>
        <hr>
    </div>
    <p>{{ $onlinedetail['Video_description'] }}</p>
</div>
@endsection
