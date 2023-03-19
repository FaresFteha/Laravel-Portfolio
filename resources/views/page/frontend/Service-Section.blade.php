<section class="service-section section-block" id="service-section">
    <div class="container">
        <div class="section-title dark">
            <h2>Service</h2>
            <p class="lead">
                The services that I provide to clients that you can benefit from.
            </p>
        </div><!-- .section-title -->
        <div class="row">
            @foreach ($Service as $items)
            <div class="col-xl-4 col-lg-6" data-aos="fade-up">
                <div class="content-wrapper service-tilt" data-tilt data-tilt-max="15">
                    <div class="icon-box"><i class="{{ $items->icone }}"></i></div>
                    <h3>{{ $items->service_name }}</h3>
                    <p>
                        {{ $items->descripsion }}
                    </p>
                </div>
            </div>
            @endforeach
            
        </div><!-- .row -->
    </div> <!-- .container -->
    <div class="design-elements">
        <img class="de-service-1 elem-updown" src="{{ asset('asset/frontend/image/design-elements/service-element-1.png') }}"
            alt="service element 1">
        <img class="de-service-2 elem-updown" src="{{ asset('asset/frontend/image/design-elements/service-element-2.png') }}"
            alt="service element 2">
        <img class="de-service-3 elem-updown" src="{{ asset('asset/frontend/image/design-elements/service-element-3.png') }}"
            alt="service element 3">
    </div> <!-- .design-elements -->
</section>