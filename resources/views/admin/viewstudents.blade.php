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
                    <h1 class="mt-4">Student table</h1>

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
                                        <th scope="col">Student subject</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    @forelse ($student as $s)
                                        <tr>
                                            <th scope="row">{{ $s->id }}</th>
                                            <td>{{ $s['full_name'] }}</td>
                                            <td>{{ $s['student_email'] }}</td>
                                            <td>{{ $s['student_number'] }}</td>
                                            @if ($s->User->status == 'pending')
                                            <td>
                                                <form action="/suspend_student/{{ $s->User->id }}" method="post">
                                                    @method('put')
                                                    @csrf
                                                    <input type="hidden" name="status" value="approved">
                                                    <button class="btn btn-danger">{{ $s->User->status }}</button>
                                                </form>
                                            </td>

                                                @else
                                                <td>
                                                    <form action="/suspend_student/{{ $s->User->id }}" method="post">
                                                        @method('put')
                                                        @csrf
                                                        <input type="hidden" name="status" value="pending">
                                                        <button class="btn btn-success">{{ $s->User->status }}</button>
                                                    </form>
                                                </td>
                                            @endif
                                            <td><a class="btn btn-warning" href="{{ $s->User->id }}">Send Email</a></td>
                                            </td>
                                            <td><a class="btn btn-warning"
                                                    href="student_courses/{{ $s->student_id }}">Course</a></td>
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
