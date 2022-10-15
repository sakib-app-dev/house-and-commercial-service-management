<!-- footer-66 -->
<footer class="w3l-footer-66 pt-5">
    <div class="footer-28-main">
        <div class="container">
            <div class="row footer-hny-top">
                <div class="col-lg-6 footer-logo pl-lg-0">
                    <h2><a class="navbar-brand" href="index.html">Home & Commercial<span>Maintanance and Services</span></a></h2>
                    <!-- if logo is image enable this   
                    <a class="navbar-brand" href="#index.html">
                        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                    </a> -->
                </div>
                <div class="col-lg-6 main-social-footer-28 pr-lg-0">
                    <a href="#facebook"><span class="fa fa-facebook"></a>
                    <a href="#twitter"><span class="fa fa-twitter"></a>
                    <a href="#google"><span class="fa fa-google-plus"></a>
                    <a href="#linkedin"><span class="fa fa-linkedin"></a>
                    <a href="#instagram"><span class="fa fa-instagram"></a>
                </div>
            </div>
            <div class="row footer-top-28">
                <div class="col-lg-3 col-md-6 footer-list-28 pl-lg-0">
                    <h6 class="footer-title-28">Extra Links</h6>
                    <ul>
                        <li><a href="{{ route('about') }}">About Company</a></li>
                        <li><a href="{{ route('services') }}">Our Services</a></li>
                        <li><a href="portfolio.html">Recent projects list</a></li>
                        <li><a href="blog.html">Latest News blog</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 footer-list-28">
                    <h6 class="footer-title-28">list of Services</h6>
                    <ul class="d-grid footer-column-2">
                        <li><a href="services.html">Plumbing</a></li>
                        <li><a href="services.html">Carpenter</a></li>
                        <li><a href="services.html">Electrician</a></li>
                        <li><a href="services.html">Wall painting</a></li>
                        <li><a href="services.html">Furniture moving</a></li>
                        <li><a href="services.html">House Cleaning</a></li>
                        <li><a href="services.html">Replacing wires</a></li>
                        <li><a href="services.html">AC & Refrigerator</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 footer-list-28">
                    <h6 class="footer-title-28">Support</h6>
                    <ul>
                        <li><a href="#link">Documentation</a></li>
                        <li><a href="#link">Privacy policy</a></li>
                        <li><a href="#link">Terms of service</a></li>
                        <li><a href="#link">24/7 support</a></li>
                    </ul>
                </div>
                
            </div>
        </div>
        <div class="midd-footer-28 align-center">
            <p class="copy-footer-28">© 2022 Sakib Ahamed</p>
        </div>
    </div>
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-angle-up"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- /move top -->

</footer>
<!--//footer-66 -->