@extends('layouts.app')

@section('content')
@php
    $products = [
        ['name' => 'Classic T-Shirt', 'subtitle' => 'Premium cotton', 'price' => 99, 'image' => '/images/product1.jpg', 'url' => '/product', 'category' => 'men', 'sizes' => ['s','m','l'], 'color' => 'black', 'is_new' => true],
        ['name' => 'Modern Polo', 'subtitle' => 'Soft pique', 'price' => 89, 'image' => '/images/product2.jpg', 'url' => '/product', 'category' => 'men', 'sizes' => ['m','l'], 'color' => 'navy'],
        ['name' => 'Denim Jacket', 'subtitle' => 'Seasonless layer', 'price' => 129, 'image' => '/images/product3.jpg', 'url' => '/product', 'category' => 'men', 'sizes' => ['m','l','xl'], 'color' => 'stone'],
        ['name' => 'Summer Shorts', 'subtitle' => 'Lightweight', 'price' => 59, 'image' => '/images/product4.jpg', 'url' => '/product', 'category' => 'women', 'sizes' => ['s','m'], 'color' => 'olive'],
        ['name' => 'Linen Shirt', 'subtitle' => 'Breathable', 'price' => 109, 'image' => '/images/product5.jpg', 'url' => '/product', 'category' => 'women', 'sizes' => ['s','m','l'], 'color' => 'white'],
        ['name' => 'Slim Jeans', 'subtitle' => 'Premium denim', 'price' => 139, 'image' => '/images/product6.jpg', 'url' => '/product', 'category' => 'women', 'sizes' => ['m','l','xl'], 'color' => 'denim'],
        ['name' => 'Kids Hoodie', 'subtitle' => 'Soft fleece', 'price' => 45, 'image' => '/images/product7.jpg', 'url' => '/product', 'category' => 'kids', 'sizes' => ['s','m'], 'color' => 'black'],
        ['name' => 'Tailored Blazer', 'subtitle' => 'Sharp silhouette', 'price' => 199, 'image' => '/images/product8.jpg', 'url' => '/product', 'category' => 'kids', 'sizes' => ['m','l'], 'color' => 'navy'],
    ];

    $category = request('category');
    $size = request('size');
    $min = (int) request('min', 0);
    $max = (int) request('max', 0);
    $q = trim(request('q', ''));

    $filtered = array_filter($products, function ($p) use ($category, $size, $min, $max, $q) {
        if ($category && $p['category'] !== $category) return false;
        if ($size && !in_array($size, $p['sizes'])) return false;
        if ($min && $p['price'] < $min) return false;
        if ($max && $p['price'] > $max) return false;
        if ($q && stripos($p['name'], $q) === false && stripos($p['subtitle'], $q) === false) return false;
        return true;
    });

    $activeCount = count($filtered);
@endphp

