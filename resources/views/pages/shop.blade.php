@extends('layouts.app')

@section('content')
<!-- SHOP HERO / FILTERS -->
<section class="max-w-[1280px] mx-auto px-6 py-12">
    @php $cat = request('category'); @endphp
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6 mb-10">
        <div class="flex gap-4 items-center">
            <a href="/shop" class="px-4 py-2 rounded-full font-semibold transition {{ !$cat ? 'bg-black text-white' : 'bg-gray-100 text-black hover:bg-black hover:text-white' }}">All</a>
            <a href="/shop?category=men" class="px-4 py-2 rounded-full font-semibold transition {{ $cat == 'men' ? 'bg-black text-white' : 'bg-gray-100 text-black hover:bg-black hover:text-white' }}">Men</a>
            <a href="/shop?category=women" class="px-4 py-2 rounded-full font-semibold transition {{ $cat == 'women' ? 'bg-black text-white' : 'bg-gray-100 text-black hover:bg-black hover:text-white' }}">Women</a>
            <a href="/shop?category=kids" class="px-4 py-2 rounded-full font-semibold transition {{ $cat == 'kids' ? 'bg-black text-white' : 'bg-gray-100 text-black hover:bg-black hover:text-white' }}">Kids</a>
        </div>
        <form class="flex items-center gap-2" action="/shop" method="GET">
            <input type="text" name="q" placeholder="Search products..." class="px-4 py-2 border border-gray-200 rounded-full text-sm focus:outline-none focus:border-black bg-gray-50" value="{{ request('q') }}" />
            @if($cat)
                <input type="hidden" name="category" value="{{ $cat }}" />
            @endif
            <button type="submit" class="px-4 py-2 bg-black text-white rounded-full font-semibold hover:bg-[#333] transition">Search</button>
        </form>
    </div>
    <h1 class="text-4xl font-extrabold mb-6">Shop</h1>
    <p class="text-gray-500 mb-8">Discover our latest collection of premium fashion essentials for every style.</p>
</section>

<!-- PRODUCT GRID -->
<section class="max-w-[1280px] mx-auto px-6 pb-20">
    @php
        $products = [
            [
                'image' => '/images/product1.jpg',
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
    @endphp
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
</section>
@endsection
