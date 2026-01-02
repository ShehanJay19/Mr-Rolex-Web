<nav class="bg-canvas border-b border-border px-6 py-3 flex items-center justify-between relative z-30" data-nav>
    <!-- Left Section -->
    <div class="flex items-center gap-6 min-w-0">
        <!-- Hamburger (mobile) -->
        <button id="mobile-toggle" aria-expanded="false" aria-controls="mobile-menu" class="lg:hidden p-2 rounded hover:bg-gray-100 focus:outline-none" aria-label="Open menu">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/></svg>
        </button>
        <!-- Main Links (desktop) -->
        <ul class="hidden lg:flex items-center gap-4 text-sm font-medium">
            <li><a href="/" class="hover:text-black transition">Home</a></li>
            <li><a href="/shop" class="hover:text-black transition">Shop</a></li>
            <li><a href="/shop?sort=new" class="hover:text-black transition">New</a></li>
        </ul>
        <!-- Category Shortcuts (desktop) -->
        <ul class="hidden lg:flex items-center gap-2 text-xs font-semibold text-muted ml-4">
            <li><a href="/shop?category=men" class="px-2 py-1 rounded hover:bg-gray-100">MEN</a></li>
            <li><a href="/shop?category=women" class="px-2 py-1 rounded hover:bg-gray-100">WOMEN</a></li>
            <li><a href="/shop?category=kids" class="px-2 py-1 rounded hover:bg-gray-100">KIDS</a></li>
        </ul>
        <!-- Search (desktop) -->
        <form class="hidden lg:block ml-6" action="/shop" method="GET">
            <input type="text" name="q" placeholder="Search products..." class="px-3 py-1.5 border border-border rounded-full text-sm focus:outline-none focus:border-accent bg-gray-50" />
        </form>
    </div>

    <!-- Center Section: Logo -->
    <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 flex items-center">
        <a href="/" class="block">
            <img src="/images/logo.jpg" alt="Logo" class="h-10 w-auto mx-auto" style="max-height:40px;" />
        </a>
    </div>

    <!-- Right Section: Actions -->
    <div class="flex items-center gap-3 ml-auto">
        <!-- Wishlist -->
        <a href="/wishlist" class="p-2 rounded-full hover:bg-gray-100 relative" aria-label="Wishlist">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.636l1.318-1.318a4.5 4.5 0 116.364 6.364L12 21.364l-7.682-7.682a4.5 4.5 0 010-6.364z"/></svg>
            <span id="wishlist-count" class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full px-1.5 py-0.5 min-w-[18px] text-center" style="font-size:11px;display:none;">0</span>
        </a>
        <!-- Cart with flyout -->
        <div class="relative" data-mini-cart>
            <button id="cart-toggle" class="p-2 rounded-full bg-accent text-white hover:bg-[#333] relative" aria-expanded="false" aria-controls="mini-cart-panel" aria-label="Cart">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1.35 2.7A1 1 0 007 17h10a1 1 0 00.95-.68L19 13M7 13V6a1 1 0 011-1h5a1 1 0 011 1v7"/></svg>
                <span id="cart-count" class="absolute -top-1 -right-1 bg-green-600 text-white text-xs rounded-full px-1.5 py-0.5 min-w-[18px] text-center" style="font-size:11px;display:none;">0</span>
            </button>
            <div id="mini-cart-panel" class="hidden absolute right-0 mt-3 w-[320px] bg-canvas border border-border rounded-xl shadow-xl overflow-hidden" role="dialog" aria-label="Mini cart">
                <div class="p-4 border-b flex items-center justify-between">
                    <span class="font-semibold text-sm">Cart</span>
                    <a href="/cart" class="text-xs font-semibold underline">View all</a>
                </div>
                <div id="mini-cart-items" class="max-h-[280px] overflow-y-auto divide-y"></div>
                <div id="mini-cart-empty" class="p-4 text-sm text-gray-500 hidden">Your cart is empty.</div>
                <div class="p-4 space-y-3 border-t">
                    <div class="flex items-center justify-between text-sm">
                        <span>Subtotal</span>
                        <span id="mini-cart-subtotal" class="font-semibold">$0</span>
                    </div>
                    <div class="flex gap-2">
                        <a href="/cart" class="flex-1 px-3 py-2 border border-border rounded-lg text-center text-sm font-semibold hover:bg-gray-50">View cart</a>
                        <a href="/checkout" class="flex-1 px-3 py-2 bg-accent text-white rounded-lg text-center text-sm font-semibold hover:bg-[#333]">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- User Profile -->
        <a href="/profile" class="p-2 rounded-full hover:bg-gray-100" aria-label="Profile">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A9 9 0 1112 21a9 9 0 01-6.879-3.196z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
        </a>
    </div>

    <!-- Mobile flyout menu -->
    <div id="mobile-menu" class="hidden lg:hidden absolute left-0 top-full w-full bg-canvas border-b border-border shadow-lg" role="dialog" aria-label="Mobile menu">
        <div class="px-4 py-3 space-y-4">
            <div class="flex items-center justify-between">
                <span class="font-semibold">Menu</span>
                <button id="mobile-close" class="p-2 rounded hover:bg-gray-100" aria-label="Close menu">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
            <div class="space-y-2">
                <a href="/" class="block px-3 py-2 rounded hover:bg-gray-50">Home</a>
                <a href="/shop" class="block px-3 py-2 rounded hover:bg-gray-50">Shop</a>
                <a href="/shop?sort=new" class="block px-3 py-2 rounded hover:bg-gray-50">New</a>
                <a href="/shop?category=men" class="block px-3 py-2 rounded hover:bg-gray-50">Men</a>
                <a href="/shop?category=women" class="block px-3 py-2 rounded hover:bg-gray-50">Women</a>
                <a href="/shop?category=kids" class="block px-3 py-2 rounded hover:bg-gray-50">Kids</a>
                <a href="/wishlist" class="block px-3 py-2 rounded hover:bg-gray-50">Wishlist</a>
                <a href="/profile" class="block px-3 py-2 rounded hover:bg-gray-50">Profile</a>
            </div>
            <form action="/shop" method="GET" class="pt-2">
                <label class="sr-only" for="mobile-search">Search products</label>
                <input id="mobile-search" type="text" name="q" placeholder="Search products..." class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:outline-none focus:border-black bg-gray-50" />
            </form>
        </div>
    </div>
</nav>