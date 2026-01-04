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
           shadow-sm hover:shadow-2xl hover:-translate-y-1 transition-all duration-500 flex flex-col
           hover:border-accent/30">

    <!-- Image -->
    <div class="relative aspect-[3/4] w-full overflow-hidden bg-gray-100">
        <img src="{{ $mainImage }}"
             alt="{{ $product['name'] }}"
             loading="lazy"
             class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">

        <!-- Overlay on hover -->
        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/5 transition-colors duration-500"></div>

        {{-- Badge --}}
        @if($product['is_new'] ?? false)
            <span class="absolute top-3 left-3 bg-black/90 text-white text-xs font-semibold px-3 py-1.5 rounded-full backdrop-blur-sm
                         shadow-lg animate-fade-in-up">
                New
            </span>
        @endif

        {{-- Wishlist --}}
        @if($showWishlist)
            <button
                class="absolute top-3 right-3 p-2.5 rounded-full bg-white/95 hover:bg-red-50 
                       shadow-md hover:shadow-lg transition-all duration-300 hover:scale-110
                       backdrop-blur-sm border border-white/50"
                title="Add to Wishlist"
                aria-label="Add to wishlist"
                data-product-name="{{ $product['name'] }}"
                data-product-price="{{ $product['price'] }}"
                data-product-image="{{ $mainImage }}"
            >
                <svg class="w-4 h-4 text-red-500" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                    <path d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"/>
                </svg>
            </button>
        @endif

        <!-- Quick View Button (appears on hover) -->
        <div class="absolute inset-x-0 bottom-0 translate-y-full group-hover:translate-y-0 transition-transform duration-500 p-4">
            <a href="{{ $product['url'] ?? '#' }}"
               class="block w-full py-3 bg-white/95 backdrop-blur-sm text-center text-sm font-semibold
                      rounded-lg hover:bg-black hover:text-white transition-all duration-300
                      shadow-lg border border-white/50">
                Quick View
            </a>
        </div>
    </div>

    <!-- Content -->
    <div class="p-5 flex flex-col flex-1 gap-3">

        <div>
            <h3 class="font-bold text-lg text-black leading-tight group-hover:text-accent transition-colors duration-300">
                {{ $product['name'] }}
            </h3>

            @if(!empty($product['subtitle']))
                <p class="text-sm text-muted mt-1.5 line-clamp-2">
                    {{ $product['subtitle'] }}
                </p>
            @endif
        </div>

        <!-- Footer -->
        <div class="mt-auto flex items-center justify-between gap-3 pt-2 border-t border-border/50">
            <span class="text-xl font-bold text-black" style="font-family: 'Playfair Display', serif;">
                ${{ $product['price'] }}
            </span>

            <div class="flex items-center gap-2">
                @if($showAddToCart)
                    <button
                        class="add-to-cart px-5 py-2.5 bg-accent text-white rounded-lg text-sm font-semibold
                               hover:bg-black transition-all duration-300 
                               hover:shadow-lg hover:scale-105 active:scale-95
                               focus:outline-none focus:ring-2 focus:ring-accent focus:ring-offset-2"
                        data-product-name="{{ $product['name'] }}"
                        data-product-price="{{ $product['price'] }}"
                        data-product-image="{{ $mainImage }}"
                        aria-label="Add {{ $product['name'] }} to cart">
                        Add to Cart
                    </button>
                @endif
            </div>
        </div>
    </div>
</article>
