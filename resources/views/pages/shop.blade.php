@extends('layouts.app')

@section('content')
<!-- SHOP HERO / FILTERS -->
<section class="max-w-[1280px] mx-auto px-6 py-12">
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6 mb-10">
        <div class="flex gap-4 items-center">
            <button class="px-4 py-2 rounded-full bg-black text-white font-semibold hover:bg-[#333] transition">All</button>
            <button class="px-4 py-2 rounded-full bg-gray-100 text-black font-semibold hover:bg-black hover:text-white transition">Men</button>
            <button class="px-4 py-2 rounded-full bg-gray-100 text-black font-semibold hover:bg-black hover:text-white transition">Women</button>
            <button class="px-4 py-2 rounded-full bg-gray-100 text-black font-semibold hover:bg-black hover:text-white transition">Kids</button>
        </div>
        <form class="flex items-center gap-2" action="/shop" method="GET">
            <input type="text" name="q" placeholder="Search products..." class="px-4 py-2 border border-gray-200 rounded-full text-sm focus:outline-none focus:border-black bg-gray-50" />
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
                'price' => 99
            ],
            [
                'image' => '/images/product2.jpg',
                'name' => 'Modern Polo',
                'description' => 'Soft, stylish, and comfortable.',
                'price' => 89
            ],
            [
                'image' => '/images/product3.jpg',
                'name' => 'Denim Jacket',
                'description' => 'Classic fit, all-season.',
                'price' => 129
            ],
            [
                'image' => '/images/product4.jpg',
                'name' => 'Summer Shorts',
                'description' => 'Lightweight and cool.',
                'price' => 59
            ],
            [
                'image' => '/images/product5.jpg',
                'name' => 'Linen Shirt',
                'description' => 'Breathable, elegant, timeless.',
                'price' => 109
            ],
            [
                'image' => '/images/product6.jpg',
                'name' => 'Slim Jeans',
                'description' => 'Perfect fit, premium denim.',
                'price' => 139
            ],
            [
                'image' => '/images/product7.jpg',
                'name' => 'Oversized Hoodie',
                'description' => 'Cozy, soft, and stylish.',
                'price' => 79
            ],
            [
                'image' => '/images/product8.jpg',
                'name' => 'Tailored Blazer',
                'description' => 'Sharp, modern silhouette.',
                'price' => 199
            ],
        ];
    @endphp
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-10">
        @foreach ($products as $product)
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
