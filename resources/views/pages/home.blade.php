@extends('layouts.app')

@section('content')

<!-- HERO SECTION -->
<section class="relative max-w-[1280px] mx-auto border border-border overflow-hidden">
    <div class="grid grid-cols-1 md:grid-cols-2 min-h-[500px] md:min-h-[600px]">

        <!-- LEFT : TEXT CONTENT -->
        <div class="flex flex-col justify-center px-6 sm:px-8 md:px-12 py-12 md:py-16 md:border-r md:border-border bg-white z-10 order-2 md:order-1">
            <div class="space-y-6 max-w-md">
                <div>
                    <p class="text-xs sm:text-sm uppercase tracking-[0.2em] text-muted font-medium mb-3">Spring / Summer 2024</p>
                    <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold leading-[1.1] tracking-tight">
                        NEW <br> COLLECTION
                    </h1>
                </div>
                <p class="text-base sm:text-lg text-muted leading-relaxed">
                    Discover our latest arrivals. Premium quality, timeless design, crafted for the modern lifestyle.
                </p>
                <div class="flex flex-col sm:flex-row gap-3">
                    <a href="/shop"
                       class="inline-flex items-center justify-center gap-2 bg-accent text-white px-8 py-3.5 hover:bg-black transition-all duration-200 font-medium focus:outline-none focus:ring-2 focus:ring-accent focus:ring-offset-2">
                        Explore Now
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                    <a href="/collection"
                       class="inline-flex items-center justify-center gap-2 border-2 border-accent text-accent px-8 py-3.5 hover:bg-accent hover:text-white transition-all duration-200 font-medium focus:outline-none focus:ring-2 focus:ring-accent focus:ring-offset-2">
                        View Collections
                    </a>
                </div>
            </div>
        </div>

        <!-- RIGHT : IMAGE WITH OVERLAY -->
        <div class="relative w-full min-h-[400px] md:min-h-full order-1 md:order-2">
            <img src="/images/hero_img.png"
                 alt="New Collection Spring Summer 2024"
                 loading="eager"
                 class="absolute inset-0 w-full h-full object-cover">

            <div class="absolute inset-0 bg-gradient-to-t md:bg-gradient-to-l from-black/50 via-black/20 to-transparent"></div>

            <!-- Badge -->
            <div class="absolute top-6 right-6 bg-white/95 backdrop-blur-sm px-4 py-2 rounded-full shadow-lg">
                <p class="text-xs font-semibold uppercase tracking-wider text-accent">New Season</p>
            </div>

            <!-- Bottom Text -->
            <div class="absolute bottom-6 left-6 text-white space-y-1">
                <p class="text-xs uppercase tracking-[0.15em] font-medium opacity-90">Trending Now</p>
                <h2 class="text-2xl md:text-3xl font-bold">Urban Elegance</h2>
            </div>
        </div>

    </div>
</section>

<!-- NEW THIS WEEK -->
<section class="max-w-[1280px] mx-auto px-4 sm:px-6 py-12 md:py-16">

    <!-- Section Header -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-8 md:mb-12">
        <div>
            <h2 class="text-3xl md:text-4xl font-bold tracking-tight">
                NEW THIS WEEK
            </h2>
            <p class="text-sm text-muted mt-2">Fresh arrivals every week. 52 new products available now.</p>
        </div>
        <a href="/shop" class="text-sm font-medium text-accent hover:text-black transition-colors underline-offset-4 hover:underline focus:outline-none focus:ring-2 focus:ring-accent rounded px-2 py-1">
            View All Products →
        </a>
    </div>

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
    ]

        ];
    @endphp

    <!-- Product Grid -->
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6 md:gap-8">
    @foreach ($products as $product)
        <x-product-card
            :product="[
                'name' => $product['name'],
                'subtitle' => $product['type'],
                'price' => $product['price'],
                'images' => $product['image'],
                'url' => '/product/' . $product['id'],
                'is_new' => true
            ]"
        />
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
            ['image' => '/images/p_img2.png', 'title' => "Men's Collection"],
            ['image' => '/images/p_img3.png', 'title' => "Women's Collection"],
            ['image' => '/images/p_img4.png', 'title' => "Kids' Collection"],
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
            <img src="/images/p_img1.png" class="h-60 object-cover" alt="">
            <img src="/images/p_img2_1.png" class="h-60 object-cover" alt="">
            <img src="/images/p_img3.png" class="h-60 object-cover" alt="">
            <img src="/images/p_img7.png" class="h-60 object-cover" alt="">
        </div>
    </div>
</section>

@endsection
