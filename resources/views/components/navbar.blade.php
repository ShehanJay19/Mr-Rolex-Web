<nav class="bg-canvas border-b border-border sticky top-0 z-40" data-nav>
    <div class="max-w-[1280px] mx-auto px-6 py-3 flex items-center justify-between relative">

        <!-- LEFT -->
        <div class="flex items-center gap-4">
            <!-- Mobile Toggle -->
            <button id="mobile-toggle"
                    class="lg:hidden p-2 rounded hover:bg-gray-100"
                    aria-expanded="false">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                     viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>

            <!-- Desktop Links -->
            <ul class="hidden lg:flex items-center gap-6 text-sm font-medium">
                <li><a href="/" class="hover:text-black transition">Home</a></li>
                <li><a href="/collection" class="hover:text-black transition">Collection</a></li>
                <li><a href="/about" class="hover:text-black transition">About</a></li>
                <li><a href="/contact" class="hover:text-black transition">Contact</a></li>
            </ul>
        </div>

        <!-- CENTER LOGO -->
        <a href="/" class="absolute left-1/2 -translate-x-1/2">
            <img src="/images/logo.jpg" alt="Logo" class="h-10 w-auto">
        </a>

        <!-- RIGHT -->
        <div class="flex items-center gap-3">

            <!-- Desktop Search -->
            <form class="hidden lg:block" action="/shop">
                <input type="text" name="q"
                       placeholder="Search..."
                       class="px-3 py-1.5 border border-border rounded-full text-sm bg-canvas focus:outline-none focus:border-accent">
            </form>

            <!-- Wishlist -->
            <a href="/wishlist"
               class="p-2 rounded-full hover:bg-gray-100 relative">
                ❤️
                <span id="wishlist-count"
                      class="hidden absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full px-1.5">
                    0
                </span>
            </a>

            <!-- CART -->
            <div class="relative">
                <button id="cart-toggle"
                        class="p-2 rounded-full bg-accent text-white hover:bg-black relative">
                    🛒
                    <span id="cart-count"
                          class="hidden absolute -top-1 -right-1 bg-green-600 text-white text-xs rounded-full px-1.5">
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
            <a href="/profile" class="p-2 rounded-full hover:bg-gray-100">
                👤
            </a>
        </div>
    </div>

    <!-- MOBILE MENU -->
    <div id="mobile-menu"
         class="hidden lg:hidden bg-canvas border-t border-border shadow-lg">
        <div class="px-6 py-4 space-y-3">
            <a href="/" class="block py-2">Home</a>
            <a href="/collection" class="block py-2">Collection</a>
            <a href="/about" class="block py-2">About</a>
            <a href="/contact" class="block py-2">Contact</a>
            <a href="/wishlist" class="block py-2">Wishlist</a>
            <a href="/profile" class="block py-2">Profile</a>

            <input type="text"
                   placeholder="Search products..."
                   class="w-full mt-3 px-3 py-2 border border-border rounded-lg">
        </div>
    </div>
</nav>
