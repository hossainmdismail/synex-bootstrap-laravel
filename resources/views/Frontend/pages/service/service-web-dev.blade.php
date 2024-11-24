<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="ThemeZaa">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <!-- favicon icon -->
    <link rel="shortcut icon" href="{{ asset('Frontend/images/icons/fav-low.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('Frontend/images/icons/fav-low.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('Frontend/images/icons/fav-low.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('Frontend/images/icons/fav-low.png') }}">
    @include('frontend.layout.headerlink')
    <link rel="stylesheet" href="{{ asset('Frontend/css/marketing.css') }}" />
</head>

<body data-mobile-nav-style="classic" class="custom-cursor">
    <!-- start cursor -->
    <div class="cursor-page-inner">
        <div class="circle-cursor circle-cursor-inner"></div>
        <div class="circle-cursor circle-cursor-outer"></div>
    </div>
    <!-- end cursor -->
    <!-- start header -->
    <header>
        <!-- start navigation -->
        <nav class="navbar navbar-expand-lg header-light header-transparent bg-transparent disable-fixed">
            <div class="container-fluid">
                <div class="col-auto col-lg-2 me-lg-0 me-auto">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <script type="text/javascript" style="display:none">
                            //<![CDATA[
                            window.__mirage2 = {
                                petok: "HBpmF2N2wK1S2eLv1yTwXLgPP6OMa1AC3PBy315l5UE-3600-0.0.1.1"
                            };
                            //]]>
                        </script>
                        <script type="text/javascript" src="{{ asset('Frontend/js/mirage2.min.js') }}"></script>
                        <img data-at2x="{{ asset('Frontend') }}/images/logo-text.svg" alt=""
                            class="default-logo" data-cfsrc="{{ asset('Frontend') }}/images/logo-text.svg"
                            style="display:none;visibility:hidden;"><noscript><img
                                src="{{ asset('Frontend') }}/images/logo-text.svg"
                                data-at2x="{{ asset('Frontend') }}/images/logo-text.svg" alt=""
                                class="default-logo"></noscript>
                        <img data-at2x="{{ asset('Frontend') }}/images/logo-text.svg" alt="" class="alt-logo"
                            data-cfsrc="{{ asset('Frontend') }}/images/logo-text.svg"
                            style="display:none;visibility:hidden;"><noscript><img
                                src="{{ asset('Frontend') }}/images/logo-text.svg"
                                data-at2x="{{ asset('Frontend') }}/images/logo-text.svg" alt=""
                                class="alt-logo"></noscript>
                        <img data-at2x="{{ asset('Frontend') }}/images/logo-text.svg" alt=""
                            class="mobile-logo" data-cfsrc="{{ asset('Frontend') }}/images/logo-text.svg"
                            style="display:none;visibility:hidden;"><noscript><img
                                src="{{ asset('Frontend') }}/images/logo-text.svg"
                                data-at2x="{{ asset('Frontend') }}/images/logo-text.svg" alt=""
                                class="mobile-logo"></noscript>
                    </a>
                </div>
                <div class="col-auto menu-order position-static">
                    <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a href="#service" class="nav-link">Services</a></li>
                            <li class="nav-item"><a href="#project" class="nav-link">Projects</a></li>
                            <li class="nav-item"><a href="#contact" class="nav-link">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end navigation -->
    </header>
    <!-- end header -->
    <!-- start banner -->
    <section
        class="p-0 full-screen md-h-600px sm-h-600px ipad-top-space-margin background-position-center-top position-relative lg-overflow-hidden"
        style="background-image: url({{ asset('Frontend/images/demo-marketing-dot.svg') }})">
        <div class="bg-gradient-black-green position-absolute left-0px top-0px h-100 w-100 z-index-minus-1"></div>
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div
                    class="col-lg-6 col-md-9 position-relative z-index-1 d-flex flex-column justify-content-center h-100">
                    <div class="fs-120 lg-fs-100 text-dark-gray lh-100 fw-500 mb-6 ls-minus-5px fancy-text-style-4"
                        data-anime='{ "el": "childs", "opacity": [0, 1], "translateX": [-100, 0], "staggervalue": 300, "duration": 1000, "easing": "easeOutCubic" }'>
                        <span class="d-inline-block">Website</span>
                        <span class="fw-700 d-inline-block h-50"
                            data-fancy-text='{ "effect": "wave", "string": ["Design", "Develop", "Maintain"], "duration": 4000 }'></span>
                    </div>
                    <div class="fs-20 lh-34 xs-fs-19 mb-35px xs-mb-20px w-85 lg-w-95 sm-w-100 ls-minus-05px"
                        data-anime='{ "opacity": [0, 1], "translateX": [-100, 0], "duration": 1000, "delay": 1000, "easing": "easeOutCubic" }'>
                        We do our best to implement your ideas into the project to make it successful & profitable.
                    </div>
                    <div
                        data-anime='{ "el": "childs", "opacity": [0, 1], "translateX": [-100, 0], "staggervalue": -200, "duration": 1000, "delay": 1500, "easing": "easeOutCubic" }'>
                        <a href="{{ route('home') }}" target="_blank"
                            class="btn btn-extra-large btn-dark-gray btn-hover-animation-switch btn-round-edge btn-box-shadow me-20px fw-400 xs-mt-10px xs-mb-10px">
                            <span>
                                <span class="btn-text">Discover Synex Digital</span>
                                <span class="btn-icon">➔</span>
                                <span class="btn-icon">➔</span>
                            </span>
                        </a>
                    </div>
                    <div class="row w-100 position-absolute md-position-relative bottom-0 mb-4 md-mb-0 md-mt-40px sm-mt-30px xs-mt-20px align-items-center"
                        data-anime='{ "el": "childs", "opacity": [0, 1], "staggervalue": -200, "translateX": [-100, 0], "duration": 1000, "delay": 1700, "easing": "easeOutQuad" }'>
                        <div class="col-xl-5 col-sm-6 icon-with-text-style-08 xs-mb-15px">
                            <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                                <div
                                    class="feature-box-icon feature-box-icon-rounded w-30px h-30px rounded-circle bg-jungle-green me-10px">
                                    <span class="text-white">✓</span>
                                </div>
                                <div class="feature-box-content last-paragraph-no-margin">
                                    <span class="d-inline-block fs-17 fw-500 text-dark-gray">Custom Web
                                        Solutions</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-sm-6 icon-with-text-style-08">
                            <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                                <div
                                    class="feature-box-icon feature-box-icon-rounded w-30px h-30px rounded-circle bg-jungle-green me-10px">
                                    <span class="text-white">✓</span>
                                </div>
                                <div class="feature-box-content last-paragraph-no-margin">
                                    <span class="d-inline-block fs-17 fw-500 text-dark-gray">Responsive Web
                                        Design</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 col-md-3 align-self-end d-none d-md-inline-block">
                    <div
                        class="position-absolute right-0px bottom-minus-90px xxl-bottom-minus-30px md-bottom-minus-35px md-right-minus-250px lg-right-minus-150px w-50 xl-w-55 lg-w-65 md-w-75 overflow-hidden">
                        <img class="w-100" alt=""
                            data-anime='{ "opacity": [0, 1], "translateX": [100, 0], "duration": 1000, "delay": 200, "easing": "easeOutQuad" }'
                            data-cfsrc="{{ asset('Frontend/images/demo-marketing-home-01.png') }}"
                            style="display:none;visibility:hidden;"><noscript><img
                                src="{{ asset('Frontend/images/demo-marketing-home-01.png') }}" class="w-100"
                                alt="" data-anime="{ "opacity": [0, 1], "translateX" : [100, 0], "duration" :
                                1000, "delay" : 200, "easing" : "easeOutQuad" }"></noscript>
                    </div>
                    <div class="position-absolute right-0px top-0 me-3 mt-20 md-mt-45 lg-w-250px lg-mt-45 animation-float overflow-hidden d-none d-lg-inline-block"
                        data-bottom-top="transform: translateY(-30px)" data-top-bottom="transform: translateY(80px)">
                        <img class="border-radius-6px box-shadow-quadruple-large" alt=""
                            data-anime='{ "opacity": [0, 1], "clipPath": ["inset(0 0 200px 0)", "inset(0px 0px 0px 0px)"], "duration": 1000, "delay": 1000, "easing": "easeOutQuad" }'
                            data-cfsrc="{{ asset('Frontend/images/demo-marketing-home-02.jpg') }}"
                            style="display:none;visibility:hidden;"><noscript><img
                                src="{{ asset('Frontend/images/demo-marketing-home-02.jpg') }}"
                                class="border-radius-6px box-shadow-quadruple-large" alt=""
                                data-anime="{ "opacity": [0, 1], "clipPath" : ["inset(0 0 200px
                                0)", "inset(0px 0px 0px 0px)" ], "duration" : 1000, "delay" : 1000, "easing"
                                : "easeOutQuad" }"></noscript>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end banner -->
    <!-- start section -->
    <section class="pb-0">
        <div class="container">
            <div class="row mb-30px justify-content-center"
                data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="col-12 text-center">
                    <span class="fs-22 mb-0 text-dark-gray fw-500 ls-minus-1px">More than the <span
                            class="fw-700">30000+</span> companies trusting crafto</span>
                </div>
            </div>

        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="half-section overlap-height position-relative overflow-hidden">
        <div class="container overlap-gap-section">
            <div class="row align-items-center justify-content-md-center">
                <div class="col-lg-6 col-md-10 position-relative md-mb-50px sm-mb-40px">
                    <figure class="position-relative m-0 text-center"
                        data-anime='{ "effect": "slide", "color": "#fff2ef", "direction":"lr", "easing": "easeOutQuad", "delay":50}'>
                        <img alt="" data-cfsrc="{{ asset('Frontend/images/demo-marketing-home-04.jpg') }}"
                            style="display:none;visibility:hidden;"><noscript><img
                                src="{{ asset('Frontend/images/demo-marketing-home-04.jpg') }}"
                                alt=""></noscript>
                        <figcaption class="position-absolute bottom-90px left-0px"
                            data-anime='{ "translateY": [-50, 0], "opacity": [0,1], "duration": 800, "delay": 1000, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <img class="animation-float box-shadow-quadruple-large border-radius-6px" alt=""
                                data-cfsrc="{{ asset('Frontend/images/demo-marketing-home-05.jpg') }}"
                                style="display:none;visibility:hidden;"><noscript><img
                                    src="{{ asset('Frontend/images/demo-marketing-home-05.jpg') }}"
                                    class="animation-float box-shadow-quadruple-large border-radius-6px"
                                    alt=""></noscript>
                        </figcaption>
                    </figure>
                </div>
                <div id="service" class="col-lg-5 offset-lg-1 col-md-12"
                    data-anime='{ "el": "childs", "translateX": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <span class="fs-15 text-uppercase fw-600 ls-1px mb-15px d-block">About Web Development</span>
                    <h3 class="fw-700 text-dark-gray ls-minus-1px fancy-text-style-4">Leverage Our Web Design and
                        Development Services to Boost Your <span
                            data-fancy-text='{ "effect": "rubber-band", "direction": "left", "string": ["business", "industry", "enterprise"] }'></span>
                    </h3>
                    <div class="row mb-9">

                        <div class="col-12 icon-with-text-style-01 mb-30px">
                            <div class="feature-box feature-box-left-icon last-paragraph-no-margin">
                                <div class="feature-box-icon">
                                    <img alt=""
                                        data-cfsrc="{{ asset('Frontend/images/demo-marketing-home-icon-02.jpg') }}"
                                        style="display:none;visibility:hidden;"><noscript><img
                                            src="{{ asset('Frontend/images/demo-marketing-home-icon-02.jpg') }}"
                                            alt=""></noscript>
                                </div>
                                <div class="feature-box-content">
                                    <span class="d-inline-block text-dark-gray fw-600 mb-5px fs-18 ls-minus-05px">Web
                                        Design and Development</span>
                                    <p class="w-80 lg-w-100">We create visually appealing, easy to use websites that
                                        are unique to your enterprise needs and aims.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 icon-with-text-style-01 mb-30px">
                            <div class="feature-box feature-box-left-icon last-paragraph-no-margin">
                                <div class="feature-box-icon">
                                    <img alt=""
                                        data-cfsrc="{{ asset('Frontend/images/demo-marketing-home-icon-02.jpg') }}"
                                        style="display:none;visibility:hidden;"><noscript><img
                                            src="{{ asset('Frontend/images/demo-marketing-home-icon-02.jpg') }}"
                                            alt=""></noscript>
                                </div>
                                <div class="feature-box-content">
                                    <span
                                        class="d-inline-block text-dark-gray fw-600 mb-5px fs-18 ls-minus-05px">Website
                                        maintenance</span>
                                    <p class="w-80 lg-w-100">We offer continuous backup that guarantees your site is
                                        dynamic, safe, and operates seamlessly all the time.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 icon-with-text-style-01 mb-30px">
                            <div class="feature-box feature-box-left-icon last-paragraph-no-margin">
                                <div class="feature-box-icon">
                                    <img alt=""
                                        data-cfsrc="{{ asset('Frontend/images/demo-marketing-home-icon-02.jpg') }}"
                                        style="display:none;visibility:hidden;"><noscript><img
                                            src="{{ asset('Frontend/images/demo-marketing-home-icon-02.jpg') }}"
                                            alt=""></noscript>
                                </div>
                                <div class="feature-box-content">
                                    <span class="d-inline-block text-dark-gray fw-600 mb-5px fs-18 ls-minus-05px">Seo
                                        integrated web design</span>
                                    <p class="w-80 lg-w-100">Synex Digital provides distinct web designing and
                                        developing services tailored according to specific industry requirements along
                                        with brand policies.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 icon-with-text-style-01 mb-30px">
                            <div class="feature-box feature-box-left-icon last-paragraph-no-margin">
                                <div class="feature-box-icon">
                                    <img alt=""
                                        data-cfsrc="{{ asset('Frontend/images/demo-marketing-home-icon-02.jpg') }}"
                                        style="display:none;visibility:hidden;"><noscript><img
                                            src="{{ asset('Frontend/images/demo-marketing-home-icon-02.jpg') }}"
                                            alt=""></noscript>
                                </div>
                                <div class="feature-box-content">
                                    <span
                                        class="d-inline-block text-dark-gray fw-600 mb-5px fs-18 ls-minus-05px">Custom
                                        Web Solutions</span>
                                    <p class="w-80 lg-w-100">Your website will look good on any device including
                                        computers or mobile phones while still working perfectly.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 icon-with-text-style-01 mb-30px">
                            <div class="feature-box feature-box-left-icon last-paragraph-no-margin">
                                <div class="feature-box-icon">
                                    <img alt=""
                                        data-cfsrc="{{ asset('Frontend/images/demo-marketing-home-icon-02.jpg') }}"
                                        style="display:none;visibility:hidden;"><noscript><img
                                            src="{{ asset('Frontend/images/demo-marketing-home-icon-02.jpg') }}"
                                            alt=""></noscript>
                                </div>
                                <div class="feature-box-content">
                                    <span
                                        class="d-inline-block text-dark-gray fw-600 mb-5px fs-18 ls-minus-05px">Responsive
                                        Web Design</span>
                                    <p class="w-80 lg-w-100">You will get tangible results at the end of each sprint
                                        and will be able to refine your product based on user feedback..</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 icon-with-text-style-01 mb-30px">
                            <div class="feature-box feature-box-left-icon last-paragraph-no-margin">
                                <div class="feature-box-icon">
                                    <img alt=""
                                        data-cfsrc="{{ asset('Frontend/images/demo-marketing-home-icon-02.jpg') }}"
                                        style="display:none;visibility:hidden;"><noscript><img
                                            src="{{ asset('Frontend/images/demo-marketing-home-icon-02.jpg') }}"
                                            alt=""></noscript>
                                </div>
                                <div class="feature-box-content">
                                    <span
                                        class="d-inline-block text-dark-gray fw-600 mb-5px fs-18 ls-minus-05px">Content
                                        management system (CMS)</span>
                                    <p class="w-80 lg-w-100">We build user-friendly CMSs which give you control over
                                        what goes on your site without knowing anything about web designing or
                                        programming.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <a href="{{ route('services') }}"
                        class="btn btn-link btn-hover-animation-switch btn-extra-large text-dark-gray fw-600 p-0">
                        <span>
                            <span class="btn-text">Our services</span>
                            <span class="btn-icon">➔</span>
                            <span class="btn-icon">➔</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="bg-very-light-gray md-pb-40px xs-pb-25px">
        <div class="container-fluid overlap-section">
            <div class="row position-relative mb-4 md-mb-5">
                <div class="col swiper swiper-width-auto text-center pb-30px md-pb-20px"
                    data-slider-options='{ "slidesPerView": "auto", "spaceBetween":40, "speed": 10000, "loop": true, "pagination": { "el": ".slider-four-slide-pagination-2", "clickable": false }, "allowTouchMove": false, "autoplay": { "delay":0, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-four-slide-next-2", "prevEl": ".slider-four-slide-prev-2" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>
                    <div class="swiper-wrapper marquee-slide">
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <div class="fs-150 lg-fs-130 md-fs-110 sm-fs-90 text-dark-gray fw-600 ls-minus-5px">
                                development</div>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <div
                                class="fs-150 lg-fs-130 md-fs-110 sm-fs-90 fw-600 text-outline text-outline-color-extra-medium-gray ls-minus-5px">
                                analysis</div>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <div class="fs-150 lg-fs-130 md-fs-110 sm-fs-90 text-dark-gray fw-600 ls-minus-5px">
                                design</div>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <div
                                class="fs-150 lg-fs-130 md-fs-110 sm-fs-90 fw-600 text-outline text-outline-color-extra-medium-gray ls-minus-5px">
                                planning</div>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <div class="fs-150 lg-fs-130 md-fs-110 sm-fs-90 text-dark-gray fw-600 ls-minus-5px">
                                analysis</div>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <div
                                class="fs-150 lg-fs-130 md-fs-110 sm-fs-90 fw-600 text-outline text-outline-color-extra-medium-gray ls-minus-5px">
                                design</div>
                        </div>
                        <!-- end client item -->
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- end section -->
    <!-- start section -->
    <section>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-4 row-cols-sm-2 justify-content-center counter-style-04">
                <div class="col last-paragraph-no-margin text-center sm-mb-40px">
                    <h3 class="vertical-counter d-inline-flex alt-font text-dark-gray fw-700 ls-minus-3px m-0"
                        data-text="%" data-to="353"></h3>
                    <p>Revenue increasing</p>
                </div>
                <div class="col last-paragraph-no-margin text-center sm-mb-40px">
                    <h3 class="vertical-counter d-inline-flex alt-font text-dark-gray fw-700 ls-minus-3px m-0"
                        data-text="%" data-to="642"></h3>
                    <p>Company growth</p>
                </div>
                <div class="col last-paragraph-no-margin text-center xs-mb-40px">
                    <h3 class="vertical-counter d-inline-flex alt-font text-dark-gray fw-700 ls-minus-3px m-0"
                        data-text="%" data-to="376"></h3>
                    <p>Clients enhanced</p>
                </div>
                <div class="col last-paragraph-no-margin text-center">
                    <h3 class="vertical-counter d-inline-flex alt-font text-dark-gray fw-700 ls-minus-3px m-0"
                        data-text="%" data-to="285"></h3>
                    <p>Convert traffic</p>
                </div>
            </div>
            <div id="project" class="row align-items-center mb-6 xs-mb-12 justify-content-md-center">
                <div class="col-xl-5 col-lg-6 col-md-12 md-mb-50px"
                    data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <span class="fs-15 text-uppercase text-base-color fw-600 mb-15px d-block ls-1px">Our Development
                        strategy</span>
                    <h3 class="fw-700 mb-20px text-dark-gray ls-minus-1px">We have helped over 1000+ clients.</h3>
                    <div class="row justify-content-center mb-30px">
                        <div class="col-12">
                            <div class="accordion accordion-style-02" id="accordion-style-02"
                                data-active-icon="icon-feather-minus" data-inactive-icon="icon-feather-plus">
                                <!-- start accordion item -->
                                <div class="accordion-item active-accordion">
                                    <div class="accordion-header border-bottom border-color-extra-medium-gray">
                                        <a href="#" data-bs-toggle="collapse"
                                            data-bs-target="#accordion-style-02-01" aria-expanded="true"
                                            data-bs-parent="#accordion-style-02">
                                            <div class="accordion-title mb-0 position-relative text-dark-gray">
                                                <span class="fw-600 fs-18 ls-minus-05px">Unique and bold website
                                                    design</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div id="accordion-style-02-01" class="accordion-collapse collapse show"
                                        data-bs-parent="#accordion-style-02">
                                        <div
                                            class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                            <p>We deliver customized responsive website to use your audience to make a
                                                positive move.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end accordion item -->
                                <!-- start accordion item -->
                                <div class="accordion-item">
                                    <div class="accordion-header border-bottom border-color-extra-medium-gray">
                                        <a href="#" data-bs-toggle="collapse"
                                            data-bs-target="#accordion-style-02-02" aria-expanded="false"
                                            data-bs-parent="#accordion-style-02">
                                            <div class="accordion-title mb-0 position-relative text-dark-gray">
                                                <span class="fw-600 fs-18 ls-minus-05px">We're ready to deliver
                                                    now</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div id="accordion-style-02-02" class="accordion-collapse collapse"
                                        data-bs-parent="#accordion-style-02">
                                        <div
                                            class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                            <p>We deliver customized responsive website to use your audience to make a
                                                positive move.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end accordion item -->
                                <!-- start accordion item -->
                                <div class="accordion-item">
                                    <div class="accordion-header border-bottom border-color-transparent">
                                        <a href="#" data-bs-toggle="collapse"
                                            data-bs-target="#accordion-style-02-03" aria-expanded="false"
                                            data-bs-parent="#accordion-style-02">
                                            <div class="accordion-title mb-0 position-relative text-dark-gray">
                                                <span class="fw-600 fs-18 ls-minus-05px">Something website for
                                                    everyone</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div id="accordion-style-02-03" class="accordion-collapse collapse"
                                        data-bs-parent="#accordion-style-02">
                                        <div
                                            class="accordion-body last-paragraph-no-margin border-bottom border-color-transparent">
                                            <p>We deliver customized responsive website to use your audience to make a
                                                positive move.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end accordion item -->
                            </div>
                        </div>
                    </div>
                    <a
                        class="btn btn-large btn-dark-gray btn-hover-animation-switch btn-round-edge btn-box-shadow me-30px">
                        <span>
                            <span class="btn-text">How it works</span>
                            <span class="btn-icon">➔</span>
                            <span class="btn-icon">➔</span>
                        </span>
                    </a>
                    <a href="https://www.youtube.com/watch?v=-x1Pt-ZbC30"
                        class="btn btn-link btn-hover-animation-switch btn-extra-large text-dark-gray popup-youtube p-0 fw-600">
                        <span>
                            <span class="btn-text">Play video</span>
                            <span class="btn-icon">▶</span>
                            <span class="btn-icon">▶</span>
                        </span>
                    </a>
                </div>
                <div class="col-lg-6 offset-xl-1 col-md-10 position-relative">
                    <figure class="position-relative m-0 text-center"
                        data-anime='{ "effect": "slide", "color": "#fff2ef", "direction":"rl", "easing": "easeOutQuad", "delay":50}'>
                        <img alt="" data-cfsrc="{{ asset('Frontend/images/demo-marketing-home-06.jpg') }}"
                            style="display:none;visibility:hidden;"><noscript><img
                                src="{{ asset('Frontend/images/demo-marketing-home-06.jpg') }}"
                                alt=""></noscript>
                        <figcaption class="position-absolute bottom-90px right-0px"
                            data-anime='{ "translateY": [-50, 0], "opacity": [0,1], "duration": 800, "delay": 1000, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <img class="animation-float box-shadow-quadruple-large border-radius-6px" alt=""
                                data-cfsrc="{{ asset('Frontend/images/demo-marketing-home-07.jpg') }}"
                                style="display:none;visibility:hidden;"><noscript><img
                                    src="{{ asset('Frontend/images/demo-marketing-home-07.jpg') }}"
                                    class="animation-float box-shadow-quadruple-large border-radius-6px"
                                    alt=""></noscript>
                        </figcaption>
                    </figure>
                </div>
            </div>

        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    {{-- <section class="bg-gradient-very-light-gray">
        <div class="container">
            <div class="row justify-content-center mb-3">
                <div class="col-xl-6 col-md-8 col-sm-10 text-center"
                    data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <span class="fs-15 text-uppercase text-base-color fw-600 mb-10px d-block ls-1px">Predictable
                        pricing plans</span>
                    <h3 class="fw-700 mb-30px text-dark-gray ls-minus-1px">We have tailored pricing plans for everyone.
                    </h3>
                </div>
            </div>
            <div class="row align-items-center justify-content-center"
                data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <!-- start pricing item -->
                <div class="col-lg-4 col-md-8 pricing-table-style-08 md-mb-30px">
                    <!-- start pricing table -->
                    <div
                        class="pricing-table text-center pt-16 pb-35px bg-white box-shadow-quadruple-large border-radius-6px">
                        <div class="pricing-header ps-18 pe-18 md-ps-12 md-pe-12">
                            <div
                                class="d-inline-block fs-12 text-uppercase bg-white ps-20px pe-20px fw-600 text-dark-gray mb-30px border-radius-100px box-shadow-large border border-1 border-color-extra-medium-gray">
                                Standard</div>
                            <h2 class="text-dark-gray fw-600 mb-10px ls-minus-3px"><sup class="fs-30">$</sup>250</h2>
                            <p class="mb-25px lh-28">All the basics for businesses that are just getting started.</p>
                            <a href="{{route('contact')}}"
                                class="btn btn-medium btn-dark-gray btn-round-edge btn-switch-text btn-box-shadow">
                                <span>
                                    <span class="btn-double-text" data-text="Choose package">Choose package</span>
                                </span>
                            </a>
                            <span class="fs-13 w-100 d-block mt-5px">Monthly billing</span>
                        </div>
                        <div class="pricing-body pt-15px pb-25px">
                            <ul class="list-style-01 ps-0 mb-0">
                                <li class="border-color-transparent-dark-very-light pt-10px pb-10px">Marketing strategy
                                </li>
                                <li class="border-color-transparent-dark-very-light pt-10px pb-10px"><span
                                        class="opacity-6">Competitive work analysis</span></li>
                                <li class="border-color-transparent-dark-very-light border-bottom pt-10px pb-10px">
                                    <span class="opacity-6">Social media share audit</span></li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="#"
                                class="text-decoration-line-bottom text-dark-gray d-inline-block fw-500 ls-minus-05px">Get
                                your 30 day free trial</a>
                        </div>
                    </div>
                </div>
                <!-- end pricing item -->
                <!-- start pricing item -->
                <div class="col-lg-4 col-md-8 pricing-table-style-08 md-mb-30px">
                    <!-- start pricing table -->
                    <div
                        class="pricing-table text-center pt-16 pb-35px bg-white box-shadow-quadruple-large border-radius-6px">
                        <div class="pricing-header ps-18 pe-18 md-ps-12 md-pe-12">
                            <div
                                class="d-inline-block fs-12 text-uppercase bg-white ps-20px pe-20px fw-600 text-dark-gray mb-30px border-radius-100px box-shadow-large border border-1 border-color-extra-medium-gray">
                                Business</div>
                            <h2 class="text-dark-gray fw-600 mb-10px ls-minus-3px"><sup class="fs-30">$</sup>350</h2>
                            <p class="mb-25px lh-28">All the basics for businesses that are just getting started.</p>
                            <a href="{{route('contact')}}l"
                                class="btn btn-medium btn-dark-gray btn-round-edge btn-switch-text btn-box-shadow">
                                <span>
                                    <span class="btn-double-text" data-text="Choose package">Choose package</span>
                                </span>
                            </a>
                            <span class="fs-13 w-100 d-block mt-5px">Monthly billing</span>
                        </div>
                        <div class="pricing-body pt-15px pb-25px">
                            <ul class="list-style-01 ps-0 mb-0">
                                <li class="border-color-transparent-dark-very-light pt-10px pb-10px">Marketing strategy
                                </li>
                                <li class="border-color-transparent-dark-very-light pt-10px pb-10px">Competitive work
                                    analysis</li>
                                <li class="border-color-transparent-dark-very-light border-bottom pt-10px pb-10px">
                                    <span class="opacity-6">Social media share audit</span></li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="#"
                                class="text-decoration-line-bottom text-dark-gray d-inline-block fw-500 ls-minus-05px">Get
                                your 30 day free trial</a>
                        </div>
                    </div>
                </div>
                <!-- end pricing item -->
                <!-- start pricing item -->
                <div class="col-lg-4 col-md-8 pricing-table-style-08">
                    <!-- start pricing table -->
                    <div
                        class="pricing-table text-center pt-16 pb-35px bg-white box-shadow-quadruple-large border-radius-6px">
                        <div class="pricing-header ps-18 pe-18 md-ps-12 md-pe-12">
                            <div
                                class="d-inline-block fs-12 text-uppercase bg-white ps-20px pe-20px fw-600 text-dark-gray mb-30px border-radius-100px box-shadow-large border border-1 border-color-extra-medium-gray">
                                Ultimate</div>
                            <h2 class="text-dark-gray fw-600 mb-10px ls-minus-3px"><sup class="fs-30">$</sup>450</h2>
                            <p class="mb-25px lh-28">All the basics for businesses that are just getting started.</p>
                            <a href="{{route('contact')}}"
                                class="btn btn-medium btn-dark-gray btn-round-edge btn-switch-text btn-box-shadow">
                                <span>
                                    <span class="btn-double-text" data-text="Choose package">Choose package</span>
                                </span>
                            </a>
                            <span class="fs-13 w-100 d-block mt-5px">Monthly billing</span>
                        </div>
                        <div class="pricing-body pt-15px pb-25px">
                            <ul class="list-style-01 ps-0 mb-0">
                                <li class="border-color-transparent-dark-very-light pt-10px pb-10px">Marketing strategy
                                </li>
                                <li class="border-color-transparent-dark-very-light pt-10px pb-10px">Competitive work
                                    analysis</li>
                                <li class="border-color-transparent-dark-very-light border-bottom pt-10px pb-10px">
                                    Social media share audit</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="#"
                                class="text-decoration-line-bottom text-dark-gray d-inline-block fw-500 ls-minus-05px">Get
                                your 30 day free trial</a>
                        </div>
                    </div>
                </div>
                <!-- end pricing item -->
            </div>
        </div>
    </section> --}}
    <!-- end section -->

    <!-- start footer -->
    <footer id="contact" class="bg-dark-gray background-position-center-top"
        style="background-image: url({{ asset('Frontend/images/demo-marketing-footer-dot.svg') }})">
        <div class="container overlap-section">
            <div
                class="row g-0 justify-content-center align-items-center bg-base-color border-radius-6px ps-7 pe-7 pt-4 pb-4 lg-p-30px sm-p-20px mb-7">
                <div class="col-lg-6 col-md-9 text-center text-lg-start md-mb-20px">
                    <h4 class="text-white fw-600 mb-0 ls-minus-1px">Let's talk about how we can transform your
                        business Through Website!</h4>
                </div>
                <div class="col-auto col-lg-5 icon-with-text-style-08 offset-lg-1">
                    <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                        <div class="feature-box-icon feature-box-icon-rounded w-80px h-80px rounded-circle      bg-dark-gray-transparent-light me-25px lg-me-20px text-white"
                            style="font-size: xx-large"> ✉
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="text-white fs-18 lh-22 mb-5px d-block">Interested in working?</span>
                            <h6 class="d-inline-block fw-600 mb-0"><a href="mailto:office@synexdigital.com"
                                    class="text-dark-gray text-dark-gray-hover fw-600 text-decoration-line-bottom"
                                    style="font-size: 25px;">
                                    office@synexdigital.com</a>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container footer-dark text-center text-sm-start">
            <div
                class="row align-items-center footer-bottom border-top border-color-transparent-white-light pt-30px g-0">
                <!-- start footer menu -->
                <div class="col-lg-8 ps-0 text-center text-lg-start md-mb-10px">
                    <ul class="footer-navbar fs-15 lh-normal">
                        <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">About Us</a></li>
                        <li class="nav-item"><a href="{{ route('services') }}" class="nav-link">Services</a>
                        </li>
                        <li class="nav-item"><a href="{{ route('projects') }}" class="nav-link">Projects</a></li>
                        <li class="nav-item"><a href="{{ route('blogs') }}" class="nav-link">Blog</a></li>
                        <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
                    </ul>
                </div>
                <!-- end footer menu -->
                <!-- start copyright -->
                <div class="col-lg-4 last-paragraph-no-margin text-center text-lg-end">
                    <p class="fs-15">&copy; 2024 <a href="{{ route('home') }}" class="text-white">Synex Digital</p>
                </div>
                <!-- start copyright -->
            </div>
        </div>
    </footer>
    <!-- end footer -->

    <!-- start scroll progress -->
    <div class="scroll-progress d-none d-xxl-block">
        <a href="#" class="scroll-top" aria-label="scroll">
            <span class="scroll-text">Scroll</span><span class="scroll-line"><span
                    class="scroll-point"></span></span>
        </a>
    </div>
    <!-- end scroll progress -->
    <!-- javascript libraries -->
    @include('Frontend.layout.footerLink')
</body>

</html>
