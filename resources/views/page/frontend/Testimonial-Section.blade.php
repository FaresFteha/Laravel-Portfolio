<section class="testimonial-section section-block" id="testimonial-section">
    <div class="container">
        <div class="section-title dark">
            <h2>Testimonials</h2>
            <p class="lead">
                Some customer reviews help increase confidence between you and new customers.
            </p>
        </div><!-- .section-title -->
        <div class="testimonial-carousel swiper">
            <div class="swiper-wrapper">
                @foreach ($Testimonial as $items )
                <div class="testimonial-item swiper-slide">
                    <div class="item-wrapper">
                        <div class="quote-icon">
                            <img src="{{ asset('asset/frontend/image/quote-icon.png') }}" alt="quote icon">
                        </div>
                        <p>
                            {{  $items->review }}
                        </p>
                        <div class="quote-author d-flex align-items-center justify-content-center">
                            <div class="image-block">
                                <img class="img-fluid" src="{{ URL::asset('Attachments/Testimonial_Photo/' . $items->photo) }}"
                                    alt="testimonial author">
                            </div>
                            <h4> {{  $items->name }}<span> {{  $items->title_job }}</span></h4>
                        </div>

                    </div> <!-- .item wrapper -->
                </div> <!-- .testimonial-item -->
                @endforeach
            </div> <!-- .swiper-wrapper -->
            <div class="swiper-pagination"></div>
        </div> <!-- .testimonial-carousel -->
    </div> <!-- .container -->
</section>