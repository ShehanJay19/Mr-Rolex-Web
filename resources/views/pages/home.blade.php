@extends('layouts.app')

@section('content')

<!-- HERO SECTION -->
<section class="max-w-[1280px] mx-auto px-6 py-16 grid grid-cols-1 md:grid-cols-2 gap-10">
    
    <!-- Left Content -->
    <div class="flex flex-col justify-center">
        <h1 class="text-5xl font-extrabold leading-tight">
            NEW <br> COLLECTION
        </h1>
        <p class="mt-4 text-muted">Summer 2024</p>

        <a href="/shop" class="mt-8 inline-flex items-center gap-3 border border-border px-6 py-3 w-fit hover:bg-accent hover:text-white transition">
            Go To Shop →
        </a>
    </div>

    <!-- Right Images -->
    <div class="grid grid-cols-2 gap-6">
        <img src="/images/hero1.jpg" class="w-[366px] h-[376px] object-cover border border-border" alt="" style="max-width:100%;height:auto;">
        <img src="/images/hero2.jpg" class="w-[366px] h-[376px] object-cover border border-border" alt="" style="max-width:100%;height:auto;">
    </div>

</section>


<!-- NEW THIS WEEK -->
<section class="max-w-[1280px] mx-auto px-6 py-16">
    
    <div class="flex justify-between items-center mb-10">
        <h2 class="text-3xl font-bold">
            NEW THIS WEEK <span class="text-sm text-muted">(50)</span>
        </h2>
        <span class="text-sm text-muted">View All</span>
    </div>

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
        ];
    @endphp
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
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


<!-- XIV COLLECTIONS -->
<section class="max-w-[1280px] mx-auto px-6 py-16">

    <div class="flex justify-between items-center mb-8">
        <h2 class="text-3xl font-bold">XIV COLLECTIONS 23–24</h2>

        <div class="flex gap-6 text-sm text-muted">
            <button class="font-semibold text-text">All</button>
            <button>Men</button>
            <button>Women</button>
            <button>Kids</button>
        </div>
    </div>

    @php
        $collections = [
            [
                'image' => '/images/collection1.jpg',
                'title' => "Men's Collection"
            ],
            [
                'image' => '/images/collection2.jpg',
                'title' => "Women's Collection"
            ],
            [
                'image' => '/images/collection3.jpg',
                'title' => "Kids' Collection"
            ],
        ];
    @endphp
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">
            @foreach ($collections as $collection)
                @include('components.collection-card', [
                    'image' => $collection['image'],
                    'title' => $collection['title']
                ])
            @endforeach
    </div>

</section>


<!-- BRAND STORY -->
<section class="bg-gray-50 py-20">

    <div class="max-w-4xl mx-auto text-center px-6">
        <h2 class="text-3xl font-bold mb-6">
            OUR APPROACH TO <br> FASHION DESIGN
        </h2>

        <p class="text-muted mb-12">
            A global vision, unique creations and a passion for detail. 
            Each design is crafted with creativity and modern aesthetics.
        </p>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <img src="/images/story1.jpg" class="h-60 object-cover" alt="">
            <img src="/images/story2.jpg" class="h-60 object-cover" alt="">
            <img src="/images/story3.jpg" class="h-60 object-cover" alt="">
            <img src="/images/story4.jpg" class="h-60 object-cover" alt="">
        </div>
    </div>

</section>

@endsection
