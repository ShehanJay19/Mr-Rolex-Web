@extends('layouts.app')

@section('content')
<section class="max-w-[1280px] mx-auto px-6 py-16">
    <h1 class="text-4xl font-extrabold mb-10">My Wishlist</h1>
    @php
        $wishlist = [
            [
                'image' => '/images/product2.jpg',
                'name' => 'Modern Polo',
                'description' => 'Soft, stylish, and comfortable.',
                'price' => 89
            ],
            [
                'image' => '/images/product5.jpg',
                'name' => 'Linen Shirt',
                'description' => 'Breathable, elegant, timeless.',
                'price' => 109
            ],
        ];
    @endphp
    @if(count($wishlist))
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-10">
            @foreach ($wishlist as $product)
                <div class="relative group">
                    @include('components.product-card', [
                        'image' => $product['image'],
                        'name' => $product['name'],
                        'description' => $product['description'],
                        'price' => $product['price']
                    ])
                    <button class="remove-from-wishlist absolute top-4 right-4 bg-white border border-gray-200 rounded-full p-2 shadow hover:bg-red-100 transition" data-product-name="{{ $product['name'] }}">
                        <svg class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 20 20"><path d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"/></svg>
                    </button>
                </div>
            @endforeach
        </div>
    @else
        <div class="bg-white rounded-xl shadow-lg p-12 text-center text-gray-500 text-lg">
            <svg class="mx-auto mb-4" width="48" height="48" fill="none" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41 0.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" fill="#F87171"/></svg>
            Your wishlist is empty.
        </div>
    @endif
</section>
@endsection
