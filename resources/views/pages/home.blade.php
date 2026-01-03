@extends('layouts.app')

@section('content')

<!-- HERO SECTION -->
<section class="max-w-[1280px] mx-auto border border-border">
    <div class="grid grid-cols-1 md:grid-cols-2 min-h-[600px]">

        <!-- LEFT : TEXT CONTENT -->
        <div class="flex flex-col justify-center px-6 py-16 md:border-r md:border-border bg-white z-10">
            <h1 class="text-5xl md:text-6xl font-extrabold leading-tight">
                NEW <br> COLLECTION
            </h1>
            <p class="mt-4 text-muted text-lg">Summer 2024</p>
            <a href="/shop"
               class="mt-8 inline-flex items-center gap-3 border border-border px-6 py-3 w-fit hover:bg-black hover:text-white transition">
                Go To Shop →
            </a>
        </div>

        <!-- RIGHT : IMAGE WITH OVERLAY -->
        <div class="relative w-full h-full">
            <img src="/images/hero_img.png"
                 alt="Hero Image"
                 class="absolute inset-0 w-full h-full object-cover">

            <div class="absolute inset-0 bg-gradient-to-l from-black/40 via-black/20 to-transparent"></div>

            <div class="absolute bottom-10 left-10 text-white">
                <p class="text-sm uppercase tracking-widest">Trending</p>
                <h2 class="text-3xl font-bold">Urban Style</h2>
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
        <a href="/shop" class="text-sm text-muted hover:text-black transition underline-offset-4 hover:underline">
            View All →
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
            @include('components.product-card', [
                'image' => $product['image'][0],
                'name' => $product['name'],
                'description' => $product['type'],
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
            ['image' => '/images/collection1.jpg', 'title' => "Men's Collection"],
            ['image' => '/images/collection2.jpg', 'title' => "Women's Collection"],
            ['image' => '/images/collection3.jpg', 'title' => "Kids' Collection"],
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
