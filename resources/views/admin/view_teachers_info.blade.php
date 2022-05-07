@extends('admin.include.master')
@section('title')
    {{ $teachinfon->full_name }}
@endsection
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <!--sidbar-->
        @include('admin.include.sidebar')
    </div>
    @section('body')
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Teachers Information</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"></li>
                        <li class="breadcrumb-item active"></li>

                    </ol>
                    <div class="card mb-4">
                        <div class="card-body">
                            @if ($teachinfon->profil_p == '')
                                <img src="{{ asset('advtarimage/avatar-3637425__340.webp') }}" class="profile img-fluid">
                                </td>
                            @else
                            @endif

                            <div class="row">
                                <div class="col-md-3 mt-3">
                                    <td>{{ $teachinfon['full_name'] }}</td>
                                </div>
                                <div class="col-md-3 mt-3">
                                    <td>{{ $teachinfon['teacher_email'] }}</td>
                                </div>
                                <div class="col-md-3 mt-3">
                                    <td>{{ $teachinfon['teacher_number'] }}</td>
                                </div>
                                <div class="col-md-3 mt-3">
                                    @if ($teachinfon->User->status == 'pending')
                                        <td><a class="btn btn-danger" href="">{{ $teachinfon->User->status }}</a></td>
                                        </td>
                                    @else
                                        <td><a class="btn btn-success" href="">{{ $teachinfon->User->status }}</a></td>
                                        </td>
                                    @endif
                                </div>
                                <div class="col-md-3 mt-3">
                                    <td>{{ $teachinfon['teacher_number'] }}</td>
                                </div>
                                <div class="col-md-3 mt-3">
                                    <td>{{ $teachinfon['qualification'] }}</td>
                                </div>
                                <div class="col-md-3 mt-3">
                                    <td>{{ $teachinfon['country'] }}</td>
                                </div>
                                <div class="col-md-3 mt-3">
                                    <td>{{ $teachinfon['address'] }}</td>
                                </div>

                            </div>



                        </div>
                    </div>


            </main>
        @endsection
