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
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item active">Add Level</li>
            </ol>

            <div class="card mb-4">

                <div class="card-body">
                        <form action="{{ route('addleveltodb') }}" method="post">
                            @csrf
                            <div class="mb-3">

                              <label for="exampleInputEmail1" class="form-label">Levels Name</label>
                              <input type="text" class="form-control" name="level" aria-describedby="emailHelp" placeholder="Semester">
                              </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>

                </div>
                </div>
            </div>


    </main>
   @endsection
