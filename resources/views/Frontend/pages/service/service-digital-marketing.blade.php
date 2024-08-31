@extends('Frontend.layout.app')
@section('content')
    @php
        $items = [
            [
                'title' => 'Content Writing',
                'description' =>
                    'Enhance your online presence with well-written blogs, providing valuable information to your audience and improving your website’s search engine ranking.',
            ],
            [
                'title' => 'SEO',
                'description' =>
                    'Increase your website’s visibility and search engine ranking with on-page and off-page techniques, boosting your authority and improving search performance.',
            ],
            [
                'title' => 'Content Creation',
                'description' =>
                    'Create visually appealing and informative content across various platforms to engage your audience.',
            ],
            [
                'title' => 'Social Media Management',
                'description' =>
                    'Build brand awareness, engagement, and customer loyalty through strategic promotion and interaction on social media platforms.',
            ],
            [
                'title' => 'Social Media Advertising',
                'description' =>
                    'Build brand awareness, engagement, and customer loyalty through strategic promotion and interaction on social media platforms.',
            ],
            [
                'title' => 'PPC',
                'description' =>
                    'Drive targeted traffic to your website with strategic online ads, paying only for actual clicks to make the most of your advertising budget.',
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
                            Get Strategic <span class="text-primary">Digital and Content marketing</span> services
                        </h1>
                        <p class="pt-2">
                            A strong marketing strategy helps your business build trust and brand loyalty, ensuring repeat
                            customers and long-term success. Whether it’s through a strategic Google Ads Campaign,
                            SEO-focused content, tailored email marketing, or a combination of all three, our range of
                            digital marketing services put you in front of the right customers.
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
                <h3>Our <span class="text-primary">Digital Marketing</span> Services</h3>
                <p class="pt-3">
                    Discover How Our Comprehensive Digital Marketing Services Provide Tailored Solutions, Enhance User
                    Experience, Boost Performance, and Help Your Business Achieve Its Online Goals Effectively and
                    Efficiently
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
                    We work with clients from a range of sectors and each has their unique marketing goals. This allows our
                    team to develop creative solutions, working closely with our clients to understand their business on a
                    deeper level. Working with a variety of businesses means we have in-depth knowledge of different
                    industries and what it takes to achieve results. Take a look at our portfolio and the projects we've
                    worked on!
                </p>
            </div>
        </div>
        <div class="row pt-2 pt-md-3">
            <img class="d-none d-md-block" src="{{ asset('Frontend/images/Services/sr-2.svg') }}"
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
