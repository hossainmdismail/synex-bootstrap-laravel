@extends('Frontend.layout.app')
@section('content')
    @php
        $items = [
            [
                'title' => 'iOS App Development',
                'description' =>
                    "As a full-stack iOS development company, we build successful custom iPhone apps with a team of expert developers.",
            ],
            [
                'title' => 'Android App Development',
                'description' =>
                    "Our Android development services cater to businesses of all sizes, delivering reliable custom apps by skilled developers.",
            ],
            [
                'title' => 'Cross-platform App Development',
                'description' =>
                    "We build cross-platform apps and web experiences across industries, using HTML5, CSS3, JavaScript, and responsive design.",
            ],
            [
                'title' => 'Mobile App Strategy',
                'description' =>
                    "Get a tailored mobile app strategy aligned with your business needs. Our developers streamline the process, reducing time to market and costs.",
            ],
            [
                'title' => 'Mobile App Design',
                'description' =>
                    "We create custom mobile apps that showcase your brand and deliver exceptional user experiences across all platforms.",
            ],
            [
                'title' => 'Mobile Support & Maintenance',
                'description' =>
                    "We offer post-launch support and maintenance for performance, compliance, and security, with 24/5 support for risk management.",
            ],
            [
                'title' => 'iOT Apps',
                'description' =>
                    "Build secure, scalable iOS apps with our expert developers, ensuring futuristic and in-demand solutions.",
            ],
            [
                'title' => 'Enterprise Mobility',
                'description' =>
                    "We offer enterprise mobility services: MDM, app development, security solutions, and consulting for mobile strategies.",
            ],
        ];
    @endphp
    @include('Frontend.layout.calendly')

    <section class="container-fluid py-5 service-page overflow-hidden">
        <div class="container py-5">
            <div class="row py-3 py-md-5">
                <div class="col-md-6 px-4 px-md-2 position-relative">
                    <div class="bd-top">
                        <span class="text-primary">Mobile App Development</span>
                        <h1 class="pt-2">
                            Custom <span class="text-primary">Mobile App Development</span> Services Tailored to Your Business Needs
                        </h1>
                        <p class="pt-2">
                            Build stunning mobile apps that offer sophisticated features and drive user adoption. Device compatibility, interoperability, scalability —we cover it all.
                        </p>
                        <div class="pt-4">
                            <button class="btn btn-primary btn-default">View Project</button>
                            <button class="btn btn-outline-primary btn-default">Get in touch</button>
                        </div>
                    </div>
                    <div class="bg">
                        <div class="position-relative service-middlebox">
                            <svg class="service-image-bg" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs"
                                width="1440" height="560" preserveAspectRatio="none" viewBox="0 0 1440 560">
                                <g mask="url(&quot;#SvgjsMask1012&quot;)" fill="none">
                                    <path
                                        d="M442.86 623.26C629.7 588.92 712.45 124.57 1012 119.79 1311.55 115.01 1435.26 247.79 1581.14 248.59"
                                        stroke="rgba(51,121,194,0.58)" stroke-width="2"></path>
                                    <path
                                        d="M293.63 661.83C437.3 642.39 513.32 312.51 754.14 309.36 994.96 306.21 984.39 379.36 1214.64 379.36 1444.9 379.36 1558.7 309.56 1675.15 309.36"
                                        stroke="rgba(51,121,194,0.58)" stroke-width="2"></path>
                                    <path
                                        d="M687.77 632.97C854.78 598.49 925.29 169.86 1185.47 166.49 1445.64 163.12 1552.3 326.85 1683.16 328.89"
                                        stroke="rgba(51,121,194,0.58)" stroke-width="2"></path>
                                    <path
                                        d="M414.39 574.39C571.75 523.51 600.61 79.8 839.12 67.22 1077.63 54.64 1051.49 137.22 1263.86 137.22 1476.22 137.22 1580.97 67.45 1688.59 67.22"
                                        stroke="rgba(51,121,194,0.58)" stroke-width="2"></path>
                                    <path
                                        d="M247.52 610.99C428.95 596.85 555.2 236 871.01 235.35 1186.82 234.7 1332.71 407.34 1494.5 408.95"
                                        stroke="rgba(51,121,194,0.58)" stroke-width="2"></path>
                                </g>
                                <defs>
                                    <mask id="SvgjsMask1012">
                                        <rect width="1440" height="560" fill="#ffffff"></rect>
                                    </mask>
                                </defs>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Service items --}}
    <section class="container py-5">
        <div class="row pb-4">
            <div class="col-md-6 m-auto text-center">
                <h3>Our <span class="text-primary">Mobile App Development</span> Services</h3>
                <p class="pt-3">
                    We offer mobile app development services for all stages of the development process, so regardless of whether you are starting from scratch or modernizing an existing app, we are here to help.
                </p>
            </div>
        </div>
        <div class="row flex g-4">
            @foreach ($items as $item)
                <div class="col-md-4 text-center">
                    <x-service-item title="{{ $item['title'] }}" description="{{ $item['description'] }}" />
                </div>
            @endforeach
        </div>
    </section>
    {{-- How we work --}}
    <section class="container py-5">
        <div class="row pb-4">
            <div class="col-md-8 m-auto text-center">
                <h3>How We <span class="text-primary">Work</span> </h3>
                <p class="pt-3">
                    When you outsource mobile app development services to SynexDigital, you can enjoy peace of mind and focus on your business. We handle everything, from initial business analysis to ongoing post-release support. Our effective project management and highly skilled team guarantee the delivery of your requested project with the utmost quality and precision.
                </p>
            </div>
        </div>
        <div class="row pt-2 pt-md-3">
            <img class="d-none d-md-block" src="{{ asset('Frontend/images/svg/service1.svg') }}"
                alt="Synex Digital - Ui Ux Desgin" srcset="">

            {{-- Mobile menu --}}
            <div class="accordion d-block d-md-none" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Step 1
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>This is the first item's accordion body.</strong> It is shown by default, until the
                            collapse plugin adds the appropriate classes that we use to style each element. These classes
                            control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                            modify any of this with custom CSS or overriding our default variables. It's also worth noting
                            that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                            does limit overflow.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Step 2
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the
                            collapse plugin adds the appropriate classes that we use to style each element. These classes
                            control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                            modify any of this with custom CSS or overriding our default variables. It's also worth noting
                            that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                            does limit overflow.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Step 3
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the
                            collapse plugin adds the appropriate classes that we use to style each element. These classes
                            control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                            modify any of this with custom CSS or overriding our default variables. It's also worth noting
                            that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                            does limit overflow.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Collaborate -->
    <x-collaborate />

    <!-- News Letter-->
    <x-newsletter />
@endsection
