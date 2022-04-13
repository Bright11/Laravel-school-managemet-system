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
                <li class="breadcrumb-item active">Add Tutorials</li>
            </ol>

            <div class="card mb-4">

                <div class="card-body">
                        <form action="{{ route('tutorialtodb') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Subject</label>
                                <input type="text" name="subject" class="form-control" placeholder="subject">
                                </div>
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Course Name</label>
                              <select name="course_id" class="form-control">
                                <option value="" class="option">Select Course</option>
                                @forelse ($course as $t)
                                <option value="{{ $t['id'] }}" class="option">{{ $t['cours_name'] }}</option>
                                @empty
                                @endforelse
                              </select>
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Course Level</label>
                                <select name="level_id" class="form-control">
                                  <option value="" class="option">Select Course Level</option>
                                  @forelse ($l as $t)
                                  <option value="{{ $t['lid'] }}" class="option">{{ $t['level'] }}</option>
                                  @empty
                                  @endforelse
                                </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Course Semester</label>
                                    <select name="semester_id" class="form-control">
                                      <option value="" class="option">Select Course Semester</option>
                                      @forelse ($sm as $t)
                                      <option value="{{ $t['semesertid'] }}" class="option">{{ $t['semester'] }}</option>
                                      @empty
                                      @endforelse
                                    </select>
                                    </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Tutorial Picture</label>
                                    <input type="file" name="picture" class="form-control" >
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Tutorial Video</label>
                                        <input type="file" name="video" class="form-control" >
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Tutorial pdf</label>
                                            <input type="file" name="notes" class="form-control" >
                                            </div>


                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>

                </div>
                </div>
            </div>


    </main>
   @endsection