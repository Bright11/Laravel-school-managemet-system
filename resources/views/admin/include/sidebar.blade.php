<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading">Bright C Web</div>
            <a class="nav-link" href="{{ route('indexadmin') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
               Admin Dashboard
            </a>
            <div class="sb-sidenav-menu-heading">Interface</div>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Student
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{ route('viewstudents') }}">View Student</a>
                    <a class="nav-link" href="{{ route('student_admission') }}">View Addmission</a>
                    <a class="nav-link" href="{{ route('view_new_student') }}">New Student</a>

                </nav>
            </div>

            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
               School Event
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
        <nav class="sb-sidenav-menu-nested nav">
            <a class="nav-link" href="{{ route('view_school_event') }}">School Event</a>

        </nav>
    </div>


            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                School
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                <a class="nav-link" href="{{ route('view_school_courses') }}">View Course</a>
                <a class="nav-link" href="{{ route('view_teachers') }}">Teachers</a>
                <a class="nav-link" href="{{ route('view_new_teachers') }}">New Teachers</a>

                <a class="nav-link" href="{{ route('view_classroom') }}">View Class Rooms</a>

                <a class="nav-link" href="{{ route('view_semester') }}">Semester</a>
                <a class="nav-link" href="{{ route('view_level') }}">Level</a>
                <a class="nav-link" href="{{ route('view_tutorial') }}">Tutorals</a>
                <a class="nav-link" href="{{ route('view_admin_hostel') }}">Hostel</a>


                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                        Users
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
            <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{ route('view_users') }}">Users</a>
                    <a class="nav-link" href="{{ route('view_sponsors') }}">Sponsors</a>
                    <a class="nav-link" href="{{ route('view_annoucement') }}">Annoucement</a>
                </nav>
            </div>

            <div class="sb-sidenav-menu-heading"></div>

        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">Logged in as:</div>
       @if (Session::has('user'))
       <div class="small" style="color: white;">{{ session('user.name') }}</div>
       @endif
    </div>
</nav>
<style>
    .accordion a{
        color: white !important;
        font-size: 18px !important;
    }
</style>
