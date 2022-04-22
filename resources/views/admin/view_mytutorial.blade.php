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
            <h1 class="mt-4">My Student table</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('teachers_registration') }}">Add Teacher</a></li>
                <li class="breadcrumb-item active">Add Teacher</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    {{ session('user.name') }}
                    {{ session('user.id') }}
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">N</th>
                            <th scope="col">Tutorial Name</th>
                            <th scope="col">Level</th>
                            <th scope="col">Semester</th>
                            <th scope="col">Course On</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>

                              @forelse ($mytutorial as $t)
                              <tr>
                              <th scope="row">{{ $t->id }}</th>
                                <!--
                                    <td>{{ $t->subject }}</td>
                              <td>{{ $t->Level->level }}</td>
                              <td>{{ $t->Semester->semester }}</td>
                              <td>{{ $t->Schoolcourses->cours_name }}</td>-->

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
