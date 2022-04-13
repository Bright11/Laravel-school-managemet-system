@extends('admin.include.master')
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
<!--sidbar-->
@include('admin.include.sidebar')
    </div>
   @section('body')

<div class="container-fluid">
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Event Registration</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Event Navigation</li>

                </ol>
                <div class="card mb-4">
                    <div class="card-body">

                                <form action="{{ route('inserteventtodb') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Event name</label>
                                        <input type="text" class="form-control" name="event_name" placeholder="Event name">
                                      </div>
                                      <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Event Location</label>
                                        <input type="text" class="form-control" name="event_location" placeholder="Locaton">
                                      </div>
                                      <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Event Center</label>
                                        <input type="file" class="form-control" name="event_img">
                                      </div>
                                      <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Event Date</label>
                                        <input type="date" class="form-control" name="event_date">
                                      </div>
                                      <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Event Date</label>
                                        <input type="time" class="form-control" name="event_time">
                                      </div>
                                      <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Event description</label>
                                        <textarea name="event_description" cols="30" rows="10" class="form-control"></textarea>
                                      </div>

                                    <button type="submit" class="btn btn-primary form-control">Submit</button>
                                </form>
                            </div>

                            </div>


                        </div>
                                </div>
                    </div>
                    </div>
        </main>
                </div>
</div>
   @endsection
