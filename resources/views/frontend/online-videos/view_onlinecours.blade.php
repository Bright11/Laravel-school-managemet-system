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
                <input type="hidden" readonly id="inputcopy" value="{{  URL::current() }}">
                <button class="readpdflink" onclick="gettextcopied()" id="copybutton">Share</button>

                <hr>
                <div class="reame mb-5">

                 @if ( !empty($checkpay->owner_id)? $checkpay->owner_id: '')
                 <a href="/startlearningonline/{{ $onlinedetail['id'] }}/ownner_id/{{ $onlinedetail['user_id'] }}" class="readpdflink">Start Learning</a>
                 @else

                 <a href="/onlinetutorialpayment/{{ $onlinedetail['id'] }}" class="readpdflink">Book Now</a>
                 @endif
                </div>
                </div>
        </div>
        <hr>
    </div>
    <p>{{ $onlinedetail['Video_description'] }}</p>
</div>
@endsection
