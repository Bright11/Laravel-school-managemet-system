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
                <h1 class="mt-4">Staf Registration</h1>
                @include('admin.include.merros')
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                    <li class="breadcrumb-item active">Staf Navigation</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <form action="{{ route('addstaftodb') }}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Full name</label>
                                        <input type="text" class="form-control" name="staf_name" value="@if(session('name')){{ session('name') }}@endif" >
                                      </div>
                                      <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Staf Position</label>
                                        <input type="text" class="form-control" name="staf_position" placeholder="">
                                      </div>
                                      <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Staf email</label>
                                        <input type="email" class="form-control" name="staf_email" value="@if(session('email')){{ session('email') }}@endif" >
                                      </div>
                                    <div class="mb-3">
                                      <label for="exampleInputEmail1" class="form-label">Staf number</label>
                                      <input type="number" class="form-control" name="staf_number" placeholder="Number">
                                      </div>

                                   </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">qualification</label>
                                        <input type="text" class="form-control" name="qualification" placeholder="Qualification">
                                      </div>
                                      <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Address</label>
                                        <input type="text" class="form-control" name="address" placeholder="Address">
                                      </div>
                                      <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Country</label>
                                        <input type="text" class="form-control" name="country" placeholder="Country">
                                      </div>
                                      <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Date of birth</label>
                                        <input type="date" class="form-control" name="Staf_dob" placeholder="Date of birth">
                                      </div>
                                </div>
                                <div class="mb-3">
                                  <label for="exampleInputPassword1" class="form-label">Quote</label>
                                 <textarea name="staf_quote" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Profile Picture</label>
                                        <input type="file" class="form-control" name="profil_p">
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
