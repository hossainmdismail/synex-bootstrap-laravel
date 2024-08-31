@extends('Frontend.layout.app')
@section('content')
    @php
        $items = [
            [
                'title' => 'Web Design and Development',
                'description' =>
                    'We create visually appealing, easy to use websites that are unique to your enterprise needs and aims.',
            ],
            [
                'title' => 'Website maintenance',
                'description' =>
                    'We offer continuous backup that guarantees your site is dynamic, safe, and operates seamlessly all the time.',
            ],
            [
                'title' => 'Seo integrated web design',
                'description' =>
                    "Synex Digital provides distinct web designing and developing services tailored according to specific industry requirements along with brand policies.",
            ],
            [
                'title' => 'Custom Web Solutions',
                'description' =>
                    'Your website will look good on any device including computers or mobile phones while still working perfectly.',
            ],
            [
                'title' => 'Responsive Web Design',
                'description' =>
                    "You will get tangible results at the end of each sprint and will be able to refine your product based on user feedback.",
            ],
            [
                'title' => 'Content management system (CMS)',
                'description' =>
                    'We build user-friendly CMSs which give you control over what goes on your site without knowing anything about web designing or programming.',
            ],
        ];
    @endphp
    @include('Frontend.layout.calendly')

    <section class="container-fluid py-5 service-page sp-img-1 overflow-hidden"
        style="background-image: url({{ asset('Frontend/images/Services/srb-1.webp') }})">
        <div class="container py-5">
            <div class="row py-3 py-md-5">
                <div class="col-md-6 px-4 px-md-2 position-relative">
                    <div class="bd-top">
                        <span class="text-primary">Web Development</span>
                        <h1 class="pt-2">
                            Web Designer vs Web Developer
                            <span class="text-primary">Why does it matter & who you need?</span>
                        </h1>
                        <p class="pt-2">
                            Web design and development consist of creating bespoke websites, merging web design and development agency background, and differentiate such roles as web designer vs web developer for web development and design foundations with html5.
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
                <h3> Leverage Our Web Design and Development Services<span class="text-primary"> to Boost Your Business</span> </h3>

                <p class="pt-3">
                    At Synex Digital we focus on building stunning yet navigable custom web design and development through our specialized web design and development services. Let us help you improve your client satisfaction rate and increase your business by using our expertise.
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
                <h3>How We<span class="text-primary"> Work</span></h3>
                <p class="pt-3">
                    Synex Digital is a web designing company that specializes in custom website design and development solutions; it also consults its customers on the things related to web designing, building or management in order to have an attractive yet highly efficient online presence.
                </p>
            </div>
        </div>
        <div class="row pt-2 pt-md-3">
            <img class="d-none d-md-block" src="{{ asset('Frontend/images/Services/sr-1.svg') }}"
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
                                <li>Understand goals</li>
                                <li>Discuss roles</li>
                                <li>Outline deliverables</li>
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
                                <li>Design unique</li>
                                <li>Develop responsive</li>
                                <li>Integrate SEO</li>
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
                                <li>Implement features</li>
                                <li>Test performance</li>
                                <li>Ensure compatibility</li>
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
                                <li>Deploy securely</li>
                                <li>Monitor feedback</li>
                                <li>Optimize speed</li>
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
                                <li>Maintain regularly</li>
                                <li>Support continuously</li>
                                <li>Enhance security</li>
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
