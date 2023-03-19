<section class="contact-section section-block" id="contact-section">
    <div class="container">
        <div class="section-title">
            <h2>Get in Touch</h2>
            <p class="lead">
                If you have any questions or want to contact me to get work done, do not hesitate to contact me.
            </p>
        </div><!-- .section-title -->

        <div class="row contact-options">
            <div class="col-lg-4 d-flex justify-content-xxl-center align-items-xl-center" data-aos="fade-down"
                data-aos-duration="1000">
                <div class="icon-box"><i class="pe-7s-map-marker"></i></div>
                <div class="content-wrapper">
                    <h4>Address</h4>
                    <address>{{ $Communication['Address'] }}</address>
                </div>
            </div>
            <div class="col-lg-4 d-flex justify-content-xxl-center align-items-xl-center" data-aos="fade-down"
                data-aos-duration="1000" data-aos-delay="200">
                <div class="icon-box"><i class="pe-7s-call"></i></div>
                <div class="content-wrapper">
                    <h4>Phone</h4>
                    <a href="#">{{ $Communication['Phone'] }}</a>
                </div>
            </div>
            <div class="col-lg-4 d-flex justify-content-xxl-center align-items-xl-center" data-aos="fade-down"
                data-aos-duration="1000" data-aos-delay="400">
                <div class="icon-box"><i class="pe-7s-mail"></i></div>
                <div class="content-wrapper">
                    <h4>Email</h4>
                    <a href="#">{{ $Communication['Email'] }}</a>
                </div>
            </div>
        </div> <!-- .row -->

        <div class="row">
            <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="600">
                <div class="map-wrapper" id="mapwrapper">
    
                </div>
            </div>
            <livewire:submit-contact/>
        </div> <!-- .row -->

    </div> <!-- .container -->
    <div class="design-elements">
        <img class="de-contact-1 elem-updown" src="{{ asset('asset/frontend/image/design-elements/contact-element-1.png') }}"
            alt="contact element 1">
        <img class="de-contact-2 elem-updown" src="{{ asset('asset/frontend/image/design-elements/contact-element-2.png') }}"
            alt="contact element 2">
    </div> <!-- .design-elements -->
</section> 