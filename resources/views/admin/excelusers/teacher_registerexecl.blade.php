<div class="container importform text-center">
    <h6>Import Teachers</h6>
    <form action="{{ route('teacherexceltodb') }}" class="myuserform" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="usersnew" class="form-control importform-file">
        <input type="submit" class="form-control importform-submit">
    </form>
</div>
