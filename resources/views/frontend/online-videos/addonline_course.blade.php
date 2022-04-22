@extends('include.fmaster')

@section('fbody')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                <li class="breadcrumb-item active">Add Tutorials</li>
            </ol>

            <div class="card mb-4">

                <div class="card-body">
                        <form class="tutoralform" action="{{ route('onlinetutorialtodb') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tutorial Name</label>
                                <input type="text" name="video_name" class="form-control" placeholder="Tutorial Name">
                                </div>
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Course Category</label>
                              <select name="cart_id" class="form-control">
                                <option value="" class="option">Select Category</option>
                                @forelse ($course as $t)
                                <option value="{{ $t['id'] }}" class="option">{{ $t['cours_name'] }}</option>
                                @empty
                                @endforelse
                              </select>
                              </div>


                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Tutorial Description</label>
                                        <textarea name="video_description" cols="30" rows="10" class="form-control"></textarea>
                                        </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Tutorial Picture</label>
                                    <input type="file" name="video_img" class="form-control" >
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Tutorial Video</label>
                                        <input type="file" name="video" class="form-control" >
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Tutorial pdf Optional</label>
                                            <input type="file" name="notes" class="form-control" >
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Tutorial price</label>
                                                <input type="number" name="video_price" class="form-control">
                                                </div>


                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>

                </div>
                </div>
            </div>


    </main>
   @endsection
