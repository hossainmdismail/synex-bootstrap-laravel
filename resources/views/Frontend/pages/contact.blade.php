@extends('Frontend.layout.app')
@section('content')
    <!-- Contact Form with Left Image Slide -->
    <section class="container pb-md-5">
        <div class="row py-2 py-md-5">
            <div class="col-md-6 px-md-5 pb-5 pb-md-0">
                <div id="carouselExampleCaptions" class="px-md-5 carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('Frontend') }}/images/icons/slide.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Web Development</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('Frontend') }}/images/icons/slide.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Web Development</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('Frontend') }}/images/icons/slide.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Web Development</h5>
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
                                        <path d="M388.419,475.59L168.834,256.005L388.418,36.421c8.341-8.341,8.341-21.824,0-30.165s-21.824-8.341-30.165,0
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
                                <path id="XMLID_222_" d="M250.606,154.389l-150-149.996c-5.857-5.858-15.355-5.858-21.213,0.001
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
                    <h1>Grow Your <span class="section-title1">Business</span><br /> with Us</h1>
                </div>
                <p>Contact us as you are comfortable.</p>
                <form>
                    <div class="mb-3">
                        <input type="text" id="name" name="name" class="form-control" placeholder="Name*"
                            required>
                    </div>
                    <div class="mb-3">
                        <input type="text" id="email" name="email" class="form-control"
                            placeholder="Email or WhatsApp Number*" required>
                    </div>
                    <div class="mb-3">
                        <select id="category" name="category" class="form-select" required>
                            <option value="">Select a Category*</option>
                            <option value="web-development">Web Development</option>
                            <option value="design">Design</option>
                            <option value="marketing">Marketing</option>
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
                        <button class="btn-default btn btn-white font-main">Schedule Metting
                            <svg class="ms-3" width="15" height="14" viewBox="0 0 16 15" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.5 14L14.5 1M14.5 1L14.5 13.48M14.5 1L2.02 1" class="icon-path"
                                    stroke="#60A5FA" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </button>
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
