@extends('include.fmaster')

@section('fbody')

    <main>
        <div class="container-fluid px-4">

            <div class="card mb-4">
                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">N</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Video</th>
                            <th scope="col">Image</th>
                            <th scope="col">Update</th>
                            <th scope="col">Delete</th>

                          </tr>
                        </thead>
                        <tbody>

                              @forelse ($myonlinevideos as $v)
                              <tr>
                              <th scope="row">1</th>
                              <td>{{ $v['Video_name'] }}</td>
                              <td>{{ $v['Video_price'] }}</td>
                              <td class="myvideostd"><video controls class="myvidoes"  src="{{ asset('onlinevideo/'.$v['Video']) }}"></video></td>
                              <td ><img style="height: 200PX; width: 200px;" src="{{ asset('onlineimg/'.$v->Video_img) }}" alt=""></td>

                              <td><a class="btn btn-warning" href="deite/{{$v->id}}">Update</a></td></td>
                              <td><a class="btn btn-warning" href="deite/{{$v->id}}">Deletel</a></td></td>

                              @empty
                              No Video
                            </tr>
                              @endforelse



                        </tbody>
                      </table>

                </div>
                </div>
            </div>


    </main>
   @endsection
