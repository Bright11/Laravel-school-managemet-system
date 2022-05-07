<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid mynavcontainer">
      <a class="navbar-brand" href="">University</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse navcolapsen" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item dropdown admindropdownli"style="position: initial;" >
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Categories
            </a>
            <ul class="dropdown-menu dropdownbtn admindropdownul"style="width: 100%;" aria-labelledby="navbarDropdown">
                @include('include.schoolcourses')
            </ul>
          </li>
          <li class="nav-item dropdown admissiondropdownli">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Admission
            </a>
            <ul class="dropdown-menu dropdownbtn admissiondropdownul" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{ route('admisionform') }}">Admission</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown admissiondropdownli">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Academic
            </a>
            <ul class="dropdown-menu dropdownbtn admissiondropdownul" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{ route('myprofile') }}">Student</a></li>
                <li><a class="dropdown-item" href="{{ route('lecturer') }}">Our Lecturers</a></li>
            </ul>
          </li>
          @if (Session::has('user'))
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}">Logout</a>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">Login</a>
          </li>
          @endif
          <li class="nav-item dropdown admissiondropdownli">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              My profile
            </a>
            <ul class="dropdown-menu dropdownbtn admissiondropdownul" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{ route('addonline_course') }}">Upload Your course</a></li>
                <li><a class="dropdown-item" href="{{ route('my_video_tutorial') }}">My Videos</a></li>
                <li><a class="dropdown-item" href="{{ route('my_paid_video_tutorial') }}">My Paid Videos</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('buy_courses') }}">Study Online </a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn nav_form_submit btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
