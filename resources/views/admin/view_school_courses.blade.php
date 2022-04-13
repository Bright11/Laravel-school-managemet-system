@extends('admin.include.master')
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
<!--sidbar-->
@include('admin.include.sidebar')
    </div>
   @section('body')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">School Courses table</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('school_courses') }}">Add Courses</a></li>
                <li class="breadcrumb-item active">Add Teacher</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">N</th>
                            <th scope="col">Name</th>


                          </tr>
                        </thead>
                        <tbody>

                              @forelse ($courses as $c)
                              <tr>
                              <th scope="row">{{ $c['id'] }}</th>
                              <td>{{ $c['cours_name'] }}</td>
                              <td><a class="btn btn-warning" href="{{ $c->id }}">Delete</a></td></td>


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
