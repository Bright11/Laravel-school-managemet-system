@extends('include.fmaster')

@section('fbody')
<div class="container">
    <form action="{{ route('addadmisiontodb') }}" class="admisionform" method="post">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <label for="firstname">Your first name</label>
                <input type="text" name="f_name" class="form-control" placeholder="Your first name">
                <label for="firstname">Email</label>
                <input type="text" name="email" class="form-control" placeholder="Your email@example.com">
                <label for="firstname">School Name</label>
                <input type="text" name="school_name" class="form-control" placeholder="School name">
                <label for="firstname">Country</label>
                <input type="text" name="country" class="form-control" placeholder="Country">
            </div>
            <div class="col-md-6">
                <label for="firstname">Your last name</label>
                <input type="text" name="l_name" class="form-control" placeholder="Your last name">
                <label for="firstname">Phone Number</label>
                <input type="text" name="number" class="form-control" placeholder="Number">
                <label for="firstname">Qualification</label>
                <select name="qualification"  class="form-control admissionformselete">
                    <option selected="">Your Qualification</option>
                    <option value="secondary school">Secondary School</option>
                    <option value="undergraduate">Undergraduate</option>
                    <option value="postgraduate">Postgraduate</option>
                    <option value="others">Others</option>
                </select>
                <label for="firstname">City</label>
                <input type="text" name="city" class="form-control" placeholder="City">
            </div>
        </div>
        <label for="" class="text-center">We want to know more about you</label>
        <textarea name="user_infor" cols="30" rows="10" class="form-control admissionformstextarea" placeholder="More info about you"></textarea>
        <input type="submit" class="form-control admission_submit">
    </form>
</div>
@endsection
