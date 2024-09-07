<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('Frontend/images/icons/fav-low.png') }}" type="image/x-icon">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <link rel="stylesheet" rel="preconnect" href="{{ asset('Frontend') }}/css/bootstrap.min.css">
    <link rel="stylesheet" rel="preconnect" href="{{ asset('Frontend') }}/css/custom.css">
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5ZSKZ4FP');
    </script>
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    {!! JsonLd::generate() !!}
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16659065389"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'AW-16659065389');
    </script>
    @yield('style')

    <!-- End Google Tag Manager -->
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5ZSKZ4FP" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- Event snippet for Lead Submit - Shuvo conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
    <script>
        function gtag_report_conversion(url) {
        var callback = function () {
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


    {{-- <script>
        document.getElementById('calendly-btn').addEventListener('click', function() {
            const calendlyBox = document.querySelector('.calendly-box');
            calendlyBox.style.display = 'block';
        });

        document.getElementById('calendly-close').addEventListener('click', function() {
            const calendlyBox = document.querySelector('.calendly-box');
            calendlyBox.style.display = 'none';
        });
    </script> --}}

</body>

</html>
