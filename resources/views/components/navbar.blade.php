<nav class="glass border-b border-white/20 sticky top-0 z-40 shadow-lg" data-nav>
    <div class="max-w-[1280px] mx-auto px-4 sm:px-6 py-3 flex items-center justify-between relative">

        <!-- LEFT -->
        <div class="flex items-center gap-4">
            <!-- Mobile Toggle -->
            <button id="mobile-toggle"
                    class="lg:hidden p-2 rounded-lg hover:bg-gray-100 transition-colors"
                    aria-expanded="false"
                    aria-label="Toggle mobile menu"
                    aria-controls="mobile-menu">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                     viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>

            <!-- Desktop Links -->
            <ul class="hidden lg:flex items-center gap-6 text-sm font-medium" role="navigation" aria-label="Main navigation">
                <li><a href="/" class="hover:text-black transition-colors focus:outline-none focus:ring-2 focus:ring-accent rounded px-2 py-1">Home</a></li>
                <li><a href="/collection" class="hover:text-black transition-colors focus:outline-none focus:ring-2 focus:ring-accent rounded px-2 py-1">Collection</a></li>
                <li><a href="/about" class="hover:text-black transition-colors focus:outline-none focus:ring-2 focus:ring-accent rounded px-2 py-1">About</a></li>
                <li><a href="/contact" class="hover:text-black transition-colors focus:outline-none focus:ring-2 focus:ring-accent rounded px-2 py-1">Contact</a></li>
            </ul>
        </div>

        <!-- CENTER LOGO -->
        <a href="/" class="absolute left-1/2 -translate-x-1/2 focus:outline-none focus:ring-2 focus:ring-accent rounded" aria-label="XIV QR Home">
            <img src="/images/logo.jpg" alt="XIV QR Logo" class="h-10 w-auto" width="40" height="40">
        </a>

        <!-- RIGHT -->
        <div class="flex items-center gap-2 sm:gap-3">

            <!-- Desktop Search -->
            <form class="hidden lg:block" action="/shop" method="GET" role="search">
                <label for="nav-search" class="sr-only">Search products</label>
                <input type="search" name="q" id="nav-search"
                       placeholder="Search..."
                       class="px-3 py-1.5 border border-border rounded-full text-sm bg-canvas focus:outline-none focus:border-accent focus:ring-1 focus:ring-accent transition-colors"
                       aria-label="Search products">
            </form>

            <!-- Wishlist -->
            <a href="/wishlist"
               class="p-2 rounded-full hover:bg-gray-100 relative transition-colors focus:outline-none focus:ring-2 focus:ring-accent"
               aria-label="View wishlist">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                </svg>
                <span id="wishlist-count"
                      class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full px-1.5 min-w-[20px] h-5 hidden items-center justify-center"
                      aria-live="polite">
                    0
                </span>
            </a>

            <!-- CART -->
            <div class="relative">
                <button id="cart-toggle"
                        class="p-2 rounded-full bg-accent text-white hover:bg-black relative transition-colors focus:outline-none focus:ring-2 focus:ring-accent focus:ring-offset-2"
                        aria-label="Open cart"
                        aria-expanded="false"
                        aria-controls="mini-cart-panel">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                    </svg>
                    <span id="cart-count"
                          class="absolute -top-1 -right-1 bg-green-600 text-white text-xs rounded-full px-1.5 min-w-[20px] h-5 hidden items-center justify-center"
                          aria-live="polite">
                        0
                    </span>
                </button>

                <!-- Mini Cart -->
                <div id="mini-cart-panel"
                     class="hidden absolute right-0 mt-3 w-[320px]
                            bg-canvas border border-border
                            rounded-xl shadow-xl">
                    <div class="p-4 border-b flex justify-between">
                        <span class="font-semibold text-sm">Cart</span>
                        <a href="/cart" class="text-xs underline">View all</a>
                    </div>

                    <div id="mini-cart-items"
                         class="max-h-[260px] overflow-y-auto divide-y"></div>

                    <div id="mini-cart-empty"
                         class="p-4 text-sm text-muted hidden">
                        Your cart is empty
                    </div>

                    <div class="p-4 border-t space-y-3">
                        <div class="flex justify-between text-sm">
                            <span>Subtotal</span>
                            <span id="mini-cart-subtotal" class="font-semibold">$0</span>
                        </div>
                        <div class="flex gap-2">
                            <a href="/cart"
                               class="flex-1 border border-border px-3 py-2 rounded text-center text-sm">
                                View cart
                            </a>
                            <a href="/checkout"
                               class="flex-1 bg-accent text-white px-3 py-2 rounded text-center text-sm">
                                Checkout
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Profile -->
            <a href="/profile" 
               class="p-2 rounded-full hover:bg-gray-100 transition-colors focus:outline-none focus:ring-2 focus:ring-accent"
               aria-label="View profile">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                </svg>
            </a>
        </div>
    </div>

    <!-- MOBILE MENU -->
    <div id="mobile-menu"
         class="hidden lg:hidden bg-canvas border-t border-border shadow-lg"
         role="dialog"
         aria-label="Mobile navigation menu">
        <nav class="px-4 sm:px-6 py-4 space-y-2" role="navigation">
            <a href="/" class="block py-2 px-3 rounded-lg hover:bg-gray-100 transition-colors focus:outline-none focus:ring-2 focus:ring-accent">Home</a>
            <a href="/collection" class="block py-2 px-3 rounded-lg hover:bg-gray-100 transition-colors focus:outline-none focus:ring-2 focus:ring-accent">Collection</a>
            <a href="/about" class="block py-2 px-3 rounded-lg hover:bg-gray-100 transition-colors focus:outline-none focus:ring-2 focus:ring-accent">About</a>
            <a href="/contact" class="block py-2 px-3 rounded-lg hover:bg-gray-100 transition-colors focus:outline-none focus:ring-2 focus:ring-accent">Contact</a>
            <a href="/wishlist" class="block py-2 px-3 rounded-lg hover:bg-gray-100 transition-colors focus:outline-none focus:ring-2 focus:ring-accent">Wishlist</a>
            <a href="/profile" class="block py-2 px-3 rounded-lg hover:bg-gray-100 transition-colors focus:outline-none focus:ring-2 focus:ring-accent">Profile</a>

            <form action="/shop" method="GET" class="mt-4" role="search">
                <label for="mobile-search" class="sr-only">Search products</label>
                <input type="search" name="q" id="mobile-search"
                       placeholder="Search products..."
                       class="w-full px-3 py-2 border border-border rounded-lg focus:outline-none focus:border-accent focus:ring-1 focus:ring-accent transition-colors"
                       aria-label="Search products">
        </div>
    </div>
</nav>
