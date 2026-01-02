@extends('layouts.app')

@section('content')

<!-- HERO SECTION -->
<section class="max-w-[1280px] mx-auto border border-border">

    <div class="grid grid-cols-1 md:grid-cols-2 min-h-[600px]">

        <!-- LEFT : TEXT CONTENT -->
        <div class="flex flex-col justify-center
                    px-6 py-16
                    md:border-r md:border-border
                    bg-white z-10">

            <h1 class="text-5xl md:text-6xl font-extrabold leading-tight">
                NEW <br> COLLECTION
            </h1>

            <p class="mt-4 text-muted text-lg">
                Summer 2024
            </p>

            <a href="/shop"
               class="mt-8 inline-flex items-center gap-3
                      border border-border px-6 py-3 w-fit
                      hover:bg-black hover:text-white transition">
                Go To Shop →
            </a>
        </div>

        <!-- RIGHT : IMAGE WITH OVERLAY -->
        <div class="relative w-full h-full">

            <!-- IMAGE -->
            <img src="/images/hero_img.png"
                 alt="Hero Image"
                 class="absolute inset-0 w-full h-full object-cover">

            <!-- GRADIENT OVERLAY -->
            <div class="absolute inset-0
                        bg-gradient-to-l
                        from-black/40 via-black/20 to-transparent">
            </div>

            <!-- OVERLAY TEXT -->
            <div class="absolute bottom-10 left-10 text-white">
                <p class="text-sm uppercase tracking-widest">
                    Trending
                </p>
                <h2 class="text-3xl font-bold">
                    Urban Style
                </h2>
            </div>

        </div>

    </div>

</section>



<!-- NEW THIS WEEK -->
<section class="max-w-[1280px] mx-auto px-6 py-16">

    <!-- Section Header -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-12">
        <h2 class="text-3xl md:text-4xl font-bold tracking-tight">
            NEW THIS WEEK
            <span class="ml-2 text-sm text-muted">(50)</span>
        </h2>

        <a href="/shop"
           class="text-sm text-muted hover:text-black transition underline-offset-4 hover:underline">
            View All →
        </a>
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

    <!-- Product Grid -->
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6 md:gap-8">
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
