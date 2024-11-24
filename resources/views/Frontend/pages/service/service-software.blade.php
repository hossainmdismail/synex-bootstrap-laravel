<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="ThemeZaa">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="description"
        content="Elevate your online presence with Crafto - a modern, versatile, multipurpose Bootstrap 5 responsive HTML5, SCSS template using highly creative 52+ ready demos.">
    @include('frontend.layout.headerlink')
    <link rel="stylesheet" href="{{ asset('Frontend/css/hosting.css') }}" />
</head>

<body data-mobile-nav-style="full-screen-menu" data-mobile-nav-bg-color="">
    <!-- start header -->
    <header class="header-with-topbar">
        <!-- start navigation -->
        <nav class="navbar navbar-expand-lg header-transparent bg-transparent header-reverse" data-header-hover="light">
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
                        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
                            <li class="nav-item"><a href="#hosting" class="nav-link">Hosting</a></li>
                            <li class="nav-item"><a href="#services" class="nav-link">Domain</a></li>
                            <li class="nav-item"><a href="#support" class="nav-link">Support</a></li>
                            <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto col-lg-2 text-end lg-pe-5px">
                    <div class="header-icon">
                        <div class="header-button ms-30px xxl-ms-10px xs-ms-0">
                            <a href="{{ route('contact') }}"
                                class="btn btn-white btn-small btn-rounded btn-box-shadow btn-switch-text fw-600">
                                <span>
                                    <span class="btn-double-text" data-text="Get a quote">Get a quote</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end navigation -->
    </header>
    <!-- end header -->
    <!-- start banner -->
    <section
        class="cover-background full-screen bg-dark-gray ipad-top-space-margin position-relative section-dark md-h-auto"
        style="background-image: url({{ asset('Frontend/images/demo-hosting-home-bg.jpg') }})">
        <div id="particles-style-01" class="h-100 position-absolute left-0px top-0 w-100" data-particle="true"
            data-particle-options='{"particles": {"number": {"value": 12,"density": {"enable": true,"value_area": 2000}},"color": {"value": ["#ed00a8", "#ed00a8", "#ed00a8", "#ed00a8"]},"shape": {"type": "edge","stroke":{"width":0,"color":"#000000"}},"opacity": {"value": 0.8,"random": false,"anim": {"enable": false,"speed": 1,"sync": false}},"size": {"value": 5,"random": true,"anim": {"enable": false,"sync": true}},"line_linked":{"enable":false,"distance":0,"color":"#ffffff","opacity":0.4,"width":1},"move": {"enable": true,"speed":1,"direction": "right","random": false,"straight": false}},"interactivity": {"detect_on": "canvas","events": {"onhover": {"enable": false,"mode": "repulse"},"onclick": {"enable": false,"mode": "push"},"resize": true}},"retina_detect": false}'>
        </div>
        <div class="container h-100">
            <div class="row align-items-center justify-content-center h-100">
                <div class="col-xl-7 col-lg-8 col-md-10 text-white position-relative text-center text-lg-start">
                    <div class="fs-90 sm-fs-80 xs-fs-70 fw-600 mb-20px ls-minus-4px overflow-hidden">
                        <div class="d-inline-block"
                            data-anime='{ "translateY": [100, 0], "easing": "easeOutCubic", "duration": 900 }'>
                            Power up web with
                            <div class="highlight-separator" data-shadow-animation="true" data-animation-delay="1500">
                                hosting<span><img src="{{ asset('Frontend') }}/images/highlight-separator.svg"
                                        alt=""></span>
                            </div>
                        </div>
                    </div>
                    <div class="fs-19 fw-300 mb-30px w-80 sm-w-100 opacity-6 d-block mx-auto mx-lg-0 overflow-hidden">
                        <span class="d-inline-block lh-32"
                            data-anime='{ "translateY": [100, 0], "easing": "easeOutCubic", "duration": 900, "delay": 300 }'>Get
                            access to tons of free apps to create websites, eCommerce websites and blogs
                            installations.</span>
                    </div>
                    <div class="overflow-hidden pt-5px">
                        <a href="demo-hosting-hosting.html"
                            class="btn btn-extra-large btn-yellow btn-rounded btn-box-shadow btn-switch-text d-inline-block me-15px xs-m-10px align-middle fw-600"
                            data-anime='{ "translateY": [100, 0], "easing": "easeOutCubic", "duration": 900, "delay": 500 }'>
                            <span>
                                <span class="btn-double-text" data-text="Get started">Get started</span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-4">
                    <div class="outside-box-right-7 position-relative"
                        data-anime='{ "opacity": [0, 1], "translateY": [100, 0], "easing": "easeOutQuad", "duration": 1200, "delay": 200 }'>
                        <img class="w-100" alt=""
                            data-cfsrc="{{ asset('Frontend') }}/images/demo-hosting-home-slider-01.png"
                            style="display:none;visibility:hidden;"><noscript><img class="w-100"
                                src="{{ asset('Frontend') }}/images/demo-hosting-home-slider-01.png"
                                alt=""></noscript>
                        <img class="w-100 position-absolute left-minus-2px top-minus-5px animation-float"
                            alt=""
                            data-cfsrc="{{ asset('Frontend') }}/images/demo-hosting-home-slider-02.png"
                            style="display:none;visibility:hidden;"><noscript><img
                                class="w-100 position-absolute left-minus-2px top-minus-5px animation-float"
                                src="{{ asset('Frontend') }}/images/demo-hosting-home-slider-02.png"
                                alt=""></noscript>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end banner -->
    <!-- start section -->
    <section class="bg-very-light-gray pt-20px pb-20px sm-pt-40px"
        data-anime='{ "opacity": [0, 1], "translateY": [0, 0], "easing": "easeOutQuad", "duration": 1000,"staggervalue": 300, "delay": 600 }'>
        <div class="container overlap-section">
            <div
                class="row justify-content-center overlap-section border-radius-6px overflow-hidden g-0 box-shadow-extra-large">
                <div
                    class="col-lg-9 text-center fw-600 fs-24 lg-fs-22 ls-minus-05px text-dark-gray bg-white p-30px md-p-20px">
                    <a href="{{ route('contact') }}"
                        class="fw-700 text-base-color text-decoration-line-bottom-medium">Get free domain</a> with
                    managed WordPress dedicated hosting.
                </div>
                <div class="col-lg-3 text-center bg-yellow pt-30px pb-30px md-p-20px"><a
                        href="{{ route('contact') }}"
                        class="fw-700 text-dark-gray text-dark-gray-hover fs-24 lg-fs-20 ls-minus-05px">In Affordable
                        Price<i class="feather icon-feather-arrow-right ms-5px"></i></a></div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section id="hosting" class="cover-background pt-5 xs-pt-8"
        style="background-image: url({{ asset('Frontend/images/demo-hosting-home-06.jpg') }})">
        <div class="container">
            <div class="row justify-content-center mb-3">
                <div class="col-lg-8 text-center"
                    data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 900, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span class="text-base-color fw-600 mb-5px text-uppercase d-block">Hosting solutions</span>
                    <h2 class="text-dark-gray fw-700 ls-minus-2px">Hosting services</h2>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2 justify-content-center"
                data-anime='{ "el": "childs",  "translateY": [0, 0], "perspective": [1200, 1200], "scale": [1.05, 1], "rotateX": [50, 0], "opacity": [0,1], "duration":600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <!-- start features box item -->
                <div class="col icon-with-text-style-07 transition-inner-all md-mb-30px">
                    <div
                        class="bg-white feature-box h-100 justify-content-start box-shadow-quadruple-large box-shadow-quadruple-large-hover text-start p-17 sm-p-14 border-radius-6px">
                        <div class="feature-box-icon mb-30px">
                            <img src="{{ asset('Frontend') }}/images/demo-hosting-home-icon-02.svg" class="h-50px"
                                alt="">
                        </div>
                        <div class="feature-box-content">
                            <span class="d-inline-block fw-600 text-dark-gray fs-18 ls-minus-05px">Online store</span>
                            <p class="mb-10px">Lorem dummy printing type setting industry.</p>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col icon-with-text-style-07 transition-inner-all md-mb-30px">
                    <div
                        class="bg-white feature-box h-100 justify-content-start box-shadow-quadruple-large box-shadow-quadruple-large-hover text-start p-17 sm-p-14 border-radius-6px">
                        <div class="feature-box-icon mb-30px">
                            <img src="{{ asset('Frontend') }}/images/demo-hosting-home-icon-03.svg" class="h-50px"
                                alt="">
                        </div>
                        <div class="feature-box-content">
                            <span class="d-inline-block fw-600 text-dark-gray fs-18 ls-minus-05px">Web hosting</span>
                            <p class="mb-10px">Lorem dummy printing type setting industry.</p>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col icon-with-text-style-07 transition-inner-all xs-mb-30px">
                    <div
                        class="bg-white feature-box h-100 justify-content-start box-shadow-quadruple-large box-shadow-quadruple-large-hover text-start p-17 sm-p-14 border-radius-6px">
                        <div class="feature-box-icon mb-30px">
                            <img src="{{ asset('Frontend') }}/images/demo-hosting-home-icon-04.svg" class="h-50px"
                                alt="">
                        </div>
                        <div class="feature-box-content">
                            <span class="d-inline-block fw-600 text-dark-gray fs-18 ls-minus-05px">Business
                                email</span>
                            <p class="mb-10px">Lorem dummy printing type setting industry.</p>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col icon-with-text-style-07 transition-inner-all">
                    <div
                        class="bg-white feature-box h-100 justify-content-start box-shadow-quadruple-large box-shadow-quadruple-large-hover text-start p-17 sm-p-14 border-radius-6px">
                        <div class="feature-box-icon mb-30px">
                            <img src="{{ asset('Frontend') }}/images/demo-hosting-home-icon-05.svg" class="h-50px"
                                alt="">
                        </div>
                        <div class="feature-box-content">
                            <span class="d-inline-block fw-600 text-dark-gray fs-18 ls-minus-05px">Cloud storage</span>
                            <p class="mb-10px">Lorem dummy printing type setting industry.</p>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section id="about" class="overflow-hidden">
        <div class="container">
            <div class="row align-items-center justify-content-center mb-6 sm-mb-50px position-relative">
                <div class="col-lg-6 col-md-10 position-relative md-mb-30px"
                    data-anime='{ "effect": "slide", "color": "#ffffff", "direction":"lr", "easing": "easeOutQuad", "delay":50}'>
                    <img class="w-100" data-bottom-top="transform: translateY(-50px)"
                        data-top-bottom="transform: translateY(50px)" alt=""
                        data-cfsrc="{{ asset('Frontend') }}/images/demo-hosting-home-01.png"
                        style="display:none;visibility:hidden;"><noscript><img class="w-100"
                            src="{{ asset('Frontend') }}/images/demo-hosting-home-01.png"
                            data-bottom-top="transform: translateY(-50px)"
                            data-top-bottom="transform: translateY(50px)" alt=""></noscript>
                </div>
                <div class="col-lg-5 offset-lg-1 last-paragraph-no-margin"
                    data-anime='{ "el": "childs", "opacity": [0, 1], "rotateY": [-90, 0], "rotateZ": [-10, 0], "translateY": [80, 0], "translateZ": [50, 0], "staggervalue": 200, "duration": 900, "delay": 300, "easing": "easeOutCirc" }'>
                    <span class="text-base-color fw-600 mb-15px text-uppercase d-block">Simple and intuitive</span>
                    <h2 class="fw-600 text-dark-gray w-90 lg-w-100 text-dark-gray fw-700 ls-minus-2px">Solutions for
                        your business.</h2>
                    <p class="w-90 sm-w-100">Getting your website live is as simple as a click of a button. Everything
                        you need provided in a clear way.</p>
                    <ul class="p-0 mb-25px mt-15px list-style-01 w-90 lg-w-100">
                        <li
                            class="border-color-extra-medium-gray fw-600 text-dark-gray d-flex align-items-center pt-15px pb-15px">
                            <div
                                class="feature-box-icon feature-box-icon-rounded w-35px h-35px rounded-circle bg-solitude-blue me-10px text-center d-flex align-items-center justify-content-center flex-shrink-0">
                                <i class="fa-solid fa-check fs-13 text-base-color"></i>
                            </div>
                            Get 30% discount qualifying purchases.
                        </li>
                        <li
                            class="border-color-extra-medium-gray fw-600 text-dark-gray d-flex align-items-center pt-15px pb-15px">
                            <div
                                class="feature-box-icon feature-box-icon-rounded w-35px h-35px rounded-circle bg-solitude-blue me-10px text-center d-flex align-items-center justify-content-center flex-shrink-0">
                                <i class="fa-solid fa-check fs-13 text-base-color"></i>
                            </div>
                            Grow and connect with developers.
                        </li>
                    </ul>
                    <a href="{{ route('contact') }}"
                        class="btn btn-large btn-dark-gray btn-box-shadow btn-rounded btn-switch-text">
                        <span>
                            <span class="btn-double-text" data-text="Lowest pricing">Premium pricing</span>
                            <span><i class="feather icon-feather-arrow-right"></i></span>
                        </span>
                    </a>
                </div>
            </div>
            <div class="row align-items-center justify-content-center border border-color-extra-medium-gray border-radius-100px md-border-radius-6px p-50px lg-p-20px m-0 box-shadow-quadruple-large"
                data-bottom-top="transform:scale(1.1, 1.1) translateY(30px);"
                data-top-bottom="transform:scale(1, 1) translateY(-30px);">
                <!-- start process step item -->
                <div class="col-lg-4 col-md-6 process-step-style-07 position-relative md-mb-30px">
                    <div class="process-step-item d-flex align-items-center">
                        <div class="process-step-icon-wrap position-relative">
                            <div
                                class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-60px w-60px bg-base-color fs-17 fw-500">
                                <span class="number position-relative z-index-1 text-white">01</span>
                            </div>
                        </div>
                        <div class="process-content ps-20px last-paragraph-no-margin">
                            <span class="d-block fw-600 text-dark-gray fs-17 ls-minus-05px alt-font">Choose a hosting
                                plan</span>
                            <p>Lorem ipsum simply printing</p>
                        </div>
                    </div>
                </div>
                <!-- end process step item -->
                <!-- start process step item -->
                <div class="col-lg-4 col-md-6 process-step-style-07 position-relative md-mb-30px">
                    <div class="process-step-item d-flex align-items-center">
                        <div class="process-step-icon-wrap position-relative">
                            <div
                                class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-60px w-60px bg-base-color fs-17 fw-500">
                                <span class="number position-relative z-index-1 text-white">02</span>
                            </div>
                        </div>
                        <div class="process-content ps-20px last-paragraph-no-margin">
                            <span class="d-block fw-600 text-dark-gray fs-17 ls-minus-05px alt-font">Select a domain
                                name</span>
                            <p>Lorem ipsum simply printing</p>
                        </div>
                    </div>
                </div>
                <!-- end process step item -->
                <!-- start process step item -->
                <div class="col-lg-4 col-md-6 process-step-style-07 position-relative">
                    <div class="process-step-item d-flex align-items-center">
                        <div class="process-step-icon-wrap position-relative">
                            <div
                                class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-60px w-60px bg-base-color fs-17 fw-500">
                                <span class="number position-relative z-index-1 text-white">03</span>
                            </div>
                        </div>
                        <div class="process-content ps-20px last-paragraph-no-margin">
                            <span class="d-block fw-600 text-dark-gray fs-17 ls-minus-05px alt-font">Upload your
                                website</span>
                            <p>Lorem ipsum simply printing</p>
                        </div>
                    </div>
                </div>
                <!-- end process step item -->
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section id="services" class="cover-background section-dark bg-midnight-dark-blue"
        style="background-image: url({{ asset('Frontend/images/demo-hosting-home-02.png') }})"
        data-0-top="background-color:rgb(25,30,61);" data-center-bottom="background-color:rgb(14,16,29);">
        <div class="container">
            <div class="row justify-content-center mb-3">
                <div class="col-lg-8 text-center"
                    data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 900, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span class="text-white opacity-5 mb-5px text-uppercase d-block">What we offers</span>
                    <h2 class="text-white fw-700 ls-minus-1px">Affordable services</h2>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 justify-content-center ps-8 pe-8 lg-px-0"
                data-anime='{ "el": "childs", "translateY": [30, 0], "scale":[0.8,1], "opacity": [0,1], "duration": 500, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                <!-- start features box item -->
                <div class="col icon-with-text-style-04 transition-inner-all mb-30px">
                    <div
                        class="feature-box hover-box h-100 transition light-hover border-radius-6px p-18 xs-p-12 last-paragraph-no-margin overflow-hidden border border-1 box-shadow-quadruple-large-hover border-color-transparent-white-light border-color-transparent-on-hover">
                        <div class="feature-box-content">
                            <span class="d-inline-block text-white fw-500 lh-24">Domain name<br>generator</span>
                        </div>
                        <div class="feature-box-overlay bg-white"></div>
                    </div>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col icon-with-text-style-04 transition-inner-all mb-30px">
                    <div
                        class="feature-box hover-box h-100 transition light-hover border-radius-6px p-18 xs-p-12 last-paragraph-no-margin overflow-hidden border border-1 box-shadow-quadruple-large-hover border-color-transparent-white-light border-color-transparent-on-hover">
                        <div class="feature-box-content">
                            <span class="d-inline-block text-white fw-500 lh-24">SQL server<br>hosting</span>
                        </div>
                        <div class="feature-box-overlay bg-white"></div>
                    </div>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col icon-with-text-style-04 transition-inner-all mb-30px">
                    <div
                        class="feature-box hover-box h-100 transition light-hover border-radius-6px p-18 xs-p-12 last-paragraph-no-margin overflow-hidden border border-1 box-shadow-quadruple-large-hover border-color-transparent-white-light border-color-transparent-on-hover">
                        <div class="feature-box-content">
                            <span class="d-inline-block text-white fw-500 lh-24">Cheap web<br>hosting</span>
                        </div>
                        <div class="feature-box-overlay bg-white"></div>
                    </div>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col icon-with-text-style-04 transition-inner-all mb-30px">
                    <div
                        class="feature-box hover-box h-100 transition light-hover border-radius-6px p-18 xs-p-12 last-paragraph-no-margin overflow-hidden border border-1 box-shadow-quadruple-large-hover border-color-transparent-white-light border-color-transparent-on-hover">
                        <div class="feature-box-content">
                            <span class="d-inline-block text-white fw-500 lh-24">Website email<br>hosting</span>
                        </div>
                        <div class="feature-box-overlay bg-white"></div>
                    </div>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col icon-with-text-style-04 transition-inner-all md-mb-30px">
                    <div
                        class="feature-box hover-box h-100 transition light-hover border-radius-6px p-18 xs-p-12 last-paragraph-no-margin overflow-hidden border border-1 box-shadow-quadruple-large-hover border-color-transparent-white-light border-color-transparent-on-hover">
                        <div class="feature-box-content">
                            <span class="d-inline-block text-white fw-500 lh-24">WordPress<br>installation</span>
                        </div>
                        <div class="feature-box-overlay bg-white"></div>
                    </div>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col icon-with-text-style-04 transition-inner-all md-mb-30px">
                    <div
                        class="feature-box hover-box h-100 transition light-hover border-radius-6px p-18 xs-p-12 last-paragraph-no-margin overflow-hidden border border-1 box-shadow-quadruple-large-hover border-color-transparent-white-light border-color-transparent-on-hover">
                        <div class="feature-box-content">
                            <span class="d-inline-block text-white fw-500 lh-24">Game server<br>hosting</span>
                        </div>
                        <div class="feature-box-overlay bg-white"></div>
                    </div>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col icon-with-text-style-04 transition-inner-all xs-mb-30px">
                    <div
                        class="feature-box hover-box h-100 transition light-hover border-radius-6px p-15 xs-p-12 last-paragraph-no-margin overflow-hidden border border-1 box-shadow-quadruple-large-hover border-color-transparent-white-light border-color-transparent-on-hover">
                        <div class="feature-box-content">
                            <span class="d-inline-block text-white fw-500 lh-24">VPS server<br>hosting</span>
                        </div>
                        <div class="feature-box-overlay bg-white"></div>
                    </div>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col icon-with-text-style-04 transition-inner-all">
                    <div
                        class="feature-box hover-box h-100 transition light-hover border-radius-6px p-18 xs-p-12 last-paragraph-no-margin overflow-hidden border border-1 box-shadow-quadruple-large-hover border-color-transparent-white-light border-color-transparent-on-hover">
                        <div class="feature-box-content">
                            <span class="d-inline-block text-white fw-500 lh-24">Free website<br>hosting</span>
                        </div>
                        <div class="feature-box-overlay bg-white"></div>
                    </div>
                </div>
                <!-- end features box item -->
            </div>
            <div class="row justify-content-center mt-6">
                <div class="col-auto icon-with-text-style-08"
                    data-anime='{ "translateX": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="feature-box feature-box-left-icon-middle">
                        <div class="feature-box-icon me-10px">
                            <span>💭</span>
                        </div>
                        <div class="feature-box-content">
                            <span class="alt-font text-white fs-18">Keep in Touch. <a
                                    href="https://www.facebook.com/@synexdigital/"
                                    class="text-decoration-line-bottom text-white fw-500">Like us on
                                    Facebook</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="pb-0">
        <div class="container">
            <div class="row"
                data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="col-12 text-center">
                    <div
                        class="bg-dark-gray fw-600 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-12 me-10px xs-m-5px d-inline-block align-middle">
                        Limited offer</div>
                    <div class="text-dark-gray fw-500 d-inline-block align-middle ls-minus-05px fs-18">Save 20% on
                        annual plans. <a href="{{ route('contact') }}"
                            class="text-decoration-line-bottom text-dark-gray d-inline-block">Explore pricing
                            plans<span class="bg-dark-gray"></span></a></div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="overflow-hidden">
        <div class="container">
            <div class="row align-items-center justify-content-center border-radius-8px p-4 xs-p-7 text-center text-lg-start g-0 cover-background"
                style="background-image: url({{ asset('Frontend/images/demo-hosting-home-03.jpg') }})"
                data-bottom-top="transform:scale(1.1, 1.1) translateY(30px);"
                data-top-bottom="transform:scale(1.0, 1.0) translateY(-30px);">
                <div class="col-lg-6 col-md-9 md-mb-10px icon-with-text-style-08">
                    <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                        <div
                            class="feature-box-icon feature-box-icon-rounded w-100px h-100px rounded-circle border border-2 border-color-transparent-white-light me-30px xs-me-25px">
                            <img src="{{ asset('Frontend') }}/images/demo-hosting-home-icon.svg"
                                class="w-50px h-50px" alt="">
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <h5 class="d-inline-block fw-600 text-white mb-0">Are you ready for a better productive
                                business?</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-end">
                    <a href="{{ route('contact') }}"
                        class="btn btn-medium btn-yellow btn-rounded fw-600 btn-switch-text btn-box-shadow">
                        <span>
                            <span class="btn-double-text" data-text="Sign up free">Sign up free</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section id="support" class="pt-0">
        <div class="container">
            <div class="row justify-content-center align-items-center mb-3">
                <div class="col-lg-7 col-md-8 sm-mb-15px"
                    data-anime='{ "translateX": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h2 class="text-dark-gray fw-700 ls-minus-1px mb-0">Have a question?</h2>
                </div>
                <div class="col-lg-3 col-md-4 text-start text-md-end"
                    data-anime='{ "translateX": [-50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span class="text-dark-gray fs-30 align-middle fancy-text-style-4 ls-minus-1px">&#128075; Say <span
                            class="fw-600"
                            data-fancy-text='{ "effect": "rotate", "string": ["hello!", "hallå!", "salve!"] }'></span></span>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="accordion accordion-style-02" id="accordion-style-02"
                        data-active-icon="icon-feather-chevron-up" data-inactive-icon="icon-feather-chevron-down"
                        data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <!-- start accordion item -->
                        <div class="accordion-item active-accordion">
                            <div class="accordion-header border-bottom border-color-extra-medium-gray">
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-01"
                                    aria-expanded="true" data-bs-parent="#accordion-style-02">
                                    <div class="accordion-title mb-0 position-relative text-dark-gray pe-30px">
                                        <span class="fw-600 fs-18">How long is this site live?</span>
                                    </div>
                                </a>
                            </div>
                            <div id="accordion-style-02-01" class="accordion-collapse collapse show"
                                data-bs-parent="#accordion-style-02">
                                <div
                                    class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                    <p>Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        ipsum has been the industry's standard dummy text ever unknown printer took a
                                        galley of type and scrambled it to make a type specimen book.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end accordion item -->
                        <!-- start accordion item -->
                        <div class="accordion-item">
                            <div class="accordion-header border-bottom border-color-extra-medium-gray">
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-02"
                                    aria-expanded="false" data-bs-parent="#accordion-style-02">
                                    <div class="accordion-title mb-0 position-relative text-dark-gray pe-30px">
                                        <span class="fw-600 fs-18">Can i install/upload anything is want on
                                            there?</span>
                                    </div>
                                </a>
                            </div>
                            <div id="accordion-style-02-02" class="accordion-collapse collapse"
                                data-bs-parent="#accordion-style-02">
                                <div
                                    class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                    <p>Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        ipsum has been the industry's standard dummy text ever unknown printer took a
                                        galley of type and scrambled it to make a type specimen book.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end accordion item -->
                        <!-- start accordion item -->
                        <div class="accordion-item">
                            <div class="accordion-header border-bottom border-color-light-medium-gray">
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-03"
                                    aria-expanded="false" data-bs-parent="#accordion-style-02">
                                    <div class="accordion-title mb-0 position-relative text-dark-gray pe-30px">
                                        <span class="fw-600 fs-18">How can i migrate to another site?</span>
                                    </div>
                                </a>
                            </div>
                            <div id="accordion-style-02-03" class="accordion-collapse collapse"
                                data-bs-parent="#accordion-style-02">
                                <div
                                    class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                    <p>Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        ipsum has been the industry's standard dummy text ever unknown printer took a
                                        galley of type and scrambled it to make a type specimen book.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end accordion item -->
                        <!-- start accordion item -->
                        <div class="accordion-item">
                            <div class="accordion-header border-bottom border-color-transparent">
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-04"
                                    aria-expanded="false" data-bs-parent="#accordion-style-02">
                                    <div class="accordion-title mb-0 position-relative text-dark-gray pe-30px">
                                        <span class="fw-600 fs-18">Can i change the domain you give me?</span>
                                    </div>
                                </a>
                            </div>
                            <div id="accordion-style-02-04" class="accordion-collapse collapse"
                                data-bs-parent="#accordion-style-02">
                                <div
                                    class="accordion-body last-paragraph-no-margin border-bottom border-color-transparent">
                                    <p>Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        ipsum has been the industry's standard dummy text ever unknown printer took a
                                        galley of type and scrambled it to make a type specimen book.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end accordion item -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="pt-5 bg-dark">
        <div class="container">
            <div class="row position-relative clients-style-08"
                data-anime='{ "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="col swiper text-center feather-shadow"
                    data-slider-options='{ "slidesPerView": 2, "spaceBetween":0, "speed": 4000, "loop": true, "pagination": { "el": ".slider-four-slide-pagination-2", "clickable": false }, "allowTouchMove": false, "autoplay": { "delay":0, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-four-slide-next-2", "prevEl": ".slider-four-slide-prev-2" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 4 }, "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 } }, "effect": "slide" }'>
                    <div class="swiper-wrapper marquee-slide">
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="{{ asset('Frontend/images/brand/amazon-web-services.png') }}"
                                    class="h-40px xs-h-30px" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img
                                    src="{{ asset('Frontend/images/brand/Logo-Notion-White-al-vivo.png') }}"
                                    class="h-40px xs-h-30px" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="{{ asset('Frontend/images/brand/meta_PNG7.png') }}"
                                    class="h-40px xs-h-30px" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="{{ asset('Frontend/images/brand/stripe.png') }}"
                                    class="h-40px xs-h-30px" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img
                                    src="{{ asset('Frontend/images/brand/GitHub-Wordmark-White-Dark-Background-Logo.wine.svg') }}"
                                    class="h-40px xs-h-30px" alt="" /></a>
                        </div>
                        <!-- end client item -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start footer -->
    <footer id="contact" class="footer-dark bg-dark-blue pb-0 cover-background background-position-left-top"
        style="background-image: url({{ asset('Frontend/images/demo-hosting-footer-bg.jpg') }})">
        <div class="container">
            <div class="row justify-content-center mb-5 md-mb-8 sm-mb-40px">
                <!-- start footer column -->
                <div class="col-6 col-lg-4 last-paragraph-no-margin order-sm-1 md-mb-40px xs-mb-30px">
                    <a href="{{ route('home') }}" class="footer-logo mb-15px d-inline-block"><img
                            data-at2x="{{ asset('Frontend') }}/images/logo-text.svg" alt=""
                            data-cfsrc="{{ asset('Frontend') }}/images/logo-text.svg"
                            style="display:none;visibility:hidden;"><noscript><img
                                src="{{ asset('Frontend') }}/images/logo-text.svg"
                                data-at2x="{{ asset('Frontend') }}/images/logo-text.svg"
                                alt=""></noscript></a>
                    <p class="w-90 lg-w-100">We are your one-stop technological solution supplier, meeting your
                        business's particular demands with precision and competence.</p>
                </div>
                <!-- end footer column -->

                <!-- start footer column -->
                <div class="col-6 col-lg-4 col-sm-3 xs-mb-30px order-sm-5 order-lg-3">
                    <span class="fs-17 fw-500 d-block text-white mb-5px">Say hello</span>
                    <span class="d-inline-flex w-100">Need support?</span>
                    <a href="mailto:office@synexdigital.com"
                        class="text-dark-gray text-dark-gray-hover fw-600 text-decoration-line-bottom">
                        office@synexdigital.com</a>
                    <span class="d-inline-flex w-100">Call us</span>
                    <a href="tel:+880 1613-408101" class="text-white lh-22 d-inline-flex">+880 1613-408101</a>
                </div>
                <!-- end footer column -->
                <!-- start footer column -->
                <div class="col-lg-3 col-sm-6 ps-30px sm-ps-15px md-mb-40px xs-mb-0 order-sm-2 order-lg-5">
                    <span class="fs-17 fw-500 d-block text-white mb-5px">Subscribe our newsletter</span>
                    <p class="mb-20px">Subscribe our newsletter to get the latest news and updates!</p>
                    <div class="d-inline-block w-100 newsletter-style-02 position-relative mb-15px">
                        <form action="#" class="position-relative w-100">
                            <input
                                class="input-small bg-transparent-white-light border-color-transparent w-100 form-control pe-50px ps-20px lg-ps-15px required"
                                type="email" name="email" placeholder="Visit Contact Page" />
                            <input type="hidden" name="redirect" value="" disabled>
                            <a href="{{ route('contact') }}"
                                class="btn btn-sm btn-white position-absolute top-0 end-0">✉</a>
                            <div
                                class="form-results border-radius-4px pt-5px pb-5px ps-15px pe-15px fs-14 lh-22 mt-10px w-100 text-center position-absolute d-none">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end footer column -->
            </div>
            <div class="border-top border-color-transparent-white-light pt-35px pb-35px text-center">
                <span class="fs-13 w-60 lg-w-70 md-w-100 d-block mx-auto lh-22"><span class="fs-15">&copy; 2024 Synex
                        Digital</span></span>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- start sticky elements -->
    <div class="sticky-wrap z-index-1 d-none d-xl-inline-block" data-animation-delay="100"
        data-shadow-animation="true">
        <div class="elements-social social-icon-style-10">
            <ul class="fs-14">
                <li class="me-30px"><a class="facebook" href="https://www.facebook.com/" target="_blank">
                        <span class="alt-font">Fb</span>
                    </a>
                </li>
                <li class="me-30px">
                    <a class="dribbble" href="https://www.linkedin.com/company/synex-digital/" target="_blank">
                        <span class="alt-font">Li</span>
                    </a>
                </li>
                <li class="me-30px">
                    <a class="twitter" href="https://www.twitter.com/" target="_blank">
                        <span class="alt-font">Tw</span>
                    </a>
                </li>
                <li>
                    <a class="instagram" href="https://www.instagram.com/" target="_blank">
                        <span class="alt-font">Ins</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- end sticky elements -->
    <!-- start scroll progress -->
    <div class="scroll-progress d-none d-xxl-block">
        <a href="#" class="scroll-top" aria-label="scroll">
            <span class="scroll-text">Scroll</span><span class="scroll-line"><span
                    class="scroll-point"></span></span>
        </a>
    </div>
    <!-- end scroll progress -->
    <!-- javascript libraries -->
    @include('frontend.layout.footerLink')
</body>

</html>
