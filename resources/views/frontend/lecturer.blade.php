@extends('include.fmaster')

@section('fbody')

<div class="container lecturer mt-5">
    <h1 class="mb-5 text-center">Our Lecturers</h1>
    <div class="row">
        @forelse ($lecturer as $t)
        <div class="col-md-3">
            <img src="{{ asset('teacherp/'.$t->profil_p) }}" alt="" class="lecturerimg img-fluid">
            <h2>{{ $t['full_name'] }}</h2>
        </div>
        @empty

        @endforelse

    </div>
</div>
@endsection
