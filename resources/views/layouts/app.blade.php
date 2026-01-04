<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Primary Meta Tags -->
    <title>{{ $title ?? 'XIV QR — Premium Fashion & Contemporary Style' }}</title>
    <meta name="title" content="{{ $title ?? 'XIV QR — Premium Fashion & Contemporary Style' }}">
    <meta name="description" content="{{ $description ?? 'Discover curated collections of premium fashion essentials. Contemporary designs, timeless quality, seamless shopping experience.' }}">
    <meta name="keywords" content="fashion, clothing, premium, contemporary, men, women, kids, collection, shop, style">
    <meta name="author" content="XIV QR">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $title ?? 'XIV QR — Premium Fashion & Contemporary Style' }}">
    <meta property="og:description" content="{{ $description ?? 'Discover curated collections of premium fashion essentials.' }}">
    <meta property="og:image" content="{{ $ogImage ?? url('/images/hero_img.png') }}">
    <meta property="og:site_name" content="XIV QR">
    <meta property="og:locale" content="en_US">
    
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="{{ $title ?? 'XIV QR — Premium Fashion & Contemporary Style' }}">
    <meta name="twitter:description" content="{{ $description ?? 'Discover curated collections of premium fashion essentials.' }}">
    <meta name="twitter:image" content="{{ $ogImage ?? url('/images/hero_img.png') }}">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/logo.jpg">
    <link rel="apple-touch-icon" sizes="180x180" href="/images/logo.jpg">
    
    <!-- Fonts - Premium Typography -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Theme Color -->
    <meta name="theme-color" content="#F7F7F5">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    @stack('styles')
</head>
<body class="bg-canvas text-text font-sans antialiased min-h-screen flex flex-col">
    <!-- Skip to main content link for accessibility -->
    <a href="#main-content" 
       class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 focus:z-50 focus:px-6 focus:py-3 focus:bg-accent focus:text-white focus:rounded-lg focus:shadow-lg">
        Skip to main content
    </a>
    
    <x-navbar />
    
    <main id="main-content" class="flex-1 pt-16 md:pt-20" role="main">
        @yield('content')
    </main>
    
    <x-footer />
    
    @stack('scripts')
</body>
</html>