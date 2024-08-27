@extends('Frontend.layout.app')

@section('content')
    <div class="container py-4">
        <div class="row">
            <div class="col-lg-12  text-center">
                <h1 class="about-us-title">{{ $category['name'] }}</h1>
                <img class="underlinesvg" src="http://127.0.0.1:8000/Frontend/images/aboutus-underline.svg" alt="">
            </div>
        </div>
    </div>
    <!-- Blog Details Section -->
    <section class="container py-2 py-md-4">
        <div class="row g-3">
            {{-- Content --}}
            <div class="col-md-8 px-3 px-md-2">
                <div class="row">
                    <!-- Repeated Blog Cards -->
                    @foreach ($blogs as $blog)
                        <div class="col-md-4 mb-4">
                            <x-blog title="{{ $blog['title'] }}" slug="{{ $blog['slug'] }}"
                                category="{{ $blog['category'] }}" date="{{ $blog['date'] }}" views="{{ $blog['view'] }}"
                                image="{{ $blog['image'] }}" />
                        </div>
                    @endforeach
                </div>

                @if (!empty($pagination) && $pagination['total_pages'] > 1)
                    <nav class="py-3">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link {{ $pagination['current_page'] == 1 ? 'disabled' : '' }}"
                                    href="{{ url()->current() }}?page={{ $pagination['current_page'] - 1 }}#content"
                                    rel="prev">&laquo;
                                    Previous</a>
                            </li>
                            @for ($page = 1; $page <= $pagination['total_pages']; $page++)
                                @if ($page == $pagination['current_page'])
                                    <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
                                @else
                                    <li class="page-item"><a class="page-link"
                                            href="{{ url()->current() }}?page={{ $page }}#content">{{ $page }}</a>
                                    </li>
                                @endif
                            @endfor
                            <li class="page-item">
                                <a class="page-link {{ $pagination['current_page'] == $pagination['total_pages'] ? 'disabled' : '' }}"
                                    href="{{ url()->current() }}?page={{ $pagination['current_page'] + 1 }}#content"
                                    rel="next">Next
                                    &raquo;</a>
                            </li>
                        </ul>
                    </nav>
                @endif
            </div>

            {{-- right --}}
            <div class="col-md-4">
                <div class="row px-md-2">
                    {{-- Branding --}}
                    <div class="col-12 mb-4">
                        <div class="card card-second rounded shadow-sm h-auto">
                            <div class="card-body p-md-4 text-center">
                                People Management What is Website Flipping? How to Earn from Website Flipping People
                                Management What is Website Flipping? How to Earn from Website Flipping
                            </div>
                        </div>
                    </div>

                    {{-- Blog list --}}
                    <div class="col-12 mb-4 ">
                        <div class="card card-second rounded py-2 shadow-sm h-auto">
                            <div class="card-body p-md-4 text-center">
                                <h5 class="text-center">
                                    <div>Popular</div>
                                    <img src="{{ asset('Frontend/images/wave.png') }}" width="43px" class="pt-2"
                                        alt="wave">
                                </h5>

                                <div class="pt-4 text-start">
                                    {{-- @foreach ($popuar as $blog)
                                        <x-blog-list title="{{ $blog['title'] }}" slug="{{ $blog['slug'] }}"
                                            image="{{ $blog['image'] }}" date="{{ $blog['date'] }}"
                                            slug="{{ $blog['slug'] }}" />
                                    @endforeach --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Category --}}
                    <div class="col-12 mb-4">
                        <div class="card card-second rounded py-2 shadow-sm h-auto">
                            <div class="card-body p-md-4 text-center">
                                <h5 class="text-center">
                                    <div>Category</div>
                                    <img src="{{ asset('Frontend/images/wave.png') }}" width="43px" class="pt-2"
                                        alt="wave">
                                </h5>

                                <div class="pt-4 text-start">
                                    <ul class="cat-list">
                                        @foreach ($categories as $category)
                                            <li class="d-flex">
                                                <a class="cat-list-item" href="{{ route('category', $category['slug']) }}">
                                                    <svg class="mr-4" width="20px" height="20px" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.5"
                                                            d="M4 11.25C3.58579 11.25 3.25 11.5858 3.25 12C3.25 12.4142 3.58579 12.75 4 12.75V11.25ZM4 12.75H20V11.25H4V12.75Z"
                                                            fill="#1C274C" />
                                                        <path d="M14 6L20 12L14 18" stroke="#1C274C" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                    <span class="pl-3">{{ $category['name'] }}</span>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
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
