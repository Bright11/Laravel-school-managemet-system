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
            <h1 class="mt-4">Level table</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('addlevel') }}">Add Level</a></li>
                <li class="breadcrumb-item active">Add Semester</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">N</th>
                            <th scope="col">Name</th>
                            <th scope="col">Date</th>
                            <th scope="col">Delete</th>


                          </tr>
                        </thead>
                        <tbody>

                              @forelse ($level as $l)
                              <tr>
                              <th scope="row">{{ $l['lid'] }}</th>
                              <td>{{ $l['level'] }}</td>

                              <td><a class="btn btn-warning" href="">{{ $l['created_at'] }}</a></td></td>
                              <td><a class="btn btn-danger" href="">Delete</a></td></td>

                              @empty
                              No teacher
                            </tr>
                              @endforelse



                        </tbody>
                      </table>

                </div>
                </div>
            </div>


    </main>
   @endsection
