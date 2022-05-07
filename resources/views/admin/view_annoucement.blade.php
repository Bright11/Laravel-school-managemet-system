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
                    <h1 class="mt-4">Annoucement table</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="{{ route('annoucement') }}">Annoucement</a></li>
                        <li class="breadcrumb-item active">Add Annoucement</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">N</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Update</th>
                                        <th scope="col">Delete</th>


                                    </tr>
                                </thead>
                                <tbody>

                                    @forelse ($announce as $s)
                                        <tr>
                                            <th scope="row">{{ $s['id'] }}</th>
                                            <td>{{ $s['title'] }}</td>

                                            <td><a class="btn btn-warning" href="">{{ $s['created_at'] }}</a></td>
                                            </td>
                                            <td><a class="btn btn-danger" href="">Delete</a></td>
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
