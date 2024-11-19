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
    <!-- favicon icon -->
    <link rel="shortcut icon" href="{{ asset('Frontend') }}/images/favicon.png">
    <link rel="apple-touch-icon" href="{{ asset('Frontend') }}/images/favicon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('Frontend') }}/images/favicon.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('Frontend') }}/images/favicon.png">
    <!-- google fonts preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com/" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <!-- style sheets and font icons  -->
    <link rel="stylesheet" href="{{ asset('Frontend') }}/css/vendors.min.css" />
    {{-- <link rel="stylesheet" href="{{ asset('Frontend') }}/css/icon.min.css" /> --}}
    {{-- <script src="https://kit.fontawesome.com/763b89cf94.js" crossorigin="anonymous"></script> --}}
    <link rel="stylesheet" href="{{ asset('Frontend') }}/css/style.min.css" />
    <link rel="stylesheet" href="{{ asset('Frontend') }}/css/responsive.min.css" />
