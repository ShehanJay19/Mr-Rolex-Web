@extends('layouts.app')

@section('content')
@php
    $products = [
        [
        'id' => 21,
        'name' => 'Men Polo Collar T-Shirt',
        'category' => 'Men',
        'type' => 'Topwear',
        'price' => 160,
        'image' => ['/images/p_img22.png']
    ],
    [
        'id' => 22,
        'name' => 'Girls Hooded Sweatshirt',
        'category' => 'Kids',
        'type' => 'Topwear',
        'price' => 140,
        'image' => ['/images/p_img23.png']
    ],
    [
        'id' => 23,
        'name' => 'Men Track Pants',
        'category' => 'Men',
        'type' => 'Bottomwear',
        'price' => 180,
        'image' => ['/images/p_img24.png']
    ],
    [
        'id' => 24,
        'name' => 'Women Palazzo Pants',
        'category' => 'Women',
        'type' => 'Bottomwear',
        'price' => 170,
        'image' => ['/images/p_img25.png']
    ],
    [
        'id' => 25,
        'name' => 'Girls Cotton Shorts',
        'category' => 'Kids',
        'type' => 'Bottomwear',
        'price' => 100,
        'image' => ['/images/p_img26.png']
    ],
    [
        'id' => 26,
        'name' => 'Men Formal Cotton Shirt',
        'category' => 'Men',
        'type' => 'Topwear',
        'price' => 210,
        'image' => ['/images/p_img27.png']
    ],
    [
        'id' => 27,
        'name' => 'Women Printed Kurti',
        'category' => 'Women',
        'type' => 'Topwear',
        'price' => 230,
        'image' => ['/images/p_img28.png']
    ],
    [
        'id' => 28,
        'name' => 'Girls Ethnic Kurti',
        'category' => 'Kids',
        'type' => 'Topwear',
        'price' => 180,
        'image' => ['/images/p_img29.png']
    ],
    [
        'id' => 29,
        'name' => 'Men Formal Blazer',
        'category' => 'Men',
        'type' => 'Outerwear',
        'price' => 450,
        'image' => ['/images/p_img30.png']
    ],
    [
        'id' => 30,
        'name' => 'Women Winter Jacket',
        'category' => 'Women',
        'type' => 'Outerwear',
        'price' => 380,
        'image' => ['/images/p_img31.png']
    ],
    [
        'id' => 31,
        'name' => 'Girls Woolen Coat',
        'category' => 'Kids',
        'type' => 'Outerwear',
        'price' => 340,
        'image' => ['/images/p_img32.png']
    ],
    [
        'id' => 32,
        'name' => 'Men Denim Jacket',
        'category' => 'Men',
        'type' => 'Outerwear',
        'price' => 420,
        'image' => ['/images/p_img33.png']
    ],
    [
        'id' => 33,
        'name' => 'Women Long Cardigan',
        'category' => 'Women',
        'type' => 'Topwear',
        'price' => 260,
        'image' => ['/images/p_img34.png']
    ],
    [
        'id' => 34,
        'name' => 'Girls Winter Sweater',
        'category' => 'Kids',
        'type' => 'Topwear',
        'price' => 200,
        'image' => ['/images/p_img35.png']
    ],
    [
        'id' => 35,
        'name' => 'Men Cargo Pants',
        'category' => 'Men',
        'type' => 'Bottomwear',
        'price' => 240,
        'image' => ['/images/p_img36.png']
    ],
    [
        'id' => 36,
        'name' => 'Women Stretch Leggings',
        'category' => 'Women',
        'type' => 'Bottomwear',
        'price' => 120,
        'image' => ['/images/p_img37.png']
    ],
    [
        'id' => 37,
        'name' => 'Girls Printed Leggings',
        'category' => 'Kids',
        'type' => 'Bottomwear',
        'price' => 90,
        'image' => ['/images/p_img38.png']
    ],
    [
        'id' => 38,
        'name' => 'Men Sleeveless Vest',
        'category' => 'Men',
        'type' => 'Topwear',
        'price' => 110,
        'image' => ['/images/p_img39.png']
    ],
    [
        'id' => 39,
        'name' => 'Women Ribbed Tank Top',
        'category' => 'Women',
        'type' => 'Topwear',
        'price' => 100,
        'image' => ['/images/p_img40.png']
    ],
    [
        'id' => 40,
        'name' => 'Girls Cotton Tank Top',
        'category' => 'Kids',
        'type' => 'Topwear',
        'price' => 80,
        'image' => ['/images/p_img41.png']
    ],
    [
        'id' => 41,
        'name' => 'Men Winter Coat',
        'category' => 'Men',
        'type' => 'Outerwear',
        'price' => 520,
        'image' => ['/images/p_img42.png']
    ],
    [
        'id' => 42,
        'name' => 'Women Long Winter Coat',
        'category' => 'Women',
        'type' => 'Outerwear',
        'price' => 480,
        'image' => ['/images/p_img43.png']
    ],
    [
        'id' => 43,
        'name' => 'Girls Winter Jacket',
        'category' => 'Kids',
        'type' => 'Outerwear',
        'price' => 360,
        'image' => ['/images/p_img44.png']
    ],
    [
        'id' => 44,
        'name' => 'Men Cotton Night Suit',
        'category' => 'Men',
        'type' => 'Loungewear',
        'price' => 190,
        'image' => ['/images/p_img45.png']
    ],
    [
        'id' => 45,
        'name' => 'Women Printed Nightwear',
        'category' => 'Women',
        'type' => 'Loungewear',
        'price' => 180,
        'image' => ['/images/p_img46.png']
    ],
    [
        'id' => 46,
        'name' => 'Girls Night Dress',
        'category' => 'Kids',
        'type' => 'Loungewear',
        'price' => 150,
        'image' => ['/images/p_img47.png']
    ],
    [
        'id' => 47,
        'name' => 'Men Ankle Socks (Pack)',
        'category' => 'Men',
        'type' => 'Accessories',
        'price' => 70,
        'image' => ['/images/p_img48.png']
    ],
    [
        'id' => 48,
        'name' => 'Women Silk Scarf',
        'category' => 'Women',
        'type' => 'Accessories',
        'price' => 90,
        'image' => ['/images/p_img49.png']
    ],
    [
        'id' => 49,
        'name' => 'Girls Hair Accessories Set',
        'category' => 'Kids',
        'type' => 'Accessories',
        'price' => 60,
        'image' => ['/images/p_img50.png']
    ],
    [
        'id' => 50,
        'name' => 'Men Casual Cap',
        'category' => 'Men',
        'type' => 'Accessories',
        'price' => 110,
        'image' => ['/images/p_img51.png']
    ],
    [
        'id' => 51,
        'name' => 'Women Leather Handbag',
        'category' => 'Women',
        'type' => 'Accessories',
        'price' => 420,
        'image' => ['/images/p_img52.png']
    ],
    [
        'id' => 52,
        'name' => 'Girls Mini Backpack',
        'category' => 'Kids',
        'type' => 'Accessories',
        'price' => 260, 
        'image' => ['/images/p_img53.png']
    ],
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