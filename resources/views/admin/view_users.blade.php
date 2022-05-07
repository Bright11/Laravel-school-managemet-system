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
                    <h1 class="mt-4">Uses table</h1>

                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="{{ route('registration') }}">Add User using form</a></li>
                        <li class="breadcrumb-item active">Add User</li>
                        <div class="importform">
                            @include('admin.excelusers.user_registerexecl')
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
                                        <th scope="col">Position</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Promote</th>
                                        <th scope="col">Update</th>
                                        <th scope="col">Send Email</th>

                                        <th scope="col">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @forelse ($users as $t)
                                        <tr>
                                            <th scope="row">{{ $t['id'] }}</th>
                                            <td>{{ $t['name'] }}</td>
                                            <td>{{ $t['email'] }}</td>
                                            <td>{{ $t['position'] }}</td>
                                            @if ($t->status == 'pending')
                                                <td><a class="btn btn-danger" href="">{{ $t->status }}</a></td>
                                                </td>
                                            @endif
                                            <td><a class="btn btn-warning" href="{{ $t->id }}">Promote</a></td>
                                            </td>
                                            <td><a class="btn btn-warning" href="{{ $t->id }}">Update</a></td>
                                            </td>
                                            <td><a class="btn btn-success" href="{{ $t->id }}">Send Email</a></td>
                                            </td>
                                            <td><a class="btn btn-danger"
                                                    href="teacherscourses/{{ $t->id }}">Delete</a></td>
                                            </td>
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
