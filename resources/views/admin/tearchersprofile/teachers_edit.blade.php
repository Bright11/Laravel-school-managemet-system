@extends('admin.include.master')
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <!--sidbar-->

    </div>
    @section('body')
        <div id="layoutSidenav_content">
            <main class="mt-5">
                <div class="teachertopbar">
                    @include(
                        'admin.tearchersprofile.includetearchbar.secondtopbar'
                    )
                </div>
                <div class="container">
                    <main>
                        <div class="card-body">
                            <div class="col-md-6">
                                <form action="/editeteachertodb/{{ $editteacher->id }}" method="post" enctype="multipart/form-data">
                                    @method('put')
                                    @csrf

                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Full name</label>
                                        <input type="text" class="form-control" name="full_name"
                                            value="{{ $editteacher->full_name }}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">teacher Phone
                                            number</label>
                                        <input type="number" class="form-control" name="teacher_number"
                                            value="{{ $editteacher->teacher_number }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">teacher
                                            qualification</label>
                                        <input type="text" class="form-control" name="qualification"
                                            value="{{ $editteacher->qualification }}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Description</label>
                                        <textarea name="description" cols="30" rows="10" class="form-control">{{ $editteacher->description }}</textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Profile Picture</label>
                                        <input type="file" class="form-control" name="profil_p">
                                    </div>

                                    <button type="submit" class="btn btn-primary form-control">Submit</button>
                                </form>
                            </div>

                        </div>



                    </main>
                @endsection
