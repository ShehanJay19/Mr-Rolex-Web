@extends('layouts.app')

@section('content')
<section class="max-w-[1280px] mx-auto px-6 py-16 grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
    <!-- Product Image -->
    <div class="flex justify-center items-center">
        <img src="/images/product1.jpg" alt="Classic T-Shirt" class="rounded-xl border border-[#E5E5E5] shadow-lg w-full max-w-[480px] object-cover" style="max-height:520px;">
    </div>
    <!-- Product Details -->
    <div class="flex flex-col gap-8">
        <div>
            <h1 class="text-4xl font-extrabold mb-2">Classic T-Shirt</h1>
            <span class="text-lg text-gray-500 font-serif mb-4 block">Premium cotton, modern fit.</span>
            <span class="text-2xl font-bold text-black mb-6 block">$99</span>
        </div>
        <div class="flex gap-4 items-center">
            <span class="text-sm text-gray-500">Size:</span>
            <button class="px-4 py-2 border rounded-full hover:bg-black hover:text-white transition">S</button>
            <button class="px-4 py-2 border rounded-full hover:bg-black hover:text-white transition">M</button>
            <button class="px-4 py-2 border rounded-full hover:bg-black hover:text-white transition">L</button>
            <button class="px-4 py-2 border rounded-full hover:bg-black hover:text-white transition">XL</button>
        </div>
        <div class="flex gap-4 items-center">
            <span class="text-sm text-gray-500">Color:</span>
            <span class="inline-block w-6 h-6 rounded-full bg-gray-900 border-2 border-black"></span>
            <span class="inline-block w-6 h-6 rounded-full bg-gray-300 border-2 border-gray-400"></span>
        </div>
        <button class="mt-6 px-8 py-4 bg-black text-white rounded-full text-lg font-bold hover:bg-[#333] transition w-fit">Add to Cart</button>
        <div class="mt-8">
            <h2 class="text-lg font-bold mb-2">Product Details</h2>
            <ul class="list-disc list-inside text-gray-600 space-y-1">
                <li>100% premium cotton</li>
                <li>Modern, relaxed fit</li>
                <li>Machine washable</li>
                <li>Made for all seasons</li>
            </ul>
        </div>
    </div>
</section>
@endsection
