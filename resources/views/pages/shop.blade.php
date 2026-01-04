@extends('layouts.app')

@section('content')
<!-- SHOP HERO / FILTERS -->
<section class="max-w-[1280px] mx-auto px-4 sm:px-6 py-8 md:py-12">
    @php
        $cat = request('category');
        $sort = request('sort');
        $query = request('q');
    @endphp
    
    <!-- Page Header -->
    <div class="mb-8">
        <h1 class="text-3xl md:text-4xl font-extrabold mb-2">Shop All Products</h1>
        <p class="text-muted text-sm md:text-base">Discover our latest collection of premium fashion essentials for every style.</p>
    </div>

    <!-- Filters Row -->
    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4 md:gap-6 mb-8 md:mb-10">
        
        <!-- Category Pills -->
        <nav class="flex flex-wrap gap-2" role="navigation" aria-label="Product categories">
            <a href="/shop" 
               class="px-4 py-2 rounded-full text-sm font-semibold transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-accent {{ !$cat ? 'bg-accent text-white shadow-md' : 'bg-gray-100 text-text hover:bg-gray-200' }}"
               aria-current="{{ !$cat ? 'page' : 'false' }}">
                All
            </a>
            <a href="/shop?category=men{{ $query ? '&q=' . urlencode($query) : '' }}" 
               class="px-4 py-2 rounded-full text-sm font-semibold transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-accent {{ $cat == 'men' ? 'bg-accent text-white shadow-md' : 'bg-gray-100 text-text hover:bg-gray-200' }}"
               aria-current="{{ $cat == 'men' ? 'page' : 'false' }}">
                Men
            </a>
            <a href="/shop?category=women{{ $query ? '&q=' . urlencode($query) : '' }}" 
               class="px-4 py-2 rounded-full text-sm font-semibold transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-accent {{ $cat == 'women' ? 'bg-accent text-white shadow-md' : 'bg-gray-100 text-text hover:bg-gray-200' }}"
               aria-current="{{ $cat == 'women' ? 'page' : 'false' }}">
                Women
            </a>
            <a href="/shop?category=kids{{ $query ? '&q=' . urlencode($query) : '' }}" 
               class="px-4 py-2 rounded-full text-sm font-semibold transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-accent {{ $cat == 'kids' ? 'bg-accent text-white shadow-md' : 'bg-gray-100 text-text hover:bg-gray-200' }}"
               aria-current="{{ $cat == 'kids' ? 'page' : 'false' }}">
                Kids
            </a>
        </nav>

        <!-- Search & Sort Form -->
        <form class="flex flex-col sm:flex-row items-stretch sm:items-center gap-2" action="/shop" method="GET" role="search">
            @if($cat)
                <input type="hidden" name="category" value="{{ $cat }}" />
            @endif
            
            <div class="relative flex-1 sm:min-w-[200px] sm:max-w-xs">
                <label for="shop-search" class="sr-only">Search products</label>
                <input type="search" 
                       id="shop-search"
                       name="q" 
                       placeholder="Search products..." 
                       class="w-full pl-10 pr-4 py-2 border border-border rounded-full text-sm focus:outline-none focus:border-accent focus:ring-1 focus:ring-accent bg-white transition-colors" 
                       value="{{ $query }}" 
                       aria-label="Search products" />
                <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-muted pointer-events-none" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
            </div>
            
            <label for="sort-select" class="sr-only">Sort products</label>
            <select id="sort-select"
                    name="sort" 
                    class="px-4 py-2 border border-border rounded-full text-sm bg-white focus:outline-none focus:border-accent focus:ring-1 focus:ring-accent transition-colors"
                    aria-label="Sort products">
                <option value="">Sort by</option>
                <option value="new" {{ $sort === 'new' ? 'selected' : '' }}>Newest First</option>
                <option value="price-asc" {{ $sort === 'price-asc' ? 'selected' : '' }}>Price: Low to High</option>
                <option value="price-desc" {{ $sort === 'price-desc' ? 'selected' : '' }}>Price: High to Low</option>
                <option value="name" {{ $sort === 'name' ? 'selected' : '' }}>Name: A-Z</option>
            </select>
            
            <button type="submit" 
                    class="px-6 py-2 bg-accent text-white rounded-full text-sm font-semibold hover:bg-black transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-accent focus:ring-offset-2 whitespace-nowrap">
                Apply Filters
            </button>
        </form>
    </div>

    <!-- Active Filters Display -->
    @if($cat || $query || $sort)
        <div class="flex flex-wrap items-center gap-2 mb-6 pb-6 border-b border-border">
            <span class="text-sm text-muted font-medium">Active filters:</span>
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

<!-- PRODUCT GRID -->
<section class="max-w-[1280px] mx-auto px-6 pb-20">
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
    @if (count($filtered) === 0)
        <div class="bg-canvas border border-border rounded-xl p-8 text-center text-muted">No products match your filters.</div>
    @else
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-10">
            @foreach ($filtered as $product)
                @include('components.product-card', [
                    'image' => $product['image'],
                    'name' => $product['name'],
                    'description' => $product['description'],
                    'price' => $product['price']
                ])
            @endforeach
        </div>
    @endif
</section>
@endsection
