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
                        <h1 class="mt-4">Class Registration</h1>
                        @include('admin.include.merros')
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Class Room</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <form action="{{ route('addclassroomtodb') }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf

                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label"> name</label>
                                                <input type="text" class="form-control" name="room_name"
                                                    placeholder="Room name">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Room Location</label>
                                                <input type="text" class="form-control" name="room_location"
                                                    placeholder="Room Location">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Room
                                                    Capacicty</label>
                                                <input type="number" class="form-control" name="room_capacity"
                                                    placeholder="Room Capacicty">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Room
                                                    Description</label>
                                                <textarea class="form-control" name="room_description" cols="30" rows="10" placeholder="Description"></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Room Image</label>
                                                <input type="file" class="form-control" name="room_img">
                                            </div>
                                    </div>

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
