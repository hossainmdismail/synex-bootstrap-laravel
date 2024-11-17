@extends('Frontend.layout.app')
    @php
        $member = [
            [
                'name' => 'Ali Imran Mehedi',
                'path' => 'Chief Executive Officer',
                'bio' =>
                    'Specialized in IT innovation and excellence, committed to top-tier service and client satisfaction.',
                'profile' => asset('Frontend/images/member/imran.webp'),
                'link' => [
                    'github' => 'https://github.com/imehedi007',
                    'linkedin' => 'https://linkedin.com/in/ali-imran-mehedi/',
                ],
                'class' => '"col team-style-08 border-radius-6px md-mb-30px mt-2 md-mt-0"'
            ],
            [
                'name' => 'MD Ismail Hossain',
                'path' => 'Chief Technology Officer',
                'bio' => 'Ensuring our tech solutions consistently exceed client expectations.',
                'profile' => asset('Frontend/images/member/esmail-1.webp'),
                'link' => [
                    'github' => 'https://github.com/hossainmdismail',
                    'linkedin' => 'https://linkedin.com/in/mdismailhossain2385/',
                ],
                'class' => '"col team-style-08 border-radius-6px md-mb-30px"'
            ],
            [
                'name' => 'MD Jahirul Islam',
                'path' => 'Software Engineer',
                'bio' => 'Expertise in Software Development, AI and Machine Learning with 6+ years of experience',
                'profile' => asset('Frontend/images/member/Jahir.webp'),
                'link' => [
                    'github' => 'https://github.com/jahir002201',
                    'linkedin' => 'https://linkedin.com/in/jahirul12/',
                ],
                'class' => '"col team-style-08 border-radius-6px xs-mb-30px mt-2 md-mt-0"'
            ],
            [
                'name' => 'Shihab Sarar',
                'path' => 'Software Engineer',
                'bio' =>
                    'Passionate problem solver,dedicated to delivering intelligence systems using ML, AI and MERN stack',
                'profile' => asset('Frontend/images/member/shihab.webp'),
                'link' => [
                    'github' => 'https://github.com/ShihabSarar12',
                    'linkedin' => 'https://linkedin.com/in/shihab-sarar-15a587230/',
                ],
                'class' => '"col team-style-08 border-radius-6px"'
            ],
            [
                'name' => 'Yousuf Sayem',
                'path' => 'Web Developer',
                'bio' => 'Expert in Full-stack Laravel Web Developer with 3+ years of experience',
                'profile' => asset('Frontend/images/member/yousuf.webp'),
                'link' => [
                    'github' => 'https://github.com/Say00em',
                    'linkedin' => 'https://linkedin.com/in/say00em/',
                ],
                'class' => '"col team-style-08 border-radius-6px md-mb-30px mt-2 md-mt-0"'
            ],
            [
                'name' => 'Jubayer Shikder',
                'path' => 'Web Developer',
                'bio' => 'Expert in Full-stack Laravel Web Developer with 4+ years of experience',
                'profile' => asset('Frontend/images/member/jubayer.webp'),
                'link' => [
                    'github' => 'https://github.com/Jobayer53',
                    'linkedin' => 'https://linkedin.com/in/jobayershikder535/',
                ],
                'class' => '"col team-style-08 border-radius-6px md-mb-30px"'
            ],
            [
                'name' => 'Fahim Ahmed Patwary',
                'path' => 'UI/UX designer',
                'bio' => 'UI/UX designer creating simple, user-friendly designs with Figma for better experiences.',
                'profile' => asset('Frontend/images/member/fahim.webp'),
                'link' => [
                    'linkedin' => 'https://www.linkedin.com/in/fahim-ahmed-patwary-667b1a236',
                ],
                'class' => '"col team-style-08 border-radius-6px xs-mb-30px mt-2 md-mt-0"'
            ],
            [
                'name' => 'Puspita Anjum',
                'path' => 'Content Writer',
                'bio' =>
                    'Expert in writing informative, SEO-friendly blog posts that drive traffic and boost engagement with 2+ years of experience',
                'profile' => asset('Frontend/images/member/puspita.webp'),
                'link' => [
                    'linkedin' => 'https://www.linkedin.com/in/puspita-anjum-5140b4231',
                ],
                'class' => '"col team-style-08 border-radius-6px"'
            ],
            [
                'name' => 'Maisha Alam Mim',
                'path' => 'Content Writer',
                'bio' =>
                    "Expert in IT content creation, blending analysis with creativity to drive digital marketing success and elevate our agency's brand.",
                'profile' => asset('Frontend/images/member/maisha.webp'),
                'link' => [
                    'linkedin' => 'https://www.linkedin.com/in/maisha-alam-mim-b70a31320',
                ],
                'class' => '"col team-style-08 border-radius-6px md-mb-30px mt-2 md-mt-0"'
            ],
        ];
    @endphp
