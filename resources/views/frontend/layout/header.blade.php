<header class="main-header">
    <div class="header-sticky">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <!-- Logo Start -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    @if ($setting->first()->logo != null)
                        <img id="logo-img" src="{{ asset('uploads/setting') }}/{{ $setting->first()->logo }}" alt="logo-img">
                    @endif
                </a>
                <!-- Logo End -->

                <!-- Main Menu Start -->
                <div class="collapse navbar-collapse main-menu">
                    <div class="nav-menu-wrapper">
                        <ul class="navbar-nav mr-auto" id="menu">
                            <li>
                                <a class="nav-link" href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('about_us') }}">About Us</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('services') }}">Services</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('gallerys') }}">Project</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('contect') }}">Contact</a></li>
                            <li class="nav-item highlighted-menu"><a class="nav-link" href="{{ route('contect') }}">Contact Us</a></li>
                        </ul>
                    </div>
                    <!-- Let’s Start Button Start -->
                    <div class="header-btn d-inline-flex">
                        <a href="contact.html" class="btn-default">Contact Us</a>
                    </div>
                    <!-- Let’s Start Button End -->
                </div>
                <!-- Main Menu End -->
                <div class="navbar-toggle"></div>
            </div>
        </nav>
        <div class="responsive-menu"></div>
    </div>
</header>
