<section class="intro-section section-block">
    <div class="container">
        <div class="section-title">
            <h2>Welcome to my World</h2>
            <p class="lead">
                I'm a young tech enthasist and entrepreneur who love to take risk.
            </p>
        </div><!-- .section-title -->
        <div class="row">
            @foreach ($Intro as $items )
            <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1200">
                <div class="item-wrapper">
                    <div class="icon-box"><i class="{{ $items->icon }}"></i></div>
                    <div class="content-wrapper">
                        <h3>{{ $items->name }}</h3>
                        <p>
                            {{ $items->descripsion }}
                        </p>
                    </div> <!-- .content-wrapper -->
                </div> <!-- .item-wrapper -->
            </div>
            @endforeach
        </div> <!-- .row -->
    </div> <!-- .container -->

    <div class="design-elements">
        <img class="de-intro-1 elem-updown" src="{{ asset('asset/frontend/image/design-elements/intro-element-1.png') }}"
            alt="intro element 1">
    </div> <!-- .design-elements -->

</section>