@section('content')

        <!-- start page title --> 
        <section class="p-0 top-space-margin page-title-center-alignment">
            <div class="container">
                <div class="row align-items-center justify-content-center extra-very-small-screen">
                    <div class="col-xl-8 col-lg-10 text-center position-relative page-title-extra-large" data-anime='{ "el": "childs", "translateY": [-15, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h1 class="fw-700 text-dark-gray mb-20px ls-minus-2px">Agency</h1>
                        <h2 class="fw-400 ls-0px mb-0">Digital experiences agency</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->

        <!-- start features section -->
        <section>
            <div class="container">
                <div class="row mb-7">
                    <div class="col-lg-5 md-mb-10px" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div class="icon-with-text-style-08 mb-25px">
                            <div class="feature-box feature-box-left-icon-middle">
                                <div class="feature-box-icon feature-box-icon-rounded w-50px h-50px rounded-circle bg-base-color text-dark-gray me-15px">
                                    ★
                                </div>
                                <div class="feature-box-content">
                                    <span class="d-inline-block fs-15 lh-24 fw-700 text-dark-gray text-uppercase text-decoration-line-bottom">5 star rating web agency</span>
                                </div>
                            </div>
                        </div>
                        <h3 class="text-dark-gray fw-600 ls-minus-2px">We're a creative digital agency.</h3> 
                    </div>
                    <div class="col-lg-7" data-anime='{ "el": "childs", "translateY": [15, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="fs-19 fw-600 text-dark-gray">Our vision</div>
                            </div>
                            <div class="col-md-9 last-paragraph-no-margin">
                                <p>At Synex Digital, we go beyond being a digital solutions provider. We are your trusted partner in driving technology and business growth. With over 8 years of experience, we specialize in delivering innovative Web and App development, Custom Software Solutions, and comprehensive Digital Marketing services tailored to your business needs.</p>
                            </div>
                        </div>
                        <div class="separator-line-2px bg-dark-gray mt-35px mb-35px"></div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="fs-19 fw-600 text-dark-gray">Our mission</div>
                            </div>
                            <div class="col-md-9 last-paragraph-no-margin">
                                <p>We’re dedicated to helping businesses thrive in the digital landscape by providing high-quality, scalable solutions that enhance user experience, boost online visibility, and drive engagement. Partner with us to transform your vision into reality and stay ahead in the competitive marke.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-lg-5 row-cols-md-3 row-cols-sm-2 clients-style-06 justify-content-center" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <!-- start client item -->
                    <div class="col client-box text-center md-mb-40px">
                        <a href="#"><img src="{{asset('Frontend/images/logo-walmart-dark-gray.svg')}}" class="h-35px" alt=""></a>
                    </div>
                    <!-- end client item -->
                    <!-- start client item -->
                    <div class="col client-box text-center md-mb-40px">
                        <a href="#"><img src="images/logo-invision-dark-gray.svg" class="h-40px" alt=""></a>
                    </div>
                    <!-- end client item -->
                    <!-- start client item -->
                    <div class="col client-box text-center md-mb-40px">
                        <a href="#"><img src="images/logo-netflix-dark-gray.svg" class="h-35px" alt=""></a>
                    </div>
                    <!-- end client item -->
                    <!-- start client item -->
                    <div class="col client-box text-center sm-mb-40px">
                        <a href="#"><img src="images/logo-logitech-dark-gray.svg" class="h-35px" alt=""></a>
                    </div> 
                    <!-- end client item -->
                    <!-- start client item -->
                    <div class="col client-box text-center">
                        <a href="#"><img src="images/logo-amazon-dark-gray.svg" class="h-35px" alt=""></a>
                    </div> 
                    <!-- end client item -->
                </div>
            </div>
        </section>
        <!-- end section -->

        <!-- start video section -->
        <section class="p-0">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-center">
                    <div class="col-11 position-relative h-750px md-h-600px sm-h-350px border-radius-6px border border-color-transparent position-relative" data-parallax-background-ratio="0.5" style="background-image: url('images/demo-web-agency-about-01.jpg');">  
                        <a href="https://www.youtube.com/watch?v=cfXHhfNy7tU" class="popup-youtube">
                            <div class="absolute-middle-center z-index-9">
                                <img class="animation-rotation" alt="" data-cfsrc="images/demo-web-agency-03.png" style="display:none;visibility:hidden;"><noscript><img src="images/demo-web-agency-03.png" class="animation-rotation" alt=""></noscript>
                                <div class="absolute-middle-center w-100 z-index-minus-1"><img alt="" data-cfsrc="images/demo-web-agency-about-02.png" style="display:none;visibility:hidden;"><noscript><img src="images/demo-web-agency-about-02.png" alt=""></noscript></div> 
                            </div>
                        </a>
                    </div> 
                </div> 
            </div>
        </section>
        <!-- end section -->

        <!-- start Expert section -->
        <section class="pb-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 md-mb-30px" data-anime='{ "el": "childs", "translateX": [15, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div class="bg-dark-gray border-radius-100px fs-12 text-white ps-20px pe-20px d-inline-block text-uppercase fw-500 mb-5 ls-05px">Focused area</div>
                        <h3 class="text-dark-gray fw-600 ls-minus-2px">We want to bring business and the digital world.</h3>
                        <p class="w-90 md-w-100">We are excited for our work and how it positively impacts clients. With over 12 years of experience have been constantly providing excellent.</p>
                        <a href="demo-web-agency-expertise.html" class="btn btn-large btn-expand-ltr text-dark-gray btn-rounded fw-700"><span class="bg-base-color"></span>See what we do</a>
                    </div>
                    <div class="col-xl-6 col-lg-7 offset-xl-1">
                        <div class="row row-cols-auto row-cols-sm-2" data-anime='{ "el": "childs", "translateX": [50, 0], "opacity": [0,1], "duration": 600, "delay":300, "staggervalue": 150, "easing": "easeOutQuad" }'>
                            <!-- start features box item -->
                            <div class="col align-self-start">
                                <div class="feature-box text-start ps-30px">
                                    <div class="feature-box-icon position-absolute left-0px top-10px">
                                        <h1 class="fs-85 text-outline text-outline-width-1px text-outline-color-dark-gray fw-700 ls-minus-1px opacity-2 mb-0">01</h1>
                                    </div>
                                    <div class="feature-box-content last-paragraph-no-margin pt-25 md-pt-17 sm-pt-40px">
                                        <span class="text-dark-gray fs-19 d-inline-block fw-600 mb-5px">Experience and Expertise</span>
                                        <p>With years of experience and specialized skills, Synex Digital delivers top-notch solutions and innovative strategies to drive your business forward.</p>
                                        <span class="w-40px h-3px bg-base-color d-inline-block"></span>
                                    </div>
                                </div>
                            </div>
                            <!-- end features box item -->
                            <!-- start features box item -->
                            <div class="col align-self-end mt-20 xs-mt-15px">
                                <div class="feature-box text-start ps-30px">
                                    <div class="feature-box-icon position-absolute left-0px top-10px">
                                        <h1 class="fs-85 text-outline text-outline-width-1px text-outline-color-dark-gray fw-700 ls-minus-1px opacity-2 mb-0">02</h1>
                                    </div>
                                    <div class="feature-box-content last-paragraph-no-margin pt-25 md-pt-17 sm-pt-40px">
                                        <span class="text-dark-gray fs-19 d-inline-block fw-600 mb-5px">Customized Solutions</span>
                                        <p>We craft tailored solutions to meet your unique needs, ensuring personalized strategies and exceptional results that align perfectly with your business goals.</p>
                                        <span class="w-40px h-3px bg-base-color d-inline-block"></span>
                                    </div>
                                </div>
                            </div>
                            <!-- end features box item -->
                            <!-- start features box item -->
                            <div class="col align-self-start mt-minus-12 xs-mt-15px">
                                <div class="feature-box text-start ps-30px">
                                    <div class="feature-box-icon position-absolute left-0px top-10px">
                                        <h1 class="fs-85 text-outline text-outline-width-1px text-outline-color-dark-gray fw-700 ls-minus-1px opacity-2 mb-0">03</h1>
                                    </div>
                                    <div class="feature-box-content last-paragraph-no-margin pt-25 md-pt-17 sm-pt-40px">
                                        <span class="text-dark-gray fs-19 d-inline-block fw-600 mb-5px">Trust and Reliability</span>
                                        <p>Count on us for dependable, trustworthy service. Our commitment to integrity and consistent performance ensures you can rely on us for all your digital needs.</p>
                                        <span class="w-40px h-3px bg-base-color d-inline-block"></span>
                                    </div>
                                </div>
                            </div>
                            <!-- end features box item -->
                        </div>
                    </div>
                </div> 
            </div>
        </section>
        <!-- end section -->

        <!-- start softskill section -->
        <section class="overflow-hidden position-relative half-section">
            <div class="container-fluid">
                <div class="row position-relative">
                    <div class="col swiper swiper-width-auto text-center pb-30px sm-pb-20px" data-slider-options='{ "slidesPerView": "auto", "spaceBetween":60, "speed": 10000, "loop": true, "pagination": { "el": ".slider-four-slide-pagination-2", "clickable": false }, "allowTouchMove": false, "autoplay": { "delay":0, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-four-slide-next-2", "prevEl": ".slider-four-slide-prev-2" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "768": { "spaceBetween": 70 } }, "effect": "slide" }'>
                        <div class="swiper-wrapper marquee-slide">
                            <!-- start client item -->
                            <div class="swiper-slide">
                                <div class="fs-170 sm-fs-150 text-base-color fw-600 ls-minus-8px word-break-normal">developers</div>
                            </div>
                            <!-- end client item -->
                            <!-- start client item -->
                            <div class="swiper-slide">
                                <div class="fs-170 sm-fs-150 text-dark-gray fw-600 ls-minus-8px word-break-normal">designers</div>
                            </div>
                            <!-- end client item -->
                            <!-- start client item -->
                            <div class="swiper-slide">
                                <div class="fs-170 sm-fs-150 text-base-color fw-600 ls-minus-8px word-break-normal">thinkers</div>
                            </div>
                            <!-- end client item --> 
                            <!-- start client item -->
                            <div class="swiper-slide">
                                <div class="fs-170 sm-fs-150 text-dark-gray fw-600 ls-minus-8px word-break-normal">innovators</div>
                            </div>
                            <!-- end client item --> 
                            <!-- start client item -->
                            <div class="swiper-slide">
                                <div class="fs-170 sm-fs-150 text-base-color fw-600 ls-minus-8px word-break-normal">socially</div>
                            </div>
                            <!-- end client item --> 
                            <!-- start client item -->
                            <div class="swiper-slide">
                                <div class="fs-170 sm-fs-150 text-dark-gray fw-600 ls-minus-8px word-break-normal">dreamers</div>
                            </div>
                            <!-- end client item --> 
                        </div> 
                    </div>  
                </div>
            </div> 
        </section>
        <!-- end section -->

        <!-- start team section -->
        <section class="p-0">
            <div class="container">
                <div class="row mb-6 sm-mb-40px" data-anime='{"translateY": [0, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="col-lg-6 md-mb-25px">
                        <h3 class="mb-0 fw-600 text-dark-gray w-85 lg-w-100 ls-minus-2px">We believe in power of unity and its impact in future.</h3>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <p class="w-95 md-w-100">Our expert team transforms your vision into reality. With skilled developers and creative designers, we bring passion and experience to every project. Discover the talent driving our success and how they contribute to your growth.</p>
                        <a href="demo-web-agency-people.html" class="btn btn-medium btn-expand-ltr text-dark-gray btn-rounded fw-700"><span class="bg-base-color"></span>Meet the team</a>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2 transition-inner-all mb-6 lg-mb-5" data-anime='{ "el": "childs", "translateY": [-15, 0], "perspective": [1200,1200], "scale": [1.1, 1], "rotateX": [50, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <!-- start team member item --> 
                    @foreach ($member as $person)
                        <div class={{$person['class']}} data-bottom-top="transform: translateY(40px)" data-top-bottom="transform: translateY(-40px)">
                            <figure class="mb-0 position-relative overflow-hidden border-radius-6px">
                                <img alt="" data-cfsrc="images/team-08.jpg" style="display:none;visibility:hidden;" /><noscript><img src="images/team-08.jpg" alt=""/></noscript>
                                <figcaption class="w-100 h-100 d-flex align-items-end p-13 lg-p-8 md-p-13 sm-p-10 bg-gradient-gray-light-dark-transparent border-radius-6px">
                                    <div class="w-100">
                                        <span class="team-member-name fw-500 alt-font text-white d-block">Jeremy dupont</span>
                                        <span class="member-designation fs-15 lh-20 text-white d-block">Director</span>
                                    </div>
                                    <div class="social-icon d-flex flex-column flex-shrink-1">
                                        <a href="https://www.twitter.com/" target="_blank" class="text-dark-gray"><i class="fa-brands fa-twitter icon-small"></i></a>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    @endforeach
                    <!-- end team member item -->   
                </div>
                <div class="row mb-2">
                    <div class="col-12 text-center"> 
                        <div class="text-dark-gray fs-20 ls-minus-05px">Our nearly <span class="fw-700">350+</span> creative team members are ready to help now. <a href="demo-web-agency-contact.html" class="text-dark-gray text-dark-gray-hover fw-600 text-decoration-line-bottom">Contact us now</a></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->

        <!-- start work together big section -->
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
                                <div class="position-absolute left-minus-140px top-minus-140px z-index-9 xl-left-minus-110px top-minus-140px xl-top-minus-100px md-top-minus-90px z-index-9 xl-w-230px md-w-200px d-none d-md-block" data-anime='{ "translateY": [-15, 0], "scale": [0.5, 1], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                    <img class="animation-rotation" alt="" data-cfsrc="images/demo-web-agency-05.png" style="display:none;visibility:hidden;"><noscript><img src="images/demo-web-agency-05.png" class="animation-rotation" alt=""></noscript>
                                    <div class="absolute-middle-center w-100 z-index-minus-1"><img alt="" data-cfsrc="images/demo-web-agency-04.png" style="display:none;visibility:hidden;"><noscript><img src="images/demo-web-agency-04.png" alt=""></noscript></div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->

@endsection