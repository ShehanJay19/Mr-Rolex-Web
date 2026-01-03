<div class="bg-canvas border border-border rounded-xl overflow-hidden
            shadow-sm hover:shadow-xl transition-all duration-300
            group flex flex-col">

    <!-- Image -->
    <div class="relative aspect-[3/4] w-full overflow-hidden">
        <img src="{{ is_array($image) ? $image[0] : $image }}"
             alt="{{ $name }}"
             class="w-full h-full object-cover
                    transition-transform duration-500
                    group-hover:scale-105">

        <!-- Badge -->
        <span class="absolute top-3 left-3
                     bg-black/80 text-white text-xs
                     px-3 py-1 rounded-full">
            New
        </span>

        <!-- Wishlist (Top Right) -->
        <button
            class="absolute top-3 right-3
                   p-2 rounded-full bg-white/90
                   hover:bg-red-100 transition"
            title="Add to Wishlist"
            data-product-name="{{ $name }}"
            data-product-price="{{ $price }}"
            data-product-image="{{ is_array($image) ? $image[0] : $image }}"
        >
            <svg class="w-4 h-4 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                <path d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"/>
            </svg>
        </button>
    </div>

    <!-- Content -->
    <div class="p-5 flex flex-col flex-1">

        <h3 class="font-serif text-lg font-bold text-text
                   group-hover:text-black transition">
            {{ $name }}
        </h3>

        <!-- Remove description because it doesn’t exist -->
        {{-- <p class="text-xs text-muted mt-1 mb-4">
            {{ $description }}
        </p> --}}

        <!-- Footer -->
        <div class="mt-auto flex items-center justify-between gap-3">

            <span class="font-bold text-lg text-text">
                ${{ $price }}
            </span>

            <div class="flex items-center gap-2">

                <a href="/product"
                   class="px-4 py-2 border border-border
                          rounded text-xs font-semibold
                          hover:bg-black hover:text-white transition">
                    View
                </a>

                <button
                    class="add-to-cart px-4 py-2
                           bg-green-600 text-white rounded
                           hover:bg-green-700 transition
                           text-xs font-semibold"
                    data-product-name="{{ $name }}"
                    data-product-price="{{ $price }}"
                    data-product-image="{{ is_array($image) ? $image[0] : $image }}"
                >
                    Add
                </button>

            </div>
        </div>
    </div>
</div>
