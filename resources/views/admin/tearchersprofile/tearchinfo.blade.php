@extends('admin.include.master')
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <!--sidbar-->

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
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                          @forelse ($tearch as $t)
                          <tr>
                          <td scope="row">{{ $t->id }}</td>
                            <td>{{ $t->full_name }}</td>
                          <td>{{ $t->teacher_email }}</td>
                          <td>{{ $t->teacher_number }}</td>

                          <td><a class="btn btn-warning" href="/teachers_edit/{{ $t->id }}">Delete</a></td>
                          @empty
                          No teacher
                        </tr>
                          @endforelse



                    </tbody>
                  </table>

             </div>
            </main>
        @endsection


