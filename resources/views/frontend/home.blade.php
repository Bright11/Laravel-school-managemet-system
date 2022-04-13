@extends('include.fmaster')

@section('fbody')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            @include('include.slider')
        </div>

        <div class="col-md-4">
            <div class="adminssion">
                Adminssion
                <p>Quistane nostrud exertation ulamco laboris nisi ut aliquip ex ea comodo consequat aute irure dolor.</p>
            </div>
            <div class="adminssion adminssion2">
                Adminssion
                <p>Quistane nostrud exertation ulamco laboris nisi ut aliquip ex ea comodo consequat aute irure dolor.</p>
            </div>
        </div>


    </div>
</div>
<div class="container-fluid">
    <section class="first">
    <div class="row mt-5">

            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('homeimages/face2.jpg') }}"alt="">
                    </div>
                    <div class="col-md-8">

                          <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                           Eius sapiente illo, ducimus, itaque sit iste perferendis laudantium
                            quae, suscipit natus dolorum temporibus odit ea eum aliquam aspernatur
                            blanditiis quasi possimus.</p>
                            <button class="readmore">Read more</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h1 class="noticeborad">
                    Notice Board
                </h1>
            </div>
    </div>
</section>
</div>
<div class="container-fluid">
<section class="event mt-5">
    <div class="newevent">
       <h1> Latest Events</h1>
    </div>
<div class="row">
<div class="col-md-10">
    <div class="row">

            @forelse ($event as $e)
            <div class="col-md-4">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('eventimg/'.$e['event_img']) }}" alt="" class="img-fluid">
                </div>
                <div class="col-md-8">
                    {{ $e['event_name'] }}<br>
                   Date:{{ $e['event_date'] }} Time:{{ $e['event_time'] }}
                   <p>{{ Str::limit($e['event_description'],25,$end="...") }}</p>

                </div>
            </div>
        </div>
            @empty

            @endforelse







        </div>
</div>

<div class="col-md-2">hi</div>
</div>
</section>
</div>

@endsection
