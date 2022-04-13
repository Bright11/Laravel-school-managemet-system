@if(session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @elseif($errors->has('teacher_email'))
    <div class="alert alert-success" role="alert">
      <h4>Check your Email </h4>
      @elseif($errors->has('student_email'))
      <div class="alert alert-success" role="alert">
        <h4>Check your Email </h4>
    @elseif($errors->has('full_name'))
    <div class="alert alert-success" role="alert">
        <h4>Check your Name </h4>
    </div>
    @elseif($errors->has('password'))
    <div class="alert alert-success" role="alert">
        <h4>Check your password</h4>
    </div>
    @elseif($errors->has('teacher_number'))
    <div class="alert alert-success" role="alert">
        <h4>Check your number</h4>
    </div>
    @elseif($errors->has('student_number'))
    <div class="alert alert-success" role="alert">
        <h4>Check your number</h4>
    </div>
    @elseif($errors->has('confirm_p'))
    <div class="alert alert-success" role="alert">
        <h4>Your password didn't match</h4>
    </div>

        @endif
