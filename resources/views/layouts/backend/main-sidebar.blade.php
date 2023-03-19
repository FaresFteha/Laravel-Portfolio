<nav class="navbar navbar-light navbar-vertical navbar-expand-xl">
    <script>
        var navbarStyle = localStorage.getItem("navbarStyle");
        if (navbarStyle && navbarStyle !== 'transparent') {
            document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
        }
    </script>
    <div class="d-flex align-items-center">
        <div class="toggle-icon-wrapper">

            <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip"
                data-bs-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span
                        class="toggle-line"></span></span></button>

        </div><a class="navbar-brand" href="../index.html">
            <div class="d-flex align-items-center py-3"><img class="me-2"
                src="{{ asset('asset/backend/src/img/icons/spot-illustrations/falcon.png') }}" alt="" width="40" /><span
                    class="font-sans-serif">Portfolio</span>
            </div>
        </a>
    </div>

    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <div class="navbar-vertical-content scrollbar">
            <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                {{-- Dashboard --}}
                <li class="nav-item">
                    <!-- parent pages--><a class="nav-link dropdown-indicator" href="#dashboard" role="button"
                        data-bs-toggle="collapse" aria-expanded="true" aria-controls="dashboard">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-chart-pie"></span></span><span
                                class="nav-link-text ps-1">Dashboard</span>
                        </div>
                    </a>
                    {{-- Home Page --}}
                    <ul class="nav collapse show" id="dashboard">
                        <li class="nav-item"><a class="nav-link" href="{{ route('Wellcome') }}" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Home</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- Dashboard --}}
                {{-- App pages --}}
                <li class="nav-item">
                    <!-- label-->
                    <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                        <div class="col-auto navbar-vertical-label">App
                        </div>
                        <div class="col ps-0">
                            <hr class="mb-0 navbar-vertical-divider" />
                        </div>
                    </div>
                    <!-- parent pages-->
                    {{-- <a class="nav-link" href="../app/calendar.html" role="button" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-calendar-alt"></span></span><span
                                class="nav-link-text ps-1">Calendar</span>
                        </div>
                    </a> --}}


                    <!-- Hero-Section-->
                    <a class="nav-link dropdown-indicator" href="#email" role="button" data-bs-toggle="collapse"
                        aria-expanded="false" aria-controls="email">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-star"></span></span><span
                                class="nav-link-text ps-1">Hero-Section</span>
                        </div>
                    </a>
                    <ul class="nav collapse false" id="email">
                        <li class="nav-item"><a class="nav-link" href="{{ route('Hero-Section') }}"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Hero
                                        Informasion</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('Hero-Icon-Section') }}"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Hero
                                        Icons</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>

                        <li class="nav-item"><a class="nav-link" href="{{ route('hero-tool-tech-section') }}"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Hero tool
                                        tech</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                    </ul>

                    <!-- Intro-Section-->
                    <a class="nav-link dropdown-indicator" href="#Intro" role="button" data-bs-toggle="collapse"
                        aria-expanded="false" aria-controls="Intro">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="far fa-list-alt"></span></span><span
                                class="nav-link-text ps-1">Intro-Section</span>
                        </div>
                    </a>
                    <ul class="nav collapse false" id="Intro">
                        <li class="nav-item"><a class="nav-link" href="{{ route('Intro.index') }}"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Intro
                                        Informasion</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                    </ul>

                    <!-- About-Section-->
                    <a class="nav-link dropdown-indicator" href="#Phone" role="button" data-bs-toggle="collapse"
                        aria-expanded="false" aria-controls="Phone">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="far fa-address-card"></span></span><span
                                class="nav-link-text ps-1">About-Section</span>
                        </div>
                    </a>
                    <ul class="nav collapse false" id="Phone">
                        <li class="nav-item"><a class="nav-link" href="{{ route('Phone') }}" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Phone</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>

                        <li class="nav-item"><a class="nav-link" href="{{ route('About') }}" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">About</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>

                        <li class="nav-item"><a class="nav-link" href="{{ route('Skill') }}" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Skills</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                    </ul>

                    <!-- Portfolio-Section-->
                    <a class="nav-link dropdown-indicator" href="#Portfolio" role="button"
                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="Portfolio">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-desktop"></span></span><span
                                class="nav-link-text ps-1">Portfolio-Section</span>
                        </div>
                    </a>
                    <ul class="nav collapse false" id="Portfolio">
                        <li class="nav-item"><a class="nav-link" href="{{ route('Portfolio.index') }}"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span
                                        class="nav-link-text ps-1">Portfolio</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>

                    </ul>

                    <!-- Service-Section-->
                    <a class="nav-link dropdown-indicator" href="#Service" role="button" data-bs-toggle="collapse"
                        aria-expanded="false" aria-controls="Service">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-sitemap"></span></span><span
                                class="nav-link-text ps-1">Service-Section</span>
                        </div>
                    </a>
                    <ul class="nav collapse false" id="Service">
                        <li class="nav-item"><a class="nav-link" href="{{ route('Service.index') }}"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Service</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>

                        <li class="nav-item"><a class="nav-link" href="{{ route('Work.index') }}"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Work
                                        with</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                    </ul>

                    <!-- Testimonial-Section-->
                    <a class="nav-link dropdown-indicator" href="#Testimonial" role="button"
                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="Testimonial">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-users"></span></span><span
                                class="nav-link-text ps-1">Testimonial-Section</span>
                        </div>
                    </a>
                    <ul class="nav collapse false" id="Testimonial">
                        <li class="nav-item"><a class="nav-link" href="{{ route('Testimonial.index') }}"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span
                                        class="nav-link-text ps-1">Testimonial</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                    </ul>

                    <!-- Blog-Section-->
                    <a class="nav-link dropdown-indicator" href="#Blog" role="button" data-bs-toggle="collapse"
                        aria-expanded="false" aria-controls="Blog">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fab fa-blogger"></span></span><span
                                class="nav-link-text ps-1">Blog-Section</span>
                        </div>
                    </a>
                    <ul class="nav collapse false" id="Blog">
                        <li class="nav-item"><a class="nav-link" href="{{ route('Category.index') }}"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span
                                        class="nav-link-text ps-1">Category</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>

                        <li class="nav-item"><a class="nav-link" href="{{ route('Blog.index') }}"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Blog</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                    </ul>

                    <!-- Communication-Section-->
                    <a class="nav-link dropdown-indicator" href="#Communication" role="button"
                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="Communication">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="far fa-handshake"></span></span><span
                                class="nav-link-text ps-1">Communication-Section</span>
                        </div>
                    </a>
                    <ul class="nav collapse false" id="Communication">
                        <li class="nav-item"><a class="nav-link" href="{{ route('Communication.index') }}"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span
                                        class="nav-link-text ps-1">Communication</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>

                        <li class="nav-item"><a class="nav-link" href="{{ route('Contact.index') }}"
                                aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Contact</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                    </ul>

                <li class="nav-item"><a class="nav-link" href="{{ route('settings.index') }}"
                        aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="fas fa-link"></span><span
                                class="nav-link-text ps-1">Social media links</span>
                        </div>
                    </a>
                    <!-- more inner pages-->
                </li>
                </li>
            </ul>
        </div>
    </div>
</nav>
