@extends('include.fmaster')

@section('fbody')

<div class="container mt-5">
    <h1 class="buytopheader" style="background-color: #153D6F;text-align:center;color:white;font-size:25px;">
        Learn on the go, make it your own,learning is knowladge,clearity,deep learning
      </h1>
    <div class="row">
        @forelse ($buy as $b)
        <div class="col-md-3 host">
            <img src="{{ asset('onlineimg/'.$b['Video_img']) }}" class="img-fluid" alt="">
            <div class="hostels">
            <h1>{{ $b->Video_name }}</h1>
            <h3>Price::${{number_format($b->Video_price) }}</h3>
            <p>{{ Str::limit($b->Video_description,50,$end="...") }}</p>
          <div class="hostelview">
            <a href="/view_onlinecours/{{ $b->id }}/ownner_id/{{ $b->user_id }}"title="Click to Buy Now">Pre View</a>
          </div>
            </div>
        </div>
        @empty

        @endforelse

    </div>
</div>
@endsection
