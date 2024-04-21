<!-- HEADER AREA -->
<header class="rts-header style-one header__default">

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
                            <x-nav-link  href="/#home" >Home</x-nav-link>
                            <x-nav-link  href="/#about">About us</x-nav-link>
                            <x-nav-link  href="/#services" >Services</x-nav-link>

                            <x-nav-link  href="/contact" :active="request()->is('/about')">Contact</x-nav-link>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- HEADER AREA END -->
