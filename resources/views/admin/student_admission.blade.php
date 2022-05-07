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
                    <h1 class="mt-4">Admission table</h1>

                    <div class="card mb-4">
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">N</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Number</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Send Email</th>
                                        <th scope="col">Accept Student</th>
                                        <th scope="col">View Addmission</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @forelse ($applied as $sad)
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>{{ $sad['f_name'] }}</td>
                                            <td>{{ $sad['l_name'] }}</td>
                                            <td>{{ $sad['email'] }}</td>
                                            <td>{{ $sad['number'] }}</td>
                                            @if ($sad->status == 'pending')
                                                <td><a class="btn btn-danger"
                                                        href="">{{ !empty($sad->status) ? $sad->status : '' }}</a></td>
                                                </td>
                                            @endif
                                            <td><a class="btn btn-warning"
                                                    href="{{ !empty($t->User->id) ? $sad->id : '' }}">Send Email</a></td>
                                            </td>
                                            <td><a class="btn btn-warning"
                                                    href="teacherscourses/{{ !empty($sad->id) ? $sad->id : '' }}">Accept</a>
                                            </td>
                                            </td>
                                            <td><a class="btn btn-warning"
                                                    href="view_teachers_info/{{ $sad->id }}">View Admission</a></td>
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
