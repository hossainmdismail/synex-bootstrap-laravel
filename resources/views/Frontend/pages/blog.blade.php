@extends('Frontend.layout.app')
@section('content')
    @php
        $blogs = [
            [
                'title' => 'What is a blog? Definition, types',
                'image' => 'url',
                'date' => '17 Feb 2024',
                'slug' => 'new-blog-2024',
            ],
            [
                'title' => 'Mauris id ipsum et ante varius iaculis.',
                'image' => 'url',
                'date' => '17 Feb 2023',
                'slug' => 'new-blog-2024',
            ],
            [
                'title' => 'Aenean auctor sollicitudin est',
                'image' => 'url',
                'date' => '16 Dec 2022',
                'slug' => 'new-blog-2024',
            ],
            [
                'title' => 'What is a blog? Definition, types',
                'image' => 'url',
                'date' => '19 Mar 2024',
                'slug' => 'new-blog-2024',
            ],
            [
                'title' => 'Aenean auctor sollicitudin est',
                'image' => 'url',
                'date' => '1 Jan 20241',
                'slug' => 'new-blog-2024',
            ],
        ];
        $blogHero = [
            [
                'title' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam.',
                'category' => 'category',
                'date' => '18 Jan 2022',
                'view' => '12,322',
                'image' => '12,322',
            ],
            [
                'title' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam.',
                'category' => 'category',
                'date' => '18 Jan 2022',
                'view' => '322',
                'image' => '12,322',
            ],
            [
                'title' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam.',
                'category' => 'category',
                'date' => '18 Jan 2022',
                'view' => '12,500',
                'image' => '12,322',
            ],
        ];
    @endphp
    <!-- about us -->
    <section class="container-fluid">
        {{-- <img class="rightsvg" src="{{ asset('Frontend') }}/images/aboutus-right.svg" loading="lazy" alt=""> --}}
        <svg class="rightsvg" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
            xmlns:svgjs="http://svgjs.dev/svgjs" width="1440" height="560" preserveAspectRatio="none" viewBox="0 0 1440 560">
            <g mask="url(&quot;#SvgjsMask1012&quot;)" fill="none">
                <path d="M442.86 623.26C629.7 588.92 712.45 124.57 1012 119.79 1311.55 115.01 1435.26 247.79 1581.14 248.59"
                    stroke="rgba(51,121,194,0.58)" stroke-width="2"></path>
                <path
                    d="M293.63 661.83C437.3 642.39 513.32 312.51 754.14 309.36 994.96 306.21 984.39 379.36 1214.64 379.36 1444.9 379.36 1558.7 309.56 1675.15 309.36"
                    stroke="rgba(51,121,194,0.58)" stroke-width="2"></path>
                <path
                    d="M687.77 632.97C854.78 598.49 925.29 169.86 1185.47 166.49 1445.64 163.12 1552.3 326.85 1683.16 328.89"
                    stroke="rgba(51,121,194,0.58)" stroke-width="2"></path>
                <path
                    d="M414.39 574.39C571.75 523.51 600.61 79.8 839.12 67.22 1077.63 54.64 1051.49 137.22 1263.86 137.22 1476.22 137.22 1580.97 67.45 1688.59 67.22"
                    stroke="rgba(51,121,194,0.58)" stroke-width="2"></path>
                <path d="M247.52 610.99C428.95 596.85 555.2 236 871.01 235.35 1186.82 234.7 1332.71 407.34 1494.5 408.95"
                    stroke="rgba(51,121,194,0.58)" stroke-width="2"></path>
            </g>
            <defs>
                <mask id="SvgjsMask1012">
                    <rect width="1440" height="560" fill="#ffffff"></rect>
                </mask>
            </defs>
        </svg>
        <div class="container py-2 py-md-5">
            <div class="row">
                {{-- Blog description --}}
                <div class="col-md-7 py-md-2 d-flex align-items-center">
                    <div class="blog-info">
                        <h1>What is a blog? Definition, types, benefits and why you need one</h1>
                        <p class="pt-2">
                            by <a href="#">Esmail Khalifa</a> | 17 Jan 2024 | <a href="#"
                                class="badge-default">Coding</a>
                        </p>
                        <div class="share-on d-none d-md-flex">
                            Share :
                            <ul>
                                <li class="item-main">
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24"
                                            height="24" viewBox="0 0 24 24">
                                            <path
                                                d="M12,2C6.477,2,2,6.477,2,12c0,5.013,3.693,9.153,8.505,9.876V14.65H8.031v-2.629h2.474v-1.749 c0-2.896,1.411-4.167,3.818-4.167c1.153,0,1.762,0.085,2.051,0.124v2.294h-1.642c-1.022,0-1.379,0.969-1.379,2.061v1.437h2.995 l-0.406,2.629h-2.588v7.247C18.235,21.236,22,17.062,22,12C22,6.477,17.523,2,12,2z">
                                            </path>
                                        </svg>
                                    </a>
                                </li>
                                <li class="item-main">
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24"
                                            height="24" viewBox="0 0 24 24">
                                            <path
                                                d="M19.077,4.928C17.191,3.041,14.683,2.001,12.011,2c-5.506,0-9.987,4.479-9.989,9.985 c-0.001,1.76,0.459,3.478,1.333,4.992L2,22l5.233-1.237c1.459,0.796,3.101,1.215,4.773,1.216h0.004 c5.505,0,9.986-4.48,9.989-9.985C22.001,9.325,20.963,6.816,19.077,4.928z M16.898,15.554c-0.208,0.583-1.227,1.145-1.685,1.186 c-0.458,0.042-0.887,0.207-2.995-0.624c-2.537-1-4.139-3.601-4.263-3.767c-0.125-0.167-1.019-1.353-1.019-2.581 S7.581,7.936,7.81,7.687c0.229-0.25,0.499-0.312,0.666-0.312c0.166,0,0.333,0,0.478,0.006c0.178,0.007,0.375,0.016,0.562,0.431 c0.222,0.494,0.707,1.728,0.769,1.853s0.104,0.271,0.021,0.437s-0.125,0.27-0.249,0.416c-0.125,0.146-0.262,0.325-0.374,0.437 c-0.125,0.124-0.255,0.26-0.11,0.509c0.146,0.25,0.646,1.067,1.388,1.728c0.954,0.85,1.757,1.113,2.007,1.239 c0.25,0.125,0.395,0.104,0.541-0.063c0.146-0.166,0.624-0.728,0.79-0.978s0.333-0.208,0.562-0.125s1.456,0.687,1.705,0.812 c0.25,0.125,0.416,0.187,0.478,0.291C17.106,14.471,17.106,14.971,16.898,15.554z">
                                            </path>
                                        </svg>
                                    </a>
                                </li>
                                <li class="item-main">
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24"
                                            height="24" viewBox="0 0 24 24">
                                            <path
                                                d="M 20.302734 2.984375 C 20.013769 2.996945 19.748583 3.080055 19.515625 3.171875 C 19.300407 3.256634 18.52754 3.5814726 17.296875 4.0976562 C 16.06621 4.61384 14.435476 5.2982348 12.697266 6.0292969 C 9.2208449 7.4914211 5.314238 9.1361259 3.3125 9.9785156 C 3.243759 10.007156 2.9645852 10.092621 2.65625 10.328125 C 2.3471996 10.564176 2.0039062 11.076462 2.0039062 11.636719 C 2.0039062 12.088671 2.2295201 12.548966 2.5019531 12.8125 C 2.7743861 13.076034 3.0504903 13.199244 3.28125 13.291016 L 3.28125 13.289062 C 4.0612776 13.599827 6.3906939 14.531938 6.9453125 14.753906 C 7.1420423 15.343433 7.9865895 17.867278 8.1875 18.501953 L 8.1855469 18.501953 C 8.3275588 18.951162 8.4659791 19.243913 8.6582031 19.488281 C 8.7543151 19.610465 8.8690398 19.721184 9.0097656 19.808594 C 9.0637596 19.842134 9.1235454 19.868148 9.1835938 19.892578 C 9.191962 19.896131 9.2005867 19.897012 9.2089844 19.900391 L 9.1855469 19.894531 C 9.2029579 19.901531 9.2185841 19.911859 9.2363281 19.917969 C 9.2652427 19.927926 9.2852873 19.927599 9.3242188 19.935547 C 9.4612233 19.977694 9.5979794 20.005859 9.7246094 20.005859 C 10.26822 20.005859 10.601562 19.710937 10.601562 19.710938 L 10.623047 19.695312 L 12.970703 17.708984 L 15.845703 20.369141 C 15.898217 20.443289 16.309604 21 17.261719 21 C 17.829844 21 18.279025 20.718791 18.566406 20.423828 C 18.853787 20.128866 19.032804 19.82706 19.113281 19.417969 L 19.115234 19.416016 C 19.179414 19.085834 21.931641 5.265625 21.931641 5.265625 L 21.925781 5.2890625 C 22.011441 4.9067171 22.036735 4.5369631 21.935547 4.1601562 C 21.834358 3.7833495 21.561271 3.4156252 21.232422 3.2226562 C 20.903572 3.0296874 20.591699 2.9718046 20.302734 2.984375 z M 19.908203 5.1738281 C 19.799442 5.7198576 17.33401 18.105877 17.181641 18.882812 L 13.029297 15.041016 L 10.222656 17.414062 L 11 14.375 C 11 14.375 16.362547 8.9468594 16.685547 8.6308594 C 16.945547 8.3778594 17 8.2891719 17 8.2011719 C 17 8.0841719 16.939781 8 16.800781 8 C 16.675781 8 16.506016 8.1197812 16.416016 8.1757812 C 15.272368 8.8887854 10.401283 11.664685 8.0058594 13.027344 C 7.8617016 12.96954 5.6973962 12.100458 4.53125 11.634766 C 6.6055146 10.76177 10.161156 9.2658083 13.472656 7.8730469 C 15.210571 7.142109 16.840822 6.4570977 18.070312 5.9414062 C 19.108158 5.5060977 19.649538 5.2807035 19.908203 5.1738281 z M 17.152344 19.025391 C 17.152344 19.025391 17.154297 19.025391 17.154297 19.025391 C 17.154252 19.025621 17.152444 19.03095 17.152344 19.03125 C 17.153615 19.024789 17.15139 19.03045 17.152344 19.025391 z">
                                            </path>
                                        </svg>
                                    </a>
                                </li>
                                <li class="item-main">
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24"
                                            height="24" viewBox="0 0 24 24">
                                            <path
                                                d="M19,3H5C3.895,3,3,3.895,3,5v14c0,1.105,0.895,2,2,2h14c1.105,0,2-0.895,2-2V5C21,3.895,20.105,3,19,3z M9,17H6.477v-7H9 V17z M7.694,8.717c-0.771,0-1.286-0.514-1.286-1.2s0.514-1.2,1.371-1.2c0.771,0,1.286,0.514,1.286,1.2S8.551,8.717,7.694,8.717z M18,17h-2.442v-3.826c0-1.058-0.651-1.302-0.895-1.302s-1.058,0.163-1.058,1.302c0,0.163,0,3.826,0,3.826h-2.523v-7h2.523v0.977 C13.93,10.407,14.581,10,15.802,10C17.023,10,18,10.977,18,13.174V17z">
                                            </path>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                {{-- Thumbnail --}}
                <div class="col-md-5">
                    <img src="{{ asset('Frontend') }}/images/Teamwork.webp" class="rounded" loading="lazy" width="100%"
                        alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Section -->
    <section class="container py-2 py-md-4">
        <div class="row g-3">
            {{-- Content --}}
            <div class="col-md-8 px-3 px-md-2">
                <div class="blog-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum.
                        Cras id scelerisque mauris. Proin varius, ex sit amet elementum tristique, felis dolor auctor
                        enim, nec tempor felis libero in ante. Aliquam erat volutpat. Nulla facilisi. Vestibulum euismod
                        malesuada eros, at pharetra justo feugiat eu. Donec et erat nec metus ullamcorper lacinia. metus
                        ullamcorper lacinia.</p>
                    <h4>Lorem ipsum Heading</h4>
                    <p>Curabitur auctor urna et erat convallis, sit amet tincidunt ligula tincidunt. Sed eget nibh vel
                        est dapibus dictum. Fusce id nunc a eros venenatis tristique. Integer id felis vitae velit
                        volutpat facilisis ac vel est. Praesent non libero vitae turpis faucibus ultricies. Sed in
                        consequat sapien, id lacinia eros. Donec fermentum orci ut libero dictum, nec maximus turpis
                        dignissim. Mauris id ipsum et ante varius iaculis. Pellentesque habitant morbi tristique
                        senectus et netus et malesuada fames ac turpis egestas. Integer euismod arcu vel orci suscipit,
                        nec ultrices nulla cursus. Aenean tristique, felis vel suscipit malesuada, odio nulla elementum
                        metus, vel convallis magna lectus nec quam. Nunc ut vestibulum lorem. Sed in feugiat magna.
                        Quisque vestibulum, lorem et gravida elementum, magna ligula tempor metus, id maximus sem mi eu
                        felis.</p>
                    <h4>Lorem ipsum Heading</h4>
                    <p>Mauris id ipsum et ante varius iaculis. Pellentesque habitant morbi tristique senectus et netus
                        et malesuada fames ac turpis egestas. Integer euismod arcu vel orci suscipit, nec ultrices nulla
                        cursus. Aenean tristique, felis vel suscipit malesuada, odio nulla elementum metus, vel
                        convallis magna lectus nec quam. Nunc ut vestibulum lorem. Sed in feugiat magna. Quisque
                        vestibulum, lorem et gravida elementum, magna ligula tempor metus, id maximus sem mi eu felis.
                    </p>
                    <p>Proin nec diam vel risus suscipit ullamcorper. Integer sit amet magna nec risus eleifend
                        facilisis. Aenean auctor sollicitudin est, non dictum eros ullamcorper nec. In hac habitasse
                        platea dictumst. Donec ac magna libero. Vivamus finibus condimentum est in faucibus. Mauris
                        malesuada erat vitae nisl tincidunt, at pharetra ipsum dictum. Pellentesque id diam nec elit
                        tincidunt condimentum.Mauris id ipsum et ante varius iaculis. Pellentesque habitant morbi
                        tristique senectus et netus et malesuada fames ac turpis egestas. Integer euismod arcu vel orci
                        suscipit, nec ultrices nulla cursus. Aenean tristique, felis vel suscipit malesuada, odio nulla
                        elementum metus, vel convallis magna lectus nec quam. Nunc ut vestibulum lorem. Sed in feugiat
                        magna. Quisque vestibulum, lorem et gravida elementum, magna ligula tempor metus, id maximus sem
                        mi eu felis.
                    </p>
                </div>

                {{-- Share button --}}
                <div class="card card-second shadow-sm rounded">
                    <div class="card-body">
                        <div class="share-on">
                            Share :
                            <ul>
                                <li class="item-main">
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24"
                                            height="24" viewBox="0 0 24 24">
                                            <path
                                                d="M12,2C6.477,2,2,6.477,2,12c0,5.013,3.693,9.153,8.505,9.876V14.65H8.031v-2.629h2.474v-1.749 c0-2.896,1.411-4.167,3.818-4.167c1.153,0,1.762,0.085,2.051,0.124v2.294h-1.642c-1.022,0-1.379,0.969-1.379,2.061v1.437h2.995 l-0.406,2.629h-2.588v7.247C18.235,21.236,22,17.062,22,12C22,6.477,17.523,2,12,2z">
                                            </path>
                                        </svg>
                                    </a>
                                </li>
                                <li class="item-main">
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24"
                                            height="24" viewBox="0 0 24 24">
                                            <path
                                                d="M19.077,4.928C17.191,3.041,14.683,2.001,12.011,2c-5.506,0-9.987,4.479-9.989,9.985 c-0.001,1.76,0.459,3.478,1.333,4.992L2,22l5.233-1.237c1.459,0.796,3.101,1.215,4.773,1.216h0.004 c5.505,0,9.986-4.48,9.989-9.985C22.001,9.325,20.963,6.816,19.077,4.928z M16.898,15.554c-0.208,0.583-1.227,1.145-1.685,1.186 c-0.458,0.042-0.887,0.207-2.995-0.624c-2.537-1-4.139-3.601-4.263-3.767c-0.125-0.167-1.019-1.353-1.019-2.581 S7.581,7.936,7.81,7.687c0.229-0.25,0.499-0.312,0.666-0.312c0.166,0,0.333,0,0.478,0.006c0.178,0.007,0.375,0.016,0.562,0.431 c0.222,0.494,0.707,1.728,0.769,1.853s0.104,0.271,0.021,0.437s-0.125,0.27-0.249,0.416c-0.125,0.146-0.262,0.325-0.374,0.437 c-0.125,0.124-0.255,0.26-0.11,0.509c0.146,0.25,0.646,1.067,1.388,1.728c0.954,0.85,1.757,1.113,2.007,1.239 c0.25,0.125,0.395,0.104,0.541-0.063c0.146-0.166,0.624-0.728,0.79-0.978s0.333-0.208,0.562-0.125s1.456,0.687,1.705,0.812 c0.25,0.125,0.416,0.187,0.478,0.291C17.106,14.471,17.106,14.971,16.898,15.554z">
                                            </path>
                                        </svg>
                                    </a>
                                </li>
                                <li class="item-main">
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24"
                                            height="24" viewBox="0 0 24 24">
                                            <path
                                                d="M 20.302734 2.984375 C 20.013769 2.996945 19.748583 3.080055 19.515625 3.171875 C 19.300407 3.256634 18.52754 3.5814726 17.296875 4.0976562 C 16.06621 4.61384 14.435476 5.2982348 12.697266 6.0292969 C 9.2208449 7.4914211 5.314238 9.1361259 3.3125 9.9785156 C 3.243759 10.007156 2.9645852 10.092621 2.65625 10.328125 C 2.3471996 10.564176 2.0039062 11.076462 2.0039062 11.636719 C 2.0039062 12.088671 2.2295201 12.548966 2.5019531 12.8125 C 2.7743861 13.076034 3.0504903 13.199244 3.28125 13.291016 L 3.28125 13.289062 C 4.0612776 13.599827 6.3906939 14.531938 6.9453125 14.753906 C 7.1420423 15.343433 7.9865895 17.867278 8.1875 18.501953 L 8.1855469 18.501953 C 8.3275588 18.951162 8.4659791 19.243913 8.6582031 19.488281 C 8.7543151 19.610465 8.8690398 19.721184 9.0097656 19.808594 C 9.0637596 19.842134 9.1235454 19.868148 9.1835938 19.892578 C 9.191962 19.896131 9.2005867 19.897012 9.2089844 19.900391 L 9.1855469 19.894531 C 9.2029579 19.901531 9.2185841 19.911859 9.2363281 19.917969 C 9.2652427 19.927926 9.2852873 19.927599 9.3242188 19.935547 C 9.4612233 19.977694 9.5979794 20.005859 9.7246094 20.005859 C 10.26822 20.005859 10.601562 19.710937 10.601562 19.710938 L 10.623047 19.695312 L 12.970703 17.708984 L 15.845703 20.369141 C 15.898217 20.443289 16.309604 21 17.261719 21 C 17.829844 21 18.279025 20.718791 18.566406 20.423828 C 18.853787 20.128866 19.032804 19.82706 19.113281 19.417969 L 19.115234 19.416016 C 19.179414 19.085834 21.931641 5.265625 21.931641 5.265625 L 21.925781 5.2890625 C 22.011441 4.9067171 22.036735 4.5369631 21.935547 4.1601562 C 21.834358 3.7833495 21.561271 3.4156252 21.232422 3.2226562 C 20.903572 3.0296874 20.591699 2.9718046 20.302734 2.984375 z M 19.908203 5.1738281 C 19.799442 5.7198576 17.33401 18.105877 17.181641 18.882812 L 13.029297 15.041016 L 10.222656 17.414062 L 11 14.375 C 11 14.375 16.362547 8.9468594 16.685547 8.6308594 C 16.945547 8.3778594 17 8.2891719 17 8.2011719 C 17 8.0841719 16.939781 8 16.800781 8 C 16.675781 8 16.506016 8.1197812 16.416016 8.1757812 C 15.272368 8.8887854 10.401283 11.664685 8.0058594 13.027344 C 7.8617016 12.96954 5.6973962 12.100458 4.53125 11.634766 C 6.6055146 10.76177 10.161156 9.2658083 13.472656 7.8730469 C 15.210571 7.142109 16.840822 6.4570977 18.070312 5.9414062 C 19.108158 5.5060977 19.649538 5.2807035 19.908203 5.1738281 z M 17.152344 19.025391 C 17.152344 19.025391 17.154297 19.025391 17.154297 19.025391 C 17.154252 19.025621 17.152444 19.03095 17.152344 19.03125 C 17.153615 19.024789 17.15139 19.03045 17.152344 19.025391 z">
                                            </path>
                                        </svg>
                                    </a>
                                </li>
                                <li class="item-main">
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24"
                                            height="24" viewBox="0 0 24 24">
                                            <path
                                                d="M19,3H5C3.895,3,3,3.895,3,5v14c0,1.105,0.895,2,2,2h14c1.105,0,2-0.895,2-2V5C21,3.895,20.105,3,19,3z M9,17H6.477v-7H9 V17z M7.694,8.717c-0.771,0-1.286-0.514-1.286-1.2s0.514-1.2,1.371-1.2c0.771,0,1.286,0.514,1.286,1.2S8.551,8.717,7.694,8.717z M18,17h-2.442v-3.826c0-1.058-0.651-1.302-0.895-1.302s-1.058,0.163-1.058,1.302c0,0.163,0,3.826,0,3.826h-2.523v-7h2.523v0.977 C13.93,10.407,14.581,10,15.802,10C17.023,10,18,10.977,18,13.174V17z">
                                            </path>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- Related --}}
                <div class="row py-4 py-md-5">
                    <h4 class="pb-3 pb-md-4">Related</h4>
                    @foreach ($blogHero as $blog)
                        <div class="col-md-4 mb-4">
                            <x-blog title="{{ $blog['title'] }}" category="{{ $blog['category'] }}"
                                date="{{ $blog['date'] }}" views="{{ $blog['view'] }}" image="{{ $blog['image'] }}" />
                        </div>
                    @endforeach
                </div>
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
                    <div class="col-12 mb-4">
                        <div class="card card-second rounded py-2 shadow-sm h-auto">
                            <div class="card-body p-md-4 text-center">
                                <h5 class="text-center">
                                    <div>Popular</div>
                                    <img src="{{ asset('Frontend/images/wave.png') }}" width="43px" class="pt-2"
                                        alt="wave">
                                </h5>

                                <div class="pt-4 text-start">
                                    @foreach ($blogs as $blog)
                                        <x-blog-list title="{{ $blog['title'] }}" image="{{ $blog['image'] }}"
                                            date="{{ $blog['date'] }}" slug="{{ $blog['slug'] }}" />
                                    @endforeach
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
                                        <li class="d-flex">
                                            <a class="cat-list-item" href="#">
                                                <svg class="mr-4" width="20px" height="20px" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.5"
                                                        d="M4 11.25C3.58579 11.25 3.25 11.5858 3.25 12C3.25 12.4142 3.58579 12.75 4 12.75V11.25ZM4 12.75H20V11.25H4V12.75Z"
                                                        fill="#1C274C" />
                                                    <path d="M14 6L20 12L14 18" stroke="#1C274C" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <span class="pl-3">Marketing</span>
                                            </a>
                                        </li>
                                        <li class="d-flex">
                                            <a class="cat-list-item" href="#">
                                                <svg class="mr-4" width="20px" height="20px" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.5"
                                                        d="M4 11.25C3.58579 11.25 3.25 11.5858 3.25 12C3.25 12.4142 3.58579 12.75 4 12.75V11.25ZM4 12.75H20V11.25H4V12.75Z"
                                                        fill="#1C274C" />
                                                    <path d="M14 6L20 12L14 18" stroke="#1C274C" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <span class="pl-3">Hosting</span>
                                            </a>
                                        </li>
                                        <li class="d-flex">
                                            <a class="cat-list-item" href="#">
                                                <svg class="mr-4" width="20px" height="20px" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.5"
                                                        d="M4 11.25C3.58579 11.25 3.25 11.5858 3.25 12C3.25 12.4142 3.58579 12.75 4 12.75V11.25ZM4 12.75H20V11.25H4V12.75Z"
                                                        fill="#1C274C" />
                                                    <path d="M14 6L20 12L14 18" stroke="#1C274C" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <span class="pl-3">Coding</span>
                                            </a>
                                        </li>
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
