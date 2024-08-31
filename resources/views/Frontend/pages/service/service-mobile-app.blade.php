@extends('Frontend.layout.app')
@section('content')
    @php
        $items = [
            [
                'title' => 'Centralized Application Design Platform',
                'description' =>
                    'Create your application design and development activities in one location, accessible from any device. Automate processes and collaborate in real-time for ultimate productivity and innovation',
            ],
            [
                'title' => 'Simplified Development Workflow',
                'description' =>
                    'Achieve more in half the time with a platform built to be intuitive, fast, and powerful. The tools in our platform make the design and development of an application intuitive, reducing unnecessary overhead and accelerating project completion.',
            ],
            [
                'title' => '24x7 Development Support',
                'description' =>
                    'Access to expert support at any time via our 24x7 support team. Whether you are facing any kind of technical issues or need guidance, we will always be ready to help you overcome these issues and keep your development on track.',
            ],
            [
                'title' => 'On-demand customization to meet unique needs',
                'description' =>
                    'Customize our application design and development tools to suit your needs. With flexible, custom solutions, we provide you with all it takes for your application to deliver outstanding user experiences.',
            ],
            [
                'title' => 'Freedom to develop your way',
                'description' =>
                    'With our flexible pricing model, you have complete freedom and are in full control when designing an app, without being locked into any commitments for the long term. Use our platform whenever you need it and stop using it whenever you want.',
            ],
            [
                'title' => 'Easy onboarding of projects',
                'description' =>
                    'Make the switch to our app design and development platform without a hitch. Our easy onboarding and data migration process gets you off to a flying start, with no hassles to contend with.',
            ],
            [
                'title' => 'The all-in-one suite for app development',
                'description' =>
                    'Our platform provides the all-in-one suite for designing and developing apps, bringing all your tools and resources together in one place for efficiency and collaboration.',
            ],
            [
                'title' => 'Efficient, User-Friendly Tools',
                'description' =>
                    'Boost your designing and development of apps with our user-friendly platform built for efficiency and ease of use. Simplify everything from concept to deployment.',
            ],
            [
                'title' => 'Seamless transition to a better platform',
                'description' =>
                    'Seamlessly port your application development projects onto our platform. We guarantee a seamless transition so that you can focus on creating fantastic applications instead of becoming entangled in technical problems.',
            ],
        ];
    @endphp
    @include('Frontend.layout.calendly')

    <section class="container-fluid py-5 service-page overflow-hidden"
        style="background-image: url({{ asset('Frontend/images/Services/srb-3.webp') }})">
        <div class="container py-5">
            <div class="row py-3 py-md-5">
                <div class="col-md-6 px-4 px-md-2 position-relative">
                    <div class="bd-top">
                        <span class="text-primary">Mobile App Development</span>
                        <h1 class="pt-2">
                            Building a <span class="text-primary"> Customized Android/iOS Mobile App: </span>It hence follows that, design with development.
                        </h1>
                        <p class="pt-2">
                            We pride ourselves on the design and development of mobile applications from conceptualization to engaging and user-friendly mobile experiences. Bespoke solutions mean seamlessness and intuitiveness in design, enhancing interaction with the users for better conversion rates.
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
                <h3>
                    The Advantages of Partnering with Us for <br class="d-none d-md-block"><span class="text-primary">App Design and Development</span>
                </h3>
                <p class="pt-3">
                    Welcome to a whole new dimension in designing and developing applications with our innovative platform. Read why businesses from all over the world rely on us to develop their ideas into successful applications. Here's how we revolutionize the process of designing and developing an application to make it successful and innovative
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
                <h3>How We <span class="text-primary">Work</span></h3>
                <p class="pt-3">
                    When you outsource mobile app development services to SynexDigital, you can enjoy peace of mind and
                    focus on your business. We handle everything, from initial business analysis to ongoing post-release
                    support. Our effective project management and highly skilled team guarantee the delivery of your
                    requested project with the utmost quality and precision.
                </p>
            </div>
        </div>
        <div class="row pt-2 pt-md-3">
            <img class="d-none d-md-block" src="{{ asset('Frontend/images/Services/sr-3.svg') }}"
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
                                <li>Analysis</li>
                                <li>Set Objectives</li>
                                <li>Risk Assessment</li>
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
                                <li>Wireframing</li>
                                <li>UI/UX Design</li>
                                <li>Prototype Development</li>
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
                                <li>Technical Setup</li>
                                <li>Coding</li>
                                <li>Integration</li>
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
                                <li>Functional Testing</li>
                                <li>Performance Testing</li>
                                <li>Bug Fixing</li>
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
                                <li>Launch Preparation</li>
                                <li>User Training</li>
                                <li>Ongoing Maintenance</li>
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
