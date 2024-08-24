@extends('Frontend.layout.app')
@section('content')
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
                                <h5 class="font-2rem">5.5+</h5>
                                <p>Years of Experience</p>
                            </div>
                            <div class="col-6 px-5">
                                <h5 class="font-2rem">25+</h5>
                                <p>Project Challanges</p>
                            </div>
                            <div class="col-6 px-5">
                                <h5 class="font-2rem">230+</h5>
                                <p>Positive Reviews</p>
                            </div>
                            <div class="col-6 px-5">
                                <h5 class="font-2rem">30+</h5>
                                <p>Employee</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="about-us-card  p-4">
                        <h5 class="font-2rem">Going further than just a cowering space, Synex Digital <span
                                class="font-main"> Offers More</span></h5>
                        <!-- <h5 class="font-2rem"></h5> -->
                        <p class="mt-4 mb-4 caption-black">Lorem ipsum dolor sit amet consectetur. Ac eros egestas
                            ornare
                            volutpat cras congue auctor phasellus. Lorem ipsum dolor sit
                            amet consectetur. Ac eros egestas ornare volutpat cras congue
                            auctor phasellus. Lorem ipsum dolor sit amet consectetur. </p>
                        <p class="mb-3 caption-black">Lorem ipsum dolor sit amet consectetur. Ac eros egestas ornare
                            volutpat cras congue auctor phasellus. Lorem ipsum dolor sit
                            amet consectetur. Ac eros egestas ornare volutpat cras congue
                            auctor phasellus. Lorem ipsum dolor sit amet consectetur. Ac
                            eros egestas ornare volutpat cras congue auctor phasellus.
                            Lorem ipsum dolor sit amet consectetur. Ac eros egestas ornare
                            volutpat cras congue auctor phasellus. Lorem ipsum dolor sit
                            amet consectetur. Lorem ipsum dolor sit amet consectetur. Ac
                            eros egestas ornare volutpat cras congue auctor phasellus.
                            Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit
                            amet consectetur. </p>
                        <button class="btn  btn-default btn-outline-primary  rounded-sm">Get in touch</button>
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
                    <h3 class="choose-us-title">Why <span class="font-dark"> Choose </h3>
                    <p class="text-white mb-4 mb-md-5">An exclusive offering tailored for emerging startups and
                        established
                        enterprises.Lorem ipsum dolor sit amet consectetur. Ac eros egestas ornare volutpat cras
                        congue auctor phasellus..</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="choose-us-card ">
                        <img src="{{ asset('Frontend') }}/images/ellipse1.svg" alt="">
                        <p class="choose-us-card-title">Experience and Expertise</p>
                        <p class="choose-us-card-para">Lorem ipsum dolor sit amet consectetur. Eget justo vulputate
                            eget venenatis morbi in tempus.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="choose-us-card">
                        <img src="{{ asset('Frontend') }}/images/ellipse2.svg" alt="">
                        <p class="choose-us-card-title">Customized Solutions</p>
                        <p class="choose-us-card-para">Lorem ipsum dolor sit amet consectetur. Eget justo vulputate
                            eget venenatis morbi in tempus.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="choose-us-card">
                        <img src="{{ asset('Frontend') }}/images/ellipse3.svg" alt="">
                        <p class="choose-us-card-title">Trust and Reliability</p>
                        <p class="choose-us-card-para">Lorem ipsum dolor sit amet consectetur. Eget justo vulputate
                            eget venenatis morbi in tempus.</p>
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
                        <h5 class="employee-title">High skilled employees from worldwide<span class="font-main">.</span>
                        </h5>
                        <div class="employee-body ">
                            <p>Lorem ipsum dolor sit amet consectetur. Ac eros egestas ornare volutpat cras congue
                                auctor phasellus</p>
                            <p class="mt-4"> Lorem ipsum dolor sit amet consectetur. Ac eros egestas ornare volutpat
                                cras congue auctor phasellusLorem ipsum dolor sit amet consectetur. Ac eros egestas
                                ornare volutpat cras congue auctor phasellusLorem ipsum dolor sit amet consectetur.
                                Ac
                                eros egestas ornare volutpat cras congue auctor phasellus</p>
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
                <div class="col-lg-12 text-center">
                    <h5 class="font-3rem">Meet Our <span class="font-main"> Team</span></h5>
                    <p class="mt-4">Lorem ipsum dolor sit amet consectetur. Ac eros egestas ornare volutpat cras
                        congue auctor phasellus..</p>
                </div>
            </div>
            <div class="row py-5">

                <div class="col-md-3 member text-center">
                    <div class="arrow">
                        <img class="arrow-image" src="{{ asset('Frontend') }}/images/member.png" alt="">
                    </div>
                    <div class="member-card m-auto ">
                        <h4 class="member-name ">Imran Mehedi</h4>
                        <p class="memeber-position ">Founder & CEO</p>
                        <p class="memeber-expertise ">Expertise in web and app development, digital marketing. With
                            6+ years of experience</p>
                        <a class="me-4" href=""><img src="{{ asset('Frontend') }}/images/Github.svg"
                                alt=""></a>
                        <a href=""><img src="{{ asset('Frontend') }}/images/linkedin.svg" alt=""></a>
                    </div>
                </div>

                <div class="col-md-3 member text-center">
                    <div class="arrow">
                        <img class="arrow-image" src="{{ asset('Frontend') }}/images/member.png" alt="">
                    </div>
                    <div class="member-card m-auto ">
                        <h4 class="member-name ">Imran Mehedi</h4>
                        <p class="memeber-position ">Founder & CEO</p>
                        <p class="memeber-expertise ">Expertise in web and app development, digital marketing. With
                            6+ years of experience</p>
                        <a class="me-4" href=""><img src="{{ asset('Frontend') }}/images/Github.svg"
                                alt=""></a>
                        <a href=""><img src="{{ asset('Frontend') }}/images/linkedin.svg" alt=""></a>
                    </div>
                </div>

                <div class="col-md-3 member text-center">
                    <div class="arrow">
                        <img class="arrow-image" src="{{ asset('Frontend') }}/images/member.png" alt="">
                    </div>
                    <div class="member-card m-auto ">
                        <h4 class="member-name ">Imran Mehedi</h4>
                        <p class="memeber-position ">Founder & CEO</p>
                        <p class="memeber-expertise ">Expertise in web and app development, digital marketing. With
                            6+ years of experience</p>
                        <a class="me-4" href=""><img src="{{ asset('Frontend') }}/images/Github.svg"
                                alt=""></a>
                        <a href=""><img src="{{ asset('Frontend') }}/images/linkedin.svg" alt=""></a>
                    </div>
                </div>

                <div class="col-md-3 member text-center">
                    <div class="arrow">
                        <img class="arrow-image" src="{{ asset('Frontend') }}/images/member.png" alt="">
                    </div>
                    <div class="member-card m-auto ">
                        <h4 class="member-name ">Imran Mehedi</h4>
                        <p class="memeber-position ">Founder & CEO</p>
                        <p class="memeber-expertise ">Expertise in web and app development, digital marketing. With
                            6+ years of experience</p>
                        <a class="me-4" href=""><img src="{{ asset('Frontend') }}/images/Github.svg"
                                alt=""></a>
                        <a href=""><img src="{{ asset('Frontend') }}/images/linkedin.svg" alt=""></a>
                    </div>
                </div>

                <div class="col-md-3 member text-center">
                    <div class="arrow">
                        <img class="arrow-image" src="{{ asset('Frontend') }}/images/member.png" alt="">
                    </div>
                    <div class="member-card m-auto ">
                        <h4 class="member-name ">Imran Mehedi</h4>
                        <p class="memeber-position ">Founder & CEO</p>
                        <p class="memeber-expertise ">Expertise in web and app development, digital marketing. With
                            6+ years of experience</p>
                        <a class="me-4" href=""><img src="{{ asset('Frontend') }}/images/Github.svg"
                                alt=""></a>
                        <a href=""><img src="{{ asset('Frontend') }}/images/linkedin.svg" alt=""></a>
                    </div>
                </div>

                <div class="col-md-3 member text-center">
                    <div class="arrow">
                        <img class="arrow-image" src="{{ asset('Frontend') }}/images/member.png" alt="">
                    </div>
                    <div class="member-card m-auto ">
                        <h4 class="member-name ">Imran Mehedi</h4>
                        <p class="memeber-position ">Founder & CEO</p>
                        <p class="memeber-expertise ">Expertise in web and app development, digital marketing. With
                            6+ years of experience</p>
                        <a class="me-4" href=""><img src="{{ asset('Frontend') }}/images/Github.svg"
                                alt=""></a>
                        <a href=""><img src="{{ asset('Frontend') }}/images/linkedin.svg" alt=""></a>
                    </div>
                </div>
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
                <div class="col-lg-12 text-center mt-5">
                    <h5 class="font-3rem"> Our <span class="font-main"> Partners</span></h5>
                    <p class="mt-4">Lorem ipsum dolor sit amet consectetur. Ac eros egestas ornare volutpat cras
                        congue auctor phasellus..</p>
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
                        <div class="slide"><img src="{{ asset('Frontend') }}/images/metallb.svg" alt="Logo 1"></div>

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
