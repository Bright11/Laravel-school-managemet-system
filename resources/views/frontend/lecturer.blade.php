@extends('include.fmaster')

@section('fbody')

<div class="container lecturer mt-5">
    <h1 class="mb-5 text-center">Our Lecturers</h1>
    <div class="row">
        @forelse ($lecturer as $t)
        <div class="col-md-3">
            @if ($t->profil_p=='')
            <img src="{{ asset('advtarimage/avatar-3637425__340.webp') }}" alt="" class="lecturerimg img-fluid">
            @else
            <img src="{{ asset('teacherp/'.$t->profil_p) }}" alt="" class="lecturerimg img-fluid">
            @endif
            <h2>{{ $t['full_name'] }}</h2>
        </div>
        @empty

        @endforelse

    </div>
</div>
@endsection
