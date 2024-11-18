@php
    $items = [
        [
            'title' => 'UX and UI Design',
            'description' =>
                'We craft seamless, visually appealing interfaces that enhance the user experience, ensuring every interaction is intuitive and engaging. Partner with us for design excellence.',
        ],
        [
            'title' => 'UI/UX Branding Design Services',
            'description' =>
                'Our team integrates your brand identity with user experience, creating a cohesive and powerful digital presence that resonates with your audience. Let us help you align your brand with user expectations.',
        ],
        [
            'title' => 'User Research & Analysis',
            'description' =>
                'We conduct thorough research to understand user behavior and preferences, enabling us to design solutions that truly connect with your target audience. Rely on us for deep insights and strategic design.',
        ],
        [
            'title' => 'Prototyping & Wireframing',
            'description' =>
                'Visualize your user flows with interactive prototypes and wireframes, bringing your ideas to life before development.',
        ],
        [
            'title' => 'UI/UX Design Services',
            'description' =>
                'From concept to implementation, we provide end-to-end UI/UX design services that deliver exceptional user experiences. Trust us to handle every aspect of your design journey.',
        ],
        [
            'title' => 'Usability Testing',
            'description' =>
                'We rigorously test designs to ensure they are intuitive and meet user expectations, driving satisfaction and engagement. ',
        ],
    ];
@endphp


<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="ThemeZaa">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <!-- favicon icon -->
    <link rel="shortcut icon" href="{{ asset('Frontend') }}/images/favicon.png">
    <link rel="apple-touch-icon" href="{{ asset('Frontend') }}/images/favicon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('Frontend') }}/images/favicon.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('Frontend') }}/images/favicon.png">
    @include('Frontend.layout.headerLink')
    <link rel="stylesheet" href="{{ asset('Frontend/css/design-agency.css') }}">

</head>

