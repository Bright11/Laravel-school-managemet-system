@extends('include.fmaster')

@section('fbody')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            @include('student.studentinclude.student_sidebar')
        </div>
        <div class="col-md-8">
            <div class="text-left"><a href="">My Result</a></div>



           <table class="table">
            <thead>
              <tr>
                <th scope="col">N</th>
                <th scope="col">Courses Name</th>
                <th scope="col">Student Level</th>
                <th scope="col">Start Learning</th>
                <th scope="col">Action</th>

              </tr>
            </thead>
            <tbody>
                @forelse ($studentcourse as $stc)


                <tr>
                    <th scope="row">1</th>
                    <td>{{ $stc->Schoolcourses->cours_name }}</td>
                    <td>{{ $stc->Level->level }}</td>
                    <td><a class="btn btn-success" href="studentgo_cours/{{ $stc->Schoolcourses->id }}/level/{{ $stc->Level->level_id }}">Go to Cours</a></td></td>
                    <td><a class="btn btn-danger" href="{{ $stc->id }}">Delete</a></td></td>
                  </tr>
                  @empty
                @endforelse
              </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
