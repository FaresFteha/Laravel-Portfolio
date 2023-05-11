<section class="blog-section section-block" id="blog-section">
    <div class="container">
        <div class="section-title">
            <h2>From My Blog</h2>
            <p class="lead">
                Some updated news in the fields in which I work in terms of updates and developments.
            </p>
        </div><!-- .section-title -->

        <div class="row">
            <div class="col-lg-6 large-post" data-aos="fade-right" data-aos-duration="1200">
                <div class="content-wrapper">
                    <div class="post-content">
                        <ul class="post-meta">
                            <li class="post-date">
                                <i class="pe-7s-clock"></i>
                                {{ !empty($Blog1->created_at) ? date('d-m-Y', strtotime($Blog1->created_at)) : 'none' }}
                            </li>
                            </li>
                            <li class="post-cat">
                                <a href="#"><i class="pe-7s-folder"></i>{{ $Blog1->category->name ?? 'none' }}</a>
                            </li>
                        </ul>
                        <h3><a href="#" data-bs-toggle="modal"
                                data-bs-target="#blogModal1{{ $Blog1->id }}">{{ $Blog1->title ?? 'none' }}</a></h3>

                    </div>
                    <div class="image-wrapper">
                        <img class="img-fluid" src="{{ URL::asset('Attachments/Blog_Photo/' . $Blog1->photo) }}"
                            alt="post thumnail">
                    </div>
                </div>


                <!-- Modal -->
                <div class="modal fade" id="blogModal1{{ $Blog1->id }}" tabindex="-1" aria-labelledby="blogModal1"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">

                            <div class="modal-body">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                        class="fa fa-x"></i></button>
                                <div class="row blog-content">
                                    <div class="col-xl-12">
                                        <img class="img-fluid"
                                            src="{{ URL::asset('Attachments/Blog_Photo/' . $Blog1->photo) }}"
                                            alt="blog post image 01">
                                    </div>
                                    <div class="col-xl-8 offset-xl-2">
                                        <div class="content-wrapper">
                                            <h2 class="blog-title">{{ $Blog1->title }}</h2>
                                            <ul
                                                class="blog-meta d-md-flex align-items-center justify-content-md-center">
                                                <li><a href="#"><i
                                                            class="fa fa-folder"></i>{{ $Blog1->coade_use }}</a>
                                                </li>
                                                <li><i class="fa fa-clock"></i>
                                                    {{ date('d-m-Y', strtotime($Blog1->created_at)) }}</li>
                                            </ul>
                                            <p>
                                                {{ $Blog1->descripsion }}
                                            </p>
                                            <div class="post-footer row">
                                                <div class="blog-tags col-lg-8 d-md-flex align-items-md-center">
                                                    <h4>Tags:</h4>
                                                    <ul class="tag-list list-inline">
                                                        <li class="list-inline-item"><a
                                                                href="#">{{ $Blog1->category->name }}</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div> <!-- .row -->
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            {{-- Group post --}}

            <div class="col-lg-6 post-group">
                <div class="row">
                    @foreach ($Blogs as $Blogs)
                        <div class="col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">

                            <div class="content-wrapper">
                                <div class="post-content">
                                    <ul class="post-meta">
                                        <li class="post-date">
                                            <i class="pe-7s-clock"></i>
                                            {{ date('d-m-Y', strtotime($Blogs->created_at)) }}
                                        </li>

                                        <li class="post-cat">
                                            <a href="#"><i
                                                    class="pe-7s-folder"></i>{{ $Blogs->category->name }}</a>
                                        </li>

                                    </ul>
                                    <h3><a href="#" data-bs-toggle="modal"
                                            data-bs-target="#blogModal2{{ $Blogs->id }}">{{ $Blogs->title }}</a>
                                    </h3>
                                </div>
                                <div class="image-wrapper">
                                    <img class="img-fluid"
                                        src="{{ URL::asset('Attachments/Blog_Photo/' . $Blogs->photo) }}"
                                        alt="post thumnail">
                                </div>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="blogModal2{{ $Blogs->id }}" tabindex="-1"
                                aria-labelledby="blogModal2" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                                    <div class="modal-content">

                                        <div class="modal-body">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"><i class="fa fa-x"></i></button>
                                            <div class="row blog-content">
                                                <div class="col-xl-12">
                                                    <img class="img-fluid"
                                                        src="{{ URL::asset('Attachments/Blog_Photo/' . $Blogs->photo) }}"
                                                        alt="blog post image 02">
                                                </div>
                                                <div class="col-xl-8 offset-xl-2">
                                                    <div class="content-wrapper">
                                                        <h2 class="blog-title">{{ $Blogs->title }}</h2>
                                                        <ul
                                                            class="blog-meta d-md-flex align-items-center justify-content-md-center">
                                                            <li><a href="#"><i class="fa fa-folder"></i>
                                                                    {{ $Blogs->coade_use }}</a></a></li>
                                                            <li><i class="fa fa-clock">
                                                                </i>{{ date('d-m-Y', strtotime($Blogs->created_at)) }}
                                                            </li>
                                                        </ul>
                                                        <p>
                                                            {{ $Blogs->descripsion }}
                                                        </p>
                                                        <div class="post-footer row">
                                                            <div
                                                                class="blog-tags col-lg-8 d-md-flex align-items-md-center">
                                                                <h4>Tags:</h4>
                                                                <ul class="tag-list list-inline">
                                                                    <li class="list-inline-item"><a
                                                                            href="#">{{ $Blogs->category->name }}</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div> <!-- .row -->
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>


        </div> <!-- .row -->



    </div> <!-- .container -->
    <div class="design-elements">
        <img class="de-blog-1 elem-updown"
            src="{{ asset('asset/frontend/image/design-elements/blog-element-1.png') }}" alt="blog element 1">
        <img class="de-blog-2 elem-updown"
            src="{{ asset('asset/frontend/image/design-elements/blog-element-2.png') }}" alt="blog element 2">
    </div> <!-- .design-elements -->
</section>
