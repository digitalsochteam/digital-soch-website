<head>
    <meta charset="UTF-8">
    <title>@yield(
        'title',
        'Digital Marketing Company in Mumbai(Call:72089 09232)-Digital Marketing Company in Andheri - Digital Soch
                                                                            Private Limited'
    )</title>
    @stack('extra-head')
    <link rel="shortcut icon" href="{{ asset('assets/img/logo/ds.jpg') }}" type="image/x-icon">
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Preconnect to external domains (performance boost) -->
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
    <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">

    <link rel="stylesheet" href="{{ asset('assets/css/complex.css') }}" crossorigin>
    <!-- Critical CSS - Load immediately for above-the-fold content -->

    <!-- Non-critical CSS - Load asynchronously (won't block rendering) -->
    <!-- Load non-critical CSS asynchronously -->
    <link rel="preload" href="{{ asset('assets/css/bootstrap.min.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('assets/css/style.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('assets/css/animate.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('assets/css/swiper.min.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('assets/css/jquery-ui.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('assets/css/magnific-popup.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">

    <!-- Fallback for no-JS -->
    <noscript>
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    </noscript>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-633VC3KBHZ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-633VC3KBHZ');
    </script>

</head>
