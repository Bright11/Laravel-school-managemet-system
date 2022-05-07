@extends('admin.include.master')
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <!--sidbar-->
        @include('admin.include.sidebar')
    </div>
    @section('body')
        <div class="container-fluid">
            <div id="layoutSidenav_content">
                <main>

                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Registration</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Static Navigation</li>
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <form action="{{ route('registerdb') }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Full name</label>
                                                <input type="text" class="form-control" name="full_name"
                                                    placeholder="Full name">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">student Email
                                                    address</label>
                                                <input type="email" class="form-control" name="student_email"
                                                    placeholder="Email address">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Position</label>
                                                <select name="position" class="form-control">
                                                    <option value="" class="option">Choose position</option>
                                                    <option value="student" class="option">Student</option>
                                                    <option value="teacher" class="option">Teacher</option>
                                                    <option value="staf" class="option">Star</option>
                                                    <option value="admin" class="option">Admin</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                                <input type="password" class="form-control" name="password">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Confirm
                                                    Password</label>
                                                <input type="password" class="form-control" name="confirm_p">
                                            </div>

                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary form-control">Submit</button>
                                </form>
                            </div>

                        </div>


                    </div>
            </div>
        </div>
    </div>
    </main>
    </div>
    </div>
@endsection
