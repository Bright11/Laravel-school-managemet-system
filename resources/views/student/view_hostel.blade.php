@extends('include.fmaster')

@section('fbody')
<div class="container mt-5">
    <div class="row text-center">
       <p>{{ !empty($messeg) ? $messeg: '' }}</p>

        <div class="col-md-6 hostview mb-5">
            <img src="{{ asset('hostel/'.$hostel['room_image']) }}" class="img-fluid" alt="">
        </div>
        <div class="col-md-6">
            <div class="hostels">
                <h1>Room number:{{ $hostel['room_number'] }}</h1>
                <hr>
                <h2>Room Location: {{ $hostel['location'] }}</h2>
                <hr>
                <h3>Room Price:: ${{ $hostel['price'] }}</h3>
                <hr>
                <h4>Room Status: {{ $hostel['status'] }}</h4>
                <hr>
                <h4>Period of {{ $hostel['year'] }}</h4><hr>
                <div class="reame mb-5">
                    @if ($hostel->status=='Already booked.')
                    <a href="#" class="readpdflink" >{{ $hostel['status'] }}</a>
                    @else
                    <a href="/hostel_payment/{{ $hostel->id }}" class="readpdflink" >Book Now</a>
                    @endif

                </div>
                </div>
        </div>
        <hr>
    </div>
    <p>{{ $hostel['description'] }}</p>
</div>
@endsection
