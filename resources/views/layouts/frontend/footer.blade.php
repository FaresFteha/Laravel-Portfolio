<footer class="site-footer" id="site-footer">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 text-center branding-block">
                <a class="footer-brand" href="#"><img src="{{ asset('asset/frontend/image/fungi_logo.png') }}"
                        alt="Pori logo"></a>
                <p>
                    A personal website to display my information as a developer to give a general indication of my
                    personality as a website developer.
                </p>
                <ul class="list-inline footer-social">
                    <li class="list-inline-item"><a href="{{ setting('facebook_link') }}" target="_blank"><i
                                class="fab fa-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a href="{{ setting('github_link') }}"target="_blank"><i
                                class="fab fa-github"></i></a></li>
                    <li class="list-inline-item"><a href="{{ setting('linkedin_link') }}" target="_blank"><i
                                class="fab fa-linkedin"></i></a></li>
                </ul>
            </div>

        </div> <!-- .row -->
        <div class="back-to-top"><a href="#site-header"><i class="fa-solid fa-arrow-up"></i></a></div>
        <div class="row footer-bottom">
            <div class="col-md-6">
                <p>All rights reserved
                    <script>
                        document.write(new Date().getFullYear())
                    </script>
                    <strong>Developer:Fares Fteha</strong>
                </p>
            </div>
            <div class="col-md-6">
                <ul class="list-inline text-md-end">
                    <li class="list-inline-item"><a href="#">Terms &amp; Condition</a></li>
                    <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
        </div> <!-- .footer-bottom -->
    </div> <!-- .container -->
</footer>
