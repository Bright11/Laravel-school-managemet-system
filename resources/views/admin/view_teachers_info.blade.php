@extends('admin.include.master')
@section('title')
{{ $teachinfon->full_name }}
@endsection
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
<!--sidbar-->
@include('admin.include.sidebar')
    </div>
   @section('body')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Teachers Information</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('teachers_registration') }}">Add Teacher</a></li>
                <li class="breadcrumb-item active">Add Teacher</li>

            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">N</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Number</th>
                            <th scope="col">Status</th>
                            <th scope="col">Profile</th>
                          </tr>
                        </thead>
                        <tbody>

                              @forelse ($teachinfo as $tinfo)
                              <tr>
                              <th scope="row">1</th>

                              <td>{{ $tinfo['full_name'] }}</td>
                              <td>{{ $tinfo['teacher_email'] }}</td>
                              <td>{{ $tinfo['teacher_number'] }}</td>
                              @if ($tinfo->User->status=='pending')
                              <td><a class="btn btn-danger" href="">{{ $tinfo->User->status }}</a></td></td>
                              @endif
                              <td><img src="{{ asset('teacherp/'.$tinfo->profil_p) }}" width="80" height="80" alt="" class="profile img-fluid"></td>
                              @empty
                              No teacher
                            </tr>
                              @endforelse

                        </tbody>
                      </table>
                      <div class="teachersc text-center">Courses</div>
                      <table class="table">
                        <thead>
                            <tr>
                         <th scope="col">N</th>

                        </tr>
                    </thead>
                    <tbody>
                      @forelse ($teachc as $t)

                      <tr>
                        <th scope="row">{{ $t->id }}</th>
                      <td>{{ $t->cours_name }}</td>
                      @empty
                      No teacher
                    </tr>
                      @endforelse
                    </tbody>
                </table>
                </div>
                </div>
            </div>


    </main>
   @endsection
