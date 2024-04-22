<x-layout>


    <!-- shared hosting banner -->
    <div class="rts-hosting-banner rts-hosting-banner-bg banner-default-height">
        <div class="container">
            <div class="row">
                <div class="banner-area">
                    <div class="rts-hosting-banner rts-hosting-banner__content w-530 contact__banner">
                        <h1 class="banner-title">
                            Contact Us
                        </h1>
                        <p class="slogan">We’re experts at what we do, software development is our game...</p>

                    </div>
                    <div class="rts-hosting-banner__image contact">
                        <img src="assets/images/banner/banner__contact__image.svg" alt="">
                        <img class="shape one" src="assets/images/banner/banner__contact__image-sm1.svg" alt="">
                        <img class="shape two top-bottom2" src="assets/images/banner/banner__contact__image-sm2.svg" alt="">
                        <img class="shape three" src="assets/images/banner/banner__contact__image-sm3.svg" alt="">
                        <img class="shape four left-right2" src="assets/images/banner/banner__contact__image-sm4.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shared hosting banner end-->

    <!-- CONTACT START -->
    <section class="rts-contact-form no-bg pt--120 pb--120">
        <div class="container">
            <div class="row g-30 pb--120 justify-content-sm-center">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                    <div class="single-contact-method">
                        <div class="method">
                            <div class="icon">
                                <i class="fa-thin fa-map-location-dot"></i>
                            </div>
                            <div class="content w-250">
                                <h5 class="info mb-0">Damietta, Egypt</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                    <div class="single-contact-method">
                        <div class="method">
                            <div class="icon">
                                <i class="fa-thin fa-envelope-open"></i>
                            </div>
                            <div class="content w-250">
                                <h5 class="info mb-0">
                                    <a href="mailto:go4tech2024@gmail.com">go4tech2024@gmail.com</a>
{{--                                    <a href="mailto:support@hostie.com">info@elhaiddy.com</a>--}}
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                    <div class="single-contact-method">
                        <div class="method">
                            <div class="icon">
                                <i class="fa-thin fa-phone"></i>
                            </div>
                            <div class="content w-250">
                                <h5 class="info mb-0">
                                    <a href="callto:11112542174">(+20) 1554981497</a><br>
                                    <a href="callto:11112542174">(+20) 1557809982</a>
                                </h5>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <div class="row gy-30 justify-content-center">
                <div class="col-xl-6 col-lg-6 col-md-10">
                    <div class="contact-form">
                        <div class="contact-form__content" data-sal="slide-down" data-sal-delay="100" data-sal-duration="800">
                            <div class="contact-form__content--image">
                                <img src="assets/images/contact/contact-form.png" width="260" height="188" alt="">
                            </div>
                            <h1 class="contact-form__content--title">
                                Ask a
                                Question
                            </h1>
                            <p class="contact-form__content--description">
                                Schedule a call today and one of our experts to help you decide which service is ideal for your business and budget.
                            </p>
                            <div class="contact__shape support-page">
                                <img src="assets/images/contact/contact__animated__arrow.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 offset-xl-1 col-md-10">
                    <div class="form">
                        <h5>Send a message</h5>
                        <form class="form__content" method="post" action="mailer.php">
                            <div class="form__control">
                                <input type="text" class="input-form" name="name" id="name" placeholder="what is your name?" required>
                                <input type="email" class="input-form" name="email" id="email" placeholder="Email Address" required>
                            </div>
                            <div class="form__control">
                                <input type="text" class="input-form" name="phone" id="phone" placeholder="Phone Number" required>
                                <input type="email" class="input-form" name="email" id="email" placeholder="Country" required>
                            </div>

                            <textarea name="message" id="message" cols="30" rows="10" placeholder="A brief description about your consultation" required></textarea>

                            <button type="submit" class="submit__btn mt--50">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTACT END -->

</x-layout>
