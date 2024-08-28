@extends('Frontend.layout.app')

@section('content')
    @include('Frontend.layout.calendly')

    <section class="container-fluid service-hero" style="background-image: url({{ asset('Frontend') }}/images/hero.webp);">
        <div class="shadow">
            <div class="container py-5 h-100 d-flex flex-column justify-content-between">
                <div class="row py-4 py-md-5">
                    <div class="col-md-6 py-md-5 m-auto text-center">
                        <h1 class="section-title text-white pb-2"><span class="font-main">Services</span> We Provide
                        </h1>
                        <h2 class="caption">Unlock Your Business Potential with Our Specialized Services
                            and
                            Strategic Expertise</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 m-auto text-center">
                        <p class="scroll-text">Scroll Down</p>
                        <a href="#content"><svg class="scrolldown" width="23" height="22" viewBox="0 0 23 22"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.5 7V15M11.5 15L15 11.5M11.5 15L8 11.5" stroke="white" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M1.5 11C1.5 16.5228 5.97715 21 11.5 21C17.0228 21 21.5 16.5228 21.5 11C21.5 5.47715 17.0228 1 11.5 1C5.97715 1 1.5 5.47715 1.5 11Z"
                                    stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Section 1 -->
    <section class="container-fluid bg-testimonial" id="content">
        <div class="container py-4 p-md-5">
            <div class="row py-md-5">
                <div class="col-md-6 d-flex z-3 justify-content-center justify-content-md-end order-2 order-md-1">
                    <div class="card rounded-sm p-3 service-card">
                        <div class="card-body">
                            <h3>Management Software</h3>
                            <p class="text-black">Streamline Your Operations with Cutting-Edge Solutions</p>
                            <ul class="service-list">
                                <li>
                                    <span>
                                        <svg width="18" height="18" viewBox="0 0 21 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.7181 0.400757C5.10389 0.400757 0.536377 4.88676 0.536377 10.4008C0.536377 15.9148 5.10389 20.4008 10.7181 20.4008C16.3323 20.4008 20.8998 15.9148 20.8998 10.4008C20.8998 4.88676 16.3323 0.400757 10.7181 0.400757ZM8.68276 14.8138L5.63554 11.8274C5.23269 11.4326 5.23188 10.7841 5.63375 10.3883C6.02575 10.0022 6.65485 10.0015 7.04774 10.3867L8.68072 11.9878L13.364 7.38803C13.7565 7.00259 14.3854 7.00259 14.7778 7.38803C15.1804 7.78341 15.1804 8.43211 14.7778 8.82749L8.68276 14.8138Z"
                                                fill="#3B82F6" />
                                        </svg>

                                    </span>
                                    Centralized Dashboard
                                </li>
                                <li>
                                    <span>
                                        <svg width="18" height="18" viewBox="0 0 21 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.7181 0.400757C5.10389 0.400757 0.536377 4.88676 0.536377 10.4008C0.536377 15.9148 5.10389 20.4008 10.7181 20.4008C16.3323 20.4008 20.8998 15.9148 20.8998 10.4008C20.8998 4.88676 16.3323 0.400757 10.7181 0.400757ZM8.68276 14.8138L5.63554 11.8274C5.23269 11.4326 5.23188 10.7841 5.63375 10.3883C6.02575 10.0022 6.65485 10.0015 7.04774 10.3867L8.68072 11.9878L13.364 7.38803C13.7565 7.00259 14.3854 7.00259 14.7778 7.38803C15.1804 7.78341 15.1804 8.43211 14.7778 8.82749L8.68276 14.8138Z"
                                                fill="#3B82F6" />
                                        </svg>

                                    </span>
                                    Real-Time Analytics
                                </li>
                                <li>
                                    <span>
                                        <svg width="18" height="18" viewBox="0 0 21 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.7181 0.400757C5.10389 0.400757 0.536377 4.88676 0.536377 10.4008C0.536377 15.9148 5.10389 20.4008 10.7181 20.4008C16.3323 20.4008 20.8998 15.9148 20.8998 10.4008C20.8998 4.88676 16.3323 0.400757 10.7181 0.400757ZM8.68276 14.8138L5.63554 11.8274C5.23269 11.4326 5.23188 10.7841 5.63375 10.3883C6.02575 10.0022 6.65485 10.0015 7.04774 10.3867L8.68072 11.9878L13.364 7.38803C13.7565 7.00259 14.3854 7.00259 14.7778 7.38803C15.1804 7.78341 15.1804 8.43211 14.7778 8.82749L8.68276 14.8138Z"
                                                fill="#3B82F6" />
                                        </svg>

                                    </span>
                                    Automated Workflows
                                </li>
                                <li>
                                    <span>
                                        <svg width="18" height="18" viewBox="0 0 21 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.7181 0.400757C5.10389 0.400757 0.536377 4.88676 0.536377 10.4008C0.536377 15.9148 5.10389 20.4008 10.7181 20.4008C16.3323 20.4008 20.8998 15.9148 20.8998 10.4008C20.8998 4.88676 16.3323 0.400757 10.7181 0.400757ZM8.68276 14.8138L5.63554 11.8274C5.23269 11.4326 5.23188 10.7841 5.63375 10.3883C6.02575 10.0022 6.65485 10.0015 7.04774 10.3867L8.68072 11.9878L13.364 7.38803C13.7565 7.00259 14.3854 7.00259 14.7778 7.38803C15.1804 7.78341 15.1804 8.43211 14.7778 8.82749L8.68276 14.8138Z"
                                                fill="#3B82F6" />
                                        </svg>

                                    </span>
                                    Collaborative Tools
                                </li>
                            </ul>
                            <a href="{{ route('service.software') }}" class="btn btn-primary btn-sm">Learn more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 order-1 order-md-2">
                    <div class="w-100 position-relative serviceimg-box">
                        <img class="service-image" src="{{ asset('Frontend') }}/images/service2.webp" width="90%"
                            alt="" srcset="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2 -->
    <section class="container-fluid">
        <div class="container py-4 p-md-5">
            <div class="row py-md-5">
                <div class="col-md-6">
                    <div class="w-100 position-relative serviceimg-box">
                        <img class="service-image-right" src="{{ asset('Frontend') }}/images/service3.webp" width="90%"
                            alt="" srcset="">
                    </div>
                </div>

                <div class="col-md-6 d-flex z-3 justify-content-center justify-content-md-start">
                    <div class="card rounded-sm p-3 service-card">
                        <div class="card-body">
                            <h3>Web Development</h3>
                            <p class="text-black">Expert Solutions for Your Online Presence</p>
                            <ul class="service-list">
                                <li>
                                    <span>
                                        <svg width="18" height="18" viewBox="0 0 21 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.7181 0.400757C5.10389 0.400757 0.536377 4.88676 0.536377 10.4008C0.536377 15.9148 5.10389 20.4008 10.7181 20.4008C16.3323 20.4008 20.8998 15.9148 20.8998 10.4008C20.8998 4.88676 16.3323 0.400757 10.7181 0.400757ZM8.68276 14.8138L5.63554 11.8274C5.23269 11.4326 5.23188 10.7841 5.63375 10.3883C6.02575 10.0022 6.65485 10.0015 7.04774 10.3867L8.68072 11.9878L13.364 7.38803C13.7565 7.00259 14.3854 7.00259 14.7778 7.38803C15.1804 7.78341 15.1804 8.43211 14.7778 8.82749L8.68276 14.8138Z"
                                                fill="#3B82F6" />
                                        </svg>

                                    </span>
                                    Custom Website Design
                                </li>
                                <li>
                                    <span>
                                        <svg width="18" height="18" viewBox="0 0 21 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.7181 0.400757C5.10389 0.400757 0.536377 4.88676 0.536377 10.4008C0.536377 15.9148 5.10389 20.4008 10.7181 20.4008C16.3323 20.4008 20.8998 15.9148 20.8998 10.4008C20.8998 4.88676 16.3323 0.400757 10.7181 0.400757ZM8.68276 14.8138L5.63554 11.8274C5.23269 11.4326 5.23188 10.7841 5.63375 10.3883C6.02575 10.0022 6.65485 10.0015 7.04774 10.3867L8.68072 11.9878L13.364 7.38803C13.7565 7.00259 14.3854 7.00259 14.7778 7.38803C15.1804 7.78341 15.1804 8.43211 14.7778 8.82749L8.68276 14.8138Z"
                                                fill="#3B82F6" />
                                        </svg>

                                    </span>
                                    Mobile-Friendly Development
                                </li>
                                <li>
                                    <span>
                                        <svg width="18" height="18" viewBox="0 0 21 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.7181 0.400757C5.10389 0.400757 0.536377 4.88676 0.536377 10.4008C0.536377 15.9148 5.10389 20.4008 10.7181 20.4008C16.3323 20.4008 20.8998 15.9148 20.8998 10.4008C20.8998 4.88676 16.3323 0.400757 10.7181 0.400757ZM8.68276 14.8138L5.63554 11.8274C5.23269 11.4326 5.23188 10.7841 5.63375 10.3883C6.02575 10.0022 6.65485 10.0015 7.04774 10.3867L8.68072 11.9878L13.364 7.38803C13.7565 7.00259 14.3854 7.00259 14.7778 7.38803C15.1804 7.78341 15.1804 8.43211 14.7778 8.82749L8.68276 14.8138Z"
                                                fill="#3B82F6" />
                                        </svg>

                                    </span>
                                    E-Commerce Solutions
                                </li>
                                <li>
                                    <span>
                                        <svg width="18" height="18" viewBox="0 0 21 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.7181 0.400757C5.10389 0.400757 0.536377 4.88676 0.536377 10.4008C0.536377 15.9148 5.10389 20.4008 10.7181 20.4008C16.3323 20.4008 20.8998 15.9148 20.8998 10.4008C20.8998 4.88676 16.3323 0.400757 10.7181 0.400757ZM8.68276 14.8138L5.63554 11.8274C5.23269 11.4326 5.23188 10.7841 5.63375 10.3883C6.02575 10.0022 6.65485 10.0015 7.04774 10.3867L8.68072 11.9878L13.364 7.38803C13.7565 7.00259 14.3854 7.00259 14.7778 7.38803C15.1804 7.78341 15.1804 8.43211 14.7778 8.82749L8.68276 14.8138Z"
                                                fill="#3B82F6" />
                                        </svg>

                                    </span>
                                    SEO Optimization
                                </li>
                            </ul>
                            <a href="{{ route('service.web-dev') }}" class="btn btn-primary btn-sm">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 3 -->
    <section class="container-fluid bg-testimonial">
        <div class="container py-4 p-md-5">
            <div class="row py-md-5">
                <div class="col-md-6 d-flex z-3 justify-content-center justify-content-md-end order-2 order-md-1">
                    <div class="card rounded-sm p-3 service-card">
                        <div class="card-body">
                            <h3>UI UX Design</h3>
                            <p class="text-black">Create Intuitive and Engaging User Experiences</p>
                            <ul class="service-list">
                                <li>
                                    <span>
                                        <svg width="18" height="18" viewBox="0 0 21 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.7181 0.400757C5.10389 0.400757 0.536377 4.88676 0.536377 10.4008C0.536377 15.9148 5.10389 20.4008 10.7181 20.4008C16.3323 20.4008 20.8998 15.9148 20.8998 10.4008C20.8998 4.88676 16.3323 0.400757 10.7181 0.400757ZM8.68276 14.8138L5.63554 11.8274C5.23269 11.4326 5.23188 10.7841 5.63375 10.3883C6.02575 10.0022 6.65485 10.0015 7.04774 10.3867L8.68072 11.9878L13.364 7.38803C13.7565 7.00259 14.3854 7.00259 14.7778 7.38803C15.1804 7.78341 15.1804 8.43211 14.7778 8.82749L8.68276 14.8138Z"
                                                fill="#3B82F6" />
                                        </svg>

                                    </span>
                                    User-Centered Design
                                </li>
                                <li>
                                    <span>
                                        <svg width="18" height="18" viewBox="0 0 21 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.7181 0.400757C5.10389 0.400757 0.536377 4.88676 0.536377 10.4008C0.536377 15.9148 5.10389 20.4008 10.7181 20.4008C16.3323 20.4008 20.8998 15.9148 20.8998 10.4008C20.8998 4.88676 16.3323 0.400757 10.7181 0.400757ZM8.68276 14.8138L5.63554 11.8274C5.23269 11.4326 5.23188 10.7841 5.63375 10.3883C6.02575 10.0022 6.65485 10.0015 7.04774 10.3867L8.68072 11.9878L13.364 7.38803C13.7565 7.00259 14.3854 7.00259 14.7778 7.38803C15.1804 7.78341 15.1804 8.43211 14.7778 8.82749L8.68276 14.8138Z"
                                                fill="#3B82F6" />
                                        </svg>

                                    </span>
                                    Interactive Prototypes
                                </li>
                                <li>
                                    <span>
                                        <svg width="18" height="18" viewBox="0 0 21 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.7181 0.400757C5.10389 0.400757 0.536377 4.88676 0.536377 10.4008C0.536377 15.9148 5.10389 20.4008 10.7181 20.4008C16.3323 20.4008 20.8998 15.9148 20.8998 10.4008C20.8998 4.88676 16.3323 0.400757 10.7181 0.400757ZM8.68276 14.8138L5.63554 11.8274C5.23269 11.4326 5.23188 10.7841 5.63375 10.3883C6.02575 10.0022 6.65485 10.0015 7.04774 10.3867L8.68072 11.9878L13.364 7.38803C13.7565 7.00259 14.3854 7.00259 14.7778 7.38803C15.1804 7.78341 15.1804 8.43211 14.7778 8.82749L8.68276 14.8138Z"
                                                fill="#3B82F6" />
                                        </svg>

                                    </span>
                                    Responsive Design
                                </li>
                                <li>
                                    <span>
                                        <svg width="18" height="18" viewBox="0 0 21 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.7181 0.400757C5.10389 0.400757 0.536377 4.88676 0.536377 10.4008C0.536377 15.9148 5.10389 20.4008 10.7181 20.4008C16.3323 20.4008 20.8998 15.9148 20.8998 10.4008C20.8998 4.88676 16.3323 0.400757 10.7181 0.400757ZM8.68276 14.8138L5.63554 11.8274C5.23269 11.4326 5.23188 10.7841 5.63375 10.3883C6.02575 10.0022 6.65485 10.0015 7.04774 10.3867L8.68072 11.9878L13.364 7.38803C13.7565 7.00259 14.3854 7.00259 14.7778 7.38803C15.1804 7.78341 15.1804 8.43211 14.7778 8.82749L8.68276 14.8138Z"
                                                fill="#3B82F6" />
                                        </svg>

                                    </span>
                                    Usability Testing
                                </li>
                            </ul>
                            <a href="{{ route('service.uiux') }}" class="btn btn-primary btn-sm">Learn more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 order-1 order-md-2">
                    <div class="w-100 position-relative serviceimg-box">
                        <img class="service-image" src="{{ asset('Frontend') }}/images/service4.webp" width="90%"
                            alt="" srcset="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 4 -->
    <section class="container-fluid">
        <div class="container py-4 p-md-5">
            <div class="row py-md-5">
                <div class="col-md-6">
                    <div class="w-100 position-relative serviceimg-box">
                        <img class="service-image-right" src="{{ asset('Frontend') }}/images/service5.webp"
                            width="90%" alt="" srcset="">
                    </div>
                </div>

                <div class="col-md-6 d-flex z-3 justify-content-center justify-content-md-start">
                    <div class="card rounded-sm p-3 service-card">
                        <div class="card-body">
                            <h3>Digital Marketing</h3>
                            <p class="text-black">Boost Your Online Presence with Strategic Campaigns</p>
                            <ul class="service-list">
                                <li>
                                    <span>
                                        <svg width="18" height="18" viewBox="0 0 21 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.7181 0.400757C5.10389 0.400757 0.536377 4.88676 0.536377 10.4008C0.536377 15.9148 5.10389 20.4008 10.7181 20.4008C16.3323 20.4008 20.8998 15.9148 20.8998 10.4008C20.8998 4.88676 16.3323 0.400757 10.7181 0.400757ZM8.68276 14.8138L5.63554 11.8274C5.23269 11.4326 5.23188 10.7841 5.63375 10.3883C6.02575 10.0022 6.65485 10.0015 7.04774 10.3867L8.68072 11.9878L13.364 7.38803C13.7565 7.00259 14.3854 7.00259 14.7778 7.38803C15.1804 7.78341 15.1804 8.43211 14.7778 8.82749L8.68276 14.8138Z"
                                                fill="#3B82F6" />
                                        </svg>

                                    </span>
                                    Targeted Advertising
                                </li>
                                <li>
                                    <span>
                                        <svg width="18" height="18" viewBox="0 0 21 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.7181 0.400757C5.10389 0.400757 0.536377 4.88676 0.536377 10.4008C0.536377 15.9148 5.10389 20.4008 10.7181 20.4008C16.3323 20.4008 20.8998 15.9148 20.8998 10.4008C20.8998 4.88676 16.3323 0.400757 10.7181 0.400757ZM8.68276 14.8138L5.63554 11.8274C5.23269 11.4326 5.23188 10.7841 5.63375 10.3883C6.02575 10.0022 6.65485 10.0015 7.04774 10.3867L8.68072 11.9878L13.364 7.38803C13.7565 7.00259 14.3854 7.00259 14.7778 7.38803C15.1804 7.78341 15.1804 8.43211 14.7778 8.82749L8.68276 14.8138Z"
                                                fill="#3B82F6" />
                                        </svg>

                                    </span>
                                    SEO Optimization
                                </li>
                                <li>
                                    <span>
                                        <svg width="18" height="18" viewBox="0 0 21 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.7181 0.400757C5.10389 0.400757 0.536377 4.88676 0.536377 10.4008C0.536377 15.9148 5.10389 20.4008 10.7181 20.4008C16.3323 20.4008 20.8998 15.9148 20.8998 10.4008C20.8998 4.88676 16.3323 0.400757 10.7181 0.400757ZM8.68276 14.8138L5.63554 11.8274C5.23269 11.4326 5.23188 10.7841 5.63375 10.3883C6.02575 10.0022 6.65485 10.0015 7.04774 10.3867L8.68072 11.9878L13.364 7.38803C13.7565 7.00259 14.3854 7.00259 14.7778 7.38803C15.1804 7.78341 15.1804 8.43211 14.7778 8.82749L8.68276 14.8138Z"
                                                fill="#3B82F6" />
                                        </svg>

                                    </span>
                                    Content Marketing
                                </li>
                                <li>
                                    <span>
                                        <svg width="18" height="18" viewBox="0 0 21 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.7181 0.400757C5.10389 0.400757 0.536377 4.88676 0.536377 10.4008C0.536377 15.9148 5.10389 20.4008 10.7181 20.4008C16.3323 20.4008 20.8998 15.9148 20.8998 10.4008C20.8998 4.88676 16.3323 0.400757 10.7181 0.400757ZM8.68276 14.8138L5.63554 11.8274C5.23269 11.4326 5.23188 10.7841 5.63375 10.3883C6.02575 10.0022 6.65485 10.0015 7.04774 10.3867L8.68072 11.9878L13.364 7.38803C13.7565 7.00259 14.3854 7.00259 14.7778 7.38803C15.1804 7.78341 15.1804 8.43211 14.7778 8.82749L8.68276 14.8138Z"
                                                fill="#3B82F6" />
                                        </svg>

                                    </span>
                                    Social Media Management
                                </li>
                            </ul>
                            <a href="{{ route('service.digital-marketing') }}" class="btn btn-primary btn-sm">Learn
                                more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 5 -->
    <section class="container-fluid bg-testimonial">
        <div class="container py-4 p-md-5">
            <div class="row py-md-5">
                <div class="col-md-6 d-flex z-3 justify-content-center justify-content-md-end order-2 order-md-1">
                    <div class="card rounded-sm p-3 service-card">
                        <div class="card-body">
                            <h3>Graphics Design</h3>
                            <p class="text-black">Expert Solutions for Your Online Presence</p>
                            <ul class="service-list">
                                <li>
                                    <span>
                                        <svg width="18" height="18" viewBox="0 0 21 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.7181 0.400757C5.10389 0.400757 0.536377 4.88676 0.536377 10.4008C0.536377 15.9148 5.10389 20.4008 10.7181 20.4008C16.3323 20.4008 20.8998 15.9148 20.8998 10.4008C20.8998 4.88676 16.3323 0.400757 10.7181 0.400757ZM8.68276 14.8138L5.63554 11.8274C5.23269 11.4326 5.23188 10.7841 5.63375 10.3883C6.02575 10.0022 6.65485 10.0015 7.04774 10.3867L8.68072 11.9878L13.364 7.38803C13.7565 7.00259 14.3854 7.00259 14.7778 7.38803C15.1804 7.78341 15.1804 8.43211 14.7778 8.82749L8.68276 14.8138Z"
                                                fill="#3B82F6" />
                                        </svg>

                                    </span>
                                    Custom Website Design
                                </li>
                                <li>
                                    <span>
                                        <svg width="18" height="18" viewBox="0 0 21 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.7181 0.400757C5.10389 0.400757 0.536377 4.88676 0.536377 10.4008C0.536377 15.9148 5.10389 20.4008 10.7181 20.4008C16.3323 20.4008 20.8998 15.9148 20.8998 10.4008C20.8998 4.88676 16.3323 0.400757 10.7181 0.400757ZM8.68276 14.8138L5.63554 11.8274C5.23269 11.4326 5.23188 10.7841 5.63375 10.3883C6.02575 10.0022 6.65485 10.0015 7.04774 10.3867L8.68072 11.9878L13.364 7.38803C13.7565 7.00259 14.3854 7.00259 14.7778 7.38803C15.1804 7.78341 15.1804 8.43211 14.7778 8.82749L8.68276 14.8138Z"
                                                fill="#3B82F6" />
                                        </svg>

                                    </span>
                                    Mobile-Friendly Development
                                </li>
                                <li>
                                    <span>
                                        <svg width="18" height="18" viewBox="0 0 21 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.7181 0.400757C5.10389 0.400757 0.536377 4.88676 0.536377 10.4008C0.536377 15.9148 5.10389 20.4008 10.7181 20.4008C16.3323 20.4008 20.8998 15.9148 20.8998 10.4008C20.8998 4.88676 16.3323 0.400757 10.7181 0.400757ZM8.68276 14.8138L5.63554 11.8274C5.23269 11.4326 5.23188 10.7841 5.63375 10.3883C6.02575 10.0022 6.65485 10.0015 7.04774 10.3867L8.68072 11.9878L13.364 7.38803C13.7565 7.00259 14.3854 7.00259 14.7778 7.38803C15.1804 7.78341 15.1804 8.43211 14.7778 8.82749L8.68276 14.8138Z"
                                                fill="#3B82F6" />
                                        </svg>

                                    </span>
                                    E-Commerce Solutions
                                </li>
                                <li>
                                    <span>
                                        <svg width="18" height="18" viewBox="0 0 21 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.7181 0.400757C5.10389 0.400757 0.536377 4.88676 0.536377 10.4008C0.536377 15.9148 5.10389 20.4008 10.7181 20.4008C16.3323 20.4008 20.8998 15.9148 20.8998 10.4008C20.8998 4.88676 16.3323 0.400757 10.7181 0.400757ZM8.68276 14.8138L5.63554 11.8274C5.23269 11.4326 5.23188 10.7841 5.63375 10.3883C6.02575 10.0022 6.65485 10.0015 7.04774 10.3867L8.68072 11.9878L13.364 7.38803C13.7565 7.00259 14.3854 7.00259 14.7778 7.38803C15.1804 7.78341 15.1804 8.43211 14.7778 8.82749L8.68276 14.8138Z"
                                                fill="#3B82F6" />
                                        </svg>

                                    </span>
                                    SEO Optimization
                                </li>
                            </ul>
                            <a href="{{ route('service.graphics-design') }}" class="btn btn-primary btn-sm">Learn more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 order-1 order-md-2">
                    <div class="w-100 position-relative serviceimg-box">
                        <img class="service-image" src="{{ asset('Frontend') }}/images/service1.webp" width="90%"
                            alt="" srcset="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 6 -->
    <section class="container-fluid">
        <div class="container py-4 p-md-5">
            <div class="row py-md-5">
                <div class="col-md-6">
                    <div class="w-100 position-relative serviceimg-box">
                        <img class="service-image-right" src="{{ asset('Frontend') }}/images/service7.webp"
                            width="90%" alt="" srcset="">
                    </div>
                </div>

                <div class="col-md-6 d-flex z-3 justify-content-center justify-content-md-start">
                    <div class="card rounded-sm p-3 service-card">
                        <div class="card-body">
                            <h3>Mobile App Development</h3>
                            <p class="text-black">Build High-Performance Apps for iOS and Android</p>
                            <ul class="service-list">
                                <li>
                                    <span>
                                        <svg width="18" height="18" viewBox="0 0 21 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.7181 0.400757C5.10389 0.400757 0.536377 4.88676 0.536377 10.4008C0.536377 15.9148 5.10389 20.4008 10.7181 20.4008C16.3323 20.4008 20.8998 15.9148 20.8998 10.4008C20.8998 4.88676 16.3323 0.400757 10.7181 0.400757ZM8.68276 14.8138L5.63554 11.8274C5.23269 11.4326 5.23188 10.7841 5.63375 10.3883C6.02575 10.0022 6.65485 10.0015 7.04774 10.3867L8.68072 11.9878L13.364 7.38803C13.7565 7.00259 14.3854 7.00259 14.7778 7.38803C15.1804 7.78341 15.1804 8.43211 14.7778 8.82749L8.68276 14.8138Z"
                                                fill="#3B82F6" />
                                        </svg>

                                    </span>
                                    Custom App Design
                                </li>
                                <li>
                                    <span>
                                        <svg width="18" height="18" viewBox="0 0 21 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.7181 0.400757C5.10389 0.400757 0.536377 4.88676 0.536377 10.4008C0.536377 15.9148 5.10389 20.4008 10.7181 20.4008C16.3323 20.4008 20.8998 15.9148 20.8998 10.4008C20.8998 4.88676 16.3323 0.400757 10.7181 0.400757ZM8.68276 14.8138L5.63554 11.8274C5.23269 11.4326 5.23188 10.7841 5.63375 10.3883C6.02575 10.0022 6.65485 10.0015 7.04774 10.3867L8.68072 11.9878L13.364 7.38803C13.7565 7.00259 14.3854 7.00259 14.7778 7.38803C15.1804 7.78341 15.1804 8.43211 14.7778 8.82749L8.68276 14.8138Z"
                                                fill="#3B82F6" />
                                        </svg>

                                    </span>
                                    Cross-Platform Compatibility
                                </li>
                                <li>
                                    <span>
                                        <svg width="18" height="18" viewBox="0 0 21 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.7181 0.400757C5.10389 0.400757 0.536377 4.88676 0.536377 10.4008C0.536377 15.9148 5.10389 20.4008 10.7181 20.4008C16.3323 20.4008 20.8998 15.9148 20.8998 10.4008C20.8998 4.88676 16.3323 0.400757 10.7181 0.400757ZM8.68276 14.8138L5.63554 11.8274C5.23269 11.4326 5.23188 10.7841 5.63375 10.3883C6.02575 10.0022 6.65485 10.0015 7.04774 10.3867L8.68072 11.9878L13.364 7.38803C13.7565 7.00259 14.3854 7.00259 14.7778 7.38803C15.1804 7.78341 15.1804 8.43211 14.7778 8.82749L8.68276 14.8138Z"
                                                fill="#3B82F6" />
                                        </svg>

                                    </span>
                                    Robust Backend Integration
                                </li>
                                <li>
                                    <span>
                                        <svg width="18" height="18" viewBox="0 0 21 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.7181 0.400757C5.10389 0.400757 0.536377 4.88676 0.536377 10.4008C0.536377 15.9148 5.10389 20.4008 10.7181 20.4008C16.3323 20.4008 20.8998 15.9148 20.8998 10.4008C20.8998 4.88676 16.3323 0.400757 10.7181 0.400757ZM8.68276 14.8138L5.63554 11.8274C5.23269 11.4326 5.23188 10.7841 5.63375 10.3883C6.02575 10.0022 6.65485 10.0015 7.04774 10.3867L8.68072 11.9878L13.364 7.38803C13.7565 7.00259 14.3854 7.00259 14.7778 7.38803C15.1804 7.78341 15.1804 8.43211 14.7778 8.82749L8.68276 14.8138Z"
                                                fill="#3B82F6" />
                                        </svg>

                                    </span>
                                    Ongoing Maintenance and Support
                                </li>
                            </ul>
                            <a href="{{ route('service.mobile-app') }}" class="btn btn-primary btn-sm">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 7 -->
    <section class="container-fluid bg-testimonial">
        <div class="container py-4 p-md-5">
            <div class="row py-md-5">
                <div class="col-md-6 d-flex z-3 justify-content-center justify-content-md-end order-2 order-md-1">
                    <div class="card rounded-sm p-3 service-card">
                        <div class="card-body">
                            <h3>SaaS (Software as a Service)</h3>
                            <p class="text-black">Expert Solutions for Your Online Presence</p>
                            <ul class="service-list">
                                <li>
                                    <span>
                                        <svg width="18" height="18" viewBox="0 0 21 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.7181 0.400757C5.10389 0.400757 0.536377 4.88676 0.536377 10.4008C0.536377 15.9148 5.10389 20.4008 10.7181 20.4008C16.3323 20.4008 20.8998 15.9148 20.8998 10.4008C20.8998 4.88676 16.3323 0.400757 10.7181 0.400757ZM8.68276 14.8138L5.63554 11.8274C5.23269 11.4326 5.23188 10.7841 5.63375 10.3883C6.02575 10.0022 6.65485 10.0015 7.04774 10.3867L8.68072 11.9878L13.364 7.38803C13.7565 7.00259 14.3854 7.00259 14.7778 7.38803C15.1804 7.78341 15.1804 8.43211 14.7778 8.82749L8.68276 14.8138Z"
                                                fill="#3B82F6" />
                                        </svg>

                                    </span>
                                    Cloud-Based Access
                                </li>
                                <li>
                                    <span>
                                        <svg width="18" height="18" viewBox="0 0 21 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.7181 0.400757C5.10389 0.400757 0.536377 4.88676 0.536377 10.4008C0.536377 15.9148 5.10389 20.4008 10.7181 20.4008C16.3323 20.4008 20.8998 15.9148 20.8998 10.4008C20.8998 4.88676 16.3323 0.400757 10.7181 0.400757ZM8.68276 14.8138L5.63554 11.8274C5.23269 11.4326 5.23188 10.7841 5.63375 10.3883C6.02575 10.0022 6.65485 10.0015 7.04774 10.3867L8.68072 11.9878L13.364 7.38803C13.7565 7.00259 14.3854 7.00259 14.7778 7.38803C15.1804 7.78341 15.1804 8.43211 14.7778 8.82749L8.68276 14.8138Z"
                                                fill="#3B82F6" />
                                        </svg>

                                    </span>
                                    Scalability
                                </li>
                                <li>
                                    <span>
                                        <svg width="18" height="18" viewBox="0 0 21 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.7181 0.400757C5.10389 0.400757 0.536377 4.88676 0.536377 10.4008C0.536377 15.9148 5.10389 20.4008 10.7181 20.4008C16.3323 20.4008 20.8998 15.9148 20.8998 10.4008C20.8998 4.88676 16.3323 0.400757 10.7181 0.400757ZM8.68276 14.8138L5.63554 11.8274C5.23269 11.4326 5.23188 10.7841 5.63375 10.3883C6.02575 10.0022 6.65485 10.0015 7.04774 10.3867L8.68072 11.9878L13.364 7.38803C13.7565 7.00259 14.3854 7.00259 14.7778 7.38803C15.1804 7.78341 15.1804 8.43211 14.7778 8.82749L8.68276 14.8138Z"
                                                fill="#3B82F6" />
                                        </svg>

                                    </span>
                                    Automatic Updates
                                </li>
                                <li>
                                    <span>
                                        <svg width="18" height="18" viewBox="0 0 21 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.7181 0.400757C5.10389 0.400757 0.536377 4.88676 0.536377 10.4008C0.536377 15.9148 5.10389 20.4008 10.7181 20.4008C16.3323 20.4008 20.8998 15.9148 20.8998 10.4008C20.8998 4.88676 16.3323 0.400757 10.7181 0.400757ZM8.68276 14.8138L5.63554 11.8274C5.23269 11.4326 5.23188 10.7841 5.63375 10.3883C6.02575 10.0022 6.65485 10.0015 7.04774 10.3867L8.68072 11.9878L13.364 7.38803C13.7565 7.00259 14.3854 7.00259 14.7778 7.38803C15.1804 7.78341 15.1804 8.43211 14.7778 8.82749L8.68276 14.8138Z"
                                                fill="#3B82F6" />
                                        </svg>

                                    </span>
                                    Cost Efficiency
                                </li>
                            </ul>
                            <a href="{{ route('service.saas') }}" class="btn btn-primary btn-sm">Learn more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 order-1 order-md-2">
                    <div class="w-100 position-relative serviceimg-box">
                        <img class="service-image" src="{{ asset('Frontend') }}/images/service9.webp" width="90%"
                            alt="" srcset="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 8 -->
    <section class="container-fluid">
        <div class="container py-4 p-md-5">
            <div class="row py-md-5">
                <div class="col-md-6">
                    <div class="w-100 position-relative serviceimg-box">
                        <img class="service-image-right" src="{{ asset('Frontend') }}/images/service10.webp"
                            width="90%" alt="" srcset="">
                    </div>
                </div>

                <div class="col-md-6 d-flex z-3 justify-content-center justify-content-md-start">
                    <div class="card rounded-sm p-3 service-card">
                        <div class="card-body">
                            <h3>Video Editing</h3>
                            <p class="text-black"> Impactful animated product explainer videos</p>
                            <ul class="service-list">
                                <li>
                                    <span>
                                        <svg width="18" height="18" viewBox="0 0 21 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.7181 0.400757C5.10389 0.400757 0.536377 4.88676 0.536377 10.4008C0.536377 15.9148 5.10389 20.4008 10.7181 20.4008C16.3323 20.4008 20.8998 15.9148 20.8998 10.4008C20.8998 4.88676 16.3323 0.400757 10.7181 0.400757ZM8.68276 14.8138L5.63554 11.8274C5.23269 11.4326 5.23188 10.7841 5.63375 10.3883C6.02575 10.0022 6.65485 10.0015 7.04774 10.3867L8.68072 11.9878L13.364 7.38803C13.7565 7.00259 14.3854 7.00259 14.7778 7.38803C15.1804 7.78341 15.1804 8.43211 14.7778 8.82749L8.68276 14.8138Z"
                                                fill="#3B82F6" />
                                        </svg>

                                    </span>
                                    Video Editing Service
                                </li>
                                <li>
                                    <span>
                                        <svg width="18" height="18" viewBox="0 0 21 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.7181 0.400757C5.10389 0.400757 0.536377 4.88676 0.536377 10.4008C0.536377 15.9148 5.10389 20.4008 10.7181 20.4008C16.3323 20.4008 20.8998 15.9148 20.8998 10.4008C20.8998 4.88676 16.3323 0.400757 10.7181 0.400757ZM8.68276 14.8138L5.63554 11.8274C5.23269 11.4326 5.23188 10.7841 5.63375 10.3883C6.02575 10.0022 6.65485 10.0015 7.04774 10.3867L8.68072 11.9878L13.364 7.38803C13.7565 7.00259 14.3854 7.00259 14.7778 7.38803C15.1804 7.78341 15.1804 8.43211 14.7778 8.82749L8.68276 14.8138Z"
                                                fill="#3B82F6" />
                                        </svg>

                                    </span>
                                    Arrange clips in sequence
                                </li>
                                <li>
                                    <span>
                                        <svg width="18" height="18" viewBox="0 0 21 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.7181 0.400757C5.10389 0.400757 0.536377 4.88676 0.536377 10.4008C0.536377 15.9148 5.10389 20.4008 10.7181 20.4008C16.3323 20.4008 20.8998 15.9148 20.8998 10.4008C20.8998 4.88676 16.3323 0.400757 10.7181 0.400757ZM8.68276 14.8138L5.63554 11.8274C5.23269 11.4326 5.23188 10.7841 5.63375 10.3883C6.02575 10.0022 6.65485 10.0015 7.04774 10.3867L8.68072 11.9878L13.364 7.38803C13.7565 7.00259 14.3854 7.00259 14.7778 7.38803C15.1804 7.78341 15.1804 8.43211 14.7778 8.82749L8.68276 14.8138Z"
                                                fill="#3B82F6" />
                                        </svg>

                                    </span>
                                    Sync audio and video
                                </li>
                                <li>
                                    <span>
                                        <svg width="18" height="18" viewBox="0 0 21 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.7181 0.400757C5.10389 0.400757 0.536377 4.88676 0.536377 10.4008C0.536377 15.9148 5.10389 20.4008 10.7181 20.4008C16.3323 20.4008 20.8998 15.9148 20.8998 10.4008C20.8998 4.88676 16.3323 0.400757 10.7181 0.400757ZM8.68276 14.8138L5.63554 11.8274C5.23269 11.4326 5.23188 10.7841 5.63375 10.3883C6.02575 10.0022 6.65485 10.0015 7.04774 10.3867L8.68072 11.9878L13.364 7.38803C13.7565 7.00259 14.3854 7.00259 14.7778 7.38803C15.1804 7.78341 15.1804 8.43211 14.7778 8.82749L8.68276 14.8138Z"
                                                fill="#3B82F6" />
                                        </svg>

                                    </span>
                                    Apply color grading
                                </li>
                            </ul>
                            <a href="{{ route('service.video-edit') }}" class="btn btn-primary btn-sm">Learn more</a>
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
