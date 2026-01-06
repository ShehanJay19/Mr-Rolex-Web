@extends('layouts.app')

@section('content')
<!-- SHOP HERO SECTION -->
<section class="relative bg-gradient-to-b from-slate-950 to-canvas py-16 md:py-24 mb-12">
    <!-- Decorative Blur Elements -->
    <div class="absolute -top-1/2 -right-1/4 w-96 h-96 bg-accent/5 rounded-full blur-3xl"></div>
    <div class="absolute -bottom-1/4 -left-1/4 w-96 h-96 bg-blue-500/5 rounded-full blur-3xl"></div>
    
    <div class="max-w-[1280px] mx-auto px-4 sm:px-6 relative z-10">
        <!-- Page Header with Premium Typography -->
        <div class="mb-8 text-center md:text-left">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 backdrop-blur-md border border-white/20 rounded-full mb-6 text-white/80 text-sm font-semibold">
                <span class="w-2 h-2 bg-accent rounded-full animate-pulse"></span>
                Curated Collections
            </div>
            <h1 class="text-4xl md:text-5xl font-bold font-playfair text-white mb-4 drop-shadow-lg">Shop All Products</h1>
            <p class="text-white/80 text-base md:text-lg max-w-2xl">Discover our latest collection of premium fashion essentials for every style and occasion.</p>
        </div>
    </div>
</section>

<!-- PREMIUM FILTERS SECTION -->
<section class="max-w-[1280px] mx-auto px-4 sm:px-6 -mt-8 relative z-20 mb-12">
    @php
        $cat = request('category');
        $sort = request('sort');
        $query = request('q');
    @endphp

    <!-- Glass Morphism Filter Container -->
    <div class="glass-dark rounded-2xl p-6 md:p-8 border border-white/20 shadow-xl backdrop-blur-xl">
        
        <!-- Category Pills with Premium Styling -->
        <div class="mb-6">
            <label class="text-sm font-semibold text-text mb-3 block">Categories</label>
            <nav class="flex flex-wrap gap-3" role="navigation" aria-label="Product categories">
                <a href="/shop" 
                   class="px-4 py-2 rounded-full text-sm font-semibold transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-accent {{ !$cat ? 'bg-accent text-white shadow-lg scale-105' : 'bg-white/10 text-text hover:bg-white/20 border border-white/20' }}"
                   aria-current="{{ !$cat ? 'page' : 'false' }}">
                    All Products
                </a>
                <a href="/shop?category=men{{ $query ? '&q=' . urlencode($query) : '' }}" 
                   class="px-4 py-2 rounded-full text-sm font-semibold transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-accent {{ $cat == 'men' ? 'bg-accent text-white shadow-lg scale-105' : 'bg-white/10 text-text hover:bg-white/20 border border-white/20' }}"
                   aria-current="{{ $cat == 'men' ? 'page' : 'false' }}">
                    Men
                </a>
                <a href="/shop?category=women{{ $query ? '&q=' . urlencode($query) : '' }}" 
                   class="px-4 py-2 rounded-full text-sm font-semibold transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-accent {{ $cat == 'women' ? 'bg-accent text-white shadow-lg scale-105' : 'bg-white/10 text-text hover:bg-white/20 border border-white/20' }}"
                   aria-current="{{ $cat == 'women' ? 'page' : 'false' }}">
                    Women
                </a>
                <a href="/shop?category=kids{{ $query ? '&q=' . urlencode($query) : '' }}" 
                   class="px-4 py-2 rounded-full text-sm font-semibold transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-accent {{ $cat == 'kids' ? 'bg-accent text-white shadow-lg scale-105' : 'bg-white/10 text-text hover:bg-white/20 border border-white/20' }}"
                   aria-current="{{ $cat == 'kids' ? 'page' : 'false' }}">
                    Kids
                </a>
            </nav>
        </div>

        <!-- Search & Sort Form with Premium Styling -->
        <form class="flex flex-col sm:flex-row items-stretch sm:items-center gap-4" action="/shop" method="GET" role="search">
            @if($cat)
                <input type="hidden" name="category" value="{{ $cat }}" />
            @endif
            
            <div class="relative flex-1 sm:min-w-[250px]">
                <label for="shop-search" class="sr-only">Search products</label>
                <input type="search" 
                       id="shop-search"
                       name="q" 
                       placeholder="Search by name or description..." 
                       class="w-full pl-10 pr-4 py-3 bg-white/5 border border-white/20 rounded-xl text-sm text-text placeholder-text/50 focus:outline-none focus:border-accent focus:ring-1 focus:ring-accent/50 transition-all duration-200 backdrop-blur-sm" 
                       value="{{ $query }}" 
                       aria-label="Search products" />
                <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-text/40 pointer-events-none" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
            </div>
            
            <label for="sort-select" class="sr-only">Sort products</label>
            <select id="sort-select"
                    name="sort" 
                    class="px-4 py-3 bg-white/5 border border-white/20 rounded-xl text-sm text-text focus:outline-none focus:border-accent focus:ring-1 focus:ring-accent/50 transition-all duration-200 backdrop-blur-sm"
                    aria-label="Sort products">
                <option value="">Sort by...</option>
                <option value="new" {{ $sort === 'new' ? 'selected' : '' }}>Newest First</option>
                <option value="price-asc" {{ $sort === 'price-asc' ? 'selected' : '' }}>Price: Low to High</option>
                <option value="price-desc" {{ $sort === 'price-desc' ? 'selected' : '' }}>Price: High to Low</option>
                <option value="name" {{ $sort === 'name' ? 'selected' : '' }}>Name: A-Z</option>
            </select>
            
            <button type="submit" 
                    class="px-6 py-3 bg-accent hover:bg-black text-white rounded-xl text-sm font-semibold transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-accent focus:ring-offset-2 focus:ring-offset-canvas whitespace-nowrap shadow-lg hover:shadow-xl hover:scale-105">
                Apply
            </button>
        </form>
    </div>

    <!-- Active Filters Display -->
    @if($cat || $query || $sort)
        <div class="mt-8 flex flex-wrap items-center gap-2 p-4 bg-accent/5 border border-accent/20 rounded-xl">
            <span class="text-sm text-text font-semibold">Active Filters:</span>
            @if($cat)
                <span class="inline-flex items-center gap-2 px-3 py-1 bg-accent/10 text-accent text-sm rounded-full">
                    Category: {{ ucfirst($cat) }}
                    <a href="/shop{{ $query ? '?q=' . urlencode($query) : '' }}" class="hover:text-black" aria-label="Remove category filter">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </a>
                </span>
            @endif
            @if($query)
                <span class="inline-flex items-center gap-2 px-3 py-1 bg-accent/10 text-accent text-sm rounded-full">
                    Search: "{{ $query }}"
                    <a href="/shop{{ $cat ? '?category=' . $cat : '' }}" class="hover:text-black" aria-label="Clear search">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </a>
                </span>
            @endif
            @if($sort)
                <span class="inline-flex items-center gap-2 px-3 py-1 bg-accent/10 text-accent text-sm rounded-full">
                    Sorted
                    <a href="/shop{{ $cat ? '?category=' . $cat : '' }}{{ $query ? ($cat ? '&' : '?') . 'q=' . urlencode($query) : '' }}" class="hover:text-black" aria-label="Clear sort">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </a>
                </span>
            @endif
            <a href="/shop" class="text-sm text-muted hover:text-black underline focus:outline-none focus:ring-2 focus:ring-accent rounded px-2 py-1">
                Clear all
            </a>
        </div>
    @endif
