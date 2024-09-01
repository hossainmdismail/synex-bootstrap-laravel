@extends('Frontend.layout.app')
@section('content')
    @php
        $items = [
            [
                'title' => 'Unified Management Platform',
                'description' =>
                    'Consolidate all your management tasks in one cloud-based system that can be accessed from anywhere. As a result, no installations are required to maintain the business’s smooth running.',
            ],
            [
                'title' => 'Speed and Efficiency',
                'description' =>
                    'Our current software has been designed for high-speed operation to ease management and increase efficiency',
            ],
            [
                'title' => '24/7 global support',
                'description' =>
                    'We offer availability 24/7 so your management software is running fine with no problems',
            ],
            [
                'title' => 'Tailor Made To Suit Your Requirements',
                'description' =>
                    'Setting up these management software in a way that suits the needs of the management by developing special features to suit your business growth.',
            ],
            [
                'title' => 'Flexible Use, No Contracts',
                'description' =>
                    'Get flexible services as we do not tie you to any contract with our pay-as-you-go services. You can use it on your schedule and even cancel the subscription at will.',
            ],
            [
                'title' => 'Seamless Data Migration',
                'description' =>
                    'Migrate to our platform easily through our free data migration tool, designed to help minimize downtime so you can convert without interruption.',
            ],
            [
                'title' => 'Scalability and Growth',
                'description' =>
                    'It enables operation at any scale which we believe is a great plus for businesses whose needs are likely to increase in the future.',
            ],
            [
                'title' => 'Data Security and Compliance',
                'description' => 'Data Security and Compliance For your data security, we use highly encrypted security features, coupled with meeting the regulatory requirements of the market
                        .',
            ],
            [
                'title' => 'Intuitive User Interface',
                'description' =>
                    'Intuitive interface: With this, your team is able to adapt quickly to the working of the software. This minimizes downtime and further assures high productivity.',
            ],
        ];
    @endphp
    @include('Frontend.layout.calendly')

    <section class="container-fluid py-5 service-page overflow-hidden"
        style="background-image: url({{ asset('Frontend/images/Services/srb-7.webp') }})">
        <div class="container py-5">
            <div class="row py-3 py-md-5">
                <div class="col-md-6 px-4 px-md-2 position-relative">
                    <div class="bd-top">
                        <span class="text-primary">Management Software</span>
                        <h1 class="pt-2">
                            Create a <span class="text-primary">Powerful Online Presence</span> with Our Web Development
                            Expertise
                        </h1>
                        <p class="pt-2">
                            We create remarkable designs that convert into tangible results. Our bespoke graphic design
                            agency services can help you build a consistent brand image across all touchpoints, increase
                            brand engagement and improve conversion rates.
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
                <h3>The <span class="text-primary">Advantages</span> of Partnering with Us</h3>
                <p class="pt-3">
                    Welcome to a new era of efficiency and convenience with our innovative software. Discover why clients
                    around the globe are choosing our platform to transform their agency operations. Here's what sets us
                    apart.
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
                    When you outsource software development services to GoodCore, you can enjoy peace of mind and focus on
                    your business. We handle everything, from initial business analysis to ongoing post-release support. Our
                    effective project management and highly skilled team guarantee the delivery of your requested project
                    with the utmost quality and precision.
                </p>
            </div>
        </div>
        <div class="row pt-2 pt-md-3">
            <img class="d-none d-md-block mind-map-svg" src="{{ asset('Frontend/images/Services/sr-7.svg') }}"
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
                                <li>Risk Management</li>
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
                                <li>Design Planning</li>
                                <li>Feature Mapping</li>
                                <li>Timeline Creation</li>
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
                                <li>Development</li>
                                <li>Testing</li>
                                <li>Iteration</li>
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
                                <li>User Training</li>
                                <li>Feedback Gathering</li>
                                <li>System Optimization</li>
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
                                <li>Implementation</li>
                                <li>Training</li>
                                <li>Ongoing Support</li>
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
