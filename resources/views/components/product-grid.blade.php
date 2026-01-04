@props([
    'products' => [],
])

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    @forelse ($products as $index => $product)
        <div class="scroll-animate opacity-0" style="animation-delay: {{ $index * 0.1 }}s;">
            <x-product-card :product="$product" />
        </div>
    @empty
        <div class="col-span-full flex flex-col items-center justify-center text-center py-14 border border-dashed border-border rounded-xl">
            <h3 class="text-lg font-semibold mb-1 text-black">No products match these filters</h3>
            <p class="text-sm text-muted">Try adjusting the filters or clearing them.</p>
        </div>
    @endforelse
</div>