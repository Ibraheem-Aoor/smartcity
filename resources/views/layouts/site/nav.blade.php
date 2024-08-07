<!-- Navbar & Hero Start -->
<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="{{ route('home') }}" class="navbar-brand p-0">
        <h1 class="m-0"><img src="{{ asset('assets/common/logo.png') }}" alt=""> {{ config('app.name') }}</h1>
        <!-- <img src="img/logo.png" alt="Logo"> -->
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="{{ route('home') }}" class="nav-item nav-link {{ areActiveRoutes(['home']) }}">Home</a>
            <a href="{{ route('site.about') }}" class="nav-item nav-link {{ areActiveRoutes(['site.about']) }}">About</a>

            <!-- SMART CONSULTATIONS Dropdown -->
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">SMART CONSULTATIONS</a>
                <div class="dropdown-menu m-0">
                    <a href="#" class="dropdown-item">AI, DRONES, GENETICS AND GAMING</a>
                    <a href="#" class="dropdown-item">SMART ENGINEERING</a>
                    <a href="#" class="dropdown-item">SMART CITIES AND HOMES</a>
                </div>
            </div>

            <!-- GRADUATE SCHOOL FOR BUSINESS & ENTREPRENEURSHIP -->
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">GRADUATE SCHOOL</a>
                <div class="dropdown-menu m-0">
                    <a href="#" class="dropdown-item">MBA/DBA/DM</a>
                    <a href="#" class="dropdown-item">PROFESSIONAL DIPLOMAS</a>
                    <a href="#" class="dropdown-item">PROFESSIONAL CERTIFICATION PROGRAMS</a>
                </div>
            </div>

            <!-- SMART TRAINING AND DEVELOPMENT -->
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">SMART TRAINING</a>
                <div class="dropdown-menu m-0">
                    <a href="#" class="dropdown-item">TRADITIONAL AND E-TRAINING</a>
                    <a href="#" class="dropdown-item">PROFESSIONAL COURSES</a>
                    <a href="#" class="dropdown-item">CERTIFICATION PROGRAMS</a>
                    <a href="#" class="dropdown-item">eTRAINING</a>
                </div>
            </div>

            <!-- SMART INTERNATIONAL UNIVERSITIES HUB -->
            <div class="nav-item dropdown d-none">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">SMART INTERNATIONAL HUB</a>
                <div class="dropdown-menu m-0">
                    <a href="#" class="dropdown-item">UK</a>
                    <a href="#" class="dropdown-item">US</a>
                    <a href="#" class="dropdown-item">Australia</a>
                </div>
            </div>

            <!-- SMART LOCAL UNIVERSITIES HUB -->
            <a href="packages.html" class="nav-item nav-link">SMART LOCAL UNIVERSITIES</a>

            <!-- ACADEMIC VENUES -->
            <div class="nav-item dropdown d-none">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">ACADEMIC VENUES</a>
                <div class="dropdown-menu m-0">
                    <a href="#" class="dropdown-item">UNIVERSITY CAMPUSES</a>
                    <a href="#" class="dropdown-item">AUDITORIUM</a>
                    <a href="#" class="dropdown-item">COMMERCIAL SPACES</a>
                    <a href="#" class="dropdown-item">CAFETERIAS</a>
                    <a href="#" class="dropdown-item">OPEN LANDSCAPE</a>
                    <a href="#" class="dropdown-item">CONFERENCE FACILITIES</a>
                </div>
            </div>

            <!-- SMART INCUBATORS -->
            <div class="nav-item dropdown d-none">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">SMART INCUBATORS</a>
                <div class="dropdown-menu m-0">
                    <a href="#" class="dropdown-item">ENTREPRENEURSHIP</a>
                    <a href="#" class="dropdown-item">INTERVENTIONS</a>
                    <a href="#" class="dropdown-item">SMART SMALL PROJECTS SUPPORT</a>
                    <a href="#" class="dropdown-item">SUPPORT CENTRE</a>
                    <a href="#" class="dropdown-item">FACILITIES</a>
                    <a href="#" class="dropdown-item">PRIZES</a>
                    <a href="#" class="dropdown-item">FINANCE</a>
                </div>
            </div>

            <!-- REMOTE FREELANCING ARENA -->
            <div class="nav-item dropdown d-none">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">REMOTE FREELANCING ARENA</a>
                <div class="dropdown-menu m-0">
                    <a href="#" class="dropdown-item">REMOTE FREELANCING PLATFORMS</a>
                    <a href="#" class="dropdown-item">SUPPORT</a>
                    <a href="#" class="dropdown-item">TRAINING</a>
                    <a href="#" class="dropdown-item">SPACES</a>
                </div>
            </div>

            <a href="contact.html" class="nav-item nav-link">Contact</a>
        </div>
        <a href="" class="btn btn-primary rounded-pill py-2 px-4 ms-lg-4">Get Quote</a>
    </div>
</nav>
<!-- Navbar & Hero End -->
