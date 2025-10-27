<head>
    <meta charset="UTF-8">
    <title>
        @yield('title', 'Digital Marketing Company in Mumbai(Call:72089 09232)-Digital Marketing Company in Andheri - Digital Soch Private Limited')
    </title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/logo/ds.jpg') }}" type="image/x-icon">

    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ✅ Preload hero / key image for faster LCP -->
    {{-- <link rel="preload" as="image" href="{{ asset('assets/img/hero.jpg') }}"> --}}

    <!-- ✅ Preconnect for faster external resource loading -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">

    <!-- ✅ Fonts (with font-display swap for faster text render) -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- ✅ Inline critical CSS (above-the-fold styles only) -->
    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
        }

        header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 15px;
        }

        .hero {
            background: #fff;
            min-height: 80vh;
        }
    </style>

    <!-- ✅ Load CSS asynchronously -->
    <link rel="preload" href="{{ asset('assets/css/bootstrap.min.css') }}" as="style"
        onload="this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('assets/css/animate.css') }}" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('assets/css/swiper.min.css') }}" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('assets/css/jquery-ui.css') }}" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('assets/css/magnific-popup.css') }}" as="style"
        onload="this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('assets/css/style.css') }}" as="style" onload="this.rel='stylesheet'">

    <!-- Fallback for no-JS browsers -->
    <noscript>
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    </noscript>

    <!-- ✅ Font Awesome loaded async -->
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" as="style"
        onload="this.rel='stylesheet'">

    <!-- ✅ Cache control -->
    <meta http-equiv="Cache-Control" content="max-age=31536000, must-revalidate">
    <meta http-equiv="Pragma" content="cache">
    <meta http-equiv="Expires" content="31536000">

    @stack('extra-head')
</head>
