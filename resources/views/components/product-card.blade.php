<div class="bg-canvas border border-border rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group flex flex-col">
    <div class="relative aspect-[3/4] w-full">
        <img src="{{ $image }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300 rounded-t-xl" alt="{{ $name }}">
        <span class="absolute top-3 left-3 bg-black text-white text-xs px-3 py-1 rounded-full opacity-80">New</span>
    </div>
    <div class="p-5 flex-1 flex flex-col justify-between">
        <div>
            <h3 class="font-serif text-lg font-bold mb-1 text-text group-hover:text-black transition">{{ $name }}</h3>
            <p class="text-xs text-muted mb-3">{{ $description }}</p>
        </div>
        <div class="flex items-center justify-between mt-auto gap-2">
            <span class="font-bold text-lg text-text">${{ $price }}</span>
            <a href="/product" class="px-4 py-2 bg-accent text-white rounded hover:bg-[#333] transition text-xs font-semibold">View</a>
            <button
                class="add-to-cart px-3 py-2 bg-green-600 text-white rounded hover:bg-green-700 transition text-xs font-semibold"
                data-product-name="{{ $name }}"
                data-product-price="{{ $price }}"
                data-product-image="{{ $image }}"
                data-product-description="{{ $description }}"
            >Add to Cart</button>
            <button
                class="add-to-wishlist p-2 rounded-full border border-gray-200 bg-white hover:bg-red-100 transition"
                data-product-name="{{ $name }}"
                data-product-price="{{ $price }}"
                data-product-image="{{ $image }}"
                data-product-description="{{ $description }}"
                title="Add to Wishlist"
            >
                <svg class="w-4 h-4 text-red-500" fill="currentColor" viewBox="0 0 20 20"><path d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"/></svg>
            </button>
        </div>
    </div>
</div>
