@extends('Frontend.layout.app')

@section('content')

        <!-- start page title -->
        <section class="p-0 top-space-margin page-title-center-alignment">
            <div class="container">
                <div class="row align-items-center justify-content-center extra-very-small-screen">
                    <div class="col-xl-8 col-lg-10 text-center position-relative page-title-extra-large" data-anime='{ "el": "childs", "translateY": [-15, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h1 class="fw-700 text-dark-gray mb-20px ls-minus-2px">Projects</h1>
                        <h2 class="fw-400 ls-0px mb-0">Explore the some of our finest work</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->

        <!-- start Awards section -->
        <section class="half-section pb-0">
            <div class="container">
                <div class="row" data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="col-sm-6 xs-mb-40px" data-bottom-top="transform: translateY(-40px)" data-top-bottom="transform: translateY(40px)">
                        <a href="demo-web-agency-single-project-creative.html"><img class="border-radius-6px" alt="" data-cfsrc="{{asset('Frontend/images')}}/portfolio-73.jpg" style="display:none;visibility:hidden;" /><noscript><img src="{{asset('Frontend/images')}}/portfolio-73.jpg" class="border-radius-6px" alt=""/></noscript></a>
                        <div class="d-flex align-items-center justify-content-center flex-column text-center w-100 mt-40px sm-mt-25px">
                            <a href="https://www.awwwards.com/" target="_blank"><img alt="" data-cfsrc="{{asset('Frontend/images')}}/demo-web-agency-awards-logo-01.png" style="display:none;visibility:hidden;"><noscript><img src="{{asset('Frontend/images')}}/demo-web-agency-awards-logo-01.png" alt=""></noscript></a>
                            <div class="text-dark-gray mt-10px ls-minus-05px"><span class="fw-600">2023</span> - Site of the day winner</div>
                        </div>
                    </div>
                    <div class="col-sm-6 mt-4 xs-mt-0" data-bottom-top="transform: translateY(40px)" data-top-bottom="transform: translateY(-40px)">
                        <a href="demo-web-agency-single-project-creative.html"><img class="border-radius-6px" alt="" data-cfsrc="{{asset('Frontend/images')}}/portfolio-79.jpg" style="display:none;visibility:hidden;" /><noscript><img src="{{asset('Frontend/images')}}/portfolio-79.jpg" class="border-radius-6px" alt=""/></noscript></a>
                        <div class="d-flex align-items-center justify-content-center flex-column text-center w-100 mt-40px sm-mt-25px">
                            <a href="https://www.envato.com/" target="_blank"><img alt="" data-cfsrc="{{asset('Frontend/images')}}/demo-web-agency-awards-logo-03.png" style="display:none;visibility:hidden;"><noscript><img src="{{asset('Frontend/images')}}/demo-web-agency-awards-logo-03.png" alt=""></noscript></a>
                            <div class="text-dark-gray mt-10px ls-minus-05px"><span class="fw-600">2021</span> - Site of the day nomination</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->

        <!-- start projects section -->
        <section class="py-0 ps-2 pe-2 sm-p-0">
            <div class="container">
                <div class="row align-items-end mb-8 xs-mt-6">
                    <div class="col-md-9">
                        <div class="outside-box-left-20">
                            <div class="fs-350 xl-fs-300 lg-fs-250 sm-fs-200 xs-fs-120 text-base-color fw-600 ls-minus-20px position-relative d-inline-block word-break-normal" data-bottom-top="transform:scale(1, 1) translate3d(0px, 0px, 0px);" data-top-bottom="transform:scale(1, 1) translate3d(-100px, 0px, 0px);">projects</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 filter-content">
                        <ul class="portfolio-simple portfolio-wrapper grid-loading grid grid-4col xxl-grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large text-center">
                            <li class="grid-sizer"></li>
                            <!-- start portfolio item -->
                            @foreach ($projects as $project)
                                <li class="grid-item selected digital transition-inner-all">
                                    <div class="portfolio-box" data-bottom-top="transform: translateY(40px)" data-top-bottom="transform: translateY(-40px)">
                                        <div class="portfolio-image bg-medium-gray border-radius-6px">
                                            <a href="demo-web-agency-single-project-creative.html"><img alt="" data-cfsrc="{{$project['image']}}" style="display:none;visibility:hidden;" /><noscript><img src="{{$project['image']}}" alt=""/></noscript></a>
                                        </div>
                                        <div class="portfolio-caption pt-35px pb-35px md-pt-25px md-pb-25px">
                                            <a href="demo-web-agency-single-project-creative.html" class="text-dark-gray text-dark-gray-hover fw-600">{{$project['name']}}</a>
                                            <span class="d-inline-block align-middle w-10px separator-line-1px bg-light-gray ms-10px me-10px xl-ms-5px xl-me-5px"></span>
                                            <div class="d-inline-block">{{$project['category']}}</div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            {{-- <li class="grid-item web selected branding transition-inner-all">
                                <div class="portfolio-box" data-bottom-top="transform: translateY(-40px)" data-top-bottom="transform: translateY(40px)">
                                    <div class="portfolio-image bg-medium-gray border-radius-6px">
                                        <a href="demo-web-agency-single-project-creative.html"><img alt="" data-cfsrc="images/portfolio-171.jpg" style="display:none;visibility:hidden;" /><noscript><img src="images/portfolio-171.jpg" alt=""/></noscript></a>
                                    </div>
                                    <div class="portfolio-caption pt-35px pb-35px md-pt-25px md-pb-25px">
                                        <a href="demo-web-agency-single-project-creative.html" class="text-dark-gray text-dark-gray-hover fw-600">Design blast</a>
                                        <span class="d-inline-block align-middle w-10px separator-line-1px bg-light-gray ms-10px me-10px xl-ms-5px xl-me-5px"></span>
                                        <div class="d-inline-block">Photography</div>
                                    </div>
                                </div>
                            </li> --}}
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            {{-- <li class="grid-item web digital selected branding transition-inner-all">
                                <div class="portfolio-box" data-bottom-top="transform: translateY(40px)" data-top-bottom="transform: translateY(-40px)">
                                    <div class="portfolio-image bg-medium-gray border-radius-6px">
                                        <a href="demo-web-agency-single-project-creative.html"><img alt="" data-cfsrc="images/portfolio-181.jpg" style="display:none;visibility:hidden;" /><noscript><img src="images/portfolio-181.jpg" alt=""/></noscript></a>
                                    </div>
                                    <div class="portfolio-caption pt-35px pb-35px md-pt-25px md-pb-25px">
                                        <a href="demo-web-agency-single-project-creative.html" class="text-dark-gray text-dark-gray-hover fw-600">Herbal beauty</a>
                                        <span class="d-inline-block align-middle w-10px separator-line-1px bg-light-gray ms-10px me-10px xl-ms-5px xl-me-5px"></span>
                                        <div class="d-inline-block">Application</div>
                                    </div>
                                </div>
                            </li> --}}
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            {{-- <li class="grid-item web selected digital transition-inner-all">
                                <div class="portfolio-box" data-bottom-top="transform: translateY(-40px)" data-top-bottom="transform: translateY(40px)">
                                    <div class="portfolio-image bg-medium-gray border-radius-6px">
                                        <a href="demo-web-agency-single-project-creative.html"><img alt="" data-cfsrc="images/portfolio-173.jpg" style="display:none;visibility:hidden;" /><noscript><img src="images/portfolio-173.jpg" alt=""/></noscript></a>
                                    </div>
                                    <div class="portfolio-caption pt-35px pb-35px md-pt-25px md-pb-25px">
                                        <a href="demo-web-agency-single-project-creative.html" class="text-dark-gray text-dark-gray-hover fw-600">Cropo identity</a>
                                        <span class="d-inline-block align-middle w-10px separator-line-1px bg-light-gray ms-10px me-10px xl-ms-5px xl-me-5px"></span>
                                        <div class="d-inline-block">Packaging</div>
                                    </div>
                                </div>
                            </li> --}}
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            {{-- <li class="grid-item web branding transition-inner-all">
                                <div class="portfolio-box" data-bottom-top="transform: translateY(-20px)" data-top-bottom="transform: translateY(-80px)">
                                    <div class="portfolio-image bg-medium-gray border-radius-6px">
                                        <a href="demo-web-agency-single-project-creative.html"><img alt="" data-cfsrc="images/portfolio-174.jpg" style="display:none;visibility:hidden;" /><noscript><img src="images/portfolio-174.jpg" alt=""/></noscript></a>
                                    </div>
                                    <div class="portfolio-caption pt-35px pb-35px md-pt-25px md-pb-25px">
                                        <a href="demo-web-agency-single-project-creative.html" class="text-dark-gray text-dark-gray-hover fw-600">Harddot stone</a>
                                        <span class="d-inline-block align-middle w-10px separator-line-1px bg-light-gray ms-10px me-10px xl-ms-5px xl-me-5px"></span>
                                        <div class="d-inline-block">Graphics</div>
                                    </div>
                                </div>
                            </li> --}}
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            {{-- <li class="grid-item web selected digital transition-inner-all">
                                <div class="portfolio-box" data-bottom-top="transform: translateY(-40px)" data-top-bottom="transform: translateY(40px)">
                                    <div class="portfolio-image bg-medium-gray border-radius-6px">
                                        <a href="demo-web-agency-single-project-creative.html"><img alt="" data-cfsrc="images/portfolio-182.jpg" style="display:none;visibility:hidden;" /><noscript><img src="images/portfolio-182.jpg" alt=""/></noscript></a>
                                    </div>
                                    <div class="portfolio-caption pt-35px pb-35px md-pt-25px md-pb-25px">
                                        <a href="demo-web-agency-single-project-creative.html" class="text-dark-gray text-dark-gray-hover fw-600">Violator series</a>
                                        <span class="d-inline-block align-middle w-10px separator-line-1px bg-light-gray ms-10px me-10px xl-ms-5px xl-me-5px"></span>
                                        <div class="d-inline-block">Digital</div>
                                    </div>
                                </div>
                            </li> --}}
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            {{-- <li class="grid-item selected digital transition-inner-all">
                                <div class="portfolio-box" data-bottom-top="transform: translateY(-20px)" data-top-bottom="transform: translateY(-80px)">
                                    <div class="portfolio-image bg-medium-gray border-radius-6px">
                                        <a href="demo-web-agency-single-project-creative.html"><img alt="" data-cfsrc="images/portfolio-176.jpg" style="display:none;visibility:hidden;" /><noscript><img src="images/portfolio-176.jpg" alt=""/></noscript></a>
                                    </div>
                                    <div class="portfolio-caption pt-35px pb-35px md-pt-25px md-pb-25px">
                                        <a href="demo-web-agency-single-project-creative.html" class="text-dark-gray text-dark-gray-hover fw-600">Pixflow studio</a>
                                        <span class="d-inline-block align-middle w-10px separator-line-1px bg-light-gray ms-10px me-10px xl-ms-5px xl-me-5px"></span>
                                        <div class="d-inline-block">Packaging</div>
                                    </div>
                                </div>
                            </li> --}}
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            {{-- <li class="grid-item web branding transition-inner-all">
                                <div class="portfolio-box" data-bottom-top="transform: translateY(-40px)" data-top-bottom="transform: translateY(40px)">
                                    <div class="portfolio-image bg-medium-gray border-radius-6px">
                                        <a href="demo-web-agency-single-project-creative.html"><img alt="" data-cfsrc="images/portfolio-177.jpg" style="display:none;visibility:hidden;" /><noscript><img src="images/portfolio-177.jpg" alt=""/></noscript></a>
                                    </div>
                                    <div class="portfolio-caption pt-35px pb-35px md-pt-25px md-pb-25px">
                                        <a href="demo-web-agency-single-project-creative.html" class="text-dark-gray text-dark-gray-hover fw-600">Potato islands</a>
                                        <span class="d-inline-block align-middle w-10px separator-line-1px bg-light-gray ms-10px me-10px xl-ms-5px xl-me-5px"></span>
                                        <div class="d-inline-block">Design</div>
                                    </div>
                                </div>
                            </li> --}}
                            <!-- end portfolio item -->
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->

        <!-- start section -->
        <section class="pb-4 sm-pt-30px sm-pb-40px overflow-hidden position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 text-center text-sm-start">
                        <div class="outside-box-left-25 xl-outside-box-left-10 sm-outside-box-left-0">
                            <div class="fs-350 xl-fs-250 lg-fs-200 md-fs-170 sm-fs-100 text-dark-gray fw-600 ls-minus-20px word-break-normal">work</div>
                        </div>
                    </div>
                    <div class="col-sm-7 text-center text-sm-end">
                        <div class="outside-box-right-5 sm-outside-box-right-0">
                            <div class="fs-350 xl-fs-250 lg-fs-200 md-fs-170 sm-fs-100 text-base-color fw-600 ls-minus-20px position-relative d-inline-block word-break-normal">together
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->

@endsection
