<section class="about-section section-block" id="about-section" data-aos="fade-up">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 image-block" data-aos="fade-right" data-aos-delay="200"
                data-aos-duration="2000">
                <div class="img-wrapper about-img-wrap" data-tilt data-tilt-max="10">
                    <img class="about-img-1 img-fluid" src="{{ asset('asset/frontend/image/about-image-1.png') }}" alt="about image">
                    <img class="about-img-2 img-fluid" src="{{ asset('asset/frontend/image/about-image-2.png') }}" alt="about image 2">
                </div>
            </div>
            <div class="col-xl-6 content-block" data-aos="fade-right" data-aos-delay="400"
                data-aos-duration="2000">
                <h2><span>About Me</span>{{ $About->job_title }}</h2>
                <p>
                    {{ $About->descripsion }}
                </p>
                <div class="personal-details row">
                    <div class="col-md-6">
                        <ul class="personal-info">
                            <li>
                                <h4>Name</h4>
                                <p>{{ $About->name }}</p>
                            </li>
                            <li>
                                <h4>Email</h4>
                                <p>{{ $About->email}}</p>
                            </li>
                            <li>
                                <h4>Phone</h4>
                                <p>{{ $About->phone->number }}</p>
                            </li>
                        </ul> <!-- .personal-info -->
                    </div> <!-- .col-md-6 -->
                    <div class="col-md-6">
                        <ul class="personal-info">
                            <li>
                                <h4>Age</h4>
                                <p>{{ $About->age}}</p>
                            </li>
                            <li>
                                <h4>Education</h4>
                                <p>{{ $About->education }}</p>
                            </li>
                            <li>
                                <h4>Freelance</h4>
                                <p>{{ $About->freelance }}</p>
                            </li>
                        </ul> <!-- .personal-info -->
                    </div> <!-- .col-md-6 -->
                </div> <!-- .personal-details -->
                <a class="btn-main" href="{{ route('Download' ,$About->cv ) }}">Download CV</a>
            </div>
        </div> <!-- .row -->
    </div> <!-- .container -->
    <div class="design-elements">
        <img class="de-about-1 elem-updown" src="{{ asset('asset/frontend/image/design-elements/about-element-1.png') }}"
            alt="about element 1">
        <img class="de-about-2 elem-updown" src="{{ asset('asset/frontend/image/design-elements/about-element-1.png') }}"
            alt="about element 2">
    </div> <!-- .design-elements -->
</section>