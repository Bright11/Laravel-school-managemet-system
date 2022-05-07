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
                    <h1 class="mt-4">Sponsors table</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="{{ route('sponsors') }}">Add Sponsors</a></li>
                        <li class="breadcrumb-item active">Add Sponsors</li>
                        <
                    </ol>
                    <div class="card mb-4">
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">N</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Logo</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @forelse ($sponsor as $sponsor)
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>{{ $sponsor['company_name'] }}</td>
                                            <td><img class="img-fluid" src="{{ asset('sponsorimg/'.$sponsor['company_logo']) }}" alt="" height="80" width="80"></td>
                                            <td><a class="btn btn-warning"
                                                    href="view_teachers_info/{{ $sponsor->id }}">Delete</a></td>
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