<body data-mobile-nav-style="full-screen-menu" data-mobile-nav-bg-color="#000000" class="custom-cursor">
    <!-- start cursor -->
    <div class="cursor-page-inner">
        <div class="circle-cursor circle-cursor-inner"></div>
        <div class="circle-cursor circle-cursor-outer"></div>
    </div>
    <!-- end cursor -->
    <!-- start header -->
    <header>
        <!-- start navigation -->
        <nav class="navbar navbar-expand-lg header-light bg-transparent disable-fixed">
            <div class="container-fluid">
                <div class="col-auto col-lg-2 me-lg-0 me-auto">
                    <a class="navbar-brand" href="demo-design-agency.html">
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
                <div class="col-auto col-lg-8 menu-order position-static">
                    <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                        <ul class="navbar-nav text-uppercase">
                            <li class="nav-item"><a href="demo-design-agency.html" class="nav-link">Home</a></li>
                            <li class="nav-item"><a href="demo-design-agency-about.html" class="nav-link">Agency</a>
                            </li>
                            <li class="nav-item"><a href="demo-design-agency-work.html" class="nav-link">Work</a></li>
                            <li class="nav-item"><a href="demo-design-agency-expertise.html"
                                    class="nav-link">Expertise</a></li>
                            <li class="nav-item"><a href="demo-design-agency-contact.html" class="nav-link">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto col-lg-2 text-end">
                    <div class="header-icon">
                        <div class="header-button">
                            <a href="demo-design-agency-contact.html"
                                class="btn btn-link btn-hover-animation-switch btn-large text-dark-gray fw-700 section-link">
                                <span>
                                    <span class="btn-text">Get a quote</span>
                                    <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
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
    <div class="main-content background-position-left-top bg-concrete-gray"
        style="background-image: url({{ asset('Frontend/images/Services/uiux/demo-design-agency-vertical-line-bg.svg') }})">
        <!-- hero section -->
        <section class="pb-0 full-screen ipad-top-space-margin position-relative overflow-hidden md-h-auto md-pb-70px">
            <div id="particles-style-01" class="position-absolute h-100 top-0 left-0 w-100" data-particle="true"
                data-particle-options='{"particles":{"number":{"value":15,"density":{"enable":true,"value_area":1843.9238699953512}},"color":{"value":"#ffffff"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":0,"random":false,"anim":{"enable":false,"speed":0.8932849335314796,"opacity_min":0.1,"sync":false}},"size":{"value":4.008530152163807,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":false,"distance":2000,"color":"#ffffff","opacity":0.9620472365193137,"width":4.489553770423464},"move":{"enable":true,"speed":6,"direction":"none","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"window","events":{"onhover":{"enable":true,"mode":"bubble"},"onclick":{"enable":true,"mode":"push"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true}'>
            </div>
            <div class="container h-100 position-relative">
                <div class="row align-items-center justify-content-center h-100 mt-3 lg-mt-0">
                    <div class="col-md-10 text-center">
                        <div class="position-relative"
                            data-anime='{ "opacity": [0, 1], "duration": 600, "delay": 0, "staggervalue": 150, "easing": "easeOutCirc" }'>
                            <div class="position-absolute top-minus-100px lg-top-minus-80px left-0px right-0px z-index-9 d-none d-md-block"
                                data-bottom-top="transform:scale(1, 1) translate3d(0px, 60px, 0px);"
                                data-top-bottom="transform:scale(1, 1) translate3d(0px, -60px, 0px);">
                                <img class="lg-w-100px" alt=""
                                    data-cfsrc="{{ asset('Frontend/images/Services/uiux/demo-design-agency-01.png') }}"
                                    style="display:none;visibility:hidden;"><noscript><img
                                        src="{{ asset('Frontend/images/Services/uiux/demo-design-agency-01.png') }}"
                                        class="lg-w-100px" alt=""></noscript>
                            </div>
                            <div class="position-absolute bottom-0px left-minus-230px"
                                data-bottom-top="transform: rotate(0deg) translateY(50px)"
                                data-top-bottom="transform:rotate(10deg) translateY(-50px)">
                                <img class="" alt=""
                                    data-cfsrc="{{ asset('Frontend/images/Services/uiux/demo-design-agency-02.png') }}"
                                    style="display:none;visibility:hidden;"><noscript><img
                                        src="{{ asset('Frontend/images/Services/uiux/demo-design-agency-02.png') }}"
                                        class="" alt=""></noscript>
                            </div>
                            <div class="position-absolute right-minus-250px top-minus-250px md-top-minus-80px sm-top-minus-50px lg-w-70"
                                data-bottom-top="transform:scale(1, 1) translate3d(-60px, 60px, 0px);"
                                data-top-bottom="transform:scale(1, 1) translate3d(60px, 0px, 0px);">
                                <img class="" alt=""
                                    data-cfsrc="{{ asset('Frontend/images/Services/uiux/demo-design-agency-03.png') }}"
                                    style="display:none;visibility:hidden;"><noscript><img
                                        src="{{ asset('Frontend/images/Services/uiux/demo-design-agency-03.png') }}images/demo-design-agency-03.png"
                                        class="" alt=""></noscript>
                            </div>
                            <div class="fs-200 lg-fs-150 xs-fs-120 text-dark-gray alt-font lh-160 lg-lh-128 xs-lh-112 fancy-text-style-4 position-relative mb-20px ls-minus-4px"
                                data-anime='{ "rotateX": [50, 0], "opacity": [0,1], "staggervalue": 150, "easing": "easeOutQuad" }'>
                                <span class="text-sliding-line bg-dark-gray">Branding</span> and design <span
                                    class="text-sliding-line bg-base-color">agency</span>
                            </div>
                        </div>
                        <div class="w-50 md-w-80 xs-w-100 text-lg-start ms-auto pe-50px lg-pe-15px md-ps-15px position-relative md-mx-auto"
                            data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <div class="fs-18 lh-32 mb-40px w-90 md-w-100 lg-mb-30px">Our long experience and design
                                sagacity help us spot essential things while selecting a design that business owners
                                often miss.</div>
                            <a href="#" class="btn btn-dark-gray btn-large btn-switch-text btn-box-shadow">
                                <span>
                                    <span class="btn-double-text" data-text="Let's talk - Send a message">Let's talk -
                                        Send a message</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end hero section -->
        <!-- start section -->
        <section class="p-0">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 text-uppercase"
                        data-anime='{ "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div class="outside-box-left-20 md-outside-box-left-7">
                            <div class="fs-350 xl-fs-300 lg-fs-250 xs-fs-170 word-break-normal alt-font mb-10 md-mb-30px text-sliding-line bg-base-color ls-minus-5px"
                                data-bottom-top="transform:scale(1, 1) translate3d(0px, 0px, 0px);"
                                data-top-bottom="transform:scale(1, 1) translate3d(-60px, 0px, 0px);">creative</div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 align-self-end text-center text-lg-start xs-mb-30px"
                        data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h1 class="alt-font text-uppercase text-dark-gray mb-0 ls-minus-2px">We create fantastic brand
                            and identities.</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="pb-0">
            <div class="container">
                <div class="row align-items-center row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center mb-2"
                    data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <!-- start process step item -->
                    <div class="col process-step-style-11 position-relative md-mb-70px">
                        <div class="process-step-item d-flex align-items-start">
                            <div class="process-step-icon-wrap bg-sliding-line col-auto">
                                <span
                                    class="number fs-50 alt-font w-60px h-100px d-flex align-items-end justify-content-center text-concrete-gray lh-20">01</span>
                            </div>
                            <div class="process-content ps-35px xs-ps-25px last-paragraph-no-margin col">
                                <span class="d-inline-block text-dark-gray fw-600 fs-19 mb-5px ls-minus-05px">User
                                    Experience (UX)</span>
                                <p class="w-85 lg-w-95 xs-w-100">We create seamless and user-centric experiences
                                    tailored to meet the specific needs of your audience.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end process step item -->
                    <!-- start process step item -->
                    <div class="col process-step-style-11 position-relative md-mb-70px">
                        <div class="process-step-item d-flex align-items-start">
                            <div class="process-step-icon-wrap bg-sliding-line col-auto">
                                <span
                                    class="number fs-50 alt-font w-60px h-100px d-flex align-items-end justify-content-center text-concrete-gray lh-20">02</span>
                            </div>
                            <div class="process-content ps-35px xs-ps-25px last-paragraph-no-margin col">
                                <span class="d-inline-block text-dark-gray fw-600 fs-19 mb-5px ls-minus-05px">User
                                    Interface (UI)</span>
                                <p class="w-85 lg-w-95 xs-w-100">We craft visually compelling interfaces that align
                                    with your brand identity and captivate your target users.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end process step item -->
                    <!-- start process step item -->
                    <div class="col process-step-style-11 position-relative">
                        <div class="process-step-item d-flex align-items-start">
                            <div class="process-step-icon-wrap bg-sliding-line col-auto">
                                <span
                                    class="number fs-50 alt-font w-60px h-100px d-flex align-items-end justify-content-center text-concrete-gray lh-20">03</span>
                            </div>
                            <div class="process-content ps-35px xs-ps-25px last-paragraph-no-margin col">
                                <span class="d-inline-block text-dark-gray fw-600 fs-19 mb-5px ls-minus-05px">UX
                                    Research and Testing</span>
                                <p class="w-85 lg-w-95 xs-w-100">We provide actionable insights through user research
                                    and usability testing to optimise your designs</p>
                            </div>
                        </div>
                    </div>
                    <!-- end process step item -->
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="big-section threeD-letter-menu d-flex align-items-center">
            <div class="container">
                <div class="row align-items-center position-relative z-index-9">
                    <div class="col-auto menu-item pe-50px position-relative">
                        <div class="fs-14 fw-500 opacity-6 text-dark-gray position-absolute top-15px left-minus-5px">01
                        </div>
                        <a href="demo-design-agency-single-project-simple.html"
                            class="menu-item-text fs-150 md-fs-120 lh-100 text-dark-gray alt-font ls-minus-3px">
                            <span class="title">cropo</span>
                        </a>
                        <div class="hover-reveal d-none d-xl-block">
                            <div class="hover-reveal__inner">
                                <div class="hover-reveal__img"
                                    style="background-image: url(images/demo-horizontal-portfolio-01.jpg);">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto menu-item pe-50px position-relative">
                        <div class="fs-14 fw-500 opacity-6 text-dark-gray position-absolute top-15px left-minus-5px">02
                        </div>
                        <a href="demo-design-agency-single-project-simple.html"
                            class="menu-item-text fs-150 md-fs-120 lh-100 text-dark-gray alt-font ls-minus-3px">
                            <span>grino</span>
                        </a>
                        <div class="hover-reveal d-none d-xl-block">
                            <div class="hover-reveal__inner">
                                <div class="hover-reveal__img"
                                    style="background-image: url(images/demo-horizontal-portfolio-02.jpg);">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto menu-item pe-50px position-relative">
                        <div class="fs-14 fw-500 opacity-6 text-dark-gray position-absolute top-15px left-minus-5px">03
                        </div>
                        <a href="demo-design-agency-single-project-simple.html"
                            class="menu-item-text fs-150 md-fs-120 lh-100 text-dark-gray alt-font ls-minus-3px">
                            <span>adidas</span>
                        </a>
                        <div class="hover-reveal d-none d-xl-block">
                            <div class="hover-reveal__inner">
                                <div class="hover-reveal__img"
                                    style="background-image: url(images/demo-horizontal-portfolio-03.jpg);">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto menu-item pe-50px position-relative">
                        <div class="fs-14 fw-500 opacity-6 text-dark-gray position-absolute top-15px left-minus-5px">04
                        </div>
                        <a href="demo-design-agency-single-project-simple.html"
                            class="menu-item-text fs-150 md-fs-120 lh-100 text-dark-gray alt-font ls-minus-3px">
                            <span>squaredo</span>
                        </a>
                        <div class="hover-reveal d-none d-xl-block">
                            <div class="hover-reveal__inner">
                                <div class="hover-reveal__img"
                                    style="background-image: url(images/demo-horizontal-portfolio-04.jpg);">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto menu-item pe-50px position-relative">
                        <div class="fs-14 fw-500 opacity-6 text-dark-gray position-absolute top-15px left-minus-5px">05
                        </div>
                        <a href="demo-design-agency-single-project-simple.html"
                            class="menu-item-text fs-150 md-fs-120 lh-100 text-dark-gray alt-font ls-minus-3px">
                            <span>curo</span>
                        </a>
                        <div class="hover-reveal d-none d-xl-block">
                            <div class="hover-reveal__inner">
                                <div class="hover-reveal__img"
                                    style="background-image: url(images/demo-horizontal-portfolio-05.jpg);">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto menu-item pe-50px position-relative">
                        <div class="fs-14 fw-500 opacity-6 text-dark-gray position-absolute top-15px left-minus-5px">06
                        </div>
                        <a href="demo-design-agency-single-project-simple.html"
                            class="menu-item-text fs-150 md-fs-120 lh-100 text-dark-gray alt-font ls-minus-3px">
                            <span>okios</span>
                        </a>
                        <div class="hover-reveal d-none d-xl-block">
                            <div class="hover-reveal__inner">
                                <div class="hover-reveal__img"
                                    style="background-image: url(images/demo-horizontal-portfolio-06.jpg);">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto menu-item pe-50px position-relative">
                        <div class="fs-14 fw-500 opacity-6 text-dark-gray position-absolute top-15px left-minus-5px">07
                        </div>
                        <a href="demo-design-agency-single-project-simple.html"
                            class="menu-item-text fs-150 md-fs-120 lh-100 text-dark-gray alt-font ls-minus-3px">
                            <span>supo</span>
                        </a>
                        <div class="hover-reveal d-none d-xl-block">
                            <div class="hover-reveal__inner">
                                <div class="hover-reveal__img"
                                    style="background-image: url(images/demo-horizontal-portfolio-10.jpg);">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto menu-item pe-50px position-relative">
                        <div class="fs-14 fw-500 opacity-6 text-dark-gray position-absolute top-15px left-minus-5px">08
                        </div>
                        <a href="demo-design-agency-single-project-simple.html"
                            class="menu-item-text fs-150 md-fs-120 lh-100 text-dark-gray alt-font ls-minus-3px">
                            <span>overload</span>
                        </a>
                        <div class="hover-reveal d-none d-xl-block">
                            <div class="hover-reveal__inner">
                                <div class="hover-reveal__img"
                                    style="background-image: url(images/demo-horizontal-portfolio-11.jpg);">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto menu-item pe-50px position-relative">
                        <div class="fs-14 fw-500 opacity-6 text-dark-gray position-absolute top-15px left-minus-5px">09
                        </div>
                        <a href="demo-design-agency-single-project-simple.html"
                            class="menu-item-text fs-150 md-fs-120 lh-100 text-dark-gray alt-font ls-minus-3px">
                            <span>Reebok</span>
                        </a>
                        <div class="hover-reveal d-none d-xl-block">
                            <div class="hover-reveal__inner">
                                <div class="hover-reveal__img"
                                    style="background-image: url(images/demo-horizontal-portfolio-12.jpg);">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="pt-0 overflow-hidden">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 col-lg-6 text-center text-lg-start align-self-end"
                        data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h1 class="alt-font text-uppercase text-dark-gray ls-minus-2px w-90 md-w-100">Why choose our
                            design agency?</h1>
                    </div>
                    <div class="col-12 col-lg-6 text-uppercase">
                        <div class="outside-box-right-20 position-relative">
                            <div class="position-absolute top-30px left-minus-150px z-index-9 md-left-0px d-lg-block d-none"
                                data-bottom-top="transform: rotate(0deg) translateY(0)"
                                data-top-bottom="transform:rotate(50deg) translateY(0)">
                                <img class="w-230px" alt="" data-cfsrc="images/demo-design-agency-02.png"
                                    style="display:none;visibility:hidden;"><noscript><img
                                        src="images/demo-design-agency-02.png" class="w-230px"
                                        alt=""></noscript>
                            </div>
                            <div class="fs-350 xl-fs-300 lg-fs-250 xs-fs-170 lh-300 word-break-normal alt-font text-sliding-line bg-base-color  ls-minus-5px"
                                data-bottom-top="transform:scale(1, 1) translate3d(0px, 0px, 0px);"
                                data-top-bottom="transform:scale(1, 1) translate3d(-70px, 0px, 0px);">expertise</div>
                        </div>
                    </div>
                </div>
                <div class="row mb-8">
                    <div class="col-12"
                        data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div class="row g-0 align-items-center text-center text-sm-start">
                            <div class="col-12">
                                <div class="separator-line-5px w-100 bg-medium-gray opacity-3 bg-sliding-line"></div>
                            </div>
                            <div class="col-sm-1 text-center xs-mt-20px">
                                <span class="text-dark-gray fs-16 ls-minus-1px fw-600">01</span>
                            </div>
                            <div class="col-sm-3 offset-sm-1">
                                <span class="fw-600 text-dark-gray fs-22 ls-minus-05px">Liberalistic</span>
                            </div>
                            <div class="col-sm-7 p-35px sm-p-25px xs-p-20px xs-pt-10px last-paragraph-no-margin">
                                <p class="w-95 sm-w-100">We are excited for our work and how it positively impacts
                                    clients. With over 12 years of experience we have been constantly providing
                                    solutions.</p>
                            </div>
                        </div>
                        <div class="row g-0 align-items-center text-center text-sm-start">
                            <div class="col-12">
                                <div class="separator-line-5px w-100 bg-medium-gray opacity-3 bg-sliding-line"></div>
                            </div>
                            <div class="col-sm-1 text-center xs-mt-20px">
                                <span class="text-dark-gray fs-16 ls-minus-1px fw-600">02</span>
                            </div>
                            <div class="col-sm-3 offset-sm-1">
                                <span class="fw-600 text-dark-gray fs-22 ls-minus-05px">Knowledge</span>
                            </div>
                            <div class="col-sm-7 p-35px sm-p-25px xs-p-20px xs-pt-10px last-paragraph-no-margin">
                                <p class="w-95 sm-w-100">Our team consists of industry's brightest digital geeks and
                                    that we are proud of. We are a one team consisting of passionate professionals.</p>
                            </div>
                        </div>
                        <div class="row g-0 align-items-center text-center text-sm-start">
                            <div class="col-12">
                                <div class="separator-line-5px w-100 bg-medium-gray opacity-3 bg-sliding-line"></div>
                            </div>
                            <div class="col-sm-1 text-center xs-mt-20px">
                                <span class="text-dark-gray fs-16 ls-minus-1px fw-600">03</span>
                            </div>
                            <div class="col-sm-3 offset-sm-1">
                                <span class="fw-600 text-dark-gray fs-22 ls-minus-05px">Technology</span>
                            </div>
                            <div class="col-sm-7 p-35px sm-p-25px xs-p-20px xs-pt-10px last-paragraph-no-margin">
                                <p class="w-95 sm-w-100">We are committed to deliver unique digital media solutions
                                    from web design to eCommerce solutions for our clients by using our knowledge.</p>
                            </div>
                            <div class="col-12">
                                <div class="separator-line-5px w-100 bg-medium-gray opacity-3 bg-sliding-line"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center"
                    data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="col-12 col-xl-12 col-lg-10 text-center">
                        <h3 class="alt-font text-dark-gray d-inline-block align-middle text-uppercase mb-0">Let's make
                            something great work together. <a href="demo-design-agency-contact.html"
                                class="text-dark-gray text-decoration-line-bottom-thick">Start a project</a></h3>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="position-relative overflow-hidden lg-bg-black">
            <div id="particles-style-02" class="position-absolute h-100 top-0 left-0 w-100 z-index-1"
                data-particle="true"
                data-particle-options='{"particles":{"number":{"value":10,"density":{"enable":true,"value_area":1843.9238699953512}},"color":{"value":"#ff9857"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":0,"random":false,"anim":{"enable":false,"speed":0.8932849335314796,"opacity_min":0.1,"sync":false}},"size":{"value":4.008530152163807,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":false,"distance":2000,"color":"#ffffff","opacity":0.9620472365193137,"width":4.489553770423464},"move":{"enable":true,"speed":6,"direction":"none","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"window","events":{"onhover":{"enable":true,"mode":"bubble"},"onclick":{"enable":true,"mode":"push"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true}'>
            </div>
            <div class="bg-maire-yellow h-100 position-absolute top-0 left-0" data-bottom-top="width:10%"
                data-center-top="width:100%;"></div>
            <div class="container position-relative z-index-9">
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="fs-180 xs-fs-120 lh-160 xs-lh-112 word-break-normal alt-font text-sliding-line opacity-4 ls-minus-4px position-relative"
                            data-bottom-top="transform:scale(1, 1) translate3d(0px, 0px, 0px);"
                            data-top-bottom="transform:scale(1, 1) translate3d(-50px, 0px, 0px);">Interesting
                            <div class="position-absolute top-minus-50px right-0px right-minus-100px z-index-9"
                                data-bottom-top="transform:scale(1, 1) translate3d(0px, 60px, 0px);"
                                data-top-bottom="transform:scale(1, 1) translate3d(0px, -60px, 0px);">
                                <img class="" alt="" data-cfsrc="images/demo-design-agency-01.png"
                                    style="display:none;visibility:hidden;"><noscript><img
                                        src="images/demo-design-agency-01.png" class=""
                                        alt=""></noscript>
                            </div>
                        </div>
                        <div class="fs-180 xs-fs-120 xs-lh-112 text-base-color word-break-normal alt-font text-center ls-minus-4px"
                            data-bottom-top="transform:scale(1, 1) translate3d(-50px, 0px, 0px);"
                            data-top-bottom="transform:scale(1, 1) translate3d(180px, 0px, 0px);">facts figure</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-4 md-mb-35px text-center text-lg-start">
                        <p class="w-75 mb-40px md-mb-25px lg-w-90 md-w-100">We combine human empathy and intelligent
                            data to provide the <a href="#"
                                class="text-white text-decoration-line-bottom">highest level of satisfaction.</a></p>
                        <a href="#" class="btn btn-medium btn-switch-text btn-base-color btn-box-shadow fw-700">
                            <span>
                                <span class="btn-double-text" data-text="Let's talk now">Let's talk now</span>
                                <span><i class="fa-regular fa-envelope"></i></span>
                            </span>
                        </a>
                    </div>
                    <div class="col-12 col-lg-8">
                        <div class="row g-0 counter-style-04">
                            <div
                                class="col-sm-6 feature-box text-start hover-box dark-hover border-start border-bottom border-color-zeus-grey xs-border-top xs-border-end ps-60px pe-60px pt-40px pb-30px sm-p-30px">
                                <div class="feature-box-content">
                                    <p class="fs-19 text-white mb-30 w-85 xl-w-100 text-light-opacity">Users on
                                        marketplaces we've created in 2023.</p>
                                    <h3 class="vertical-counter d-inline-flex text-white fw-700 ls-minus-2px mt-25"
                                        data-text="+" data-to="8500"><sup class="text-base-color top-0"><i
                                                class="bi bi-arrow-up icon-extra-medium"></i></sup></h3>
                                </div>
                                <div class="feature-box-overlay bg-gradient-dark-transparent"></div>
                            </div>
                            <div
                                class="col-sm-6 feature-box text-start hover-box dark-hover border-start border-bottom border-end border-color-zeus-grey ps-60px pe-60px pt-40px pb-30px lg-p-40px sm-p-30px">
                                <div class="feature-box-content">
                                    <p class="fs-19 text-white mb-30 w-85 xl-w-100 text-light-opacity">Successfully
                                        finished projects with creativity.</p>
                                    <h3 class="vertical-counter d-inline-flex text-white fw-700 ls-minus-2px mt-25"
                                        data-text="+" data-to="660"><sup class="text-base-color top-0"><i
                                                class="bi bi-arrow-up icon-extra-medium"></i></sup></h3>
                                </div>
                                <div class="feature-box-overlay bg-gradient-dark-transparent"></div>
                            </div>
                            <div
                                class="col-sm-6 feature-box text-start hover-box dark-hover border-start border-color-zeus-grey xs-border-bottom xs-border-end ps-60px pe-60px pt-40px pb-30px lg-p-40px sm-p-30px">
                                <div class="feature-box-content">
                                    <p class="fs-19 text-white mb-30 w-85 xl-w-100 text-light-opacity">Monthly visitors
                                        on our e-Commerce platform.</p>
                                    <h3 class="vertical-counter d-inline-flex text-white fw-700 ls-minus-2px mt-25"
                                        data-text="+" data-to="6834"><sup class="text-base-color top-0"><i
                                                class="bi bi-arrow-up icon-extra-medium"></i></sup></h3>
                                </div>
                                <div class="feature-box-overlay bg-gradient-dark-transparent"></div>
                            </div>
                            <div
                                class="col-sm-6 feature-box text-start hover-box dark-hover border-start border-end border-color-zeus-grey xs-border-bottom ps-60px pe-60px pt-40px pb-30px lg-p-40px sm-p-30px">
                                <div class="feature-box-content">
                                    <p class="fs-19 text-white mb-30 w-85 xl-w-100 text-light-opacity">Onboarding
                                        conversions growth increased.</p>
                                    <h3 class="vertical-counter d-inline-flex text-white fw-700 ls-minus-2px mt-25"
                                        data-text="%" data-to="300"><sup class="text-base-color top-0"><i
                                                class="bi bi-arrow-up icon-extra-medium"></i></sup></h3>
                                </div>
                                <div class="feature-box-overlay bg-gradient-dark-transparent"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="overflow-hidden big-section pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xl-4 lg-mb-50px xs-mb-35px"
                        data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <span class="text-dark-gray fw-700 fs-15 mb-20px text-uppercase d-block"><i
                                class="bi bi-heart-fill text-red icon-very-small me-5px"></i>Around the globe</span>
                        <h1 class="alt-font text-dark-gray mb-0 ls-minus-2px">Hear from clients.</h1>
                    </div>
                    <div class="col-12 col-xl-8"
                        data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div class="outside-box-right-35 xs-outside-box-right-0">
                            <div class="swiper magic-cursor"
                                data-slider-options='{ "slidesPerView": 1, "spaceBetween": 60, "loop": true, "parallax": true, "speed": 1200, "pagination": { "el": ".slider-one-slide-pagination", "clickable": true, "dynamicBullets": false }, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "autoplay": { "delay": 5000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 }, "567": { "slidesPerView": 2, "spaceBetween": 30 } }, "effect": "slide" }'>
                                <div class="swiper-wrapper testimonials-style-13">
                                    <!-- start review item -->
                                    <div class="swiper-slide last-paragraph-no-margin" data-swiper-parallax="700">
                                        <span class="fs-15 fw-600 text-uppercase mb-10px d-block ls-1px">@ Herman
                                            miller</span>
                                        <p class="fs-22 lh-36 text-dark-gray ls-minus-05px w-90 lg-w-100">From the day
                                            one, Themezaa has delivered all possible outcomes as demanded. I must say
                                            that all the developers are dedicated.</p>
                                    </div>
                                    <!-- end review item -->
                                    <!-- start review item -->
                                    <div class="swiper-slide last-paragraph-no-margin" data-swiper-parallax="700">
                                        <span class="fs-15 fw-600 text-uppercase mb-10px d-block ls-1px">@ Shoko
                                            mugikura</span>
                                        <p class="fs-22 lh-36 text-dark-gray ls-minus-05px w-90 lg-w-100">Being an
                                            educator, I always thrive for my own blog and so I found Themezaa as my
                                            saviour. They have superior quality of marketing services.</p>
                                    </div>
                                    <!-- end review item -->
                                    <!-- start review item -->
                                    <div class="swiper-slide last-paragraph-no-margin" data-swiper-parallax="700">
                                        <span class="fs-15 fw-600 text-uppercase mb-10px d-block ls-1px">@ Matthew
                                            taylor</span>
                                        <p class="fs-22 lh-36 text-dark-gray ls-minus-05px w-90 lg-w-100">Worked
                                            closely with us and never failed to follow our business requirements. We
                                            must recommend these guys as they are passionate to deliver.</p>
                                    </div>
                                    <!-- end review item -->
                                    <!-- start review item -->
                                    <div class="swiper-slide last-paragraph-no-margin" data-swiper-parallax="700">
                                        <span class="fs-15 fw-600 text-uppercase mb-10px d-block ls-1px">@ Leonel
                                            mooney</span>
                                        <p class="fs-22 lh-36 text-dark-gray ls-minus-05px w-90 lg-w-100">There are
                                            design companies and then there are user experience, design, consulting,
                                            interface design. Simply the great designs and best theme.</p>
                                    </div>
                                    <!-- end review item -->
                                    <!-- start review item -->
                                    <div class="swiper-slide last-paragraph-no-margin" data-swiper-parallax="700">
                                        <span class="fs-15 fw-600 text-uppercase mb-10px d-block ls-1px">@ Herman
                                            miller</span>
                                        <p class="fs-22 lh-36 text-dark-gray ls-minus-05px w-90 lg-w-100">From the day
                                            one, Themezaa has delivered all possible outcomes as demanded. I must say
                                            that all the developers are dedicated.</p>
                                    </div>
                                    <!-- end review item -->
                                    <!-- start review item -->
                                    <div class="swiper-slide last-paragraph-no-margin" data-swiper-parallax="700">
                                        <span class="fs-15 fw-600 text-uppercase mb-10px d-block ls-1px">@ Shoko
                                            mugikura</span>
                                        <p class="fs-22 lh-36 text-dark-gray ls-minus-05px w-90 lg-w-100">Being an
                                            educator, I always thrive for my own blog and so I found Themezaa as my
                                            saviour. They have superior quality of marketing services.</p>
                                    </div>
                                    <!-- end review item -->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div
                                    class="separator-line-5px w-100 bg-medium-gray opacity-3 mt-45px mb-45px xs-mt-30px xs-mb-30px bg-sliding-line">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex justify-content-sm-start justify-content-center">
                                    <!-- start slider navigation -->
                                    <div class="slider-one-slide-prev-1 text-dark-gray swiper-button-prev slider-navigation-style-04 bg-light-medium-gray h-65px w-65px"
                                        tabindex="0" role="button" aria-label="Previous slide"><i
                                            class="fa-solid fa-arrow-left"></i></div>
                                    <div class="slider-one-slide-next-1 text-dark-gray swiper-button-next slider-navigation-style-04 bg-light-medium-gray h-65px w-65px"
                                        tabindex="0" role="button" aria-label="Next slide"><i
                                            class="fa-solid fa-arrow-right"></i></div>
                                    <!-- end slider navigation -->
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div
                                    class="d-flex align-items-center justify-content-center justify-content-sm-end xs-mt-30px">
                                    <div class="fw-800 fs-60 text-dark-gray me-15px ls-minus-1px">4.82</div>
                                    <div class="text-center">
                                        <div
                                            class="bg-base-color text-white border-radius-30px ps-20px pe-20px fs-14 ls-minus-1px">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </div>
                                        <span class="text-dark-gray fs-13 fw-700 text-uppercase">Clutch review</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="position-relative overflow-hidden">
            <div class="fs-300 xl-fs-180 sm-fs-150 xs-fs-100 word-break-normal alt-font text-end text-sliding-line bg-base-color ls-minus-1px position-absolute right-minus-250px md-right-minus-0px bottom-minus-130px lg-bottom-minus-100px md-bottom-minus-70px sm-bottom-minus-50px xs-bottom-minus-30px"
                data-bottom-top="transform:scale(1, 1) translate3d(0px, 0px, 0px);"
                data-top-bottom="transform:scale(1, 1) translate3d(-150px, 0px, 0px);">design agency</div>
        </section>
        <!-- end section -->
    </div>
    <!-- start footer -->
    <footer class="bg-base-color footer-sticky background-position-left-top"
        style="background-image: url(images/demo-design-agency-vertical-line-footer-bg.svg)">
        <div class="container">
            <div class="row align-items-end mb-9">
                <div class="col-lg-2 md-mb-15px text-center text-md-start">
                    <a href="demo-design-agency.html" class="footer-logo">
                        <img data-at2x="images/demo-design-agency-footer-logo-black@2x.png" alt=""
                            data-cfsrc="images/demo-design-agency-footer-logo-black.png"
                            style="display:none;visibility:hidden;"><noscript><img
                                src="images/demo-design-agency-footer-logo-black.png"
                                data-at2x="images/demo-design-agency-footer-logo-black@2x.png"
                                alt=""></noscript>
                    </a>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-6 offset-lg-1 text-center text-md-start sm-mb-25px">
                    <span
                        class="fw-600 text-decoration-line-bottom-medium fs-22 text-dark-gray w-90 xl-w-95 sm-w-100 ls-minus-05px">Crafto
                        is a global design studio.</span>
                    <span class="fs-22 text-dark-gray w-90 xl-w-95 sm-w-100 ls-minus-05px d-block mt-5px">We create
                        design and brands that help companies grow.</span>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 offset-xl-1 text-center text-md-start">
                    <ul class="fs-20 ls-minus-05px fw-600 sm-mb-5px">
                        <li><a href="demo-design-agency-about.html">Agency</a></li>
                        <li><a href="demo-design-agency-work.html">Projects</a></li>
                        <li><a href="demo-design-agency-expertise.html">Expertise</a></li>
                        <li><a href="demo-design-agency-contact.html">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 text-center text-md-start">
                    <ul class="fs-20 ls-minus-05px fw-600">
                        <li><a href="https://www.facebook.com/" target="_blank">Facebook</a></li>
                        <li><a href="http://www.dribbble.com/" target="_blank">Dribbble</a></li>
                        <li><a href="http://www.behance.com/" target="_blank">Behance</a></li>
                        <li><a href="http://www.linkedin.com/" target="_blank">Linkedin</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 text-center text-lg-start md-mb-15px">
                    <ul class="list-style-05 text-dark-gray fs-18 fw-600">
                        <li>LDN</li>
                        <li>NYC</li>
                        <li>SYD</li>
                        <li>DXB</li>
                        <li>SGP</li>
                        <li>AHM</li>
                    </ul>
                </div>
                <div class="col-lg-4 text-center text-lg-start">
                    <span class="text-dark-gray ls-minus-05px">&copy; 2024 Crafto. <span class="fw-600">The design
                            agency</span></span>
                </div>
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
