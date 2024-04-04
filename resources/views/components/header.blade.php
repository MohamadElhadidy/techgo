<!-- HEADER AREA -->
<header class="rts-header style-one header__default">
    <!-- HEADER TOP AREA -->
    <div class="rts-ht rts-ht__bg">
        <div class="container">
            <div class="row">
                <div class="rts-ht__wrapper">
                    <div class="rts-ht__email">
                        <a href="mailto:info@hostie.com"><img src="assets/images/icon/email.svg" alt="" class="icon">contact@hostie.com</a>
                    </div>
                    <div class="rts-ht__links">
                        <div class="live-chat-has-dropdown">
                            <a href="#" class="live__chat"><img src="assets/images/icon/forum.svg" alt="" class="icon">Live Chat</a>
                        </div>
                        <div class="login-btn-has-dropdown">
                            <a href="#" class="login__link"><img src="assets/images/icon/person.svg" alt="" class="icon">Login</a>
                            <div class="login-submenu">
                                <form action="#">
                                    <div class="form-inner">
                                        <div class="single-wrapper">
                                            <input type="email" placeholder="Your email" required>
                                        </div>
                                        <div class="single-wrapper">
                                            <input type="password" placeholder="Password" required>
                                        </div>
                                        <div class="form-btn">
                                            <button type="submit" class="primary__btn">Log In</button>
                                        </div>
                                        <a href="#" class="forgot-password">Forgot your password?</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- HEADER TOP AREA END -->
    <div class="container">
        <div class="row">
            <div class="rts-header__wrapper">
                <!-- FOR LOGO -->
                <div class="rts-header__logo">
                    <a href="/" class="site-logo">
                        <img class="logo-white" src="assets/images/logo/logo-1.svg" alt="Hostie">
                        <img class="logo-dark" src="assets/images/logo/logo-4.svg" alt="Hostie">
                    </a>
                </div>
                <!-- FOR NAVIGATION MENU -->

                <nav class="rts-header__menu" id="mobile-menu">
                    <div class="hostie-menu">
                        <ul class="list-unstyled hostie-desktop-menu">

                            <x-nav-link  href="/" :active="request()->is('/')">Home</x-nav-link>
                            <x-nav-link  href="/about" :active="request()->is('/about')">About us</x-nav-link>

                            <li class="menu-item hostie-has-dropdown mega-menu">
                                <a href="#" class="hostie-dropdown-main-element">Services</a>
                                <div class="rts-mega-menu">
                                    <div class="wrapper">
                                        <div class="row g-0">
                                            <div class="col-lg-6">
                                                <ul class="mega-menu-item">
                                                    <li>
                                                        <a href="shared-hosting.html">
                                                            <img src="assets/images/mega-menu/22.svg" alt="icon">
                                                            <div class="info">
                                                                <p>Shared Hosting</p>
                                                                <span>Manage Shared Hosting</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="wordpress-hosting.html">
                                                            <img src="assets/images/mega-menu/23.svg" alt="icon">
                                                            <div class="info">
                                                                <p>WordPress Hosting</p>
                                                                <span>WordPress Hosting speed</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="vps-hosting.html">
                                                            <img src="assets/images/mega-menu/24.svg" alt="icon">
                                                            <div class="info">
                                                                <p>VPS Hosting</p>
                                                                <span>Dedicated resources</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6">
                                                <ul class="mega-menu-item">
                                                    <li>
                                                        <a href="reseller-hosting.html">
                                                            <img src="assets/images/mega-menu/25.svg" alt="icon">
                                                            <div class="info">
                                                                <p>Reseller Hosting</p>
                                                                <span>Earn additional revenue</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="dedicated-hosting.html">
                                                            <img src="assets/images/mega-menu/27.svg" alt="icon">
                                                            <div class="info">
                                                                <p>Dedicated Hosting</p>
                                                                <span>Hosting that gives you tools</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="cloud-hosting.html">
                                                            <img src="assets/images/mega-menu/29.svg" alt="icon">
                                                            <div class="info">
                                                                <p>Cloud Hosting</p>
                                                                <span>Manage Cloud Hosting</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <x-nav-link  href="/portfolio" :active="request()->is('/about')">Portfolio</x-nav-link>
                            <x-nav-link  href="/blog" :active="request()->is('/about')">Blog</x-nav-link>
                            <x-nav-link  href="/contact" :active="request()->is('/about')">Contact</x-nav-link>
                        </ul>
                    </div>
                </nav>
                <!-- FOR HEADER RIGHT -->
                <div class="rts-header__right">
                    <a href="/" class="lang">AR
                            <img src="assets/images/icon/earth.svg"    alt="" width="20"/>
                    </a>
                    <button id="menu-btn" class="mobile__active menu-btn"><i class="fa-sharp fa-solid fa-bars"></i></button>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- HEADER AREA END -->
