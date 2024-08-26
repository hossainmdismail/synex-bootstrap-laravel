@extends('Frontend.layout.app')

@section('style')
    <style>
        #content {
            scroll-behavior: smooth;
        }
    </style>
@endsection

@section('content')
    <section class="container-fluid service-hero" style="background-image: url({{ asset('Frontend') }}/images/hero.webp);">
        <div class="shadow">
            <div class="container py-5 h-100 d-flex flex-column justify-content-between">
                <div class="row py-4 py-md-5">
                    <div class="col-md-6 py-md-5 m-auto text-center">
                        <h1 class="section-title text-white pb-2">Our <span class="font-main">Project</span></h1>
                        <h2 class="caption">Unlock Your Business Potential with Our Specialized Services and Strategic
                            Expertise</h2>
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

    <section class="container py-4" id="content">
        <div class="row">
            @foreach ($projects as $project)
                <div class="col-md-4">
                    <x-project-card title="{{ $project['title'] }}" name="{{ $project['name'] }}"
                        description="{{ $project['description'] }}" category="{{ $project['category'] }}"
                        image="{{ $project['image'] }}" />
                </div>
            @endforeach
        </div>
        @if (!empty($pagination) && $pagination['total_pages'] > 1)
            <nav class="py-3">
                <ul class="pagination">
                    {{-- Previous Page Link --}}
                    {{-- @if ($pagination['current_page'] > 1) --}}
                    <li class="page-item">
                        <a class="page-link {{ $pagination['current_page'] == 1 ? 'disabled' : '' }}"
                            href="{{ url()->current() }}?page={{ $pagination['current_page'] - 1 }}#content"
                            rel="prev">&laquo;
                            Previous</a>
                    </li>
                    {{-- @endif --}}

                    {{-- Pagination Elements --}}
                    @for ($page = 1; $page <= $pagination['total_pages']; $page++)
                        @if ($page == $pagination['current_page'])
                            <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
                        @else
                            <li class="page-item"><a class="page-link"
                                    href="{{ url()->current() }}?page={{ $page }}">{{ $page }}</a></li>
                        @endif
                    @endfor

                    {{-- Next Page Link --}}
                    {{-- @if ($pagination['current_page'] < $pagination['total_pages']) --}}
                    <li class="page-item">
                        <a class="page-link {{ $pagination['current_page'] == $pagination['total_pages'] ? 'disabled' : '' }}"
                            href="{{ url()->current() }}?page={{ $pagination['current_page'] + 1 }}#content"
                            rel="next">Next
                            &raquo;</a>
                    </li>
                    {{-- @endif --}}
                </ul>
            </nav>
        @endif
    </section>

    <!-- Collaborate -->
    <x-collaborate />

    <!-- News Letter-->
    <x-newsletter />
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            if (window.location.hash === "#content") {
                $('html, body').animate({
                    scrollTop: $('#content').offset().top
                }, 800); // 800ms for the animation duration
            }
        });
    </script>
@endsection
