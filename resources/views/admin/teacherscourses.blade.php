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
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Add School Courses</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                        <form action="/addteachercourstodb/{{ $findt->User->id }}" method="post">
                            @csrf
                            <div class="mb-3">

                              <label for="exampleInputEmail1" class="form-label">Course Name</label>
                              <input type="hidden" class="form-control" name="teacher_id" aria-describedby="emailHelp" value="{{ $findt['id'] }}">
                              <input type="hidden" class="form-control" name="user_code" aria-describedby="emailHelp"value="{{ $findt['user_code'] }}">
                              <select name="cours_name" class="form-control">
                                <option value="" class="option">Select Course</option>
                                @forelse ($tc as $t)
                                <option value="{{ $t['cours_name'] }}" class="option">{{ $t['cours_name'] }}</option>
                                @empty

                                @endforelse
                              </select>
                              </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>

                </div>
                </div>
            </div>


    </main>
   @endsection
