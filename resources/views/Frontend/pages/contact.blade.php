@extends('Frontend.layout.app')
@section('content')
    <!-- Contact Form with Left Image Slide -->
    <section class="container pb-md-5 pt-4 pt-md-0">
        <div class="row py-2 py-md-5">
            <div class="col-md-6 px-md-5 pb-5 pb-md-0">
                <div id="carouselExampleCaptions" class="px-md-5 carousel slide">
                    <span class="offer-box">
                        <p class="mb-0" style="font-size: 12px">Special Offer</p>
                        <strong>20% <span style="font-size: 12px">Off</span></strong>
                    </span>
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                            aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"
                            aria-label="Slide 5"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5"
                            aria-label="Slide 6"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6"
                            aria-label="Slide 7"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7"
                            aria-label="Slide 8"></button>
                    </div>
                    <div class="carousel-inner">

                        <div class="carousel-item active">

                            <img src="{{ asset('Frontend/images/cf/cf-1.jpg') }}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Web Development</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            {{-- <span class="offer-box"></span> --}}
                            <img src="{{ asset('Frontend/images/cf/cf-2.jpg') }}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Digital Marketing</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            {{-- <span class="offer-box"></span> --}}
                            <img src="{{ asset('Frontend/images/cf/cf-3.jpg') }}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Graphics Design</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            {{-- <span class="offer-box"></span> --}}
                            <img src="{{ asset('Frontend/images/cf/cf-4.jpg') }}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Management Software</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            {{-- <span class="offer-box"></span> --}}
                            <img src="{{ asset('Frontend/images/cf/cf-5.jpg') }}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Mobile App Development</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            {{-- <span class="offer-box"></span> --}}
                            <img src="{{ asset('Frontend/images/cf/cf-6.png') }}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>SAAS</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            {{-- <span class="offer-box"></span> --}}
                            <img src="{{ asset('Frontend/images/cf/cf-7.jpg') }}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>UI UX Design</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            {{-- <span class="offer-box"></span> --}}
                            <img src="{{ asset('Frontend/images/cf/cf-8.jpg') }}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Video Editing</h5>
                            </div>
                        </div>

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span aria-hidden="true">
                            <svg fill="#155AB4" height="25px" width="25px" version="1.1" id="Layer_1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewBox="0 0 512.006 512.006" xml:space="preserve">
                                <g>
                                    <g>
                                        <path
                                            d="M388.419,475.59L168.834,256.005L388.418,36.421c8.341-8.341,8.341-21.824,0-30.165s-21.824-8.341-30.165,0
                                                                                                                                                                                                                                                                                                                                                                                                                                L123.586,240.923c-8.341,8.341-8.341,21.824,0,30.165l234.667,234.667c4.16,4.16,9.621,6.251,15.083,6.251
                                                                                                                                                                                                                                                                                                                                                                                                                                c5.461,0,10.923-2.091,15.083-6.251C396.76,497.414,396.76,483.931,388.419,475.59z" />
                                    </g>
                                </g>
                            </svg>
                        </span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span aria-hidden="true">
                            <svg fill="#155AB4" height="25px" width="25px" version="1.1" id="Layer_1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewBox="0 0 330 330" xml:space="preserve">
                                <path id="XMLID_222_"
                                    d="M250.606,154.389l-150-149.996c-5.857-5.858-15.355-5.858-21.213,0.001
                                                                                                                                                                                                                                                                                                                                                                                                                        c-5.857,5.858-5.857,15.355,0.001,21.213l139.393,139.39L79.393,304.394c-5.857,5.858-5.857,15.355,0.001,21.213
                                                                                                                                                                                                                                                                                                                                                                                                                        C82.322,328.536,86.161,330,90,330s7.678-1.464,10.607-4.394l149.999-150.004c2.814-2.813,4.394-6.628,4.394-10.606
                                                                                                                                                                                                                                                                                                                                                                                                                        C255,161.018,253.42,157.202,250.606,154.389z" />
                            </svg>
                        </span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <!-- Right Side Contact Form -->
            <div class="col-md-6 pb-5 pb-md-0">
                <div class="section-title mb-4">
                    <h1>Grow Your <span class="section-title1">Business</span><br /> By <span
                            class="section-title1">Connecting</span> with Us</h1>
                </div>
                <p>Get in touch for personalized support and expert solutions tailored to your needs.</p>
                <form action="{{ route('contact.submit') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <input type="text" id="name" name="name" class="form-control" placeholder="Name*"
                            required>
                    </div>
                    <div class="mb-3">
                        <div class="row gx-2">
                            <div class="col-8">
                                <input type="text" id="email" name="email" class="form-control"
                                    placeholder="WhatsApp Number*" required>
                            </div>
                            <div class="col-4 d-flex align-items-center">
                                <button type="button" class="w-100 h-100 contact-btn active" id="cn">
                                    <svg fill="#374151" name="number" height="18px" width="18px" version="1.1"
                                        id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 308 308"
                                        xml:space="preserve">
                                        <g id="XMLID_468_">
                                            <path id="XMLID_469_"
                                                d="M227.904,176.981c-0.6-0.288-23.054-11.345-27.044-12.781c-1.629-0.585-3.374-1.156-5.23-1.156
                                                                                          c-3.032,0-5.579,1.511-7.563,4.479c-2.243,3.334-9.033,11.271-11.131,13.642c-0.274,0.313-0.648,0.687-0.872,0.687
                                                                                          c-0.201,0-3.676-1.431-4.728-1.888c-24.087-10.463-42.37-35.624-44.877-39.867c-0.358-0.61-0.373-0.887-0.376-0.887
                                                                                          c0.088-0.323,0.898-1.135,1.316-1.554c1.223-1.21,2.548-2.805,3.83-4.348c0.607-0.731,1.215-1.463,1.812-2.153
                                                                                          c1.86-2.164,2.688-3.844,3.648-5.79l0.503-1.011c2.344-4.657,0.342-8.587-0.305-9.856c-0.531-1.062-10.012-23.944-11.02-26.348
                                                                                          c-2.424-5.801-5.627-8.502-10.078-8.502c-0.413,0,0,0-1.732,0.073c-2.109,0.089-13.594,1.601-18.672,4.802
                                                                                          c-5.385,3.395-14.495,14.217-14.495,33.249c0,17.129,10.87,33.302,15.537,39.453c0.116,0.155,0.329,0.47,0.638,0.922
                                                                                          c17.873,26.102,40.154,45.446,62.741,54.469c21.745,8.686,32.042,9.69,37.896,9.69c0.001,0,0.001,0,0.001,0
                                                                                          c2.46,0,4.429-0.193,6.166-0.364l1.102-0.105c7.512-0.666,24.02-9.22,27.775-19.655c2.958-8.219,3.738-17.199,1.77-20.458
                                                                                          C233.168,179.508,230.845,178.393,227.904,176.981z" />
                                            <path id="XMLID_470_"
                                                d="M156.734,0C73.318,0,5.454,67.354,5.454,150.143c0,26.777,7.166,52.988,20.741,75.928L0.212,302.716
                                                                                          c-0.484,1.429-0.124,3.009,0.933,4.085C1.908,307.58,2.943,308,4,308c0.405,0,0.813-0.061,1.211-0.188l79.92-25.396
                                                                                          c21.87,11.685,46.588,17.853,71.604,17.853C240.143,300.27,308,232.923,308,150.143C308,67.354,240.143,0,156.734,0z
                                                                                          M156.734,268.994c-23.539,0-46.338-6.797-65.936-19.657c-0.659-0.433-1.424-0.655-2.194-0.655c-0.407,0-0.815,0.062-1.212,0.188
                                                                                          l-40.035,12.726l12.924-38.129c0.418-1.234,0.209-2.595-0.561-3.647c-14.924-20.392-22.813-44.485-22.813-69.677
                                                                                          c0-65.543,53.754-118.867,119.826-118.867c66.064,0,119.812,53.324,119.812,118.867
                                                                                          C276.546,215.678,222.799,268.994,156.734,268.994z" />
                                        </g>
                                    </svg>
                                </button>
                                <span class="px-2">Or</span>
                                <button type="button" name="email" class="w-100 h-100 contact-btn" id="ce">
                                    <svg width="22px" height="20px" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16 12C16 14.2091 14.2091 16 12 16C9.79086 16 8 14.2091 8 12C8 9.79086 9.79086 8 12 8C14.2091 8 16 9.79086 16 12ZM16 12V13.5C16 14.8807 17.1193 16 18.5 16V16C19.8807 16 21 14.8807 21 13.5V12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21H16"
                                            stroke="#374151" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <select id="category" name="category" class="form-select" required>
                            <option value="">Select a Category*</option>
                            <option value="management-software">Management Software</option>
                            <option value="saas">SaaS (Software as a Service)</option>
                            <option value="web-development">Web Development</option>
                            <option value="app-development">Mobile App Development</option>
                            <option value="digital-marketing">Digital Marketing</option>
                            <option value="ui-design">UI UX Design</option>
                            <option value="graphics-design">Graphics Design</option>
                            <option value="video-editing">Video Editing</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <textarea id="message" name="message" class="form-control" rows="4" placeholder="Send a Message*" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Schedule -->
    <section class="container-fluid bg-testimonial">
        <div class="container py-5">
            <div class="row ">
                <div class="col-lg-6 text-start d-flex justify-content-center align-items-center pb-5">
                    <div class="w-100">
                        <h3 class="section-title text-light pb-3">Make Your Plan Happen</h3>
                        <p class="pb-3 text-white">Let's unite and craft something truly remarkable. We're excited
                            to collaborate and bring visionary ideas to life.</p>
                        <a href="{{ route('schedule') }}" class="btn-default btn btn-white font-main"
                            id="calendly-btn">Schedule A Meeting
                            <svg class="ms-3" width="15" height="14" viewBox="0 0 16 15" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.5 14L14.5 1M14.5 1L14.5 13.48M14.5 1L2.02 1" class="icon-path"
                                    stroke="#60A5FA" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <img class="w-75" src="{{ asset('Frontend') }}/images/src/x1.png" alt="synex">
                </div>
            </div>

        </div>
    </section>

    <!-- News Letter-->
    <x-newsletter />
@endsection

@section('script')
    <script>
        document.getElementById('ce').addEventListener('click', function() {
            // Change input type to email
            const input = document.getElementById('email');
            input.type = 'email';
            input.placeholder = 'Email Address*';

            // Toggle active class between buttons
            document.getElementById('ce').classList.add('active');
            document.getElementById('cn').classList.remove('active');
        });

        document.getElementById('cn').addEventListener('click', function() {
            // Change input type to text
            const input = document.getElementById('email');
            input.type = 'number';
            input.placeholder = 'WhatsApp Number*';

            // Toggle active class between buttons
            document.getElementById('cn').classList.add('active');
            document.getElementById('ce').classList.remove('active');
        });
    </script>
@endsection
