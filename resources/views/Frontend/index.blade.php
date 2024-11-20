@extends('Frontend.layout.app')

@section('content')
    <!-- start banner -->
    <section
        class="p-0 border-radius-6px full-screen md-h-600px sm-h-450px ipad-top-space-margin position-relative overflow-hidden">
        <div id="particles-style-01" class="position-absolute h-100 top-0 left-0 w-100" data-particle="true"
            data-particle-options='{"particles":{"number":{"value":10,"density":{"enable":true,"value_area":800}},"color":{"value":["#000000", "#69CCFF"]},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":1,"random":false,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":4,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":false,"distance":150,"color":"#ffffff","opacity":0.4,"width":1},"move":{"enable":true,"speed":6,"direction":"none","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":true,"mode":"repulse"},"onclick":{"enable":true,"mode":"push"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true}'>
        </div>
        <div class="looping-wrapper md-h-100"></div>
        <div class="text-base-color absolute-middle-center banner-title fw-600 d-none d-md-inline-block"
            data-anime='{ "el": "lines", "translateX": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
            creative</div>
        <div class="container h-100 position-relative">
            <div class="row align-items-center justify-content-center h-100">
                <div class="col-12 text-center">
                    <div class="fs-120 lh-110 sm-fs-100 text-dark-gray fw-600 ls-minus-4px"
                        data-anime='{ "el": "lines", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 500, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        We're a creative digital agency</div>
                </div>
            </div>
        </div>
    </section>
    <!-- end banner -->

    <!-- start features section -->
    <section class="p-0">
        <div class="container">
            <div class="row justify-content-center align-items-center flex-column flex-sm-row"
                data-anime='{ "el": "childs", "translateX": [15, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <!-- start features box item -->
                <div class="col-auto icon-with-text-style-08 md-mb-10px text-center text-md-start">
                    <div class="feature-box feature-box-left-icon-middle d-inline-flex align-middle">
                        <div class="feature-box-icon me-5px">
                            <span class="text-dark-gray">🧾</span>
                        </div>
                        <div class="feature-box-content">
                            <span class="fs-14 fw-600 text-dark-gray text-uppercase">Full service web design
                                agency</span>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
                <div class="col-auto md-mb-15px d-none d-md-flex">
                    <span
                        class="progress-step-separator bg-dark-gray w-100px lg-w-70px separator-line-1px d-block mx-auto"></span>
                </div>
                <!-- start features box item -->
                <div class="col-auto icon-with-text-style-08 md-mb-10px text-center text-md-start">
                    <div class="feature-box feature-box-left-icon-middle d-inline-flex align-middle">
                        <div class="feature-box-icon me-5px">
                            <span class="text-dark-gray">🚩</span>
                        </div>
                        <div class="feature-box-content">
                            <span class="fs-14 fw-600 text-dark-gray text-uppercase">Located at Dhaka</span>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
                <div class="col-auto md-mb-15px d-none d-md-flex">
                    <span
                        class="progress-step-separator bg-dark-gray w-100px lg-w-70px separator-line-1px d-block mx-auto"></span>
                </div>
                <!-- start features box item -->
                <div class="col-auto icon-with-text-style-08 text-center text-md-start">
                    <div class="feature-box feature-box-left-icon-middle d-inline-flex align-middle">
                        <div class="feature-box-icon me-5px">
                            <span class="text-dark-gray">❤</span>
                        </div>
                        <div class="feature-box-content">
                            <span class="fs-14 fw-600 text-dark-gray text-uppercase">Award winning agency</span>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start Banner section -->
    <section class="position-relative overflow-hidden section-dark">
        <div class="container">
            <div class="row align-items-center position-relative">
                <div class="col-lg-6">
                    <div class="outside-box-left-20 md-outside-box-left-0" data-bottom-top="transform:scale(1.1, 1.1)"
                        data-top-bottom="transform:scale(1, 1)">
                        <img alt="" data-cfsrc="{{ asset('Frontend/images/demo-web-agency-01.jpg') }}"
                            style="display:none;visibility:hidden;" /><noscript><img
                                src="{{ asset('Frontend/images/demo-web-agency-01.jpg') }}" alt="" /></noscript>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 z-index-9 md-mt-35px"
                    data-anime='{ "el": "childs", "translateX": [15, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h1
                        class="text-dark-gray fw-600 mb-40px md-mb-25px outside-box-left-15 md-outside-box-left-0 ls-minus-3px word-break-normal">
                        Business IT Solutions
                        Pioneering Excellence for Your Technological Needs.</h1>
                    <p class="lh-34 w-95 mb-30px lg-w-100">As a Digital Solutions Expert, we are excited to help
                        you through our extensive variety of services
                        to elevate your business in the ever-changing digital landscape. Synex Digital's commercial
                        IT
                        solutions reflect our dedication to excellence. We are your one-stop technological solution
                        supplier, meeting your business's particular demands with precision and competence.</p>
                    <a href="demo-web-agency-about.html"
                        class="btn btn-large btn-expand-ltr text-dark-gray btn-rounded fw-700"><span
                            class="bg-base-color"></span>Explore Our Portfolio</a>
                    <div
                        class="outside-box-right-30 position-absolute right-0px bottom-minus-50px xl-outside-box-right-25 md-outside-box-right-0 d-none d-md-inline-block">
                        <div class="fs-300 xl-fs-250 lg-fs-200 text-base-color fw-600 ls-minus-20px word-break-normal"
                            data-bottom-top="transform:scale(1, 1) translate3d(0px, 0px, 0px);"
                            data-top-bottom="transform:scale(1, 1) translate3d(-100px, 0px, 0px);">about</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start Service section -->
    <section class="p-0">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 m-0 justify-content-center"
                data-anime='{ "el": "childs", "translateY": [40, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <!-- start process step item -->
                <div
                    class="col process-step-style-10 ps-5 pe-5 pt-3 pb-3 sm-mb-20px position-relative mt-40px md-mt-0 hover-box">
                    <div class="process-step-icon-box position-absolute top-minus-15px left-25px md-left-0px">
                        <div class="number d-inline-block fs-90 fw-700 text-outline text-outline-color-extra-medium-gray">
                            01</div>
                    </div>
                    <span class="fs-19 fw-600 text-dark-gray mb-5px d-block position-relative">Management
                        Software</span>
                    <div class="position-relative pb-60px last-paragraph-no-margin">
                        <p class="lh-30 w-90 sm-w-100">ERP Development, CRM Development, Project Management
                            Software, Business Intelligence Software.</p>
                        <a href="{{ route('service.software') }}"
                            class="hover-content d-flex justify-content-center align-items-center icon-box w-45px h-45px rounded-circle bg-base-color border-2">→</a>
                    </div>
                </div>
                <!-- end process step item -->
                <!-- start process step item -->
                <div class="col process-step-style-10 ps-5 pe-5 pt-3 pb-3 sm-mb-20px position-relative hover-box">
                    <div class="process-step-icon-box position-absolute top-minus-15px left-25px md-left-0px">
                        <div class="number d-inline-block fs-90 fw-700 text-outline text-outline-color-extra-medium-gray">
                            02</div>
                    </div>
                    <span class="fs-19 fw-600 text-dark-gray mb-5px d-block position-relative">Software as a
                        Service

                        (SaaS)</span>
                    <div class="position-relative pb-60px last-paragraph-no-margin">
                        <p class="lh-30 w-90 sm-w-100">SaaS Application Development, Product Design, Maintenance
                            and Support.</p>
                        <a href="{{ route('service.saas') }}"
                            class="hover-content d-flex justify-content-center align-items-center icon-box w-45px h-45px rounded-circle bg-base-color border-2">→</a>
                    </div>
                </div>
                <!-- end process step item -->
                <!-- start process step item -->
                <div
                    class="col process-step-style-10 ps-5 pe-5 pt-3 pb-3 sm-mb-20px position-relative mt-40px md-mt-0 hover-box">
                    <div class="process-step-icon-box position-absolute top-minus-15px left-25px md-left-0px">
                        <div class="number d-inline-block fs-90 fw-700 text-outline text-outline-color-extra-medium-gray">
                            03</div>
                    </div>
                    <span class="fs-19 fw-600 text-dark-gray mb-5px d-block position-relative">Web
                        Development</span>
                    <div class="position-relative pb-60px last-paragraph-no-margin">
                        <p class="lh-30 w-90 sm-w-100">Frontend/Backend, Full Stack/CMS, E-commerce Development,
                            Maintenance and Support.</p>
                        <a href="{{ route('service.web-dev') }}"
                            class="hover-content d-flex justify-content-center align-items-center icon-box w-45px h-45px rounded-circle bg-base-color border-2">→</a>
                    </div>
                </div>
                <!-- end process step item -->
                <!-- start process step item -->
                <div class="col process-step-style-10 ps-5 pe-5 pt-3 pb-3 sm-mb-20px position-relative hover-box">
                    <div class="process-step-icon-box position-absolute top-minus-15px left-25px md-left-0px">
                        <div class="number d-inline-block fs-90 fw-700 text-outline text-outline-color-extra-medium-gray">
                            04</div>
                    </div>
                    <span class="fs-19 fw-600 text-dark-gray mb-5px d-block position-relative">Mobile and Apps
                        Development</span>
                    <div class="position-relative pb-60px last-paragraph-no-margin">
                        <p class="lh-30 w-90 sm-w-100">iOS/Android, Custom Development, Maintenance and Support.
                        </p>
                        <a href="{{ route('service.mobile-app') }}"
                            class="hover-content d-flex justify-content-center align-items-center icon-box w-45px h-45px rounded-circle bg-base-color border-2">→</a>
                    </div>
                </div>
                <!-- end process step item -->
                <!-- start process step item -->
                <div
                    class="col process-step-style-10 ps-5 pe-5 pt-3 pb-3 sm-mb-20px position-relative mt-40px md-mt-0 hover-box">
                    <div class="process-step-icon-box position-absolute top-minus-15px left-25px md-left-0px">
                        <div class="number d-inline-block fs-90 fw-700 text-outline text-outline-color-extra-medium-gray">
                            05</div>
                    </div>
                    <span class="fs-19 fw-600 text-dark-gray mb-5px d-block position-relative">Digital
                        Marketing</span>
                    <div class="position-relative pb-60px last-paragraph-no-margin">
                        <p class="lh-30 w-90 sm-w-100">SEO, Google Ads, Meta Ads, Social Media Management, LinkedIn
                            Ads.</p>
                        <a href="{{ route('service.digital-marketing') }}"
                            class="hover-content d-flex justify-content-center align-items-center icon-box w-45px h-45px rounded-circle bg-base-color border-2">→</a>
                    </div>
                </div>
                <!-- end process step item -->
                <!-- start process step item -->
                <div class="col process-step-style-10 ps-5 pe-5 pt-3 pb-3 sm-mb-20px position-relative hover-box">
                    <div class="process-step-icon-box position-absolute top-minus-15px left-25px md-left-0px">
                        <div class="number d-inline-block fs-90 fw-700 text-outline text-outline-color-extra-medium-gray">
                            06</div>
                    </div>
                    <span class="fs-19 fw-600 text-dark-gray mb-5px d-block position-relative">UI UX Design</span>
                    <div class="position-relative pb-60px last-paragraph-no-margin">
                        <p class="lh-30 w-90 sm-w-100">User Interface/Experience Design, Visual Design, User
                            Testing.</p>
                        <a href="{{ route('service.uiux') }}"
                            class="hover-content d-flex justify-content-center align-items-center icon-box w-45px h-45px rounded-circle bg-base-color border-2">→</a>
                    </div>
                </div>
                <!-- end process step item -->
                <!-- start process step item -->
                <div
                    class="col process-step-style-10 ps-5 pe-5 pt-3 pb-3 sm-mb-20px position-relative mt-40px md-mt-0 hover-box">
                    <div class="process-step-icon-box position-absolute top-minus-15px left-25px md-left-0px">
                        <div class="number d-inline-block fs-90 fw-700 text-outline text-outline-color-extra-medium-gray">
                            07</div>
                    </div>
                    <span class="fs-19 fw-600 text-dark-gray mb-5px d-block position-relative">Graphics
                        Design</span>
                    <div class="position-relative pb-60px last-paragraph-no-margin">
                        <p class="lh-30 w-90 sm-w-100">Branding and Identity, Print Design, Digital Design,
                            Illustration, 3D Design.</p>
                        <a href="{{ route('service.graphics-design') }}"
                            class="hover-content d-flex justify-content-center align-items-center icon-box w-45px h-45px rounded-circle bg-base-color border-2">→</a>
                    </div>
                </div>
                <!-- end process step item -->
                <!-- start process step item -->
                <div class="col process-step-style-10 ps-5 pe-5 pt-3 pb-3 sm-mb-20px position-relative hover-box">
                    <div class="process-step-icon-box position-absolute top-minus-15px left-25px md-left-0px">
                        <div class="number d-inline-block fs-90 fw-700 text-outline text-outline-color-extra-medium-gray">
                            08</div>
                    </div>
                    <span class="fs-19 fw-600 text-dark-gray mb-5px d-block position-relative">Video Editing</span>
                    <div class="position-relative pb-60px last-paragraph-no-margin">
                        <p class="lh-30 w-90 sm-w-100">Post-Production, Motion Graphics, Video Production, Editing
                            for Social Media.</p>
                        <a href="{{ route('service.video-edit') }}"
                            class="hover-content d-flex justify-content-center align-items-center icon-box w-45px h-45px rounded-circle bg-base-color border-2">→</a>
                    </div>
                </div>
                <!-- end process step item -->
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start Projects section -->
    <section class="pb-0 pt-0 ps-2 pe-2 lg-pt-3 md-pt-7 sm-p-0">
        <div class="container">
            <div class="row align-items-end mb-6">
                <div class="col-lg-9 col-md-8 d-none d-md-flex">
                    <div class="outside-box-left-25 md-outside-box-left-50">
                        <div class="fs-350 xl-fs-300 lg-fs-250 text-base-color fw-600 ls-minus-20px position-relative d-inline-block word-break-normal"
                            data-bottom-top="transform:scale(1, 1) translate3d(0px, 0px, 0px);"
                            data-top-bottom="transform:scale(1, 1) translate3d(-100px, 0px, 0px);">projects
                            <div class="position-absolute right-minus-100px top-minus-120px z-index-9 md-w-200px d-none d-md-block"
                                data-anime='{ "translateY": [0, 0], "scale": [0.7, 1], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                <img class="animation-rotation" alt=""
                                    data-cfsrc="{{ asset('Frontend') }}/images/demo-web-agency-03.png"
                                    style="display:none;visibility:hidden;"><noscript><img
                                        src="{{ asset('Frontend') }}/images/demo-web-agency-03.png"
                                        class="animation-rotation" alt=""></noscript>
                                <div class="absolute-middle-center w-100 z-index-minus-1"><img alt=""
                                        data-cfsrc="{{ asset('Frontend') }}/images/demo-web-agency-02.png"
                                        style="display:none;visibility:hidden;"><noscript><img
                                            src="{{ asset('Frontend') }}/images/demo-web-agency-02.png"
                                            alt=""></noscript></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 text-start text-md-end">
                    <a href="{{ route('projects') }}"
                        class="btn btn-large btn-expand-ltr text-dark-gray btn-rounded fw-700 mb-50px sm-mb-0"><span
                            class="bg-base-color"></span>Explore projects</a>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center m-md-0">
                <div class="col-12 filter-content">
                    <ul
                        class="portfolio-simple portfolio-wrapper grid-loading grid grid-4col xxl-grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large text-center">
                        <li class="grid-sizer"></li>
                        <!-- start portfolio item -->
                        @foreach ($projects as $project)
                            <li class="grid-item selected digital transition-inner-all">
                                <div class="portfolio-box" data-bottom-top="transform: translateY(40px)"
                                    data-top-bottom="transform: translateY(-40px)">
                                    <div class="portfolio-image bg-medium-gray border-radius-6px">
                                        <a href="demo-web-agency-single-project-creative.html"><img alt=""
                                                data-cfsrc="{{ $project['image'] }}"
                                                style="display:none;visibility:hidden;" /><noscript><img
                                                    src="{{ $project['image'] }}" alt="" /></noscript></a>
                                    </div>
                                    <div class="portfolio-caption pt-35px pb-35px md-pt-25px md-pb-25px">
                                        <a href="demo-web-agency-single-project-creative.html"
                                            class="text-dark-gray text-dark-gray-hover fw-600">{{ $project['name'] }}</a>
                                        <span
                                            class="d-inline-block align-middle w-10px separator-line-1px bg-light-gray ms-10px me-10px"></span>
                                        <div class="d-inline-block">{{ $project['category'] }}</div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                        <!-- end portfolio item -->
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start Awards section -->
    <section>
        <div class="container">
            <div class="row"
                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="col-lg-5 text-center text-lg-start">
                    <h2 class="text-dark-gray fw-600 mb-25px w-90 md-w-100 ls-minus-3px">Honorable awards</h2>
                    <div
                        class="bg-dark-gray border-radius-100px fs-12 text-white ps-25px pe-25px d-inline-block text-uppercase fw-500 mb-10 ls-05px md-mb-30px">
                        Direct from the heart</div>
                    <div class="outside-box-left-35 md-outside-box-left-0 d-none d-md-block md-mb-6">
                        <div class="fs-350 xl-fs-300 lg-fs-250 text-base-color fw-600 ls-minus-20px word-break-normal"
                            data-bottom-top="transform:scale(1, 1) translate3d(0px, 0px, 0px);"
                            data-top-bottom="transform:scale(1, 1) translate3d(-100px, 0px, 0px);">awards</div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 text-center text-lg-start">
                    <p class="w-85 lg-w-100 mb-40px mt-10 md-mt-0 md-mb-25px">We are excited for our work and how
                        it positively impacts clients. With over 4 years of experience we have been constantly
                        providing excellent web solutions.</p>
                    <div class="row border-top border-color-dark-gray g-0">
                        <div class="col-2 text-center align-self-center">
                            <span class="text-dark-gray fs-14 fw-600">1X</span>
                        </div>
                        <div
                            class="col-8 last-paragraph-no-margin ps-30px pe-30px pt-15px pb-15px border-start border-color-dark-gray">
                            <p class="ls-minus-05px">Creative IT - <span class="fw-600 text-dark-gray">Success Meetup
                                    Awards</span></p>
                        </div>
                        <div class="col-2 align-self-center text-center">
                            <span class="text-dark-gray fs-14 fw-600">2023</span>
                        </div>
                    </div>
                    <div class="row border-top border-bottom border-color-dark-gray g-0">
                        <div class="col-2 text-center align-self-center">
                            <span class="text-dark-gray fs-14 fw-600">3X</span>
                        </div>
                        <div
                            class="col-8 last-paragraph-no-margin ps-30px pe-30px pt-15px pb-15px border-start border-color-dark-gray">
                            <p class="ls-minus-05px">Site of the day - <span class="fw-600 text-dark-gray">The
                                    portfolio</span></p>
                        </div>
                        <div class="col-2 align-self-center text-center">
                            <span class="text-dark-gray fs-14 fw-600">2018</span>
                        </div>
                    </div>
                    <div class="row row-cols-2 row-cols-sm-3 align-items-center mt-50px sm-mt-40px justify-content-center">
                        <div class="col xs-mb-30px">
                            <a href="#"><img alt=""
                                    data-cfsrc="{{ asset('Frontend/images/brand/cit.png') }}"
                                    style="display:none;visibility:hidden;" /><noscript><img
                                        src="{{ asset('Frontend/images/brand/cit.png') }}"
                                        alt="" /></noscript></a>
                        </div>
                        <div class="col xs-mb-30px">
                            <a href="#"><img alt=""
                                    data-cfsrc="{{ asset('Frontend') }}/images/demo-web-agency-awards-logo-02.png"
                                    style="display:none;visibility:hidden;" /><noscript><img
                                        src="{{ asset('Frontend') }}/images/demo-web-agency-awards-logo-02.png"
                                        alt="" /></noscript></a>
                        </div>
                        <div class="col">
                            <a href="#"><img alt=""
                                    data-cfsrc="{{ asset('Frontend') }}/images/demo-web-agency-awards-logo-03.png"
                                    style="display:none;visibility:hidden;" /><noscript><img
                                        src="{{ asset('Frontend') }}/images/demo-web-agency-awards-logo-03.png"
                                        alt="" /></noscript></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start Reviews section -->
    <section class="pb-4 lg-pb-6 sm-pb-50px position-relative bg-dark-gray section-dark">
        <div class="cover-background position-absolute h-100 w-100 left-0px top-0px"
            style="background-image: url({{ asset('Frontend') }}/images/demo-web-agency-bg-01.png)"></div>
        <div class="container position-relative">
            <div class="row justify-content-center align-items-center mb-9 xl-mb-5 sm-mb-30px"
                data-anime='{ "el": "childs", "translateX": [15, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="col-lg-5">
                    <div class="mb-15 d-flex align-items-center md-mb-30px">
                        <div class="fw-700 fs-80 text-white me-10px">4.96</div>
                        <div class="text-center">
                            <div
                                class="bg-base-color text-dark-gray border-radius-30px ps-20px pe-20px fs-16 ls-minus-2px">
                                ★★★★★</div>
                            <span class="text-white fs-13 fw-500 text-uppercase">Clutch review</span>
                        </div>
                    </div>
                    <div class="d-flex md-mb-25px">
                        <div
                            class="slider-one-slide-prev-1 bg-sherpa-blue text-white swiper-button-prev slider-navigation-style-04 w-60px h-60px">
                        </div>
                        <div
                            class="slider-one-slide-next-1 bg-sherpa-blue text-white swiper-button-next slider-navigation-style-04 w-60px h-60px">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7 overflow-hidden offset-xl-1">
                    <div class="swiper magic-cursor light"
                        data-slider-options='{ "slidesPerView": 1, "spaceBetween": 40, "loop": true, "autoplay": { "delay": 3000, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "992": { "slidesPerView": 1 }, "768": { "slidesPerView":1 }, "320": { "slidesPerView": 1 } }, "effect": "slide" }'>
                        <div class="swiper-wrapper">
                            <!-- start review item -->
                            <div class="swiper-slide">
                                <h5 class="text-white mb-20px w-90 xl-w-100 lh-42 fw-400">I could not be happier with
                                    the website that Synex Digital created for my business. They took my ideas and
                                    turned them into a stunning, user-friendly website that exceeded my expectations.
                                </h5>
                                <span class="text-base-color fw-600 d-block fs-15 text-uppercase lh-22 ls-2px">@Mahadi
                                    Tahsan</span>
                            </div>
                            <!-- end review item -->
                            <!-- start review item -->
                            <div class="swiper-slide">
                                <h5 class="text-white mb-20px w-90 xl-w-100 lh-42 fw-400">Working with Synex Digital
                                    has been a game-changer for our online visibility. Their SEO team’s expertise and
                                    strategies have propelled our website to the top of search engine rankings. Glad to
                                    hire them on a monthly basis.</h5>
                                <span class="text-base-color fw-600 d-block fs-15 text-uppercase lh-22 ls-2px">@MD
                                    Sydul Amin</span>
                            </div>
                            <!-- end review item -->
                            <!-- start review item -->
                            <div class="swiper-slide">
                                <h5 class="text-white mb-20px w-90 xl-w-100 lh-42 fw-400">Synex Digital’s management
                                    software completely revolutionized our school. For schools that require reliability,
                                    streamlined administration, user-friendly design, and responsive assistance redefine
                                    efficiency!</h5>
                                <span class="text-base-color fw-600 d-block fs-15 text-uppercase lh-22 ls-2px">@Shawon
                                    Islam</span>
                            </div>
                            <!-- end review item -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="separator-line-1px w-100 bg-white opacity-1 mb-6 sm-mb-30px"></div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-5 row-cols-md-3 row-cols-sm-2 clients-style-06 justify-content-center"
                data-anime='{ "el": "childs", "translateY": [0, 0], "scale": [1.1, 1], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <!-- start client item -->
                <div class="col client-box text-center md-mb-40px">
                    <a href="#"><img src="{{ asset('Frontend/images/brand/amazon-web-services.png') }}"
                            class="h-35px" alt=""></a>
                </div>
                <!-- end client item -->
                <!-- start client item -->
                <div class="col client-box text-center md-mb-40px">
                    <a><img src="{{ asset('Frontend/images/brand/Logo-Notion-White-al-vivo.png') }}" class="h-35px"
                            alt=""></a>
                </div>
                <!-- end client item -->
                <!-- start client item -->
                <div class="col client-box text-center md-mb-40px">
                    <a><img src="{{ asset('Frontend/images/brand/meta_PNG7.png') }}" class="h-35px" alt=""></a>
                </div>
                <!-- end client item -->
                <!-- start client item -->
                <div class="col client-box text-center sm-mb-40px">
                    <a><img src="{{ asset('Frontend/images/brand/stripe.png') }}" class="h-35px" alt=""></a>
                </div>
                <!-- end client item -->
                <!-- start client item -->
                <div class="col client-box text-center">
                    <a><img src="{{ asset('Frontend/images/brand/GitHub-Wordmark-White-Dark-Background-Logo.wine.svg') }}"
                            class="h-35px" alt=""></a>
                </div>
                <!-- end client item -->
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start Blogs section -->
    <section class="pb-0">
        @if ($blogs)
            <div class="container">
                <div class="row align-items-center mb-4">
                    <div class="col-md-6 text-center text-md-start sm-mb-20px">
                        <h2 class="fw-600 text-dark-gray mb-0 ls-minus-3px">Latest blogs</h2>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <a href="{{ route('blogs') }}"
                            class="btn btn-large btn-expand-ltr text-dark-gray btn-rounded fw-700"><span
                                class="bg-base-color"></span>Explore all blogs</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 p-md-0">
                        <ul class="blog-classic blog-wrapper grid-loading grid grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large"
                            data-anime='{ "el": "childs", "translateY": [-15, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <li class="grid-sizer"></li>
                            @foreach ($blogs['blogs'] as $blog)
                                <!-- start blog item -->
                                <li class="grid-item">
                                    <div class="card bg-transparent border-0 h-100">
                                        <div class="blog-image position-relative overflow-hidden border-radius-4px">
                                            <a href="{{ route('blog.view', $blog['slug']) }}"><img alt=""
                                                    data-cfsrc="{{ $blog['image'] }}"
                                                    style="display:none;visibility:hidden;"><noscript><img
                                                        src="{{ $blog['image'] }}" alt=""></noscript></a>
                                        </div>
                                        <div class="card-body p-0 pt-30px sm-pt-20px lg-pb-20px">
                                            <span class="fs-14 text-uppercase d-block mb-5px fw-500"><a
                                                    href="{{ route('blog.view', $blog['slug']) }}"
                                                    class="text-dark-gray text-dark-gray-hover fw-700 categories-text">{{ $blog['author'] }}</a>👁<a
                                                    href="#"
                                                    class="blog-date text-medium-gray-hover">{{ $blog['view'] }}</a></span>
                                            <a href="{{ route('blog.view', $blog['slug']) }}"
                                                class="card-title fw-600 fs-17 lh-28 text-dark-gray text-dark-gray-hover d-inline-block w-95 sm-w-100">{{ $blog['title'] }}</a>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                            <!-- end blog item -->
                        </ul>
                    </div>
                </div>
            </div>
        @endif
    </section>
    <!-- end section -->

    <!-- start section -->
    <section class="pb-4 sm-pt-30px sm-pb-40px overflow-hidden position-relative">
        <div class="container">
            <div class="row"
                data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 500, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="col-sm-5 text-center text-sm-start">
                    <div class="outside-box-left-25 xl-outside-box-left-10 sm-outside-box-left-0">
                        <div
                            class="fs-350 xl-fs-250 lg-fs-200 md-fs-170 sm-fs-100 text-dark-gray fw-600 ls-minus-20px word-break-normal">
                            work</div>
                    </div>
                </div>
                <div class="col-sm-7 text-center text-sm-end">
                    <div class="outside-box-right-5 sm-outside-box-right-0">
                        <div
                            class="fs-350 xl-fs-250 lg-fs-200 md-fs-170 sm-fs-100 text-base-color fw-600 ls-minus-20px position-relative d-inline-block word-break-normal">
                            together
                            <div class="position-absolute left-minus-140px top-minus-140px z-index-9 xl-left-minus-110px top-minus-140px xl-top-minus-100px md-top-minus-90px z-index-9 xl-w-230px md-w-200px d-none d-md-block"
                                data-anime='{ "translateY": [-15, 0], "scale": [0.5, 1], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                <img class="animation-rotation" alt=""
                                    data-cfsrc="{{ asset('Frontend') }}/images/demo-web-agency-05.png"
                                    style="display:none;visibility:hidden;"><noscript><img
                                        src="{{ asset('Frontend') }}/images/demo-web-agency-05.png"
                                        class="animation-rotation" alt=""></noscript>
                                <div class="absolute-middle-center w-100 z-index-minus-1"><img alt=""
                                        data-cfsrc="{{ asset('Frontend') }}/images/demo-web-agency-04.png"
                                        style="display:none;visibility:hidden;"><noscript><img
                                            src="{{ asset('Frontend') }}/images/demo-web-agency-04.png"
                                            alt=""></noscript></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
