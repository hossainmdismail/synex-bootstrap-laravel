@extends('frontend.layout.app')

@section('content')
    <!-- start page title -->
    <section class="p-0 sm-pb-40px top-space-margin page-title-center-alignment">
        <div class="container">
            <div class="row align-items-center justify-content-center small-screen sm-h-auto">
                <div class="col-lg-10 text-center">
                    <span class="fs-18 mb-30px d-inline-block sm-mb-20px">By <a href="demo-web-agency-blog.html"
                            class="text-dark-gray text-dark-gray-hover text-decoration-line-bottom">{{ $content['author'] }}</a>
                        in <a href="demo-web-agency-blog.html"
                            class="text-dark-gray text-dark-gray-hover text-decoration-line-bottom">{{ $content['category'] }}</a>
                        on {{ $content['date'] }}</span>
                    <h2 class="alt-font fw-600 text-dark-gray ls-minus-2px mb-0">{{ $content['title'] }}</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->

    <!-- start section -->
    <section class="py-0 ps-13 pe-13 lg-ps-4 lg-pe-4 sm-px-0">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12"><img class="w-100" alt="" data-cfsrc="{{ $content['image'] }}"
                        style="display:none;visibility:hidden;"><noscript><img src="{{ $content['image'] }}" class="w-100"
                            alt=""></noscript></div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 text-center sm-mb-30px">
                            <div class="pb-20px">
                                <img class="rounded-circle w-130px mb-20px" alt=""
                                    data-cfsrc="images/blog-single-creative-avtar.jpg"
                                    style="display:none;visibility:hidden;"><noscript><img
                                        src="images/blog-single-creative-avtar.jpg" class="rounded-circle w-130px mb-20px"
                                        alt=""></noscript>
                                <span class="d-block lh-22">Words by</span>
                                <a href="demo-web-agency-blog.html"
                                    class="text-dark-gray text-dark-gray-hover alt-font fw-500 text-uppercase">{{ $content['author'] }}</a>
                            </div>
                            <div class="h-3px w-100 bg-dark-gray mb-20px"></div>
                            <ul class="d-flex list-unstyled justify-content-center">
                                <li class="me-25px"><a href="#"
                                        class="text-dark-gray-hover text-uppercase alt-font fs-13">👁
                                        {{ $content['view'] }}</a></li>
                                <li><a href="#" class="text-dark-gray-hover text-uppercase alt-font fs-13">♡ Like</a>
                                </li>
                            </ul>
                        </div>
                        <div class="offset-lg-1 col-md-8 last-paragraph-no-margin text-center text-md-start">
                            <h3 class="alt-font fw-600 text-dark-gray">{{ $content['title'] }}</h3>
                            <p>{!! $content['content'] !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <section class="bg-very-light-gray">
        <div class="container">
            <div class="row justify-content-center mb-1">
                <div class="col-lg-7 text-center">
                    <span class="alt-font fw-500 text-uppercase d-inline-block">You may also like</span>
                    <h5 class="alt-font text-dark-gray fw-500">Related posts</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <ul class="blog-classic blog-wrapper grid grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large appear anime-child anime-complete"
                        data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;:100, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }"
                        style="position: relative; height: 372.047px;">
                        <li class="grid-sizer"></li>
                        <!-- start blog item -->
                        @foreach ($related as $blog)
                            <li class="grid-item design marketing">
                                <div class="card bg-transparent border-0 h-100">
                                    <div class="blog-image position-relative overflow-hidden border-radius-4px">
                                        <a href="{{ route('blog.view', $blog['slug']) }}"><img alt=""
                                                data-cfsrc="{{ $blog['image'] }}"
                                                style="display:none;visibility:hidden;"><noscript><img
                                                    src="{{ $blog['image'] }}" alt=""></noscript></a>
                                    </div>
                                    <div class="card-body px-0 pt-30px pb-30px xs-pb-15px">
                                        <span class="fs-14 text-uppercase d-block mb-5px fw-500"><a
                                                href="{{ route('blog.view', $blog['slug']) }}"
                                                class="text-dark-gray text-dark-gray-hover fw-700 categories-text">{{ $blog['category'] }}</a><a
                                                href="#"
                                                class="blog-date text-medium-gray-hover">{{ $blog['date'] }}</a></span>
                                        <a href="{{ route('blog.view', $blog['slug']) }}"
                                            class="card-title fw-600 fs-17 lh-28 text-dark-gray text-dark-gray-hover d-inline-block w-95 sm-w-100">{{ $blog['title'] }}</a>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                        <!-- end blog item -->
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <section class="pb-4 sm-pt-40px sm-pb-40px overflow-hidden position-relative">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 text-center text-sm-start">
                    <div class="outside-box-left-25 xl-outside-box-left-10 sm-outside-box-left-0">
                        <div
                            class="fs-350 xl-fs-250 lg-fs-200 md-fs-170 sm-fs-100 text-dark-gray fw-600 ls-minus-20px word-break-normal">
                            work</div>
                    </div>
                </div>
                <div class="col-sm-7 text-center text-sm-end">
                    <div class="outside-box-right-5 sm-outside-box-right-0">
                        <div
                            class="fs-350 xl-fs-250 lg-fs-200 md-fs-170 sm-fs-100 text-base-color fw-600 ls-minus-20px position-relative d-inline-block word-break-normal">
                            together
                            <div
                                class="position-absolute left-minus-140px top-minus-140px z-index-9 xl-left-minus-110px top-minus-140px xl-top-minus-100px md-top-minus-90px z-index-9 xl-w-230px md-w-200px d-none d-md-block">
                                <img class="animation-rotation" alt="" data-cfsrc="images/demo-web-agency-05.png"
                                    style="display:none;visibility:hidden;"><noscript><img
                                        src="images/demo-web-agency-05.png" class="animation-rotation"
                                        alt=""></noscript>
                                <div class="absolute-middle-center w-100 z-index-minus-1"><img alt=""
                                        data-cfsrc="images/demo-web-agency-04.png"
                                        style="display:none;visibility:hidden;"><noscript><img
                                            src="images/demo-web-agency-04.png" alt=""></noscript></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
@endsection
