<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('Frontend/images/icons/fav-low.png') }}" type="image/x-icon">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <link rel="stylesheet" rel="preconnect" href="{{ asset('Frontend') }}/css/bootstrap.min.css">
    <link rel="stylesheet" rel="preconnect" href="{{ asset('Frontend') }}/css/custom.css">
    <link rel="stylesheet" rel="preconnect" href="{{ asset('Frontend/plugs/aos.css') }}">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-0D02Y90D7E"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-0D02Y90D7E');
    </script>
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    {!! JsonLd::generate() !!}
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16659065389"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-16659065389');
    </script>
    @yield('style')
</head>

<body>
    <script>
        function gtag_report_conversion(url) {
            var callback = function() {
                if (typeof(url) != 'undefined') {
                    window.location = url;
                }
            };
            gtag('event', 'conversion', {
                'send_to': 'AW-16659065389/sThcCM2S1NAZEK3U1Ic-',
                'event_callback': callback
            });
            return false;
        }
    </script>
    @include('Frontend.layout.header')
    <div class="nav-gap"></div>
    <main>
        @yield('content')
    </main>
    @include('Frontend.layout.footer')
    @yield('script')

    <!-- Javascript File -->
    <script src="{{ asset('Frontend') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('Frontend') }}/js/jquery.min.js"></script>
    <script src="{{ asset('Frontend') }}/js/popper.min.js"></script>
    <script src="{{ asset('Frontend') }}/js/custom.js"></script>
    <script src="{{ asset('Frontend/plugs/aos.js') }}"></script>

    <script>
        AOS.init();
    </script>
</body>

</html>
