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
    <style>
        @font-face {
            font-family: 'Beatrice Deck Trial';
            src: url('/fonts/BeatriceDeck-Regular.woff2') format('woff2'),
                 url('/fonts/BeatriceDeck-Regular.woff') format('woff');
            font-weight: 400;
            font-style: normal;
            font-display: swap;
        }
        @font-face {
            font-family: 'Beatrice Deck Trial';
            src: url('/fonts/BeatriceDeck-Bold.woff2') format('woff2'),
                 url('/fonts/BeatriceDeck-Bold.woff') format('woff');
            font-weight: 700;
            font-style: normal;
            font-display: swap;
        }
    </style>

    <title>{{ config('app.name', 'Clothing Shop') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-canvas text-text font-sans antialiased">
    <a href="#main-content" class="skip-link">Skip to content</a>
    <x-navbar />
    <main id="main-content" class="px-4 py-20">
        @yield('content')
    </main>
    <x-footer />
</body>
</html>