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
                        <h3 class="text-center">{{ $student['full_name'] }}</h3>
                        <div class="card-body">
                            <form action="/addstudentcourstodb/{{ $student['student_id'] }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Course Name</label>
                                    <select name="course_id" class="form-control">
                                        <option selected="" class="option">Select Course</option>
                                        @forelse ($sc as $t)
                                            <option value="{{ $t['id'] }}" class="option">
                                                {{ $t['cours_name'] }}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                </div>
                                <div class="mb-3">

                                    <label for="exampleInputEmail1" class="form-label">Student level</label>
                                    <select name="level_id" class="form-control">
                                        <option value="" class="option">Select level</option>
                                        @forelse ($level as $l)
                                            <option value="{{ $l['id'] }}" class="option">{{ $l['level'] }}
                                            </option>
                                        @empty
                                        @endforelse
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Student Semester</label>
                                    <select name="semester_id" class="form-control">
                                        <option value="" class="option">Select Semester</option>
                                        @forelse ($semester as $s)
                                            <option value="{{ $s['semesertid'] }}" class="option">
                                                {{ $s['semester'] }}</option>
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
