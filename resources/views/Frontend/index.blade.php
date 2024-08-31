@extends('Frontend.layout.app')
@section('content')
    {{-- Static Data --}}
    @php
        $services = [
            [
                'name' => 'Web Development',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'url' => route('service.web-dev'),
            ],
            [
                'name' => 'Management Software',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'url' => route('service.software'),
            ],
            [
                'name' => 'UI UX Design',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'url' => route('service.uiux'),
            ],
            [
                'name' => 'Digital Marketing',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'url' => route('service.digital-marketing'),
            ],
            [
                'name' => 'Mobile App Development',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'url' => route('service.mobile-app'),
            ],
            [
                'name' => 'Graphics Design',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'url' => route('service.graphics-design'),
            ],
            [
                'name' => 'SaaS (Software as a Service)',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'url' => route('service.saas'),
            ],
            [
                'name' => 'Video Editing',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'url' => route('service.video-edit'),
            ],
        ];
        $testimonials = [
            [
                'message' =>
                    'I could not be happier with the website that Synex Digital created for my business. They took my ideas and turned them into a stunning, user-friendly website that exceeded my expectations.',
                'client' => 'Mahadi Tahsan',
                'title' => 'Instructor',
            ],
            [
                'message' =>
                    'Working with Synex Digital has been a game-changer for our online visibility. Their SEO team’s expertise and strategies have propelled our website to the top of search engine rankings. Glad to hire them on a monthly basis',
                'client' => 'MD Sydul Amin',
                'title' => 'Python Developer',
            ],
            [
                'message' =>
                    'Synex Digital’s management software completely revolutionized our school. For schools that require reliability, streamlined administration, user-friendly design, and responsive assistance redefine efficiency!',
                'client' => 'Shawon Islam',
                'title' => 'One Year Academy',
            ],
        ];
    @endphp
    @include('Frontend.layout.calendly')
    <!-- Hero section -->
    <section class="container-fluid">
        <div class="container py-md-5">
            <div class="row py-4 d-flex align-items-center">
                <div class="col-md-6 order-2 order-md-1">
                    <h1 class="leading-font-main font-second">Business IT Solutions <br>
                        <span class="leading-pill">Pioneering Excellence for</span> <br>
                        Your Technological Needs
                    </h1>
                    <h2 class="leading-font-second pt-4">
                        As a Digital Solutions Expert, we are excited to help you through our extensive variety of services to elevate your business in the ever-changing digital landscape. Synex Digital's commercial IT solutions reflect our dedication to excellence. We are your one-stop technological solution supplier, meeting your business's particular demands with precision and competence.
                    </h2>
                    <a href="{{ route('projects') }}" class="btn btn-primary btn-default  mt-4">Explore Our Portfolio</a>
                </div>
                <div class="col-md-6 order-1 order-md-2 d-flex justify-content-center">
                    <img src="{{ asset('Frontend') }}/images/Frame 9.png" width="100%" alt="Synex Digital">
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section class="container-fluid">
        <div class="container py-5">
            <div class="row mb-4 text-center">
                <p class="section-name font-main">Our Services</p>
                <h3 class="section-title font-second">Services We Provide</h3>
            </div>
            <div class="row py-5 g-5">
                @foreach ($services as $key => $service)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <x-service-card title="{{ $service['name'] }}" url="{{ $service['url'] }}"
                            description="{{ $service['description'] }}" id="{{ $key + 1 }}" />
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Our Records  -->
    <section class="container-fluid">
        <div class="container py-md-5">
            <div class="row mb-4 text-center">
                <p class="section-name font-main">Our Records</p>
                <h3 class="section-title font-second m-auto w-505">Navigating the IT Landscape with Precision</h3>
            </div>
            <div class="row py-5 g-5">
                <div class="col-md-6  px-md-5">
                    <!-- <div class="image-record"> </div> -->
                    <img class="image-record" src="{{ asset('Frontend') }}/images/Frame10.webp" alt="Synex digital Record">
                </div>
                <div class="col-md-6">
                    <div class="text-record">
                        <p>Synex Digital's outstanding records reflect our commitment
                            to excellence. With a proven track record in Web and App
                            Development, transformative UI/UX design, and impactful
                            Digital Marketing, we consistently surpass expectations. In
                            the dynamic world of IT, simplicity meets sophistication in our
                            approach. Our services encompass the entire spectrum,
                            from basic IT definitions to complex technology solutions.</p>
                        <p>We redefine the very essence of service businesses,
                            delivering not just solutions but an experience that goes
                            beyond expectations. Our portfolio of successful projects
                            stands as a testament to our dedication, delivering top notch
                            solutions that propel businesses forward.</p>
                        <p>Our history of exceeding milestones, ensuring timely delivery,
                            and surpassing quality benchmarks underscores why Synex
                            Digital is the trusted choice for unparalleled digital success.</p>
                        <p>Our history of exceeding milestones, ensuring timely delivery,
                            and surpassing quality benchmarks underscores why Synex
                            Digital is the trusted choice for unparalleled digital success.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Our Project  -->
    <section class="container-fluid">
        <div class="container py-5">
            <div class="row  text-center mb-4">
                <p class="section-name font-main">Our Projects</p>
                <h3 class="section-title font-second">Project We Develop</h3>
            </div>

            <div class="row g-3">
                @foreach ($projects as $project)
                    <div class="col-md-4">
                        <x-project-card title="{{ $project['title'] }}" name="{{ $project['name'] }}"
                            description="{{ $project['description'] }}" category="{{ $project['category'] }}"
                            image="{{ $project['image'] }}" />
                    </div>
                @endforeach
                <div class="text-center">
                    <a href="{{ route('projects') }}" class="btn btn-primary btn-default mt-md-4">View All</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <div class="container-fluid py-5 bg-testimonial">
        <div class="container">
            <div class="row mb-4 text-center">
                <p class="section-name text-white">Testimonials</p>
                <h3 class="section-title font-second">The opinions and comments of <br> our clients</h3>
            </div>

            <div class="row g-3">
                @foreach ($testimonials as $testimonial)
                    <div class="col-md-4">
                        <x-testimonial message="{{ $testimonial['message'] }}" client="{{ $testimonial['client'] }}"
                            title="{{ $testimonial['title'] }}" />
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Our blogs -->
    @if ($blogs)
        <div class="container-fluid py-5">
            <div class="container">
                <div class="row mb-4 text-center">
                    <p class="section-name">Our Blogs</p>
                    <h3 class="section-title font-second">Latest Blogs and Articles</h3>
                </div>

                <div class="row gx-3 py-3">
                    <div class="col-md-5 pb-3">
                        @if ($blogs['popular'])
                            <article class="card-1">
                                <div class="card-body">
                                    <a href="{{ route('blog.view', $blogs['popular']['slug']) }}">
                                        <img src="{{ $blogs['popular']['image'] }}" width="100%"
                                            style="border-radius: 0.5rem;" alt="Synex Digital">
                                    </a>

                                    <div class="pt-3">
                                        <div class="d-flex gap-3 mb-1 justify-content-between">
                                            <!-- Authors -->
                                            <div class="d-flex gap-1 align-items-center">
                                                <svg width="15" height="14" viewBox="0 0 18 17" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M13.9854 14.1039C13.4031 13.333 12.6498 12.7078 11.7847 12.2776C10.9197 11.8473 9.96655 11.6239 9.00042 11.6248C8.03429 11.6239 7.08115 11.8473 6.2161 12.2776C5.35104 12.7078 4.5977 13.333 4.01542 14.1039M13.9854 14.1039C15.1217 13.0932 15.923 11.761 16.2847 10.284C16.6465 8.80694 16.5506 7.25483 16.01 5.83349C15.4693 4.41215 14.5094 3.18873 13.2574 2.3255C12.0055 1.46227 10.5207 1 9 1C7.4793 1 5.99453 1.46227 4.74259 2.3255C3.49065 3.18873 2.53069 4.41215 1.99003 5.83349C1.44937 7.25483 1.35354 8.80694 1.71527 10.284C2.07699 11.761 2.87917 13.0932 4.01542 14.1039M13.9854 14.1039C12.6138 15.3274 10.8384 16.0024 9.00042 15.9998C7.16211 16.0026 5.38728 15.3276 4.01542 14.1039M11.5004 6.62475C11.5004 7.2878 11.237 7.92368 10.7682 8.39252C10.2993 8.86136 9.66346 9.12475 9.00042 9.12475C8.33738 9.12475 7.70149 8.86136 7.23265 8.39252C6.76381 7.92368 6.50042 7.2878 6.50042 6.62475C6.50042 5.96171 6.76381 5.32583 7.23265 4.85699C7.70149 4.38815 8.33738 4.12475 9.00042 4.12475C9.66346 4.12475 10.2993 4.38815 10.7682 4.85699C11.237 5.32583 11.5004 5.96171 11.5004 6.62475Z"
                                                        stroke="black" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                <p class="card-nap">{{ $blogs['popular']['author'] }}</p>
                                            </div>
                                            <!-- Comments -->
                                            <div class="d-flex gap-1 align-items-center">{{ $blogs['popular']['view'] }}<p
                                                    class="card-nap">View</p>
                                            </div>
                                        </div>

                                        <a href="{{ route('blog.view', $blogs['popular']['slug']) }}"
                                            class="card-title font-700 mb-0">{{ $blogs['popular']['title'] }}</a>
                                        <p class="pt-2">{{ $blogs['popular']['description'] }}</p>
                                    </div>
                                </div>
                            </article>
                        @endif
                    </div>
                    <div class="col-md-7">
                        <div class="row g-3">
                            @foreach ($blogs['blogs'] as $blog)
                                <div class="col-md-6">
                                    <x-index-blog author="{{ $blogs['popular']['author'] }}" count="{{ $blog['view'] }}"
                                        title="{{ $blog['title'] }}" image="{{ $blog['image'] }}"
                                        slug="{{ $blog['slug'] }}" />
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="{{ route('blogs') }}" class="btn btn-primary btn-default mt-3 mt-md-4">View All</a>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <!-- Collaborate -->
    <x-collaborate />

    <!-- News Letter-->
    <x-newsletter />
@endsection
