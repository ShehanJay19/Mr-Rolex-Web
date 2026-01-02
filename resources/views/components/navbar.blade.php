<nav class="bg-white border-b border-[#E5E5E5] px-6 py-3 flex items-center justify-between relative z-20">
    <!-- Left Section -->
    <div class="flex items-center gap-6 min-w-0">
        <!-- Hamburger (mobile) -->
        <button class="lg:hidden p-2 rounded hover:bg-gray-100 focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/></svg>
        </button>
        <!-- Main Links (desktop) -->
        <ul class="hidden lg:flex items-center gap-4 text-sm font-medium">
            <li><a href="/" class="hover:text-black transition">Home</a></li>
            <li><a href="/collections" class="hover:text-black transition">Collections</a></li>
            <li><a href="/new" class="hover:text-black transition">New</a></li>
        </ul>
        <!-- Category Shortcuts (desktop) -->
        <ul class="hidden lg:flex items-center gap-2 text-xs font-semibold text-gray-500 ml-4">
            <li><a href="/collections/men" class="px-2 py-1 rounded hover:bg-gray-100">MEN</a></li>
            <li><a href="/collections/women" class="px-2 py-1 rounded hover:bg-gray-100">WOMEN</a></li>
            <li><a href="/collections/kids" class="px-2 py-1 rounded hover:bg-gray-100">KIDS</a></li>
        </ul>
        <!-- Search (desktop) -->
        <form class="hidden lg:block ml-6" action="/search" method="GET">
            <input type="text" name="q" placeholder="Search..." class="px-3 py-1.5 border border-gray-200 rounded-full text-sm focus:outline-none focus:border-black bg-gray-50" />
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
        <a href="/wishlist" class="p-2 rounded-full hover:bg-gray-100 relative">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.636l1.318-1.318a4.5 4.5 0 116.364 6.364L12 21.364l-7.682-7.682a4.5 4.5 0 010-6.364z"/></svg>
            <span id="wishlist-count" class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full px-1.5 py-0.5 min-w-[18px] text-center" style="font-size:11px;display:none;">0</span>
        </a>
        <!-- Cart -->
        <a href="/cart" class="p-2 rounded-full bg-black text-white hover:bg-[#333] relative">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1.35 2.7A1 1 0 007 17h10a1 1 0 00.95-.68L19 13M7 13V6a1 1 0 011-1h5a1 1 0 011 1v7"/></svg>
            <span id="cart-count" class="absolute -top-1 -right-1 bg-green-600 text-white text-xs rounded-full px-1.5 py-0.5 min-w-[18px] text-center" style="font-size:11px;display:none;">0</span>
        </a>
        <!-- Notifications -->
        <a href="#" class="p-2 rounded-full hover:bg-gray-100 relative">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/></svg>
        </a>
        <!-- User Profile -->
        <a href="/profile" class="p-2 rounded-full hover:bg-gray-100">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A9 9 0 1112 21a9 9 0 01-6.879-3.196z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
        </a>
    </div>
</nav>