</section>

<!-- PRODUCT GRID SECTION -->
<section class="max-w-[1280px] mx-auto px-4 sm:px-6 pb-20">
    @php
        $products = [
            [
                'image' => '/images/p_img1.png',
                'name' => 'Classic T-Shirt',
                'description' => 'Premium cotton, modern fit.',
                'price' => 99,
                'category' => 'men',
            ],
            [
                'image' => '/images/product2.jpg',
                'name' => 'Modern Polo',
                'description' => 'Soft, stylish, and comfortable.',
                'price' => 89,
                'category' => 'men',
            ],
            [
                'image' => '/images/product3.jpg',
                'name' => 'Denim Jacket',
                'description' => 'Classic fit, all-season.',
                'price' => 129,
                'category' => 'men',
            ],
            [
                'image' => '/images/product4.jpg',
                'name' => 'Summer Shorts',
                'description' => 'Lightweight and cool.',
                'price' => 59,
                'category' => 'women',
            ],
            [
                'image' => '/images/product5.jpg',
                'name' => 'Linen Shirt',
                'description' => 'Breathable, elegant, timeless.',
                'price' => 109,
                'category' => 'women',
            ],
            [
                'image' => '/images/product6.jpg',
                'name' => 'Slim Jeans',
                'description' => 'Perfect fit, premium denim.',
                'price' => 139,
                'category' => 'women',
            ],
            [
                'image' => '/images/product7.jpg',
                'name' => 'Oversized Hoodie',
                'description' => 'Cozy, soft, and stylish.',
                'price' => 79,
                'category' => 'kids',
            ],
            [
                'image' => '/images/product8.jpg',
                'name' => 'Tailored Blazer',
                'description' => 'Sharp, modern silhouette.',
                'price' => 199,
                'category' => 'kids',
            ],
        ];
        // Filter by category if set
        $filtered = $cat ? array_filter($products, fn($p) => $p['category'] === $cat) : $products;

        // Filter by search query if set
        $q = request('q');
        if ($q) {
            $filtered = array_filter($filtered, function($p) use ($q) {
                return stripos($p['name'], $q) !== false || stripos($p['description'], $q) !== false;
            });
        }

        if ($sort === 'price-asc') {
            usort($filtered, fn($a, $b) => $a['price'] <=> $b['price']);
        } elseif ($sort === 'price-desc') {
            usort($filtered, fn($a, $b) => $b['price'] <=> $a['price']);
        } elseif ($sort === 'new') {
            // With static data, keep original order as "new"; in real data, sort by created_at/featured
        }
    @endphp

    <!-- No Results State -->
    @if (count($filtered) === 0)
        <div class="py-16 text-center">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-accent/10 rounded-full mb-4">
                <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
            <h3 class="text-lg font-playfair font-bold text-text mb-2">No products found</h3>
            <p class="text-muted mb-6">Try adjusting your filters or search terms</p>
            <a href="/shop" class="inline-flex items-center gap-2 px-6 py-3 bg-accent text-white rounded-xl font-semibold hover:bg-black transition-all duration-300 hover:shadow-lg">
                Clear Filters
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        </div>
    @else
        <!-- Product Grid with Scroll Animations -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 md:gap-8">
            @foreach ($filtered as $index => $product)
                <div class="scroll-animate opacity-0" style="animation-delay: {{ $index * 0.1 }}s;">
                    @include('components.product-card', [
                        'image' => $product['image'],
                        'name' => $product['name'],
                        'description' => $product['description'],
                        'price' => $product['price']
                    ])
                </div>
            @endforeach
        </div>
    @endif
</section>
@endsection
