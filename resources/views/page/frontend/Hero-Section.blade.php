<section class="hero-area" id="hero-area">
    <div class="container">
        <div class="hero-content d-flex justify-content-center">
            <div class="row d-flex align-items-center justify-content-center">

                <div class="col-xl-6 order-xl-last image-block">
                    <div class="image-wrapper" data-tilt data-tilt-max="10">
                        <ul class="hero-icons">
                            <li>
                                <i class="{{ $HeroIcon['Icon-2'] }}"></i>
                            </li>
                            <li>
                                <i class="{{ $HeroIcon['Icon-1'] }}"></i>
                            </li>
                            <li>
                                <i class="{{ $HeroIcon['Icon-3'] }}"></i>
                            </li>
                            <li>
                                <i class="{{ $HeroIcon['Icon-4'] }}"></i>
                            </li>
                        </ul>
                        <img class="img-fluid"
                            src="{{ URL::asset('Attachments/Personal_Photo/' . $HeroSection['photo']) }}"
                            alt="hero main image">
                    </div> <!-- .image-wrapper -->
                </div> <!-- .image-block -->

                <div class="col-xl-6 order-xl-first content-block">
                    <h1 class="hero-head"><small>Hello,
                            I'm</small>{{ $HeroSection['First_Name'] }}<strong>{{ $HeroSection['Last_Name'] }}</strong>
                    </h1>
                    <p>
                        I develop websites using ..
                    </p>
                    <div id="tech-tools" class="tech-tools">
                        <span>{{ $ToolTech['tool-tech-1'] }}</span>
                        <span>{{ $ToolTech['tool-tech-2'] }}</span>
                        <span>{{ $ToolTech['tool-tech-3'] }}</span>
                        <span>{{ $ToolTech['tool-tech-4'] }}</span>
                    </div>
                    <div class="link-group">
                        <a class="btn-main">Contact Me</a>
                        <ul class="hero-social list-inline">
                            <li class="list-inline-item"><a href="{{ setting('facebook_link') }}" target="_blank"><i
                                        class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="{{ setting('github_link') }}"target="_blank"><i
                                        class="fab fa-github"></i></a></li>
                            <li class="list-inline-item"><a href="{{ setting('linkedin_link') }}" target="_blank"><i
                                        class="fab fa-linkedin"></i></a></li>
                        </ul> <!-- .hero-social -->
                    </div> <!-- .link-group -->
                </div> <!-- .content-block -->

            </div> <!-- .row -->
        </div> <!-- .hero-content -->
    </div> <!-- .container -->
    <div class="design-elements">
        <img class="de-hero-1 elem-updown" src="{{ asset('asset/frontend/image/design-elements/hero-element-1.png') }}"
            alt="hero element 1">
        <img class="de-hero-2 elem-move" src="{{ asset('asset/frontend/image/design-elements/hero-element-2.png') }}"
            alt="hero element 2">
        <img class="de-hero-3 elem-updown" src="{{ asset('asset/frontend/image/design-elements/hero-element-3.png') }}"
            alt="hero element 3">
        <img class="de-hero-4 elem-updown" src="{{ asset('asset/frontend/image/design-elements/hero-element-4.png') }}"
            alt="hero element 4">
        <img class="de-hero-5 elem-move" src="{{ asset('asset/frontend/image/design-elements/hero-element-5.png') }}"
            alt="hero element 5">
    </div> <!-- .design-elements -->
</section>
