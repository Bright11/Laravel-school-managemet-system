@extends('admin.include.master')
@section('title')
{{ $check->full_name }}
@endsection
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <!--sidbar-->

    </div>
    @section('body')
        <div id="layoutSidenav_content">
            <main class="mt-5">
<div class="teachertopbar text-center mb-5">
    @include('admin.tearchersprofile.includetearchbar.secondtopbar')
</div>
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-3 text-center">
            <img src="{{ asset('teacherp/'.$check['profil_p']) }}" alt="" class="img-fluid myproimg">
            <h3>{{ $check->full_name }}</h3>
            <hr>
            <p>{{ $check->description }}</p>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>

            </main>
        @endsection
