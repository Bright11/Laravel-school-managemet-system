@extends('admin.include.master')
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">

        @include('admin.include.sidebar')
    </div>
    @section('body')
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">New Student table</h1>


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
                                            <td>
                                                <form action="{{ route('studentcompleteregister') }}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="full_name" value="{{ $t['name'] }}">
                                                    <input type="hidden" name="student_email" value="{{ $t['email'] }}">
                                                    <input type="hidden" name="student_number" value="{{ $t['number'] }}">
                                                    <input type="hidden" name="user_code" value="{{ $t['user_code'] }}">
                                                    <button class="btn btn-warning">Complete Registration</button>
                                                </form>

                                            </td>
                                            <td><a class="btn btn-warning" href="{{ $t->id }}">Update</a></td>
                                            <td><a class="btn btn-success" href="{{ $t->id }}">Send Email</a></td>
                                            <td><a class="btn btn-danger"
                                                    href="teacherscourses/{{ $t->id }}">Delete</a></td>
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
