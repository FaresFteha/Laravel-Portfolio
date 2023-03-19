<section class="portfolio-section section-block" id="portfolio-section">
    <div class="container">
        <div class="section-title">
            <h2>Portfolio</h2>
            <p class="lead">
                It is always good to present your work to the public.
            </p>
        </div><!-- .section-title -->
        <div class="button-group filter-button-group">
            <button class="active" data-filter="*">All</button>
            {{-- <button class="" data-filter=".programming">Programming</button>
            <button class="" data-filter=".development">Development</button>
            <button class="" data-filter=".design">Design</button>
            <button class="" data-filter=".application">Application</button> --}}
        </div>
        <div class="row grid" data-aos="fade-up" data-aos-duration="2000">
            @foreach ($Portfolio as $portfolio)
            <div class="col-lg-4 col-md-6 grid-item programming">
                <div class="box">
                    <img src="{{ URL::asset('Attachments/Portfolio_Photo/' . $portfolio->photo) }}" alt="portfolio image">
                    <div class="box-content">
                        <h3 class="title">{{  $portfolio->title }}</h3>
                    </div>
                    <div class="icon-box"><a href="#" data-bs-toggle="modal"
                            data-bs-target="#portfolioModal6{{ $portfolio->id }}"><i class="fa fa-plus"></i></a></div>
                    <!-- Modal -->
                    <div class="modal fade" id="portfolioModal6{{ $portfolio->id }}" tabindex="-1"
                        aria-labelledby="portfolioModal6" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                            <div class="modal-content">

                                <div class="modal-body">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"><i class="fa fa-x"></i></button>
                                    <div class="row item-content">
                                        <div class="col-xl-12">
                                            <img src="{{ URL::asset('Attachments/Portfolio_Photo/' . $portfolio->photo) }}"
                                                alt="portfolio image">
                                        </div>
                                        <div class="col-xl-8">
                                            <div class="content-wrapper">
                                                <h2 class="item-title">{{  $portfolio->title }}</h2>
                                                <p>
                                                    {{  $portfolio->descripsion }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="meta-wrapper">
                                                <ul class="item-meta">
                                                    <li>Project Type: <span class="meta-value">{{  $portfolio->type }}</span></li>
                                                    <li>Duration: <span class="meta-value">{{ $portfolio->duration }}</span></li>
                                                </ul>
                                            </div> <!-- .meta-wrapper -->
                                        </div>
                                    </div> <!-- .row -->
                                </div>

                            </div>
                        </div>
                    </div>
                  
                </div>
              
            </div>
            @endforeach
        </div> <!-- .row -->
    </div> <!-- .container -->
    <div class="design-elements">
        <img class="de-portfolio-1 elem-updown" src="{{ asset('asset/frontend/image/design-elements/portfolio-element-1.png') }}"
            alt="portfolio element 1">
        <img class="de-portfolio-2 elem-updown" src="{{ asset('asset/frontend/image/design-elements/portfolio-element-2.png') }}"
            alt="portfolio element 2">
    </div> <!-- .design-elements -->
</section>