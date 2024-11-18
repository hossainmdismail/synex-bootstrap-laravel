@extends('Frontend.layout.app')
@section('style')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput-jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .input-container {
            position: relative;
            width: 100%;
            height: 50px;
            overflow-x: clip;
        }

        .input-wrapper {
            display: flex;
            align-items: center;
            position: absolute;
            top: 0;
            width: 100%;
            height: 100%;


            transition: transform 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28);
            transform: translateX(100%);

        }

        .visible {
            transform: translateX(0);
        }

        .hidden {
            transform: translateX(-100%);
        }

        .iti.iti--allow-dropdown.iti--separate-dial-code {
            width: 100%;
        }

        .toggle-button {


            border-radius: 6px;
            cursor: pointer;
            background: #eff6ff;
            border: none;
            font-size: 18px;
            padding: 3px 6px;
            padding-left: 0px;
        }

        .input-wrapper input {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            flex: 1;
        }

        .or {
            margin: 0 10px;
            font-weight: 700
        }
    </style>
@endsection
@section('content')

        <!-- start page title -->
        <section class="p-0 top-space-margin page-title-center-alignment">
            <div class="container">
                <div class="row align-items-center justify-content-center extra-very-small-screen">
                    <div class="col-xl-8 col-lg-10 text-center position-relative page-title-extra-large" data-anime='{ "el": "childs", "translateY": [-15, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h1 class="fw-700 text-dark-gray mb-20px ls-minus-2px">Contact</h1>
                        <h2 class="fw-400 ls-0px mb-0">We'd love to hear from you</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->

        <!-- start question section -->
        {{-- <section class="p-0">
            <div class="container">
                <div class="row row-cols-1 row-cols-md-3 row-cols-sm-2 mt-4 justify-content-center" data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="col sm-mb-30px text-center text-sm-start">
                        <span class="fs-14 text-uppercase fw-500 d-block">Have questions?</span>
                        <a href="cdn-cgi/l/email-protection.html#ef878a839faf8c9d8e899b80c18c8082" class="fs-22 ls-minus-05px text-dark-gray fw-500 btn btn-link-gradient expand text-transform-none"><span class="__cf_email__" data-cfemail="99f1fcf5e9d9faebf8ffedf6b7faf6f4">[email&#160;protected]</span><span class="bg-dark-gray"></span></a>
                    </div>
                    <div class="col sm-mb-30px text-center text-sm-start">
                        <span class="fs-14 text-uppercase fw-500 d-block">Join our team?</span>
                        <a href="cdn-cgi/l/email-protection.html#55363427303027261536273433213a7b363a38" class="fs-22 ls-minus-05px text-dark-gray fw-500 btn btn-link-gradient expand text-transform-none"><span class="__cf_email__" data-cfemail="6a090b180f0f18192a09180b0c1e0544090507">[email&#160;protected]</span><span class="bg-dark-gray"></span></a>
                    </div>
                    <div class="col text-center text-sm-start">
                        <span class="fs-14 text-uppercase fw-500 d-block">Business inquiries?</span>
                        <a href="cdn-cgi/l/email-protection.html#422a272e2e2d0221302324362d6c212d2f" class="fs-22 ls-minus-05px text-dark-gray fw-500 btn btn-link-gradient expand text-transform-none"><span class="__cf_email__" data-cfemail="fc9499909093bc9f8e9d9a8893d29f9391">[email&#160;protected]</span><span class="bg-dark-gray"></span></a>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- end section -->

        <!-- start address section -->
        <section class="pt-4 lg-pt-65px">
            <div class="container">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-md-2 justify-content-center">

                    <div class="col md-mb-60px sm-mb-45px" data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)">
                        <div>
                            <img class="border-radius-4px" alt="" data-cfsrc="images/demo-web-agency-contact-01.jpg" style="display:none;visibility:hidden;" /><noscript><img src="images/demo-web-agency-contact-01.jpg" class="border-radius-4px" alt=""/></noscript>
                        </div>
                        <div class="position-relative ps-40px pe-40px pt-50px lg-ps-25px lg-pe-25px sm-pt-35px">
                            <div class="fs-80 fw-700 text-uppercase text-dark-gray position-absolute top-minus-40px left-40px lg-left-25px">Can</div>
                            <p class="mt-10px mb-15px lh-28">    379 Lawthorn Way SE, AB, Canada</p>
                            <div class="d-block">
                                <span class="text-dark-gray fw-600">Email:</span>
                                <a href="mailto:office@synexdigital.com" class="text-dark-gray text-dark-gray-hover fw-600 text-decoration-line-bottom"> office@synexdigital.com</a>
                            </div>
                            <div class="d-block">
                                <span class="text-dark-gray fw-600">Phone:</span>
                                <a href="tel:12345678910" class="text-dark-gray-hover">+880 1613-408101</a>
                            </div>
                            <div class="text-dark-gray mt-20px">
                                <a href="https://maps.app.goo.gl/LkvdphV5K1iUnhbi9" target="_blank" class="btn btn-large btn-expand-ltr text-dark-gray btn-rounded fw-700"><span class="bg-base-color"></span>View on google map</a>
                            </div>
                        </div>
                    </div>
                    <div class="col mt-4 md-mt-0 md-mb-60px sm-mb-45px" data-bottom-top="transform: translateY(-50px)" data-top-bottom="transform: translateY(50px)">
                        <div>
                            <img class="border-radius-4px" alt="" data-cfsrc="images/demo-web-agency-contact-02.jpg" style="display:none;visibility:hidden;" /><noscript><img src="images/demo-web-agency-contact-02.jpg" class="border-radius-4px" alt=""/></noscript>
                        </div>
                        <div class="position-relative ps-40px pe-40px pt-50px lg-ps-25px lg-pe-25px sm-pt-35px">
                            <div class="fs-80 fw-700 text-uppercase text-dark-gray position-absolute top-minus-40px left-40px lg-left-25px">Ban</div>
                            <p class="mt-10px mb-15px lh-28">    87/3, West Dhanmondi, Shankar, Dhaka-1207</p>
                            <div class="d-block">
                                <span class="text-dark-gray fw-600">Email:</span>
                                <a href="mailto:office@synexdigital.com" class="text-dark-gray text-dark-gray-hover fw-600 text-decoration-line-bottom"> office@synexdigital.com</a>
                            </div>
                            <div class="d-block">
                                <span class="text-dark-gray fw-600">Phone:</span>
                                <a href="tel:12345678910" class="text-dark-gray-hover">+880 1613-408101</a>
                            </div>
                            <div class="text-dark-gray mt-20px">
                                <a href="https://maps.app.goo.gl/LkvdphV5K1iUnhbi9" target="_blank" class="btn btn-large btn-expand-ltr text-dark-gray btn-rounded fw-700"><span class="bg-base-color"></span>View on google map</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->

        <!-- start form section -->
        <section class="pt-2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6">
                        <h2 class="text-dark-gray fw-600 mb-10 ls-minus-2px">Let us help you get your project started.</h2>
                        <div class="outside-box-left-35 d-none d-lg-inline-block">
                            <div class="fs-350 xl-fs-300 lg-fs-250 text-base-color fw-600 ls-minus-20px word-break-normal" data-bottom-top="transform:scale(1, 1) translate3d(0px, 0px, 0px);" data-top-bottom="transform:scale(1, 1) translate3d(-100px, 0px, 0px);">contact</div>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1 contact-form-style-03" data-anime='{ "el": "childs", "translateY": [-15, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h6 class="fw-500 text-dark-gray mb-20px sm-mb-10px ls-minus-05px"><span class="fw-700">Hello,</span> Tell us about your project.</h6>
                        {{-- <form action="https://craftohtml.themezaa.com/email-templates/contact-form.php" method="post">
                            <div class="position-relative form-group mb-20px">
                                <span class="form-icon"><i class="bi bi-person icon-extra-medium text-dark-gray"></i></span>
                                <input class="ps-0 border-radius-0px border-color-dark-gray form-control required" type="text" name="name" placeholder="Your name*" />
                            </div>
                            <div class="position-relative form-group mb-20px">
                                <span class="form-icon"><i class="bi bi-envelope icon-extra-medium text-dark-gray"></i></span>
                                <input class="ps-0 border-radius-0px border-bottom border-color-dark-gray form-control required" type="email" name="email" placeholder="Your email address*" />
                            </div>
                            <div class="position-relative form-group form-textarea mb-0">
                                <textarea class="ps-0 border-radius-0px border-bottom border-color-dark-gray form-control" name="comment" placeholder="Your message" rows="4"></textarea>
                                <span class="form-icon"><i class="bi bi-chat-square-dots icon-extra-medium text-dark-gray"></i></span>
                                <input type="hidden" name="redirect" value="">
                                <button class="btn submit btn-small btn-dark-gray btn-box-shadow btn-round-edge mt-35px mb-25px w-100" type="submit">Send message</button>
                                <p class="fs-14 lh-24 w-100 mb-0 text-center text-lg-start">We are committed to protecting your privacy. We will never collect information about you without your explicit consent.</p>
                                <div class="form-results mt-20px d-none"></div>
                            </div>
                        </form> --}}

                        <form action="{{ route('contact.submit') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <input type="text" id="name" name="name" class="form-control" style="width: 100%"
                                    placeholder="Name*" required value="{{ old('name') }}">
                            </div>
                            <input type="hidden" name="country_code" id="countryCode">
                            <div class="mb-3">
                                <div class="row gx-2">
                                    <div class="col-lg-12">
                                        <div class="input-container">
                                            <div id="email-input" class="input-wrapper hidden">
                                                <input id="number" pattern="[0-9]*" name="number" type="number"
                                                    placeholder="Whatsapp Number" class="form-control" disabled />
                                                <span class="or ">Or</span>

                                                <button type="button" class="toggle-button" onclick="toggleInput()">
                                                    <svg width="32px" height="32px" viewBox="0 0 32 32" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M2 11.9556C2 8.47078 2 6.7284 2.67818 5.39739C3.27473 4.22661 4.22661 3.27473 5.39739 2.67818C6.7284 2 8.47078 2 11.9556 2H20.0444C23.5292 2 25.2716 2 26.6026 2.67818C27.7734 3.27473 28.7253 4.22661 29.3218 5.39739C30 6.7284 30 8.47078 30 11.9556V20.0444C30 23.5292 30 25.2716 29.3218 26.6026C28.7253 27.7734 27.7734 28.7253 26.6026 29.3218C25.2716 30 23.5292 30 20.0444 30H11.9556C8.47078 30 6.7284 30 5.39739 29.3218C4.22661 28.7253 3.27473 27.7734 2.67818 26.6026C2 25.2716 2 23.5292 2 20.0444V11.9556Z"
                                                            fill="white" />
                                                        <path
                                                            d="M22.0515 8.52295L16.0644 13.1954L9.94043 8.52295V8.52421L9.94783 8.53053V15.0732L15.9954 19.8466L22.0515 15.2575V8.52295Z"
                                                            fill="#EA4335" />
                                                        <path
                                                            d="M23.6231 7.38639L22.0508 8.52292V15.2575L26.9983 11.459V9.17074C26.9983 9.17074 26.3978 5.90258 23.6231 7.38639Z"
                                                            fill="#FBBC05" />
                                                        <path
                                                            d="M22.0508 15.2575V23.9924H25.8428C25.8428 23.9924 26.9219 23.8813 26.9995 22.6513V11.459L22.0508 15.2575Z"
                                                            fill="#34A853" />
                                                        <path d="M9.94811 24.0001V15.0732L9.94043 15.0669L9.94811 24.0001Z"
                                                            fill="#C5221F" />
                                                        <path
                                                            d="M9.94014 8.52404L8.37646 7.39382C5.60179 5.91001 5 9.17692 5 9.17692V11.4651L9.94014 15.0667V8.52404Z"
                                                            fill="#C5221F" />
                                                        <path d="M9.94043 8.52441V15.0671L9.94811 15.0734V8.53073L9.94043 8.52441Z"
                                                            fill="#C5221F" />
                                                        <path
                                                            d="M5 11.4668V22.6591C5.07646 23.8904 6.15673 24.0003 6.15673 24.0003H9.94877L9.94014 15.0671L5 11.4668Z"
                                                            fill="#4285F4" />
                                                    </svg>
                                                </button>
                                            </div>
                                            <div id="whatsapp-input" class="input-wrapper visible">
                                                <input name="email" id="email" class="form-control" type="email"
                                                    placeholder="Example@example.com" required="true" />
                                                <span class="or">Or</span>
                                                <button type="button" class="toggle-button" onclick="toggleInput()">
                                                    <svg width="32px" height="32px" viewBox="0 0 32 32" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M16 31C23.732 31 30 24.732 30 17C30 9.26801 23.732 3 16 3C8.26801 3 2 9.26801 2 17C2 19.5109 2.661 21.8674 3.81847 23.905L2 31L9.31486 29.3038C11.3014 30.3854 13.5789 31 16 31ZM16 28.8462C22.5425 28.8462 27.8462 23.5425 27.8462 17C27.8462 10.4576 22.5425 5.15385 16 5.15385C9.45755 5.15385 4.15385 10.4576 4.15385 17C4.15385 19.5261 4.9445 21.8675 6.29184 23.7902L5.23077 27.7692L9.27993 26.7569C11.1894 28.0746 13.5046 28.8462 16 28.8462Z"
                                                            fill="#BFC8D0" />
                                                        <path
                                                            d="M28 16C28 22.6274 22.6274 28 16 28C13.4722 28 11.1269 27.2184 9.19266 25.8837L5.09091 26.9091L6.16576 22.8784C4.80092 20.9307 4 18.5589 4 16C4 9.37258 9.37258 4 16 4C22.6274 4 28 9.37258 28 16Z"
                                                            fill="url(#paint0_linear_87_7264)" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M16 30C23.732 30 30 23.732 30 16C30 8.26801 23.732 2 16 2C8.26801 2 2 8.26801 2 16C2 18.5109 2.661 20.8674 3.81847 22.905L2 30L9.31486 28.3038C11.3014 29.3854 13.5789 30 16 30ZM16 27.8462C22.5425 27.8462 27.8462 22.5425 27.8462 16C27.8462 9.45755 22.5425 4.15385 16 4.15385C9.45755 4.15385 4.15385 9.45755 4.15385 16C4.15385 18.5261 4.9445 20.8675 6.29184 22.7902L5.23077 26.7692L9.27993 25.7569C11.1894 27.0746 13.5046 27.8462 16 27.8462Z"
                                                            fill="white" />
                                                        <path
                                                            d="M12.5 9.49989C12.1672 8.83131 11.6565 8.8905 11.1407 8.8905C10.2188 8.8905 8.78125 9.99478 8.78125 12.05C8.78125 13.7343 9.52345 15.578 12.0244 18.3361C14.438 20.9979 17.6094 22.3748 20.2422 22.3279C22.875 22.2811 23.4167 20.0154 23.4167 19.2503C23.4167 18.9112 23.2062 18.742 23.0613 18.696C22.1641 18.2654 20.5093 17.4631 20.1328 17.3124C19.7563 17.1617 19.5597 17.3656 19.4375 17.4765C19.0961 17.8018 18.4193 18.7608 18.1875 18.9765C17.9558 19.1922 17.6103 19.083 17.4665 19.0015C16.9374 18.7892 15.5029 18.1511 14.3595 17.0426C12.9453 15.6718 12.8623 15.2001 12.5959 14.7803C12.3828 14.4444 12.5392 14.2384 12.6172 14.1483C12.9219 13.7968 13.3426 13.254 13.5313 12.9843C13.7199 12.7145 13.5702 12.305 13.4803 12.05C13.0938 10.953 12.7663 10.0347 12.5 9.49989Z"
                                                            fill="white" />
                                                        <defs>
                                                            <linearGradient id="paint0_linear_87_7264" x1="26.5"
                                                                y1="7" x2="4" y2="28"
                                                                gradientUnits="userSpaceOnUse">
                                                                <stop stop-color="#5BD066" />
                                                                <stop offset="1" stop-color="#27B43E" />
                                                            </linearGradient>
                                                        </defs>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>

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
                                <textarea id="message" name="message" class="form-control" rows="4" placeholder="Send a Message*" required> {{ old('message') }}</textarea>
                            </div>
                            <button id="send" type="submit" class="btn btn-primary">Send</button>

                        </form>

                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->

        <!-- start map section -->
        <section class="py-0">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 p-0">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.939759563768!2d90.3672568!3d23.7495275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40311a29c1f9eaa9%3A0x7eda334fe00e121c!2sSynex%20Digital!5e0!3m2!1sen!2sbd!4v1731920894363!5m2!1sen!2sbd" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->

        <!-- start section -->
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

@section('script')
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script> --}}
    <script>
        function toggleInput() {
            const emailInput = document.getElementById('email-input');
            const whatsappInput = document.getElementById('whatsapp-input');
            const emailField = emailInput.querySelector('input');
            const whatsappField = whatsappInput.querySelector('input');

            if (emailInput.classList.contains('visible')) {
                emailInput.classList.remove('visible');
                emailInput.classList.add('hidden');

                whatsappInput.classList.remove('hidden');
                whatsappInput.classList.add('visible');

                whatsappField.setAttribute('required', 'true');
                emailField.setAttribute('required', 'false');
                // Set disabled attribute
                whatsappField.removeAttribute('disabled');
                emailField.setAttribute('disabled', 'disabled');
            } else {
                whatsappInput.classList.remove('visible');
                whatsappInput.classList.add('hidden');

                emailInput.classList.remove('hidden');
                emailInput.classList.add('visible');


                whatsappField.removeAttribute('required');
                emailField.setAttribute('required', 'true');
                // Set disabled attribute
                emailField.removeAttribute('disabled');
                whatsappField.setAttribute('disabled', 'disabled');

            }

        }
        document.addEventListener("DOMContentLoaded", function() {
            const input = document.querySelector("#number");

            // Function to initialize intl-tel-input
            function initializeIntlTelInput(initialCountry) {
                return window.intlTelInput(input, {
                    initialCountry: initialCountry,
                    separateDialCode: true,
                    // Uncomment the line below to use the utils script if needed
                    // utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.4/js/utils.js"
                });
            }

            // Function to get the selected country code
            function getCountryCode() {
                const countryData = iti.getSelectedCountryData();
                $('#countryCode').val(countryData.dialCode);
            }

            // Fetch the user's country code
            fetch('https://ipinfo.io?token=d54f029935345c') // Replace 'YOUR_ACCESS_TOKEN' with your IPinfo token
                .then(response => response.json())
                .then(data => {
                    const countryCode = data.country ? data.country.toLowerCase() :
                    'us'; // Default to 'us' if no country code is found
                    iti = initializeIntlTelInput(
                    countryCode); // Initialize intl-tel-input with the detected country code
                })
                .catch(error => {
                    console.error('Error fetching country code:', error);
                    iti = initializeIntlTelInput('us'); // Fallback to default country if there's an error
                });

            // Add event listener to the button
            document.querySelector("#send").addEventListener("click", getCountryCode);
        });
    </script>
@endsection

