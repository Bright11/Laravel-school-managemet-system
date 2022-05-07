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
                            <form action="{{ route('addannoucementtodb') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Topic</label>
                                    <input type="text" name="title" class="form-control" placeholder="subject">
                                </div>


                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Details</label>
                                    <input type="text" name="detals" class="form-control">
                                </div>


                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>


            </main>
        @endsection
