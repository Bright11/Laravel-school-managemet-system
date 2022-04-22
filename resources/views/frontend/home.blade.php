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
                <p>Welcome to Bright C Web Developer University, where learning is easy, Admission is in progress,click below to apply.</p>
                <a href="" class="applylink">Apply for a better tommorow</a>
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
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="noticeborad">
                            Announcements
                        </h1>
                    </div>
                    <div class="col-md-12">
                        <h1 class="noticeborad">
                            Announcements
                        </h1>
                    </div>
                    <div class="col-md-12">
                        <h1 class="noticeborad">
                            Announcements
                        </h1>
                    </div>
                    <div class="col-md-12">
                        <h1 class="noticeborad">
                            Announcements
                        </h1>
                    </div>
                </div>

            </div>
    </div>
</section>
</div>
<div class="container-fluid">
<section class="event mt-5">
    <div class="newevent mb-5">
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
            <div class="col-md-8">
                <h1>Comming soon</h1>
            </div>
            @endforelse

        </div>
</div>

<div class="col-md-2">
    <h1 class="noticeborad">Latest Update</h1>
    <div class="row">
      <div class="col-md-12">
        <p  class="noticeboraddetail">Lorem ipsum dolor sit amet </p>
      </div>
      <div class="col-md-12">
        <p  class="noticeboraddetail">Lorem ipsum dolor sit amet </p>
      </div>
    </div>
    </div>

</div>
</div>
</section>
</div>
<div class="container lecturer mt-5">
    <h1 class="mb-5 text-center">Our Lecturers</h1>
    <div class="row">
        @forelse ($teachers as $t)
        <div class="col-md-3">
            <img src="{{ asset('teacherp/'.$t->profil_p) }}" alt="" class="lecturerimg img-fluid">
            <h2>{{ $t['full_name'] }}</h2>
        </div>
        @empty
        <div class="col-md-3">
            <h1>Comming soon</h1>
        </div>
        @endforelse

    </div>
</div>
@endsection
