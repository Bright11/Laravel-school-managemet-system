@extends('include.fmaster')

   @section('fbody')

<div class="container-fluid">
        <main>

                                <form action="{{ route('logintodb') }}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label"> name</label>
                                        <input type="email" class="form-control" name="email" placeholder="Email">
                                      </div>
                                      <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Password</label>
                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                      </div>


                                    <button type="submit" class="btn btn-primary form-control">Submit</button>

        </main>

</div>
   @endsection
