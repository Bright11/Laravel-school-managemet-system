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
            <h1 class="mt-4">Teachers table</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('teachers_registration') }}">Add Teacher</a></li>
                <li class="breadcrumb-item active">Add Teacher</li>
               <div class="importform">
                @include('admin.excelusers.teacher_registerexecl')
               </div>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">N</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Number</th>
                            <th scope="col">Status</th>
                            <th scope="col">Send Email</th>
                            <th scope="col">Teacher Course</th>
                            <th scope="col">Teacher info</th>
                          </tr>
                        </thead>
                        <tbody>

                              @forelse ($viewteach as $t)
                              <tr>
                              <th scope="row">1</th>
                              <td>{{ $t['full_name'] }}</td>
                              <td>{{ $t['teacher_email'] }}</td>
                              <td>{{ $t['teacher_number'] }}</td>
                              @if ($t->User->status=='pending')
                              <td><a class="btn btn-danger" href="">{{ !empty($t->User->status)? $t->User->status:'' }}</a></td></td>
                              @endif
                              <td><a class="btn btn-warning" href="{{ !empty($t->User->id)? $t->User->id:'' }}">Send Email</a></td></td>
                              <td><a class="btn btn-warning" href="teacherscourses/{{ !empty($t->User->id)? $t->User->id:'' }}">Courses</a></td></td>
                              <td><a class="btn btn-warning" href="view_teachers_info/{{ $t->id }}">Teachers Info</a></td></td>
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
