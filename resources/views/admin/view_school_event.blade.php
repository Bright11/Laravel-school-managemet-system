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
                    <h1 class="mt-4">Event table</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="{{ route('insert_event') }}">Add Event</a></li>
                        <li class="breadcrumb-item active">Add Event</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">N</th>
                                        <th scope="col">Event name</th>
                                        <th scope="col">Even location</th>
                                        <th scope="col">Event date and time</th>
                                        <th scope="col">Event Center</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @forelse ($event as $t)
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>{{ $t['event_name'] }}</td>
                                            <td>{{ $t['event_location'] }}</td>
                                            <td>Date:{{ $t['event_date'] }} {{ $t['event_time'] }}</td>
                                            <td><img src="{{ asset('eventimg/' . $t['event_img']) }}" alt=""
                                                    class="adminhostelimg" style="height: 100px;"></td>

                                            <td><a class="btn btn-warning" href="deletehostel/{{ $t->id }}">Delete</a>
                                            </td>
                                            </td>
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
