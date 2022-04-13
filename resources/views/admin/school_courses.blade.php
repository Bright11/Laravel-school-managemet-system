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
                        <form action="{{ route('addschoolcourstodb') }}" method="post" enctype="multipart/form-data" >
                            @csrf
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Course Name</label>
                              <input type="text" class="form-control" name="cours_name" aria-describedby="course">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Course Description</label>
                                <textarea name="cours_description" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                                <label for="exampleInputEmail1" class="form-label">Course image</label>
                              <input type="file" class="form-control" name="cours_img" aria-describedby="course">
                              </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>

                </div>
                </div>
            </div>


    </main>
   @endsection
