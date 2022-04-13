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
                <h1 class="mt-4">Hostels Registration</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Static Navigation</li>

                </ol>
                <div class="card mb-4">
                    <div class="card-body">

                                <form action="{{ route('hosteltodb') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Location</label>
                                        <input type="text" class="form-control" name="location" placeholder="Location">
                                      </div>
                                      <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Room Number</label>
                                        <input type="number" class="form-control" name="room_number" placeholder="Room Number">
                                      </div>
                                      <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Room Price</label>
                                        <input type="number" class="form-control" name="price">
                                      </div>
                                      <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Room Picture</label>
                                        <input type="file" class="form-control" name="room_image">
                                      </div>
                                      <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Room Description</label>
                                        <textarea name="description" cols="30" rows="10" class="form-control"></textarea>
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
