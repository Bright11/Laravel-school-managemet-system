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
            <h1 class="mt-4">Hostel table</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('student_hostel_register') }}">Add Hostel</a></li>
                <li class="breadcrumb-item active">Add Hostel</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">N</th>
                            <th scope="col">Room Location</th>
                            <th scope="col">Room number</th>
                            <th scope="col">Room price</th>
                            <th scope="col">Room picture</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>

                              @forelse ($hostel as $t)
                              <tr>
                              <th scope="row">1</th>
                              <td>{{ $t['location'] }}</td>
                              <td>{{ $t['room_number'] }}</td>
                              <td>Price::${{ $t['price'] }}</td>
                              <td><img src="{{ asset('hostel/'.$t['room_image']) }}" alt="" class="adminhostelimg" style="height: 100px;"></td>
                              @if ($t->status=='yes')
                              <td><a class="btn btn-success" href="">{{ $t->status }}</a></td></td>
                              @endif
                              <td><a class="btn btn-warning" href="deletehostel/{{ $t->id }}">Delete</a></td></td>
                              @empty
                              No Hostel
                            </tr>
                              @endforelse



                        </tbody>
                      </table>

                </div>
                </div>
            </div>


    </main>
   @endsection
