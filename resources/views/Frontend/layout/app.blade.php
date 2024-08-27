<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('Frontend/images/icons/fav-low.png') }}" type="image/x-icon">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <link rel="stylesheet" rel="preconnect" href="{{ asset('Frontend') }}/css/bootstrap.min.css">
    <link rel="stylesheet" rel="preconnect" href="{{ asset('Frontend') }}/css/custom.css">
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    {!! JsonLd::generate() !!}
    @yield('style')
</head>

<body>
    @include('Frontend.layout.header')
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

    <script>
        document.getElementById('calendly-btn').addEventListener('click', function() {
            const calendlyBox = document.querySelector('.calendly-box');
            calendlyBox.style.display = 'block';
        });

        document.getElementById('calendly-close').addEventListener('click', function() {
            const calendlyBox = document.querySelector('.calendly-box');
            calendlyBox.style.display = 'none';
        });
    </script>

</body>

</html>
