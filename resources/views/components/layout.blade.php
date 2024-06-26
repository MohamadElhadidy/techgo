<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">
    <title>GoTech</title>

    <!-- bootstrap css -->
    <link rel="stylesheet preload" href="assets/css/vendor/bootstrap.min.css" as="style">
    <!-- fontawesome css -->
    <link rel="stylesheet preload" href="assets/css/plugins/fontawesome.min.css" as="style">
    <!-- swiper css -->
    <link rel="stylesheet preload" href="assets/css/plugins/swiper.min.css" as="style">
    <!-- magnific popup css -->
    <link rel="stylesheet preload" href="assets/css/plugins/magnific-popup.css" as="style">
    <!-- aos css -->
    <!-- <link  rel="stylesheet preload" href="assets/css/plugins/aos.min.css" as="style"> -->
    <link rel="stylesheet preload" href="assets/css/plugins/sal.min.css" as="style">
    <!-- nice select css -->
    <link rel="stylesheet preload" href="assets/css/plugins/nice-select.css" as="style">
    <!-- metismenu css -->
    <link rel="stylesheet preload" href="assets/css/plugins/metismenu.css" as="style">
    <!-- Custom css -->
    <link rel="stylesheet preload" href="assets/css/style.css" as="style">
</head>

<body>

<x-header></x-header>

{{$slot}}

<x-footer></x-footer>

<div id="anywhere-home" class="">
</div>

