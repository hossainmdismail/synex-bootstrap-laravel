@extends('Frontend.layout.app')
@section('content')
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
            ],
            [
                'name' => 'MD Esmail Hossain',
                'path' => 'Chief Technology Officer',
                'bio' => 'Ensuring our tech solutions consistently exceed client expectations.',
                'profile' => asset('Frontend/images/member/esmail-1.webp'),
                'link' => [
                    'github' => 'https://github.com/hossainmdismail',
                    'linkedin' => 'https://linkedin.com/in/mdismailhossain2385/',
                ],
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
            ],
            [
                'name' => 'Ayeubur Rahman',
                'path' => 'Digital Marketing Expert',
                'bio' =>
                    'Data Analyst and Full Stack Digital Marketer. Growing with 3+ Years of Experience in International Stages.',
                'profile' => asset('Frontend/images/member/Shuvo.png'),
                'link' => [
                    'linkedin' => 'https://linkedin.com/in/ayeuburrahman/',
                ],
            ],
        ];
    @endphp
    @include('Frontend.layout.calendly')
    <!-- about us -->
    <section class="container-fluid">
        <img class="leftsvg" src="{{ asset('Frontend') }}/images/aboutus-left.svg" loading="lazy" alt="">
        <img class="rightsvg" src="{{ asset('Frontend') }}/images/aboutus-right.svg" loading="lazy" alt="">
        <div class="container py-2 py-md-5">
            <div class="row">
                <div class="col-lg-12  text-center">
                    <h1 class="about-us-title">About <span class="font-main">Us</span></h1>
                    <img class="underlinesvg" src="{{ asset('Frontend') }}/images/aboutus-underline.svg" alt="">
                </div>
            </div>
            <div class="row py-5">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="teamworkjpg">
                        <img src="{{ asset('Frontend') }}/images/Teamwork.webp" loading="lazy" width="100%"
                            alt="">
                    </div>
                    <div class="experience-card shadow mt-4">
                        <div class="row px-3 px-md-5 py-4">
                            <div class="col-6 px-5">
                                <h5 class="font-2rem">8+</h5>
                                <p>Years of Experience</p>
                            </div>
                            <div class="col-6 px-5">
                                <h5 class="font-2rem">200+</h5>
                                <p>Project Completion</p>
                            </div>
                            <div class="col-6 px-5">
                                <h5 class="font-2rem">130+</h5>
                                <p>Positive Reviews</p>
                            </div>
                            <div class="col-6 px-5">
                                <h5 class="font-2rem">11-50</h5>
                                <p>Employees</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="about-us-card  p-4">
                        <h5 class="font-2rem">Going further than just a cowering space, Synex Digital <span
                                class="font-main"> Offers More</span></h5>
                        <!-- <h5 class="font-2rem"></h5> -->
                        <p class="mt-4 mb-4 caption-black">
                            At Synex Digital, we go beyond being a digital solutions provider. We are your trusted partner
                            in driving technology and business growth. With over 8 years of experience, we specialize in
                            delivering innovative Web and App development, Custom Software Solutions, and comprehensive
                            Digital Marketing services tailored to your business needs.
                        </p>
                        <p class="mb-3 caption-black">
                            We’re dedicated to helping businesses thrive in the digital landscape by providing high-quality,
                            scalable solutions that enhance user experience, boost online visibility, and drive engagement.
                            Whether you're a startup aiming to make an impact or an established brand seeking to innovate,
                            Synex Digital is here to guide you every step of the way. Partner with us to transform your
                            vision into reality and stay ahead in the competitive market.
                        </p>
                        <a href="{{ route('contact') }}" class="btn  btn-default btn-outline-primary  rounded-sm">
                            Get in Touch</a>
                    </div>
                </div>
            </div>
        </div>
        <img class="leftsvgend" src="{{ asset('Frontend') }}/images/leftsvgend.svg" alt="">
        <img class="rightsvgend" src="{{ asset('Frontend') }}/images/rightsvgend.svg" alt="">
    </section>
    <!-- choose us -->
    <section class="container-fluid choose-us">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-8 m-auto text-center">
                    <h3 class="choose-us-title">Why <span class="font-dark"> Choose</span> Us </h3>
                    <p class="text-white mb-4 mb-md-5">
                        Choose Synex Digital for unmatched expertise, innovative solutions, and dedicated support. Our
                        commitment to excellence and tailored strategies ensure your success in a competitive market.
                        Experience the difference with our results-driven approach.
                    </p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="choose-us-card ">
                        <img src="{{ asset('Frontend') }}/images/ellipse1.svg" alt="">
                        <p class="choose-us-card-title">Experience and Expertise</p>
                        <p class="choose-us-card-para">
                            With years of experience and specialized skills, Synex Digital delivers top-notch solutions and
                            innovative strategies to drive your business forward.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="choose-us-card">
                        <img src="{{ asset('Frontend') }}/images/ellipse2.svg" alt="">
                        <p class="choose-us-card-title">Customized Solutions</p>
                        <p class="choose-us-card-para">
                            We craft tailored solutions to meet your unique needs, ensuring personalized strategies and
                            exceptional results that align perfectly with your business goals.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="choose-us-card">
                        <img src="{{ asset('Frontend') }}/images/ellipse3.svg" alt="">
                        <p class="choose-us-card-title">Trust and Reliability</p>
                        <p class="choose-us-card-para">
                            Count on us for dependable, trustworthy service. Our commitment to integrity and consistent
                            performance ensures you can rely on us for all your digital needs.
                        </p>
                    </div>
                </div>


            </div>

        </div>

    </section>
    <!-- employee -->
    <section class="container-fluid">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 p-md-5">
                    <img class="about-group-img" src="{{ asset('Frontend') }}/images/about-group.webp" loading="lazy">
                </div>
                <div class="col-md-6 d-flex align-items-center py-md-3">
                    <div class="employee-card">
                        <h5 class="employee-title">High <span class="font-main">Skilled Employees</span> from Worldwide<span
                                class="font-main">.</span>
                        </h5>
                        <div class="employee-body ">
                            <p>
                                At Synex Digital, our strength lies in our diverse team of highly skilled professionals from
                                around the globe. We bring together a wealth of expertise and innovative thinking to tackle
                                complex challenges and deliver exceptional results.
                            </p>
                            <p class="mt-4">
                                Our talented workforce is dedicated to providing world-class digital solutions, tailored to
                                meet the unique needs of each client. By leveraging the skills and insights of our global
                                team, we ensure that every project benefits from a broad perspective, cutting-edge
                                technologies, and best-in-class practices. Trust Synex Digital to connect you with top
                                talent that drives your success in the digital landscape.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- out team -->
    <section class="container-fluid team ">

        <div class="container">
            <div class="row mt-5">
                <div class="col-md-7 m-auto text-center">
                    <h5 class="font-3rem">Meet Our <span class="font-main"> Team</span></h5>
                    <p class="mt-4">
                        Our expert team transforms your vision into reality. With skilled developers and creative designers,
                        we bring passion and experience to every project. Discover the talent driving our success and how
                        they contribute to your growth.
                    </p>
                </div>
            </div>
            <div class="row py-5 g-3">
                @foreach ($member as $person)
                    <div class="col-md-3 text-center">
                        <x-team-profile name="{{ $person['name'] }}" path="{{ $person['path'] }}"
                            bio="{{ $person['bio'] }}" profile="{{ $person['profile'] }}" :links="$person['link']" />
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <div class="container-fluid my-4">
        <div class="container ">
            <div class="line"></div>
        </div>
    </div>
    <!-- our partners -->
    <section class="container-fluid partner">

        <div class="container">
            <div class="row mt-5">
                <div class="col-md-7 m-auto text-center mt-5">
                    <h5 class="font-3rem"> Our <span class="font-main"> Partners</span></h5>
                    <p class="mt-4">
                        We team up with top industry leaders and tech innovators to deliver exceptional solutions. Discover
                        the key alliances that enhance our ability to serve you with excellence.
                    </p>
                </div>
            </div>


            <div class=" mt-5">
                <div class="slider-container">
                    <div class="slider">
                        <div class="slide"><img src="{{ asset('Frontend') }}/images/instagram.svg" alt="Logo 1">
                        </div>
                        <div class="slide"><img src="{{ asset('Frontend') }}/images/microsoft.svg" alt="Logo 2">
                        </div>
                        <div class="slide"><img src="{{ asset('Frontend') }}/images/linkedin (2).svg" alt="Logo 1">
                        </div>
                        {{-- <div class="slide"><img src="{{ asset('Frontend') }}/images/metallb.svg" alt="Logo 1"></div> --}}

                        <!-- Duplicate slides for seamless animation -->
                        <div class="slide"><img src="{{ asset('Frontend') }}/images/instagram.svg" alt="Logo 1">
                        </div>
                        <div class="slide"><img src="{{ asset('Frontend') }}/images/microsoft.svg" alt="Logo 1">
                        </div>
                        <div class="slide"><img src="{{ asset('Frontend') }}/images/linkedin (2).svg" alt="Logo 1">
                        </div>
                        <div class="slide"><img src="{{ asset('Frontend') }}/images/metallb.svg" alt="Logo 1"></div>
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