<section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12 space-y-12">
    <!-- Hero -->
    <div class="relative overflow-hidden rounded-3xl bg-gradient-to-br from-black via-[#111] to-[#1a1a1a] text-white px-6 py-12 lg:px-12 lg:py-14 shadow-2xl">
        <div class="grid lg:grid-cols-[1.1fr_0.9fr] gap-10 items-center">
            <div class="space-y-5">
                <span class="inline-flex items-center gap-2 text-[11px] uppercase tracking-[0.3em] text-white/70 bg-white/10 px-3 py-1 rounded-full">Curated drops</span>
                <h1 class="text-4xl md:text-5xl font-extrabold leading-tight">Tailored edits for men, women, and kids.</h1>
                <p class="text-white/70 max-w-2xl">Precision fits, breathable fabrics, and silhouettes that layer effortlessly. Filter by category, size, and price to find your next signature pieces.</p>
                <div class="flex flex-wrap gap-3">
                    <a href="/shop" class="px-5 py-3 bg-white text-black rounded-full text-sm font-semibold hover:bg-muted/20 transition">Shop all</a>
                    <a href="#filters" class="px-4 py-3 border border-white/30 text-white rounded-full text-sm font-semibold hover:border-white transition">Jump to filters</a>
                </div>
                <div class="flex gap-2 text-xs text-white/70">
                    <span class="px-3 py-1 rounded-full bg-white/10">Men</span>
                    <span class="px-3 py-1 rounded-full bg-white/10">Women</span>
                    <span class="px-3 py-1 rounded-full bg-white/10">Kids</span>
                </div>
            </div>
            <div class="relative h-full">
                <div class="absolute inset-0 rounded-2xl overflow-hidden ring-1 ring-white/10 shadow-2xl">
                    <img src="/images/hero_img.png" alt="Collection feature" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/10 to-transparent"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filters + summary -->
    <div id="filters" class="space-y-4">
        <form method="GET" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-3 bg-white border border-border rounded-2xl p-4 shadow-sm">
            <input type="text" name="q" value="{{ $q }}" placeholder="Search products" class="w-full border border-border rounded-lg px-3 py-2 text-sm focus:outline-none focus:border-accent" />

            <div class="flex gap-2">
                <select name="category" class="w-full border border-border rounded-lg px-3 py-2 text-sm focus:outline-none focus:border-accent">
                    <option value="">All categories</option>
                    <option value="men" @selected($category==='men')>Men</option>
                    <option value="women" @selected($category==='women')>Women</option>
                    <option value="kids" @selected($category==='kids')>Kids</option>
                </select>
                <select name="size" class="w-full border border-border rounded-lg px-3 py-2 text-sm focus:outline-none focus:border-accent">
                    <option value="">Any size</option>
                    <option value="s" @selected($size==='s')>S</option>
                    <option value="m" @selected($size==='m')>M</option>
                    <option value="l" @selected($size==='l')>L</option>
                    <option value="xl" @selected($size==='xl')>XL</option>
                </select>
            </div>

            <div class="flex gap-2 items-center">
                <input type="number" name="min" value="{{ $min ?: '' }}" min="0" placeholder="Min $" class="w-full border border-border rounded-lg px-3 py-2 text-sm focus:outline-none focus:border-accent" />
                <span class="text-muted text-sm">–</span>
                <input type="number" name="max" value="{{ $max ?: '' }}" min="0" placeholder="Max $" class="w-full border border-border rounded-lg px-3 py-2 text-sm focus:outline-none focus:border-accent" />
            </div>

            <div class="flex gap-2 justify-end">
                <a href="{{ route('collection') }}" class="px-4 py-2 border border-border rounded-lg text-sm font-semibold hover:border-text">Clear</a>
                <button type="submit" class="px-4 py-2 bg-accent text-white rounded-lg text-sm font-semibold hover:bg-[#111]">Apply</button>
            </div>
        </form>

        <div class="grid sm:grid-cols-3 gap-3">
            <div class="bg-white border border-border rounded-xl p-4 shadow-sm">
                <p class="text-xs text-muted uppercase tracking-[0.15em]">Showing</p>
                <p class="text-2xl font-bold">{{ $activeCount }} item{{ $activeCount === 1 ? '' : 's' }}</p>
            </div>
            <div class="bg-white border border-border rounded-xl p-4 shadow-sm">
                <p class="text-xs text-muted uppercase tracking-[0.15em]">Categories</p>
                <p class="text-sm text-text">Men · Women · Kids</p>
            </div>
            <div class="bg-white border border-border rounded-xl p-4 shadow-sm">
                <p class="text-xs text-muted uppercase tracking-[0.15em]">Price range</p>
                <p class="text-sm text-text">Filter with min / max</p>
            </div>
        </div>
    </div>

    <!-- Product grid -->
    <x-product-grid :products="$filtered" />

    <!-- Curated edits -->
    <div class="space-y-4">
        <div class="flex items-center justify-between">
            <h2 class="text-2xl font-bold text-text">Curated edits</h2>
            <a href="/shop" class="text-sm font-semibold underline underline-offset-4 hover:text-text">View all products</a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <x-collection-card title="Monochrome Tailored" tagline="Sharp lines, structure, and clean shirting." image="/images/collection1.jpg" href="/shop" />
            <x-collection-card title="Soft Utility" tagline="Elevated workwear with breathable twill." image="/images/collection2.jpg" href="/shop" />
            <x-collection-card title="Evening Minimal" tagline="Refined layers with subtle sheen." image="/images/collection3.jpg" href="/shop" />
        </div>
    </div>
</section>
@endsection