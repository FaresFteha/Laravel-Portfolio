<!DOCTYPE html>
<html lang="zxx">

<head>

    @include('layouts.frontend.head')

</head>

<body data-bs-spy="scroll" data-bs-target="#site-navbar">

      <!-- PRE LOADER -->
    <div class="preloader js-preloader flex-center">
        <div class="dots">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </div>  

    <!-- SITE HEADER -->
    @include('layouts.frontend.main-header')
    <!-- .site-header -->

    <!-- HERO AREA -->
    @include('page.frontend.Hero-Section')
    <!-- .hero-area -->

    <!-- INTRO SECTION -->
    @include('page.frontend.Intero-Section')
    <!-- .intro-section -->

    <!-- ABOUT SECTION -->
    @include('page.frontend.About-Section')
    <!-- .about-section -->

    <!-- SKILL SECTION -->
    @include('page.frontend.Skill-Section')
    <!-- .skill-section -->

    <!-- PORTFOLIO SECTION -->
    @include('page.frontend.Portfolio-Section')
    <!-- .portfolio-section -->

    <!-- SERVICE SECTION -->
    @include('page.frontend.Service-Section')
    <!-- .service-section -->

    <!-- FEATURES SECTION -->
    @include('page.frontend.Features-Section')
    <!-- .features-section -->

    <!-- TESTIMONIAL SECTION -->
    @include('page.frontend.Testimonial-Section')
    <!-- .testimonial-section -->

    <!-- BLOG SECTION -->
    @include('page.frontend.Blog-Section')
    <!-- .blog-section -->

    <!-- PARTNER SECTION -->
    @include('page.frontend.Partner-Section')
    <!-- .partner section -->

    <!-- CONTACT SECTION -->
    @include('page.frontend.Contnet-Section')
    <!-- .contact-section -->

    <!-- SITE FOOTER -->
    @include('layouts.frontend.footer')
    <!-- .site-footer -->

    <!---Scripts--->
    @include('layouts.frontend.scripts')
</body><!-- .site-header -->

</html>
