@extends('layouts.app')

@section('content')
<section class="max-w-[1280px] mx-auto px-6 py-16 space-y-12">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
        <div class="space-y-4">
            <p class="text-sm uppercase tracking-[0.2em] text-muted">Featured Collection</p>
            <h1 class="text-4xl font-extrabold">Curated Looks</h1>
            <p class="text-muted max-w-xl">Discover our seasonal picks crafted with premium fabrics and minimalist silhouettes. Clean lines, strong structure, and versatile layers for every day.</p>
            <a href="/shop" class="inline-flex items-center gap-3 px-6 py-3 bg-accent text-white rounded-full font-semibold hover:bg-[#333] transition">Shop All</a>
        </div>
        <div class="grid grid-cols-2 gap-4">
            <img src="/images/collection1.jpg" alt="Collection look" class="h-64 w-full object-cover rounded-xl border border-border">
            <img src="/images/collection2.jpg" alt="Collection look" class="h-64 w-full object-cover rounded-xl border border-border">
            <img src="/images/collection3.jpg" alt="Collection look" class="h-64 w-full object-cover rounded-xl border border-border col-span-2">
        </div>
    </div>

    <div class="space-y-6">
        <div class="flex items-center justify-between">
            <h2 class="text-2xl font-bold">Shop the edit</h2>
            <a href="/shop" class="text-sm font-semibold underline">View all</a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-10">
            @php
                $collectionProducts = [
                    ['image' => '/images/product1.jpg', 'name' => 'Classic T-Shirt', 'description' => 'Premium cotton, modern fit.', 'price' => 99],
                    ['image' => '/images/product2.jpg', 'name' => 'Modern Polo', 'description' => 'Soft, stylish, and comfortable.', 'price' => 89],
                    ['image' => '/images/product3.jpg', 'name' => 'Denim Jacket', 'description' => 'Classic fit, all-season.', 'price' => 129],
                    ['image' => '/images/product4.jpg', 'name' => 'Summer Shorts', 'description' => 'Lightweight and cool.', 'price' => 59],
                ];
            @endphp
            @foreach ($collectionProducts as $product)
                @include('components.product-card', [
                    'image' => $product['image'],
                    'name' => $product['name'],
                    'description' => $product['description'],
                    'price' => $product['price']
                ])
            @endforeach
        </div>
    </div>
</section>
@endsection
