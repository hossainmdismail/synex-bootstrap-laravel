<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <!-- Google tag (gtag.js) -->
    @include('Frontend.layout.headerlink')
    <link rel="stylesheet" href="{{ asset('Frontend') }}/css/web-agency.css" />
    @yield('style')
</head>

<body data-mobile-nav-style="classic" class="background-position-center-top"
    style="background-image: url({{ asset('Frontend/images/vertical-line-bg-small-medium-gray.svg') }})">

    {{-- Header --}}
    @include('Frontend.layout.header')
    @yield('content')
    {{-- Footer --}}
    @include('Frontend.layout.footer')
    <!-- start subscription popup -->
    {{-- <div id="subscribe-popup" class="mfp-hide subscribe-popup">
        <div class="container">
            <div class="row newsletter-popup position-relative justify-content-center">
                <div
                    class="col-xl-4 col-lg-5 col-md-6 text-center p-45px pt-55px pb-55px xs-p-30px xs-pt-30px xs-pb-30px position-relative box-shadow-quadruple-large bg-white border-radius-8px">
                    <div
                        class="fs-14 text-uppercase text-dark-gray fw-600 d-block d-sm-flex align-items-center justify-content-center mb-5px">
                        <div class="me-5px xs-ms-10px d-inline-block align-middle text-red"><i
                                class="bi bi-heart-fill"></i></div>
                        <div class="d-inline-block align-middle">Around the globe</div>
                    </div>
                    <h4 class="d-inline-block alt-font fw-500 ls-minus-1px text-dark-gray mb-40px sm-mb-25px">More than
                        the <span class="fw-700">25k+</span> companies trusting crafto</h4>
                    <a href="#"
                        class="btn btn-large btn-base-color text-dark-gray btn-rounded btn-box-shadow mb-40px sm-mb-25px">Sign
                        up for free</a>
                    <img alt="" data-cfsrc="images/demo-web-agency-popup.jpg"
                        style="display:none;visibility:hidden;"><noscript><img src="images/demo-web-agency-popup.jpg"
                            alt=""></noscript>
                    <button title="Close (Esc)" type="button" class="mfp-close text-dark-gray">X</button>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- end subscription popup -->
    <!-- start sticky elements -->
    <div class="sticky-wrap z-index-1 d-none d-xl-inline-block" data-animation-delay="100" data-shadow-animation="true">
        <div class="elements-social social-icon-style-10">
            <ul class="small-icon dark fw-600">
                <li class="fs-18">Follow us <span
                        class="separator-line-1px w-30px bg-dark-gray d-inline-block align-middle ms-15px"></span>
                </li>
                <li><a class="twitter" href="https://www.facebook.com/@synexdigital" target="_blank">Fb.</a></li>
                <li><a class="behance" href="https://www.linkedin.com/company/synex-digital/" target="_blank">Lin</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="scroll-progress d-none d-xxl-block">
        <a href="#" class="scroll-top" aria-label="scroll">
            <span class="scroll-text">Scroll to top</span><span class="scroll-line"><span
                    class="scroll-point"></span></span>
        </a>
    </div>
    @include('Frontend.layout.footerLink')
</body>

</html>