<!-- side bar area  -->
<div id="side-bar" class="side-bar header-two">
    <button class="close-icon-menu"><i class="fa-sharp fa-thin fa-xmark"></i></button>
    <!-- mobile menu area start -->
    <div class="mobile-menu-main">
        <nav class="nav-main mainmenu-nav mt--30">
            <ul class="mainmenu metismenu" id="mobile-menu-active">
                <li class="has-droupdown">
                    <a href="#" class="main">Home</a>
                    <ul class="submenu mm-collapse">
                        <li><a class="mobile-menu-link" href="index.html">Home One</a></li>
                        <li><a class="mobile-menu-link" href="index-two.html">Home Two
                            </a></li>
                        <li><a class="mobile-menu-link" href="index-three.html">Home Three</a></li>
                        <li><a class="mobile-menu-link" href="index-four.html">Home Four</a></li>
                        <li><a class="mobile-menu-link" href="index-five.html">Home Five</a></li>
                        <li><a class="mobile-menu-link" href="index-six.html">Home Six</a></li>
                    </ul>
                </li>
                <li class="has-droupdown">
                    <a href="#" class="main">Pages</a>
                    <ul class="submenu mm-collapse">
                        <li><a class="mobile-menu-link" href="about.html">About</a></li>
                        <li><a class="mobile-menu-link" href="team.html">Affiliate</a></li>
                        <li><a class="mobile-menu-link" href="faq.html">Pricing</a></li>
                        <li><a class="mobile-menu-link" href="book-a-demo.html">Sign Up</a></li>
                        <li><a class="mobile-menu-link" href="free-audit.html">Whois</a></li>
                        <li><a class="mobile-menu-link" href="pricing.html">Partner</a></li>
                        <li><a class="mobile-menu-link" href="404.html">Blog</a></li>
                        <li><a class="mobile-menu-link" href="404.html">Support</a></li>
                        <li><a class="mobile-menu-link" href="404.html">Pricing Package</a></li>
                        <li><a class="mobile-menu-link" href="404.html">Sign In</a></li>
                        <li><a class="mobile-menu-link" href="404.html">Business Mail</a></li>
                        <li><a class="mobile-menu-link" href="404.html">Knowledgebase</a></li>
                        <li><a class="mobile-menu-link" href="404.html">Blog Details</a></li>
                        <li><a class="mobile-menu-link" href="404.html">Domain Checker</a></li>
                        <li><a class="mobile-menu-link" href="404.html">Pricing Comparision</a></li>
                        <li><a class="mobile-menu-link" href="404.html">SSL Certificates</a></li>
                        <li><a class="mobile-menu-link" href="404.html">Data Centers</a></li>
                        <li><a class="mobile-menu-link" href="404.html">Technology</a></li>
                        <li><a class="mobile-menu-link" href="404.html">Contact</a></li>
                        <li><a class="mobile-menu-link" href="404.html">Domain Transfer</a></li>
                        <li><a class="mobile-menu-link" href="404.html">Payment Method</a></li>
                        <li><a class="mobile-menu-link" href="404.html">Technology</a></li>
                    </ul>
                </li>
                <li class="has-droupdown">
                    <a href="#" class="main">Hosting</a>
                    <ul class="submenu mm-collapse">
                        <li><a class="mobile-menu-link" href="shared-hosting.html">Shared Hosting</a></li>
                        <li><a class="mobile-menu-link" href="wordpress-hosting.html">WordPress Hosting</a></li>
                        <li><a class="mobile-menu-link" href="vps-hosting.html">VPS Hosting</a></li>
                        <li><a class="mobile-menu-link" href="reseller-hosting.html">Reseller Hosting</a></li>
                        <li><a class="mobile-menu-link" href="dedicated-hosting.html">Dedicated Hosting</a></li>
                        <li><a class="mobile-menu-link" href="cloud-hosting.html">Cloud Hosting</a></li>
                    </ul>
                </li>
                <li class="has-droupdown">
                    <a href="#" class="main">Domain</a>
                    <ul class="submenu mm-collapse">
                        <li><a class="mobile-menu-link" href="domain-checker.html">Domain Checker</a></li>
                        <li><a class="mobile-menu-link" href="domain-transfer.html">Domain Transfer</a></li>
                    </ul>
                </li>
                <li class="has-droupdown">
                    <a href="#" class="main">Technology</a>
                    <ul class="submenu mm-collapse">
                        <li><a class="mobile-menu-link" href="technology.html">Technology</a></li>
                        <li><a class="mobile-menu-link" href="data-center.html">Data Center</a></li>
                    </ul>
                </li>
                <li class="has-droupdown">
                    <a href="#" class="main">Help Center</a>
                    <ul class="submenu mm-collapse">
                        <li><a class="mobile-menu-link" href="knowledgebase.html">Knowledgebase</a></li>
                        <li><a class="mobile-menu-link" href="whois.html">Whois</a></li>
                        <li><a class="mobile-menu-link" href="support.html">Support</a></li>
                        <li><a class="mobile-menu-link" href="contact.html">Contact</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <ul class="social-area-one pl--20 mt--100">
            <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
        </ul>
    </div>
    <!-- mobile menu area end -->
</div>
<!-- side abr area end -->

<!-- THEME PRELOADER START -->
<div class="loader-wrapper">
    <div class="loader">
    </div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!-- THEME PRELOADER END -->
<!-- BACK TO TOP AREA START -->
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
    </svg>
</div>
<!-- BACK TO TOP AREA EDN -->

<!-- jquery js -->
<script defer src="assets/js/plugins/jquery.min.js"></script>
<script defer src="assets/js/plugins/popper.js"></script>
<script defer src="assets/js/plugins/bootstrap.min.js"></script>
<script defer src="assets/js/plugins/metismenu.js"></script>
<script defer src="assets/js/vendor/jqueryui.js"></script>
<script defer src="assets/js/vendor/waypoint.js"></script>
<script defer src="assets/js/plugins/swiper.js"></script>
<script defer src="assets/js/plugins/theia-sticky-sidebar.min.js"></script>
<script defer src="assets/js/plugins/jquery.nice-select.min.js"></script>
<script defer src="assets/js/plugins/sal.js"></script>
<script defer src="assets/js/vendor/waw.js"></script>
<script defer src="assets/js/plugins/counter-up.js"></script>
<script defer src="assets/js/plugins/magnific-popup.js"></script>
<!-- contact form js -->
<script defer src="assets/js/plugins/contact-form.js"></script>
<script defer src="assets/js/main.js"></script>
</body>

</html>
