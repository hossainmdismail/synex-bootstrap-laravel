@extends('Frontend.layout.app')
@section('content')
    @php
        $items = [
            [
                'title' => 'Digital Marketing Strategy Development',
                'description' =>
                    'We create tailored strategies that align with your business goals, ensuring every campaign drives results. Leverage our expertise to navigate the digital landscape effectively.',
            ],
            [
                'title' => 'Social Media Marketing',
                'description' =>
                    'Our Digital Marketing Managers would manage your social media channels, driving engagement and building your brand effortlessly. Trust us to amplify your social media impact.',
            ],
            [
                'title' => 'SEO Optimization',
                'description' =>
                    'Enhance your website’s visibility on search engines, driving organic traffic and boosting your online presence. Choose us to help your business rank higher and reach more customers.',
            ],
            [
                'title' => 'Content Marketing',
                'description' =>
                    'We produce compelling content that resonates with your audience, positioning your brand as a leader in your industry.',
            ],
            [
                'title' => 'Pay-Per-Click Advertising (PPC)',
                'description' =>
                    'Maximize your ROI with targeted PPC campaigns that reach your ideal audience. Partner with us to make every click count and drive more leads.',
            ],
            [
                'title' => 'Email Marketing',
                'description' =>
                    'Drive digital marketing success with our personalized email campaigns that nurture leads and convert them into loyal customers. Grow your business with our email strategies.',
            ],
        ];
    @endphp
    @include('Frontend.layout.calendly')

    <section class="container-fluid py-5 service-page sp-img-2 overflow-hidden"
        style="background-image: url({{ asset('Frontend/images/Services/srb-2.webp') }})">
        <div class="container py-5">
            <div class="row py-3 py-md-5">
                <div class="col-md-6 px-4 px-md-2 position-relative">
                    <div class="bd-top">
                        <span class="text-primary">Digital Marketing</span>
                        <h1 class="pt-2">
                            Get Strategic <span class="text-primary">Digital Marketing</span> with Us
                        </h1>
                        <p class="pt-2">
                            Our all-encompassing digital marketing services can unleash the complete power of your own
                            brand. Our tactics are made for success in digital marketing regardless of whether yours is a
                            small business or a mature company willing to boost. The campaigns that we create will guarantee
                            you that our team’s work is just as effective as a skilled team with certified Digital Marketing
                            Managers from Meta.
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
                <h3>Driving <span class="text-primary">Digital Success</span> with Our Digital Marketing Expertise</h3>
                <p class="pt-3">
                    In today’s competitive landscape, digital marketing is the key to business growth. At Synex Digital, we
                    offer tailored digital marketing services that elevate your brand, especially for small businesses.
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
                <h3>Our Simple <span class="text-primary">Process </span></h3>
                <p class="pt-3">
                    Our digital marketing services provide a seamless process from beginning to end when you use them. This
                    promotes effective strategies that are based on data and adapted specifically to the unique objectives
                    of your brand.
                </p>
            </div>
        </div>
        <div class="row pt-2 pt-md-3">
            <img class="d-none d-md-block mind-map-svg" src="{{ asset('Frontend/images/Services/sr-2.svg') }}"
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
                            <ul>
                                <li>Market Analysis</li>
                                <li>Audience Segmentation</li>
                                <li>Competitor Insights</li>
                            </ul>
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
                            <ul>
                                <li>Digital Marketing Plan</li>
                                <li>Content Strategy</li>
                                <li>Channel Selection</li>
                            </ul>
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
                            <ul>
                                <li>Content Creation</li>
                                <li>Ad Placement</li>
                                <li>Social Media Engagement</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Step 4
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul>
                                <li>Performance Tracking</li>
                                <li>A/B Testing</li>
                                <li>Campaign Adjustments</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Step 5
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul>
                                <li>Detailed Analytics</li>
                                <li>Client Review</li>
                                <li>Continuous Improvement</li>
                            </ul>
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
