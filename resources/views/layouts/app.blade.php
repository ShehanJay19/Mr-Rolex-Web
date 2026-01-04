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

    <!-- Quick View Modal -->
    <div id="quick-view-modal" 
         class="hidden fixed inset-0 z-[100] items-center justify-center bg-black/60 backdrop-blur-sm p-4"
         onclick="if(event.target === this) closeQuickView()">
        
        <div class="modal-content relative bg-white rounded-2xl shadow-2xl max-w-4xl w-full max-h-[90vh] overflow-y-auto scale-95 opacity-0 transition-all duration-300">
            
            <!-- Close Button -->
            <button onclick="closeQuickView()" 
                    class="absolute top-4 right-4 z-10 p-2 rounded-full bg-white/90 hover:bg-white shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-110"
                    aria-label="Close quick view">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 p-6 md:p-8">
                
                <!-- Left: Image -->
                <div class="relative aspect-square w-full overflow-hidden rounded-xl bg-gray-100">
                    <img id="qv-image" 
                         src="" 
                         alt="" 
                         class="w-full h-full object-cover">
                </div>

                <!-- Right: Details -->
                <div class="flex flex-col gap-6">
                    <div>
                        <h2 id="qv-name" 
                            class="text-3xl font-bold mb-2" 
                            style="font-family: 'Playfair Display', serif;">
                        </h2>
                        <p id="qv-subtitle" class="text-muted text-lg"></p>
                    </div>

                    <div class="text-4xl font-bold text-accent" style="font-family: 'Playfair Display', serif;">
                        <span id="qv-price"></span>
                    </div>

                    <div class="border-t border-b border-border py-4 space-y-3">
                        <p class="text-sm text-muted">Premium quality materials</p>
                        <p class="text-sm text-muted">Free shipping on orders over $200</p>
                        <p class="text-sm text-muted">30-day return policy</p>
                    </div>

                    <div class="flex gap-3">
                        <button id="qv-add-to-cart"
                                class="add-to-cart flex-1 px-6 py-4 bg-accent text-white rounded-lg font-semibold
                                       hover:bg-black transition-all duration-300 hover:shadow-lg hover:scale-105"
                                onclick="event.stopPropagation()">
                            Add to Cart
                        </button>
                        <a id="qv-product-link"
                           href="#"
                           class="px-6 py-4 border-2 border-accent text-accent rounded-lg font-semibold
                                  hover:bg-accent hover:text-white transition-all duration-300 text-center whitespace-nowrap">
                            Full Details
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @stack('scripts')
</body>
</html>