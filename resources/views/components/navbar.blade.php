<!-- START HEADER SECTION -->
<header class="main-header">
    <!-- START LOGO AREA -->
    <div class="logo-area">
        <div class="auto-container">
            <div class="row align-items-center">
                <!-- Logo Section -->
                <div class="col-lg-3 col-12 text-lg-left text-center mb-lg-0 mb-4">
                    <div class="logo">
                        <a href="{{ url('/') }}">
                            <img class="img-fluid" src="{{ asset('assets/img/kuraw/logo.jpg') }}" alt=""
                                style="max-width: 150px; height: auto;"> <!-- Smaller logo size -->
                        </a>
                    </div>
                </div>
                <!-- Header Info Section -->
                <div class="col-lg-9 col-12">
                    <div class="header-info d-flex justify-content-around align-items-center flex-wrap">
                        <div class="header-info-box text-center">
                            <div class="header-info-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <h5>Connect With Us</h5>
                            <p>kurawcafe@gmail.com</p>
                        </div>
                        <div class="header-info-box text-center">
                            <div class="header-info-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <h5>Call For Inquiry</h5>
                            <p>0956 165 7495</p>
                        </div>
                        <div class="header-info-box text-center">
                            <div class="header-info-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <h5>Opening Hours</h5>
                            <p>Mon - Thu : 10AM - 7PM <br>Fri - Sat : 10AM - 8PM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END LOGO AREA -->

    <!-- START NAVIGATION AREA -->
    <div class="mainmenu-area bg-theme">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a href="{{ url('/') }}" class="nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/about') }}"
                                class="nav-link {{ Request::is('about') ? 'active' : '' }}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/menu') }}"
                                class="nav-link {{ Request::is('menu') ? 'active' : '' }}">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/gallery') }}"
                                class="nav-link {{ Request::is('gallery') ? 'active' : '' }}">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/reservation') }}"
                                class="nav-link {{ Request::is('reservation') ? 'active' : '' }}">Reservation</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/contact') }}"
                                class="nav-link {{ Request::is('contact') ? 'active' : '' }}">Contact</a>
                        </li>
                    </ul>

                    <div class="d-flex align-items-center">
                        <!-- Search Icon -->
                        <a href="#" class="header-search me-3" data-bs-toggle="modal"
                            data-bs-target="#headerSearchModal">
                            <i class="fas fa-search"></i>
                        </a>

                        <!-- Cart Icon -->
                        <a href="{{ url('/cart') }}" class="header-cart me-3">
                            <i class="fas fa-shopping-cart"></i>
                        </a>

                        <!-- Profile Dropdown -->
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle text-dark" id="profileDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                                @if(Auth::check())
                                    <li class="dropdown-header">Hello, {{ Auth::user()->firstname }}</li>
                                    <li><a class="dropdown-item" href="{{ route('profile') }}">My Profile</a></li>
                                    <li>
                                        <form action="{{ route('logout') }}" method="POST" class="dropdown-item">
                                            @csrf
                                            <button type="submit" class="btn btn-link p-0 text-dark">Logout</button>
                                        </form>
                                    </li>
                                @else
                                    <li><a class="dropdown-item" href="{{ url('/login-signup') }}">Login</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/login-signup') }}">Register</a></li>
                                @endif
                            </ul>
                        </div>

                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- END NAVIGATION AREA -->
</header>
<!-- END HEADER SECTION -->