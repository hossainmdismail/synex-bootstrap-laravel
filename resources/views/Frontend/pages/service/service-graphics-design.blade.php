@extends('Frontend.layout.app')
@section('content')
    @php
        $items = [
            [
                'title' => 'Tailor-Made Design Solutions',
                'description' =>
                    'Unlock your brand’s ultimate potential with our custom graphic design services - unparalleled visual identities that move in time with the pulse of the audience. From motion graphics design services to graphic design and branding services, we offer a wide array of services catering to each particular need.',
            ],
            [
                'title' => 'Branding Made Easy',
                'description' =>
                    'Give your enterprise a brighter edge with our range of graphic designing services and affordable graphic design services that blend creativity and strategy. We will make branding simple, clear, and effective to keep your competitive advantage in the market.',
            ],
            [
                'title' => 'Creative Support 24/7',
                'description' =>
                    "Our team will not rest day and night to give you graphic design services for which you will also get the required support at any time of the day. Be it custom graphic design services or graphic design and branding services, we shall be delighted to contribute toward the success of your venture.",
            ],
            [
                'title' => 'Flexible and Affordable Solutions',
                'description' =>
                    'Get the ease of our reasonably priced graphic design services, which suffice any need for budgeting purposes without compromising the quality. Our custom graphic design services will enable you to get stunning results on your terms, anytime, and just the way you want them.',
            ],
            [
                'title' => 'All-Inclusive Design Hub',
                'description' =>
                    'Avail all design requirements in one place through our graphic designing services. From motion graphics design services to graphic design and branding services, we offer one platform covering everything under your visual communication strategy.',
            ],
            [
                'title' => 'On-Demand Creativity',
                'description' =>
                    'With our customized graphic design services, you request designs tailored according to the evolution of your business. Be it graphic design and branding services or creative motion graphics design services; we adjust to your specific needs in the shortest time with the best possible outcome.',
            ],
            [
                'title' => 'Seamless Integration',
                'description' =>
                    'Our designing services are meant to integrate into your workflow seamlessly for a smooth transition and consistency in branding. We provide solutions ranging from affordable graphic design services to comprehensive graphic design and branding services that easily fit into the operation of your business.',
            ],
            [
                'title' => 'Speed and Precision',
                'description' =>
                    'Get quick turnarounds while not compromising on quality. We offer motion graphics design services and custom graphic design services with precision and creativity, impactful, and right in tune with your brand’s vision.',
            ],
            [
                'title' => 'Scalable Design Solutions',
                'description' =>
                    'Our graphic design and branding services grow with your business demands. Be it an affordable range of a startup needing graphic design services or a well-established brand seeking custom graphic design services, we have solutions that grow with you.',
            ],
        ];
    @endphp
    @include('Frontend.layout.calendly')

    <section class="container-fluid py-5 service-page sp-img-7 overflow-hidden"
        style="background-image: url({{ asset('Frontend/images/Services/srb-8.webp') }})">
        <div class="container py-5">
            <div class="row py-3 py-md-5">
                <div class="col-md-6 px-4 px-md-2 position-relative">
                    <div class="bd-top">
                        <span class="text-primary">Graphics Design</span>
                        <h1 class="pt-2">
                            Expert <span class="text-primary">Graphic Design Services:</span> For Every Requirement
                        </h1>
                        <p class="pt-2">
                            From customized designs to branding and motion graphics, our professional graphic design services aim to meet all your creative needs. Whether you need an economical solution or a specialized service, we design customized solutions that enhance your brand's visual identity.
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
                <h3>The Benefits of <span class="text-primary">Collaborating</span>  with Us</h3>
                <p class="pt-3">
                    Enter a world where creativity and strategy meet with the finest graphic design services. Understand why companies from all walks of life trust us for creating a visually attractive brand. Here is what sets us apart to make us your go-to choice for all your design needs.
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
                <h3>How We <span class="text-primary">Design </span></h3>
                <p class="pt-3">
                    While you take care of your business, let us help you translate your ideas into graphical formats by partnering with us in graphic design service. From preliminary analyses of graphic design and branding services to post-implementation support for customized graphic design services, we take care of everything. Our highly experienced designers and project managers ensure every design project is executed precisely, creatively, and on time.
                </p>
            </div>
        </div>
        <div class="row pt-2 pt-md-3">
            <img class="d-none d-md-block" src="{{ asset('Frontend/images/Services/sr-8.svg') }}"
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
                                <li>Brand Analysis</li>
                                <li>Target Audience Analysis</li>
                                <li>Analysis of Designs Required</li>
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
                                <li>Brand Objectives</li>
                                <li>Outline Required Graphic Design Services</li>
                                <li>Determine Timeline for the Project</li>
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
                                <li>Brainstorm on Visual Concept</li>
                                <li>Develop Motion Graphics Concepts</li>
                                <li>Sketch Initial Design Concepts</li>
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
                                <li>Access Graphic Design Services</li>
                                <li>Iterate on Designs, Refine, and Revise</li>
                                <li>Integrate Pocket-Friendly Graphic Design Solution</li>
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
                                <li>Quality Check</li>
                                <li>Present Final Design for Approval</li>
                                <li>Deliver Final Files & Ongoing Support</li>
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
