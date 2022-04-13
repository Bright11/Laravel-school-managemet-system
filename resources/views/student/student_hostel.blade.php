@extends('include.fmaster')

@section('fbody')
<div class="container mt-5">
    <div class="row">
        @forelse ($hostel as $h)
        <div class="col-md-3 host">
            <img src="{{ asset('hostel/'.$h['room_image']) }}" class="img-fluid" alt="">
            <div class="hostels">
            <h1>Room number:{{ $h['room_number'] }}</h1>
            <h2>{{ $h['location'] }}</h2>
            <h3>Room Price::${{ $h['price'] }}</h3>
            <h4>Status:{{ $h['status'] }}</h4>
            <h4>Period:{{ $h['year'] }}</h4>
          <div class="hostelview">
            <a href="/view_hostel/{{ $h->id }}">Pre View</a>
          </div>
            </div>
        </div>
        @empty

        @endforelse

    </div>
</div>
@endsection
