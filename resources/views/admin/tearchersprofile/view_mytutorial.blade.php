@extends('admin.include.master')
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">

    </div>
    @section('body')
        <div id="layoutSidenav_content">
            <main class="mt-5">
<div class="teachertopbar">
    @include('admin.tearchersprofile.includetearchbar.secondtopbar')
</div>
             <div class="container">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col"> N</th>
                        <th scope="col">Tutorial Name</th>
                        <th scope="col">Level</th>
                        <th scope="col">Semester</th>
                        <th scope="col">Course On</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                          @forelse ($mytutorial as $t)
                          <tr>
                          <td scope="row">{{ $t->id }}</td>

                            <td>{{ $t->subject }}</td>
                          <td>{{ $t->Level->level }}</td>
                          <td>{{ $t->Semester->semester }}</td>
                          <td>{{ $t->Schoolcourses->cours_name }}</td>
                          <td><a disabled title="You are not allowed" class="btn btn-warning" href="">Delete</a></td>
                          @empty
                          No teacher
                        </tr>
                          @endforelse



                    </tbody>
                  </table>

             </div>
            </main>
        @endsection


