<section class="features-section section-block" id="features-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 image-block" data-aos="fade-right" data-aos-duration="1500">
                <div class="image-wrapper">
                    <img class="img-fluid feature-photo" src="{{ asset('asset/frontend/image/feature-photo.png') }}" alt="features photo"
                        data-tilt data-tilt-max="10">
                </div> <!-- .image-wrapper -->
            </div> <!-- .image-block -->
            <div class="col-xl-6 content-block" data-aos="fade-right" data-aos-duration="1500"
                data-aos-delay="400">
                <h2 class="block-title"><span>Why work with me</span>{{ $Work['title'] }}</h2>
                <p>
                    {{ $Work['descripsion'] }}
                </p>
                <ul class="features-list">
                    <li class="d-flex align-items-start">
                        <div class="icon-block">
                            <div class="icon-box"><i class="{{$Work['icone-1'] }}"></i></div>
                        </div>
                        <div class="content-wrapper">
                            <h4>{{ $Work['title-icone-1'] }}</h4>

                            <p>
                                {{ $Work['descripsion-title-1'] }}
                            </p>
                        </div>

                    </li>
                    <li class="d-flex align-items-start">
                        <div class="icon-block">
                            <div class="icon-box"><i class="{{ $Work['icone-2'] }}"></i></div>
                        </div>
                        <div class="content-wrapper">
                            <h4>{{ $Work['title-icone-2'] }}</h4>

                            <p>
                                {{ $Work['descripsion-title-2'] }}
                            </p>
                        </div>

                    </li>
                    <li class="d-flex align-items-start">
                        <div class="icon-block">
                            <div class="icon-box"><i class="{{ $Work['icone-3'] }}"></i></div>
                        </div>
                        <div class="content-wrapper">
                            <h4>{{ $Work['title-icone-3'] }}</h4>

                            <p>
                                {{ $Work['descripsion-title-3'] }}
                            </p>
                        </div>

                    </li>
                </ul>
            </div>
        </div> <!-- .row -->
    </div> <!-- .container -->
</section> 