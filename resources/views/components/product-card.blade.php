@props([
    'product' => [
        'name' => '',
        'subtitle' => '',
        'price' => '',
        'image' => '',
        'images' => [], // optional array
        'url' => '#',
        'is_new' => false,
    ],
    'showWishlist' => true,
    'showAddToCart' => true,
])

@php
    $mainImage = !empty($product['images'])
        ? $product['images'][0]
        : $product['image'];
@endphp

<article
    class="group bg-white border border-border rounded-xl overflow-hidden
           shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col">

    <!-- Image -->
    <div class="relative aspect-[3/4] w-full overflow-hidden">
        <img src="{{ $mainImage }}"
             alt="{{ $product['name'] }}"
             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">

        {{-- Badge --}}
        @if($product['is_new'])
            <span class="absolute top-3 left-3 bg-black/80 text-white text-xs px-3 py-1 rounded-full">
                New
            </span>
        @endif

        {{-- Wishlist --}}
        @if($showWishlist)
            <button
                class="absolute top-3 right-3 p-2 rounded-full bg-white/90 hover:bg-red-100 transition"
                title="Add to Wishlist"
                data-product-name="{{ $product['name'] }}"
                data-product-price="{{ $product['price'] }}"
                data-product-image="{{ $mainImage }}"
            >
                <svg class="w-4 h-4 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"/>
                </svg>
            </button>
        @endif
    </div>

    <!-- Content -->
    <div class="p-5 flex flex-col flex-1 gap-2">

        <div>
            <h3 class="font-semibold text-lg text-black leading-tight group-hover:underline">
                {{ $product['name'] }}
            </h3>

            @if(!empty($product['subtitle']))
                <p class="text-sm text-muted mt-1">
                    {{ $product['subtitle'] }}
                </p>
            @endif
        </div>

        <!-- Footer -->
        <div class="mt-auto flex items-center justify-between gap-3">
            <span class="text-lg font-semibold text-black">
                ${{ $product['price'] }}
            </span>

            <div class="flex items-center gap-2">
                <a href="{{ $product['url'] }}"
                   class="px-4 py-2 border border-border rounded text-xs font-semibold
                          hover:bg-black hover:text-white transition">
                    View
                </a>

                @if($showAddToCart)
                    <button
                        class="add-to-cart px-4 py-2 bg-green-600 text-white rounded
                               hover:bg-green-700 transition text-xs font-semibold"
                        data-product-name="{{ $product['name'] }}"
                        data-product-price="{{ $product['price'] }}"
                        data-product-image="{{ $mainImage }}"
                    >
                        Add
                    </button>
                @endif
            </div>
        </div>
    </div>
</article>
