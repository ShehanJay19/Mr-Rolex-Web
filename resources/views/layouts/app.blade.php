<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="XIV QR — contemporary fashion shop with curated collections, clean shopping, and fast checkout.">

    <!-- Open Graph / Twitter for rich sharing -->
    <meta property="og:title" content="{{ config('app.name', 'Clothing Shop') }}">
    <meta property="og:description" content="Discover modern essentials, curated collections, and a seamless shopping experience.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="/images/hero1.jpg">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ config('app.name', 'Clothing Shop') }}">
    <meta name="twitter:description" content="Discover modern essentials, curated collections, and a seamless shopping experience.">
    <meta name="twitter:image" content="/images/hero1.jpg">

    <link rel="icon" type="image/png" href="/images/logo.jpg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>{{ config('app.name', 'Clothing Shop') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#FFFFFF] text-[#111111] font-sans antialiased">
    <a href="#main-content" class="skip-link">Skip to content</a>
    <x-navbar />
    <main id="main-content" class="max-w-[1280px] mx-auto px-4 py-20">
        @yield('content')
    </main>
    <x-footer />
</body>
</html>