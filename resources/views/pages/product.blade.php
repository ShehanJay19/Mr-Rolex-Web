@extends('layouts.app')

@section('content')
<section class="max-w-[1280px] mx-auto px-6 py-16 grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
    <!-- Product Image -->
    <div class="flex justify-center items-center">
        <img src="/images/product1.jpg" alt="Classic T-Shirt" class="rounded-xl border border-border shadow-lg w-full max-w-[480px] object-cover" style="max-height:520px;">
    </div>
    <!-- Product Details -->
    <div class="flex flex-col gap-8">
        <div>
            <h1 class="text-4xl font-extrabold mb-2">Classic T-Shirt</h1>
            <span class="text-lg text-muted font-serif mb-4 block">Premium cotton, modern fit.</span>
            <span class="text-2xl font-bold text-text mb-6 block">$99</span>
        </div>
        <div class="flex gap-4 items-center">
            <span class="text-sm text-muted">Size:</span>
            <button class="px-4 py-2 border border-border rounded-full hover:bg-accent hover:text-white transition">S</button>
            <button class="px-4 py-2 border border-border rounded-full hover:bg-accent hover:text-white transition">M</button>
            <button class="px-4 py-2 border border-border rounded-full hover:bg-accent hover:text-white transition">L</button>
            <button class="px-4 py-2 border border-border rounded-full hover:bg-accent hover:text-white transition">XL</button>
        </div>
        <div class="flex gap-4 items-center">
            <span class="text-sm text-muted">Color:</span>
            <span class="inline-block w-6 h-6 rounded-full bg-gray-900 border-2 border-accent"></span>
            <span class="inline-block w-6 h-6 rounded-full bg-gray-300 border-2 border-border"></span>
        </div>
        <button
            class="add-to-cart mt-6 px-8 py-4 bg-accent text-white rounded-full text-lg font-bold hover:bg-[#333] transition w-fit"
            data-product-name="Classic T-Shirt"
            data-product-price="99"
            data-product-image="/images/product1.jpg"
            data-product-description="Premium cotton, modern fit."
        >Add to Cart</button>
        <div class="mt-8">
            <h2 class="text-lg font-bold mb-2">Product Details</h2>
            <ul class="list-disc list-inside text-muted space-y-1">
                <li>100% premium cotton</li>
                <li>Modern, relaxed fit</li>
                <li>Machine washable</li>
                <li>Made for all seasons</li>
            </ul>
        </div>
    </div>
</section>
@endsection
